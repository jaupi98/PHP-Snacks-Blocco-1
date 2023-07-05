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
    if(isset($_GET['nome']) && isset($_GET['eta']) && isset($_GET['email'])){
        // SE LA CONDIZIONE CHE IL NOME HA LUNGHEZZA A 3 CARATTERI E RISPETTATA ALLORA IMPOSTO LA VARIABILE DI CONTROLLO A TRUE;
        if(strlen($_GET['nome']) > 3){
            $flag_name = true;
        }
        //VERIFICO CHE LA EMAIL ABBIA SIA LA CHICCIOLA CHE IL PUNTO , SE VERA LA CONDIZIONE IMPOSTO LA VARIABILE A TUE
        if(str_contains($_GET['email'],'@') && str_contains($_GET['email'],'.')){
            $flag_email = true;
        }
        // VERIFICA CHE L'ETA PASSATA SIA U NUMERO . SE E VERA LA CONDIZIONE ALLORA IMPOSTO LA VARIABILE DI CONTROLLO A TRUE 
        if(is_numeric($_GET['eta'])){
            $flag_eta = true;
        }
    }
    //     Snack 3
    // Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
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
        <?php  if(isset($_GET['nome']) && isset($_GET['eta']) && isset($_GET['email'])){ ?>
            <div>
                <h2>
                    <?php if($flag_email && $flag_eta && $flag_name){
                        echo 'Acesso riuscito';
                    }
                    else{
                        echo 'Acesso negato';
                    }
                    ?>
                </h2>
            </div>
        <?php } ?>  
    </div>
    <hr>
    <div>
        <h2>Snack 3</h2>
        <ul>
            <?php  foreach($posts as $key => $post ){ ?>
                <li>
                    <?php echo $key; ?>
                    <ul>
                    <?php  foreach($post as $item){ ?>
                        <li>
                            <?php echo $item['title']."-". $item['author']."-". $item['text']; ?>
                        </li>
                    <?php } ?>
                    </ul>
                </li>
            <?php  } ?>
                  
        </ul>
    </div>
    
</body>
</html>