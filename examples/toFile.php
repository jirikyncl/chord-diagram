<?php


use ChordDiagram\SvgGenerator;


require_once '../vendor/autoload.php';
require_once '../src/SvgGenerator.php';


$chords = [
    [["o","x","","o","","",""],["","","","","1","",""],["","","","3","","",""],["","","","","","","IV"],["","5","","","","",""],["","","","","","",""]],
    [["","","","x","","",""],["","","","","","",""],["","","4","","5","",""],["","","","","","","III"],["","","","","","",""],["","","","","","",""]],
    [["","","","x","","o",""],["","","","","1","",""],["","","2","","","",""],["","","","3","","","V"],["","","","","","",""],["","","","","","","VII"]]
];

$svgGenerator = new SvgGenerator();

$chord1 = $svgGenerator->renderSvg($chords[0]);

$svgGenerator->setSize(200);
$svgGenerator->setBackgroundColor('yellow');
$chord2 = $svgGenerator->renderSvg($chords[1]);

$svgGenerator->setSize(500);
$svgGenerator->setBackgroundColor('pink');
$svgGenerator->setColor('red');
$chord3 = $svgGenerator->renderSvg($chords[2]);

file_put_contents('chord1.svg', $chord1);
file_put_contents('chord2.svg', $chord2);
file_put_contents('chord3.svg', $chord3);
