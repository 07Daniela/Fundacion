<!-- update_user.php -->
<?php
require_once 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];    
    $cellphone = $_POST['cellphone'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $comment = $_POST['comment'];

    $user = new User();
    $user->update($id, $name, $lastname, $email,  $cellphone, $city, $country, $comment);
}
?>