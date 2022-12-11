<?

use function PHPSTORM_META\type;

$arr = [ // главная папка
    'file.png', // файл 1 в главной папке
    'test.exe', // файл 2 в главной папке
    [ // папка 1 в главной папке
        [
            'hello_world.php', // файл 1 в папке 1
            [], // пустая папка в папке 1
            [ // и тд
                'public.test.jpg',
                [
                    'потерянный в подпапках файл.doc',
                ]
            ],       
        ],
        'my file.doc',
        'cv.pdf',
    ],
    'alala.pdf', // файл 3 в главной папке
];




function scan (&$arr){
    for ($i = 0; $i <count($arr); $i++){ 
        if (gettype($arr[$i]) ==='array'){
            scan ($arr[$i]);
        }
        else {
            echo $arr[$i] . PHP_EOL;
        }
    }
}

scan ($arr); 