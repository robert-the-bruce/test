<?php



class Dbconn
{
    private $server;
    private $db;
    private $user;
    private $password;
    private $con;
    private $query;
    private $param;
    private $statement;

    public function __construct($server, $db, $user, $password)
    {
        $this->server = $server;
        $this->db = $db;
        $this->user = $user;
        $this->password = $password;

        try {

            $this->con = new PDO('mysql:host=localhost;dbname='.$this->db, $this->user, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Verbunden mit Datenbank: <b>'. $this->db .'</b>';

        } catch (PDOException $e) {
            switch($e->getCode())
            {
                case 2002:
                    echo 'Verbindung zum Server <b>'.$this->server.'</b> nicht möglich!<br>';
                    break;
                case 1044:
                    echo 'Probleme beim Zugriff mit Benutzer: <b>'.$this->user.'</b>';
                    break;
                case 1045:
                    echo 'Passwort evt. falsch für Benutzer: '.$this->user.'! Zugriff abgelehnt!<br>';
                    break;
                case 1049:
                    echo 'Die Datenbank <b>'.$this->db.'</b> existiert nicht!<br>';
                    break;
                default:
                    echo $e->getMessage();
            }
        }
    }

    public function getDb() {
        if ($this->con instanceof PDO) {
            return $this->con;
        }
    }


    public function getStatement($query, $param=NULL){

        $this->query = $query;
        $this->param = $param;
        $this->statement = $this->con->prepare($query);

        $this->statement->execute($param);

    }
}