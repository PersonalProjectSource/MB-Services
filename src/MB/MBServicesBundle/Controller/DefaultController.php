<?php

namespace MB\MBServicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Elasticsearch;
use MB\AdminBundle\Entity\DemandeDevis;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($param, $totoparam)
    {
        $demandeDevi = new DemandeDevis();
        $form = $this->createForm('MB\AdminBundle\Form\DemandeDevisType', $demandeDevi);

        $client = Elasticsearch\ClientBuilder::create()->build();
        return $this->render('MBMBServicesBundle:Default:index.html.twig',['form' => $form->createView()]);
    }
}
