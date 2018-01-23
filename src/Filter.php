<?php

namespace Aurora\Http\Message\Filter;

use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

abstract class Filter implements FilterInterface
{
    public function process(MessageInterface $message): MessageInterface
    {
        if ($this instanceof ResponseFilterInterface && $message instanceof ResponseInterface) {
            $message = $this->processResponse($message);
        }
        if ($this instanceof RequestFilterInterface && $message instanceof RequestInterface) {
            $message = $this->processRequest($message);
        }

        return $message;
    }
}