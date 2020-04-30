<?php
class WindowController {
    protected $size;
    protected $color;
    protected $type;
    protected $ativa;

    public function __construct($type)
    {
        $this->size= '10 x 42';
        $this->color= 'Black';
        $this->ativa= true;
        $this->type= $type;
    }   
    

} 