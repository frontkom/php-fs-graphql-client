<?php

namespace Frontkom\GraphqlClient;

use GraphQL\Query as GraphQLQuery;

class Query extends GraphQLQuery
{
    public function getName() : string
    {
        return $this->fieldName;
    }

    public function getArguments() : array
    {
        return $this->arguments;
    }
}
