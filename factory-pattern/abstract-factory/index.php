<?php

namespace AbstractMethod;

require __DIR__ . '/../../vendor/autoload.php';

$shapeFactory = FactoryProducer::getFactory('shape');
$shape = $shapeFactory->getShape(Shape::CIRCLE);
$shape->draw();

$colorFactory = FactoryProducer::getFactory('color');
$color= $colorFactory->getColor(Color::RED);
$color->fill();