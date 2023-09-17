<?php
declare(strict_types=1);
namespace Controller;
class Controller{
    public function file($file){
        $view = new \Views\Views($file);
    }
    public function create($file){
        $user=new \Model\UserModel();
        $id=$user->create($_POST['email'],$_POST['password']);
        if($id==false){
            $view = new \Views\Views("404");
        }
        session_start();
        $_SESSION['user_id']=$id;
        $_SESSION['status']=true;
        $view = new \Views\Views($file);
    }
    public function check($file){
        $user=new \Model\UserModel();
        $result=$user->check($_POST['email'],$_POST['password']);
        if($result==false){
            $view = new \Views\Views("404");
            exit();
        }
        session_start();
        $_SESSION['user_id']=$id;
        $_SESSION['status']=true;
        $view = new \Views\Views($file);
    }
	public function logout()
	{
		session_start();
		session_unset();
		session_destroy();
		header('location: ./');
		exit;
	}
}