

<p><b>Домашнее задание. Продвинутая работа с формами.</b></p>
<p>Checkbox #1</p>
<p>Для регистрации придумайте логин и пароль. И дайте разрешение на регистрацию.</p>

<?php

	error_reporting(E_ALL);
	//mb_internal_encoding("UTF-8");
	
	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";

	//Если форма была отправлена и переменная не пустая:
	if (
			isset($_REQUEST['login']) and 
			isset($_REQUEST['password']) and
			isset($_REQUEST['keep']) and
			$_REQUEST['keep'] == 1
		) 
		{
			echo 'Вы успешно зарегистрировались'.'<br>';
			echo 'Ваш логин: '.$_REQUEST['login'].'<br>';
			echo 'Ваш пароль: '.$_REQUEST['password'];
		}
		else
		{
				echo 'Введите данные.';
		}
		

?>

		<form action="" method="POST">
			<input type="text" placeholder = "логин" name="login"><br><br>
			<input type="password" placeholder = "Пароль" name="password"><br><br>
			<input type="hidden" name="" value="0">
			<input type="checkbox" name="keep" value="1"> Запомнить меня <br>
			<input type="submit" value = "Нажмите для регистрации"> 
			
		</form>
		
		
		
<p>Checkbox #2</p>
<p>Спросите у пользователя, какие из языков он знает: русский,
английский, немецкий, французкий. Выведите на экран те языки,
которые знает пользователь. Если пользователь не отметил ни один
язык — выведите на экран сообщение об этом. По умолчанию
должен быть выбран русский язык.</p>

<?php

	error_reporting(E_ALL);
	//mb_internal_encoding("UTF-8");
	
	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";
	
	if(!empty($_REQUEST)) 
	{
		if(!empty($_REQUEST['lang']))
			echo implode(', ', $_REQUEST['lang']);
		else echo 'Вы ничего не знаете!';
	}
	
?>

<p>Выберите языки, которые Вы знаете.</p>

<form action="" method="GET">
	<!--<input type="hidden" name="hello" value="0">-->
	<input type="checkbox" name="lang[]" value="русский" checked>Русский<br>
	<input type="checkbox" name="lang[]" value="английский">Английский<br>
	<input type="checkbox" name="lang[]" value="немецкий">Немецкий<br>
	<input type="checkbox" name="lang[]" value="французкий">Французкий<br>
	<!--<input type = "text" name="name">-->
	<input type="submit" value="Отправить" name = 'submit'>
</form>
		
		
<p><b>Radio</b></p>
<p>1.Спросите у пользователя знает ли он HTML с помощью трех radio-
кнопок. Варианты ответов должны быть такими: знаю, не знаю,
затрудняюсь ответить. Выведите результат на экран. Сделайте так,
чтобы по умолчанию один из вариантов был уже отмечен.</p>

<p>Вы знаете html?</p>

<?php

	error_reporting(E_ALL);
	//mb_internal_encoding("UTF-8");
	
	//echo "<pre>";
	//print_r($_REQUEST);
	//echo "</pre>";
	
	if (!empty($_REQUEST) and $_REQUEST['html'] == 'Y') 
			echo 'Мы рады, что Вы знаете HTML!';
	if (!empty($_REQUEST) and $_REQUEST['html'] == 'N') 
			echo 'До свидания! Вы не знаете HTML';
	if (!empty($_REQUEST) and $_REQUEST['html'] == 'Z') 
			echo 'Заходите, когда узнаете! :)';
	
?>



<form action="" method="GET">
	<input type="radio" name="html" value="Y">знаю<br>
	<input type="radio" name="html" value="N">не знаю<br>
	<input type="radio" name="html" value="Z" checked>затрудняюсь ответить<br>
	<input type="submit" value="Отправить" name = 'submit'>
</form>


<p>2.Спросите у пользователя с помощью нескольких radio-кнопок
сколько сайтов он сделал. Варианты ответа продумайте сами.</p>

<?php

	error_reporting(E_ALL);
	//mb_internal_encoding("UTF-8");
	
	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";
	
	
?>
<p>Сколько сайтов Вы сделали?</p>
<form action="" method="GET">
	<input type="radio" name="php" value="1" checked>1 сайт <br>
	<input type="radio" name="php" value="2"> 2 сайта <br>
	<input type="radio" name="php" value="3"> 3 сайта <br>
	<input type="radio" name="php" value="4"> более 4 сайтов <br>
	<input type="submit" value="Отправить" name = 'submit'>
</form>


