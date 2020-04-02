<?php
/**
 * User: Nhut Le
 * Date: 04/02/20
 * Time: 16:30
 */

namespace AbstractMethod;

class FactoryProducer
{
    public static function getFactory($choice)
    {
        $choice = strtolower($choice);

        if ($choice == 'shape') {
            return new ShapeFactory;
        } elseif ($choice == 'color') {
            return new ColorFactory;
        } else {
            return null;
        }
    }
}

