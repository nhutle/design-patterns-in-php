<?php
/**
 * User: Nhut Le
 * Date: 04/02/20
 * Time: 16:18
 */

namespace AbstractMethod;

class ShapeFactory extends AbstractFactory
{
    public function getShape($type)
    {
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

    public function getColor($color)
    {
        // TODO: Implement getColor() method.
    }
}