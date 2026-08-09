
document.addEventListener('DOMContentLoaded', function() {
    const isMobile = navigator.userAgentData ? navigator.userAgentData.mobile : /Mobi|Android/i.test(navigator.userAgent);

    const filterContainerSelector = isMobile ? '[data-filters-container=portfolio-mob]' : '[data-filters-container=portfolio]';
    const filterContainerModalSelector = '[data-filters-container=portfolio-mob-modal]';
    const filterButtonResetSelector = '[data-filter-reset]';

    let filterContainer = document.querySelector(filterContainerSelector);
    let filterContainerModal = document.querySelector(filterContainerModalSelector);
    let filterButtonReset = document.querySelector(filterButtonResetSelector);

    if (!filterContainer) {
        return;
    }

    const basePath = filterContainer.dataset.baseUrl || filterContainerModal.dataset.baseUrl || '/';

    function collectFilters(filterContainer) {
        const selects = filterContainer.querySelectorAll('select[multiple]');
        const data = {};

        selects.forEach(select => {
            const name = select.getAttribute('name') || select.id;
            data[name] = Array.from(select.selectedOptions).map(opt => opt.value);
        });

        return data;
    }

    function buildPathname(filterData) {
        let path = basePath;

        if (!filterData || typeof filterData !== 'object') {
            return path;
        }

        // Перебираем все ключи filterData
        Object.entries(filterData).forEach(([key, value]) => {
            // Проверяем, что значение - массив и не пустой
            if (!Array.isArray(value) || !value.length) {
                return;
            }

            // Ищем в DOM элемент select с соответствующими атрибутами
            const selectElement = document.querySelector(`select[name="${key}"][data-sef]`);

            if (!selectElement) {
                return;
            }

            // Добавляем "filter/" если ещё не добавлено
            if (!path.includes('filter')) {
                path += 'filter/';
            }

            // Добавляем значение в путь
            path += value.join('-') + '/';
        });

        return path;
    }

    function sendRequest(containerWithFilters, resetFilters = false) {
        const filterData = !resetFilters ? collectFilters(containerWithFilters) : {};
        const pathname = !resetFilters ? buildPathname(filterData) : basePath;
        const params = new URLSearchParams();

        if (!resetFilters && filterData && typeof filterData === 'object') {
            // Перебираем все ключи filterData
            Object.entries(filterData).forEach(([key, value]) => {
                // Проверяем, что значение - массив и не пустой
                if (!Array.isArray(value) || !value.length) {
                    return;
                }

                // Проверяем наличие элемента в DOM с атрибутом data-sef
                const selectElement = document.querySelector(`select[name="${key}"][data-sef]`);

                // Если элемент с data-sef найден - пропускаем (уже в пути)
                if (selectElement) {
                    return;
                }

                // Добавляем в query-параметры
                value.forEach((filter, index) => {
                    params.append(`${key}[${index}]`, filter);
                });
            });
        }

        // Обновляем URL в браузере БЕЗ query-строки
        if (resetFilters) {
            history.pushState(null, '', basePath);
        } else {
            history.pushState(null, '', pathname);
        }

        // Отправляем AJAX с query-параметрами
        BX.ajax({
            url: pathname + '?' + params.toString(),
            method: 'GET',
            dataType: 'html',
            onsuccess: function (r) {
                const parser = new DOMParser();
                r = parser.parseFromString(r, 'text/html');
                window.custom.replaceWith(r, 'data-filter-container', false, true);
                window.custom.replaceWith(r, 'data-filters-container', false, true);
                window.custom.replaceWith(r, 'data-replace', false, true);

                filterContainer = document.querySelector(filterContainerSelector);
                filterContainerModal = document.querySelector(filterContainerModalSelector);
                registerEventListenerFilters(filterContainer);
                registerEventListenerFilters(filterContainerModal);
                Select.initAll();
                Modal.load(filterContainerModal.id);
                window.custom.initLazyPagination();
            }
        });
    }

    registerEventListenerFilters(filterContainer);
    registerEventListenerFilters(filterContainerModal);
    registerResetFiltersButton(filterButtonReset);

    function registerEventListenerFilters(filterContainer) {
        if (!filterContainer) {
            return;
        }

        filterContainer.addEventListener('click', function(e) {
            const removeBtn = e.target.closest('.button-icon.button--flat');
            if (removeBtn && removeBtn.closest('.select__tag')) {
                setTimeout(function () {
                    sendRequest(filterContainer);
                }, 0);
                return;
            }

            const optionEl = e.target.closest('.select__option');
            if (optionEl) {
                setTimeout(function () {
                    sendRequest(filterContainer);
                }, 0);
            }
        }, true);
    }

    // Функция сброса фильтров
    function registerResetFiltersButton(resetButton) {
        if (!resetButton) {
            return;
        }

        resetButton.addEventListener('click', function () {
            setTimeout(function () {
                sendRequest(null, true);
            }, 0);
        });
    }
});