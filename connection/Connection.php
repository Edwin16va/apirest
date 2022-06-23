<?php

    class Connection extends Mysqli {
        function __construct() {

           // parent::__construct('localhost', 'root', '', 'api_rest');
            parent::__construct('mysql-programacion.alwaysdata.net', 
            '273767_pro', 
            'Programacion_Avanzada',
             'programacion_api');
           //probando github hola a todos

            $this->set_charset('utf8');
            $this->connect_error == NULL ? 'Conexión exítosa a la DB' : die('Error al conectarse a la BD');
        }//end __construct
    }//end class Connection