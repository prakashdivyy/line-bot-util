<?php

namespace LINEUtils;

use \LINE\LINEBot\Event\MessageEvent\AudioMessage;

class AudioMessageParser
{
    public function __construct(AudioMessage $audioMessage)
    {
        $this->audioMessage = $audioMessage;
    }

    public function getMessage()
    {
        return $this->audioMessage;
    }
}