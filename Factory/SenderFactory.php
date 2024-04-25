<?php

namespace Factory;

use Sender\ConsoleSender;
use Sender\FileSender;
use Sender\SenderInterface;

class SenderFactory
{
    protected static array $availables = [
        'console' => ConsoleSender::class,
        'file' => FileSender::class
    ];

    /**
     * @throws \Exception
     */
    public function make(string $sender): SenderInterface
    {
        if (!array_key_exists($sender, self::$availables)) {
            throw new \Exception();
        }

        return (new self::$availables[$sender]);
    }
}