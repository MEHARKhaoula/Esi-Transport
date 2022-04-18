<?php
class presentation{



    public function connect()
{
   $db = "mysql:dbname=tdw; host: 127.0.0.1";

    try{
       $c= new PDO($db,"root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET UTF8"));
    }
    catch(PDOException $ex){
    printf("erreur de connexion", $ex->getMessage());
    exit();
    }
    return $c;
}
    public function get_info_presentation()
{
   $c = $this->connect() ;
   $sql = "SELECT * FROM presentation";
  $res= $c->prepare($sql);
   $res->execute();
   $row =  $res->fetch(PDO::FETCH_OBJ);
   return $row;
}

public function modifier_presentation($presentation) 
{
    $c = $this->connect() ;
    $sql = $c->prepare("   UPDATE   presentation set   objectif =?,img=?,video=?,fonctionne=? WHERE id = 1 ");
    $sql->bindParam(1,$presentation['objectif']);
    $sql->bindParam(2,$presentation['image']);
    $sql->bindParam(3,$presentation['video']);
    $sql->bindParam(4,$presentation['fonctionne']);
    $sql->execute();
}
}

?>