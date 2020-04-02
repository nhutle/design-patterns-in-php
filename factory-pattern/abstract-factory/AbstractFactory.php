<?php
/**
 * User: Nhut Le
 * Date: 04/02/20
 * Time: 16:16
 */

namespace AbstractMethod;

abstract class AbstractFactory
{
    abstract public function getColor($color);
    abstract public function getShape($shape) ;
}