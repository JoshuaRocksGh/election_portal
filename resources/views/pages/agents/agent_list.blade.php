@extends("layouts.master")


@section('styles')

    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- third party css end -->
    <!-- third party css end -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">

    <style>

    </style>

@endsection


@section('content')
    <div class="container-fluid">
        <h3 class="">Agent &nbsp; > &nbsp; <span class=" text-danger">Agent List</span> </h3>
    </div>
    <div class=" container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card"
                    style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="card-body">

                        <h4 class="header-title">List of Agents</h4>
                        {{-- <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4 text-center">
                                <div class="spinner-border avatar-lg text-primary m-2 text-dark" role="status"></div>
                            </div>
                            <div class="col-md-4 "></div>
                        </div> --}}
                        <span id="data_table_view">
                            <table id="datatable-buttons"
                                class="table table-striped dt-responsive nowrap w-100 all_agent_list">
                                <thead class="bg-info">
                                    <tr class="text-white">
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Region</th>
                                        <th>Constituency</th>
                                        <th>Electoral Area</th>
                                        <th>Gender</th>
                                        {{-- <th>Salary</th> --}}
                                    </tr>
                                </thead>

                                {{-- @foreach ($AgentDetails as $AgentDetail) --}}
                                {{-- {{ $AgentDetail['Constituency'] }} --}}
                                <tbody>

                                    {{-- <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr> --}}




                                </tbody>
                                {{-- @endforeach --}}
                            </table>
                        </span>


                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>


@endsection

@section('scripts')

    <!-- third party js -->
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script>
    {{-- <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script> --}}
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
    <script src="{{ asset('assets/js/all_agent_all.js') }}"></script>

    <script>
        var AgentDetail = @json($AgentDetails);
    </script>




@endsection
