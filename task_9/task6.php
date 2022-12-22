<form   action="task6.php" method="post">
<br>
    User: 
    <br>
    <input type="text" name="name" placeholder="Ivan" value="">
    <br>
    Surname: <br>
    <input type="text" name="surname" placeholder="Pytlyak" value="">
    <br>
    Age:
    <br>
    <input type="number" name="age" value="">
    <br>
    <br>
    Addres: <br>
    <input type="text" name="addres" placeholder="" value="">
    <br>
    <br>
    <input id="first_form" type="submit" value="Submit">
</form>


<?php



$arr = [
    [
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'age' => $_POST['age'],
            'addres' =>  $_POST['addres']
            ]
    ];


// if (!isset($_POST)){

    $fileOpen =fopen('send.csv', 'a'); // создает файл при обновлении страницы, а не по нажатию на кнопку
    foreach ($arr as $user){
        fputcsv($fileOpen, $user, ',');
    }
    fclose($fileOpen);


    

    echo '<br><br><a href="task6_1.php"> На страницу с персональными данными </a></br>';

    include('task6_1.php');
// }

















