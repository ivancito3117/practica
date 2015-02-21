<?php
require_once ('collection.php');
require_once ('vehiculo.php');

Class parqueadero
{
	private $nombre; 
	private $vehiculos;
	private $valorhora;
	private $valorminuto;

	public function __Construct($nombre, $valorhora, $valorminuto)
	{
		$this->nombre=$nombre;
		$this->valorhora=$valorhora;
		$this->valorminuto=$valorminuto;
		$this->vehiculos= new collection();
	}

	public function set_nombre($nombre)
	{
		$this->nombre=$nombre;
	}
	public function get_nombre()
	{
		return $this->nombre;
	}

	public function set_valorhora($valorhora)
	{
		$this->valorhora=$valorhora;
	}
	public function get_valorhora()
	{
		return $this->valorhora;
	}

	public function set_valorminuto($valorminuto)
	{
		$this->valorminuto=$valorminuto;
	}
	public function  get_valorminuto()
	{
		return $this->valorminuto;
	}

	public function get_vehiculos()
	{
		return $this->vehiculos;
	}


	public function parquear($vehiculo)
	{
		$this->vehiculos->add($vehiculo);

		
	}

  	 /*public function buscar($placa)
	{

		 $this->vehiculos->buscar($vehiculo->get_placa,$placa); 		
		
	}*/
	#public function cobro(tiempo)
	#{
       # returna numero;
	#}

	public function salida($placa, $horafinal)
	{
		#return $vehiculo->calcularvalor ($this->get_tiempofinal());
		$objeto2= new Tiempo();
       
        $Tiempo = null;
		$this->vehiculos->buscar('get_placa()', $placa);
		$vehiculo->set_tiempofinal($horafinal);

		if( $vehiculo <> null);
		 $Tiempo = $vehiculo->calcularvalor();

        return $Tiempo;


		$this->vehiculos->eliminar ($vehiculo);

	}	
}
?>
