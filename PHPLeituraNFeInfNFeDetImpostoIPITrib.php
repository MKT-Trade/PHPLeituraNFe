<?php
class PHPLeituraNFeInfNFeDetImpostoIPITrib {
    public $CST=null;
    public $vBC=null;
    public $pIPI=null;
    public $qUnid=null;
    public $vUnid=null;
    public $vIPI=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $IPITrib){
            $prop = $IPITrib->nodeName;
            if (property_exists('PHPLeituraNFeInfNFeDetImpostoIPITrib', $prop)){
                $this->$prop = $IPITrib->nodeValue;
            } else {
                if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
            }
            break;
        }
    }
}