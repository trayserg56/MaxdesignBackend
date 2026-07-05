<?php

use Bitrix\Main\Loader;
use Controllers\FormSubmitController;
use Entity\BaseEntity;
use Entity\Contacts;
use Entity\DTO\FormSubmitDTO;
use Entity\Socials;
use Entity\Form;
use Entity\FormSubmits;

Loader::registerAutoLoadClasses(
    null,
	[
        BaseEntity::class => '/local/php_interface/lib/Entity/BaseEntity.php',
        Contacts::class => '/local/php_interface/lib/Entity/Contacts.php',
        Socials::class => '/local/php_interface/lib/Entity/Socials.php',
        Form::class => '/local/php_interface/lib/Entity/Form.php',
        FormSubmits::class => '/local/php_interface/lib/Entity/FormSubmits.php',
        FormSubmitController::class => '/local/php_interface/lib/Controllers/FormSubmitController.php',
        FormSubmitDTO::class => '/local/php_interface/lib/Entity/DTO/FormSubmitDTO.php',
    ]
);

