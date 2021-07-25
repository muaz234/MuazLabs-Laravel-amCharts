$(document).ready(function () {
    const malay_language = {
        "sEmptyTable":      "Tiada data",
        "sInfo":            "Paparan dari _START_ hingga _END_ dari _TOTAL_ rekod",
        "sInfoEmpty":       "Paparan 0 hingga 0 dari 0 rekod",
        "sInfoFiltered":    "(Ditapis dari jumlah _MAX_ rekod)",
        "sInfoPostFix":     "",
        "sInfoThousands":   ",",
        "sLengthMenu":      "Papar _MENU_ rekod",
        "sLoadingRecords":  "Diproses...",
        "sProcessing":      "Sedang diproses...",
        "sSearch":          "Carian:",
        "sZeroRecords":      "Tiada padanan rekod yang dijumpai.",
        "oPaginate": {
            "sFirst":        "Pertama",
            "sPrevious":     "Sebelum",
            "sNext":         "Seterusnya",
            "sLast":         "Akhir"
        },
        "oAria": {
            "sSortAscending":  ": diaktifkan kepada susunan lajur menaik",
            "sSortDescending": ": diaktifkan kepada susunan lajur menurun"
        }
    };

    var export_buttons = ['copy', 'excel', 'pdf', 'print', 'pdf', 'colvis'];

   var tbl_parents =  $('#tbl_parents').DataTable({
        responsive: true,
        'ajax': API_URL + '/parentsDT',
        'buttons': export_buttons,
        'columns': [
            {
                data: 'id'
            },
            {
                data: 'name'
            },
            {
                data: 'age'
            },
            {
                data: 'birth_date', render: function(data, type, row, meta) { return moment(data).startOf('day').fromNow() }
            },
            {
                data: 'location'
            },
            {
                data: 'status', render: function(data,row, type, meta){ return (data == 1) ? '<span class="badge badge-primary">Active</span>' : '<span class="badge badge-warning">Inactive</span>' }
            },
            {
                data: 'last_activity', render: function(data, type, row, meta) { return moment(data).startOf('hour').fromNow() }
            },
        ],
        language: malay_language

    });

     new $.fn.dataTable.Buttons( tbl_parents, {
        buttons: export_buttons
    } );
    tbl_parents.buttons().container()
        .insertBefore('#tbl_parents');


    var tbl_spouse = $('#tbl_spouse').DataTable({
        responsive: true,
        'ajax': API_URL + '/spouseDT',
        'buttons': export_buttons,
        'columns': [
            {
                data: 'id'
            },
            {
                data: 'parent_id'
            },
            {
                data: 'name'
            },
            {
                data: 'age'
            },
            {
                data: 'birth_date'
            },
            {
                data: 'marriage_date'
            },
            {
                data: 'status', render: function(data,row, type, meta){ return (data == 1) ? '<span class="badge badge-primary">Active</span>' : '<span class="badge badge-warning">Inactive</span>' }
            },
            {
                data: 'last_activity', render: function(data, type, row, meta) { return moment(data).startOf('hour').fromNow() }
            },
        ],
        language: malay_language


    });

    new $.fn.dataTable.Buttons( tbl_spouse, {
        buttons: export_buttons
    } );
    tbl_spouse.buttons().container()
        .insertBefore('#tbl_spouse');


   var tbl_children =  $('#tbl_children').DataTable({
        responsive: true,
        'ajax': API_URL + '/childrenDT',
        'buttons': export_buttons,
        'columns': [
            {
                data: 'id'
            },
            {
                data: 'parents_id'
            },
            {
                data: 'spouse_id'
            },
            {
                data: 'name'
            },
            {
                data: 'age'
            },
            {
                data: 'birth_date'
            },
            {
                data: 'status', render: function(data,row, type, meta){ return (data == 1) ? '<span class="badge badge-primary">Active</span>' : '<span class="badge badge-warning">Inactive</span>' }
            },
            {
                data: 'last_activity', render: function(data, type, row, meta) { return moment(data).startOf('hour').fromNow() }
            },
        ],
        language: malay_language


    });
    // add buttons to datatable
    new $.fn.dataTable.Buttons( tbl_children, {
        buttons: export_buttons
    } );
    tbl_children.buttons().container()
        .insertBefore('#tbl_children');

      
        // add buttons to datatable
        // new $.fn.dataTable.Buttons( tbl_laravel_roadmap, {
        //     buttons: export_buttons
        // } );
        // tbl_laravel_roadmap.buttons().container()
        //     .insertBefore('#tbl_roadmap');

});














