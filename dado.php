<?php

class dado {
    private $minNumDado;
    private $maxNumDado;
    

    public function setMinNumDado($_minNumDado){
        if ($_minNumDado >= 0) {
            $this->minNumDado = $_minNumDado; 
        } else {
            echo('Valor incorrecto para min <br> <br>' );
        }
    }


    public function setMaxNumDado($_maxNumDado){
       if ($_maxNumDado <= 12) {
        $this->maxNumDado = $_maxNumDado; 
       } else {
         echo('Valor incorrecto para max <br> <br>');
       }  
    }

    public function getMinNumDado(){
        return $this->minNumDado;
    }
    public function getMaxNumDado(){
        return ($this->maxNumDado);
    }

    public function tirarDado(){
       return rand($this->minNumDado, $this->maxNumDado);
    }
}

?>