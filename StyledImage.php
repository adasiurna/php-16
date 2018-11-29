<?php

class StyledImage
{
    protected $url; 
    protected $width = 400;
    protected $height = 200;

    public function __construct(string $url = 'https://wonderfulengineering.com/wp-content/uploads/2016/01/Desktop-Wallpaper-4.jpg')
    {
        $this->url = $url;
    } 

    public function outputImg(): void
    {
        echo '<img alt="image" src="'.$this->url.'" height="'.$this->height.'" width="'.$this->width.'" style=" object-fit: cover">';
    }

    public function changeWidth(int $width): void
    {
        $this->width = $width; 
    }

    public function changeHeight(int $height): void
    {
        $this->height = $height; 
    }

}