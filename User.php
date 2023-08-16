<?php
class User {
    private $servername = "localhost";
    private $username = "root"; 
    private $password = ""; 
    private $dbname = "fundacion"; 
    

    public function insert($id, $name, $lastname, $email,  $cellphone, $city, $country, $comment) {
        $conn = new mysqli($this->servername, $this->username, $this->password,  $this->dbname);
        
        if ($conn->connect_error) {
            die("Error en la conexión: " . $conn->connect_error);
        }

        $sql = "INSERT INTO voluntarios (id,nombre,apellido, correo, celular, ciudad, pais, comentario) VALUES ('$id', '$name', '$lastname', '$email',  '$cellphone', '$city', '$country', '$comment')";

        if ($conn->query($sql) === TRUE) {
            header("refresh:1;url=index.php");
            
            echo "Usuario registrado exitosamente.";
            
        } else {
            echo "Error al registrar el usuario: " . $conn->error;
        }

        $conn->close();
    }

    public function listUsers() {
        $conn = new mysqli($this->servername, $this->username,$this->password,  $this->dbname);
        if ($conn->connect_error) {
            die("Error en la conexión: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM voluntarios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["apellido"] . "</td>";
                echo "<td>" . $row["correo"] . "</td>";
                echo "<td>" . $row["celular"] . "</td>";
                echo "<td>" . $row["ciudad"] . "</td>";
                echo "<td>" . $row["pais"] . "</td>";
                echo "<td>" . $row["comentario"] . "</td>";
                echo "<td>
                        <a href='edit_user_form.php?id=" . $row["id"] . "'>Modificar</a> |
                        <a href='delete_user.php?id=" . $row["id"] . "'>Eliminar</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "No se encontraron usuarios registrados.";
        }

        $conn->close();
    }

    public function getUserById($id) {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Error en la conexión: " . $conn->connect_error);
        }
    
        $sql = "SELECT * FROM voluntarios WHERE id='$id'";
        $result = $conn->query($sql);
    
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $conn->close(); 
            return $row;
        } else {
            $conn->close(); 
            return null;
        }
    }

    public function update($id, $name, $lastname, $email,  $cellphone, $city, $country, $comment) {
        $conn = new mysqli($this->servername, $this->username,$this->password,  $this->dbname);
        if ($conn->connect_error) {
            die("Error en la conexión: " . $conn->connect_error);
        }

        $sql = "UPDATE voluntarios SET nombre='$name', apellido='$lastname', correo='$email', celular='$cellphone', ciudad='$city', pais='$country', comentario='$comment' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            header("refresh:1;url=pagina.php");
            echo "Usuario actualizado exitosamente.";
        } else {
            echo "Error al actualizar el usuario: " . $conn->error;
        }

        $conn->close();
    }

    public function delete($id) {
        $conn = new mysqli($this->servername, $this->username,$this->password,  $this->dbname);
        if ($conn->connect_error) {
            die("Error en la conexión: " . $conn->connect_error);
        }

        $sql = "DELETE FROM voluntarios WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            header("refresh:1;url=pagina.php");
            echo "Usuario eliminado exitosamente.";
        } else {
            echo "Error al eliminar el usuario: " . $conn->error;
        }

        $conn->close();
    }
}

