<?php

namespace Zaalbarxx\Flash;

use Illuminate\Session\Store;

class LaravelSessionStore implements SessionStore{

    function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function flash($name, $data)
    {
        $this->session->flash($name, $data);
    }
}