<?php

namespace Sender;
interface SenderInterface
{
    public function print(string $activity): void;
}