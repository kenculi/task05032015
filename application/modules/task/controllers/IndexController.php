<?php

class Task_IndexController extends Saffron_AbstractController
{

    public function indexAction()
    {
        $this->view->headTitle('Practices version 2');
    }

    public function practice1Action()
    {
        $this->view->headTitle('Result 1');
    }

    public function practice2Action()
    {
        $this->view->headTitle('Result 2');
    }

    public function practice3Action()
    {
        $this->view->headTitle('Result 3');
    }

    public function successAction()
    {
        $this->view->headTitle('Result');
    }
}