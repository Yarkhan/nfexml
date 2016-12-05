<?php
namespace Yarkhan\NFeXML\NFe\InfNFe;
use Yarkhan\NFeXML\Node;
use ArrayAccess;
use Iterator;

class Det extends Node implements ArrayAccess, Iterator{
    protected $nodeName = 'det';
    protected $siblings = [];
    private $position = 0;

    public function __construct($nItem=0){
        parent::__construct();
        $nItem and $this->el->addAttribute("nItem",$nItem);
    }
    protected function set_prod($val){
        $this->el->prod = (int) $val;
    }
    protected function get_prod(){
        return (int) $this->el->prod;
    }
    public function getSXML(){
        $sibling_sxmls = [];
        foreach($this->siblings as $sibling){
            $sxml = $sibling->getSXML();
            if(!$sxml or empty($sxml->attributes())) continue;
            if(!empty($sxml)) $sibling_sxmls[]=$sxml;
        }
        if(!empty($sibling_sxmls)){
            $el = new \SimpleXMLElement($this->el->asXML());
            $toDom = dom_import_simplexml($el);
            foreach($sibling_sxmls as $sibling){
                if(empty($sibling)) continue;
                $fromDom = dom_import_simplexml($sibling);
                $toDom->ownerDocument->appendChild($toDom->ownerDocument->importNode($fromDom, true));
            }
            return $el;
        }
        return parent::getSXML();
    }
    public function offsetExists($key){
        return isset($this->siblings[$key]);
    }
    public function offsetGet($key){
        if(!is_int($key)){
            throw new \Exception('Chaves dos itens devem ser numéricos');
        }
        !isset($this->siblings[$key]) and $this->siblings[$key] = new $this($key);
        return $this->siblings[$key];
    }
    public function offsetSet($key,$val){
        $this->siblings[$key] = $val;
    }
    public function offsetUnset($key){
        unset($this->siblings[$key]);
    }

    public function rewind() {
        $this->position = 0;
    }

    public function current() {
        return $this->siblings[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        ++$this->position;
    }

    public function valid() {
        return isset($this->siblings[$this->position]);
    }
}