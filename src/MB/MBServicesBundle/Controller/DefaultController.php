<?php

namespace MB\MBServicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Elasticsearch;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request, $param, $totoparam)
    {
        $client = Elasticsearch\ClientBuilder::create()->build();
        return $this->render('MBMBServicesBundle:Default:index.html.twig');
    }
}
