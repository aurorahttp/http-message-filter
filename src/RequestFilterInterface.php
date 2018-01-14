<?php

namespace Panlatent\Http\Server;

use Psr\Http\Message\ServerRequestInterface;

interface RequestFilterInterface
{
    /**
     * Process an incoming server request.
     *
     * @param ServerRequestInterface $request
     * @return ServerRequestInterface
     */
    public function process(ServerRequestInterface $request): ServerRequestInterface;
}