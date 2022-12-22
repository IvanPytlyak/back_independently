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

    $fileOpen =fopen('send.csv', 'a'); // открывает все в строчку а не по столбцам
    foreach ($arr as $user){
        fputcsv($fileOpen, $user, ',');
    }
    fclose($fileOpen);


    $result = $_SERVER['REQUEST_URI'];
    $requestPatch = explode('/', $result);
    $requestPatch[3]= 'task6_1.php';
    echo '<br><br><a href="task6_1.php"> На страницу с персональными данными </a></br>';

    include('task6_1.php');
// }

















// foreach($arr as $user){
//         $user['name'] = $_POST['name'];
//         $user['surname'] = $_POST['surname'];
//         $user['age'] = $_POST['age'];
//         $user['addres'] = $_POST['addres'];
// }

// for ($i=0; $i<count($arr);$i++){
//     $arr[$i]['name'] = $_POST['name'];
//     $arr[$i]['surname'] = $_POST['surname'];
//     $arr[$i]['age'] = $_POST['age'];
//     $arr[$i]['addres'] = $_POST['addres'];
// }
// print_r ($arr);
// будет ли вышеуказанное условие пополнять массив? как этого достичь?
