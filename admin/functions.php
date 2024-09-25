<?php
class Database
{
    protected $hostname = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "landlord";

    protected function connect()
    {
        $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database) or die(mysqli_connect_error());
        if ($conn) {
            $data = $conn;
            return $data;
        }
    }
}
class Log extends Database
{
    public $connection;

    public function __construct()
    {
        $this->connection = $this->connect();
    }
}
class Caretakers extends Database
{
    public $connection;

    public function getAparts() {}
    public function addApart()
    {
        $this->connection = $this->connect();
    }
    public function deleteApart()
    {
        $this->connection = $this->connect();
    }
    public function updateApart()
    {
        $this->connection = $this->connect();
    }
}
class Apartments extends Database
{
    public $connection;
    public function generateId($length = 50)
    {
        return substr(md5(uniqid(mt_rand(), true)), 0, $length);
    }
    public function getAparts()
    {
        $this->connection = $this->connect();
        $id = $this->generateId();
        return $id;
        $query = "SELECT * FROM apartments";
        $result = mysqli_query($this->connect(), $query);
        // return $result;
    }
    public function addApart()
    {
        $this->connection = $this->connect();
    }
    public function deleteApart()
    {
        $this->connection = $this->connect();
    }
    public function updateApart()
    {
        $this->connection = $this->connect();
    }
}
class Tenants extends Database
{
    public $connection;

    public function getTenants()
    {
        $this->connection = $this->connect();
    }
    public function addTenant()
    {
        $this->connection = $this->connect();
    }
    public function deleteTenant()
    {
        $this->connection = $this->connect();
    }
    public function updateTenant()
    {
        $this->connection = $this->connect();
    }
}
class Activation extends Database
{
    public $connection;

    public function getActivation()
    {
        $this->connection = $this->connect();
    }
    public function addActivation()
    {
        $this->connection = $this->connect();
    }
    public function deleteActivation()
    {
        $this->connection = $this->connect();
    }
    public function updateActivation()
    {
        $this->connection = $this->connect();
    }
}
$getAparts = new Apartments;
$get_apartments = $getAparts->getAparts();
var_dump(($get_apartments));
