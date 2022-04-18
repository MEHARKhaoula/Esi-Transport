<?php
class transactions extends Controller
{
    public function __construct() {
        require_once (APP . 'model/transaction.php');
        $this->model = new transaction();
     }

    public function afficher_transactions()
    {   

        
    }
}