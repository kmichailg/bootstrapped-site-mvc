<?php

class Site extends Controller
{
    public function index()
    {
        //Assign the model to memory
        $user = $this->getModel('User');

        $this->viewCustom('homepage', [], 'header', 'footer');
    }

    public function hello()
    {
        $this->view("site/hello");
    }
}
