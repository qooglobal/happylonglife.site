@extends('layouts.app')

@section('style')
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section('wrapper')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Ads</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Ads Listing</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <h6 class="mb-0 text-uppercase">Ads Listing</h6>
            <hr />
            <div class="card border-top border-0 border-4 border-info">
                <div class="card-body p-4">
                    @if (Session::has('success'))
                        <div id="dismiss" class="alert alert-success border-0 bg-success alert-dismissible fade show">
                            <div class="text-white">{{ Session::get('success') }}
                            </div>
                            {{ Session::forget('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>target_url</th>
                                    <th>Attack </th>
                                    <th>last Seen</th>
                                    <th style="text-align: center;">Edit</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php($srno = 0)
                                @foreach ($ads as $ads)
                                    @php($srno++)
                                    <tr class="success primary">
                                        <td>{{ $srno }}</td>
                                        <td>{{ $ads->target_url }}</td>
                                        <td>{{ $ads->attack }}</td>
                                        <td>{{ $ads->last_seen_at }}</td>
                                        <td style="text-align: center;">
                                            <a href="" class="btn btn-info btn-sm"><i
                                                    class="fadeIn animated bx bx-edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            {{-- <div class="card border-top border-0 border-4 border-info">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <form method="get" action="{{ route('customersListingPdf') }}">

                            <button type="submit" style="width:150px; margin:20px;" class="btn btn-xs btn-info btn-sm">Export To Pdf</button>
                        </form>
                    </div>

                </div>
            </div>
        </div> --}}

        </div>
    </div>
    <!--end page wrapper -->
@endsection

@section('script')
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
