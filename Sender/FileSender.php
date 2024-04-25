<?php

namespace Sender;

class FileSender implements SenderInterface
{

    private string $filename = 'file.txt';

    public function record(string $activity): void
    {
        file_put_contents($this->filename, $activity);
    }

    public function print(string $activity): void
    {
        $this->record($activity);
        echo 'Successfully written to a file';
    }
}