<?php
if (isset($_POST)) {

    if (isset($_POST["usuario"]) && isset($_POST["contraseña"])) {
        $usuario = $_POST["usuario"];
        $contra = $_POST["contraseña"];

        IniciarSesion1($usuario, $contra);
    }
}


function ponerCarrito($id00)
{

    try {
        $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");

        $sqlCaR1 = "SELECT * FROM Carrito WHERE id_cliente='" . $id00 . "' ";

        $sentenciaCaR1 = $conexion_bd->query($sqlCaR1);

        while ($resultadoCaR1 = $sentenciaCaR1->fetch_assoc()) {
            $idO0 = $resultadoCaR1["id_cliente"];
            $json00 = $resultadoCaR1["carrito"];
        }

        if (isset($idO0) && isset($json00)) {
            function JSON2Array($json00)
            {
                return  (array) json_decode(stripslashes($json00));
            }
            $array = JSON2Array($json00);

            for ($z = 1; $z >= 1 && $z <= 38; $z++) {
                setcookie($z, $array["$z"], time() + 2592000, "/tiendaMeint", "localhost");
            }

            //$var = "0";
            echo "1";
        } else {
            echo "0";
        }
    } catch (Exception $e) {
        echo "Error";
    }
}    

function IniciarSesion1($usuario, $contra)
{
    class IniciarSesion
    {

        private $servidor;
        private $usuario;
        private $contraseña;
        private $bd;

        protected $conexion_bd;

        public function __construct()
        {
            $this->servidor = "localhost";
            $this->usuario = "Meint";
            $this->contraseña = "XC7jlFQSGZAsrEhm";
            $this->bd = "TiendaMeint";

            try {
                $this->conexion_bd = new PDO("mysql:host=$this->servidor; dbname=$this->bd", "$this->usuario", "$this->contraseña");
                $this->conexion_bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conexion_bd->exec("SET CHARACTER SET utf8");
                return $this->conexion_bd;
            } catch (Exception $e) {
                echo "Error: " . $e->getLine();
            }
        }

        public function obtenerDatosEIniciarSesion($usuario, $contraseña)
        {

            try {
                $sql1 = "SELECT * FROM Usuarios WHERE usuario ='" . $usuario . "' AND contra = '" . $contraseña . "'";
                $sentencia1 = $this->conexion_bd->prepare($sql1);
                $sentencia1->execute();
                $verificar = $sentencia1->rowCount();
                if ($verificar != 0) {
                    session_start();
                    $_SESSION["usuario"] = "$usuario";

                    try {
                        $conexion_bd = new mysqli("localhost", "Meint", "XC7jlFQSGZAsrEhm", "tiendaMeint");

                        $sqlD = "SELECT * FROM Usuarios WHERE usuario ='" .  $_SESSION["usuario"] . "'";

                        $sentenciaA = $conexion_bd->query($sqlD);

                        while ($resultado = $sentenciaA->fetch_assoc()) {
                            $id = $resultado["id_cliente"];
                        }
                        $_SESSION["id"] = "$id";
                    } catch (Exception $e) {
                        echo "Error1";
                    }
                    $_SESSION["id"] = "$id";
                    $id00 = $_SESSION["id"];

                    ponerCarrito($id00);
                } else {
                    echo "Error1";
                }
                $sentencia1->closeCursor();
            } catch (Exception $e) {
                echo "Error1";
            }
        }
    }
    $conectar1 = new IniciarSesion();
    $conectar1->__construct();
    $conectar1->obtenerDatosEIniciarSesion($usuario, $contra);

?>

<?php
}
