<?php class operacion
{
    private $cadena;
    public function __construct($cadena)
    {
        $this->cadena= $cadena;
    }
    public function getcadena()
    {
        return $this->cadena;
    }
}
