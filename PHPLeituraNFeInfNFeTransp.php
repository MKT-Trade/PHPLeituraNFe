<?php
class PHPLeituraNFeInfNFeTransp {
    public $modFrete=null;
    public $transporta=null;
    public $veicTransp=null;
    public $reboque=null;
    public $retTransp=null;
    public $vol=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $Transp){
            switch ($Transp->nodeName){
                case 'transporta':
                    $this->transporta = new PHPLeituraNFeInfNFeTranspTransporta($Transp);
                    break;
                
                case 'retTransp':
                    $this->retTransp = new PHPLeituraNFeInfNFeTranspRetTransp($Transp);
                    break;
                
                case 'veicTransp':
                    $this->veicTransp = new PHPLeituraNFeInfNFeTranspVeiculo($Transp);
                    break;
                
                case 'reboque':
                    $this->reboque = new PHPLeituraNFeInfNFeTranspReboque($Transp);
                    break;
                
                case 'vol':
                    $vol = new PHPLeituraNFeInfNFeTranspVolume($Transp);
                    $this->vol[] = (array)$vol;
                    break;
                
                default:
                    $prop = $Transp->nodeName;
                    if (property_exists('PHPLeituraNFeInfNFeTransp', $prop)){
                        $this->$prop = $Transp->nodeValue;
                    } else {
                        if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
                    }
                    break;
            }
        }
    }
}