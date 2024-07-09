
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('#navbar a');

        function removeActiveClass() {
            links.forEach(link => {
                link.classList.remove('active');
            });
        }

        links.forEach(link => {
            link.addEventListener('click', function() {
                removeActiveClass();
                link.classList.add('active');
            });
        });

        // Check if the current page matches any of the links and set 'active' class accordingly
        const currentPage = window.location.pathname.split('/').pop();
        links.forEach(link => {
            const href = link.getAttribute('href');
            if (href && currentPage === href.split('/').pop()) {
                link.classList.add('active');
            }
        });
    });
    
