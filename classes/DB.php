<?php

class DB
{
    protected $data = [];
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new PDO('mysql:host=localhost; dbname=test',
            'root', '');
    }

    public function execute($sql, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
    }
    public function query($sql, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        $this->data = $sth->fetchAll();
        if(!empty($this->data)){
            return $this->data;
        } else{
            return false;
        }
    }
}