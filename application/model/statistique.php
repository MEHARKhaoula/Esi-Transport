<?php
class statistique{

     public function __construct() {

       
    }

private function requete($c,$r)
    {
        return $c->query($r) ;
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

    public function get_user()
    {
        $c=$this->connect() ;
        $sql = "SELECT COUNT(*) FROM utilisateur ";
        $res = $c->query($sql);
        $count = $res->fetchColumn();
        return $count;
    }

    public function get_annonce()
    {
        $c=$this->connect() ;
        $sql = "SELECT COUNT(*) FROM annonce ";
        $res = $c->query($sql);
        $count = $res->fetchColumn();
        return $count;
    }

    public function get_transpo()
    {
        $c=$this->connect() ;
        $sql = "SELECT COUNT(*) FROM transporteur ";
        $res = $c->query($sql);
        $count = $res->fetchColumn();
        return $count;
    }
    public function get_Top()
    {
        $c = $this->connect() ;
    $sql = "SELECT * FROM annonce WHERE top =1";
    $res= $c->prepare($sql);
    $res->execute() ;
    $table=$res->fetchAll(PDO::FETCH_OBJ);
   
    return $table;

    }
}