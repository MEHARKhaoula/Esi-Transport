<?php
class Homes{

   
    public function __construct() {
       
    }

    public function get_all_wilayas()
{   
   $c = $this->connect() ;
   $res= $c->query("SELECT * from wilayas");
   $table=$res->fetchAll(PDO::FETCH_OBJ);
   return $table;
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
    public function addAnnonce($ANNONCE)
     {
        
        $tarif=0;
        $garantie = "garantie";
        if($ANNONCE['typetransport']=="colis léger" || $ANNONCE['typetransport']=="lettre")
        {
        $garantie = "non garantie";
        
        }
       $depart = $ANNONCE['wilaya_depart'] ;
       $arrive =  $ANNONCE['wilaya_arrive'] ;
        $c = $this->connect() ;
        $d= $c->query("SELECT * from tarif where type='$garantie' and depart='$depart' and arrive='$arrive' ");
        $a=$d->fetch(PDO::FETCH_OBJ);

        $tarif=$a->prix;
        $sql = $c->prepare("INSERT INTO annonce (titre,description,wilaya_depart,wilaya_arrive,type_transport,fourchette_poids,moyen_transport,etat,fourchette_volume,img,date,id_client,tarif,type) VALUES (?,?,?,?,?,?,?,?,?,?,NOW(),?,?,?)");
        $sql->bindParam(1,$ANNONCE['titre']);
        $sql->bindParam(2,$ANNONCE['description']);
        $sql->bindParam(3,$ANNONCE['wilaya_depart']);
        $sql->bindParam(4,$ANNONCE['wilaya_arrive']);
        $sql->bindParam(5,$ANNONCE['typetransport']);
        $sql->bindParam(6,$ANNONCE['poids']);
        $sql->bindParam(7,$ANNONCE['moyen_transport']);
        $sql->bindParam(8,$ANNONCE['etat']);
        $sql->bindParam(9,$ANNONCE['volume']);
        $sql->bindParam(10,$ANNONCE['file']);
        $sql->bindParam(11,$ANNONCE['client']);
        $sql->bindParam(12,$tarif);
        $sql->bindParam(13,$garantie);
        
        $sql->execute();
        $sql = "SELECT * FROM annonce
        ORDER BY id_annonce DESC
        LIMIT 1";
         $c = $this->connect() ;
        $res= $c->prepare($sql);
         $res->execute();
         $row =  $res->fetch(PDO::FETCH_OBJ);
        
       
        $d= $c->query("SELECT * from travailler");
        $travaileurs=$d->fetchAll(PDO::FETCH_OBJ);
        foreach($travaileurs as $travailleur)
      {
         
          if($this->exist($travailleur->id_transport ,$ANNONCE['wilaya_depart'])==1 ) {
         if($this->exist_arrive($travailleur->id_transport ,$ANNONCE['wilaya_arrive'])==1 ) {
            if($this->exister($travailleur->id_transport ,$row->id_annonce )==false){
              
                $sql = $c->prepare(" INSERT  INTO annoncetransporteurassoc (id_transporteur,id_annonce) VALUES (?,?) ");
                $sql->bindParam(1,$travailleur->id_transport);
                $sql->bindParam(2, $row->id_annonce );
               $sql->execute();
             }
         }
            
          
          
      }
  
    }
}
public function exist($id ,$wilaya1) 
{ 
    $c =$this->connect() ;
$b=0;
$d= $c->query("SELECT * from travailler where id_transport='$id' ");
$travaileurs=$d->fetchAll(PDO::FETCH_OBJ);
foreach($travaileurs as $travailleur)
      {
       
          if($travailleur->nom_wilaya ==$wilaya1)
          { 
             
             $b=1;
             
          }
         
      }
      return $b;

    }

    public function exist_arrive($id ,$wilaya1) 
{ 
    $c =$this->connect() ;
$b=0;
$d= $c->query("SELECT * from travailler_arrive where id_transport='$id' ");
$travaileurs=$d->fetchAll(PDO::FETCH_OBJ);
foreach($travaileurs as $travailleur)
      {
       
          if($travailleur->nom_wilaya ==$wilaya1)
          { 
             
             $b=1;
             
          }
         
      }
      return $b;

    }



    public function exister($id,$annonce)
    {
        $c =$this->connect() ;
        $d= $c->query("SELECT * from annoncetransporteurassoc where id_transporteur='$id' AND id_annonce='$annonce'");
        
        if($d->rowCount() > 0) {
            return true;
        } else {
            return false;
        }



    }
    private function connexion($dbname,$host,$user,$password)
   {
       $dsn="mysql:dbname=$dbname; host=$host;";
       try{
           $c =new PDO($dsn,$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET UTF8"));

       }
       catch(PDOException $ex)
       {
           printf("erreur de connexion à la base de données",$ex->getMessage()) ;
           exit();

       }
       return $c;
   }

   private function deconnexion(&$c)
   {
       $c=null;
   }

   private function requete($c,$r)
   {
       return $c->query($r) ;
   }
   public function get_diaporama_model()
   {
       $c=$this->connexion("tdw","127.0.0.1","root","");
       $qf="select * from diaporama";
       $r=$this->requete($c,$qf);
       $this->deconnexion($c);
     return $r;
   }
   
   public function get_annonces_model()
{
    $c=$this->connexion("tdw","127.0.0.1","root","");
    $qf="select * from annonce";
    $r=$this->requete($c,$qf);
    $this->deconnexion($c);
    return $r;
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

}




?>