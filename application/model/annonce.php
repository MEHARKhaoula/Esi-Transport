<?php
class Annonce{
   private $c;
     public function __construct() {

       
    }


    public function get_all_volume() 
{
    $c = $this->connect() ;
   $res= $c->query("SELECT * from volume");
   $table=$res->fetchAll(PDO::FETCH_OBJ);
   return $table;

}

public function get_all_poids() 
{
    $c = $this->connect() ;
   $res= $c->query("SELECT * from poids");
   $table=$res->fetchAll(PDO::FETCH_OBJ);
   return $table;
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

    public function delete($annonce_id) 
{
    
   $c = $this->connect() ;

   $sql = "UPDATE annonce set archive = 1 WHERE id_annonce = '$annonce_id'";
  $res= $c->prepare($sql);
  $res->execute();
   
}

public function termine($annonce_id) 
{
    
   $c = $this->connect() ;

   $sql = "UPDATE annonce set termine = 'terminee' WHERE id_annonce = '$annonce_id'";
  $res= $c->prepare($sql);
  $res->execute();

  $sql = "SELECT * FROM annonce WHERE id_annonce = '$annonce_id'";
  $res= $c->prepare($sql);
   $res->execute();
   $annonce =  $res->fetch(PDO::FETCH_OBJ);
   $t = $annonce->id_transport;

   $sql = "SELECT * FROM transporteur WHERE transporteur_id = '$t'";
  $res= $c->prepare($sql);
   $res->execute();
   $row =  $res->fetch(PDO::FETCH_OBJ);
   $gain = $row ->somme ;
   if($annonce->type =="garantie")
   {
      $gain = $gain + 0.6*($annonce->tarif);
   }
   else{
      $gain = $gain + $annonce->tarif;
   }
   $sql = "UPDATE transporteur set somme = '$gain' WHERE transporteur_id = '$t'";
   $res= $c->prepare($sql);
   $res->execute();


   }
 
  
   


public function update($ANNONCE) 
{
   $c = $this->connect() ;
   $sql = $c->prepare("   UPDATE   annonce set   titre =?,description= ?,wilaya_depart = ?,wilaya_arrive=?,type_transport=?,fourchette_poids=?,fourchette_volume=?,moyen_transport=? WHERE id_annonce = ? ");
  
   
   $sql->bindParam(1,$ANNONCE['titre']);
   $sql->bindParam(2,$ANNONCE['description']);
   $sql->bindParam(3,$ANNONCE['wilaya_depart']);
   $sql->bindParam(4,$ANNONCE['wilaya_arrive']);
   $sql->bindParam(5,$ANNONCE['typetransport']);
   $sql->bindParam(6,$ANNONCE['poids']);
   $sql->bindParam(7,$ANNONCE['volume']);
   $sql->bindParam(8,$ANNONCE['moyen_transport']);
  
   $sql->bindParam(9,$ANNONCE['id']);
   $sql->execute();
   
}
public function get_info_annonce($id)
{
   $c = $this->connect() ;
   $sql = "SELECT * FROM annonce WHERE id_annonce = '$id'";
  $res= $c->prepare($sql);
   $res->execute();
   $row =  $res->fetch(PDO::FETCH_OBJ);
   return $row;
}

public function get_all_wilayas()
{   
   $c = $this->connect() ;
   $res= $c->query("SELECT * from wilayas");
   $table=$res->fetchAll(PDO::FETCH_OBJ);
   return $table;
}

public function repondre($ANNONCE)
{
   $c = $this->connect() ;
    $sql = $c->prepare("INSERT INTO reponse(transporteur_id,id_annonce,texte,id_client,accepte) VALUES(?,?,?,?,0)") ;
    $sql->bindParam(1,$ANNONCE['transporteur_id']) ;
    $sql->bindParam(2,$ANNONCE['id_annonce']) ;
    $sql->bindParam(3,$ANNONCE['texte']) ;
    $sql->bindParam(4,$ANNONCE['id_client']) ;
    $sql->execute() ;


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

 


    public function get_annonce_model($wilaya_depart,$wilaya_arrive)
    {
        

        $c = $this->connect() ;
    $sql = "SELECT * FROM annonce WHERE wilaya_depart='$wilaya_depart'  AND wilaya_arrive='$wilaya_arrive'";
    $res= $c->prepare($sql);
    $res->execute() ;
    $table=$res->fetchAll(PDO::FETCH_OBJ);
   
    return $table;
    }







}
?>