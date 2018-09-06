<?php
use Zero\Controller;

class PageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function loginZero()
    {
        $this->render('Login', []);
    }

    public function indexZero()
    {
        $this->render('Index', []);
    }
}
