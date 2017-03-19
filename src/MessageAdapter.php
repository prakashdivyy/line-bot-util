<?php

namespace LINEUtils;

use \LINEUtils\TextMessageParser;
use \LINEUtils\StickerMessageParser;
use \LINEUtils\ImageMessageParser;
use \LINEUtils\LocationMessageParser;
use \LINEUtils\AudioMessageParser;
use \LINEUtils\VideoMessageParser;
use \LINE\LINEBot\Event\MessageEvent;
use \LINE\LINEBot\Event\MessageEvent\TextMessage;
use \LINE\LINEBot\Event\MessageEvent\StickerMessage;
use \LINE\LINEBot\Event\MessageEvent\LocationMessage;
use \LINE\LINEBot\Event\MessageEvent\ImageMessage;
use \LINE\LINEBot\Event\MessageEvent\AudioMessage;
use \LINE\LINEBot\Event\MessageEvent\VideoMessage;

class MessageAdapter
{
    public function __construct(MessageEvent $message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        $event = $this->message;
        if ($event instanceof TextMessage) {
            $msg = TextMessageParser($event);
            return $msg->getMessage();
        } elseif ($event instanceof StickerMessage) {
            $msg = StickerMessageParser($event);
            return $msg->getMessage();
        } elseif ($event instanceof LocationMessage) {
            $msg = LocationMessageParser($event);
            return $msg->getMessage();
        } elseif ($event instanceof ImageMessage) {
            $msg = ImageMessageParser($event);
            return $msg->getMessage();
        } elseif ($event instanceof AudioMessage) {
            $msg = AudioMessageParser($event);
            return $msg->getMessage();
        } elseif ($event instanceof VideoMessage) {
            $msg = VideoMessageParser($event);
            return $msg->getMessage();
        }
    }
}