<?php
class PHPLeituraNFeInfNFeDest {
    public $xNome=null;
    public $IE=null;
    public $ISUF=null;
    public $email=null;
    public $CNPJ=null;
    public $CPF=null;
    public $enderDest=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $Dest){
            switch ($Dest->nodeName){
                case 'enderDest':
                    $enderDest = new PHPLeituraNFeInfNFeDestEnderDest($Dest);
                    $this->enderDest = (array)$enderDest;
                    break;
                
                default:
                    $prop = $Dest->nodeName;
                    if (property_exists('PHPLeituraNFeInfNFeDest', $prop)){
                        $this->$prop = $Dest->nodeValue;
                    } else {
                        if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
                    }
                    break;
            }
        }
    }
}