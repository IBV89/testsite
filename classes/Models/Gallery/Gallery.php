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
}