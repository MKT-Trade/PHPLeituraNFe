<?php
class PHPLeituraNFeInfNFeTotalICMSTot {
    public $vBC=null;
    public $vICMS=null;
    public $vBCST=null;
    public $vST=null;
    public $vProd=null;
    public $vFrete=null;
    public $vSeg=null;
    public $vDesc=null;
    public $vII=null;
    public $vIPI=null;
    public $vPIS=null;
    public $vCOFINS=null;
    public $vOutro=null;
    public $vNF=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $ICMSTot){
            $prop = $ICMSTot->nodeName;
            if (property_exists(__CLASS__, $prop)){
                $this->$prop = $ICMSTot->nodeValue;
            } else {
                if (NFE_DEBUG) echo __CLASS__ . ": tag {$node->nodeName} não trabalhada<br/>\n";
            }
        }
    }
}