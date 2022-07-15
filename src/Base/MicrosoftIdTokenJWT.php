<?php

namespace Invenso\Microsoft\JWT\Base;

abstract class MicrosoftIdTokenJWT extends MicrosoftJWT
{
    protected function getIssuer()
    {
        return $this->getConfiguration()->getIssuer();
    }

    protected function getAllowedAlgs()
    {
        return $this->getConfiguration()->getIdTokenSigingAlgValuesSupported();
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