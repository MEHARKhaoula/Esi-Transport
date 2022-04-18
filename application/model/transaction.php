<?php
class transaction 
{

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
    public function get_transactions($id)
    {
    $c = $this->connect() ;
    $sql = "SELECT * FROM annonce WHERE transaction = 1 AND id_client='$id'";
    $res= $c->prepare($sql);
    $res->execute() ;
    $table=$res->fetchAll(PDO::FETCH_OBJ);
    return $table;
    }
}