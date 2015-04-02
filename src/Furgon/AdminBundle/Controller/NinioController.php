<?php

namespace Furgon\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Furgon\AdminBundle\Entity\Ninio;
use Furgon\AdminBundle\Form\NinioType;

/**
 * Ninio controller.
 *
 * @Route("/ninio")
 */
class NinioController extends Controller
{

    /**
     * Lists all Ninio entities.
     *
     * @Route("/", name="ninio")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminBundle:Ninio')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Ninio entity.
     *
     * @Route("/", name="ninio_create")
     * @Method("POST")
     * @Template("AdminBundle:Ninio:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Ninio();
        $form = $this->createForm(new NinioType(), $entity);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ninio_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Ninio entity.
     *
     * @Route("/new", name="ninio_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Ninio();
        $form   = $this->createForm(new NinioType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Ninio entity.
     *
     * @Route("/{id}", name="ninio_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Ninio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ninio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Ninio entity.
     *
     * @Route("/{id}/edit", name="ninio_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Ninio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ninio entity.');
        }

        $editForm = $this->createForm(new NinioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Ninio entity.
     *
     * @Route("/{id}", name="ninio_update")
     * @Method("PUT")
     * @Template("AdminBundle:Ninio:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Ninio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ninio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new NinioType(), $entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ninio_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Ninio entity.
     *
     * @Route("/{id}", name="ninio_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminBundle:Ninio')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ninio entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ninio'));
    }

    /**
     * Creates a form to delete a Ninio entity by id.
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
