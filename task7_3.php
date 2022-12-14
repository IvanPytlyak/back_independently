
<form action="/task7_3.php">
  First number:<br>
  <input type="number" name="first" placeholder="1000" value="">
  <br>
  Second number:<br>
  <input type="number" name="second" placeholder="1000" value="">
  <br>
  Third number:<br>
  <input type="number" name="third" placeholder="1000" value="">
  <br>
  <br>
  <input type="submit" value="Submit">
</form> 

<?php
$result = $_SERVER['REQUEST_URI'];
$requestPatch1 = explode('/', $result);
$buff= $_SERVER['REQUEST_URI'];
$firstList = explode('/', $buff);

echo ('<a href="/task7_3.php"> Главная страница </a>') . '<br>';
if (!empty(strip_tags($_GET['first'])) && !empty(strip_tags($_GET['second'])) && !empty(strip_tags($_GET['third']))){ // 
echo 'Сумма = ';
echo strip_tags($_GET['first']) + strip_tags($_GET['second']) + strip_tags($_GET['third']);
}
else {
  if($firstList[1] === 'task7_3.php' ){
  }
  else{
    echo 'Не все данные заполнены';
  }
}


