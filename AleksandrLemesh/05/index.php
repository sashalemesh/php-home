<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>homework_08</title>
		<style>
		
			
	</style>
    </head>
    <body>
					<h1>Домашнее задание к занятию 05</h1>
	<h2>Первое задание</h2>
Сформировать матрицы(Двумерные массивы) изображенные на картинке. Матрицы должны быть квадратными,
но размер матриц вводится пользователем с экрана.(Выводить матрицы в виде таблицы ненадо)!<br><br>
	<form action="<?=$_SERVER['PHP_SELF']?>" method='GET'>
		<label for="a">COLS</label><input type='text' name='cols' id='a'/><br>
		<input type="checkbox" name="matrix_1" id="matrix_1" >
			<label for="matrix_1">Первая матрица</label><br>
		<input type="checkbox" name="matrix_2" id="matrix_2" >
			<label for="matrix_2">Вторая матрица</label><br>
		<input type="checkbox" name="matrix_3" id="matrix_3" >
			<label for="matrix_3">Третья матрица</label><br>
		<input type='submit' value='Отправить'/>
	</form>
	<?php						//Сделать все массивом.!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	echo "<br>";	
	if($_GET["matrix_1"]){
		$cols = $_GET["cols"];//cols
		$rows = $_GET["cols"];//rows
		echo "<table >";
		for($tr=1; $tr <= $cols; $tr++){			
			echo "<tr>";
				for($td=1; $td <= $rows; $td++){
					echo "<td>";
						echo $tr * $td;
					echo "</td>";
				}
			echo "</tr>";
		}
		echo "</table>";
	}
		echo "<br>";
	if($_GET["matrix_2"]){	
		$cols = $_GET["cols"];//cols
		$rows = $_GET["cols"];//rows
		$q = $rows;
		echo "<table >";
			for($tr=1; $tr <= $cols; $tr++){
				echo "<tr>";				
					for($td=1; $td <= $rows; $td++){
						echo "<td>";						
							if($tr == $td)
								echo "1";
							elseif($td == $q)
								echo "2";
							elseif($td > $tr && $td > $q)
								echo "3";
							elseif($td < $tr && $td > $q)
								echo "5";
							elseif($td > $tr && $td < $q)
								echo "3";
							elseif($td < $tr && $td < $q)
								echo "6";
						echo "</td>";
					}
					$q--;
				echo "</tr>";
			}			
		echo "</table >";
	}
		echo "<br>";
		
function fibonacci($n)
{
    if ($n < 3) {
        return 1; 
    }
    else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}		
		if($_GET["matrix_3"]){
		$cols = $_GET["cols"];//cols
		$rows = $_GET["cols"];//rows
		echo "<table >";
		for($tr=1; $tr <= $cols; $tr++){			
			echo "<tr>";
				for($td=1; $td <= $rows; $td++){
					echo "<td>";
						if($td > $tr)
							echo " ";
						elseif($td == 1 || $td == $tr)
							echo "1";
						else{							
							echo $tr-1 + $tr-1 + $td-1;		//как описать этот код???				
						}
					echo "</td>";
				}
			echo "</tr>";
		}
		echo "</table>";
		}
		echo "<br>";
	?>	
	<h2>Второе задание</h2>
<div>Расширить первое задание. К форме ввод добавить 3 чекбокса. Каждый чекбокс соответствует 
конкретной матрице. Если чекбокс активен, то ниже формы отображаем таблицу с матрицей. 
Если активны все чекбоксы, то отображаем все матрицы.</div>
 
	<h2>Третье задание</h2>
<div><b>3.1.</b> Спросите имя пользователя с помощью формы. Результат запишите в переменую 
$name. Выведите на экран фразу 'Привет,%Имя%'.</div><br><br>
<?php
$visitCounterr = 0;
if(isset($_COOKIE["visitCounterr"]))
	$visitCounterr = $_COOKIE["visitCounterr"];
$visitCounterr ++;
setcookie("visitCounterr", $visitCounterr);
if($visitCounterr == 1){	
?>
	<form action="<?=$_SERVER['PHP_SELF']?>" method='GET'>
		<label for="b">Введите ваше имя</label><input type='text' name='name' id='b'/><br>
		<label for="c">Введите ваш возраст</label><input type='text' name='age' id='c'/><br>
		<textarea cols="30" rows="5" name='text' ></textarea><br>
		<input type='submit' value='Отправить'/>
	</form>
<?php
}else{
	$name = trim(strip_tags($_GET['name']));
	$age = abs((int)$_GET['age']);
	echo '<h4>';
	echo "Привет, $name, $age лет<br>";
	echo Твое .' '.сообщение .':' .$_GET['text'];
	echo '</h4>';
}
?>
	<div><b>3.2.</b> Спросите у пользователяимя, возраст, а также попросите его ввести сообщение 
(его сделайте в textarea).Выведите эти данные на экран в формате,приведенном под данной задачей.
Позаботьтесьотом,чтобы пользователь не мог вводить теги (просто удаляйтеих) и таким образом 
сломать сайт. </div>
			<h4>Привет, Дмитрий, 25 лет.</h4>
			<h4>Твое сообщение: ...</h4>
 			
	<div><b>3.3.</b> Спросите возраст пользователя. Если форма была отправлена и введен возраст, 
то выведите его на экран, а форму уберите. Если же форма небыла отправлена (это будет при первом 
заходе на страницу) ­ просто покажите ее.</div>

	</body>
	</html>