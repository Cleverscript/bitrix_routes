<?php
use Bitrix\Main\Routing\RoutingConfigurator;
use \Bitrix\Main\Engine\Response\AjaxJson;
use lib\Api;

return static function (RoutingConfigurator $router) {
    $router->prefix('api')->group(static function (RoutingConfigurator $router) {
        /*$router->any('export/{iblockId}', static function ($iblockId, \Bitrix\Main\HttpRequest $request) {
            return AjaxJson::createError(
                new ErrorCollection(
                    [new Error('Unable to perform operation')]
                )
            );

            return AjaxJson::createSuccess();
        })->methods(['POST']);*/

        $router->any('export/{iblockId}', [
            Api::class,
            'export'
        ])->methods(['POST']);
    });
};