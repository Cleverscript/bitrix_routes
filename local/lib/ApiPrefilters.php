<?php
namespace lib;

use Bitrix\Main\Context;
use Bitrix\Main\Engine\ActionFilter\Base;
use Bitrix\Main\Error;
use Bitrix\Main\Event;
use Bitrix\Main\EventResult;

class ApiPrefilters extends Base
{
    public function onBeforeAction(Event $event)
    {
        $apiKey = Context::getCurrent()->getRequest()->getHeader('Api-Key'); // specify API-KEY in the request header

        if ($apiKey !== 'TEST') {
            $this->addError(new Error('Wrong api key'));
            return new EventResult(EventResult::ERROR, null, null, $this);
        }

        return null;
    }
}
