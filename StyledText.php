<?php

class StyledText
{
    protected $text;  //jei tai yra protected tai veikia tik su THIS
    protected $color = 'red';
    protected $size = 14;
    protected $tag = 'div';

    public function getParagraph(): string
    {
        return $this->text = "<p>".$this->text."</p>";
    }

    public function getHeader(int $level): string
    {
        return $this->text = "<h$level>$this->text</h$level>";
    }

    public function setTag(string $tag): void
    {
        $this->tag = $tag;
    }

    public function __construct(string $text = 'My paragraph')
    {
        $this->text = $text;
    }

    public function __toString(): string
    {
        return '<div style="color:' . $this->color . '; font-size:' . $this->size . 'px"  > ' . $this->text . ' </div>';
    }


    public function output(): void
    {
        echo '<'.$this->tag.' style="color:' . $this->color . '; font-size:' . $this->size . 'px"  > ' . $this->text . ' </'.$this->tag.'>';
    }
    public function changeColor(string $color): void
    {
        if ($color == 'white') {
            return;
        }
        $this->color = $color;
    }
    public function changeSize(string $size): void
    {
        if ($size > 32 || $size < 8) {
            return;
        }
        $this->size = $size;
    }
}
