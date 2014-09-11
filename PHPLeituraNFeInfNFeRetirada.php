<?php
class PHPLeituraNFeInfNFeRetirada {
    public $CNPJ=null;
    public $CPF=null;
    public $xLgr=null;
    public $nro=null;
    public $xCpl=null;
    public $xBairro=null;
    public $cMun=null;
    public $xMun=null;
    public $UF=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $Ide){
            $prop = $Ide->nodeName;
            if (property_exists('PHPLeituraNFeInfNFeRetirada', $prop)){
                $this->$prop = $Ide->nodeValue;
            } else {
                if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
            }
        }
    }
}