<?php

class util {

    //toda vez vai ser chamada a session privada para verificar se ja esta iniciada ou não a seção
    private static function IniciarSession() {

        //Verifica se a sessão j´foi iniciada. Caso n seja, INICIA A MESMA
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    //Após verificar o login feito, guarda o id do usuario na $cod
    public static function GuardarCodigoLogado($cod) {
        self::IniciarSession();
        $_SESSION['cod'] = $cod;
    }

    //Caso precise do código do logado é só usar esta função
    public static function CodigoLogado() {
        self::IniciarSession();
        return $_SESSION['cod'];
    }

    //Função para deslogar
    public static function Deslogar() {
        self::IniciarSession();
        unset($_SESSION['cod']);
        header('location: login.php');
    }

    //Essa função vai ser usada no inicio de todas paginas para ver se está logado ou não para mostrar a pagina
    public static function VerificarLogado() {
        self::IniciarSession();
        if (!isset($_SESSION['cod']) || $_SESSION['cod'] == '') {
            header('location: login.php');
        }
    }

    public static function GuardarPerfil($nome) {
        self::IniciarSession();
        $nome = substr($nome, 0, 12);
        $_SESSION['nome'] = $nome;
    }

    public static function BuscaPerfil() {
        return $_SESSION['nome'];
    }
    
    public static function converteDataBanco($mydata){
         return substr($mydata, 6, 4) . "-" . substr($mydata, 3, 2) . "-" . substr($mydata, 0, 2);
    }
    
    public static function converteDataTela($mydata){
        return substr($mydata, 8, 2) . "/" . substr($mydata, 5, 2) . "/" . substr($mydata, 0, 4);
    }

}
