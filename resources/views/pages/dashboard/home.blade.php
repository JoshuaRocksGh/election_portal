@extends('layouts.master')


@section('content')
    <div class="container-fluid">
        <h3 class=""><span class=" text-danger">Home</span> </h3>
        <div class="row">
            <div class="col-md-6">
                <div class="card"
                    style="background-color: rgba(136, 198, 197, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="card-body">
                        <h2 class="text-center mt-0">PRESIDENCY</h2>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="avatar-lg">
                                    <img class="img-fluid rounded-circle"
                                        src="{{ asset('assets/images/presidency.png') }}" alt="">
                                </div>

                            </div>
                            <div class="col-md-8"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card"
                    style="background-color: rgba(32, 185, 252, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="card-body">
                        <h2 class="text-center mt-0">PARLIAMENT</h2>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="avatar-lg">
                                    <img class="img-fluid rounded-circle" src="{{ asset('assets/images/ppp.png') }}"
                                        alt="">
                                </div>

                            </div>
                            <div class="col-md-8"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card"
                    style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="card-body">
                        <h4 class="header-title mb-3">ALL REGIONS</h4>

                        <div class="table-responsive">
                            <table
                                class="table table-borderless table-hover table-nowrap table-centered m-0 all_agent_list">

                                <thead
                                    style="background-color: rgba(32, 185, 252, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <tr>
                                        <th colspan="2">REGIONS</th>
                                        <th>AGENTS</th>
                                        <th>PRESIDENTIAL</th>
                                        <th>PARLIAMENTARY</th>
                                        <th>DETAILS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">AHAFO</h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class="h1 region_data ahafo_agents" style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/AHAFO' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>

                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">ASHANTI</h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class="h1 region_data ashanti_agents" style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/ASHANTI' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>
                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">BONO EAST</h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class="h1 region_data bono_east_agents" style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/BONO_EAST' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>
                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">BONO</h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class="h1 region_data bono_agents" style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/BONO' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>

                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">CENTRAL</h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class="h1 region_data central_agents" style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/CENTRAL' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>
                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">EASTERN</h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class="h1 region_data eastern_agents" style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/EASTERN' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>
                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">GREATER ACCRA</h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class=" region_data greater_accra_agents h1"
                                                style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/GREATER_ACCRA' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>
                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">NORTHERN</h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class="h1 region_data northern_agents" style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/NORTHERN' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>
                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">NORTH EAST</h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class="h1 region_data north_east_agents" style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/NORTH_EAST' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>
                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">OTI</h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class="h1 region_data oti_agents" style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/OTI' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>
                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">SAVANNAH</h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class="h1 region_data savannah_agents" style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>

                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/SAVANNAH' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>
                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">UPPER EAST</h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class="h1 region_data upper_east_agents" style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/UPPER_EAST' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>
                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">UPPER WEST</h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class="h1 region_data upper_west_agents" style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/UPPER_WEST' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>
                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">VOLTA</h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class="h1 region_data volta_agents" style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/VOLTA' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>
                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">WESTERN NORTH
                                            </h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class="h1 region_data western_north_agents"
                                                style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/WESTERN_NORTH' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>
                                    <tr
                                        style="background-color: rgba(233, 242, 255, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <td style="width: 36px;">
                                            <img src="{{ asset('assets/images/black-star.png') }}" alt="contact-img"
                                                title="contact-img" class="rounded-circle avatar-sm" />
                                        </td>

                                        <td>
                                            <h5 class="m-0 font-weight-normal font-18">WESTERN</h5>
                                            {{-- <p class="mb-0 text-muted"><small>Member Since 2017</small></p> --}}
                                        </td>

                                        <td>
                                            <span class="h1 region_data western_agents" style="display: none">0</span>
                                            <span class="spinner-border spinner-border-sm m-2 bg-black"
                                                role="status"></span>
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td class="h1">
                                            0
                                        </td>

                                        <td>
                                            `<a href='region/WESTERN' class="btn btn-sm btn-blue">VIEW</a>`
                                            {{-- <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i
                                                    class="mdi mdi-minus"></i></a> --}}
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('scripts')

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <script src="{{ asset('assets/js/home.js') }}"></script>
    <script>
        var AgentDetail = @json(session()->get('Agents'));
        {{-- var AgentDetail = @json($AgentDetails); --}}
        var UserMandate = @json(session()->get('UserMandate'));
        {{-- var UserRegion = @json(session()->get('Region')); --}}
    </script>
@endsection
