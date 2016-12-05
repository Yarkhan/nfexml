<?php

namespace Yarkhan\NFeXML;

class Node{
    
    protected $el;
    protected $children = [];
    protected $nodeName = 'Node';
    function __construct(){
        $this->el = new \SimpleXMLElement("<{$this->nodeName}/>");
    }
    public function __set($prop,$val){
        if(method_exists($this,"set_$prop")){
            return $this->{"set_$prop"}($val);
        }
        throw new \Exception("Property $prop does not exist");
    }
    public function __get($prop){
        if(method_exists($this,"get_$prop")){
            return $this->{"get_$prop"}();
        }
        if(!empty($this->el->$prop)){
            return $this->el->$prop;
        }
        if(isset($this->children[$prop])){
            
            return $this->children[$prop];
        }
    }
    public function addChild(Node $child){
        $this->children[$child->nodeName]= $child;
    }

    public function removeChild($name){
        unset($this->children[$name]);
    }
    public function getSXML(){

        $el = new \SimpleXMLElement($this->el->asXML());
        // $el = $this->el;
        foreach($this->children as $name => $child){
            $toDom = dom_import_simplexml($el);
            $fromDom = dom_import_simplexml($child->getSXML());
            $toDom->appendChild($toDom->ownerDocument->importNode($fromDom, true));
        }
        return $el;
    }
    public function asXML(){
        return $this->getSXML()->asXML();
    }
}