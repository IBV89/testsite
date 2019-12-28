<?php

namespace Models\Book;


class Book
{
    protected $data = [];
    protected $table = 'book';

    public function getData()
    {
        $sql = 'SELECT * FROM ' . $this->table;
        $db = new \DB();
        $this->data = $db->query($sql);
        return $this->data;
    }
}