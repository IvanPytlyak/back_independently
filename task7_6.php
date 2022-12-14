<form   action="/task7_6.php">
    
<br>
    Number:
    <br>
    <input type="number" name="number" value="">
    <br>
    <br>
    <input id="first_form" type="submit" value="Submit">
</form>

<?php

echo '<a href="task7_6.php"> На главную </a> <br><br>';
$arr = [11, 53, 221, 543, 31];


if(isset($_GET['number'])){
    for ($i=0; $i <count($arr); $i++){
        if ($_GET['number'] == $i+1){
            echo 'Ответ: ' . $arr[$i];
        }
    }
}
