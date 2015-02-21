<?PHP
class Tiempo
{
private $hora;
private $minutos;
private $segundos;

public function __construct($h, $m, $s)
{
  $this->hora = $h;
  $this->minutos = $m;
  $this->segundos = $s;
}


public function set_hora ($hora)
{ 
	$this->hora =$hora;
}

public function get_hora()
{ 
	return  $this->hora;
}

public function set_minutos ($minutos)
{ 
	$this->minutos =$minutos;
}

public function get_minutos()
{ 
	return $this->minutos; 
}

public function set_segundos($segundos)
{
 $this->segundos= $segundos;
}

public function get_segundos ()
{
 return $this->segundos;
}

public function convertirsegundos ()
{
	return ($this->get_hora() * 3600) + ($this->get_minutos()*60) +
       $this->get_segundos();
}


public function fraccionhora($segundos)
{
	
    if ($segundos>=3600) 
    
       return floor ($segundos/3600);
    
    else
	    return 0;
}

public function fraccionminuto($segundos)
{
	if ($segundos>=60)

		return floor(($segundos % 3600)/60);
	else 
		return 0; 
}

	public function fraccionsegundos($segundos)
     {
	    if ($segundos > 0 ) 
		   return round ($segundos % 60 )/1;
	     else 
	     	return 0;
	    }

	public function calculardiferencia ($objetotiempo)
	{
		$segundos=$objetotiempo->convertirsegundos()-$this->convertirsegundos();
		$objeto= new tiempo(0,0,0);
		
	    $objeto-> set_hora ($this->fraccionhora($segundos));
	    $objeto-> set_minutos ($this->fraccionminuto($segundos));
	    $objeto-> set_segundos ($this->fraccionsegundos($segundos));
	    return $objeto;
    }   
    
}
?>
		
