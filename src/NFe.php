<?php
namespace Yarkhan\NFeXML;

class NFe extends Node{
    protected $nodeName = 'NFe';
    function __construct(){
        parent::__construct();
        $this->el->addAttribute('xmlns',"http://www.portalfiscal.inf.br/nfe");
        $this->el->addAttribute('version',"1.0");
        $this->el->addAttribute('encoding',"utf-8");
        $this->addChild(new NFe\InfNFe);
    }
    public function asXML(){
        $xml = $this->getSXML()->asXML();
        return preg_replace("/\n/",'',$xml);
    }
}