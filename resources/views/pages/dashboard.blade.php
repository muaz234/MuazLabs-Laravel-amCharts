@extends('template.main')
<link href="{{ asset('css/dashboard/custom.css') }}" type="text/css" rel="stylesheet" />
@section('content-body')
    <h1 class="page-title"> Admin Dashboard
{{--        <small>statistics, charts, recent events and reports</small>--}}
    </h1>
    <!-- BEGIN DASHBOARD STATS 1-->
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                <div class="visual">
                    <i class="fa fa-comments"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="{{ $parentsCount }}">0</span>
                    </div>
                    <div class="desc"> Siblings </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                <div class="visual">
                    <i class="fa fa-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="{{ $spouseCount }}">0</span> </div>
                    <div class="desc"> Spouse </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                <div class="visual">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="{{ $childrenCount }}">0</span>
                    </div>
                    <div class="desc"> Children </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                <div class="visual">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="{{$totalCount}}"></span> </div>
                    <div class="desc"> Total People </div>
                </div>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- END DASHBOARD STATS 1-->
    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bar-chart font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Children Count</span>
{{--                        <span class="caption-helper">weekly stats...</span>--}}
                    </div>
                    <div class="actions">

                    </div>
                </div>
                <div class="portlet-body">
                    <div id="childrenChart" ></div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-red-sunglo hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Word Count</span>
{{--                        <span class="caption-helper">monthly stats...</span>--}}
                    </div>
                    <div class="actions">

                    </div>
                </div>
                <div class="portlet-body">
                    <div id="childTagCloud" ></div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-lg-6 col-xs-12 col-sm-12">
            {{--   BEGIN PORTLET         --}}
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i  class="icon-share font-red-sunglo hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Collapsible force-directed tree</span>
                    </div>
                    <div class="actions">

                    </div>
                </div>
                <div class="portlet-body">
                    <div id="childForceDirected"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xs-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-red-sunglo hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Packed circle chart</span>
                    </div>
                    <div class="actions"></div>
                </div>
                <div class="portlet-body">
                    <div id="childPackedCircle"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    var API_URL = "{{ route('api.index') }}";
</script>
<script
    src="https://code.jquery.com/jquery-3.5.1.slim.js"
    integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM="
    crossorigin="anonymous"></script>
<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/material.js"></script>
<script src="https://cdn.amcharts.com/lib/4/plugins/wordCloud.js"></script>
<script src="https://cdn.amcharts.com/lib/4/plugins/forceDirected.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>


<script src="{{ asset('js/dashboard/custom.js') }}" type="text/javascript"></script>
