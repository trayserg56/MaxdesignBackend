<?php

$rsSections = CIBlockSection::GetList(
    array("SORT" => "ASC"),
    array("IBLOCK_ID" => '8', "ACTIVE" => "Y"),
    false,
    array("UF_*")
);
if($arResult['SECTION'] == false){
    while ($arSections = $rsSections->GetNext()) {
                
        // echo '<pre>';
        // var_dump($arSections);
        // echo '</pre>';
        $item['DETAIL_PAGE_URL'] = $arSections['SECTION_PAGE_URL']; 
        
        $item['NAME'] = $arSections['NAME'];
        foreach($arSections['UF_SLIDER_IMG'] as $key => $id){
            $item['DISPLAY_PROPERTIES']['SLIDER_IMG']['FILE_VALUE'][]['SRC'] = CFile::GetPath($id);
        }
        $arResult['ITEMS'][] = $item;
        
        //выводите нужную информацию так как Вам надо, например
        // var_dump($arSections);
    }
}
?>
