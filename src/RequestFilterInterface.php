<?php

namespace Aurora\Http\Message\Filter;

use Psr\Http\Message\RequestInterface;

interface RequestFilterInterface extends FilterInterface
{
    /**
     * Process an incoming request.
     *
     * @param RequestInterface $request
     * @return RequestInterface
     */
    public function processRequest(RequestInterface $request): RequestInterface;
}