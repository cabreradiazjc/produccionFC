<?php 
session_start();
include_once '../../model/bitacoras/espacios_model.php';

$param = array();

//OPCION = 
$param['param_opcion']='';

if (isset($_POST['param_opcion']))
    $param['param_opcion'] = $_POST['param_opcion'];

//FIN OPCION

//tarea+ user - OPERACIONES
$param['tarea']='';
if (isset($_POST['tarea']))
    $param['param_tarea'] = $_POST['tarea'];

$param['user']='';
if (isset($_POST['user']))
    $param['param_user'] = $_POST['user'];
//FIN OPeraciones

$param['param_id']='';
if (isset($_POST['param_id']))
    $param['param_id'] = $_POST['param_id'];


//ESPACIOS

$param['param_ac_id']='';
$param['param_ac_fecha']='';
$param['param_ac_24']='';
$param['param_ac_31']='';
$param['param_ac_38']='';
$param['param_ac_127']='';
$param['param_ac_tedbprod']='';
$param['param_ac_tecyber']='';


$param['param_dc_id']='';
$param['param_dc_fecha']='';
$param['param_dc_24']='';
$param['param_dc_31']='';
$param['param_dc_38']='';
$param['param_dc_127']='';
$param['param_dc_tedbprod']='';
$param['param_dc_tecyber']='';



if (isset($_POST['param_ac_id']))
    $param['param_ac_id'] = $_POST['param_ac_id']; 

if (isset($_POST['param_ac_id_edit']))
    $param['param_ac_id_edit'] = $_POST['param_ac_id_edit']; 




if (isset($_POST['param_ac_fecha']))
    $param['param_ac_fecha'] = $_POST['param_ac_fecha']; 

if (isset($_POST['param_ac_24']))
    $param['param_ac_24'] = $_POST['param_ac_24']; 

if (isset($_POST['param_ac_31']))
    $param['param_ac_31'] = $_POST['param_ac_31']; 

if (isset($_POST['param_ac_38']))
    $param['param_ac_38'] = $_POST['param_ac_38']; 

if (isset($_POST['param_ac_127']))
    $param['param_ac_127'] = $_POST['param_ac_127']; 

if (isset($_POST['param_ac_tedbprod']))
    $param['param_ac_tedbprod'] = $_POST['param_ac_tedbprod']; 

if (isset($_POST['param_ac_tecyber']))
    $param['param_ac_tecyber'] = $_POST['param_ac_tecyber']; 




if (isset($_POST['param_dc_id']))
    $param['param_dc_id'] = $_POST['param_dc_id']; 

if (isset($_POST['param_dc_id_edit']))
    $param['param_dc_id_edit'] = $_POST['param_dc_id_edit']; 

if (isset($_POST['param_dc_fecha']))
    $param['param_dc_fecha'] = $_POST['param_dc_fecha']; 

if (isset($_POST['param_dc_24']))
    $param['param_dc_24'] = $_POST['param_dc_24']; 

if (isset($_POST['param_dc_31']))
    $param['param_dc_31'] = $_POST['param_dc_31']; 

if (isset($_POST['param_dc_38']))
    $param['param_dc_38'] = $_POST['param_dc_38']; 

if (isset($_POST['param_dc_127']))
    $param['param_dc_127'] = $_POST['param_dc_127']; 

if (isset($_POST['param_dc_tedbprod']))
    $param['param_dc_tedbprod'] = $_POST['param_dc_tedbprod']; 

if (isset($_POST['param_dc_tecyber']))
    $param['param_dc_tecyber'] = $_POST['param_dc_tecyber']; 



//EDITAR



if (isset($_POST['param_ac_id_edit']))
    $param['param_ac_id_edit'] = $_POST['param_ac_id_edit']; 

if (isset($_POST['param_ac_fecha_edit']))
    $param['param_ac_fecha_edit'] = $_POST['param_ac_fecha_edit']; 

if (isset($_POST['param_ac_24_edit']))
    $param['param_ac_24_edit'] = $_POST['param_ac_24_edit']; 

if (isset($_POST['param_ac_31_edit']))
    $param['param_ac_31_edit'] = $_POST['param_ac_31_edit']; 

if (isset($_POST['param_ac_38_edit']))
    $param['param_ac_38_edit'] = $_POST['param_ac_38_edit']; 

if (isset($_POST['param_ac_127_edit']))
    $param['param_ac_127_edit'] = $_POST['param_ac_127_edit']; 

if (isset($_POST['param_ac_tedbprod_edit']))
    $param['param_ac_tedbprod_edit'] = $_POST['param_ac_tedbprod_edit']; 

if (isset($_POST['param_ac_tecyber_edit']))
    $param['param_ac_tecyber_edit'] = $_POST['param_ac_tecyber_edit']; 




if (isset($_POST['param_dc_id_edit']))
    $param['param_dc_id_edit'] = $_POST['param_dc_id_edit']; 

if (isset($_POST['param_dc_fecha_edit']))
    $param['param_dc_fecha_edit'] = $_POST['param_dc_fecha_edit']; 

if (isset($_POST['param_dc_24_edit']))
    $param['param_dc_24_edit'] = $_POST['param_dc_24_edit']; 

if (isset($_POST['param_dc_31_edit']))
    $param['param_dc_31_edit'] = $_POST['param_dc_31_edit']; 

if (isset($_POST['param_dc_38_edit']))
    $param['param_dc_38_edit'] = $_POST['param_dc_38_edit']; 

if (isset($_POST['param_dc_127_edit']))
    $param['param_dc_127_edit'] = $_POST['param_dc_127_edit']; 

if (isset($_POST['param_dc_tedbprod_edit']))
    $param['param_dc_tedbprod_edit'] = $_POST['param_dc_tedbprod_edit']; 

if (isset($_POST['param_dc_tecyber_edit']))
    $param['param_dc_tecyber_edit'] = $_POST['param_dc_tecyber_edit']; 






//FIN REPORTES


$Espacios = new Espacios_model();
echo $Espacios->gestionar($param);


 ?>