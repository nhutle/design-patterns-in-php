<?php
/**
 * User: Nhut Le
 * Date: 04/02/20
 * Time: 22:17
 */

namespace ObserverPattern;

require __DIR__ . '/../vendor/autoload.php';

$account  = new Account();
$logger   = new Logger();
$mailer   = new Mailer();
$security = new Security();

$account->attach($logger);
$account->attach($mailer);
$account->attach($security);

$account->login('thanhsm93@gmail.com', '192.168.0.1');

$account->setState(Account::EXPIRED);
$account->save();

$account->login('hack@framgia.com', '10.0.0.1');

$account->detach($security);
$account->login('hack@framgia.com', '10.0.0.1');