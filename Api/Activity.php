<?php

namespace Api;

class Activity
{
    private string $url = 'http://www.boredapi.com/api/';
    public string $name = 'activity';

    public function getByCountParticipantsAndType($count, $type): string
    {
        $url = "$this->url$this->name?participants=$count&type=$type";
        $response = json_decode(file_get_contents($url));

        return $response->activity;
    }
}