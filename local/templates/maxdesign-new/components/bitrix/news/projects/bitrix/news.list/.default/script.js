
// document.addEventListener('DOMContentLoaded', function () {
//     initPortfolioFilterButtons();
//
//     function initPortfolioFilterButtons() {
//
//         document.querySelectorAll('select[data-filter]')?.forEach(select => {
//             select.addEventListener('change', function () {
//                 let data = {};
//                 const values = [...select.selectedOptions].map(opt => opt.value);
//
//                 // const parser = new DOMParser();
//                 // const url = location.pathname + (value !== 'all' ? '?section=' + value : '');
//
//                 document.querySelectorAll('select[data-filter]').forEach(select => {
//                     data[select.name] = [...select.selectedOptions].map(opt => opt.value);
//                 });
//
//                 data[select.name] = values;
//
//                 console.log(data);
//                 //
//                 // button.disabled = true;
//                 // BX.ajax({
//                 //     url: url,
//                 //     method: 'GET',
//                 //     onsuccess: function (r) {
//                 //         r = parser.parseFromString(r, 'text/html');
//                 //         replaceWith(r, 'data-filter-container');
//                 //         button.disabled = false;
//                 //         window.history.pushState({}, '', url);
//                 //     }
//                 // });
//             });
//         });
//     }
// });


document.addEventListener('DOMContentLoaded', function() {
    const filterContainer = document.querySelector('[data-filters-container]');

    if (!filterContainer) {
        return;
    }

    function collectFilters() {
        const selects = filterContainer.querySelectorAll('select[multiple]');
        const data = {};

        selects.forEach(select => {
            const name = select.getAttribute('name') || select.id;
            data[name] = Array.from(select.selectedOptions).map(opt => opt.value);
        });

        return data;
    }

    function sendRequest() {
        const filterData = collectFilters();

        BX.ajax.get(
            location.pathname,
            filterData,
            function (r) {
                const parser = new DOMParser();
                r = parser.parseFromString(r, 'text/html');
                window.custom.replaceWith(r, 'data-filter-container');
            }
        );
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
});