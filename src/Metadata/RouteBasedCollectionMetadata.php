<?php

namespace Hal\Metadata;

class RouteBasedCollectionMetadata extends AbstractCollectionMetadata
{
    /** @var string */
    private $route;

    /** @var array */
    private $routeParams;

    /** @var array */
    private $queryStringArguments;

    public function __construct(
        string $class,
        string $collectionRelation,
        string $route,
        string $paginationParam = 'page',
        string $paginationParamType = self::TYPE_QUERY,
        array $routeParams = [],
        array $queryStringArguments = []
    ) {
        $this->class = $class;
        $this->collectionRelation = $collectionRelation;
        $this->route = $route;
        $this->paginationParam = $paginationParam;
        $this->paginationParamType = $paginationParamType;
        $this->routeParams = $routeParams;
        $this->queryStringArguments = $queryStringArguments;
    }

    public function getRoute() : string
    {
        return $this->route;
    }

    public function getRouteParams() : array
    {
        return $this->routeParams;
    }

    public function getQueryStringArguments() : array
    {
        return $this->queryStringArguments;
    }
}