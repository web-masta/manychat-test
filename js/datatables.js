window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('reportTable');
    
    if (datatablesSimple) {
        let table = new simpleDatatables.DataTable(datatablesSimple);
        let columns = table.columns();
        columns.sort(2, 'desc')
    }
});
