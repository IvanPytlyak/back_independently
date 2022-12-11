<?
$number = (int) readline('Enter value:');
function fakt ($num){
  if($num === 0){
    return 1;
  }  
  else{
    return $num * fakt($num-1);
  }
}
echo fakt($number);