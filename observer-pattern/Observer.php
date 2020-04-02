<?php
/**
 * User: Nhut Le
 * Date: 04/02/20
 * Time: 21:54
 */

namespace ObserverPattern;

interface Observer
{
    public function update(Account $account);
}