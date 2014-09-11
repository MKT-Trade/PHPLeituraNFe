<?php
define('NFE_ISS_CODIGO_TRIBUTACAO_NORMAL', 'N');
define('NFE_ISS_CODIGO_TRIBUTACAO_RETIDA', 'R');
define('NFE_ISS_CODIGO_TRIBUTACAO_SUBSTITUTA', 'S');
define('NFE_ISS_CODIGO_TRIBUTACAO_ISENTA', 'I');

class PHPLeituraNFeInfNFeDetImpostoISS {
    public $vBC=null;
    public $vAliq=null;
    public $vISSQN=null;
    public $cMunFG=null;
    public $cListServ=null;
    public $cSitTrib=null;
    
    public function __construct($dom) {
        
    }
}