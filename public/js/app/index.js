$(document).ready(function () {

    // Initializing datatables
    $('#testRecordTable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "data",
            "type": "POST"
        }
    });

});