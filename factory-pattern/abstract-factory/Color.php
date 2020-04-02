<?php
/**
 * User: Nhut Le
 * Date: 04/02/20
 * Time: 16:15
 */

namespace AbstractMethod;

interface Color
{
    const RED   = 'red';
    const BLUE  = 'blue';
    const GREEN = 'green';

    public function fill();
}