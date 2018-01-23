<?php

namespace Aurora\Http\Message\Filter;

use Psr\Http\Message\ServerRequestInterface;

interface ServerRequestFilterInterface extends RequestFilterInterface
{
    /**
     * Process an incoming server request.
     *
     * @param ServerRequestInterface $request
     * @return ServerRequestInterface
     */
    public function processServerRequest(ServerRequestInterface $request): ServerRequestInterface;
}