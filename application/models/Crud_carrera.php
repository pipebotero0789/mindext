<?php

if (!defined('BASEPATH'))
    exit('No ingrese directamente es este script');

/**
 * Description of crud_model
 *
 * @author YARA WEB Developer
 */
class Crud_carrera extends CI_Model {

    //constructor de la clase
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }


    public function obtenerRegistros($pArrayWhere = NULL, $pSelect = NULL, $pLimit = NULL, $pOrder = NULL) {

        $this->db->join("basica_tipo_estudio te", "te.tipo_estudio_id = ca.id_tipo_estudio", "inner");
        $this->db->join("produccion_universidad u", "ca.id_universidad = u.universidad_id", "inner");
        $this->db->join("basica_ciudad ci", "ci.ciudad_id = u.ciudad_id", "inner");

        //verifico el parámetro para preparar la consulta SELECT
        if ($pSelect != NULL) {
            $this->db->select($pSelect);
        }//fin del if
        //verifico el parámetro para preparar la consulta WHERE
        if ($pArrayWhere != NULL) {
            $sqlRegistros = $this->db->where($pArrayWhere);
        }//fin del if
        if (isset($pLimit)):
            if (is_array($pLimit)):
                $this->db->limit($pLimit[0], $pLimit[1]);
            else:
                $this->db->limit($pLimit);
            endif;
        endif;
        //Order by
        //si hay valor de order
        if ($pOrder):
            $this->db->order_by($pOrder);
        endif;
        //realizo la consulta 
        $sqlRegistros = $this->db->get('produccion_carrera ca');
        //validamos si existen registros
        if ($sqlRegistros->num_rows() > 0) {
            //iniciamos la iteracion de los datos
            foreach ($sqlRegistros->result() as $filaTabla):
                $dataRegistro[] = $filaTabla;
            endforeach;
        }//fin del if
        else {
            //si no se encuentra ningún resultado en la consulta
            //se envia un arreglo vacio
            $dataRegistro = null;
        }
        //devolvemos la data
        return $dataRegistro;
    }

    public function agregarRegistro($pTabla, $pArrayInsert) {
        //ejecuto la inserción
        return $insertar = $this->db->insert($pTabla, $pArrayInsert);
    }
    
    public function actualizarRegistro($pTabla, $pArrayActualizar, $pArrayWhere) {
        //hago la actualización
        $actualizar = $this->db->where($pArrayWhere);
        return $actualizar = $this->db->update($pTabla, $pArrayActualizar);
    }

}

?>