<?php

declare(strict_types=1);

namespace Potter\Session\Aware;

use \Potter\Session\SessionInterface;

interface SessionAwareInterface 
{
    public function getSession(): SessionInterface;
}