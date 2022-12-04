<?



function count_function_calls(){
     
    static $a = 1;
    echo $a;
    $a = $a + 1;
}
count_function_calls();
count_function_calls();
count_function_calls();
count_function_calls();



// область видимости....
// $k=0;
// function count_function_calls(){
//     $k++;
//     return $k;
// }
// count_function_calls();
// count_function_calls();
// count_function_calls();

// echo $k;  // будет равно 3




// function count_function_calls($num){
//     $num++;
//     return $num;
// }

// $k+= count_function_calls(0);
// echo $k;






// function count_function_calls($str, $i=[0]){
//     echo ($str);
//         $i[0] += 1;
//         return $i[0];
// }

// echo count_function_calls('afsdf', 0) . PHP_EOL;
// echo count_function_calls('dwqsdf', 0) . PHP_EOL;



// def myfun(s,i=[0]):    
//     print(s)    
//     i[0]+=1 
//     return i[0]



//     echo ($str);
//     $i[0] += 1;
//     return $i[0];
//  }