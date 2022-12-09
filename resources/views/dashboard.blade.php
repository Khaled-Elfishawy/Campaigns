@extends('layouts.app')
@section('title')
Riverx Network
@endsection
@if(auth()->user()->type != 'sales')
@section('main')
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <!--begin::Col-->
                    <div class="col-sm-6 mb-5 mb-xl-6">
                        <div class="card card-bordered">
                            <div class="card-body">
                                <canvas id="kt_chartjs_1" class="mh-400px"></canvas>
                            </div>
                        </div>      
                    </div>
                <!--end::Col-->  
                <!--end::Col-->
                <!--begin::Col-->
                    <div class="col-sm-6 mb-5 mb-xl-6">
                        <div class="card card-bordered">
                            <div class="card-body">
                                <div id="kt_amcharts_3" style="height: 500px;"></div>
                            </div>
                        </div>      
                    </div>
                <!--end::Col-->                                
            </div>
            <!--end::Row-->



        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->                    
</div>
<!--end::Content wrapper-->
@endsection
@php
    $camps = \App\Models\Campaign::all();
    $array= [];
    foreach($camps as $camp){
        $array[] = ['value'=> \App\Models\Lead::where('campaign',$camp->id)->count() ,'category'=>$camp->name];
    }
@endphp
@section('script')
<script type="text/javascript">
    am5.ready(function () {
        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("kt_amcharts_3");

        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
            am5themes_Animated.new(root)
        ]);

        // Create chart
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
        var chart = root.container.children.push(am5percent.PieChart.new(root, {
            layout: root.verticalLayout
        }));

        // Create series
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
        var series = chart.series.push(am5percent.PieSeries.new(root, {
            alignLabels: true,
            calculateAggregates: true,
            valueField: "value",
            categoryField: "category"
        }));

        series.slices.template.setAll({
            strokeWidth: 3,
            stroke: am5.color(0xffffff)
        });

        series.labelsContainer.set("paddingTop", 30)

        // Set up adapters for variable slice radius
        // https://www.amcharts.com/docs/v5/concepts/settings/adapters/
        series.slices.template.adapters.add("radius", function (radius, target) {
            var dataItem = target.dataItem;
            var high = series.getPrivate("valueHigh");

            if (dataItem) {
                var value = target.dataItem.get("valueWorking", 0);
                return radius * value / high
            }
            return radius;
        });

        // Set data
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
        series.data.setAll({!! json_encode($array) !!});

        // Create legend
        // https://www.amcharts.com/docs/v5/charts/percent-charts/legend-percent-series/
        var legend = chart.children.push(am5.Legend.new(root, {
            centerX: am5.p50,
            x: am5.p50,
            marginTop: 15,
            marginBottom: 15
        }));

        legend.data.setAll(series.dataItems);

        // Play initial series animation
        // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
        series.appear(1000, 100);

    }); // end am5.ready()   
</script> 
@php
    $array_month_all = [
        '01'=>0,
        '02'=>0,
        '03'=>0,
        '04'=>0,
        '05'=>0,
        '06'=>0,
        '07'=>0,
        '08'=>0,
        '09'=>0,
        '10'=>0,
        '11'=>0,
        '12'=>0,
    ];
    $array_month_ftd = [
        '01'=>0,
        '02'=>0,
        '03'=>0,
        '04'=>0,
        '05'=>0,
        '06'=>0,
        '07'=>0,
        '08'=>0,
        '09'=>0,
        '10'=>0,
        '11'=>0,
        '12'=>0,
    ];
    $data_all_m = \App\Models\Lead::select(\DB::raw('count(id) as `data`'),\DB::raw("(DATE_FORMAT(created_at, '%m')) as month_year"))
            ->groupBy(\DB::raw("DATE_FORMAT(created_at, '%m-%Y')"))
            ->get();
    $data_ftd_m = \App\Models\Lead::where('status','FTD')->select(\DB::raw('count(id) as `data`'),\DB::raw("(DATE_FORMAT(created_at, '%m')) as month_year"))
            ->groupBy(\DB::raw("DATE_FORMAT(created_at, '%m-%Y')"))
            ->get();
    $array_m = [];
    foreach($data_all_m as $datam){
        $array_month_all[$datam['month_year']] = $datam['data'];
    }
    $array_ftd = [];
    foreach($data_ftd_m as $dataftd){
        $array_month_ftd[$dataftd['month_year']] = $dataftd['data'];
    }
@endphp
<script type="text/javascript">
var ctx = document.getElementById('kt_chartjs_1');
// Define colors
var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
var dangerColor = KTUtil.getCssVariableValue('--kt-danger');
var successColor = KTUtil.getCssVariableValue('--kt-success');
// Define fonts
var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');
// Chart labels
const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

// Chart data
const data = {
    labels: labels,
    datasets: [
                {
                    label: 'All Leads',
                    data: {!! json_encode( array_values($array_month_all)) !!},
                    backgroundColor: primaryColor,
                    stack: 'Stack 0',
                },
                {
                    label: 'FTD',
                    data: {!! json_encode( array_values($array_month_ftd)) !!},
                    backgroundColor: dangerColor,
                    stack: 'Stack 1',
                }
    ]
};

// Chart config
const config = {
    type: 'bar',
    data: data,
    options: {
        plugins: {
            title: {
                display: false,
            }
        },
        responsive: true,
        interaction: {
            intersect: false,
        },
        scales: {
            x: {
                stacked: true,
            },
            y: {
                stacked: true
            }
        }
    },
    defaults:{
        global: {
            defaultFont: fontFamily
        }
    }
};

// Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
var myChart = new Chart(ctx, config);    
</script>
@endsection
@endif