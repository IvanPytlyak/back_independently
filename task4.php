<?php
$letter = (string) readline ('Enter string: ');
echo ('first: ' . $letter[0] . '; ' . PHP_EOL . 'penultimate: ' . $letter[strlen($letter)-2] . ';' . PHP_EOL . 'last: ' . $letter[strlen($letter)-1]);
?>