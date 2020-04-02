<?php

require("Shape.php");
require("Circle.php");
require("Rectangle.php");
require("Square.php");

class ShapeFactory
{
    public function getShape($type) {
        switch ($type) {
            case Shape::SQUARE:
                return new Square;
                break;
            case Shape::CIRCLE:
                return new Circle;
                break;
            case Shape::RECTANGLE:
                return new Rectangle;
                break;
            default:
                return null;
                break;
        }
    }
}

$factory     = new ShapeFactory();
$shapeCircle = $factory->getShape(Shape::CIRCLE);
$shapeCircle->draw();