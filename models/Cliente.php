<?php
require_once "connection/Connection.php";

class Cliente{

    public static function getAll() {
        $db = new Connection ();
        $query = "SELECT *FROM tbl_cliente";
        $resultado = $db->query($query);
        $datos = [];
        if($resultado->num_rows) {
            while($row = $resultado->fetch_assoc()){
                $datos[] = [
                    'id'=> $row['CLI_ID'],
                    'nombre'=> $row['CLI_NOMBRE'],
                    'apellido'=> $row['CLI_APELLIDO'],
                    'fecha_naci'=> $row['CLI_F_NACI'],
                    'genero'=> $row['CLI_GENERO']
                ];
            }
            return $datos;
        } //end if
    } // end_ getAll

    public static function getWhere($id_cliente){
        $db = new Connection ();
        $query = "SELECT *from tbl_cliente where CLI_ID = $id_cliente";
        $resultado = $db->query($query);
        $datos = [];
        if($resultado->num_rows) {
            while($row = $resultado->fetch_assoc()){
                $datos[] = [
                    'id'=> $row['CLI_ID'],
                    'nombre'=> $row['CLI_NOMBRE'],
                    'apellido'=> $row['CLI_APELLIDO'],
                    'fecha_naci'=> $row['CLI_F_NACI'],
                    'genero'=> $row['CLI_GENERO']
                ];
            }
            return $datos;
        } //end if
    } // end getWhere

    public static function insert($nombre, $apellido, $fecha_na, $genero){
        
        $db = new Connection ();
        $query = "INSERT INTO tbl_cliente (CLI_NOMBRE, CLI_APELLIDO, CLI_F_NACI, CLI_GENERO)
        VALUES('".$nombre."', '".$apellido."' , '".$fecha_na."' , '".$genero."' )";
        $db->query($query);
        if ($db->affected_rows) {
            return true;
        }
        return FALSE;
    }

        public static function update($id_cliente, $nombre, $apellido, $fecha_na, $genero){
        
        $db = new Connection ();
        $query = "UPDATE tbl_cliente SET 
        CLI_NOMBRE='".$nombre."', CLI_APELLIDO ='".$apellido."', CLI_F_NACI ='".$fecha_na."', CLI_GENERO='".$genero."'
       where CLI_ID = $id_cliente";
        $db->query($query);
        if ($db->affected_rows) {
            return TRUE;
        }
        return FALSE;
    }// end update

    public static function delete($id_cliente) {
        $db = new Connection ();
        $query = "DELETE FROM tbl_cliente  WHERE CLI_ID = $id_cliente"; 
         $db->query($query);        
        if ($db->affected_rows) {
            return TRUE;
        }
        return FALSE;

    }// end delete

}// end class Cliente
