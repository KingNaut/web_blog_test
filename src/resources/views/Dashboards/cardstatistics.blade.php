@extends('layouts.admin')
@section('title') Card Statistics @endsection
@section('content')
    <!-- begin: PicTime-->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-subheader__main">

            <h3 class="kt-subheader__title">
                Thống Kê                    </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="#" class="kt-subheader__breadcrumbs-link">
                    Thẻ                    </a>
           
            </div>

        </div>
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
                <a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Select dashboard daterange">
                    <span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today:</span>&nbsp;
                    <span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Jul 3</span>
                    <!--<i class="flaticon2-calendar-1"></i>-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--sm">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                            <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" id="check" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" id="Combined-Shape" fill="#000000"></path>
                        </g>
                    </svg>            </a>

            </div>
        </div>
    </div>
    <!-- end: PicTime-->

    <!--begin:: Widgets/Stats-->

    <div class="kt-portlet">
        <div class="kt-portlet__body  kt-portlet__body--fit">
            <div class="row row-no-padding row-col-separator-xl">

                @foreach ($data->revenue as $key =>  $item)

                 <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    {{$item->vendor}}
                                </h4>
                               
                            </div>

                            <span class="kt-widget24__stats kt-font-brand">
                                {{$item->first}}
                            </span>
                        </div>

                        <div class="progress progress--sm">

                            @if($item->is_incr)
                                <div class="progress-bar kt-bg-brand" role="progressbar" style="width: {{$item->percent}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            @else
                                <div class="progress-bar kt-bg-danger" role="progressbar" style="width: {{$item->percent}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            @endif
                            
                        </div>

                        <div class="kt-widget24__action">
                            <span class="kt-widget24__change">
                                @if ($item->is_incr)
                                    Tăng ({{$item->last}})
                                @else
                                    Giảm ({{$item->last}})
                                @endif
                            </span>
                            <span class="kt-widget24__number">
                                {{$item->percent}}%
                            </span>
                        </div>
                    </div>
                </div>

            @endforeach 

            </div>
        </div>
    </div>
    <!--end:: Widgets/Stats-->

  
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon kt-hidden">
                        <i class="la la-gear"></i>
                    </span>
                <h3 class="kt-portlet__head-title">
                    Bảng thống kê chung doanh thu
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">
            <div id="kt_morris_1" style="height:500px;"></div>
        </div>
    </div>

    <!-- end: chart-->

    <!--Begin::Section-->

    <div class="row">
        
        <div class="col-lg-6">
            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--tab">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon kt-hidden">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                           Thống kê doanh thu loại thẻ
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div id="kt_amcharts_12" style="height: 500px;"></div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>

        <div class="col-xl-6">
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Bảng thống kê giao dịch
                        </h3>
                    </div>

                </div>
                <div class="kt-portlet__body kt-portlet__body--fluid">
                    <div class="kt-widget12">
                        <div class="kt-widget12__content">
                            <div class="kt-widget12__item">
                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Giao dịch thành công</span>
                                    <span class="kt-widget12__value">{{$data->transaction->success}} giao dịch</span>
                                </div>

                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Giao dịch đang chờ xử lý</span>
                                    <span class="kt-widget12__value">{{$data->transaction->pending}} giao dịch</span>
                                </div>
                            </div>
                            <div class="kt-widget12__item">
                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Giao dịch thất bại</span>
                                    <span class="kt-widget12__value">{{$data->transaction->fail}} giao dịch</span>
                                </div>
                                <div class="kt-widget12__info">
                                    @if ($data->transaction->is_incr)
                                        <span class="kt-widget12__desc">Tỷ lệ giao dịch thành công (Tăng)</span>
                                    @else
                                        <span class="kt-widget12__desc">Tỷ lệ giao dịch thành công (Giảm)</span>
                                    @endif
                                    
                                    <div class="kt-widget12__progress">
                                        <div class="progress kt-progress--sm">

                                            @if ($data->transaction->is_incr)
                                                <div class="progress-bar kt-bg-brand" role="progressbar" style="width: {{$data->transaction->percent}}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @else 
                                                <div class="progress-bar kt-bg-danger" role="progressbar" style="width: {{$data->transaction->percent}}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            @endif 
                                            
                                        </div>
                                        <span class="kt-widget12__stat">
                                    {{$data->transaction->percent}}%
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-widget12__chart" style="height:250px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas id="kt_chart_order_statistics" width="582" height="188" class="chartjs-render-monitor" style="display: block; width: 777px; height: 251px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Order Statistics-->    </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--tab">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon kt-hidden">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                           Thống kê theo phương thức thanh toán
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div id="kt_amcharts_13" style="height: 500px;"></div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
        <div class="col-lg-6">
            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--tab">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon kt-hidden">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                           Thống kê theo kênh nạp
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div id="kt_amcharts_14" style="height: 500px;"></div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>


