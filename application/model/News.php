<?php
class News{

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

    public function get_news_model()
{
    $c = $this->connect() ;
    $res= $c->query("SELECT * from news");
    $table=$res->fetchAll(PDO::FETCH_OBJ);
    return $table;
}

public function get_info_news($id)
{
    $c = $this->connect() ;
    $sql = "SELECT * FROM news WHERE id = '$id'";
   $res= $c->prepare($sql);
    $res->execute();
    $row =  $res->fetch(PDO::FETCH_OBJ);
    return $row;
}

public function insert($new)
{
    $c = $this->connect() ;
        $sql = $c->prepare("INSERT INTO news(titre,texte,img,date) VALUES(?,?,?,NOW())") ;
        $sql->bindParam(1,$new['titre']) ;
        $sql->bindParam(2,$new['texte']) ;
        $sql->bindParam(3,$new['file']) ;
        $sql->execute() ;
}


}