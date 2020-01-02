<?php

namespace Models\Auth;


class Auth
{
    public $user;
    public $pass;
    protected $table = 'user';

    protected function getUser($user)
    {
        $sql = 'SELECT * FROM user WHERE user=:user';
        $col = [':user' => $user];
        $db = new \DB();
        $res = $db->query($sql, $col);
        $this->user = $res[0]['user'];
        $this->pass = $res[0]['pass'];
    }
    public function verify($user, $pass)
    {
        $this->getUser($user);
        if (password_verify($pass, $this->pass)){
            return true;
        } else{
            return false;
        }
    }
}