@include("layouts.plugins")

<script type="text/javascript">

     var orderStatistics = function() {

        var container = KTUtil.getByID('kt_chart_order_statistics');

        if (!container) {
            return;
        }


        var color = Chart.helpers.color;
        var barChartData = {
            labels: {!! json_encode($data->chart_transaction->key) !!},
            datasets : [
                {
                    fill: true,
                    //borderWidth: 0,
                    backgroundColor: color(KTApp.getStateColor('brand')).alpha(0.6).rgbString(),
                    borderColor : color(KTApp.getStateColor('brand')).alpha(0).rgbString(),
                    
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 12,
                    pointBackgroundColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointBorderColor: Chart.helpers.color('#000000').alpha(0).rgbString(),
                    pointHoverBackgroundColor: KTApp.getStateColor('brand'),
                    pointHoverBorderColor: Chart.helpers.color('#000000').alpha(0.1).rgbString(),

                    data: {!! json_encode($data->chart_transaction->transFirst) !!}
                },
            ]
        };

        var ctx = container.getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: barChartData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: false,
                scales: {
                    xAxes: [{
                        categoryPercentage: 0.35,
                        barPercentage: 0.70,
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Month'
                        },
                        gridLines: false,
                        ticks: {
                            display: true,
                            beginAtZero: true,
                            fontColor: KTApp.getBaseColor('shape', 3),
                            fontSize: 13,
                            padding: 5
                        }
                    }],
                    yAxes: [{
                        categoryPercentage: 0.35,
                        barPercentage: 0.70,
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Value'
                        },
                        gridLines: {
                            color: KTApp.getBaseColor('shape', 2),
                            drawBorder: false,
                            offsetGridLines: false,
                            drawTicks: false,
                            borderDash: [3, 4],
                            zeroLineWidth: 1,
                            zeroLineColor: KTApp.getBaseColor('shape', 2),
                            zeroLineBorderDash: [3, 4]
                        },
                        ticks: {
                            // stepSize: 10,
                            display: true,
                            beginAtZero: false,
                            fontColor: KTApp.getBaseColor('shape', 3),
                            fontSize: 13,
                            // padding: 10
                        }
                    }]
                },
                title: {
                    display: false
                },
                hover: {
                    mode: 'index'
                },
                tooltips: {
                    enabled: true,
                    intersect: false,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10, 
                    caretPadding: 0,
                    displayColors: false,
                    backgroundColor: KTApp.getStateColor('brand'),
                    titleFontColor: '#ffffff', 
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 5,
                        bottom: 5
                    }
                }
            }
        });
    }

    var chartCard = function() {
        // LINE CHART
        new Morris.Line({
            // ID of the element in which to draw the chart.
            element: 'kt_morris_1',
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.
            data: {!! json_encode($data->chart_card->data) !!},
            // The name of the data record attribute that contains x-values.
            xkey: 'key',
            // A list of names of data record attributes that contain y-values.
            ykeys: {!! json_encode($data->chart_card->y_key) !!},
            // Labels for the ykeys -- will be displayed when you hover over the
            // chart.
            labels: {!! json_encode($data->chart_card->y_key) !!},
            lineColors: ['#6e4ff5', '#f6aa33', "#0000ff", "#00b300", "#b30086", "#e67300", "#e67300", "#00cc00", "#cc6600", "#ff531a", "#cc00cc", "#808080", "#00cc99", "#cc0000", "#cc0066"]
        });
    }


        var pieChartCard = function() {
            var chart = AmCharts.makeChart("kt_amcharts_12", {
                "type": "pie",
                "theme": "light",
                "dataProvider": {!! json_encode($data->chart_card_value) !!},
                "valueField": "amount",
                "titleField": "name",
                "balloon": {
                    "fixedPosition": true
                },
                "export": {
                    "enabled": true
                }
            });
        }

        var pieRefClient = function() {
            var chart = AmCharts.makeChart("kt_amcharts_13", {
                "type": "pie",
                "theme": "light",
                "dataProvider": {!! json_encode($data->chart_payment) !!},
                "valueField": "amount",
                "titleField": "name",
                "balloon": {
                    "fixedPosition": true
                },
                "export": {
                    "enabled": true
                }
            });
        }

        var piePaymentMethod = function() {
            var chart = AmCharts.makeChart("kt_amcharts_14", {
                "type": "pie",
                "theme": "light",
                "dataProvider": {!! json_encode($data->chart_ref_client) !!},
                "valueField": "amount",
                "titleField": "name",
                "balloon": {
                    "fixedPosition": true
                },
                "export": {
                    "enabled": true
                }
            });
        }


    jQuery(document).ready(function() {
        chartCard();
        orderStatistics();
        pieChartCard();
        pieRefClient();
        piePaymentMethod();
    });
</script>

@endsection()
