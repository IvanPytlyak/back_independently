<?php


$arr =[
    'Беларусь',
    'Китай',
    'Великобритания',
    'Польша'
];

?>

<form action='/task7_5.php' method="post">
<select size="5">
<option disabled>Выберите страну</option>
<option name="0" value="0"><?php echo $arr[0]; ?></option>
<option name="1" value="1"><?php echo $arr[1]; ?></option>
<option name="2" value="2"><?php echo $arr[2]; ?></option>
<option name="3" value="3"><?php echo $arr[3]; ?></option>
</select>
<p><input type="submit" value="Отправить"></p>
</form>

<?php

// echo ($_POST['0']); // пустота
// if(isset(($_POST['0']))){
//     echo 'Ваша страна' . $arr[0];
// }

// что тянет GET/POST в выпадающих списках? 

