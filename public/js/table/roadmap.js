$(document).ready(() => {
            // roadmap laravel developer datatable
            var tbl_laravel_roadmap =  $('#tbl_roadmap').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                buttons: ['copy', 'excel', 'pdf', 'print', 'pdf', 'colvis'],
                'ajax': API_URL + '/roadmaps',
                'columns': [
                    {
                        data: 'module_id'
                    },
                    {
                        data: 'module_name', render: function(data, type, row, meta) 
                        {
                            let link = row.link;
                            return `<a href="${link.url}" target="_blank" >${data}</a>`
                        }
                    },
                    {
                        data: 'level.id', render: function(data, type, row, meta) 
                        {
                            let level = row.level;
                            switch(data)
                            {
                                case 1: 
                                    return `<span class="badge badge-default badge-roundless">${level.name}</span>` 
                                    break;
                                case 2:
                                    return `<span class="badge badge-info badge-roundless">${level.name}</span>` 
                                    break;
                                case 3:
                                    return `<span class="badge badge-warning badge-roundless">${level.name}</span>` 
                                    break;
                                case 4:
                                    return `<span class="badge badge-success badge-roundless">${level.name}</span>` 
                                    break;
                                default:
                                    return `<span class="badge badge-danger badge-roundless">${level.name}</span>` 
                            }
    
                        }
    
                    },
                    {
                        data: 'level.description'
                    },
                    {
                        data: 'updated_at.date', render: function(data, type, row, meta) { return moment(data).format('DD-MM-YYYY HH:mm:ss') }
                    },
                ],
                language:  {
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
                }
            });
})