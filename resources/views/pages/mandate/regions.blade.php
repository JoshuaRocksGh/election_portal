@extends("layouts.master")


@section('content')

    <div class="container-fluid">
        @if (session()->get('UserMandate') == 'NationalLevel')
            <h3 class=""><span class=" text-danger">{{ $region }}</span> </h3>
        @elseif(session()->get('UserMandate') !== 'NationalLevel')
            <h3 class=""><span class=" text-danger">{{ session()->get('Region') }}</span> </h3>
        @endif
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
                            {{-- <div class="col-md-8"></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card"
            style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
            <div class="card-body">
                <div class="container">
                    <div class="row" id="edit_spinner">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 text-center">

                            <div class="spinner-border avatar-lg text-blue m-2" role="status"></div>


                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row list_of_constituency">

        </div>
    </div>

@endsection

@section('scripts')

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <script src="{{ asset('assets/js/regionalLevel.js') }}"></script>
    <script>
        var Mandate = @json(session()->get('UserMandate'));
        var region = '{{ $region }}'
        if (Mandate == "NationalLevel") {
            var UserRegion = region;

        } else if (Mandate != "NationalLevel") {
            var UserRegion = @json(session()->get('Region'));

        }
    </script>
@endsection
