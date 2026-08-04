<?php

namespace Entity;

use Bitrix\Main\Context;
use Bitrix\Main\ObjectNotFoundException;
use Bitrix\Main\SystemException;
use Bitrix\Main\Web\Uri;

/**
 * Класс для работы с редиректами, хранящимися в highload-блоке.
 *
 * Поля HL-блока (ожидаются):
 * - UF_OLD_URL      – старая ссылка (строка, обязательное)
 * - UF_NEW_URL      – новая ссылка (строка, обязательное)
 * - UF_REDIRECT_TYPE – тип редиректа (число: 301 или 302, по умолчанию 302)
 * - UF_ACTIVE       – активность (символ: 'Y' / 'N', по умолчанию 'Y')
 * - UF_SORT         – сортировка (число, по умолчанию 500)
 */
class Redirects extends BaseEntity
{
    protected const DEFAULT_STATUS = 302;

    /**
     * Возвращает код highload-блока.
     *
     * @return string
     */
    public static function getEntityCode(): string
    {
        return 'Redirects';
    }

    /**
     * Возвращает название поля первичного ключа (не используется).
     *
     * @return string|null
     */
    public static function getPrimaryField(): ?string
    {
        return null;
    }

    /**
     * Возвращает все активные редиректы, отсортированные по UF_SORT.
     *
     * @return array
     */
    public function getRedirects(): array
    {
        return $this->getItems(
            filter: ['UF_ACTIVE' => 1],
            order: ['UF_SORT' => 'ASC']
        );
    }

    /**
     * Ищет редирект по точному совпадению старой ссылки.
     *
     * @param string $oldUrl – путь (например, '/old-page/')
     * @return array|null
     */
    public function findRedirectByOldUrl(string $oldUrl): ?array
    {
        $items = $this->getItems(
            filter: [
                'UF_ACTIVE' => 1,
                'UF_OLD_URL' => $oldUrl,
            ],
            limit: 1
        );

        return $items[0] ?? null;
    }

    /**
     * Обрабатывает текущий запрос: если найдено совпадение с UF_OLD_URL,
     * выполняет редирект на UF_NEW_URL с указанным типом.
     *
     * @return void
     */
    public function handleRequest(): void
    {
        // Получаем объект запроса через API Битрикс
        $request = Context::getCurrent()->getRequest();
        $uri = new Uri($request->getRequestUri());
        // Путь без GET-параметров (например, '/catalog/')
        $path = $uri->getPath();

        $redirect = $this->findRedirectByOldUrl($path);
        if ($redirect) {
            $newUrl = $redirect['UF_NEW_URL'];
            $type = (int) ($redirect['UF_REDIRECT_TYPE'] ?? static::DEFAULT_STATUS);
            \LocalRedirect($newUrl, false, $type);
        }
    }

    /**
     * @throws SystemException
     * @throws ObjectNotFoundException
     */
    public static function handleRequests(): void
    {
        static::getInstance()->handleRequest();
    }
}
