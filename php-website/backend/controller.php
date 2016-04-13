<?php

/**
 * Imprime el índice lateral con enlace a todos los elementos
 * @param  Array $array_datos El listado en el que se va a basar
 * @return string              El código HTML para imprimir
 */
function imprimirIndiceUsuarios($array_datos)
{
	$text = '';
	foreach ($array_datos as $dato) {
		$text = $text.'<a href="#" class="list-group-item">'.$dato['nombre'].' '.$dato['apellido'].'</a>';
	}
	return $text;
}

/**
 * Crea un nuevo usuario a partir de un array de datos
 * @param  Array $array_datos El array de donde va a tomar los datos
 * @param  integer $id    El ID en el que se va a basar para crear el usuario
 * @return User        El nuevo objeto creado
 */
function crearUsuario($array_datos, $id)
{
	foreach ($array_datos as $dato) {
		if($dato['id'] == $id){
			return new User($dato['id'], $dato['nombre'], $dato['apellido'], $dato['puesto'], $dato['edad'], $dato['empresa']);
		}
	}
}

?>