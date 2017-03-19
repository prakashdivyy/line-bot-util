<?php

namespace LINEUtils;

use \LINEUtils\TextMessageParser;
use \LINEUtils\StickerMessageParser;
use \LINEUtils\ImageMessageParser;
use \LINEUtils\LocationMessageParser;
use \LINEUtils\AudioMessageParser;
use \LINEUtils\VideoMessageParser;
use \LINE\LINEBot\Event\BaseEvent;
use \LINE\LINEBot\Event\MessageEvent;
use \LINE\LINEBot\Event\MessageEvent\TextMessage;
use \LINE\LINEBot\Event\MessageEvent\StickerMessage;
use \LINE\LINEBot\Event\MessageEvent\LocationMessage;
use \LINE\LINEBot\Event\MessageEvent\ImageMessage;
use \LINE\LINEBot\Event\MessageEvent\AudioMessage;
use \LINE\LINEBot\Event\MessageEvent\VideoMessage;

class MessageAdapter
{
    public function __construct(BaseEvent $message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        $event = $this->message;
        if ($event instanceof MessageEvent) {
            if ($event instanceof TextMessage) {
                $msg = new TextMessageParser($event);
                return $msg->getMessage();
            } elseif ($event instanceof StickerMessage) {
                $msg = new StickerMessageParser($event);
                return $msg->getMessage();
            } elseif ($event instanceof LocationMessage) {
                $msg = new LocationMessageParser($event);
                return $msg->getMessage();
            } elseif ($event instanceof ImageMessage) {
                $msg = new ImageMessageParser($event);
                return $msg->getMessage();
            } elseif ($event instanceof AudioMessage) {
                $msg = new AudioMessageParser($event);
                return $msg->getMessage();
            } elseif ($event instanceof VideoMessage) {
                $msg = new VideoMessageParser($event);
                return $msg->getMessage();
            }
        }
    }
}