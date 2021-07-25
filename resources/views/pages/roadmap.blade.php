<?php $page = "laravel_roadmap_path" ?> 
@extends('template.main')
<link href="{{asset('assets/global/plugins/datatables/datatables.min.css')}}" type="text/css" rel="stylesheet" />

@section('content-body')
{{--<br>--}}
<h1 class="page-title"> Roadmap for Laravel developers
{{--    <small>metronic and bootstrap custom navbars, tabs, pills, accordions and resizable tabs based on bootstrap-tabdrop plugin</small>--}}
</h1>

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN TAB PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title tabbable-line">
                <div class="caption">
                    <i class="icon-share font-dark"></i>
                    <span class="caption-subject font-dark bold uppercase">Roadmap</span>
                </div>
            </div>
            <div class="portlet-body">
                {{-- <div class="tab-content"> --}}
                    {{-- <div class="tab-pane active"> --}}
                        <table class="table table-bordered table-striped " id="tbl_roadmap" style="width: 100%;">
                            <thead>
                            <th>#</th>
                            <th>Topic</th>
                            {{-- <th>Link</th> --}}
                            <th>Level</th>
                            <th>Description</th>
                            {{-- <th>Status</th> --}}
                            <th>Last Activity</th>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    {{-- </div> --}}
                {{-- </div> --}}
            </div>
            <!-- END TAB PORTLET-->

        </div>
</div>

    @endsection
<script
    src="https://code.jquery.com/jquery-3.5.1.slim.js"
    integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM="
    crossorigin="anonymous"></script>
<script>
    var API_URL = "{{ route('api.index') }}";
</script>
<script src="{{ asset('js/table/roadmap.js') }}" type="text/javascript"></script>
