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
        $this->addChild(new InfNFe\Det);
    }
    function getSXML(){
        $det = $this->children['det'];
        unset($this->children['det']);
        foreach($det as $d){
            $this->children[$d->nodeName]=$d;
        }
        return parent::getSXML();

    }
}