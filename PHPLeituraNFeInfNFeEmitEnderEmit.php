<?php
define('NFE_ENDERECO_EMITENTE_TIPO_REMETENTE_COMERCIANTE', 1);
define('NFE_ENDERECO_EMITENTE_TIPO_REMETENTE_INDUSTRIAL_OU_FABRICANTE', 2);
define('NFE_ENDERECO_EMITENTE_TIPO_REMETENTE_EQUIPARADO_A_INDUSTRIAL', 3);

class PHPLeituraNFeInfNFeEmitEnderEmit {
    public $xLgr=null;
    public $nro=null;
    public $xCpl=null;
    public $xBairro=null;
    public $cMun=null;
    public $xMun=null;
    public $UF=null;
    public $CEP=null;
    public $cPais=1058;
    public $xPais='BRASIL';
    public $fone=null;
    public $xTipoRemetente=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $Emit){
            $prop = $Emit->nodeName;
            if (property_exists('PHPLeituraNFeInfNFeEmitEnderEmit', $prop)){
                $this->$prop = $Emit->nodeValue;
            } else {
                if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
            }
        }
    }
}