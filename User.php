<?php

class User
{
    public $username;
    public $passwd;

    public function save()
    {
        $conn=new mysqli('localhost','Tanishqa','#tani10032005','todoclass');
        $username=$this->username;
        $passwd=$this->passwd;
        $sql="INSERT INTO users(username,passwd) VALUE (?,?);";
        $stmt=$conn->prepare($sql);//prepare is a function of mysqli class
        $stmt->bind_param('ss',$username,$passwd);// bind_param is A function of query class that is hidden in prepare statement
        $stmt->execute();
        $stmt->close();
        $conn->close();

    }
}