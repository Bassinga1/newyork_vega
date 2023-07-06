<?php

    /**
     * -------------------------------------------------------------------
     *                        L'Amorceur de l'application
     * 
     * Ses rôles : 
     *      - Charger les racourcis (constantes)
     *      - Charger les variables d'environnement
     *      - Charger la configuration système
     *      - Charger la configuration session
     *      - Charger le monolog (traçabilité des erreurs)
     * -------------------------------------------------------------------
     */
    // Chargement des constantes
    require __DIR__ . "/constants.php";
    
     // Chargement des variables d'environnement
    // require __DIR__ . "/../env.conf";
    $envFile = parse_ini_file(ROOT . "/../env.conf");

    var_dump($envFile);