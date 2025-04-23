<?php
namespace lib;

use Bitrix\Main\Event;
use Bitrix\Main\Engine\ActionFilter\Base;

class ApiPostfilters extends Base
{
    public function onAfterAction(Event $event)
    {
        $result = $event->getParameter('result');

        $event->setParameter('result', [
            'some_param' => 'some_value',
            'result' => $result
        ]);
    }
}