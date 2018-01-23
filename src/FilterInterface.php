<?php

namespace Aurora\Http\Message\Filter;

use Psr\Http\Message\MessageInterface;

interface FilterInterface
{
    public function process(MessageInterface $message): MessageInterface;
}