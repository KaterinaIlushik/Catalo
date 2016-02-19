<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 07.02.2016
 * Time: 20:20
 */
require_once ('db.php');
date_default_timezone_set("UTC");

class Goods
{
    public $id;
    public $name;
    public $description;
    public $category_id;

    public function getId(){
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getCategoryid()
    {
        return $this->category_id;
    }

    /*public function getGoodInfo()
    {
        $str1 = $this->id3 . " " . $this->name2 . " " . $this->description . " " . $this->category_id;
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
    public function setdescription($description)
    {
        $this->description = $description;
        return $this;
    }
    public function setcategory_id($category_id)
    {
        $this->category_id = $category_id;
        return $this;
    }
    public function save(){
        $ins3="INSERT INTO goods(name, description, category_id) VALUES ('$this->name', '$this->description', '$this->category_id')";
        conn_db()->exec($ins3);
        //$connection->exec($ins);
    }
    public function findbyId($findbyId){
        $findid="SELECT * FROM goods WHERE id=$findbyId LIMIT 1";
        // $result=$connection->query($findid3);
        $result=conn_db()->query($findid);
        $data1=$result->fetchAll(PDO::FETCH_ASSOC);
        $this->setid($data1[0]['id']);
        $this->setname($data1[0]['name']);
        $this->setdescription($data1[0]['description']);
        $this->setcategory_id($data1[0]['category_id']);
        return $this;
    }

    public static function findbyName($findbyname)
    {
        $findname = "SELECT * FROM goods WHERE name=$findbyname";
        //$result = $connection->query($select1);
        $result=conn_db()->query($findname);
        $data2 = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data2;
    }
    public static function findbyDescription($findbydescription)
    {
        $findescription = "SELECT * FROM goods WHERE description=$findbydescription";
        //$result = $connection->query($select1);
        $result=conn_db()->query($findescription);
        $data2 = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data2;
    }
    public static function findbyCategoryid($findbycategoryid)
    {
        $findcategoryid = "SELECT * FROM goods WHERE category_id =$findbycategoryid";
        //$result = $connection->query($select1);
        $result=conn_db()->query($findcategoryid);
        $data2 = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data2;
    }

    public static function findAll3()
    {
        $findall3 = "SELECT * FROM goods;";
        //$result = $connection->query($select1);
        $result = conn_db()->query($findall3);
        $data3 = $result->fetchAll(PDO::FETCH_ASSOC);
        //print_r(conn_db()->errorInfo());
        return $data3;
    }

    public function updateGoods()
    {
        $updategoods="UPDATE goods SET name='$this->name', description='$this->description', category_id=$this->category_id WHERE id3=$this->id3;";
        conn_db()->exec($updategoods);
    }
   public static function Delete ($id)
   {
       $delete="DELETE FROM goods WHERE id=$id;";
       conn_db()->exec($delete);
   }


}

