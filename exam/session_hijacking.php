<?php

ini_set("session_cookie_httponly", true)

// refuse JAVASCRIPT Only normal html

session_start();

// Start the session

if (isset($_SESSION ["last_ip"]) === false) {
    $_SESSION["last_ip"] = $_SERVER["REMOTE_ADDR"];
}

// Write down the ip for the first time a user logs in

if ($_SESSION["last_ip"] !== $_SERVER["REMOTE_ADDR"]) {
    session_unset();
    session_destroy();
}

// If the session is accesed from another IP then DESTROY EVERYTHING so the intruder can access.


// evt make a log with the information so it can be reviewed later


?>