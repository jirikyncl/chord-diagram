<?php

namespace ChordDiagram;

class SvgGenerator
{
    /** @var int $size */
    private $size;

    /** @var string $color */
    private $color;

    /** @var string $backgroundColor */
    private $backgroundColor;

    /** @var Latte\Engine $latteEngine */
    private $latteEngine;

    /**
     * Constructor
     * @var int $size
     * @var string $color
     * @var string $backgroundColor
     */
    public function __construct(
        int $size = 400,
        string $color = 'black',
        string $backgroundColor = '#ffffff'
    ) {
        $this->size = $size;
        $this->color = $color;
        $this->backgroundColor = $backgroundColor;
        $this->latteEngine = new \Latte\Engine;
    }

    /**
     * Create chord SVG
     * @var array $chord
     * @return string
     */
    public function renderSvg(array $chord) : string
    {
        return $this->latteEngine->renderToString(
            __DIR__ . '/svgTemplate.latte',
            [
                'size' => $this->size,
                'color' => $this->color,
                'backgroundColor' => $this->backgroundColor,
                'chord' => $chord
            ]
        );
    }

    /**
     * Size setter
     * @var int $size
     */
    public function setSize(int $size) : void
    {
        $this->size = $size;
    }

    /**
     * Color setter
     * @var string $color
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

    /**
     * Background color setter
     * @var string $backgroundColor
     */
    public function setBackgroundColor(string $backgroundColor) : void
    {
        $this->backgroundColor = $backgroundColor;
    }
}