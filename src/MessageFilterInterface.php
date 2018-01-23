<?php

namespace Aurora\Http\Message\Filter;

use Psr\Http\Message\MessageInterface;

interface MessageFilterInterface extends FilterInterface
{
    /**
     * @param MessageInterface $message
     * @return MessageInterface
     */
    public function process(MessageInterface $message): MessageInterface;
}