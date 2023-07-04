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

    //     Snack 2
    // Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    // VERIFICO SE ESISTONO I VALORI NOME , EMAIL ED ETA NELLA VARIABILE $_GET
    $flag_name = false;
    $flag_eta = false;
    $flag_email = false;
    if(inste($_GET['nome']) && inste($_GET['eta']) && inste($_GET['email'])){
        // SE LA CONDIZIONE CHE IL NOME HA LUNGHEZZA A 3 CARATTERI E RISPETTATA ALLORA IMPOSTO LA VARIABILE DI CONTROLLO A TRUE;
        if(strlen($_GET['nome']) > 3){
            $flag_name = tue;
        }
        //VERIFICO CHE LA EMAIL ABBIA SIA LA CHICCIOLA CHE IL PUNTO , SE VERA LA CONDIZIONE IMPOSTO LA VARIABILE A TUE
        if()
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>snack 1</h2>
        <div>
        <ul>
            <?php foreach($array_matchs as $item){ ?>
                <li><?php echo $item['match'].'|'.$item['results']; ?></li>
            <?php } ?>
        </ul>
        </div>
    </div>
    <div>
        <h2>Snack 2</h2>
        <div>
            <form action="index.php" method="GET">
                <input type="text" name="nome" placeholder="Nome">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="eta" placeholder="Eta">
                <button type="submit">Invia</button>
            </form>
        </div>
    </div>
    
</body>
</html>