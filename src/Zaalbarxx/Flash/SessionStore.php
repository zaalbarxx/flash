<?php

namespace Zaalbarxx\Flash;


interface SessionStore {
    public function flash($name, $data);
} 