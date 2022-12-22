
<?php
echo '<a href="task6.php"> На главнуюстраницу </a></br></br></br>';


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





// $row = 1;
// if ($fileOpen = fopen('send.csv', 'r')){
//     while (($data = fgetcsv($fileOpen, 1000, ','))){
//     $row++;
//     } 
//     for ($i=0; $i<strlen($data);$i++){
//     echo $data[$i] . '<br>';
//     }
// }
// fclose($fileOpen);
