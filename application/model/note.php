<?php
class note{
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


public function noter($note,$transport,$annonce)
{
    echo $note;
    echo $transport;
    echo $annonce ;
    $c = $this->connect();
    $sql = $c->prepare("INSERT INTO note (n,id_transport,id_annonce) VALUES(?,?,?)") ;
        $sql->bindParam(1,$note) ;
        $sql->bindParam(2,$transport) ;
        $sql->bindParam(3,$annonce) ;
        $sql->execute() ;
        $sql = $c->prepare("   UPDATE   annonce set  note=? WHERE id_annonce = ? ");
        $sql->bindParam(1,$note) ;
        $sql->bindParam(2,$annonce) ;
        $sql->execute() ;

    
}


}
?>