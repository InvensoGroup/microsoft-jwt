<?php

namespace Invenso\Microsoft\JWT\Base;

abstract class MicrosoftAccessTokenJWT extends MicrosoftJWT
{
    protected function getIssuer()
    {
        return $this->getConfiguration()->getAccessTokenIssuer();
    }

    protected function getAllowedAlgs()
    {
        return $this->getConfiguration()->getTokenEndpointAuthSigingAlgValuesSupported();
    }

    protected function getDefaultAudience()
    {
        return $this->getConfiguration()->getClientId();
    }

    protected function getTenant()
    {
        return $this->getConfiguration()->getTenant();
    }
}