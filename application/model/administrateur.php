<?php
class administrateur{

    public function get_transporteurs()
    {   
        $c=$this->connect();
        $res= $c->query("SELECT * from transporteur");
     $table=$res->fetchAll(PDO::FETCH_OBJ);
     return $table;
    }

    public function valider_transporteur($id)
    {
        $i = 1;
        $c=$this->connect();
        $sql = $c->prepare("UPDATE transporteur set  insc=? WHERE transporteur_id = ?");
        $sql->bindParam(1,$i);
        $sql->bindParam(2,$id);
          
          $sql->execute();
    }
    public function get_clients()
    {   
        $c=$this->connect();
        $res= $c->query("SELECT * from utilisateur");
     $table=$res->fetchAll(PDO::FETCH_OBJ);
     return $table;
    }
    
    public function get_annonces()
    {
        $c=$this->connect();
        $res= $c->query("SELECT * from annonce");
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


public function modifier($statut,$id)
{
    $c=$this->connect();
    $sql = $c->prepare("   UPDATE   transporteur set  statut=? WHERE transporteur_id = ? ");
      $sql->bindParam(1,$statut);
      $sql->bindParam(2,$id);
      $sql->execute();
}

public function supprime($id)
{
    $c=$this->connect();
    $sql = $c->prepare("   UPDATE   annonce set  supp=1 WHERE id_annonce = ? ");
      $sql->bindParam(1,$id);
      $sql->execute();
}

public function modifierJust($just,$id)
{
    $c=$this->connect();
    $sql = $c->prepare("   UPDATE   transporteur set  just=? WHERE transporteur_id = ? ");
      $sql->bindParam(1,$just);
      $sql->bindParam(2,$id);
      $sql->execute();
}

public function valider($id)
{
    $oui="oui" ;
    $c=$this->connect();
    $sql = $c->prepare("   UPDATE   annonce set  etat=? WHERE id_annonce = ? ");
      $sql->bindParam(1,$oui);
      $sql->bindParam(2,$id);
      $sql->execute();
}

public function validerTarif($id,$tarif)
{
    
    $c=$this->connect();
    $sql = $c->prepare("   UPDATE   annonce set  tarif=? WHERE id_annonce = ? ");
      $sql->bindParam(1,$tarif);
      $sql->bindParam(2,$id);
      $sql->execute();
}

public function get_news_model()
{
    $c = $this->connect() ;
    $res= $c->query("SELECT * from news");
    $table=$res->fetchAll(PDO::FETCH_OBJ);
    return $table;
}

public function bloquer($id)

{
    $i = 1;
    $c=$this->connect();
    $sql = $c->prepare("   UPDATE   utilisateur set  bloc=? WHERE user_id = ? ");
      $sql->bindParam(1,$i);
      $sql->bindParam(2,$id);
      $sql->execute();
}

}