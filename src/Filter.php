<?php

namespace Aurora\Http\Message\Filter;

use Aurora\Http\Handler\HandlerInterface;
use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

abstract class Filter implements FilterInterface, HandlerInterface
{
    public function handle($request, HandlerInterface $next)
    {
        if (! $request instanceof MessageInterface) {
            return $next->handle($request, $next);
        }
        if ($this instanceof ServerRequestFilterInterface && $request instanceof
            ServerRequestInterface) {
            $request = $this->process($request);
        } elseif ($this instanceof RequestFilterInterface && $request instanceof RequestInterface) {
            $request = $this->process($request);
        } elseif ($this instanceof ResponseFilterInterface && $request instanceof ResponseInterface) {
            $request = $this->process($request);
        } else {
            $request = $this->process($request);
        }

        return $next->handle($request, $next);
    }
}