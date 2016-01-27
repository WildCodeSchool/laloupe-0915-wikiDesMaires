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
        $entity->setNomprojet('Chaudière à bois pour l\'école');
        $entity->setDescription('chaudière à bois déchiqueté de 100 Kw consommation de 70 T annuelles de bois bocager issus de l\'élagage des haies');
        $entity->setDaterealisation(new \DateTime('2013-01-01'));
        $entity->setDuree('3 mois');
        $entity->setGains('des économies importantes grâce au chauffage de 5 bâtiments soit 3 000 m2');
        $entity->setCout('20 000');
        $entity->setFinancement('departement:3;');
        $file = new File(__DIR__.'/../Data/chauffage.jpg');
        $destFile = __DIR__.'/../Data/tmp-chauffagebois.jpg';
        copy($file, $destFile);
        $entity->file = new File($destFile);
        $entity->setUser($em->merge($this->getReference('user-olivier')));
        $em->persist($entity);


        $entity = new Projet();
        $entity->setNomprojet('Chaudière à bois pour l\'école du village et un local avec un conteneur préfabriqué');
        $entity->setDescription('chaudière à bois  de bois bocager issus de l\'élagage des haies ');
        $entity->setDaterealisation(new \DateTime('2014-03-01'));
        $entity->setDuree('3 mois');
        $entity->setGains('des économies importantes grâce au chauffage de 520 m2 de locaux ');
        $entity->setCout('53 000');
        $entity->setFinancement('departement:3;');
        $file = new File(__DIR__.'/../Data/chaudiere.png');
        $destFile = __DIR__.'/../Data/tmp-chaudierebois.png';
        copy($file, $destFile);
        $entity->file = new File($destFile);
        $entity->setUser($em->merge($this->getReference('user-gilbert')));
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