<p><b>Select и multi-select</b></p>
<p>1.Спросите у пользователя с помощью select сколько сайтов он сделал.
Варианты ответа придумайте сами.</p>

<?php

	error_reporting(E_ALL);
	//mb_internal_encoding("UTF-8");
	
	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";
	
	if (!empty($_REQUEST) and $_REQUEST['test'] == '1') 
			echo 'Вы сделали 1 сайт';
	if (!empty($_REQUEST) and $_REQUEST['test'] == '2') 
			echo 'Вы сделали 2 сайта';
	if (!empty($_REQUEST) and $_REQUEST['test'] == '3') 
			echo 'Вы сделали 3 - 5 сайтов';
	if (!empty($_REQUEST) and $_REQUEST['test'] == '4') 
			echo 'Вы сделали более 5 сайтов';
	
	
?>

<form action="" method="GET">
	
	<select name ="test">
		<option value="1">1 сайт</option>
		<option value="2">2 сайта</option>
		<option value="3">3 - 5 сайтов</option>
		<option value="4">более 5 сайтов</option>
	</select>

	<input type="submit" value="Отправить" name = 'submit'>

</form>


<p>2.Спросите у пользователя с помощью мультиселекта, какие из языков
он знает: русский, английский, немецкий, французкий. Выведите
на экран те языки, которые знает пользователь через запятую
(воспользуйтесь implode).</p>

<?php

	error_reporting(E_ALL);
	//mb_internal_encoding("UTF-8");
	
	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";
	
	if(!empty($_REQUEST)) 
	{
		if(!empty($_REQUEST['test']))
			echo implode(', ', $_REQUEST['test']);
		else echo 'Вы ничего не знаете!';
	}
	
	
?>

<form action="" method="GET">
	
	<select name ="test[]" multiple>
		<option>русский</option>
		<option>английский</option>
		<option>немецкий</option>
		<option>французкий</option>
	</select>

	<input type="submit" value="Отправить" name = 'submit'>

</form>

<p><b>Задачи</b></p>

<p>1.Сделайте функцию, которая создает textarea. Функция должна иметь
следующие параметры: name, value, placeholder.</p>

<p>2.Модифицируйте функцию из предыдущей задачи так, чтобы она
сохраняла значение textarea после отправки.</p>

<?php
	
	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";
	
	function inputTextarea($name, $value = '', $placeholder = '')
	{
		if(!empty ($_REQUEST[$name])) $placeholder = $_REQUEST[$name];
		return '<textarea name="'.$name.'" placeholder="'.$placeholder.'">'.$value.'</textarea>';
	}
	
	
?>

<form action="" method="GET">
	
	<?php echo inputTextarea('test')?>
	<input type="submit" value="Отправить" name = 'submit'>

</form>


<p>3.Сделайте функцию, которая будет создавать селект. Функция должна принимать многомерный массив такого типа:
$arr = array(
0=>array('value'=>'php', 'text'=>'Язык PHP'),
0=>array('value'=>'html', 'text'=>'Язык HTML'),
)</p>

<?php

	$arr = array(
		0=>array('value'=>'php', 'text'=>'Язык PHP'),
		1=>array('value'=>'html', 'text'=>'Язык HTML'),
		2=>array('value'=>'css', 'text'=>'Язык CSS')
		);
	

	
	function selectArr($arr)
		{
		
		echo '<select name ="test">';
			foreach ($arr as $elem) {
				echo '<option>'.$elem['value'].'</option>';
				}
		echo '</select>';

		}	

?>

	<form action= "" method="GET">
		<?php selectArr($arr)?>
	<input type="submit" value="Отправить" name = 'submit'>
	</form>
	
<p>4.Модифицируйте предыдущую функцию так, чтобы она сохраняла
выбранный элемент после отправки.</p>

<?php

	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";

	$arr = array(
		0=>array('value'=>'php', 'text'=>'Язык PHP'),
		1=>array('value'=>'html', 'text'=>'Язык HTML'),
		2=>array('value'=>'css', 'text'=>'Язык CSS')
		);
	

	
	function selectArr($arr)
		{
		echo '<select name ="test">';
			foreach ($arr as $elem) {
				if($_REQUEST['test'] == $elem['value']) {
					echo '<option selected>'.$elem['value'].'</option>';
				}
				else {
					echo '<option>'.$elem['value'].'</option>';
				}
			}
		echo '</select>';

		}	

?>

	<form action= "" method="GET">
		<?php selectArr($arr)?>
	<input type="submit" value="Отправить" name = 'submit'>
	</form>

