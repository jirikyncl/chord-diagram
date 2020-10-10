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

echo $svgGenerator->renderSvg($chords[0]) . '<br>';

$svgGenerator->setSize(200);
$svgGenerator->setBackgroundColor('yellow');
echo $svgGenerator->renderSvg($chords[1]) . '<br>';

$svgGenerator->setSize(500);
$svgGenerator->setBackgroundColor('pink');
$svgGenerator->setColor('red');
echo $svgGenerator->renderSvg($chords[2]) . '<br>';
