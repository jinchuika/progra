<?php
/**
* Clase para usuarios
*/
class User
{
	public $id;
	private $nombre = '';
	private $apellido = '';
	private $puesto = '';
	private $anno_nacimiento = 0;
	private $empresa = '';
	
	/**
	 * Crea un nuevo objeto en base a esta clase
	 * @param integer $id       el ID para identificar al usuario
	 * @param string $nombre   el nombre del usuario
	 * @param string $apellido el apellido del usuario
	 * @param string $puesto   el puesto del usuario
	 * @param string $anno_nacimiento     la anno_nacimiento del usuario
	 * @param string $empresa  la empresa en que trabaja el usuario
	 */
	function __construct($id, $nombre, $apellido, $puesto, $anno_nacimiento, $empresa)
	{
		$this->id = $id;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->puesto = $puesto;
		$this->anno_nacimiento = $anno_nacimiento;
		$this->empresa = $empresa;
	}

	/**
	 * Devuelve uno de los datos del usuario actual
	 * @param  string $atributo el nombre de uno de los atributos del objeto actual
	 * @return integer|string           Es integer cuando se pide id o anno_nacimiento, es string para el resto
	 */
	public function mostrarDato($atributo)
	{
		return $this->$atributo;
	}
}
?>