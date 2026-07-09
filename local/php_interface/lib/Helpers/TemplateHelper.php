<?php

namespace Helpers;

use Bitrix\Main\Loader;

class TemplateHelper
{
    public static function getPromoVideoSrc($id = 610): string
    {
        try {
            Loader::includeModule("fileman");
        } catch (\Exception) {
            return '';
        }

        \CMedialib::Init();

        $rsData = \CMedialibItem::GetList([
            'id' => $id,
        ]);

        if ($rsData) {
            return $rsData[0]['PATH'];
        }

        return '';
    }
}
