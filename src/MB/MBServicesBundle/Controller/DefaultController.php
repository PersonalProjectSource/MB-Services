<?php

namespace MB\MBServicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Elasticsearch;
use MB\AdminBundle\Entity\DemandeDevis;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request, $param, $totoparam)
    {
        $demandeDevi = new DemandeDevis();
        $form = $this->createForm('MB\AdminBundle\Form\DemandeDevisType', $demandeDevi, array( 'action' => $this->generateUrl('add_devis_ajax'), 'method' => 'post'));
        if ($request->isMethod('post')) {
            dump('finfinfin');die;
        }
        $client = Elasticsearch\ClientBuilder::create()->build();

//        dump($request->request);die;
        return $this->render('MBMBServicesBundle:Default:index.html.twig',['form' => $form->createView()]);
    }
}
