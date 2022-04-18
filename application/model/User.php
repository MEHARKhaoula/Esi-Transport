<?php
class User {
    
    public function __construct() {
     
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
 

    public function Inscrire($USER) {
        
        $c = $this->connect() ;
        $sql = $c->prepare('INSERT INTO utilisateur (nom,prenom,email,motdepasse,tel,adresse,type) VALUES(?,?, ?, ?, ?, ?, ?)');
      

        $sql->bindParam(1, $USER['username']);
        $sql->bindParam(2, $USER['userprenom']);
        $sql->bindParam(3, $USER['email']);
        $sql->bindParam(4, $USER['password']);
        $sql->bindParam(5, $USER['telephone']);
        $sql->bindParam(6, $USER['adresse']);
        $sql->bindParam(7,  $USER['type']);
        $sql->execute();
        
       
    }
    public function Inscrire2($USER)
    {
            if($USER['type']=='transporteur')
            {   
                $c = $this->connect() ;
                $sq = $c->prepare('INSERT INTO transporteur (nom,prenom,email,motdepasse,adresse,tel,certifie,statut) VALUES(?,?,?,?,?,?,?,?)');
                $sq->bindParam(1, $USER['username']);
                $sq->bindParam(2, $USER['userprenom']);
                $sq->bindParam(3, $USER['email']);
                $sq->bindParam(4, $USER['password']);
                $sq->bindParam(5, $USER['adresse']);
                $sq->bindParam(6, $USER['telephone']);
                $sq->bindParam(7, $USER['certifie']);
              
                $statut='en attente';
                $sq->bindParam(8, $statut);
    
             
    
               $sq->execute();
              $email= $USER['email'];
             foreach($USER['trajets']  as $trajet)
             {
                $c = $this->connect() ;
                $sql = "SELECT * FROM transporteur WHERE email = '$email'";
                $res= $c->prepare($sql);
                $res->execute();
                $row =  $res->fetch(PDO::FETCH_OBJ);
               
                $sql =$c->prepare("INSERT INTO travailler (id_transport,nom_wilaya) VALUES (?,?)");
                $sql->bindParam(1,$row->transporteur_id );
                $sql->bindParam(2,$trajet);
                $sql->execute();
              
             }
    
             foreach($USER['arrives']  as $trajet)
             {
                $c = $this->connect() ;
                $sql = "SELECT * FROM transporteur WHERE email = '$email'";
                $res= $c->prepare($sql);
                $res->execute();
                $row =  $res->fetch(PDO::FETCH_OBJ);
               
                $sql =$c->prepare("INSERT INTO travailler_arrive (id_transport,nom_wilaya) VALUES (?,?)");
                $sql->bindParam(1,$row->transporteur_id );
                $sql->bindParam(2,$trajet);
                $sql->execute();
    
             }
    
            }
        
        }
   
     
    public function login($username, $password) {
        $c = $this->connect() ;
        $sql = "SELECT * FROM utilisateur WHERE email ='$username'";
        $res= $c->prepare($sql);
        $res->execute() ;
        $row=$res->fetch(PDO::FETCH_OBJ);
         if($row)
         {
            $p = $row->motdepasse;

            if ($password===$p) {
                if($row->bloc ==1) 
                {
                   return false;
                }
                else{
                    return $row;
                }
               
            } else {
               
                return false;
            }
         }
         else
         {   

             return false;

         }
       
    }

    public function loginAdmin($id,$mot)
    {
        $c = $this->connect();
        $sql = "SELECT * FROM admin WHERE email = '$id'";
        $res= $c->prepare($sql);
        $res->execute() ;
        $table=$res->fetch(PDO::FETCH_OBJ);
        if($table)
        {
          
            if($mot =="admin") {  return true;} 
            else{
                return false;
            }
           
        }
        else
        {
            return false;
        }
        
    }

    public function findUserName($email) {
        $c = $this->connect();
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $res= $c->prepare($sql);
        $res->execute() ;
        $table=$res->fetch(PDO::FETCH_OBJ);
       

      
        if($table) {
            return $table;
        } else {
            return false;
        }
    }

    public function allWilaya() {
        $c = $this->connect();
        $sql ="SELECT * FROM wilayas ";
        $res= $c->prepare($sql);
        $res->execute() ;
        $results=$res->fetchAll(PDO::FETCH_OBJ);
        return $results;

       
        
    }

    public function findNote($id)
    {
        $c = $this->connect() ;
        $sql = "SELECT * FROM note WHERE id_transport = '$id'";
        $res= $c->prepare($sql);
        $res->execute() ;
        $table=$res->fetchAll(PDO::FETCH_OBJ);
        $t = 0 ;
        $i = 0 ;
        foreach($table as $note)
        {
         $t = $t + $note->n ;
         $i++;
        }
        if($i==0)
        {
            return 0;
        }
        else{
            return $t/$i;

        }
        
    }

    public function findGain($id)
    {
        $c = $this->connect() ;
        $sql = "SELECT * FROM transporteur WHERE transporteur_id = '$id'";
        $res= $c->prepare($sql);
        $res->execute() ;
        $table=$res->fetch(PDO::FETCH_OBJ);
        return $table->somme ;
    }
    public function findAnnonceClient($client) 
    {
        $c = $this->connect() ;
      $sql = "SELECT * FROM annonce WHERE id_client = '$client'";
      $res= $c->prepare($sql);
      $res->execute() ;
      $table=$res->fetchAll(PDO::FETCH_OBJ);
     
      return $table;
        
    }

    public function findAnnonceTrans($client) 
    {
        $c = $this->connect() ;
        $sql = "SELECT * FROM annonce WHERE id_transport = '$client'";
        $res= $c->prepare($sql);
        $res->execute() ;
        $table=$res->fetchAll(PDO::FETCH_OBJ);
       
        return $table;
        
    }
    
    
    public function findTransport($id)
    {
    $c =$this->connect() ;

$d= $c->query("SELECT * from annoncetransporteurassoc where id_annonce='$id'");
$travailleurs=$d->fetchAll(PDO::FETCH_OBJ);
return $travailleurs;
    }

    public function findUser($id)
    {
        $c = $this->connect() ;
        $sql = "SELECT * FROM utilisateur WHERE user_id='$id'";
       $res= $c->prepare($sql);
        $res->execute();
        $row =  $res->fetch(PDO::FETCH_OBJ);
        return $row;
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


    public function findTransportWil($id)
    {
        $c = $this->connect() ;
      $sql = "SELECT * FROM travailler WHERE id_transport = '$id'";
      $res= $c->prepare($sql);
      $res->execute() ;
      $table=$res->fetchAll(PDO::FETCH_OBJ);
     
      return $table;
    }

    public function findTransportWil2($id)
    {
        $c = $this->connect() ;
      $sql = "SELECT * FROM travailler_arrive WHERE id_transport = '$id'";
      $res= $c->prepare($sql);
      $res->execute() ;
      $table=$res->fetchAll(PDO::FETCH_OBJ);
     
      return $table;
    }
    public function search_transporteur($id)
    {
        $c =$this->connect() ;
   $sql = "SELECT * from transporteur where email='$id'";
   $res= $c->prepare($sql);
    $res->execute();
    $row =  $res->fetch(PDO::FETCH_OBJ);
    return $row;
    }

    public function certifie($id) 
    {
        $c = $this->connect() ;
        $sql = $c->prepare("   UPDATE   transporteur set   certifie ='oui',statut='en attente' WHERE transporteur_id = ? ");
        $sql->bindParam(1,$id);
        $sql->execute(); 
    }
}
