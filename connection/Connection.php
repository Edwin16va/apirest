<?php

    class Connection extends Mysqli {
        function __construct() {

            parent::__construct('localhost', 'root', '', 'api_rest');
           // parent::__construct('sql312.epizy.com', 'epiz_31992964', 'sDMVe5u5tAYBt06', 'epiz_31992964_api_rest');
           //probando github hola a todos

            $this->set_charset('utf8');
            $this->connect_error == NULL ? 'Conexión exítosa a la DB' : die('Error al conectarse a la BD');
        }//end __construct
    }//end class Connection