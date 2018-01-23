<?php

namespace Aurora\Http\Message\Filter;

use Aurora\Http\Handler\HandlerInterface;
use Psr\Http\Message\MessageInterface;

abstract class Filter implements FilterInterface
{
    public function handle($request, HandlerInterface $next)
    {
        if (! $request instanceof MessageInterface) {
            return $next->handle($request, $next);
        }
        if (method_exists($this, 'process')) {
            $request =  $this->process($request);
        }

        return $next->handle($request, $next);
    }
}