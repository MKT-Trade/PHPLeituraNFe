<?php
class PHPLeituraNFeInfNFeDetImpostoCOFINS {
    public $CST=null;
    public $vBC=null;
    public $pCOFINS=null;
    public $vCOFINS=null;
    public $qBCProd=null;
    public $vAliqProd=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $Ide){
            foreach ($Ide->childNodes as $COFINS){
                $prop = $COFINS->nodeName;
                if (property_exists('PHPLeituraNFeInfNFeDetImpostoCOFINS', $prop)){
                    $this->$prop = $COFINS->nodeValue;
                } else {
                    if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
                }
            }
        }
    }
}