<?php
class PHPLeituraNFeInfNFeTranspVolume {
    public $qVol=null;
    public $esp=null;
    public $marca=null;
    public $nVol=null;
    public $pesoL=null;
    public $pesoB=null;
    public $lacres=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $Volume){
            switch ($Volume->nodeName){
                case 'lacres':
                    $this->lacres[] = new PHPLeituraNFeInfNFeTranspVolumeLacres($Volume);
                    break;
                
                default:
                    $prop = $Volume->nodeName;
                    if (property_exists('PHPLeituraNFeInfNFeTranspVolume', $prop)){
                        $this->$prop = $Volume->nodeValue;
                    } else {
                        if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
                    }
                    break;
            }
        }
    }
}