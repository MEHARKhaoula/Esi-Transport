<?php
class contact{

    public function modifier_contact($contact) 
    {
        $c = $this->connect() ;
        $sql = $c->prepare("   UPDATE   contact set   telephone =?,mail=?,adresse=? WHERE id = 1 ");
        $sql->bindParam(1,$contact['telephone']);
        $sql->bindParam(2,$contact['mail']);
        $sql->bindParam(3,$contact['adresse']);
       
        $sql->execute();
    }

    
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
    public function get_info_contact()
{
   $c = $this->connect() ;
   $sql = "SELECT * FROM contact";
  $res= $c->prepare($sql);
   $res->execute();
   $row =  $res->fetch(PDO::FETCH_OBJ);
   return $row;
}
}

?>