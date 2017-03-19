<?php

namespace LINEUtils;

use \LINE\LINEBot\Event\MessageEvent\ImageMessage;

class ImageMessageParser
{
    public function __construct(ImageMessage $imageMessage)
    {
        $this->imageMessage = $imageMessage;
    }

    public function getMessage()
    {
        return $this->imageMessage;
    }
}