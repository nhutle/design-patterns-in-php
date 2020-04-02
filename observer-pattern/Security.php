<?php
/**
 * User: Nhut Le
 * Date: 04/02/20
 * Time: 22:16
 */

namespace ObserverPattern;

class Security implements Observer
{
    public function update(Account $account)
    {
        $state = $account->getState();
        $data  = $account->getData();

        /*$account->setState(Account::EXPIRED);
        $state = $account->getState();*/

        if ($state == Account::LOGIN_INVALID) {
            echo "Account {$data['email']} with ip {$data['ip']} are trying to hack our system\n";
        }
    }
}