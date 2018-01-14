<?php

namespace Panlatent\Http\Server;

use Interop\Http\Server\ResponseHandlerInterface;
use Psr\Http\Message\ResponseInterface;

interface FilterInterface
{
    /**
     * Process an incoming server response and return a response, optionally delegating
     * response creation to a handler.
     *
     * @param ResponseInterface        $response
     * @param ResponseHandlerInterface $handler
     * @return ResponseInterface
     */
    public function process(ResponseInterface $response, ResponseHandlerInterface $handler): ResponseInterface;
}