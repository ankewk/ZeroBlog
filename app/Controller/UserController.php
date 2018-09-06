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
        $param = [
            'name' => 'string',
            'password' => 'string'
        ];
        $request = $this->Request();
        $request->validation($param);
        $user = new \stdClass();
        $user->name = $request->getParam('name');
        $user->password = $request->getParam('password');
        $islogin = $this->UserModel->userLogin($user);
        if($islogin)
            $this->statusPrint(200, '登陆成功！');
        $this->statusPrint(101, '登陆失败！');
    }
}
