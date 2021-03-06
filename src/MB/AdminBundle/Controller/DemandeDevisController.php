<?php

namespace MB\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MB\AdminBundle\Entity\DemandeDevis;
use MB\AdminBundle\Form\DemandeDevisType;

/**
 * DemandeDevis controller.
 *
 * @Route("/demandedevis")
 */
class DemandeDevisController extends Controller
{
    /**
     * Lists all DemandeDevis entities.
     *
     * @Route("/", name="demandedevis_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $demandeDevis = $em->getRepository('MBAdminBundle:DemandeDevis')->findAll();

        return $this->render('demandedevis/index.html.twig', array(
            'demandeDevis' => $demandeDevis,
        ));
    }

    /**
     * Creates a new DemandeDevis entity.
     *
     * @Route("/new", name="demandedevis_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $demandeDevi = new DemandeDevis();
        $form = $this->createForm('MB\AdminBundle\Form\DemandeDevisType', $demandeDevi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($demandeDevi);
            $em->flush();

            return $this->redirectToRoute('demandedevis_show', array('id' => $demandeDevi->getId()));
        }

        return $this->render('demandedevis/new.html.twig', array(
            'demandeDevi' => $demandeDevi,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new DemandeDevis entity.
     *
     * @Route("/add", name="add_devis_ajax")
     * @Method({"GET", "POST"})
     */
    public function addDevisAjaxAction(Request $request)
    {
        dump($request->request);die;
        $demandeDevi = new DemandeDevis();
        $form = $this->createForm('MB\AdminBundle\Form\DemandeDevisType', $demandeDevi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($demandeDevi);
            $em->flush();

            return $this->redirectToRoute('demandedevis_show', array('id' => $demandeDevi->getId()));
        }

        return new JsonResponse($response);
    }

    /**
     * Finds and displays a DemandeDevis entity.
     *
     * @Route("/{id}", name="demandedevis_show")
     * @Method("GET")
     */
    public function showAction(DemandeDevis $demandeDevi)
    {
        $deleteForm = $this->createDeleteForm($demandeDevi);

        return $this->render('demandedevis/show.html.twig', array(
            'demandeDevi' => $demandeDevi,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing DemandeDevis entity.
     *
     * @Route("/{id}/edit", name="demandedevis_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DemandeDevis $demandeDevi)
    {
        $deleteForm = $this->createDeleteForm($demandeDevi);
        $editForm = $this->createForm('MB\AdminBundle\Form\DemandeDevisType', $demandeDevi);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($demandeDevi);
            $em->flush();

            return $this->redirectToRoute('demandedevis_edit', array('id' => $demandeDevi->getId()));
        }

        return $this->render('demandedevis/edit.html.twig', array(
            'demandeDevi' => $demandeDevi,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a DemandeDevis entity.
     *
     * @Route("/{id}", name="demandedevis_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, DemandeDevis $demandeDevi)
    {
        $form = $this->createDeleteForm($demandeDevi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($demandeDevi);
            $em->flush();
        }

        return $this->redirectToRoute('demandedevis_index');
    }

    /**
     * Creates a form to delete a DemandeDevis entity.
     *
     * @param DemandeDevis $demandeDevi The DemandeDevis entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DemandeDevis $demandeDevi)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('demandedevis_delete', array('id' => $demandeDevi->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
