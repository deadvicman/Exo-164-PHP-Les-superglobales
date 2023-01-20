<?php

/**
 * A l'aide de la documentation officielle de PHP.
 * 1. Retrouvez la page traitant des superglobales pour $_SERVER
 * 2. Récupérez un maximum de valeurs de ce tableau et affichez les à l'aide d'un simple echo ( il n'est pas interdit d'être intelligent, c'est un tableau associatif... )
 * 3. Uploadez ce projet sur votre serveur et testez !
 */
// TODO Votre code ici
echo "Serveur softdware: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo " name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo " protocole: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";
echo " request time: " . $_SERVER['REQUEST_TIME'] . "<br>";
echo "Serveur request methode: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo " request URI: " . $_SERVER['REQUEST_URI'] . "<br>";
echo "Serveur script name: " . $_SERVER['SCRIPT_NAME'] . "<br>";
echo "Serveur remote address: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo " remote host: " . $_SERVER['REMOTE_HOST'] . "<br>";
echo " remote user: " . $_SERVER['REMOTE_USER'] . "<br>";
echo " HTTP nom agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo " HTTPS: " . $_SERVER['HTTPS'] . "<br>";