<?php

abstract class classes_Conexao {


    const USER = "profda36_admins";
    const PASS = "A!S@D#Q!W@E#T3dnpoa4";
    const HOST = "216.172.172.48";
    const DB = "profda36_clinic";

    private static $instance = null;

    private static function conectar() {
        try {
            if (self::$instance == null):
                $dsn = 'mysql:host=' . self::HOST . ';dbname=' . self::DB;
                self::$instance = new PDO($dsn, self::USER, self::PASS);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            endif;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
        return self::$instance;
    }

    protected static function getDB() {
        return self::conectar();
    }

}