<?php
/**
 * User: Nhut Le
 * Date: 04/02/20
 * Time: 16:02
 */

namespace AbstractMethod;

interface Shape
{
    const SQUARE    =1;
    const CIRCLE    = 2;
    const RECTANGLE = 3;

    public function draw();
}