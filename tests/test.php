<?php
namespace Yarkhan\NFeXML;
require(dirname(__DIR__).'/vendor/autoload.php');

// use Yarkhan\NFeXML\Node;

class NFe extends Node{
    function __construct(){
        parent::__construct('NFe');
        $this->el->addAttribute('xmlns',"http://www.portalfiscal.inf.br/nfe");
        $this->el->addAttribute('version',"1.0");
        $this->el->addAttribute('encoding',"utf-8");
    }
}

class infNFe extends Node{
    function __construct(){
        parent::__construct('infNFe');
        $this->el->addAttribute('versao','3.0');
    }
}

$nfe = new NFe;