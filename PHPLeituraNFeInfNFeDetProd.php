<?php
class PHPLeituraNFeInfNFeDetProd {
    public $cProd=null;
    public $cEAN=null;
    public $xProd=null;
    public $NCM=null;
    public $EXTIPI=null;
    public $genero=null;
    public $CFOP=null;
    public $uCom=null;
    public $qCom=null;
    public $vUnCom=null;
    public $vProd=null;
    public $cEANTrib=null;
    public $uTrib=null;
    public $qTrib=null;
    public $vUnTrib=null;
    public $vFrete=null;
    public $vSeg=null;
    public $vDesc=null;
    public $vOutro=null;
    public $indTot=null;
    public $xPed=null;
    public $nItemPed=null;
    
    public function __construct($dom){
        foreach ($dom->childNodes as $Ide){
            $prop = $Ide->nodeName;
            if (property_exists('PHPLeituraNFeInfNFeDetProd', $prop)){
                $this->$prop = $Ide->nodeValue;
            } else {
                if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
            }
        }
    }
}