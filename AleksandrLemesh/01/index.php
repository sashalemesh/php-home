<?php
echo "Hello world <hr>";
?>

<?php
/*
ЗАДАНИЕ 1
- Создайте переменную $age
- Присвойте переменной $age произвольное числовое значение
*/
$age = 28;
?>

	<?php
	/*
	ЗАДАНИЕ 2
	- Напишите конструкцию if, которая выводит фразу: "Вам ещё работать и работать" при условии, что значение переменной $age попадает в диапазон чисел от 18 до 59(включительно)
	- Расширьте конструкцию if, выводя фразу: "Вам пора на пенсию" при условии, что значение переменной $age больше 59
	- Расширьте конструкцию if-else, выводя фразу: "Вам ещё рано работать" при условии, что значение переменной $age попадает в диапазон чисел от 1 до 17(включительно)
	- Дополните конструкцию if-elseif, выводя фразу: "Неизвестный возраст" при условии, что значение переменной $age не попадает в вышеописанные диапазоны чисел
	*/
	if($age >= 18 and $age <= 59){
		echo "Вам ещё работать и работать";
	}elseif($age > 59){
		echo "Вам пора на пенсию";
	}elseif($age < 18 and $age >= 1){
		echo "Вам ещё рано работать";
	}
	else{
		echo "Неизвестный возраст";
	}
	echo '<hr>';
?>

<?php
	
	$cols = 10;//кол-во $td
	$rows = 10;//кол-во $tr
	$color = "yellow";
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Таблица умножения</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
	<style>
		h1, div{text-align:center;
			margin-top:3em;}
			th{background:<?=$color?> ;}
		table{border:3px solid black;
			margin:0 auto;}
	</style>
</head>
<body>
	<h1>Tаблица умножения</h1>
	<?php
	
		echo "<table> \n";
			for ($tr=1; $tr<=$rows; $tr++){
				echo "\t\t <tr> \n" ;
					for($td=1; $td<=$cols; $td++){
						if($td==1 or $tr==1)
							echo "\t\t\t <th>" . $tr * $td . "</th> \n";
						else
							echo "\t\t\t <td>" . $tr * $td . "</td> \n";
					}
				echo "\t\t </tr> \n";
			}
		echo "\t </table> \n";
		
		// Задание: вывести не четные числа от 1 до 50 в столбик.
		
	for($i=1; $i<=50; $i+=2){
		echo "\t\t\t\t<div> $i </div> <br>\n";
	}
	echo '<hr>';
	?>
	
</body>
</html>

<?php
	/*
	Первое задание
Найти сумму 1+4+7+10+...+n.
n - можно изменять.*/
echo "pervoe Первое задание
Найти сумму 1+4+7+10+...+n.
n - можно изменять. <br>";
	$n = 10;
	$sum = 0;	
	for($i=0; $i<=1; $i++){
		for($i=1; $i<=$n; $i+=3){
			$sum += $i;
		}
	}
		echo "Сумма от 1 до $n = $sum";
		echo "<br>";
/*$n=10;
$sum=0;
for ($i=1; $i<=$n; $i+=3) {
   $sum += $i;}
echo "При n=$n 1+4+7+10+...+n = $sum";*/
		echo '<hr>';
	/*Второе задание
Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера.*/
	echo "vtoroe Второе задание
Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера.<br>";
	echo "<pre>";
	$n = 10;// любое число
	$t = [];
	for($i=0; $i<$n; $i++){
		$t[$i]= pow($i,2);
	};
	print_r($t);
	echo "</pre>";
	echo '<hr>';
	
	/*Третье задание
Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная
с нуля.*/
echo "tretee Третье задание Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная
с нуля.<br>";
echo "<pre>";
	$m = 5;// любое число
	$k =[];
	for($i=0; $i<$m; $i++){
		$k[]= str_repeat("0",1);
		$k[]= str_repeat("1",1);
	};
	print_r($k);
	echo "</pre>";
	echo '<hr>';
	
	/*Четвертое задание
Определите, есть ли в массиве повторяющиеся элементы.*/
echo "chetvertoe Четвертое задание
Определите, есть ли в массиве повторяющиеся элементы.<br>";
echo "<pre>";
	$n = 5;
	$arNum = [];
	for($i = 0; $i < $n; $i++){
		$arNum[] = rand(1,10);
	}
		var_dump($arNum);						
		$ar = array_unique($arNum);
		var_dump($ar);
	if($arNum > $ar)
		echo "<h1> Массив повторяется </h1>"; 
	else
		echo "<h1> Массив не повторяется </h1>";
	
	
	 //$arNum[] = array_unique($arNum)
	//echo implode('; ', $arNum);
echo "</pre>";
echo '<hr>';

	/*Пятое задание
Удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом
будет 1 2 4 5*/
echo "piatoe Пятое задание
Удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом
будет 1 2 4 5<br>";
$col = [1,2,4,4,2,5];
	$col = array_unique($col);
	print_r($col);
	//var_dump($col);
	
		echo '<br>';
		$newCol = implode(' ', $col);
		echo $newCol;
 echo '<hr>';
 
	/*Шестое задание
Дан массив размера n. После каждого отрицательного элемента массива вставить
элемент с нулевым значением.*/
echo "shestoe Шестое задание
Дан массив размера n. После каждого отрицательного элемента массива вставить
элемент с нулевым значением.<br>";

	$length = mt_rand(1, 10);//Создаем уникальный маасив
        $array = [];
       for ($i = 0; $i < $length; $i++) {
            $array[$i] = mt_rand(-10, 10);
        }
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] < 0) {
                $array[$i] = 0;
            }
        }
        echo "<pre>";
        var_dump($array);
        echo"</pre>";
	
	/*unset ($m, $k, $i);
	echo "<pre>";
	$max = 5;// любое число
	$min = -5;
	$k = [];
	$k=range($min,$max,2);
		print_r($k);
			$new_k = implode(' ', $k);
			echo $new_k;
			
		$max = 5;
		$min = -5;
		$k = [];
		for($q=$min, $i=1; $q<=$max, $i<=$max; $q++, $i++){	//НЕ ПОЛУЧАЕТСЯ СДЕЛАТЬ!!!!					
				$k[] = $q;
				$k[] = 0;
				$k[] =$i;
		}
		print_r($k);
					
					
	echo "</pre>";*/
	
	
	

echo'<hr>';
	/*Задание с повышенной сложностью
Упорядочить значения массива по возрастанию. Реализовать двумя способами: с
помощью стандартной функции и без.
	*/
	echo "zadanie_S Задание с повышенной сложностью
Упорядочить значения массива по возрастанию. Реализовать двумя способами: с
помощью стандартной функции и без.<br>";
	unset ($n, $arNam, $i);
	echo "<pre>";
	$n = 10;
	$arNum = [];
	for($i = 0; $i < $n; $i++){
		$arNum[] = rand(1,100);							//СДЕЛАТЬ ВТОРЫМ СПОСОБОМ!!!!
		sort($arNum);
	}	
		var_dump($arNum);
echo "</pre>";
echo '<hr>';

?>