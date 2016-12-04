<?php
namespace Yarkhan\NFeXML\NFe\InfNFe;
use Yarkhan\NFeXML\Node;
class Ide extends Node{
    protected $nodeName = 'ide';
    
    protected function set_cUF($val){
        $this->el->cUF = (int)$val;
    }
    protected function get_cUF(){
        return (int) $this->el->cUF;
    }

    protected function set_cNF($val){
        $this->el->cNF = (int)$val;
    }
    protected function get_cNF(){
        return (int) $this->el->cNF;
    }

    protected function set_natOpe($val){
        $this->el->natOpe = $val;
    }
    protected function get_natOpe(){
        return (string) $this->el->natOpe;
    }

    protected function set_indPag($val){
        $this->el->indPag = (int) $val;
    } 
    protected function get_indPag(){
        return (int) $this->el->indPag;
    }

    protected function set_mod($val){
        $this->el->mod = (int) $val;
    }
    protected function get_mod(){
        return (int) $this->el->mod;
    }

    protected function set_serie($val){
        $this->el->serie = (int) $val;
    }
    protected function get_serie(){
        return (int) $this->el->serie;
    }

    protected function set_nNF($val){
        $this->el->nNF = (int) $val;
    }
    protected function get_nNF(){
        return (int) $this->el->nNF;
    }
    
    protected function set_dhEmi($val){
        $this->el->dhEmi = (string) $val;
    }
    protected function get_dhEmi(){
        return (string) $this->el->dhEmi;
    }

    protected function set_dhSaiEnt($val){
        $this->el->dhSaiEnt = (string) $val;
    }
    protected function get_dhSaiEnt(){
        return (string) $this->el->dhSaiEnt;
    }

    protected function set_tpNF($val){
        $this->el->tpNF = (string) $val;
    }
    protected function get_tpNF(){
        return (string) $this->el->tpNF;
    }

    protected function set_idDest($val){
        $this->el->idDest = (int) $val;
    }
    protected function get_idDest(){
        return (int) $this->el->idDest;
    }

    protected function set_cMunFG($val){
        $this->el->cMunFG = (int) $val;
    }
    protected function get_cMunFG(){
        return (int) $this->el->cMunFG;
    }

    protected function set_tpImp($val){
        $this->el->tpImp = (int) $val;
    }
    protected function get_tpImp(){
        return (int) $this->el->tpImp;
    }

    protected function set_tpEmis($val){
        $this->el->tpEmis = (int) $val;
    }
    protected function get_tpEmis(){
        return (int) $this->el->tpEmis;
    }

    protected function set_cDV($val){
        $this->el->cDV = (int) $val;
    }
    protected function get_cDV(){
        return (int) $this->el->cDV;
    }

    protected function set_tpAmb($val){
        $this->el->tpAmb = (int) $val;
    }
    protected function get_tpAmb(){
        return (int) $this->el->tpAmb;
    }

    protected function set_finNFe($val){
        $this->el->finNFe = (int) $val;
    }
    protected function get_finNFe(){
        return (int) $this->el->finNFe;
    }

    protected function set_indFinal($val){
        $this->el->indFinal = (int) $val;
    }
    protected function get_indFinal(){
        return (int) $this->el->indFinal;
    }

    protected function set_indPres($val){
        $this->el->indPres = (int) $val;
    }
    protected function get_indPres(){
        return (int) $this->el->indPres;
    }

    protected function set_procEmi($val){
        $this->el->procEmi = (int) $val;
    }
    protected function get_procEmi(){
        return (int) $this->el->procEmi;
    }

    protected function set_verProc($val){
        $this->el->verProc = (int) $val;
    }
    protected function get_verProc(){
        return (int) $this->el->verProc;
    }

    protected function set_dhCont($val){
        $this->el->dhCont = (string) $val;
    }
    protected function get_dhCont(){
        return (string) $this->el->dhCont;
    }

    protected function set_xJust($val){
        $this->el->xJust = (string) $val;
    }
    protected function get_xJust(){
        return (string) $this->el->xJust;
    }
}