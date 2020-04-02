<?php
/**
 * User: Nhut Le
 * Date: 04/02/20
 * Time: 16:23
 */

namespace AbstractMethod;

class ColorFactory extends AbstractFactory
{
    public function getShape($shape)
    {
        // TODO: Implement getShape() method.
    }

    public function getColor($color)
    {
        switch (strtolower($color)) {
            case Color::RED:
                return new Red();
                break;
            case 'blue':
                return new Blue();
                break;
            case 'green':
                return new Green();
                break;
            default:
                return null;
                break;
        }
    }
}