<?php
// Connection Class
class db{
    // Conntection Variables
    public $conn;
    public $dsn = "mysql:host=localhost; dbname=cryptoinject";
    public $db_user = "cryptoinject";
    public $db_pass = "";
    // Auto Call Construst Function
    public function __construct(){
        // Connection
        try{
            $this->conn = new PDO($this->dsn, $this->db_user, $this->db_pass);
            // Set Error
            $this->conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $c){
            echo("Connection Failed");
        }
        // End Connection
    }
    // End Function
}
// End Class
?>