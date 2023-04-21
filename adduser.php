<?php
include 'database.php';

class UserDao {
    public static function insertar() {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        // Sentencia para añadir usuarios
        $sql = "INSERT INTO usuarios (username, password) VALUES (:username, :password)";

        // Encapsulan los datos
        $dao = Conexion::conectar();
        $sth = $dao->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(
            ':username' => $user,
            ':password' => $pass
        ));

        // Valida si se insertó alguna fila
        if ($sth->rowCount() > 0) {
            echo "Se guardó";
        } else {
            echo "No se guardó";
        }
    }
}

UserDao::insertar();
?>