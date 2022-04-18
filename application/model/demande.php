<?php
class demande{


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
    private function connexion($dbname,$host,$user,$password)
    {
        $dsn="mysql:dbname=$dbname; host=$host;";
        try{
            $c =new PDO($dsn,$user,$password);
 
        }
        catch(PDOException $ex)
        {
            printf("erreur de connexion à la base de données",$ex->getMessage()) ;
            exit();
 
        }
        return $c;
    }
 
    public function get_demandes($id)
    {
      
      $c = $this->connect() ;
      $sql = "SELECT * FROM reponse WHERE id_client = '$id' AND envoye='transporteur'";
      $res= $c->prepare($sql);
      $res->execute() ;
      $table=$res->fetchAll(PDO::FETCH_OBJ);
     
      return $table;

      
    }

    public function update($id)

    {
        $c = $this->connect() ;
        $sql = $c->prepare("   UPDATE   reponse set   accepte =1 WHERE id = ? ");
        $sql->bindParam(1,$id);
        $sql->execute();
    }

   public function get_reponses($id)
   {
    $c = $this->connect() ;
    $sql = "SELECT * FROM reponse WHERE transporteur_id = '$id'";
    $res= $c->prepare($sql);
    $res->execute() ;
    $table=$res->fetchAll(PDO::FETCH_OBJ);
   
    return $table;
   }

   public function confirm($id,$transport)

    {
        $c = $this->connect() ;
        $sql = "SELECT * FROM reponse WHERE id = '$id'";
       $res= $c->prepare($sql);
        $res->execute();
        $row =  $res->fetch(PDO::FETCH_OBJ);
        $idannonce=$row->id_annonce;
        
    
      $sql = $c->prepare("   UPDATE   annonce set  id_transport=?, transaction =1 WHERE id_annonce = ? ");
      $sql->bindParam(1,$transport);
      $sql->bindParam(2,$idannonce);
      $sql->execute();
      $sql = $c->prepare("   UPDATE   annonce set  id_transport=?, transaction =1 WHERE id_annonce = ? ");
      $sql = "DELETE FROM reponse WHERE id_annonce = '$idannonce'";
      $res= $c->prepare($sql);
      $res->execute();

    }

    public function envoyer($DEMANDE)
    {
       $c = $this->connect() ;
       $envoye="client";
        $sql = $c->prepare("INSERT INTO reponse(transporteur_id,id_annonce,id_client,envoye,accepte) VALUES(?,?,?,?,1)") ;
        $sql->bindParam(1,$DEMANDE['transporteur_id']) ;
        $sql->bindParam(2,$DEMANDE['id_annonce']) ;
        $sql->bindParam(3,$DEMANDE['id_client']) ;
        $sql->bindParam(4,$envoye) ;
        $sql->execute() ;
    
    
    }

    public function findTransport($id)
    {
    $c =$this->connect() ;

$d= $c->query("SELECT * from annoncetransporteurassoc where id_annonce='$id'");
$travailleurs=$d->fetchAll(PDO::FETCH_OBJ);
return $travailleurs;
    }

    public function findT($id)
    {
        $c = $this->connect() ;
        $sql = "SELECT * FROM transporteur WHERE transporteur_id='$id'";
       $res= $c->prepare($sql);
        $res->execute();
        $row =  $res->fetch(PDO::FETCH_OBJ);
        return $row;
    }

    public function get_client($id)
    {
        $c = $this->connect() ;
        $sql = "SELECT * FROM utilisateur WHERE user_id='$id'";
       $res= $c->prepare($sql);
        $res->execute();
        $row =  $res->fetch(PDO::FETCH_OBJ);
        return $row;
    }


    public function get_annonce($id)
    {
        $c = $this->connect() ;
        $sql = "SELECT * FROM annonce WHERE id_annonce='$id'";
       $res= $c->prepare($sql);
        $res->execute();
        $row =  $res->fetch(PDO::FETCH_OBJ);
        return $row;
    }

}