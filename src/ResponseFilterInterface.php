<?php

namespace Aurora\Http\Message\Filter;

use Psr\Http\Message\ResponseInterface;

interface ResponseFilterInterface extends FilterInterface
{
    /**
     * Process an incoming response.
     *
     * @param ResponseInterface        $response
     * @return ResponseInterface
     */
    public function processResponse(ResponseInterface $response): ResponseInterface;
}