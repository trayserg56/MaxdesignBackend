
document.addEventListener('DOMContentLoaded', () => {
    window.custom = {
        replaceWith: replaceWith,
        replaceWithDeletedNotFound: false
    };

    initPaginationButtons();
    initLazyPagination();
    initFilterButtons();
    initForms();

    function replaceWith(response, selectorAttribute = 'data-replace', deleteNotFound = false) {
        document.querySelectorAll(`[${selectorAttribute}]`).forEach(element => {
            let replace = response.querySelector(`[${selectorAttribute}=${element.getAttribute(selectorAttribute)}]`);
            if (replace) {
                element.replaceWith(replace);
                window.custom.replaceWithDeletedNotFound = false;
            } else if (deleteNotFound) {
                element.remove();
                window.custom.replaceWithDeletedNotFound = true;
            }
        });
    }

    function initPaginationButtons() {
        document.querySelector('[data-pagination-type]:not([data-lazy])')?.addEventListener('click', function () {
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
                        if (paginationContainer === 'projects-main') {
                            document.querySelector(selector)?.after(
                                r.querySelector(selector)
                            );
                        } else {
                            document.querySelector(selector)?.append(
                                ...r.querySelector(selector).children
                            );
                        }

                        replaceWith(r, 'data-pagination-container-code', true);
                        document.querySelector(`[data-pagination-container-code=${paginationContainer}]:disabled`)?.remove();

                        if (window.custom.replaceWithDeletedNotFound) {
                            document.querySelector('.home-project__more')?.remove();
                        }
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
                           form.reset();
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

    function initLazyPagination() {
        const targetElement = document.querySelector('[data-pagination-type][data-lazy]');

        if (!targetElement) {
            return;
        }

        const parser = new DOMParser();
        const paginationContainer = targetElement.dataset.paginationContainerCode;

        const handleVisibilityChange = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    BX.ajax({
                        url: targetElement.dataset.url,
                        method: 'GET',
                        onsuccess: function (r) {
                            const selector = `[data-pagination-container=${paginationContainer}]`;
                            r = parser.parseFromString(r, 'text/html');

                            if (paginationContainer === 'projects') {
                                document.querySelector(selector)?.after(
                                    r.querySelector(selector)
                                );
                            } else {
                                document.querySelector(selector)?.append(
                                    ...r.querySelector(selector).children
                                );
                            }

                            replaceWith(r, 'data-pagination-container-code', true);
                            initLazyPagination();

                            if (window.custom.replaceWithDeletedNotFound) {
                                document.querySelector('.home-project__more')?.remove();
                            }
                        }
                    });
                    observer.unobserve(entry.target);
                }
            });
        };

        const observer = new IntersectionObserver(handleVisibilityChange, {
            threshold: 0.1 // Triggers when 10% of the element is visible
        });

        if (targetElement) {
            observer.observe(targetElement);
        }
    }
});
