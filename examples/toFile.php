<?php


use ChordDiagram\SvgGenerator;


require_once '../vendor/autoload.php';
require_once '../src/SvgGenerator.php';


$chords = [
    [["x","","","o","","x",""],["","","","","1","",""],["","","2","","","",""],["","3","","","","",""],["","","","","","",""],["","","","","","",""]],
    [["","","o","o","o","",""],["","","","","","",""],["","1","","","","",""],["2","","","","","3",""],["","","","","","",""],["","","","","","",""]],
];

$svgGenerator = new SvgGenerator();
$svgGenerator->setSize(600);

$chord1 = $svgGenerator->renderSvg($chords[0]);

$svgGenerator->setSize(200);
$svgGenerator->setBackgroundColor('yellow');
$svgGenerator->setColor('red');
$chord2 = $svgGenerator->renderSvg($chords[1]);

file_put_contents('chord1.svg', $chord1);
file_put_contents('chord2.svg', $chord2);
