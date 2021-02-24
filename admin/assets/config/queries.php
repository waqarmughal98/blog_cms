<?php
// Queries
class Queries extends db{
    public $result;
    // Crud Method
    public function query($qry, $param = []){
        if(empty($param)):
            $this->result = $this->conn->prepare($qry);
            return $this->result->execute($param);
        else:
            $this->result = $this->conn->prepare($qry);
            return $this->result->execute($param);
        endif;
    }
    // Count Number Of Rows
    public function count(){
        return $this->result->rowCount();
    }
    // Fetch Single Row
    public function fetch(){
        return $this->result->fetch(PDO::FETCH_OBJ);
    }
}
?>