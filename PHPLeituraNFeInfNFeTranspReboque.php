<?php
class PHPLeituraNFeInfNFeTranspReboque {
    public $placa=null;
    public $UF=null;
    public $RNTC=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $Transp){
            $prop = $Transp->nodeName;
            if (property_exists('PHPLeituraNFeInfNFeTranspReboque', $prop)){
                $this->$prop = $Transp->nodeValue;
            } else {
                if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
            }
        }
    }
}