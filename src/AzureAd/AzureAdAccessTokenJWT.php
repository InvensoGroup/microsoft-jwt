<?php

namespace Invenso\Microsoft\JWT\AzureAd;

use Invenso\Microsoft\JWT\Base\MicrosoftAccessTokenJWT;

class AzureAdAccessTokenJWT extends MicrosoftAccessTokenJWT
{
    protected function getDefaultAudience()
    {
        return '00000003-0000-0000-c000-000000000000';
    }
}