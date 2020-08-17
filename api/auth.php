<?php



$driver = "mysql";
$host = "127.0.0.1:3306";
$un = "root";
$pass = "root";
$db_name = "it_co";


$email_ar = [];
$email = $_POST['email'];
$password = '';






//$options = array(
//    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
//); 
//$pdo = new PDO("$driver:host=$host;dbname=$db_name", $un, $pass, $options);   //подключение к бд
//$query = $pdo->query("SELECT * FROM `users`");
//while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
//    array_push($email_ar, $row['email']);
//}


//if (in_array($email, $email_ar)) {
//    echo "Вы уже зарегистрированны";
//
//} else if ($email == '') {
//    echo 'Введите Email';
//} else {
//    $sql = "INSERT INTO users(email, password) VALUES(:email, :password)";
//    $query = $pdo->prepare($sql);
 //   $query->execute(['email' => $email,'password' => $password]);   //регистрация
 //   echo 'Регистрация успешна';
//}
?>