<?php include_once("provincia.php");
ini_set('display_errors',1);
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    try{
        $p = new Provincia();
        $p->Borrar($_GET['codp']);
        header("Location: visualizar_provincia.php");
        exit();
    } catch(PDOExeption $e){
        die($e->getMessage());
    }
}
?>