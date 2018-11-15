<?php

class StyledImage
{
    protected $url;  //jei tai yra protected tai veikia tik su THIS
    protected $width = 400;
    protected $height = 200;

public function __construct(string $url = 'https://wonderfulengineering.com/wp-content/uploads/2016/01/Desktop-Wallpaper-4.jpg')
{
    $this->url = $url;
} //konstruktorius yra funkcija. ji kviečiama kiekvieną kartą kai sukuriamas objektas.

public function outputImg(): void
{
    echo '<img src="'.$this->url.'" height="'.$this->height.'" width="'.$this->width.'" style=" object-fit: cover">';
}

public function changeWidth(int $width): void
{
    $this->width = $width; //objektiniame programavime yra įprasta keisti spalvą štai tokių funkcijyčių pagalba.
}

public function changeHeight(int $height): void
{
    $this->height = $height; //objektiniame programavime yra įprasta keisti spalvą štai tokių funkcijyčių pagalba.
}



}