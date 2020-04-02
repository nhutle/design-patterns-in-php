<?php
/**
 * User: Nhut Le
 * Date: 04/02/20
 * Time: 22:59
 */

class Product
{
    private $id;
    private $count;

    public function __construct($id, $count)
    {
        $this->id    = $id;
        $this->count = $count;
    }

    public function find($id) {
        if ($this->id == $id) {
            return new Product(2, 3);
        }

        return false;
    }

    public function count() {
        return $this->count;
    }
}