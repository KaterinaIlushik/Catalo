<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 07.02.2016
 * Time: 20:14
 */
require_once ('db.php');
date_default_timezone_set("UTC");

class Categories
{
    public $id ;
    public $name;
    public function getId(){
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
   /*public function getCategoryInfo()
    {
        $str1 = $this->id2 . " " . $this->name1;
        return $str1;
    }*/
    public function setid($id)
    {
        $this->id = $id;
        return $this;
    }
    public function setname($name)
    {
        $this->name = $name;
        return $this;
    }
    public function save(){
        $ins2='insert into categories1 values('.$this->name.')';
        conn_db()->exec($ins2);
        //$connection->exec($ins);
    }
    public function findbyID($findbyId){
        $findid2="SELECT * FROM categories1 WHERE id=$findbyId";
       // $result=$connection->query($);
        $result=conn_db()->query($findid);
        $data1=$result->fetchAll(PDO::FETCH_ASSOC);
        $this->setid2($data1[0]['id']);
        $this->setname1($data1[0]['name']);
        return $this;
    }
    public static function findbyName($findbyname)
    {
        $findname = "SELECT * FROM categories1 WHERE name=$findbyname";
        //$result = $connection->query($select1);
        $result=conn_db()->query($findname);
        $data2 = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data2;
    }
    public static function findAll2()
    {
        $findall2 = "SELECT * FROM categories1";
        //$result = $connection->query($select1);
        $result = conn_db()->query($findall2);
        $data3 = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data3;
    }
    public function UpdateCat()
    {
        $updatecat = "UPDATE categories1 SET name1=$this->name WHERE id=$this->id";
        conn_db()->exec($updatecat);
    }
    public static function Delete ($id)
    {
        $delete="DELETE FROM categories1 WHERE id=$id;";
        conn_db()->exec($delete);

    }
}
