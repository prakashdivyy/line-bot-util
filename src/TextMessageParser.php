<?php

namespace LINEUtils;

use \LINE\LINEBot\Event\MessageEvent\TextMessage;

class TextMessageParser
{
    public function __construct(TextMessage $textMessage)
    {
        $this->textMessage = $textMessage;
    }

    public function getMessage()
    {
        return $this->textMessage;
    }
}