<?
$arr = [
    'Minsk' => [
        'Kalinovskogo',
        'Kolasa',
        'Shevthenko'
    ],
    'Brest' => [
        'Kalinina',
        'Horuzey',
        'Donthenko'
    ],
    'Vitebsk' => [
        'Lenina',
        'Masherova',
        'Puskina'
    ],
    'Gomel' => [
        'Kievskaya',
        'Soloda',
        'Matvienko'
    ],
    'Grodno' => [
        'Saromskaya',
        'Bogushevitha',
        'Hofmana'
    ],
    'Mogilev' => [
        'Miroshnithenko',
        'Glebki',
        'Kolomoiskaya'
    ]
    ];

foreach ($arr as $city => $strits){
    echo '<h1>' . $city . '</h1>';
    echo '<ul>';
    foreach ($strits as $strit){
        echo '<li>'. '<p>' . $strit . '</p>' . '</li>';
    }
    echo '</ul>';
}
