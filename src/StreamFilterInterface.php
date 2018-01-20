<?php

namespace Aurora\Http\Message\Filter;

use Psr\Http\Message\StreamInterface;

interface StreamFilterInterface
{
    /**
     * Process an incoming stream.
     *
     * @param StreamInterface $stream
     * @return StreamInterface
     */
    public function process(StreamInterface $stream): StreamInterface;
}