<?php
namespace Model;
use App_Core\Instance;
class noteModel extends Instance{
    public function add(string $category,string $date,string $content,int $id,string $title):int{
        $id=$this->db->insert("note","category,date,content,user_id,title",[$category, $date, $content, $id, $title]);
        return $id;
    }
    public function show(int $id){
        $result=$this->db->show("note",["*"],["user_id"=>$id]);
        return $result;
    }
    public function show_category(int $id){
        $result=$this->db->show("note",["DISTINCT category"],["user_id"=>$id]);
        return $result;    
    }
    public function delete($id){
        $result=$this->db->delete("note",["id"=>$id]);
        return $result;
    }
}
