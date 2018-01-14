<?php

namespace Panlatent\Http\Server;

use Psr\Http\Message\ResponseInterface;

interface ResponseFilterInterface extends FilterInterface
{
    /**
     * Process an incoming server response.
     *
     * @param ResponseInterface        $response
     * @return ResponseInterface
     */
    public function process(ResponseInterface $response): ResponseInterface;
}