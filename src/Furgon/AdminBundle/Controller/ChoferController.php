<?php

namespace Furgon\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Furgon\AdminBundle\Entity\Chofer;
use Furgon\AdminBundle\Form\ChoferType;

/**
 * Chofer controller.
 *
 * @Route("/chofer")
 */
class ChoferController extends Controller
{

    /**
     * Lists all Chofer entities.
     *
     * @Route("/", name="chofer")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminBundle:Chofer')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Chofer entity.
     *
     * @Route("/", name="chofer_create")
     * @Method("POST")
     * @Template("AdminBundle:Chofer:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Chofer();
        $form = $this->createForm(new ChoferType(), $entity);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('chofer_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Chofer entity.
     *
     * @Route("/new", name="chofer_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Chofer();
        $form   = $this->createForm(new ChoferType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Chofer entity.
     *
     * @Route("/{id}", name="chofer_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Chofer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chofer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Chofer entity.
     *
     * @Route("/{id}/edit", name="chofer_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Chofer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chofer entity.');
        }

        $editForm = $this->createForm(new ChoferType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Chofer entity.
     *
     * @Route("/{id}", name="chofer_update")
     * @Method("PUT")
     * @Template("AdminBundle:Chofer:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Chofer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chofer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ChoferType(), $entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('chofer_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Chofer entity.
     *
     * @Route("/{id}", name="chofer_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminBundle:Chofer')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Chofer entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('chofer'));
    }

    /**
     * Creates a form to delete a Chofer entity by id.
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
