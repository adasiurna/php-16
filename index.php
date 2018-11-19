<?php
require_once 'StyledText.php';
require_once 'StyledImage.php';

$heading = new StyledText('Hello world');
$heading->changeColor('yellowgreen');
$heading->setTag('h1');
$heading->changeSize(32);

$heading->output();

$heading2 = new StyledText("Naujienos");
$heading2->setTag('h2');
$heading2->output();

$subHeading = new StyledText('This is a subheading');
$subHeading->changeColor('steelblue');
$subHeading->getHeader(3);
$subHeading->output();

$img = new StyledImage();
$img->outputImg();

$paragraph = new StyledText('This is a paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce viverra neque odio, vel finibus ipsum commodo quis. Ut auctor, mauris sed ullamcorper tincidunt, tortor massa laoreet dolor, eu sodales erat turpis eget diam. Fusce vel erat ornare, dapibus libero id, dignissim est. In eget lobortis odio. Integer convallis condimentum sollicitudin. Praesent eget velit in nibh faucibus venenatis.');
$paragraph->changeColor('darkolivegreen');
$paragraph->setTag('p');
$paragraph->output();

$paragraph2 = new StyledText('This i second paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce viverra neque odio, vel finibus ipsum commodo quis. Ut auctor, mauris sed ullamcorper tincidunt, tortor massa laoreet dolor, eu sodales erat turpis eget diam.');

$paragraph2->changeColor("firebrick");
$paragraph2->getParagraph();
$paragraph2->output();

$img2 = new StyledImage('https://i.pinimg.com/originals/d5/7c/d6/d57cd6832d7bb233ddf285bed243a4ee.jpg');
$img2->changeWidth(180);
$img2->changeHeight(100);
$img2->outputImg();

$img3 = new StyledImage('http://fungyung.com/data/out/24/63716216-climbing-wallpapers.jpg');
$img3->changeWidth(160);
$img3->changeHeight(100);
$img3->outputImg();

$img4 = new StyledImage('http://fungyung.com/data/out/24/63990198-climbing-wallpapers.jpg');
$img4->changeWidth(140);
$img4->changeHeight(100);
$img4->outputImg();

$img5 = new StyledImage('https://www.shape.com/sites/shape.com/files/rock-climbing.jpg');
$img5->changeWidth(120);
$img5->changeHeight(100);
$img5->outputImg();