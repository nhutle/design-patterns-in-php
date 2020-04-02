<?php
/**
 * User: Nhut Le
 * Date: 04/02/20
 * Time: 22:10
 */

namespace ObserverPattern;

class Logger implements Observer
{
    public function update(Account $account)
    {
        $state = $account->getState();
        $data  = $account->getData();

        if ($state == Account::LOGIN_SUCCESS) {
            echo  "User {$data['email']} has been online\n";
        }
    }
}