<?php
/**
 * User: Nhut Le
 * Date: 04/02/20
 * Time: 21:57
 */

namespace ObserverPattern;

class Account implements Subject
{
    const LOGIN_SUCCESS = 1;
    const LOGIN_FAIL    = 2;
    const LOGIN_INVALID = 3;
    const EXPIRED       = 4;

    private $state;
    private $storage;
    private $data;

    public function __construct()
    {
        $this->storage = array();
        $this->data    = array();
    }

    public function attach(Observer $observer)
    {
        $isContain = array_search($observer, $this->storage);

        if ($isContain === false) {
            $this->storage[] = $observer;
        }
    }

    public function detach(Observer $observer)
    {
        $key = array_search($observer, $this->storage);

        if ($key !== false) {
            unset($this->storage[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->storage as $observer) {
            $observer->update($this);
        }
    }

    public function login($email, $ip)
    {
        $this->setData([
            'email' => $email,
            'ip'    => $ip
        ]);

        if ($email == 'hack@framgia.com' && $ip == '10.0.0.1') {
            $this->setState(Account::LOGIN_INVALID);
        } else {
            $login = $this->process($email);

            if ($login) {
                $this->setState(Account::LOGIN_SUCCESS);
            } else {
                $this->setState(Account::LOGIN_FAIL);
            }
        }

        $this->notify();
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function process($email)
    {
        if ($email == 'thanhsm93@gmail.com') {
            return true;
        }

        return false;
    }

    public function save()
    {
        $this->notify();
    }
}