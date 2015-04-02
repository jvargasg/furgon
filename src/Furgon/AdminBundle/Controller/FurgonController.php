<?php

namespace Furgon\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Furgon\AdminBundle\Entity\Furgon;
use Furgon\AdminBundle\Form\FurgonType;

/**
 * Furgon controller.
 *
 * @Route("/furgon")
 */
class FurgonController extends Controller
{

    /**
     * Lists all Furgon entities.
     *
     * @Route("/", name="furgon")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminBundle:Furgon')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Furgon entity.
     *
     * @Route("/", name="furgon_create")
     * @Method("POST")
     * @Template("AdminBundle:Furgon:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Furgon();
        $form = $this->createForm(new FurgonType(), $entity);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('furgon_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Furgon entity.
     *
     * @Route("/new", name="furgon_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Furgon();
        $form   = $this->createForm(new FurgonType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Furgon entity.
     *
     * @Route("/{id}", name="furgon_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Furgon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Furgon entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Furgon entity.
     *
     * @Route("/{id}/edit", name="furgon_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Furgon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Furgon entity.');
        }

        $editForm = $this->createForm(new FurgonType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Furgon entity.
     *
     * @Route("/{id}", name="furgon_update")
     * @Method("PUT")
     * @Template("AdminBundle:Furgon:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Furgon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Furgon entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new FurgonType(), $entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('furgon_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Furgon entity.
     *
     * @Route("/{id}", name="furgon_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminBundle:Furgon')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Furgon entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('furgon'));
    }

    /**
     * Creates a form to delete a Furgon entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
