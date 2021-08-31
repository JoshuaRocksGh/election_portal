@extends("layouts.master")


@section('content')
    <br>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body" style="background-color: rgba(245, 245, 245, 0.8);">
                <div>

                    <h2 class="text-center">Edit Agent Information</h2>
                    <hr>

                    <div class="container">
                        <form action="#" id="search_agent_details" autocomplete="off" aria-autocomplete="off">
                            <div class=" ">
                                <div class="">
                                    <b><em class="text-danger h4">Enter Agent Code</em></b>
                                    <br><br>
                                    <div class="form-group mb-1 row">
                                        <input type="text" id="first_person" class="form-control col-md-9"
                                            placeholder="Enter Agent Code">
                                        <div class="col-md-1"></div>
                                        <button type="submit"
                                            class="btn btn-info waves-effect waves-light btn-block col-md-2"><b>Search</b></button>
                                    </div>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
