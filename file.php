<form action="/file" method="POST" enctype="multipart/form-data">
<br><br>
  <input type="file" name="myFile">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<?php

if (isset($_FILES['myFile'])) {
    $uploadsDir = '/'; //куда сохраняем полученный файл
    $fileName = $uploadsDir . $_FILES['myFile']['name'];// name=const в name будет записано оригинальное название


    if (move_uploaded_file($_FILES['myFile']['tmp_name'], $fileName)) { //перемещение
        echo 'Файл загружен!';
    } else {
        echo 'Ошибка загрузки файла!';
    }


    echo '<pre>';
    print_r($_FILES);
    echo '</pre>'; // инфо

    echo "<img src='${fileName}'><br/>"; // вывод на экран
}