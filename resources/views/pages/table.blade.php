@extends('template.main')
<link href="assets/global/plugins/datatables/datatables.min.css" type="text/css" rel="stylesheet" />

@section('content-body')

    <!-- BEGIN TAB PORTLET-->
    <div class="portlet light bordered">
        <div class="portlet-title tabbable-line">
            <div class="caption">
                <i class="icon-share font-dark"></i>
                <span class="caption-subject font-dark bold uppercase">Portlet Tabs</span>
            </div>
            <ul class="nav nav-tabs">


                <li class="active">
                    <a href="#portlet_tab1" data-toggle="tab"> Tab 1 </a>
                </li>
                <li>
                    <a href="#portlet_tab2" data-toggle="tab"> Tab 2 </a>
                </li>
                <li>
                    <a href="#portlet_tab3" data-toggle="tab"> Tab 3 </a>
                </li>
            </ul>
        </div>
        <div class="portlet-body">
            <div class="tab-content">
                <div class="tab-pane active" id="portlet_tab1">
                    <table class="table table-bordered table-striped " id="tbl_parents" style="width: 100%;">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Birth Date</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Last Activity</th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="portlet_tab2">
                    <table class="table table-bordered table-striped " id="tbl_spouse" style="width: 100%;">
                        <thead>
                        <th>#</th>
                        <th>Spouse ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Birth Date</th>
                        <th>Marriage Date</th>
                        <th>Status</th>
                        <th>Last Activity</th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="portlet_tab3">
                    <div class="tab-pane" id="portlet_tab2">
                        <table class="table table-bordered table-striped " id="tbl_children" style="width: 100%;">
                            <thead>
                            <th>#</th>
                            <th>Parents ID</th>
                            <th>Spouse ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Birth Date</th>
                            <th>Status</th>
                            <th>Last Activity</th>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END TAB PORTLET-->

    @endsection
<script
    src="https://code.jquery.com/jquery-3.5.1.slim.js"
    integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM="
    crossorigin="anonymous"></script>
<script>
    var API_URL = "{{ route('api.index') }}";
</script>
<script src="{{ asset('js/table/custom.js') }}" type="text/javascript"></script>