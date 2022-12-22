
<?php
echo '<a href="task6.php"> На главную страницу </a></br></br></br>';

$result = $_SERVER['REQUEST_URI'];
$requestPatch = explode('/', $result);
// print_r ($requestPatch);

if ( $requestPatch[2]==='task6_1.php') {// как это написать более корректно?

$row = 1;
if ($fileOpen = fopen('send.csv', 'r')){
    while (($data = fgetcsv($fileOpen, 1000, ','))){
    $row++;
    $num = count($data);
    for ($i=0; $i<$num;$i++){
        echo $data[$i] . '<br>';
        }
    } 
   
}
fclose($fileOpen);

}