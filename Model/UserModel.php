<?php
namespace Model;
use App_Core\Instance;
class UserModel extends Instance{
    public function create(string $email,string $password):int|bool{
        $result=$this->db->show("user",["*"],["email"=>$email]);
        if(!$result){
        $id=$this->db->insert("user","email,password",[$email,$password]);
        return $id;
        }  
        return false;
    }
    public function check(string $email,string $password){
        $result=$this->db->show("user",["id"],["password"=>$password,"email"=>$email]);
        return $result[0]['id'];
    }

}