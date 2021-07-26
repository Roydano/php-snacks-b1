<?php

// salviamo le chiamate get in tre variabili
$name = $_GET['nome'];
$age = $_GET['eta'];
$mail = $_GET['mail'];

//abbiamo creato una condizione che, con i valori vuoti stampa un messaggio che dice di riempire i campi e che se non rispettano le condizioni richieste da come messaggio accesso negato
if(empty($name) || empty($age) || empty($mail)){
    $messaggio = 'I campi nome, età e mail devono essere tutti riempiti';
} else{
    if(mb_strlen($name) > 3 && is_numeric($age) && strpos($mail, '@') && strpos($mail, '.') ){
        $messaggio = 'Accesso riuscito';
    }
    else{
        $messaggio = 'Accesso negato';
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2 - b1</title>
</head>
<body>

    <p>
        <?php echo $messaggio ?>
    </p>
    
</body>
</html>


<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->