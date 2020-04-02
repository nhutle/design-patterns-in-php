<?php
/**
 * User: Nhut Le
 * Date: 04/02/20
 * Time: 22:13
 */

namespace ObserverPattern;

class Mailer implements Observer
{
    public function update(Account $account) {
        $state = $account->getState();
        $data  = $account->getData();

        if ($state == Account::EXPIRED) {
            //Email::send($data['email'], "Your account has expired");
            echo "Account {$data['email']} has expired. Email sent!\n";
        }
    }
}