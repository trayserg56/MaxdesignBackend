<?

foreach ($arResult["ITEMS"] as $key =>  $item) {
    $res = CIBlockSection::GetByID($arResult['ITEMS'][$key]['IBLOCK_SECTION_ID']);
    
    if($ar_res = $res->GetNext()){
        $arResult["ITEMS"][$key]['SECTION_NAME'] = $ar_res['NAME'];
    }
}
?>
