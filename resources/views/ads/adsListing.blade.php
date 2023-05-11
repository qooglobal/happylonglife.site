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
                        <div id="dismiss" class="alert alert-success alert-dismissible" style="background-color: green">
                            <div class="text-white">{{ Session::get('success') }} </div>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Target Link</th>
                                    <th>Attacking </th>
                                    <th>Last Seen</th>
                                    <th style="text-align: center;">Action</th>
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
                                            {{-- <a href="" class="btn btn-info btn-sm"><i
                                                    class="fadeIn animated bx bx-edit"></i></a> --}}
                                            <button type="button" data-toggle="modal" data-target="#EditBookModalLabel"
                                                value="{{ $ads->id }}" class="btn btn-info btn-xs editbtn"
                                                style="margin-right:5px;">
                                                <i class="fadeIn animated bx bx-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!--end page wrapper -->
    <!-- Edit Book Modal -->
    <div class="modal fade" id="EditBookModalLabel" tabindex="-1" role="dialog" aria-labelledby="EditBookModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form data-parsley-validate class="form-horizontal form-label-left" action="ad-update" method="POST">
                @csrf
                <div class="modal-content">
                    {{-- <div class="modal-header">
                        <h4 class="modal-title"> </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> --}}
                    <div class="modal-header" style="width:700px;">
                        <h4 class="modal-title"> </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body" style="width:620px;">

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Attacking
                                <span class="required" style="color:red">*</span>
                            </label>
                            <input type="hidden" name="ad_id" id="adId" value="">
                            <div class="col-md-6 col-sm-3 ">
                                <select class="form-control" name="attack" id="attack" required="required">
                                    <option>Select Status</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="col-md-12 col-sm-6 text-center">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                        <div class="col-md-12 col-sm-6 text-center">
                            <button class="btn btn-danger" type="reset">&nbsp;Reset&nbsp;</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
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

    <script>
        $(document).ready(function() {
            $(document).on('click', '.editbtn', function() {
                var ad_id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "/ad-edit/" + ad_id,
                    success: function(response) {
                        console.log(response);
                        $('#adId').val(response.addata.id);
                        $('#attack').val(response.addata.attack);
                    }
                });
            });
        });
    </script>
@endsection
