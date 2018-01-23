<?php

namespace Aurora\Http\Message\Filter;

use Psr\Http\Message\StreamInterface;

interface StreamFilterInterface extends FilterInterface
{
    /**
     * Process an incoming stream.
     *
     * @param StreamInterface $stream
     * @return StreamInterface
     */
    public function processStream(StreamInterface $stream): StreamInterface;
}