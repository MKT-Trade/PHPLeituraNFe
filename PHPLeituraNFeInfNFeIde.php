<?php
define('NFE_IDENTIFICADOR_FORMA_PAGAMENTO_A_VISTA', 0);
define('NFE_IDENTIFICADOR_FORMA_PAGAMENTO_A_PRAZO', 1);
define('NFE_IDENTIFICADOR_FORMA_PAGAMENTO_OUTROS', 2);
define('NFE_IDENTIFICADOR_TIPO_OPERACAO_ENTRADA', 0);
define('NFE_IDENTIFICADOR_TIPO_OPERACAO_SAIDA', 1);
define('NFE_IDENTIFICADOR_FORMATO_IMPRESSAO_RETRATO', 1);
define('NFE_IDENTIFICADOR_FORMATO_IMPRESSAO_PAISAGEM', 2);
define('NFE_IDENTIFICADOR_FORMA_EMISSAO_NORMAL', 1);
define('NFE_IDENTIFICADOR_FORMA_EMISSAO_CONTINGENCIA', 2);
define('NFE_IDENTIFICADOR_AMBIENTE_PRODUCAO', 1);
define('NFE_IDENTIFICADOR_AMBIENTE_HOMOLOGACAO', 2);
define('NFE_IDENTIFICADOR_FINALIDADE_NFE_NORMAL', 1);
define('NFE_IDENTIFICADOR_FINALIDADE_NFE_COMPLEMENTAR', 2);
define('NFE_IDENTIFICADOR_FINALIDADE_NFE_AJUSTE', 3);
define('NFE_EMISSAO_NORMAL', 1);
define('NFE_EMISSAO_CONTINGENCIA_FS', 2);
define('NFE_EMISSAO_CONTINGENCIA_SCAN', 3);
define('NFE_EMISSAO_CONTINGENCIA_DPEC', 4);
define('NFE_EMISSAO_CONTINGENCIA_FS_DA', 5);


class PHPLeituraNFeInfNFeIde {
    public $cUF=null;
    public $cNF=null;
    public $natOp=null;
    public $indPag=0;
    public $mod=55;
    public $serie=1;
    public $nNF=null;
    public $dEmi=null;
    public $dSaiEnt=null;
    public $hSaiEnt=null;
    public $tpNF=1;
    public $cMunFG=null;
    public $tpImp=null;
    public $tpEmis=null;
    public $cDV=null;
    public $tpAmb=null;
    public $finNFe=1;
    public $procEmi=0;
    public $verProc=null;
    public $dhCont=null;
    public $xJust=null;
    public $DestIOB=null;
    public $CondEspIOB=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $Ide){
            $prop = $Ide->nodeName;
            if (property_exists('PHPLeituraNFeInfNFeIde', $prop)){
                $this->$prop = $Ide->nodeValue;
            } else {
                if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
            }
        }
    }
    
}