<?php
if (empty($_GET['firstname'])){

?>

<form action="/task7_1.php">
  First name:<br>
  <input type="text" name="firstname" value="">
  <br>
  <br>
  <input type="submit" value="Submit">
</form> 

<?php
}
?>

<?php
echo '<a href="/task7_1.php"> главная страница </a></br>';

if (!empty($_GET['firstname'])){
    echo 'Hello: ' . strip_tags($_GET['firstname']) . PHP_EOL;
} 


