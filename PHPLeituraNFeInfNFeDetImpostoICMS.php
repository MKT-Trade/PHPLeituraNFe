<?php
define('NFE_ICMS_ORIGEM_NACIONAL', 0);
define('NFE_ICMS_ORIGEM_ESTRANGEIRA', 1);
define('NFE_ICMS_ORIGEM_ESTRANGEIRA_ADQUIRIDA_NO_MERCADO_INTERNO', 2);
define('NFE_ICMS_MODALIDADE_BC_MARGEM_VALOR_AGREGADO', 0);
define('NFE_ICMS_MODALIDADE_BC_PAUTA', 1);
define('NFE_ICMS_MODALIDADE_BC_PRECO_TABELADO', 2);
define('NFE_ICMS_MODALIDADE_BC_VALOR_DA_OPERACAO', 3);
define('NFE_ICMSST_MODALIDADE_BC_PRECO_TABELADO_OU_MAXIMO', 0);
define('NFE_ICMSST_MODALIDADE_BC_LISTA_NEGATIVA', 1);
define('NFE_ICMSST_MODALIDADE_BC_LISTA_POSITIVA', 2);
define('NFE_ICMSST_MODALIDADE_BC_LISTA_NEUTRA', 3);
define('NFE_ICMSST_MODALIDADE_BC_MARGEM_VALOR_AGREGADO', 4);
define('NFE_ICMSST_MODALIDADE_BC_PAUTA', 5);
define('NFE_ICMS_DESONERACAO_TAXI', 1);
define('NFE_ICMS_DESONERACAO_DEFICIENTE_FISICO', 2);
define('NFE_ICMS_DESONERACAO_PRODUTOR_AGROPECUARIO', 3);
define('NFE_ICMS_DESONERACAO_FROTISTA_OU_LOCADORA', 4);
define('NFE_ICMS_DESONERACAO_DIPLOMATICO_OU_CONSULAR', 5);
define('NFE_ICMS_DESONERACAO_UTILITARIOS_OU_MOTOCICLETAS_OU_AREA_LIVRE_COMERCIO', 6);
define('NFE_ICMS_DESONERACAO_SUFRAMA', 7);
define('NFE_ICMS_DESONERACAO_OUTROS', 9);

class PHPLeituraNFeInfNFeDetImpostoICMS {
    public $orig=null;
    public $CST=null;
    public $modBC=null;
    public $vBC=null;
    public $pICMS=null;
    public $vICMS=null;
    public $modBCST=null;
    public $pMVAST=null;
    public $pRedBC=null;
    public $pRedBCST=null;
    public $vBCST=null;
    public $pICMSST=null;
    public $vICMSST=null;
    public $motDesICMS=null;
    public $pBCOP=null;
    public $UFST=null;
    public $vBCSTRet=null;
    public $vICMSSTRet=null;
    public $vBCSTDest=null;
    public $vICMSSTDest=null;
    public $CSOSN=null;
    public $pCredSN=null;
    public $pCredICMSSN=null;
    
    public function __construct($dom) {
        foreach ($dom->childNodes as $Ide){
            foreach ($Ide->childNodes as $ICMS){
                $prop = $ICMS->nodeName;
                if (property_exists('PHPLeituraNFeInfNFeDetImpostoICMS', $prop)){
                    $this->$prop = $ICMS->nodeValue;
                } else {
                    if (NFE_DEBUG) echo __CLASS__ . ": Não existe a propriedade {$prop}<br/>\n";
                }
            }
        }
    }
}