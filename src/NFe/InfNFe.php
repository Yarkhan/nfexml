<?php
namespace Yarkhan\NFeXML\NFe;
use Yarkhan\NFeXML\Node;

class InfNFe extends Node{
    private $ide;
    protected $nodeName = 'infNFe';

    function __construct(){
        parent::__construct();
        $this->el->addAttribute('versao','3.0');
        $this->addChild(new InfNFe\Ide);
    }
}