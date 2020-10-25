<?php


use ChordDiagram\SvgGenerator;


require_once '../vendor/autoload.php';
require_once '../src/SvgGenerator.php';


$chords = [
    [["x","","","o","","x",""],["","","","","1","",""],["","","2","","","",""],["","3","","","","",""],["","","","","","",""],["","","","","","",""]],
    [["","","o","o","o","",""],["","","","","","",""],["","1","","","","",""],["2","","","","","3",""],["","","","","","",""],["","","","","","",""]],
];

$svgGenerator = new SvgGenerator();

echo $svgGenerator->renderSvg($chords[0]) . '<br>';

$svgGenerator->setSize(200);
$svgGenerator->setBackgroundColor('yellow');
$svgGenerator->setColor('red');
echo $svgGenerator->renderSvg($chords[1]) . '<br>';
