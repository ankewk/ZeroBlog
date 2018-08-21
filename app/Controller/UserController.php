<?php
use Zero\Controller;
use Model\UserModel;

class UserController extends Controller
{
    private $userModel;
    public function __construct()
    {
        parent::__construct();
        $this->UserModel =  new UserModel();
    }

    public function loginZero()
    {
        $user = new \stdClass();
        $user->name = "admin";
        $user->password = "123456";
        $islogin = $this->UserModel->userLogin($user);
        var_dump($islogin);exit;
        $this->render('Index', ["val" => $conf]);
    }
}
