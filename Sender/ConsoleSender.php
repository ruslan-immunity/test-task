<?php

namespace Sender;

class ConsoleSender implements SenderInterface
{
    public function print(string $activity): void
    {
        echo $activity;
    }

}