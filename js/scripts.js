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

var createEdit = document.getElementById('create-edit')
createEdit.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget
    var depTitle = button.getAttribute('data-dep-title')
    var modalTitle = createEdit.querySelector('.modal-title')
    var inputName = createEdit.querySelector('input[name=\'name\']')
    var inputId = createEdit.querySelector('input[name=\'id\']')
    var depId = button.getAttribute('data-dep-id')
    var action = button.getAttribute('data-action')
    var form = document.getElementById('create-edit-form')
    
    // Сотрудники
    var lastname = button.getAttribute('data-lastname')
    var gender = button.getAttribute('data-gender')
    var birthday = button.getAttribute('data-birthday')
    var salary = button.getAttribute('data-salary')
    var department = button.getAttribute('data-department')
    var project = button.getAttribute('data-project')
    
    if(action === 'edit') {
        inputName.value = depTitle
        form.action = form.action + '/update'
        inputId.value = depId
    
        if(createEdit.querySelector('input[name=\'lastname\']')) {
            createEdit.querySelector('input[name=\'lastname\']').value = lastname
            document.getElementById('gender').value = gender
            createEdit.querySelector('input[name=\'birthday\']').value = birthday
            createEdit.querySelector('input[name=\'salary\']').value = salary
            document.getElementById('department_id').value = department
            document.getElementById('project_id').value = project
        }
    }
    if (action === 'create') {
        inputName.value = ''
        form.action = form.action + '/create'
    }
    
    modalTitle.textContent = depTitle
    
    if (depId) {
        inputName.value = depTitle
    } else {
        inputName.value = ''
    }
})

var depDeleteModal = document.getElementById('delete-modal')
depDeleteModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget
    var deleteTitle = button.getAttribute('data-dep-title')
    var depTitleSelector = depDeleteModal.querySelector('.delete-title')
    var depId = button.getAttribute('data-id')
    var link = depDeleteModal.querySelector('.delete-link')
    link.href = link.href +  depId
    
    depTitleSelector.textContent = deleteTitle
})

const getDatePickerTitle = elem => {
    // From the label or the aria-label
    const label = elem.nextElementSibling;
    let titleText = '';
    if (label && label.tagName === 'LABEL') {
        titleText = label.textContent;
    } else {
        titleText = elem.getAttribute('aria-label') || '';
    }
    return titleText;
}

const elems = document.querySelectorAll('.datepicker_input');
for (const elem of elems) {
    const datepicker = new Datepicker(elem, {
        'format': 'yyyy-mm-dd', // UK format
        title: getDatePickerTitle(elem)
    });
}