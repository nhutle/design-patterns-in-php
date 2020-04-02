<?php

namespace AbstractMethod;

include "autoload.php";

$shapeFactory = FactoryProducer::getFactory('shape');
$shape = $shapeFactory->getShape(Shape::CIRCLE);
$shape->draw();

$colorFactory = FactoryProducer::getFactory('color');
$color= $colorFactory->getColor(Color::RED);
$color->fill();