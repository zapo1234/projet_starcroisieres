<?php
    


    /* --- ERREURS --- */
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    /* --- SESSION  --- */

    if (!isset($_SESSION)) {
        session_start();
    }

    /* --- COLOR --- */
    define('COLOR','#90cedb');

    /* --- CONFIG SERVER --- */

     $lstLangue = array('fr');

    if(isset($_GET['lang']) && isset($lstLangue[$_GET['lang']]))
        $_SESSION['lang'] = $_GET['lang'];

    if(!isset($_SESSION['lang']))
        $_SESSION['lang'] = 'fr';

    $lang = $_SESSION['lang'];
	
	// CONNEXION DB

    try
    {
         $db = new PDO('mysql:host=localhost;dbname=blog_starcroisiers', 'root', '');
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    catch (Exception $e)
    {
        die('Erreur #1 : ' . $e->getMessage());
    }

?>
