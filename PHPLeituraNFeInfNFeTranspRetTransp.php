<?php
class PHPLeituraNFeInfNFeTranspRetTransp {
    public $vServ=null;
    public $vBCRet=null;
    public $pICMSRet=null;
    public $vICMSRet=null;
    public $CFOP=null;
    public $cMunFG=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $Transp){
            $prop = $Transp->nodeName;
            if (property_exists('PHPLeituraNFeInfNFeTranspRetTransp', $prop)){
                $this->$prop = $Transp->nodeValue;
            } else {
                if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
            }
        }
    }
}