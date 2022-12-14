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
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <!--begin::Card widget 3-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #F1416C;background-image:url('assets/media/svg/shapes/wave-bg-red.svg')">
                            <!--begin::Header-->
                            <div class="card-header pt-5 mb-3">
                                <!--begin::Icon-->
                                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
                                    <i class="fonticon-incoming-call text-white fs-2qx lh-0"></i>
                                </div>
                                <!--end::Icon-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end mb-3">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <span class="fs-4hx text-white fw-bold me-6">{{\App\Models\Lead::where('status','noanswer')->count()}}</span>
                                    <div class="fw-bold fs-6 text-white">
                                        <span class="d-block">No Answer</span>
                                        <span class="">Calls</span>
                                    </div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 3-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <!--begin::Card widget 3-->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color: #7239EA;background-image:url('assets/media/svg/shapes/wave-bg-purple.svg')">
                            <!--begin::Header-->
                            <div class="card-header pt-5 mb-3">
                                <!--begin::Icon-->
                                <div class="d-flex flex-center rounded-circle h-80px w-80px" style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                                    <i class="fonticon-outgoing-call text-white fs-2qx lh-0"></i>
                                </div>
                                <!--end::Icon-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end mb-3">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <span class="fs-4hx text-white fw-bold me-6">{{\App\Models\Lead::where('status','high')->count()}}</span>
                                    <div class="fw-bold fs-6 text-white">
                                        <span class="d-block">Intersted</span>
                                        <span class="">Clients</span>
                                    </div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 3-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Table widget 15-->
                        <div class="card card-flush h-lg-100">
                            <!--begin::Header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Projects Stats</span>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                    <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                                        <!--begin::Display range-->
                                        <div class="text-gray-600 fw-bold">9 Dec 2022</div>
                                        <!--end::Display range-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span class="svg-icon svg-icon-1 ms-2 me-0">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor"></path>
                                                <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor"></path>
                                                <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Daterangepicker-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-6">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                <th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
                                                <th class="p-0 pb-3 min-w-100px text-end">CALLS</th>
                                                <th class="p-0 pb-3 min-w-100px text-end">CRP RANK</th>
                                                <th class="p-0 pb-3 min-w-150px text-end pe-12">PROGRESS</th>
                                                <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-3.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="../../demo1/dist/apps/projects/users.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                                            <span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">245</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">$78.34%</span>
                                                </td>
                                                <td class="text-end pe-12">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->9.2%</span>
                                                    <!--end::Label-->
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_15_chart_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsadp8sf0x" class="apexcharts-canvas apexchartsadp8sf0x apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg1852" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1854" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1853"><clipPath id="gridRectMaskadp8sf0x"><rect id="SvgjsRect1858" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskadp8sf0x"></clipPath><clipPath id="nonForecastMaskadp8sf0x"></clipPath><clipPath id="gridRectMarkerMaskadp8sf0x"><rect id="SvgjsRect1859" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1866" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1867" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG1883" class="apexcharts-grid"><g id="SvgjsG1884" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1886" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1887" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1888" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1889" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1890" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1891" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1892" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1893" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1894" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1895" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1896" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1885" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1898" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1897" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1860" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1861" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1864" d="M 0 50L 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664C 92.25 39.166666666666664 92.25 39.166666666666664 92.25 50M 92.25 39.166666666666664z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskadp8sf0x)" pathTo="M 0 50L 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664C 92.25 39.166666666666664 92.25 39.166666666666664 92.25 50M 92.25 39.166666666666664z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath1865" d="M 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskadp8sf0x)" pathTo="M 0 44.166666666666664C 2.483653846153846 44.166666666666664 4.612500000000001 41.666666666666664 7.096153846153847 41.666666666666664C 9.579807692307693 41.666666666666664 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 32.5 21.28846153846154 32.5C 23.772115384615386 32.5 25.90096153846154 45 28.384615384615387 45C 30.868269230769233 45 32.997115384615384 40.83333333333333 35.48076923076923 40.83333333333333C 37.96442307692308 40.83333333333333 40.09326923076924 45.833333333333336 42.57692307692308 45.833333333333336C 45.06057692307692 45.833333333333336 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 40.83333333333333 63.86538461538462 40.83333333333333C 66.34903846153847 40.83333333333333 68.47788461538462 35 70.96153846153847 35C 73.44519230769231 35 75.57403846153846 44.166666666666664 78.0576923076923 44.166666666666664C 80.54134615384615 44.166666666666664 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 39.166666666666664 92.25 39.166666666666664" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG1862" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1863" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1899" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1900" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1901" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1902" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1903" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1882" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1855" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                        <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-10.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="../../demo1/dist/apps/projects/users.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
                                                            <span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">725</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">$63.83%</span>
                                                </td>
                                                <td class="text-end pe-12">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-danger fs-base">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                                            <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->0.4%</span>
                                                    <!--end::Label-->
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_15_chart_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexchartszrddimak" class="apexcharts-canvas apexchartszrddimak apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg1904" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1906" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1905"><clipPath id="gridRectMaskzrddimak"><rect id="SvgjsRect1910" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskzrddimak"></clipPath><clipPath id="nonForecastMaskzrddimak"></clipPath><clipPath id="gridRectMarkerMaskzrddimak"><rect id="SvgjsRect1911" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1918" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1919" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG1935" class="apexcharts-grid"><g id="SvgjsG1936" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1938" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1939" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1940" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1941" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1942" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1943" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1944" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1945" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1946" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1947" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1948" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1937" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1950" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1949" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1912" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1913" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1916" d="M 0 50L 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzrddimak)" pathTo="M 0 50L 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath1917" d="M 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664" fill="none" fill-opacity="1" stroke="#f1416c" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzrddimak)" pathTo="M 0 35.83333333333333C 2.483653846153846 35.83333333333333 4.612500000000001 45.833333333333336 7.096153846153847 45.833333333333336C 9.579807692307693 45.833333333333336 11.708653846153847 30.833333333333332 14.192307692307693 30.833333333333332C 16.67596153846154 30.833333333333332 18.804807692307694 48.333333333333336 21.28846153846154 48.333333333333336C 23.772115384615386 48.333333333333336 25.90096153846154 32.5 28.384615384615387 32.5C 30.868269230769233 32.5 32.997115384615384 42.5 35.48076923076923 42.5C 37.96442307692308 42.5 40.09326923076924 35.83333333333333 42.57692307692308 35.83333333333333C 45.06057692307692 35.83333333333333 47.18942307692308 30.833333333333332 49.67307692307693 30.833333333333332C 52.156730769230776 30.833333333333332 54.28557692307693 46.666666666666664 56.769230769230774 46.666666666666664C 59.252884615384616 46.666666666666664 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 42.5 70.96153846153847 42.5C 73.44519230769231 42.5 75.57403846153846 35.83333333333333 78.0576923076923 35.83333333333333C 80.54134615384615 35.83333333333333 82.67019230769232 32.5 85.15384615384616 32.5C 87.6375 32.5 89.76634615384616 44.166666666666664 92.25 44.166666666666664" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG1914" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1915" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1951" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1952" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1953" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1954" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1955" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1934" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1907" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                        <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-9.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="../../demo1/dist/apps/projects/users.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                            <span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">173</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">$92.56%</span>
                                                </td>
                                                <td class="text-end pe-12">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->9.2%</span>
                                                    <!--end::Label-->
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_15_chart_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartsh5on7unc" class="apexcharts-canvas apexchartsh5on7unc apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg1956" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1958" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1957"><clipPath id="gridRectMaskh5on7unc"><rect id="SvgjsRect1962" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskh5on7unc"></clipPath><clipPath id="nonForecastMaskh5on7unc"></clipPath><clipPath id="gridRectMarkerMaskh5on7unc"><rect id="SvgjsRect1963" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1970" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1971" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG1987" class="apexcharts-grid"><g id="SvgjsG1988" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1990" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1991" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1992" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1993" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1994" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1995" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1996" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1997" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1998" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1999" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2000" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1989" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2002" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2001" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1964" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1965" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1968" d="M 0 50L 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskh5on7unc)" pathTo="M 0 50L 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664C 92.25 44.166666666666664 92.25 44.166666666666664 92.25 50M 92.25 44.166666666666664z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath1969" d="M 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskh5on7unc)" pathTo="M 0 48.333333333333336C 2.483653846153846 48.333333333333336 4.612500000000001 30 7.096153846153847 30C 9.579807692307693 30 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 35.83333333333333 21.28846153846154 35.83333333333333C 23.772115384615386 35.83333333333333 25.90096153846154 44.166666666666664 28.384615384615387 44.166666666666664C 30.868269230769233 44.166666666666664 32.997115384615384 48.333333333333336 35.48076923076923 48.333333333333336C 37.96442307692308 48.333333333333336 40.09326923076924 40 42.57692307692308 40C 45.06057692307692 40 47.18942307692308 30 49.67307692307693 30C 52.156730769230776 30 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 30 63.86538461538462 30C 66.34903846153847 30 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 40 85.15384615384616 40C 87.6375 40 89.76634615384616 44.166666666666664 92.25 44.166666666666664" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG1966" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1967" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2003" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2004" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2005" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2006" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2007" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1986" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1959" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                        <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-2.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="../../demo1/dist/apps/projects/users.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                            <span class="text-gray-400 fw-semibold d-block fs-7">Kiribatir</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">642</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">$64.02%</span>
                                                </td>
                                                <td class="text-end pe-12">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-success fs-base">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->9.2%</span>
                                                    <!--end::Label-->
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_15_chart_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success" style="min-height: 50px;"><div id="apexchartshpqv0ls4" class="apexcharts-canvas apexchartshpqv0ls4 apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2008" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2010" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2009"><clipPath id="gridRectMaskhpqv0ls4"><rect id="SvgjsRect2014" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskhpqv0ls4"></clipPath><clipPath id="nonForecastMaskhpqv0ls4"></clipPath><clipPath id="gridRectMarkerMaskhpqv0ls4"><rect id="SvgjsRect2015" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2022" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2023" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG2039" class="apexcharts-grid"><g id="SvgjsG2040" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2042" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2043" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2044" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2045" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2046" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2047" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2048" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2049" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2050" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2051" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2052" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2041" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2054" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2053" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2016" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2017" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2020" d="M 0 50L 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333C 92.25 35.83333333333333 92.25 35.83333333333333 92.25 50M 92.25 35.83333333333333z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskhpqv0ls4)" pathTo="M 0 50L 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333C 92.25 35.83333333333333 92.25 35.83333333333333 92.25 50M 92.25 35.83333333333333z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath2021" d="M 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333" fill="none" fill-opacity="1" stroke="#50cd89" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskhpqv0ls4)" pathTo="M 0 30C 2.483653846153846 30 4.612500000000001 47.5 7.096153846153847 47.5C 9.579807692307693 47.5 11.708653846153847 45.833333333333336 14.192307692307693 45.833333333333336C 16.67596153846154 45.833333333333336 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 44.166666666666664 35.48076923076923 44.166666666666664C 37.96442307692308 44.166666666666664 40.09326923076924 29.166666666666664 42.57692307692308 29.166666666666664C 45.06057692307692 29.166666666666664 47.18942307692308 38.33333333333333 49.67307692307693 38.33333333333333C 52.156730769230776 38.33333333333333 54.28557692307693 45.833333333333336 56.769230769230774 45.833333333333336C 59.252884615384616 45.833333333333336 61.38173076923077 38.33333333333333 63.86538461538462 38.33333333333333C 66.34903846153847 38.33333333333333 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 43.333333333333336 78.0576923076923 43.333333333333336C 80.54134615384615 43.333333333333336 82.67019230769232 45.833333333333336 85.15384615384616 45.833333333333336C 87.6375 45.833333333333336 89.76634615384616 35.83333333333333 92.25 35.83333333333333" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG2018" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG2019" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2055" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2056" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2057" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2058" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2059" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2038" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2011" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                        <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="assets/media/avatars/300-1.jpg" class="" alt="">
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="../../demo1/dist/apps/projects/users.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph Edwards</a>
                                                            <span class="text-gray-400 fw-semibold d-block fs-7">Iceland</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">329</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">$89.31%</span>
                                                </td>
                                                <td class="text-end pe-12">
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light-danger fs-base">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                    <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                                            <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->0.4%</span>
                                                    <!--end::Label-->
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_15_chart_5" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger" style="min-height: 50px;"><div id="apexcharts3iqf12oi" class="apexcharts-canvas apexcharts3iqf12oi apexcharts-theme-light" style="width: 92.25px; height: 50px;"><svg id="SvgjsSvg2060" width="92.25" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2062" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2061"><clipPath id="gridRectMask3iqf12oi"><rect id="SvgjsRect2066" width="98.25" height="52" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask3iqf12oi"></clipPath><clipPath id="nonForecastMask3iqf12oi"></clipPath><clipPath id="gridRectMarkerMask3iqf12oi"><rect id="SvgjsRect2067" width="96.25" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2074" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2075" class="apexcharts-xaxis-texts-g" transform="translate(0, 4)"></g></g><g id="SvgjsG2091" class="apexcharts-grid"><g id="SvgjsG2092" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2094" x1="0" y1="0" x2="92.25" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2095" x1="0" y1="5" x2="92.25" y2="5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2096" x1="0" y1="10" x2="92.25" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2097" x1="0" y1="15" x2="92.25" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2098" x1="0" y1="20" x2="92.25" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2099" x1="0" y1="25" x2="92.25" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2100" x1="0" y1="30" x2="92.25" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2101" x1="0" y1="35" x2="92.25" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2102" x1="0" y1="40" x2="92.25" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2103" x1="0" y1="45" x2="92.25" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2104" x1="0" y1="50" x2="92.25" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2093" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2106" x1="0" y1="50" x2="92.25" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2105" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2068" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2069" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2072" d="M 0 50L 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5C 92.25 47.5 92.25 47.5 92.25 50M 92.25 47.5z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask3iqf12oi)" pathTo="M 0 50L 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5C 92.25 47.5 92.25 47.5 92.25 50M 92.25 47.5z" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><path id="SvgjsPath2073" d="M 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5" fill="none" fill-opacity="1" stroke="#f1416c" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask3iqf12oi)" pathTo="M 0 47.5C 2.483653846153846 47.5 4.612500000000001 30.833333333333332 7.096153846153847 30.833333333333332C 9.579807692307693 30.833333333333332 11.708653846153847 49.166666666666664 14.192307692307693 49.166666666666664C 16.67596153846154 49.166666666666664 18.804807692307694 34.166666666666664 21.28846153846154 34.166666666666664C 23.772115384615386 34.166666666666664 25.90096153846154 47.5 28.384615384615387 47.5C 30.868269230769233 47.5 32.997115384615384 35.83333333333333 35.48076923076923 35.83333333333333C 37.96442307692308 35.83333333333333 40.09326923076924 47.5 42.57692307692308 47.5C 45.06057692307692 47.5 47.18942307692308 42.5 49.67307692307693 42.5C 52.156730769230776 42.5 54.28557692307693 29.166666666666664 56.769230769230774 29.166666666666664C 59.252884615384616 29.166666666666664 61.38173076923077 46.666666666666664 63.86538461538462 46.666666666666664C 66.34903846153847 46.666666666666664 68.47788461538462 48.333333333333336 70.96153846153847 48.333333333333336C 73.44519230769231 48.333333333333336 75.57403846153846 35 78.0576923076923 35C 80.54134615384615 35 82.67019230769232 29.166666666666664 85.15384615384616 29.166666666666664C 87.6375 29.166666666666664 89.76634615384616 47.5 92.25 47.5" pathFrom="M -1 50L -1 50L 7.096153846153847 50L 14.192307692307693 50L 21.28846153846154 50L 28.384615384615387 50L 35.48076923076923 50L 42.57692307692308 50L 49.67307692307693 50L 56.769230769230774 50L 63.86538461538462 50L 70.96153846153847 50L 78.0576923076923 50L 85.15384615384616 50L 92.25 50"></path><g id="SvgjsG2070" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG2071" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2107" x1="0" y1="0" x2="92.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2108" x1="0" y1="0" x2="92.25" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2109" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2110" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2111" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2090" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2063" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                        <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                                                                <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end::Table widget 15-->                      
                    </div>
                    <!--end::Col-->
                </div>                
            </div>
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