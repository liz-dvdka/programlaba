
<?php
$username = "admin";
$password = "8888";
if ($_POST['user'] != $username || $_POST['pass'] != $password) {
?>
<html>
		<head>
			<title>Автоматизированная система продажи билетов в метро</title>
			<meta charset = "UTF-8">
			<link rel="stylesheet" type="text/css" href="style.css">
		</head>
		<body>
			<header>
				<p>Вход для админов</p>
			</header>
			<main>
				<article>
					<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
     				<table style="margin: auto ">
						<tr><td>Логин:</td>
                        	<td><input type="text" name="user" /></td></tr>
						<tr><td>Пароль:</td>
                        	<td><input type="text" name="pass" /></td>
                        </tr>
                        </table>
                        <br>
					<button class="button" style=" margin: 0 auto;
  display: block;" type="submit">Войти</button></p>
					</form>
				</article>	

			</main>
			<footer><p>Сайт создан Давыдовой Елизаветой и Костиной Анастасией</p>
					<a href = "index.html">Главная страница сайта</a>
			</footer>
		</body>
	</html>
<?php
}
else {
				header('Content-Type: text/html; charset=utf-8');
				$link = mysqli_connect("localhost", "root", "root", "program");
				$selectedTable = 'client';
				$selectedTable2 = 'clientM';
				echo "<link rel='stylesheet' type='text/css' href='style2.css'>";

							// Проверьте подключение
							if($link === false){
							    die("ERROR: Нет подключения. " . mysqli_connect_error());
							}


							$sql_select = "SELECT * FROM $selectedTable";
							if ($result = mysqli_query($link , $sql_select)) {

							

							  echo '<table >';
							  echo '<thead>';
							  echo '<tr>';
							  echo '<th>Фамилия</th>';
							  echo '<th>Имя</th>';
							  echo '<th>Отчество</th>';
							  echo '<th>Почта</th>';
							  echo '<th>Дата</th>';
							  echo '</tr>';
							  echo '</thead>';
							  echo '<tbody>';
							  
							   // выводим в HTML-таблицу все данные клиентов из таблицы MySQL 
							  while ($row = mysqli_fetch_array($result)){
							    echo '<tr>';
							    echo '<td>' . $row['secondname'] . '</td>';
							    echo '<td>' . $row['firstname'] . '</td>';
							    echo '<td>' . $row['patronymic'] . '</td>';
							    echo '<td>' . $row['mail'] . '</td>';
							    echo '<td>' . $row['datet'] . '</td>';
							    echo '</tr>';
							  }
							  
							    echo '</tbody>';
							  	echo '</table>';
							  	echo '<br>';
								
						}
							$sql_select2 = "SELECT * FROM $selectedTable2";
							if ($result = mysqli_query($link , $sql_select2)) {
							
							  echo '<table >';
							  echo '<thead>';
							  echo '<tr>';
							  echo '<th>Фамилия</th>';
							  echo '<th>Имя</th>';
							  echo '<th>Отчество</th>';
							  echo '<th>Почта</th>';
							  echo '<th>От</th>';
							  echo '<th>До</th>';
							  echo '</tr>';
							  echo '</thead>';
							  echo '<tbody>';
							  
							   // выводим в HTML-таблицу все данные клиентов из таблицы MySQL 
							  while ($row = mysqli_fetch_array($result)){
							    echo '<tr>';
							    echo '<td>' . $row['secondname'] . '</td>';
							    echo '<td>' . $row['firstname'] . '</td>';
							    echo '<td>' . $row['patronymic'] . '</td>';
							    echo '<td>' . $row['mail'] . '</td>';
							    echo '<td>' . $row['start_date'] . '</td>';
							    echo '<td>' . $row['final_date'] . '</td>';
							    echo '</tr>';
							  }
							  
							    echo '</tbody>';
							  	echo '</table>';
							  	echo '<br>';
							  	echo '<a style=" background: #fffff; font-size:  15pt;" href = "index.html">Назад</a>';
					}
					}		
						
?>
