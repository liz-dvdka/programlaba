
<?php
    // Указываем кодировку
    header('Content-Type: text/html; charset=utf-8');

 
$link = mysqli_connect("localhost", "root", "root", "program");
 
// Проверьте подключение
if($link === false){
    die("ERROR: Нет подключения. " . mysqli_connect_error());
}
    //  экранирует специальные символы в строке
	$secondname = mysqli_real_escape_string($link, $_REQUEST['secondname']);
	$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
	$patronymic = mysqli_real_escape_string($link, $_REQUEST['patronymic']);
    $mail = mysqli_real_escape_string($link, $_REQUEST['mail']);
    $datet = mysqli_real_escape_string($link, $_REQUEST['datet']);
 
// Попытка выполнения запроса вставки
	$sql = "INSERT INTO client(secondname, firstname, patronymic, mail, datet) VALUES ('$secondname', '$firstname', '$patronymic', '$mail', '$datet')";
if(mysqli_query( $link, $sql)){
    echo "Записи успешно добавлены.";
} else{
    echo "ERROR: Не удалось выполнить $sql. " . mysqli_error($link);
}

header('Location: ../index.html');
 
// Закрыть соединение
mysqli_close($link);
?>