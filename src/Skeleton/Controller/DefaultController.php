<?php

namespace Skeleton\Controller;

/**
 * @package Skeleton
 */
class DefaultController extends \Flint\Controller\Controller
{
    /**
     * @return string
     */
    public function indexAction()
    {
        return $this->render('index.html.twig');
    }
}
