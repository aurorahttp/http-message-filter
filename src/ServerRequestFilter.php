<?php

namespace Aurora\Http\Message\Filter;

use Psr\Http\Message\RequestInterface;

abstract class ServerRequestFilter extends RequestFilter implements ServerRequestFilterInterface
{
    final public function processRequest(RequestInterface $request): RequestInterface
    {
        return parent::processRequest($request);
    }
}