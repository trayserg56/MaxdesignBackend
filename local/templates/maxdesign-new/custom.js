
document.addEventListener('DOMContentLoaded', () => {
    initPaginationButtons();

    function replaceWith(response, selectorAttribute = 'data-replace') {
        document.querySelectorAll(`[${selectorAttribute}]`).forEach(element => {
            let replace = response.querySelector(`[${selectorAttribute}=${element.getAttribute(selectorAttribute)}]`);
            if (replace) {
                element.replaceWith(replace);
            }
        });
    }

    function initPaginationButtons() {
        document.querySelector('[data-pagination-type]')?.addEventListener('click', function () {
            const parser = new DOMParser();
            const paginationContainer = this.dataset.paginationContainerCode;
            const paginationType = this.dataset.paginationType;
            const navNum = 'PAGEN_' + this.dataset.navNum;
            const page = this.dataset.page;
            let payload = {};

            payload[navNum] = page;
            this.disabled = true;
            BX.ajax({
                url: location.pathname + '?' + navNum + '=' + page,
                method: 'GET',
                onsuccess: function (r) {
                    const selector = `[data-pagination-container=${paginationContainer}]`;
                    r = parser.parseFromString(r, 'text/html');

                    if (paginationType === 'show-more') {
                        document.querySelector(selector)?.append(
                            ...r.querySelector(selector).children
                        );
                        replaceWith(r, 'data-pagination-container-code');
                        document.querySelector(`[data-pagination-container-code=${paginationContainer}]:disabled`)?.remove();
                    } else {
                        replaceWith(r, 'data-pagination-container');
                        //scroll up?
                    }
                    initPaginationButtons();
                }
            });
        });
    }
});
