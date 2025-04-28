document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');
    const closeSidebarButton = document.getElementById('close-sidebar');

    // Toggle sidebar visibility
    menuButton.addEventListener('click', function() {
        sidebar.classList.toggle('active'); // Toggle the active class
    });

    // Close sidebar when back button is clicked
    if (closeSidebarButton) {
        closeSidebarButton.addEventListener('click', function() {
            sidebar.classList.remove('active'); // Remove the active class to hide the sidebar
        });
    }
});