<?php
    require_once __DIR__ . '/models/user.php';
    require_once __DIR__ . '/models/creditCard.php';

    // Creazione di un oggetto utente
    $user1 = new user('Cristian','Buoncompagni', 'Via Monteoliveto 21');
    $c = new creditCard();

    // Creazione di un oggetto carta di credoto
    $c->getNumber('2464 1222 7956 2123');
    $c->getDate('03/09/2022');

    // Inserimento dell'oggetto carta di credito nell'oggetto utente
    $user1->getCreditCard($c);

    // Var dump
    var_dump($user1);
?>