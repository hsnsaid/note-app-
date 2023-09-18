<?php
namespace Model;
use App_Core\Instance;
class noteModel extends Instance{
    public function add(string $category,string $date,string $content,int $id):int{
        $id=$this->db->insert("note","category,date,content,user_id",[$category, $date, $content, $id]);
        return $id;
    }
}
