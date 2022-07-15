<?php

namespace Invenso\Microsoft\JWT\AzureAd;

use Invenso\Microsoft\JWT\Base\MicrosoftIdTokenJWT;

class AzureAdIdTokenJWT extends MicrosoftIdTokenJWT
{
    protected function getDefaultAudience()
    {
        return $this->getConfiguration()->getClientId();
    }
}