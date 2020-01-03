<?php

namespace Models\Gallery;


class Gallery
{
    protected $data = [];
    protected $table = 'photo';

    public function getImages()
    {
        $sql = 'SELECT * FROM ' . $this->table;
        $db = new \DB();
        $res = $db->query($sql);
        foreach ($res as $k=>$v){
            $this->data[] = $v;
        }
        return $this->data;
    }
    public function upload($img)
    {
        $sql = 'INSERT INTO ' . $this->table . ' (title) VALUES(:title)';
        $data = [':title' => $img];
        $db = new \DB();
        $db->execute($sql, $data);


    }
}