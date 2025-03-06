<?php

use Bitrix\Main,
    Bitrix\Main\Engine\CurrentUser;

$eventManager = Main\EventManager::getInstance();

$eventManager->addEventHandler('iblock', 'OnAfterIBlockElementAdd', 'handlerUpdateUserBalance');

function handlerUpdateUserBalance(&$arFields) {
    $userId = CurrentUser::get()->getId();
    if ($arFields['IBLOCK_CODE'] == 'IBLOCK_TRANSACTIONS' && strpos($arFields['NAME'], "Ручное пополнение") !== false && $userId > 0) {
        $user = new CUser;
        $arUserInfo = CUser::GetByID($userId)->Fetch();
        $user->Update($userId, ['UF_BALANCE' => (floatval($arUserInfo['UF_BALANCE']) + 100)]);
    }
}


