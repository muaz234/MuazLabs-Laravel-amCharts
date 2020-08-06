$(document).ready(function () {
    $('#tbl_parents').DataTable({


        responsive: true,

        'ajax': API_URL + '/parentsDT',
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
        ]

    });


    $('#tbl_spouse').DataTable({

        responsive: true,
        'ajax': API_URL + '/spouseDT',
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
        ]

    });

    $('#tbl_children').DataTable({
        responsive: true,
        'ajax': API_URL + '/childrenDT',
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
        ]

    });
});

// unused function
function statusTag(data)
{
    if(data == 1)
    {
        var badge =  '<span class="badge badge-primary">Active</span>'
    }
    else
    {
        var badge =  '<span class="badge badge-warning">Inactive</span>'

    }
    return badge;
}

// Date renderer for DataTables from cdn.datatables.net/plug-ins/1.10.21/dataRender/datetime.js
$.fn.dataTable.render.moment = function ( from, to, locale ) {
    // Argument shifting
    if ( arguments.length === 1 ) {
        locale = 'en';
        to = from;
        from = 'YYYY-MM-DD';
    }
    else if ( arguments.length === 2 ) {
        locale = 'en';
    }

    return function ( d, type, row ) {
        if (! d) {
            return type === 'sort' || type === 'type' ? 0 : d;
        }

        var m = window.moment( d, from, locale, true );

        // Order and type get a number value from Moment, everything else
        // sees the rendered value
        return m.format( type === 'sort' || type === 'type' ? 'x' : to );
    };
};
