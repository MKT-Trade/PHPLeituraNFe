<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFe.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFe.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeRetirada.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeEntrega.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeDest.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeDestEnderDest.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeDet.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeDetImposto.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeDetImpostoCOFINS.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeDetImpostoICMS.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeDetImpostoII.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeDetImpostoIPI.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeDetImpostoIPITrib.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeDetImpostoISS.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeDetImpostoPIS.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeDetProd.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeEmit.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeEmitEnderEmit.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeIde.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeTotal.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeTotalICMSTot.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeInfAdic.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeTransp.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeTranspReboque.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeTranspRetTransp.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeTranspTransporta.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeTranspVeiculo.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeTranspVolume.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPLeituraNFeInfNFeTranspVolumeLacres.php';

define('NFE_DEBUG', false);

class PHPLeituraNFe {
    public $versao=2;
    public $Chave=null;
    public $XMLDom=null;
    public $stringXML=null;
    public $stringTXT=null;
    public $infNFe=null;
    
    public function loadXML($file){
        $dom = new DOMDocument(1, 'UTF-8');
        $dom->formatOutput = false;
        if ($dom->load($file)){
            foreach ($dom->childNodes as $NFe){
                if ($NFe->nodeName=='NFe'){
                    $infNFe = new PHPLeituraNFeInfNFe($NFe);
                    $this->infNFe = (array)$infNFe;
                } elseif ($NFe->nodeName=='nfeProc'){
                    foreach ($NFe->childNodes as $NFeProc){
                        if ($NFeProc->nodeName=='NFe'){
                            $infNFe = new PHPLeituraNFeInfNFe($NFeProc);
                            $this->infNFe = (array)$infNFe;
                        }
                    }
                }
            }
        } else {
            throw new Exception( __CLASS__ .': XML n�o pode ser lido, verifique se o arquivo existe e se h� permiss�o para leitura', 1);
        }
    }
}