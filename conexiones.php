<?php
class ConexionPDO{
    private $host;
    private $dd;
    private $user;
    private $password;
    private $conexion;

    public fuction__construct($host,$db,$user.$password)
    {
        $this->host=$host;
        $this-db=$db;
        $this->user=$user;
        $this->password=$password;
        $this->conexion=$host;

    }

    public fuction conectar(){
            try{
                $opcion =array{
                    PDO::ATTR_ERRMODE=>PDO::errmode_exception
                };
                $this->conexion=new PDO('mysql:host='.$this->host.';
                dbname='$this->db,
                $this->user,
                $this->password
                $opcion
                );
                if($this->conexion){
                    echo "conexio exitosa";
                }else{
                    echo "fallo la conexion";
                }

            }
            cath{PDOException $e}{
                echo "error de conexion".$e->getMessanger();
                die();
            }
        {


        }

    }
    public fuction desconectar(){
        $this->conexion=null;
            echo "base de datos descononectada";

    }
}
$host="localhost";
$db="dbclasepoo"
$user="root";
$password="";

?>