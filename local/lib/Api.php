<?php
namespace lib;

use Bitrix\Main\Engine\Controller;

class Api extends Controller
{
    /**
     * Configuration prefilters on before run action methods
     * @return ApiPrefilters[]
     */
    public function getDefaultPreFilters()
    {
        //return []; // disable prefilters
        return [
            new ApiPrefilters
        ];
    }

    /**
     * Configuration postfilters on after return action methods
     * @return ApiPostfilters[]
     */
    public function getDefaultPostFilters()
    {
        return [
            new ApiPostfilters,
        ];
    }

    /**
     * Action method
     * @param $iblockId
     * @return array
     */
    public function exportAction($iblockId) {
        return [
            'method' => __METHOD__,
            'iblockId' => $iblockId
        ];
    }


}