
function initSectionNav() {
    const nav = document.querySelector('.project-sections__nav');
    console.log(nav);
    if (!nav) return;

    const links = [
        ...nav.querySelectorAll('.project-sections__nav-link[href]'),
    ];

    const sections = links
        .map((link) => {
            const id = link.getAttribute('href')?.slice(1);
            return id ? document.getElementById(id) : null;
        })
        .filter(Boolean);

    if (!sections.length) return;

    const setActive = (id) => {
        links.forEach((link) => {
            const isActive = link.getAttribute('href') === `#${id}`;

            link.classList.toggle('project-sections__nav-link--active', isActive);
        });
    };

    const updateActive = () => {
        const offset = 160;
        let currentId = sections[0].id;

        sections.forEach((section) => {
            if (section.getBoundingClientRect().top <= offset) {
                currentId = section.id;
            }
        });

        setActive(currentId);
    };

    updateActive();
    window.addEventListener('scroll', updateActive, { passive: true });
}

initSectionNav();
