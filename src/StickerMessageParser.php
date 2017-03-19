<?php

namespace LINEUtils;

use \LINE\LINEBot\Event\MessageEvent\StickerMessage;

class StickerMessageParser
{
    public function __construct(StickerMessage $stickerMessage)
    {
        $this->stickerMessage = $stickerMessage;
    }

    public function getMessage()
    {
        return $this->stickerMessage;
    }
}