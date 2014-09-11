<?php
class PHPLeituraNFeInfNFeDet {
    public $prod=null;
    public $imposto=null;
    public $infAdProd=null;
    
    public function __construct($dom){
        foreach ($dom->childNodes as $Det){
            switch ($Det->nodeName){
                case 'prod':
                    $prod = new PHPLeituraNFeInfNFeDetProd($Det);
                    $this->prod = (array)$prod;
                    break;
                
                case 'imposto':
                    $imposto = new PHPLeituraNFeInfNFeDetImposto($Det);
                    $this->imposto = (array)$imposto;
                    break;
                
                case 'infAdProd':
                    $this->infAdProd = $Det->nodeValue;
                    break;
                
                default:
                    if (NFE_DEBUG) echo __CLASS__ . ": Propriedade não trabalhada: {$Det->nodeName}<br/>\n";
                    break;
            }
        }
    }
}