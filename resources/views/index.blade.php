@extends('layouts.app')
@section('style')
    <link href="{{ asset('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section('wrapper')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-info">

                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>

                                    <h4 class="my-1 text-info"></h4>
                                    {{-- <p class="mb-0 font-13">+2.5% from last week</p> --}}
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i
                                        class='bx bxs-group'></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-danger">

                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>

                                    <h4 class="my-1 text-danger"></h4>
                                    {{-- <p class="mb-0 font-13">+5.4% from last week</p> --}}
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i
                                        class='bx bxs-group'></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-success">

                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>

                                    <h4 class="my-1 text-success"></h4>
                                    {{-- <p class="mb-0 font-13">-4.5% from last week</p> --}}
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
                                    <i class='bx bxs-shopping-bag'></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-warning">

                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>

                                    <h4 class="my-1 text-warning"></h4>
                                    {{-- <p class="mb-0 font-13">+8.4% from last week</p> --}}
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i
                                        class='bx bx-book-open'></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--end row-->


            <!--end breadcrumb-->







        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/index.js') }}"></script>
@endsection
