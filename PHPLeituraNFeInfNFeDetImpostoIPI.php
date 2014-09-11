<?php
class PHPLeituraNFeInfNFeDetImpostoIPI {
    public $clEnq=null;
    public $CNPJProd=null;
    public $cSelo=null;
    public $qSelo=null;
    public $cEnq=null;
    public $IPITrib=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $IPI){
            switch ($IPI->nodeName){
                case 'IPITrib':
                    $IPITrib = new PHPLeituraNFeInfNFeDetImpostoIPITrib($IPI);
                    $this->IPITrib = (array)$IPITrib;
                    break;
                
                default:
                    $prop = $IPI->nodeName;
                    if (property_exists('PHPLeituraNFeInfNFeDetImpostoIPI', $prop)){
                        $this->$prop = $IPI->nodeValue;
                    } else {
                        if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
                    }
                    break;
            }
        }
    }
}