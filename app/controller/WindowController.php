<?php


class WindowController {
    protected $size;
    protected $color;
    protected $type;
    protected $ativa;
    protected $msg;

    public function __construct($type,$ativa)
    {
        $this->size= $size;
        $this->color= $color;
        $this->type= $type;
        if ($ativa == true){

        $msg = "<p>Sucess, A janela está ativa.";
        echo $msg;

        }else {

        $msg = "<p>Error, A janela está inativa.";
        echo $msg;
        }
        

    }   

    public function alteraTamanho($size)
    {
        $this->size=$size;
        $this->ativa= true;
        $this->color= "Vermelha";

        echo "<p>Tamanho alterado";

        

    }





} 