<?php


include_once('db.php');


class DatabaseProcess extends DatabasePDO
{

    private $user;
    private $pass;


    public function getAll()
    {
        try {

            # Conexión a MySQL
            // Instantiate database.
            $cnn = $this->conn();
            //Preparamos la consulta sql
            $respuesta = $cnn->prepare("select * from children");
            //Ejecutamos la consulta
            $respuesta->execute();
            //Creamos un array donde almacenaremos la data obtenida
            $usuarios = [];
            //Recorremos la data obtenida
            foreach ($respuesta as $res) {
                //Llenamos la data en el array
                $usuarios[] = $res;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $usuarios;
    }


    public function login($user, $pass)
    {
        try {

            $this->user = $user;
            $this->pass = $pass;


            $cnn = $this->conn();
            $stmt = $cnn->prepare("SELECT * FROM users WHERE user=:usernameEmail  AND pass=:hash_password");
            $stmt->bindParam("usernameEmail", $this->user, PDO::PARAM_STR);
            $stmt->bindParam("hash_password", $this->pass, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $data = $stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            $mesage = "";
            if ($count) {

                $mesage = "verdadero";
            } else {
                $mesage = "Falso";
            }
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
        return $mesage;
    }

    public function create($f_name,$s_name, $f_surname,$s_surname, $ti)
    {
        try {

            $cnn = $this->conn();
            $stmt = $cnn->prepare("INSERT INTO children (f_name,s_name,f_surname,s_surname,ti) VALUES (:f_name,:s_name, :f_surname,:s_surname, :ti)");
            $stmt->bindParam(":f_name", $f_name, PDO::PARAM_STR);
            $stmt->bindParam(":s_name", $s_name, PDO::PARAM_STR);
            $stmt->bindParam(":f_surname", $f_surname, PDO::PARAM_STR);
            $stmt->bindParam(":s_surname", $s_surname, PDO::PARAM_STR);
            $stmt->bindParam(":ti", $ti, PDO::PARAM_INT);
            $stmt->execute();
            $count = $stmt->rowCount();
            $mesage = "";
            if ($count) {
                $mesage = "verdadero";
            } else {
                $mesage = "Falso";
            }
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
        return $mesage;
    }

    public function update($id, $f_name,$s_name, $f_surname,$s_surname, $ti)
    {
        try {

            $cnn = $this->conn();
            $stmt = $cnn->prepare("UPDATE children SET f_name=:f_name,s_name=:s_name, f_surname=:f_surname,s_surname=:s_surname, ti=:ti WHERE id=:id");
            $stmt->bindParam(":f_name", $f_name, PDO::PARAM_STR);
            $stmt->bindParam(":s_name", $s_name, PDO::PARAM_STR);
            $stmt->bindParam(":f_surname", $f_surname, PDO::PARAM_STR);
            $stmt->bindParam(":s_surname", $s_surname, PDO::PARAM_STR);
            $stmt->bindParam(":ti", $ti, PDO::PARAM_INT);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $count = $stmt->rowCount();
            $mesage = "";
            if ($count) {
                $mesage = "verdadero";
            } else {
                $mesage = "Falso";
            }
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
        return $mesage;
    }

    public function delete($id)
    {
        try {
            $cnn = $this->conn();
            $stmt = $cnn->prepare("DELETE FROM children WHERE id=:id");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $count = $stmt->rowCount();
            $mesage = "";
            if ($count) {
                $mesage = "verdadero";
            } else {
                $mesage = "Falso";
            }
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
        return $mesage;
    }

}