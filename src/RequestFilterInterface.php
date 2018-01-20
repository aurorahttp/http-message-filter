<?php

namespace Aurora\Http\Message\Filter;

use Psr\Http\Message\RequestInterface;

interface RequestFilterInterface
{
    /**
     * Process an incoming request.
     *
     * @param RequestInterface $request
     * @return RequestInterface
     */
    public function process(RequestInterface $request): RequestInterface;
}