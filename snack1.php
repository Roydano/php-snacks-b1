<?php

// creo l'array delle squadre di basket
$basketMatch = [

    [
        'homeTeam' => 'Malandrini',
        'guestTeam' => 'Birbantelli',
        'scoreHomeTeam' => '106',
        'scoreGuestTeam' => '95'
    ],
    [
        'homeTeam' => 'Feroci',
        'guestTeam' => 'Pacati',
        'scoreHomeTeam' => '100',
        'scoreGuestTeam' => '155'
    ],
    [
        'homeTeam' => 'Diavoletti',
        'guestTeam' => 'Angioletti',
        'scoreHomeTeam' => '85',
        'scoreGuestTeam' => '84'
    ],
    [
        'homeTeam' => 'Giganti',
        'guestTeam' => 'Dei',
        'scoreHomeTeam' => '180',
        'scoreGuestTeam' => '215'
    ]
];

// inserisco in una variabile la lunghezza dell'array
$basketMatchLength = count($basketMatch);

var_dump($basketMatch);
var_dump($basketMatchLength);



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack b1 - php</title>
</head>
<body>

<!-- creiamo un div con all'interno un ciclo for che cicla su tutti gli array presenti nell'array $basketMatch e li stampa richiamandone la chiave -->
   <div>
        <?php for($i = 0; $i < $basketMatchLength; $i++) {?>
            <p> 
                <span><?php echo $basketMatch[$i]['homeTeam'] ?> -</span>

                <span><?php echo $basketMatch[$i]['guestTeam'] ?> |</span>

                <span><?php echo $basketMatch[$i]['scoreHomeTeam'] ?> -</span>

                <span><?php echo $basketMatch[$i]['scoreGuestTeam'] ?></span>

            </p>
        <?php } ?>
    </div>


</body>
</html>





<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->