<?php

namespace Company\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        $test = $this->testAction();
        return $this->render('CompanyBlogBundle:Default:index.html.twig', array(
            'test' => $test
        ));
    }
    
    public function testAction() {
        return "this is a foo line!";
    }

    public function createAction() {
        $user = new User();
        $user->setName('Jonathan H. Wage');

        $em = $this->get('doctrine')->getEntityManager();
        $em->persist($user);
        $em->flush();
    }

    public function editAction($id) {
        $em = $this->get('doctrine')->getEntityManager();
        $user = $em->find('AcmeHelloBundle:User', $id);
        $user->setBody('new body');
        $em->persist($user);
        $em->flush();
    }

    public function deleteAction($id) {
        $em = $this->get('doctrine')->getEntityManager();
        $user = $em->find('AcmeHelloBundle:User', $id);
        $em->remove($user);
        $em->flush();

    }

}
