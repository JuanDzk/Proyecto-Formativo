// Función para alternar la visibilidad del menú lateral
document.addEventListener('DOMContentLoaded', function () {
    // Toggle del menú lateral
    const menuToggle = document.querySelector('.menu-toggle');
    const expandButton = document.querySelector('.expand-sidebar');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');

    // Función para colapsar el sidebar
    function collapseSidebar() {
        sidebar.classList.add('collapsed');
        mainContent.classList.add('expanded');
        expandButton.style.display = 'flex';
    }
    

    // Función para expandir el sidebar
    function expandSidebar() {
        sidebar.classList.remove('collapsed');
        mainContent.classList.remove('expanded');
        expandButton.style.display = 'none';
    }

    // Evento para el botón de menú en el header
    menuToggle.addEventListener('click', function () {
        if (sidebar.classList.contains('collapsed')) {
            expandSidebar();
        } else {
            collapseSidebar();
        }
    });

    // Evento para el botón de expandir
    expandButton.addEventListener('click', function () {
        expandSidebar();
    });

    // Modo oscuro/claro
    const themeToggle = document.querySelector('.fa-adjust');
    themeToggle.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
        // Guardar preferencia en localStorage
        if (document.body.classList.contains('dark-mode')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });

    // Cargar tema guardado
    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('dark-mode');
    }

    // Funcionalidad de búsqueda
    const searchContainer = document.querySelector('.search-container');

    // Si no hay inputs en el search container, lo creamos dinámicamente
    if (!searchContainer.querySelector('input')) {
        const searchInput = document.createElement('input');
        searchInput.type = 'text';
        searchInput.placeholder = 'Buscar...';
        searchInput.className = 'search-input';

        const searchIcon = document.createElement('i');
        searchIcon.className = 'fas fa-search search-icon';

        searchContainer.innerHTML = '';
        searchContainer.appendChild(searchIcon);
        searchContainer.appendChild(searchInput);
    }

    const searchInput = searchContainer.querySelector('input');

    searchInput.addEventListener('keyup', function () {
        const searchTerm = searchInput.value.toLowerCase();
        // Aquí puedes implementar la lógica de búsqueda específica para tu aplicación
        // Por ejemplo, filtrar elementos en la página actual

        // Ejemplo básico: buscar en elementos de lista
        const menuItems = document.querySelectorAll('.menu li a span');
        menuItems.forEach(item => {
            const text = item.textContent.toLowerCase();
            const listItem = item.closest('li');

            if (text.includes(searchTerm)) {
                listItem.style.display = '';
                if (searchTerm.length > 0) {
                    listItem.classList.add('highlight');
                } else {
                    listItem.classList.remove('highlight');
                }
            } else {
                if (searchTerm.length > 0) {
                    listItem.style.display = 'none';
                } else {
                    listItem.style.display = '';
                    listItem.classList.remove('highlight');
                }
            }
        });
    });
});