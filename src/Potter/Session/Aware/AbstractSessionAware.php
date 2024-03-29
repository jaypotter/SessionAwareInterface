<?php

namespace Potter\Session\Aware;

use \Potter\Session\SessionInterface;

abstract class AbstractSessionAware implements SessionAwareInterface
{
    abstract public function getSession(): SessionInterface;
}