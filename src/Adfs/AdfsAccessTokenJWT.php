<?php

namespace Invenso\Microsoft\JWT\Adfs;

use Invenso\Microsoft\JWT\Base\MicrosoftAccessTokenJWT;

class AdfsAccessTokenJWT extends MicrosoftAccessTokenJWT
{
    protected function getDefaultAudience()
    {
        return 'urn:microsoft:userinfo';
    }
}