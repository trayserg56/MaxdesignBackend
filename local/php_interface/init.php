<?php

use Bitrix\Main\EventManager;
use Bitrix\Main\Loader;
use Controllers\FormSubmitController;
use Entity\BaseEntity;
use Entity\Contacts;
use Entity\DTO\FormSubmitDTO;
use Entity\Redirects;
use Entity\Socials;
use Entity\Form;
use Entity\FormSubmits;
use EventHandlers\PortfolioEventHandler;
use Helpers\IblockHelper;
use Helpers\TemplateHelper;

Loader::registerAutoLoadClasses(
    null,
	[
        BaseEntity::class => '/local/php_interface/lib/Entity/BaseEntity.php',
        Contacts::class => '/local/php_interface/lib/Entity/Contacts.php',
        Socials::class => '/local/php_interface/lib/Entity/Socials.php',
        Form::class => '/local/php_interface/lib/Entity/Form.php',
        FormSubmits::class => '/local/php_interface/lib/Entity/FormSubmits.php',
        Redirects::class => '/local/php_interface/lib/Entity/Redirects.php',
        FormSubmitController::class => '/local/php_interface/lib/Controllers/FormSubmitController.php',
        FormSubmitDTO::class => '/local/php_interface/lib/Entity/DTO/FormSubmitDTO.php',
        TemplateHelper::class => '/local/php_interface/lib/Helpers/TemplateHelper.php',
        IblockHelper::class => '/local/php_interface/lib/Helpers/IblockHelper.php',
        PortfolioEventHandler::class => '/local/php_interface/lib/EventHandlers/PortfolioEventHandler.php',
    ]
);

EventManager::getInstance()->addEventHandler(
    'iblock',
    'OnAfterIBlockElementAdd',
    [PortfolioEventHandler::class, 'portfolioFiltersAfterSaved']
);

EventManager::getInstance()->addEventHandler(
    'iblock',
    'OnAfterIBlockElementUpdate',
    [PortfolioEventHandler::class, 'portfolioFiltersAfterSaved']
);

EventManager::getInstance()->addEventHandler(
    'main',
    'OnPageStart',
    [Redirects::class, 'handleRequests']
);
