<?php
// src/Wiki\WikiMaireBundle/DataFixtures/ORM/LoadCommuneData.php
namespace Wiki\WikiMaireBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Wiki\WikiMaireBundle\Entity\Projet;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadProjetData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $em)
    {

        $entity = new Projet();
        $entity->setNomprojet('S\'assoir autour d\'une table');
        $entity->setDescription('Blabla bla blabla');
        $entity->setDaterealisation(new \DateTime());
        $entity->setDuree('209');
        $entity->setGains('Benefique pour mes collaborateurs');
        $entity->setCout('20 000');
        $entity->getFinancement();

        $file = new File(__DIR__.'/../Data/projet.jpeg');
        $destFile = __DIR__.'/../Data/tmp-projet.jpeg';
        copy($file, $destFile);
        $entity->file = new File($destFile);
        $entity->setUser($em->merge($this->getReference('user-celine')));
        $em->persist($entity);

        $em->flush();
    }
    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 3;
    }
    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}