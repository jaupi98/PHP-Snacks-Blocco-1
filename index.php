<?php
    // Snack 1
    // Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
    // Olimpia Milano - Cantù | 55-60
     
    $array_matchs = [
        [
            'match' => 'Lakeers - Nuggets' ,
            'results' => '102 - 90'
        ],
        [
            'match' => ' Macig - Celtics' ,
            'results' => '100 - 125'
        ],
        [
            'match' => 'Trail Blazers - Warriors' ,
            'results' => '105 - 135'
        ],
        [
            'match' => 'Cavaliers - Knicks' ,
            'results' => '113 - 115'
        ],
        [
            'match' => 'Suns - Spurs' ,
            'results' => '130 - 110'
        ],
        [
            'match' => 'Bucks - Bulls' ,
            'results' => '125 - 90'
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($array_matchs as $item){ ?>
            <li><?php echo $item['match'].'|'.$item['results']; ?></li>
        <?php } ?>
    </ul>
</body>
</html>