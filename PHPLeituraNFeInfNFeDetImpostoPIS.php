<?php

class PHPLeituraNFeInfNFeDetImpostoPIS {
    public $CST=null;
    public $vBC=null;
    public $pPIS=null;
    public $vPIS=null;
    public $qBCProd=null;
    public $vAliqProd=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $Ide){
            foreach ($Ide->childNodes as $PIS){
                $prop = $PIS->nodeName;
                if (property_exists('PHPLeituraNFeInfNFeDetImpostoPIS', $prop)){
                    $this->$prop = $PIS->nodeValue;
                } else {
                    if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
                }
            }
        }
    }
}