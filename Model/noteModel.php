<?php
namespace Model;
use App_Core\Instance;
class noteModel extends Instance{
    public function add(string $category,string $date,string $content,int $id):int{
        $id=$this->db->insert("note","category,date,content,user_id",[$category, $date, $content, $id]);
        return $id;
    }
    public function show(int $id){
        $result=$this->db->show("note",["category,date,content,user_id"],["user_id"=>$id]);
        return $result;
    }
    public function show_category(int $id){
        $result=$this->db->show("note",["DISTINCT category"],["user_id"=>$id]);
        return $result;    
    }
}
