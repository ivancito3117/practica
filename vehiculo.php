<?php

require_once('tiempo.php');

class vehiculo
{
	private $placa;
	private $tiempoinicial;
	private $tiempofinal;


    public function __Construct($placa,$tiempo)
    {
      $this->placa = $placa;
      $this->tiempoinicial = $tiempo;
      $this->tiempofinal = null;
    }

    

	public function set_placa($placa)
	{
		$this->placa=$placa;
	}
	public function get_placa()
	{
       return  $this->placa;
	}

    public function set_tiempoinicial($tiempo)
	{
		$this->tiempoinicial=$tiempo;
	}


	public function get_tiempoinicial()
	{
      return $this->tiempoinicial;
	}


public function set_tiempofinal($tiempo)
	{
		$this->tiempofinal=$tiempo;
	}


	public function get_tiempofinal()
	{
      return $this->tiempofinal;
	}
	

public function calcularvalor ()
	{
		return  $this->get_tiempoinicial()->calculardiferencia($this->get_tiempofinal());
	    
    }
  }   
?>