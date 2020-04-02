<?php
/**
 * User: Nhut Le
 * Date: 04/02/20
 * Time: 21:54
 */

namespace ObserverPattern;

interface Subject
{
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}