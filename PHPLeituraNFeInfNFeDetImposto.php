<?php
class PHPLeituraNFeInfNFeDetImposto {
    public $ICMS=null;
    public $IPI=null;
    public $II=null;
    public $PIS=null;
    public $PISST=null;
    public $COFINS=null;
    public $COFINSST=null;
    public $ISSQN=null;
    
    public function __construct($dom){
        foreach ($dom->childNodes as $Imposto){
            switch ($Imposto->nodeName){
                case 'ICMS':
                    $ICMS = new PHPLeituraNFeInfNFeDetImpostoICMS($Imposto);
                    $this->ICMS = (array)$ICMS;
                    break;
                
                case 'PIS':
                    $PIS = new PHPLeituraNFeInfNFeDetImpostoPIS($Imposto);
                    $this->PIS = (array)$PIS;
                    break;
                
                case 'PISST':
                    $PIS = new PHPLeituraNFeInfNFeDetImpostoPIS($Imposto);
                    $this->PIS = (array)$PIS;
                    break;
                
                case 'COFINS':
                    $COFINS = new PHPLeituraNFeInfNFeDetImpostoCOFINS($Imposto);
                    $this->COFINS = (array)$COFINS;
                    break;
                
                case 'COFINSST':
                    $COFINS = new PHPLeituraNFeInfNFeDetImpostoCOFINS($Imposto);
                    $this->COFINS = (array)$COFINS;
                    break;
                
                case 'IPI':
                    $IPI = new PHPLeituraNFeInfNFeDetImpostoIPI($Imposto);
                    $this->IPI = (array)$IPI;
                    break;
                
                /*
                case 'II':
                    $this->II = new PHPLeituraNFeInfNFeDetImpostoII($Imposto);
                    break;
                
                case 'ISSQN':
                    $this->ISSQN = new PHPLeituraNFeInfNFeDetImpostoISS($Imposto);
                    break;
                 */
                default:
                    if (NFE_DEBUG) echo __CLASS__ . " Imposto não trabalhado: {$Imposto->nodeName}<br/>\n";
                    break;
            }
        }
    }
}