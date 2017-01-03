<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // travel_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'travel_homepage');
            }

            return array (  '_controller' => 'TravelBundle\\Controller\\DefaultController::indexAction',  '_route' => 'travel_homepage',);
        }

        // exam_blanc_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'exam_blanc_homepage');
            }

            return array (  '_controller' => 'ExamBlancBundle\\Controller\\DefaultController::indexAction',  '_route' => 'exam_blanc_homepage',);
        }

        // exam_blanc_algo
        if ($pathinfo === '/algo') {
            return array (  '_controller' => 'ExamBlancBundle\\Controller\\DefaultController::algoAction',  '_route' => 'exam_blanc_algo',);
        }

        // exam_blanc_sf2
        if ($pathinfo === '/sf2') {
            return array (  '_controller' => 'ExamBlancBundle\\Controller\\DefaultController::sf2Action',  '_route' => 'exam_blanc_sf2',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
