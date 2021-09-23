@extends('layouts.general')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <br><br><br><br><br><br><br><br><br><br>
                <img src="{{ asset('assets/images/Coat.png') }}" alt="">
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection


@section('scripts')

    <script>
        $(document).ready(function() {
            var UserMandate = @json(session()->get('UserMandate'));
            var UserRegion = @json(session()->get('Region'));
            setTimeout(() => {
                {{-- alert(UserMandate) --}}

                if (UserMandate === "NationalLevel") {
                    window.location = 'home'
                } else if (UserMandate === 'RegionalLevel') {
                    window.location.href = `{{ url('region/${UserRegion}') }}`
                } else if (UserMandate === 'ConstituencyLevel') {
                    window.location = 'constituency'
                } else {
                    return back();
                }
            }, 1000)


        })
    </script>

@endsection
