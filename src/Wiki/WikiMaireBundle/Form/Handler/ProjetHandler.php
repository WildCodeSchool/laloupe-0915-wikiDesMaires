<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Wiki\WikiMaireBundle\Form\Handler;

use Application\Sonata\UserBundle\Entity\User;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Wiki\WikiMaireBundle\Entity\Projet;
use Wiki\WikiMaireBundle\Form\Model\ProjetModel;


class ProjetHandler
{
    /**
     * @var \Symfony\Component\HttpFoundation\Request
     */
    protected $request;
    /**
     * @var
     */
    protected $entityManager;
    /**
     * @var \Symfony\Component\Form\Form
     */
    protected $form;

    protected $connectedUser;

    protected $cropper;

    /**
     * @param Form                                      $form
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param EntityManager                             $userManager
     */
    public function __construct(Form $form, Request $request, EntityManager $userManager, User $user, $cropper)
    {
        $this->form = $form;
        $this->request = $request;
        $this->entityManager = $userManager;
        $this->connectedUser = $user;
        $this->cropper = $cropper;
    }

    /**
     * @param EntityManager $user
     *
     * @return bool
     */
    public function process(ProjetModel $projet)
    {
        $this->form->setData($projet);

        if ('POST' == $this->request->getMethod()) {
            $this->form->bind($this->request);

            if ($this->form->isValid()) {

                $projet->setUser($this->connectedUser);

                ############ Edit settings ##############
                $DestinationDirectory	= __DIR__.'/../../../../../web/uploads/'; //specify upload directory ends with / (slash)
                $Quality 				= 90; //jpeg quality
                ##########################################

                //Let's check allowed $ImageType, we use PHP SWITCH statement here
                $ext = $projet->file->getMimeType();
                switch(strtolower($projet->file->getMimeType()))
                {
                    case 'image/png':
                        //Create a new image from file
                        $CreatedImage =  imagecreatefrompng($projet->file->getRealPath());
                        break;
                    case 'image/gif':
                        $CreatedImage =  imagecreatefromgif($projet->file->getRealPath());
                        break;
                    case 'image/jpeg':
                    case 'image/pjpeg':
                        $CreatedImage = imagecreatefromjpeg($projet->file->getRealPath());
                        break;
                    default:
                        die('Unsupported File!'); //output error and exit
                }

                // Crop and save image to upload directory
                $cropService = $this->cropper;
                $destImage = uniqid() . '.' . $projet->file->guessExtension();
                if(!$cropService->cropImage($projet->getX(),$projet->getY(),$projet->getW(),$projet->getH(),$DestinationDirectory.$destImage,$CreatedImage,$Quality,$projet->file->getMimeType()))
                {
                    die('Erreur lors du rognage de l\'image');


                }

                $projet->setPhoto($destImage);

                // Create entity project
                $entity = new Projet();
                $entity->setNomprojet($projet->getNomprojet());
                $entity->setDescription($projet->getDescription());
                $entity->setDuree($projet->getDuree());
                $entity->setDaterealisation($projet->getDaterealisation());
                $entity->setGains($projet->getGains());
                $entity->setFinancement($projet->getFinancement());
                $entity->setPhoto($projet->getPhoto());
                $entity->setCout($projet->getCout());
                $entity->setUser($projet->getUser());

                $this->entityManager->persist($entity);
                $this->entityManager->flush();

                return true;
            }
        }

        return false;
    }
}
