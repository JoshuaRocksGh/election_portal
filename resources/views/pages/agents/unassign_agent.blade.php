@extends('layouts.master')


@section('content')

    <div class="container-fluid">
        <h3 class="">{{ session()->get('Region') }} &nbsp; > &nbsp;<span class=" text-danger"> {{ $constituency }}</span>
            @if (session()->get('Region') == 'ConstituencyLevel')
                echo (session()->get('Region'))
            @endif

        </h3>

        <div class="row">
            <div class="col-md-4">
                <div class="card"
                    style="background-color: rgba(136, 198, 197, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="card-body">
                        <h3 class="text-center mt-0">POLLING STATIONS</h3>
                        <div class="row">

                            <div class="col-md-12 text-center">
                                <b style="font-size: 48px" class="total_polling_stations">0</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card"
                    style="background-color: rgba(32, 185, 252, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="card-body">
                        <h3 class="text-center mt-0">ASSIGNED POLLING STATIONS</h3>
                        <div class="row">

                            <div class="col-md-12 text-center">
                                <b style="font-size: 48px" class="assigned_polling_stations">0</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card"
                    style="background-color: rgba(252, 205, 201, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="card-body">
                        <h3 class="text-center mt-0">UNASSIGNED POLLING STATIONS</h3>
                        <div class="row">

                            <div class="col-md-12 text-center">
                                <b style="font-size: 48px" class="unassigned_polling_stations">0</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card"
                    style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <h3 for="" class=" text-center"> Agent Details</h3>
                                <hr class="mt-0">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <form action="#">

                                    <div class="agent_details">
                                        <div class="form-group row">
                                            <label hidden="true" for="" class="col-md-6 h4 ">Assign:</label>
                                            <h4   hidden="true" class="col-md-6 assign text-blue text-center" value="{{ $assign }}">{{ $assign }}</h4>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-md-6 h4 ">Agent ID:</label>
                                            <h4 class="col-md-6 agent_id text-blue text-center"></h4>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-md-6 h4 ">Agent Name:</label>
                                            <h4 class="col-md-6 agent_name text-blue text-center"></h4>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-md-6 h4 ">Gender:</label>
                                            <h4 class="col-md-6 agent_gender text-blue text-center"></h4>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-md-6 h4 ">Agent Region:</label>
                                            <h4 class="col-md-6 agent_region text-blue text-center"></h4>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-md-6 h4 ">Agent Constituency:</label>
                                            <h4 class="col-md-6 agent_constituency text-blue text-center"></h4>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-md-6 h4">Agent Polling Station:</label>
                                            <h4 class="col-md-6 agent_electoral_area text-blue text-center"></h4>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-info"
                                                id="unassign_agent_button">Confirm</button>
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                </form>

                            </div>
                            <div class="col-md-1"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>


@endsection


@section('scripts')

    <!-- Datatables init -->
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>

    <script src="{{ asset('assets/js/unassign_agent.js') }}"></script>
    <script>
        var UserRegion = '{{ session()->get('Region') }}';

        var constituency = '{{ $constituency }}';

        var user_id = '{{ $user_id }}'

        var UserConstituency = '{{ session()->get('Constituency') }}'
    </script>

@endsection
