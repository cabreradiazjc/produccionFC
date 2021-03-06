<?php 
header("Content-Type: text/html;charset=utf-8");
date_default_timezone_set('America/Lima');
include_once '../model/conexion_model.php';

class Tree_Model
{
	private $array = array();
	private $tree = array();

	function __construct() {
        $this->conexion = Conexion_Model::getConexion();
        $this->usuId = 8;
    }

    function cerrarAbrir() {
        mysql_close($this->conexion);
        $this->conexion = Conexion_Model::getConexion();
    }

	function gestionar($datos){
		$this->param = $datos;
		switch($this->param['param_opcion'])
		{
			case "listarMenu":
				echo $this->listarMenu();
				break;
		}
		mysqli_close($this->conexion);
	}

	function prepararConsultaUsuario($opcion) {
        $user = $this->param['param_user'];
        $consultaSql = "call sp_control_usuario(";
        $consultaSql.="'" . $opcion . "',"; 
        $consultaSql.="'".$user."')";
        //echo $consultaSql;
        $this->result = mysqli_query($this->conexion,$consultaSql);
    }

	function listarMenu()
	{
		$this->prepararConsultaUsuario('opc_listar_menu');
        $total = mysqli_num_rows($this->result);

        $datos = array();
        while($fila = mysqli_fetch_array($this->result))
        {
            array_push($datos, array(
                "id" =>$fila['idtareas'],
                "est"=>0,
                "idParent" =>$fila['id_tareaPadre'],
                "text"=>$fila['tar_nombre'],
                "url"=>$fila['tar_url'],
                "estilo"=> $fila['tar_icono']       
                ));
        }
         echo '
                 <li class="nav-small-cap">MENÚ DE NAVEGACIÓN</li>';

        $padre=0;
        $vinculo=0;
        $estado=0;      
        for($i=0; $i<count($datos);$i++)
        {
            $padre= $datos[$i]['idParent'];

            if($padre==0 && $datos[$i]['est']==0)
            {
                $vinculo=$datos[$i]['id'];

                echo '
                       <li>
                          <a href="#" class=" has-arrow waves-effect waves-dark" aria-expanded="true">
                            <i class="mdi '. $datos[$i]['estilo'].'"></i> 
                            <span class="hide-menu">'.$datos[$i]['text'].'</span>
                            
                          </a>
                      <ul aria-expanded="false" class="collapse">
              ';

              $datos[$i]['est']=1;
                for($j=0; $j<count($datos);$j++)
                {
                    $padrej =$datos[$j]['idParent'];
                    if($padrej!=0 && $datos[$j]['est']==0)
                    {
                        if($datos[$j]['idParent']==$vinculo)
                        {
                            echo '
                                    <li>
                                        <a href="'.$datos[$j]['url'].'">'.$datos[$j]['text'].'</a>
                                    </li>
                                ';

                                $datos[$j]['est']=1;
                        }
                    }
                    
                }
                echo'
                </ul>
            </li>';

            }
        }
            


	}
}
 ?>
























