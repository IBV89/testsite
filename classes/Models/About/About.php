<?php

namespace Models\About;

class About
{
    protected $text = [];
    protected $table = 'about';

    public function getText()
    {
        $sql = 'SELECT * FROM ' . $this->table;
        $db = new \DB();
        $res = $db->query($sql);
        foreach ($res as $k=>$v){
            $this->text = $v;
        }
        return $this->text;
    }
    public function updateText($text)
    {
        $sql = 'UPDATE ' . $this->table . ' SET text = ' . '\'' . $text . '\'';
        $db = new \DB();
        $db->execute($sql);
    }
}