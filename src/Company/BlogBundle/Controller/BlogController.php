<?php

namespace Company\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller {

    public function indexAction() {
        return $this->render('CompanyBlogBundle:Blog:index.html.twig');
    }

}