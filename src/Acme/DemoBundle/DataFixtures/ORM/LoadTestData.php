<?php

namespace chabanenk0\TestAssignmentBundle\DataFixtures\ORM;;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\DemoBundle\Entity\Post;
use Doctrine\Common\Collections\ArrayCollection;

class LoadTestData implements FixtureInterface
    {
        /**
         * {@inheritDoc}
         */
        public function load(ObjectManager $manager)
        {
            $data=$this->getPostsArray();
            foreach ($data as $post1) {
                $post=new Post();
                $post->setName($post1['name']);
                $post->setEmail($post1['email']);
                $post->setMessage($post1['message']);
                $manager->persist($post);
                $manager->flush();
            }
        }

        public function getPostsArray()
        {
            return array(
                array('name'=>'petro','email'=>'p@i.ua','message'=>'Your site doesn\'t work vell, it needs a lot of corrections. For example the header replaces all the text'),
                array('name'=>'petro','email'=>'p@i.ua','message'=>'Your site doesn\'t work vell, it needs a lot of corrections. For example the header replaces all the text'),
                array('name'=>'ivan','email'=>'p@i.ua','message'=>'Your site doesn\'t work vell, it needs a lot of corrections. For example the header replaces all the text'),
                array('name'=>'petro','email'=>'p@i.ua','message'=>'Your site doesn\'t work vell, it needs a lot of corrections. For example the header replaces all the text'),
                array('name'=>'vasyl','email'=>'p@i.ua','message'=>'Your site doesn\'t work vell, it needs a lot of corrections. For example the header replaces all the text'),
                array('name'=>'petro','email'=>'p@i.ua','message'=>'Your site doesn\'t work vell, it needs a lot of corrections. For example the header replaces all the text'),
                array('name'=>'petro','email'=>'p@i.ua','message'=>'Your site doesn\'t work vell, it needs a lot of corrections. For example the header replaces all the text'),
                array('name'=>'petro','email'=>'p@i.ua','message'=>'Your site doesn\'t work vell, it needs a lot of corrections. For example the header replaces all the text'),
                array('name'=>'petro','email'=>'p@i.ua','message'=>'Your site doesn\'t work vell, it needs a lot of corrections. For example the header replaces all the text'),
                array('name'=>'vasyl','email'=>'p@i.ua','message'=>'Your site doesn\'t work vell, it needs a lot of corrections. For example the header replaces all the text'),
                array('name'=>'vasyl','email'=>'p@i.ua','message'=>'Your site doesn\'t work vell, it needs a lot of corrections. For example the header replaces all the text'),
            );
        }
    }
?>
