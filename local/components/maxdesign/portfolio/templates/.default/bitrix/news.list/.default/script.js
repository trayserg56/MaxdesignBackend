
document.addEventListener('DOMContentLoaded', function() {
    let filterContainer = document.querySelector('[data-filters-container]');

    if (!filterContainer) {
        return;
    }

    const basePath = filterContainer.dataset.baseUrl || '/';

    function collectFilters() {
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

        if (filterData?.TYPE_OBJECT?.length) {
            path += filterData.TYPE_OBJECT.join('-') + '/';
        }
        if (filterData?.STYLE?.length) {
            path += filterData.STYLE.join('-') + '/';
        }

        return path;
    }

    function sendRequest() {
        const filterData = collectFilters();
        const pathname = buildPathname(filterData);

        const params = new URLSearchParams();
        filterData?.SQUARE_OBJECT?.forEach((filter, key) => params.append(`SQUARE_OBJECT[${key}]`, filter));
        filterData?.YEAR?.forEach((filter, key) => params.append(`YEAR[${key}]`, filter));

        // Обновляем URL в браузере БЕЗ query-строки
        history.pushState(null, '', pathname);

        // Отправляем AJAX с query-параметрами
        BX.ajax({
            url: pathname + '?' + params.toString(),
            method: 'GET',
            dataType: 'html',
            onsuccess: function (r) {
                const parser = new DOMParser();
                r = parser.parseFromString(r, 'text/html');
                window.custom.replaceWith(r, 'data-filter-container');
                window.custom.replaceWith(r, 'data-filters-container');

                filterContainer = document.querySelector('[data-filters-container]');
                registerEventListenerFilters(filterContainer);
                Select.initAll();
                window.custom.initLazyPagination();
            }
        });
    }

    registerEventListenerFilters(filterContainer);

    function registerEventListenerFilters(filterContainer) {
        if (!filterContainer) {
            return;
        }

        filterContainer.addEventListener('click', function(e) {
            const removeBtn = e.target.closest('.button-icon.button--flat');
            if (removeBtn && removeBtn.closest('.select__tag')) {
                setTimeout(sendRequest, 0);
                return;
            }

            const optionEl = e.target.closest('.select__option');
            if (optionEl) {
                setTimeout(sendRequest, 0);
            }
        }, true);
    }
});