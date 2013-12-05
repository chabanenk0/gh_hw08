<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\DemoBundle\Entity\Post;
use Acme\DemoBundle\Form\PostType;
use Symfony\Component\HttpFoundation\Request;


class WelcomeController extends Controller
{
    public function indexAction(Request $request)
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        $post =  new Post();
        $guestForm = $this->createForm(new PostType(), $post);
        $em = $this->getDoctrine()->getManager();
        if ($request->getMethod() == 'POST') {
            $guestForm->bind($request);
            if ($guestForm->isValid()) {
                $em->persist($post);
                $em->flush();

                return $this->redirect($this->generateUrl('category_show', array('id' => $post->getId())));
            }
        }

        $dql   = "SELECT a FROM AcmeDemoBundle:Post a";
        $query = $em->createQuery($dql);
    
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $this->get('request')->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );

        // parameters to template
        //return $this->render('AcmeMainBundle:Article:list.html.twig', array('pagination' => $pagination));

        //$posts = $em->getRepository('AcmeDemoBundle:Post')->findAll();

        return $this->render('AcmeDemoBundle:Welcome:index2.html.twig',array(
            'entity' => $post,
            'form' => $guestForm->createView(),
            //'posts' => $posts,
            'pagination' => $pagination
        ));
    }
}
