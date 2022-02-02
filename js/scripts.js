window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }
});

var departmentModal = document.getElementById('departmentModal')
departmentModal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var editTitle = button.getAttribute('data-dep-title')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = departmentModal.querySelector('.modal-title')
    //var modalBodyInput = departmentModal.querySelector('.modal-body input')
    
    modalTitle.textContent = editTitle
    //modalBodyInput.value = recipient
})

var depDeleteModal = document.getElementById('depDeleteModal')
depDeleteModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget
    var deleteTitle = button.getAttribute('data-dep-title')
    var depTitleSelector = depDeleteModal.querySelector('.delete-title')
    
    depTitleSelector.textContent = deleteTitle
})