<?php
class PHPLeituraNFeInfNFeTranspTransporta {
    public $xNome=null;
    public $IE=null;
    public $xEnder=null;
    public $UF=null;
    public $xMun=null;
    public $CNPJ=null;
    public $CPF=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $Transp){
            $prop = $Transp->nodeName;
            if (property_exists('PHPLeituraNFeInfNFeTranspTransporta', $prop)){
                $this->$prop = $Transp->nodeValue;
            } else {
                if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
            }
        }
    }
}