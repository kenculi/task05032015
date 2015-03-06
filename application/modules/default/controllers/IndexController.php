<?php

class IndexController extends Saffron_AbstractController
{

	public function indexAction()
	{
		$this->view->headTitle('Practices');
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
}