<?php

namespace LINEUtils;

use \LINE\LINEBot\Event\MessageEvent\VideoMessage;

class VideoMessageParser
{
    public function __construct(VideoMessage $videoMessage)
    {
        $this->videoMessage = $videoMessage;
    }

    public function getMessage()
    {
        return $this->videoMessage;
    }
}