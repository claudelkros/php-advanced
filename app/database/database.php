<?php
namespace app\database;
use \PDO;
/**
 *
 */
class Database
{

  private $db_name;
  private $db_host;
  private $db_user;
  private $db_pass;
  private $pdo;

  function __construct($db_name = "php", $db_host = "localhost", $db_user = "root", $db_pass = "")
  {
    $this->db_name = $db_name;
    $this->db_host = $db_host;
    $this->db_user = $db_user;
    $this->db_pass = $db_pass;
  }

  public function getPDO(){
      if ($this->pdo === null){
          $pdo = new PDO('mysql:host=localhost;dbname=php;charset=utf8', 'root', '');
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $this->pdo = $pdo;
      }

      return $pdo;
  }
}
