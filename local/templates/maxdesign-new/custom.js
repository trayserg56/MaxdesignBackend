
document.addEventListener('DOMContentLoaded', () => {
    initPaginationButtons();
    initFilterButtons();
    initForms();

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

    function initFilterButtons() {
        document.querySelectorAll('[data-filter-value]')?.forEach(button => {
            button.addEventListener('click', function () {
                const parser = new DOMParser();
                const value = this.dataset.filterValue;
                const url = location.pathname + (value !== 'all' ? '?section=' + value : '');

                button.disabled = true;
                BX.ajax({
                    url: url,
                    method: 'GET',
                    onsuccess: function (r) {
                        r = parser.parseFromString(r, 'text/html');
                        replaceWith(r, 'data-filter-container');
                        button.disabled = false;
                        window.history.pushState({}, '', url);
                    }
                });
            });
        });
    }

    function initForms() {
        document.querySelectorAll('form')?.forEach(form => {
            form.addEventListener('submit', function (event) {
                event.preventDefault();

                let data = new FormData(form);
                data.append('formCode', form.id);
                data.append('sessid', BX.bitrix_sessid());

                BX.ajax({
                    url: form.action,
                    method: 'POST',
                    data: Object.fromEntries(data),
                    dataType: 'json',
                    onsuccess: function (r) {
                       if (r?.success) {
                           Modal.open('form-submit-success');
                       } else {
                           if (r && r.errors) {
                               document.querySelector('[data-error-text]').innerHTML = '';
                               r.errors.forEach(error => {
                                   document.querySelector('[data-error-text]').innerHTML += error.message + '<br>';
                               });
                           }

                           Modal.open('form-submit-error');
                       }
                    },
                    onfailure: function() {
                        Modal.open('form-submit-error');
                    }
                });
            });
        });
    }
});
