<?php

use Bitrix\Main\Loader;
use Entity\BaseEntity;
use Entity\Contacts;
use Entity\Socials;

Loader::registerAutoLoadClasses(
    null,
	[
        BaseEntity::class => '/local/php_interface/lib/Entity/BaseEntity.php',
        Contacts::class => '/local/php_interface/lib/Entity/Contacts.php',
        Socials::class => '/local/php_interface/lib/Entity/Socials.php',
    ]
);