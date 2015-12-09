<?php
// src/Wiki\WikiMaireBundle/DataFixtures/ORM/LoadCommuneData.php
namespace Wiki\WikiMaireBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
//use Flyaround\MapBundle\Entity\Fly;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Wiki\WikiMaireBundle\Entity\Commune;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadCommuneData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $em)
    {
        $stream = fopen(__DIR__.'/../Data/commune.csv', 'r');
        while ($line = fgets($stream))
        {
            $data = explode(',', $line);
            $entity = new Commune();
            $entity->setNomcommune(str_replace('"', '', $data[1]));
            if ($data[0]=='"30206"')
                $this->setReference('commune-poulx', $entity);
            $em->persist($entity);
        }
        fclose($stream);
        $em->flush();
    }
    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}