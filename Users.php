<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 07.02.2016
 * Time: 19:34
 */
require_once ('db.php');
date_default_timezone_set("UTC");

class Users
{
    public $id;
    public $login;
    public $password; //может private?

    public function getId(){
        return $this->id;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function getPassword()
    {
        return $this->password;
    }
    //public function getUsersInfo()
    // {
    //  $str1 = $this->id . " " . $this->login . " " . $this->password;
    // return $str1;
    // $result = $connection->query('select * from user1');
//Обработать этот запрос (т.е. предоставить ответ, который понимает пхп) - когда делаем так, то фетч ол с параметром
//ассок возвращает ассоциированный массив
    // $data = $result->fetchAll(PDO::FETCH_ASSOC);
//вывести
    // print_r($data);
    // }

    public function setid($id){

        $this->id = $id;
        return $this;
  }
    public function setlogin($login)
    {
        $this->login = $login;
        return $this;
    }
    public function setpassword($password)
    {
        $this->password = $password;
        return $this;
    }
    public function save(){
        $ins1="INSERT INTO user1(login, password) VALUES ('$this->login', '$this->password')";
        conn_db()->exec($ins1);
        //$connection->exec($ins);
    }
    public function findbyId($findbyId1){
        $findid1="SELECT * FROM user1 WHERE id='$findbyId1'";
        // $result=$connection->query($select1);
        $result=conn_db()->query($findid1);
        $data1=$result->fetchAll(PDO::FETCH_ASSOC);
        $this->setid($data1[0]['id']);
        $this->setlogin($data1[0]['login']);
        $this->setpassword($data1[0]['password']);
        return $this;


    }
    public static function findbyLogin($findbylogin)
    {
        $findlogin = "SELECT * FROM user1 WHERE login='$findbylogin'";
        //$result = $connection->query($select1);
        $result=conn_db()->query($findlogin);
        $data2 = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data2;
    }
    public static function findbyPassword($findbypassword)
    {
        $findpassword = "SELECT * FROM user1 WHERE password='$findbypassword'";
        //$result = $connection->query($select1);
        $result = conn_db()->query($findpassword);
        $data3 = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data3;
    }
    public static function findAll1()
    {
        $findall1 = "SELECT * FROM user1";
        //$result = $connection->query($select1);
        $result = conn_db()->query($findall1);
        $data4 = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data4;
    }
    public function updateUsers()
    {
        $updateusers = "UPDATE user1 SET login=$this->login, password=$this->password WHERE id=$this->id";
        conn_db()->exec($updateusers);
    }
}

?>


