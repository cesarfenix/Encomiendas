<?php
/**
 * 
 */
class Paquete
{
	private $tipo;
	private $servicio;
	private $peso;
	
	public function __construct( $tip, $ser, $pes)
	{
		$this->tipo=$tip;
		$this->servicio=$ser;
		$this->peso=$pes;
	}
	public function Paquete()
	{
		return $this->tipo.$this->servicio.$this->peso;
	}
	public function getTipo()
	{
		return $this->tipo;
	}
	public function setTipo()
	{
		return $this->tipo;
	}
	public function getServicio()
	{
		return $this->servicio;
	}
	public function setServicio()
	{
		return $this->servicio;
	}
	public function getPeso()
	{
		return $this->peso;
	}
	public function setPeso()
	{
		return $this->peso;
	}
	public function Calcular()
	{
		if ($this->tipo == "Carta") {
			if ($this->servicio == "Hoy" && $this->peso <= 5) {
			return 12650;
		}
		elseif ($this->servicio == "Hoy" && $this->peso > 5) {
			return $this->peso*4450-12650;
		}
		elseif ( $this->servicio == "Siguiente" && $this->peso <= 5) {
			return 5100;
		}
		elseif ($this->servicio == "Siguiente" && $this->peso > 5) {
			return $this->peso*1900-5100;
		}
	}
		if ($this->tipo == "Caja") {
			{	
			if ($this->servicio == "Hoy" && $this->peso <= 5) {
			return 14000;
		}
		elseif ($this->servicio == "Hoy" && $this->peso > 5) {
			return $this->peso*5100-8900;
		}
		elseif ( $this->servicio == "Siguiente" && $this->peso <= 5) {
			return 6300;
		}
		elseif ($this->servicio == "Siguiente" && $this->peso > 5) {
			return $this->peso*2300-5200;
		}
		

	}
		
}
}
}
?>