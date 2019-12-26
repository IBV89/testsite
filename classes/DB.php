<?php


class DB
{
    protected $data = [];
    protected $dbh;

    public function __construct($dsn, $user, $pass)
    {
        $this->dbh = new PDO($dsn, $user, $pass);
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