<p>5.Сделайте 3 селекта, которые позволяют выбирать дату: селект с
днями от 1 до 31, селект с русскими названиями месяцев, селект с
годами. Реализуйте функцию, которая будет создавать подобный
селект. Функция должна принимать параметром диапазон годов, за
который следует показывать дату.
</p>

<?php

	

	
	
	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";

	
	function selectDate($yearmin, $yearmax)
		{
		$arrday = range(1,31);
		$arrmonth = ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
		$arryear = range($yearmin, $yearmax);
		
		echo '<select name ="selectDay">';
			foreach ($arrday as $elem) {
				if($_REQUEST['selectDay'] == $elem) {
					echo '<option selected>'.$elem.'</option>';
				}
				else {
					echo '<option>'.$elem.'</option>';
				}
			}
		echo '</select>';
		
		echo '<select name ="selectMonth">';
			foreach ($arrmonth as $elem) {
				if($_REQUEST['selectMonth'] == $elem) {
					echo '<option selected>'.$elem.'</option>';
				}
				else {
					echo '<option>'.$elem.'</option>';
				}
			}
		echo '</select>';
		
		echo '<select name ="selectYear">';
			foreach ($arryear as $elem) {
				if($_REQUEST['selectYear'] == $elem) {
					echo '<option selected>'.$elem.'</option>';
				}
				else {
					echo '<option>'.$elem.'</option>';
				}
			}
		echo '</select>';
		

		}

?>

	<form action= "" method="GET">
		<?php selectDate('1930', '2020')?>
	<input type="submit" value="Отправить" name = 'submit'>
	</form>

<p>6.Модифицируйте предыдущую задачу так, чтобы по умолчанию была
выбрана текущая дата и селекты сохраняли выбранные значения
после отправки.</p>

<?php

	//echo "<pre>";
	//print_r($_REQUEST);
	//echo "</pre>";

	
	function selectDate($yearmin, $yearmax)
		{
		$arrday = range(1,31);
		$arrmonth = ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
		$arryear = range($yearmin, $yearmax);
		
		
		echo '<select name ="selectDay">';
			foreach ($arrday as $elem) {
				if(empty($_REQUEST['selectDay']) and $elem == date('j')) {
					echo '<option selected>'.$elem.'</option>';
				}
				if($_REQUEST['selectDay'] == $elem) {
					echo '<option selected>'.$elem.'</option>';
				}
				else {
					echo '<option>'.$elem.'</option>';
				}
			}
		echo '</select>';
		
		echo '<select name ="selectMonth">';
			foreach ($arrmonth as $elem) {
				if(empty($_REQUEST['selectMonth']) and $elem == $arrmonth[date('n') - 1]) {
					echo '<option selected>'.$elem.'</option>';
				}
				if($_REQUEST['selectMonth'] == $elem) {
					echo '<option selected>'.$elem.'</option>';
				}
				else {
					echo '<option>'.$elem.'</option>';
				}
			}
		echo '</select>';
		
		echo '<select name ="selectYear">';
			foreach ($arryear as $elem) {
				if(empty($_REQUEST['selectDay']) and $elem == date('Y')) {
					echo '<option selected>'.$elem.'</option>';
				}
				if($_REQUEST['selectYear'] == $elem) {
					echo '<option selected>'.$elem.'</option>';
				}
				else {
					echo '<option>'.$elem.'</option>';
				}
			}
		echo '</select>';
		

		}

?>

	<form action= "" method="GET">
		<?php selectDate('1930', '2020')?>
	<input type="submit" value="Отправить" name = 'submit'>
	</form>
	
<p>7.Сделайте тест с различными вариантами ответов, из которых
пользователь может выбрать только один. После отправки теста
скрипт должен проверять правильность ответов на вопросы и
выводить результаты. Также он должен подсчитывать процент
правильно решенных заданий. Придумайте 5-10 вопросов для этого
теста.</p>

