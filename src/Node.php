<?php

namespace Yarkhan\NFeXML;

class Node{
    
    protected $el;
    protected $children = [];
    function __construct($node){
        $this->el = new \SimpleXMLElement("<$node/>");
    }
    function __set($prop,$val){
        if(method_exists($this,"set_$prop")){
            return $this->{"set_$prop"}($val);
        }
        throw new \Exception("Property $prop does not exist");
    }
    public function getName(){
        return $this->el->getName();
    }
    function __get($prop){
        if(method_exists($this,"get_$prop")){
            return $this->{"get_$prop"}();
        }
        if(!empty($this->el->$prop)){
            var_dump(empty($this->el->$prop));
            return $this->el->$prop;
        }
        if(isset($this->children[$prop])){
            
            return $this->children[$prop];
        }
    }
    function addChild(Node $child){
        $this->children[$child->getName()]= $child;
    }

    function removeChild($name){
        unset($this->children[$name]);
    }
    public function getSXML(){

        $el = $this->el;

        foreach($this->children as $name => $child){
            $toDom = dom_import_simplexml($el);
            $fromDom = dom_import_simplexml($child->getSXML());
            $toDom->appendChild($toDom->ownerDocument->importNode($fromDom, true));
        }
        return $el;
    }
}