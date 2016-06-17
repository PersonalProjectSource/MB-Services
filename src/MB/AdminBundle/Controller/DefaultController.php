<?php

namespace MB\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MBAdminBundle:Default:index.html.twig', [
            'currentUser' => $this->getUser()
        ]);
    }

}
