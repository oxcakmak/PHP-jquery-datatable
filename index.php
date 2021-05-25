<?php 
$lang['t_datable_language_info'] = '_TOTAL_ records _START_ of _END_ record showing.';
$lang['t_datable_language_info_empty'] = 'There are no records to show.';
$lang['t_datable_language_loading_records'] = 'Loading records.';
$lang['t_datable_language_length_menu'] = 'Show _MENU_ record on page';
$lang['t_datable_language_zero_records'] = 'No records / Table is empty';
$lang['t_datable_language_search'] = 'Search';
$lang['t_datable_language_info_filtered'] = '(Filtered from total _MAX_ records)';
$lang['t_datable_language_paginate_first'] = 'First';
$lang['t_datable_language_paginate_previous'] = 'Previous';
$lang['t_datable_language_paginate_next'] = 'Next';
$lang['t_datable_language_paginate_last'] = 'Last';
$lang['t_view_all'] = 'View All';
echo '<!DOCTYPE html>
<html>
<head>
<base href="http://localhost/">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Simple Datatable Example</title>
<link rel="stylesheet" href="datatables/dataTables.bootstrap.min.css" />
</head>
<body>
  <div class="card">
    <div class="card-body">
        <h4>Data Table</h4>
        <p>Example</p>
        <table id="data-table" class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Fullname</th>
                    <th>Username</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
</body></html>
<script type="text/javascript" src="path/to/jquery.min.js"></script>
<script type="text/javascript" src="path/to/bootstrap.min.js"></script>
<script type="text/javascript" src="datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="datatables/dataTables.bootstrap.min.js"></script>
<script>$.fn.dataTable.ext.errMode = "none";
$("#data-table").DataTable({
    language: {
        info: "'.$lang['t_datable_language_info'].'",
        infoEmpty: "'.$lang['t_datable_language_info_empty'].'",
        loadingRecords: "'.$lang['t_datable_language_loading_records'].'",
        lengthMenu: "'.$lang['t_datable_language_length_menu'].'",
        zeroRecords: "'.$lang['t_datable_language_zero_records'].'",
        search: "'.$lang['t_datable_language_search'].'",
        infoFiltered: "'.$lang['t_datable_language_info_filtered'].'",
        paginate: {
            first: "'.$lang['t_datable_language_paginate_first'].'",
            previous: "'.$lang['t_datable_language_paginate_previous'].'",
            next: "'.$lang['t_datable_language_paginate_next'].'",
            last: "'.$lang['t_datable_language_paginate_last'].'"
        },
    },
    "ajax": {
        url: "path/to/ajax(htaccess_link-ex: http://localhost/ajax)",
        type: "POST",
        data: {getUsers:"getUsers"},
        dataSrc: ""
    },
    columns: [
        {"data": "id"},
        {"data": "fullname"},
        {"data": "username"},
    ],
    responsive: true,
    "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
        var index = iDisplayIndex + 1;
        $("td:eq(0)",nRow).html(index);
        return nRow;
     },
     "lengthMenu": [[10, 50, 100, 500, 100, -1], [10, 50, 100, 500, 100, "'.$lang['t_view_all'].'"]]
});
</script>';
