<?php
class PHPLeituraNFeInfNFeEmit {
    public $CNPJ=null;
    public $xNome=null;
    public $xFant=null;
    public $enderEmit=null;
    public $IE=null;
    public $IM=null;
    public $CNAE=null;
    public $CRT=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $Emit){
            switch ($Emit->nodeName){
                case 'enderEmit':
                    $enderEmit = new PHPLeituraNFeInfNFeEmitEnderEmit($Emit);
                    $this->enderEmit = (array)$enderEmit;
                    break;
                
                default:
                    $prop = $Emit->nodeName;
                    if (property_exists('PHPLeituraNFeInfNFeEmit', $prop)){
                        $this->$prop = $Emit->nodeValue;
                    } else {
                        if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
                    }
                    break;
            }
        }
    }
}