<?php

	
	//echo "<pre>";
	//print_r($_REQUEST);
	//echo "</pre>";


	function testFunct($name, $arranswer, $trueanswer) {
			foreach ($arranswer as $key => $elem) {
				if(!empty($_REQUEST[$name]) and $_REQUEST[$name] == $key) 
					$checked = 'checked'; else $checked = '';
					
				echo '<input type="radio" name="'.$name.'" value="'.$key.'"'.$checked.'>'.$elem.'<br><br>';
				}
			if(!empty($_REQUEST[$name]) and $_REQUEST[$name] == $trueanswer) {
				echo '<p>Это правильный ответ!</p>';
				}
			if(!empty($_REQUEST[$name]) and $_REQUEST[$name] != $trueanswer) {
				echo '<p>Неверный ответ!</p>';
				}
		}
		
	$test1 = 0;
	
	$arr1 = [1 => 'вычисляет модуль числа', 2 => 'находит сумму чисел', 3 => 'такой функции нет'];
	$arr2 = [1 => 'вычисляет квадратный корень', 2 => 'суммирует элементы', 3 => 'округляет дробь в меньшую сторону'];
	$arr3 = [1 => 'возводит число в степень', 2 => 'извлекает квадратный корень', 3 => 'она ничего не делает'];
	$arr4 = [1 => 'округляет число', 2 => 'находит абсолютное значение числа', 3 => 'возводит число в степень'];
	$arr5 = [1 => 'генерирует случайное число', 2 => 'находит самое большое число', 3 => 'проверяет число на четность'];
	$arr6 = [1 => 'находит самое маленькое число', 2 => 'находит самое большое число', 3 => 'ищет потерянное число'];
	$arr7 = [1 => 'находит самое маленькое число', 2 => 'находит самое большое число', 3 => 'ищет потерянное число'];
	$arr8 = [1 => 'округляет дробь по математическим правилом', 2 => 'находит самое большое число', 3 => 'ищет потерянное число'];
	$arr9 = [1 => 'округляет дробь в меньшую сторону', 2 => 'находит самое большое число', 3 => 'округляет дробь в большую сторону'];
	$arr10 = [1 => 'находит символ в строке', 2 => 'вычисляет задолженность', 3 => 'находит симовол по коду'];
?>
<form action="" method="GET">
<p><b>Вопрос №1. Что делает функция 'abs'?</b></p>
<?php 
	testFunct('question1', $arr1, 1);
	if (!empty($_REQUEST['question1']) and $_REQUEST['question1'] == 1) {$test1++;}
?>

<p><b>Вопрос №2. Что делает функция 'floor'?</b></p>
<?php 
	testFunct('question2', $arr2, 3);
	if (!empty($_REQUEST['question2']) and $_REQUEST['question2'] == 3) {$test1++;}
?>

<p><b>Вопрос №3. Что делает функция 'sqrt'?</b></p>
<?php 
	testFunct('question3', $arr3, 2);
	if (!empty($_REQUEST['question3']) and $_REQUEST['question3'] == 2) {$test1++;}
?>

<p><b>Вопрос №4. Что делает функция 'pow'?</b></p>
<?php 
	testFunct('question4', $arr4, 3);
	if (!empty($_REQUEST['question4']) and $_REQUEST['question4'] == 3) {$test1++;}
?>

<p><b>Вопрос №5. Что делает функция 'mt_rand'?</b></p>
<?php 
	testFunct('question5', $arr5, 1);
	if (!empty($_REQUEST['question5']) and $_REQUEST['question5'] == 1) {$test1++;}
?>

<p><b>Вопрос №6. Что делает функция 'min'?</b></p>
<?php 
	testFunct('question6', $arr6, 1);
	if (!empty($_REQUEST['question6']) and $_REQUEST['question6'] == 1) {$test1++;}
?>

<p><b>Вопрос №7. Что делает функция 'max'?</b></p>
<?php 
	testFunct('question7', $arr7, 2);
	if (!empty($_REQUEST['question7']) and $_REQUEST['question7'] == 2) {$test1++;}
?>

<p><b>Вопрос №8. Что делает функция 'round'?</b></p>
<?php 
	testFunct('question8', $arr8, 1);
	if (!empty($_REQUEST['question8']) and $_REQUEST['question8'] == 1) {$test1++;}
?>

<p><b>Вопрос №9. Что делает функция 'ceil'?</b></p>
<?php 
	testFunct('question9', $arr9, 3);
	if (!empty($_REQUEST['question9']) and $_REQUEST['question9'] == 3) {$test1++;}
?>

<p><b>Вопрос №10. Что делает функция 'chr'?</b></p>
<?php 
	testFunct('question10', $arr10, 3);
	if (!empty($_REQUEST['question10']) and $_REQUEST['question10'] == 3) {$test1++;}
?>

<input type="submit" value="Отправить" name = "submit">
</form>
<p>Результат</p>
<?php
	
	echo 'Вы ответили на '.(($test1*100)/10).'%'.' вопросов правильно.';
	
?>



































