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
    public function add($name, $text)
    {
        $sql = 'INSERT INTO ' . $this->table . ' (name, text) VALUES (:name, :text)';
        $data = [':name' => $name, ':text' => $text];
        $db = new \DB();
        $db->execute($sql,$data);
    }
    public function delete($id)
    {
        $sql = 'DELETE FROM ' . $this->table . ' WHERE id IN (:id)';
        $id = [':id' => $id];
        $db = new \DB();
        $db->execute($sql, $id);
    }
}