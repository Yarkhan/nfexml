## WORK IN PROGRESS
Um jeito super fodástico de gerar o xml de uma NFe, orientada a objetos
com a possibilidade de implementar validação customizada, converter valores 
automaticamente e a porra toda.

```php
<?php
require('../vendor/autoload.php');

use Yarkhan\NFeXML;

$nfe = new NFe;

$ide = $nfe->infNFe->ide;
$ide->cUF = 53;
$ide->cNF = 201546;

$nfe->infNFe->det[0]->prod->vProd = 30;

print($nfe->asXML());

```
