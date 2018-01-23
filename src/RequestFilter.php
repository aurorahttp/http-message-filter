<?php

namespace Aurora\Http\Message\Filter;

use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ServerRequestInterface;

abstract class RequestFilter extends Filter implements RequestFilterInterface
{
    final public function process(MessageInterface $message): MessageInterface
    {
        return parent::process($message);
    }

    public function processRequest(RequestInterface $request): RequestInterface
    {
        if ($this instanceof ServerRequestFilterInterface && $request instanceof ServerRequestInterface) {
            $request = $this->processServerRequest($request);
        }

        return $request;
    }
}