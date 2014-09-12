<?php
class PHPLeituraNFeInfNFe {
    public $versao=null;
    public $Id=null;
    public $ide=null;
    public $emit=null;
    public $retirada=null;
    public $entrega=null;
    public $dest=null;
    public $det=array();
    public $total=null;
    public $transp=null;
    public $infAdic=null;
    
    public function __construct($dom){
        foreach ($dom->childNodes as $infNFe){
            if ($infNFe->hasAttribute('versao')) $this->versao = $infNFe->getAttribute('versao');
            if ($infNFe->hasAttribute('Id')) $this->Id = $infNFe->getAttribute('Id');
            foreach ($infNFe->childNodes as $node){
                switch ($node->nodeName) {
                    case 'ide':
                        $ide = new PHPLeituraNFeInfNFeIde($node);
                        $this->ide = (array)$ide;
                        break;
                    
                    case 'emit':
                        $emit = new PHPLeituraNFeInfNFeEmit($node);
                        $this->emit = (array)$emit;
                        break;
                    
                    case 'dest':
                        $dest = new PHPLeituraNFeInfNFeDest($node);
                        $this->dest = (array)$dest;
                        break;
                    
                    case 'retirada':
                        $retirada = new PHPLeituraNFeInfNFeRetirada($node);
                        $this->retirada = (array)$retirada;
                        break;
                    
                    case 'entrega':
                        $entrega = new PHPLeituraNFeInfNFeEntrega($node);
                        $this->entrega = (array)$entrega;
                        break;
                    
                    case 'det':
                        $det = new PHPLeituraNFeInfNFeDet($node);
                        $this->det[] = (array)$det;
                        break;
                    
                    case 'transp':
                        $transp = new PHPLeituraNFeInfNFeTransp($node);
                        $this->transp = (array)$transp;
                        break;
                    
                    case 'total':
                        $total = new PHPLeituraNFeInfNFeTotal($node);
                        $this->total = (array)$total;
                        break;
                    
                    default:
                        if (NFE_DEBUG) echo __CLASS__ . ": tag {$node->nodeName} não trabalhada<br/>\n";
                        break;
                }
            }
        }

    }
    
}