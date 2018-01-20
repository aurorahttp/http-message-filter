<?php

namespace Aurora\Http\Message\Filter;

use Psr\Http\Message\ResponseInterface;

interface ResponseFilterInterface
{
    /**
     * Process an incoming server response.
     *
     * @param ResponseInterface        $response
     * @return ResponseInterface
     */
    public function process(ResponseInterface $response): ResponseInterface;
}