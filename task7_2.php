
<form action="/task7_2.php">
  First name:<br>
  <input type="text" name="firstname" placeholder="Ivan" value="">
  <br>
  Age:<br>
  <input type="text" name="age" placeholder="30" value="">
  <br>
  Salary:<br>
  <input type="number" name="salary" placeholder="1000" value="">
  <br><br>
  <input type="submit" value="Submit">
</form> 



<?php
echo ('<a href="/task7_2.php"> Главная страница </a>') . '<br>';
if (!empty(strip_tags($_GET['firstname'])) && !empty(strip_tags($_GET['age'])) && !empty(strip_tags($_GET['salary']))){
  echo 'Name: ' . strip_tags($_GET['firstname']) . '<br>';
  echo 'Age: ' . strip_tags($_GET['age']). '<br>';
  echo 'Salary: ' . strip_tags($_GET['salary']). '<br>';
}
