<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var $arResult */

$pageCount  = (int)$arResult['NavPageCount'];
$current    = (int)$arResult['NavPageNomer'];
$window     = (int)$arResult['nPageWindow'];
$baseUrl    = $arResult['sUrlPathParams'] ?: '?';   // "/blog/?" или просто "?"

// Если в конце baseUrl нет '?', добавим его
if (strpos($baseUrl, '?') === false) {
    $baseUrl .= '?';
}

// Определяем диапазон отображаемых страниц (если в массиве уже есть nStartPage/nEndPage – берём их)
if (isset($arResult['nStartPage']) && isset($arResult['nEndPage'])) {
    $start = (int)$arResult['nStartPage'];
    $end   = (int)$arResult['nEndPage'];
} else {
    $start = max(1, $current - $window);
    $end   = min($pageCount, $current + $window);
}

// Функция для формирования ссылки (добавляет параметр page)
function pageLink($base, $page, $navnum) {
    $separator = (strpos($base, '?') !== false) ? '&' : '?';
    return $base . 'PAGEN_' . $navnum . '=' . $page;
}
?>

<nav class="blog-posts-list__pagination" aria-label="Пагинация блога">
    <div class="blog-posts-list__pagination-list">

        <!-- Кнопка "Предыдущая" -->
        <?php if ($current > 1): ?>
            <a class="blog-posts-list__pagination-item blog-posts-list__pagination-item--arrow blog-posts-list__pagination-item--prev"
               href="<?= pageLink($baseUrl, $current - 1, $arResult['NavNum']) ?>" aria-label="Предыдущая страница">
                <svg class="blog-posts-list__pagination-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M10 19L17 12L10 5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </svg>
            </a>
        <?php else: ?>
            <span class="blog-posts-list__pagination-item blog-posts-list__pagination-item--arrow blog-posts-list__pagination-item--prev"
                  type="button" aria-label="Предыдущая страница" disabled>
                <svg class="blog-posts-list__pagination-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M10 19L17 12L10 5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </svg>
            </span>
        <?php endif; ?>

        <!-- Первая страница и многоточие, если окно начинается не с 1 -->
        <?php if ($start > 1): ?>
            <a class="blog-posts-list__pagination-item blog-posts-list__pagination-item--page blog-posts-list__pagination-item--first"
               href="<?= pageLink($baseUrl, 1, $arResult['NavNum']) ?>">1</a>
            <span class="blog-posts-list__pagination-item blog-posts-list__pagination-item--ellipsis" aria-hidden="true">…</span>
        <?php endif; ?>

        <!-- Цикл по страницам в диапазоне -->
        <?php for ($i = $start; $i <= $end; $i++): ?>
            <?php if ($i == $current): ?>
                <!-- Текущая страница – без ссылки -->
                <span class="blog-posts-list__pagination-item blog-posts-list__pagination-item--page is-current"
                      aria-current="page"><?= $i ?></span>
            <?php else: ?>
                <!-- Обычная страница – ссылка -->
                <a class="blog-posts-list__pagination-item blog-posts-list__pagination-item--page
                    <?= ($i == 1) ? 'blog-posts-list__pagination-item--first' : '' ?>
                    <?= ($i == $pageCount) ? 'blog-posts-list__pagination-item--last' : '' ?>"
                   href="<?= pageLink($baseUrl, $i, $arResult['NavNum']) ?>"><?= $i ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <!-- Многоточие и последняя страница, если окно не доходит до конца -->
        <?php if ($end < $pageCount): ?>
            <span class="blog-posts-list__pagination-item blog-posts-list__pagination-item--ellipsis" aria-hidden="true">…</span>
            <a class="blog-posts-list__pagination-item blog-posts-list__pagination-item--page"
               href="<?= pageLink($baseUrl, $pageCount, $arResult['NavNum']) ?>"><?= $pageCount ?></a>
        <?php endif; ?>

        <!-- Кнопка "Следующая" -->
        <?php if ($current < $pageCount): ?>
            <a class="blog-posts-list__pagination-item blog-posts-list__pagination-item--arrow blog-posts-list__pagination-item--next"
               href="<?= pageLink($baseUrl, $current + 1, $arResult['NavNum']) ?>" aria-label="Следующая страница">
                <svg class="blog-posts-list__pagination-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M10 19L17 12L10 5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </svg>
            </a>
        <?php else: ?>
            <span class="blog-posts-list__pagination-item blog-posts-list__pagination-item--arrow blog-posts-list__pagination-item--next"
                  type="button" aria-label="Следующая страница" disabled>
                <svg class="blog-posts-list__pagination-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M10 19L17 12L10 5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </svg>
            </span>
        <?php endif; ?>

    </div>
</nav>