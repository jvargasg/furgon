<?php

namespace Furgon\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Furgon\AdminBundle\Entity\Apoderado;
use Furgon\AdminBundle\Form\ApoderadoType;

/**
 * Apoderado controller.
 *
 * @Route("/apoderado")
 */
class ApoderadoController extends Controller
{

    /**
     * Lists all Apoderado entities.
     *
     * @Route("/", name="apoderado")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminBundle:Apoderado')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Apoderado entity.
     *
     * @Route("/", name="apoderado_create")
     * @Method("POST")
     * @Template("AdminBundle:Apoderado:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Apoderado();
        $form = $this->createForm(new ApoderadoType(), $entity);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('apoderado_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Apoderado entity.
     *
     * @Route("/new", name="apoderado_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Apoderado();
        $form   = $this->createForm(new ApoderadoType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Apoderado entity.
     *
     * @Route("/{id}", name="apoderado_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Apoderado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Apoderado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Apoderado entity.
     *
     * @Route("/{id}/edit", name="apoderado_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Apoderado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Apoderado entity.');
        }

        $editForm = $this->createForm(new ApoderadoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Apoderado entity.
     *
     * @Route("/{id}", name="apoderado_update")
     * @Method("PUT")
     * @Template("AdminBundle:Apoderado:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:Apoderado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Apoderado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ApoderadoType(), $entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('apoderado_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Apoderado entity.
     *
     * @Route("/{id}", name="apoderado_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminBundle:Apoderado')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Apoderado entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('apoderado'));
    }

    /**
     * Creates a form to delete a Apoderado entity by id.
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
