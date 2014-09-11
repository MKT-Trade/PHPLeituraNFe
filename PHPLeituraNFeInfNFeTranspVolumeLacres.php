<?php
class PHPLeituraNFeInfNFeTranspVolumeLacres {
    public $nLacre=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $Volume){
            $prop = $Volume->nodeName;
            if (property_exists('PHPLeituraNFeInfNFeTranspVolumeLacres', $prop)){
                $this->$prop = $Volume->nodeValue;
            } else {
                if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
            }
        }
    }
}