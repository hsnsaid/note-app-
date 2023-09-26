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
        header("Location: $file.html");
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
        header("Location: $file.html");    
    }
    public function show($file){
        session_start();
        if(!isset($_SESSION['status'])){
            header("Location: signin.html");    
            exit; 
        }
        else{
        $note=new \Model\noteModel();
        $data=$note->show($_SESSION['user_id']);
        $category=$note->show_category($_SESSION['user_id']);
        $view = new \Views\Views($file,["category"=>$category,"data"=>$data]);
        }
    }
    public function add($file) {
        session_start();        
        if (!isset($_SESSION['user_id'])) {
            header("Location: signin.html");
            exit; 
        } else {
            $note = new \Model\noteModel();
            $category = $_POST['category'];
            $content = $_POST['content'];
            $title = $_POST['title'];
            if (\App_Core\Validator::string($category, 1, 20) && \App_Core\Validator::string($content, 1, 100) && \App_Core\Validator::string($title, 1, 20)) {
                $id = $note->add($category, $_POST['date'], $content, $_SESSION['user_id'], $title);
            }    
            $view = new \Views\Views($file);
        }
    }
    public function delete($file){
        session_start();
        if(!isset($_SESSION['status'])){
            header("Location: signin.html");    
            exit; 
        }
        else{
        $note=new \Model\noteModel();
        $note->delete($_GET['id']);
        $data=$note->show($_SESSION['user_id']);
        $category=$note->show_category($_SESSION['user_id']);
        $view = new \Views\Views($file,["category"=>$category,"data"=>$data]);
        }
    }
    public function update($file){
        session_start();
        if(!isset($_SESSION['status'])){
            header("Location: signin.html");    
            exit; 
        }
        else{
        $note=new \Model\noteModel();
        $data=$note->update($_GET['id'],$_GET['status']);
        $data=$note->show($_SESSION['user_id']);
        $category=$note->show_category($_SESSION['user_id']);
        $view = new \Views\Views($file,["category"=>$category,"data"=>$data]);
        }
    }
    public function search_post($file){
        session_start();
        if(!isset($_SESSION['status'])){
            header("Location: signin.html");    
            exit; 
        }
        else{
        $note=new \Model\noteModel();
        $data=$note->show($_SESSION['user_id']);
        $search=$_POST['search'];
        $view = new \Views\Views($file,["search"=>$search,"data"=>$data]);
        }
    }
	public function logout()
	{
		session_start();
		session_unset();
		session_destroy();
		header('Location: ./');
		exit;
	}
}