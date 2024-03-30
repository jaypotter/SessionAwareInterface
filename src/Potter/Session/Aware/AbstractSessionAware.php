<?php

declare(strict_types=1);

namespace Potter\Session\Aware;

use \Potter\Session\SessionInterface;

abstract class AbstractSessionAware implements SessionAwareInterface
{
    abstract public function getSession(): SessionInterface;
    abstract public function hasSession(): bool;
    abstract protected function setSession(SessionInterface $session): void;
    abstract public function startSession(): void;
}