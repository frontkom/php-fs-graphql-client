<?php

namespace Frontkom\GraphqlClient;

class Client
{
    public function __construct($endpoint, $token)
    {
        $this->endpoint = $endpoint;
        $this->token = $token;
    }

    public function getPrograms($query)
    {

    }
}
