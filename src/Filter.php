<?php

namespace Aurora\Http\Message\Filter;

use Aurora\Http\Handler\HandlerInterface;

abstract class Filter implements FilterInterface
{
    public function handle($request, HandlerInterface $next)
    {
        if (! $request instanceof FilterInterface) {
            return $next->handle($request, $next);
        }
        if (method_exists($this, 'process')) {
            $request =  $this->process($request);
        }

        return $next->handle($request, $next);
    }
}