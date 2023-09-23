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
        header("location: $file.html");
    }
    public function check($file){
        $user=new \Model\UserModel();
        $id=$user->check($_POST['email'],$_POST['password']);
        if($id==false){
            $view = new \Views\Views("404");
            exit();
        }
        session_start();
        $_SESSION['user_id']=$id;
        $_SESSION['status']=true;
        header("location: $file.html");    
    }
    public function add($file){
        session_start();
        $note=new \Model\noteModel();
        $id=$note->add($_POST['category'],$_POST['date'],$_POST['content'],$_SESSION['user_id'],$_POST['title']);
        $view = new \Views\Views($file);
    }
    public function show($file){
        session_start();
        $note=new \Model\noteModel();
        $data=$note->show($_SESSION['user_id']);
        $category=$note->show_category($_SESSION['user_id']);
        require  __DIR__ . "/../Views/" . "$file.php";
    }
    public function delete($file){
        session_start();
        $note=new \Model\noteModel();
        $data=$note->delete($_GET['id']);
        $data=$note->show($_SESSION['user_id']);
        $category=$note->show_category($_SESSION['user_id']);
        require  __DIR__ . "/../Views/" . "$file.php";
    }
    public function search_post($file){
        session_start();
        $note=new \Model\noteModel();
        $data=$note->show($_SESSION['user_id']);
        $search=$_POST['search'];
        require  __DIR__ . "/../Views/" . "$file.php";
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