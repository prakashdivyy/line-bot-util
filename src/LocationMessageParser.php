<?php

namespace LINEUtils;

use \LINE\LINEBot\Event\MessageEvent\LocationMessage;

class LocationMessageParser
{
    public function __construct(LocationMessage $locationMessage)
    {
        $this->locationMessage = $locationMessage;
    }

    public function getMessage()
    {
        return $this->locationMessage;
    }
}