
document.addEventListener('DOMContentLoaded', function () {
    initPortfolioFilterButtons();

    function initPortfolioFilterButtons() {
        document.querySelectorAll('select[data-filter]')?.forEach(select => {
            select.addEventListener('change', function () {
                let data = {};
                const values = [...select.selectedOptions].map(opt => opt.value);

                // const parser = new DOMParser();
                // const url = location.pathname + (value !== 'all' ? '?section=' + value : '');

                document.querySelectorAll('select[data-filter]').forEach(select => {
                    data[select.name] = [...select.selectedOptions].map(opt => opt.value);
                });

                data[select.name] = values;

                console.log(data);
                //
                // button.disabled = true;
                // BX.ajax({
                //     url: url,
                //     method: 'GET',
                //     onsuccess: function (r) {
                //         r = parser.parseFromString(r, 'text/html');
                //         replaceWith(r, 'data-filter-container');
                //         button.disabled = false;
                //         window.history.pushState({}, '', url);
                //     }
                // });
            });
        });
    }
});