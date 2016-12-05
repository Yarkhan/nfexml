<?php
namespace Yarkhan\NFeXML;
require(dirname(__DIR__).'/vendor/autoload.php');

$nfe = new NFe;

// $ide = $nfe->infNFe->sd;
// $ide->cUF = 53;
// $ide->cNF = 201546;
// $ide->natOpe = 'Prestação de Serviços';
// $ide->indPag = 1;
// $ide->mod = 55;
// $ide->serie = 1;
// $ide->nNF = 4654;
// $ide->dhEmi = '2016/5416/654';
// $ide->dhSaiEnt = '654/684/584654';
// $ide->tpNF = 1;
// $ide->idDest = 1;
// $ide->cMunFG = 533012;
// $ide->tpImp = 0;

// $det = new \Yarkhan\NFeXML\NFe\InfNFe\Det;
// $pet = new \Yarkhan\NFeXML\NFe\InfNFe\Det;
// $det[1]->prod = 1;
// $det[3]->prod = 2;
// $det[2]->prod = 2;
// var_dump($nfe->asXML());
$det = $nfe->infNFe->det;
$det[1]->prod = 1;
$det[2]->prod = 1;
// $det->asXML();
var_dump($nfe->getSXML()->asXML());


// var_dump($det);
// $det = $nfe->infNFe->det;
// var_dump($nfe->asXML());