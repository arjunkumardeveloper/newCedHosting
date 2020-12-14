<?php
/**
 * The file doc comment
 * php version 7.2.10
 * 
 * @category Class
 * @package  Package
 * @author   Original Author <author@example.com>
 * @license  https://www.cedcoss.com cedcoss 
 * @link     link
 */

/**
 * Template Class Doc Comment
 * 
 * Template Class
 * 
 * @category Template_Class
 * @package  Template_Class
 * @author   Arjun <author@domain.com>
 * @license  https://www.cedcoss.com cedcoss
 * @link     http://localhost/
 */
class Dbcon
{
    public $conn;
    public $servername;
    public $username;
    public $password;
    public $dbname;

    /**
     * Constructor function
     */
    public function __construct()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "CedHosting";
    }

    /** 
     * Function for create connection
     * 
     * @return createConnection()
     */
    public function createConnection()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn) {
            return $this->conn;
        } else {
            return 'Connection Error';
        }
    }
}
// $dbcon = new Dbcon();
// $conn = $dbcon->createConnection();
// var_dump($conn);
?>