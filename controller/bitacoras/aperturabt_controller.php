<?php 
session_start();
include_once '../../model/bitacoras/aperturabt_model.php';

$param = array();
$param['param_opcion']='';

//APERTURA BT

$param['param_fecha']='';
$param['param_hora']='';
$param['param_observaciones']='';


//FIN LN



if (isset($_POST['param_opcion']))
    $param['param_opcion'] = $_POST['param_opcion'];


//APERTURA BT

if (isset($_POST['param_fecha']))
    $param['param_fecha'] = $_POST['param_fecha']; 

if (isset($_POST['param_hora']))
    $param['param_hora'] = $_POST['param_hora']; 

if (isset($_POST['param_observaciones']))
    $param['param_observaciones'] = $_POST['param_observaciones']; 

if (isset($_POST['tarea']))
    $param['param_tarea'] = $_POST['tarea'];

if (isset($_POST['user']))
    $param['param_user'] = $_POST['user'];


if (isset($_POST['param_id']))
    $param['param_id'] = $_POST['param_id'];

if (isset($_POST['param_id_edit']))
    $param['param_id_edit'] = $_POST['param_id_edit'];



//EDIT

if (isset($_POST['param_fecha_edit']))
    $param['param_fecha_edit'] = $_POST['param_fecha_edit']; 

if (isset($_POST['param_hora_edit']))
    $param['param_hora_edit'] = $_POST['param_hora_edit']; 

if (isset($_POST['param_observaciones_edit']))
    $param['param_observaciones_edit'] = $_POST['param_observaciones_edit']; 



//FIN APERTURA BT


$Aperturabt = new Aperturabt_model();
echo $Aperturabt->gestionar($param);


 ?>