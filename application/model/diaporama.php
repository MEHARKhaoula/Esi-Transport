<?php
class diaporama{



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
    public function get_info_diaporama()
{
   $c = $this->connect() ;
   $sql = "SELECT * FROM diaporama";
  $res= $c->prepare($sql);
   $res->execute();
   $row =  $res->fetchAll(PDO::FETCH_OBJ);
   return $row;
}

public function modifier_diaporama($id,$file)
{
    $c = $this->connect() ;
    $sql = $c->prepare("   UPDATE   diaporama set   img =? WHERE id_diapo = ? ");
    $sql->bindParam(1,$file);
    $sql->bindParam(2,$id);
    $sql->execute();
}

public function modifier_lien($id,$lien)
{
    $c = $this->connect() ;
    $sql = $c->prepare("   UPDATE   diaporama set   id_contenu =? WHERE id_diapo = ? ");
    $sql->bindParam(1,$lien);
    $sql->bindParam(2,$id);
    $sql->execute();
}
}

?>