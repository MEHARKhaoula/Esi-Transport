<?php
class signalement{
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


public function inserer($signalement)
{
    $c = $this->connect();
    $sql = $c->prepare("INSERT INTO signalement(transporteur_id,id_annonce,id_clent,type,texte) VALUES(?,?,?,?,?)") ;
        $sql->bindParam(1,$signalement['transport_id']) ;
        $sql->bindParam(2,$signalement['id_annonce']) ;
        $sql->bindParam(3,$signalement['id_client']) ;
        $sql->bindParam(4,$signalement['type']) ;
        $sql->bindParam(5,$signalement['texte']) ;
        $sql->execute() ;
}

public function get_signalement() 
{
    $c = $this->connect() ;
   $res= $c->query("SELECT * from signalement");
   $table=$res->fetchAll(PDO::FETCH_OBJ);
   return $table;

}

public function get_detail($id) {
    $c = $this->connect() ;
   $res= $c->query("SELECT * from signalement where id='$id'");
   $table=$res->fetch(PDO::FETCH_OBJ);
   return $table->texte;
}

public function get_signalement_client($id)
{

    $c = $this->connect() ;
    $res= $c->query("SELECT * from signalement where id_clent='$id'");
    $table=$res->fetchAll(PDO::FETCH_OBJ);
    return $table;
}


}
?>