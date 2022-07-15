<?php

namespace Invenso\Microsoft\JWT\Adfs;

use Invenso\Microsoft\JWT\Base\MicrosoftIdTokenJWT;

class AdfsIdTokenJWT extends MicrosoftIdTokenJWT
{
    protected function getDefaultAudience()
    {
        return $this->getConfiguration()->getClientId();
    }
}