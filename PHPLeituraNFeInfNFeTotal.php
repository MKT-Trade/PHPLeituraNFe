<?php
class PHPLeituraNFeInfNFeTotal {
    public $ICMSTot = null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $Total){
            switch ($Total->nodeName) {
                case 'ICMSTot':
                    $ICMSTot = new PHPLeituraNFeInfNFeTotalICMSTot($Total);
                    $this->ICMSTot = (array)$ICMSTot;
                    break;

                default:
                    if (NFE_DEBUG) echo __CLASS__ . ": tag {$node->nodeName} n�o trabalhada<br/>\n";
                    break;
            }
        }
    }
}