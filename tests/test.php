<?php
namespace Yarkhan\NFeXML;
require(dirname(__DIR__).'/vendor/autoload.php');

// use Yarkhan\NFeXML\Node;

$nfe = new NFe;
$nfe->infNFe->ide->cUF = 53;
file_put_contents(__DIR__.'/result',$nfe->asXML());