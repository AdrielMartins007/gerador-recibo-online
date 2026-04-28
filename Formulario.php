<?php

class Formulario
{
    public $recebedor;
    public $pagador;
    public $id;
    public $valor;

    public function __construct($recebedor, $pagador, $id, $valor)
    {
        $this->recebedor = $recebedor;
        $this->pagador = $pagador;
        $this->id = $id;
        $this->valor = $valor;
    }

    public function mensagem()
    {
        echo "<script>
        alert('DADOS ENVIADOS CORRETAMENTE!');
        </script>";
    }
}
