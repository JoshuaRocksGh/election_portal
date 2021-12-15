@extends("layouts.master")


@section('content')
    {{-- <br> --}}

    <div class="container-fluid">
        <h3 class="">Agent &nbsp; > &nbsp; <span class=" text-danger">Send Message</span> </h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card"
                    style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="card-body">
                        <div class="media mb-3">
                            <img src="{{ url('assets/images/user.png') }}" class="mr-2 rounded-circle" height="42"
                                alt="Brandon Smith">
                            <div class="media-body">
                                <h5 class="mt-0 mb-0 font-15">
                                    <a href="contacts-profile.html"
                                        class="text-reset">{{ session()->get('userName') }}</a>
                                </h5>
                                <p class="mt-1 mb-0 text-muted font-13">
                                    <small class="mdi mdi-circle text-success"></small> Online
                                </p>
                            </div>
                            {{-- <div>
                                <a href="javascript: void(0);" class="text-reset font-20">
                                    <i class="mdi mdi-cog-outline"></i>
                                </a>
                            </div> --}}
                        </div>
                        <hr>
                        <div class="message_recipient">
                            <h3>Select Sending Options<span class="text-danger">*</span></h3>
                            @if (session()->get('UserMandate') != 'NationalLevel')
                                <div class="checkbox checkbox-dark mb-2">
                                    <input id="checkbox6c" type="checkbox" disabled>
                                    <label for="checkbox6c" class="h4">
                                        ALL
                                    </label>
                                </div>
                            @elseif(session()->get('UserMandate') == 'NationalLevel')
                                <div class="checkbox checkbox-dark mb-2">
                                    <input id="checkbox6c" type="checkbox">
                                    <label for="checkbox6c" class="h4">
                                        ALL
                                    </label>
                                </div>
                            @endif
                            <br>
                            <h3>Sort By:</h3>
                            <div class="form-group mb-1 row">
                                <label for="simpleinput" class="col-md-12 h5">Region</label>
                                {{-- <input type="text" id="agent_region" class="form-control col-md-8"
                                                placeholder="Enter Agent Region"> --}}
                                @if (session()->get('UserMandate') == 'NationalLevel')
                                    <select class="form-control col-md-12" id="agent_region">
                                        <option value="">-- Select Region --</option>
                                    </select>
                                @elseif(session()->get("UserMandate") == "RegionalLevel")
                                    {{-- <input type="text"> --}}
                                    <select class="form-control col-md-12 readOnly" id="agent_region"
                                        style="background:#DCDCDC" disabled>
                                        <option value="{{ session()->get('Region') }}" selected>
                                            {{ session()->get('Region') }}
                                        </option>
                                    </select>
                                @elseif(session()->get("UserMandate") == "ConstituencyLevel")
                                    <select class="form-control col-md-12 readOnly" id="agent_region"
                                        style="background:#DCDCDC" disabled>
                                        <option value={{ session()->get('Region') }} selected>
                                            {{ session()->get('Region') }}
                                        </option>
                                    </select>
                                @endif
                            </div>
                            <div class="form-group mb-1 row">
                                <label for="simpleinput" class="col-md-12 h5">Constituency</label>
                                {{-- <input type="text" id="agent_constituency" class="form-control col-md-8"
                                                placeholder="Enter Agent Constituency"> --}}
                                @if (session()->get('UserMandate') == 'ConstituencyLevel')
                                    <select class="form-control col-md-12" id="agent_constituency"
                                        style="background:#DCDCDC" multiple disabled>
                                        <option value={{ session()->get('Constituency') }}>
                                            {{ session()->get('Constituency') }}</option>
                                    </select>

                                @elseif(session()->get('UserMandate') != 'ConstituencyLevel')
                                    <span class="spinner-border spinner-border-md m-2 bg-black constituency_spinner"
                                        role="status" style="display: none"></span>
                                    <select class="form-control col-md-12" id="agent_constituency" multiple>
                                        <option value=""></option>
                                    </select>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card"
                    style="background-color: rgba(255, 255, 255, 0.5);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="card-body">
                        <form action="#" id="send_message_form">
                            @csrf
                            <div class="form-group row">
                                <label for="simpleinput" class="col-md-12 h4"> Subject<span
                                        class="text-danger">*</span></label>
                                <input type="text" id="message_subject" class="form-control col-md-12">

                                <label for="simpleinput" class="col-md-12 h4"> Send To<span
                                        class="text-danger">*</span></label>
                                @if (session()->get('UserMandate') == 'ConstituencyLevel')
                                    <textarea class="col-md-12 readOnly" value="{{ session()->get('Constituency') }}"
                                        name="send_to" id="send_to" style="background:#DCDCDC" cols="30" rows="10"
                                        readonly>{{ session()->get('Constituency') }}</textarea>
                                    {{-- <input type="text" id="send_to" class="form-control col-md-12"> --}}
                                @elseif(session()->get('UserMandate') != "ConstituencyLevel")
                                    <textarea class="col-md-12 readOnly" name="send_to" id="send_to" cols="30" rows="10"
                                        placeholder="Recipient" readonly></textarea>
                                @endif

                            </div>

                            <div class="form-group row ">
                                <label for="simpleinput" class="col-md-12 h4"> Compose Message<span
                                        class="text-danger">*</span></label>
                                <textarea name="text_message" id="text_message" cols="62" rows="10"
                                    placeholder="Enter Message Here - Enter Message Here"></textarea>
                                {{-- <input type="text" placeholder="Enter Message Here" id="text_message"> --}}
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4 text-center">
                                    <button class="btn btn-blue btn-block " type="submit" id="send_message_button">
                                        <span class="send_message_text"><b>Send </b></span>
                                        <span class="spinner-border spinner-border-sm mr-1 spinner-text" role="status"
                                            aria-hidden="true" style="display: none"></span>
                                    </button>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card"
                    style="background-color: rgba(136, 198, 197, 0.3);backdrop-filter: blur(5px);box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <div class="card-body">
                        <div class="col-md-12 card m-1">
                            <form action="#" id="get_agent_chats">
                                @csrf
                                <label for="example-select" class="h4"><b>Sort by</b></label>
                                <hr class="mt-0">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="simpleinput" class="col-md-12 h4">Select Region:</label>
                                        {{-- <div class="checkbox checkbox-dark mb-2">
                                            <input id="message_chat" type="checkbox">
                                            <label for="message_chat" class="h5 mt-1">
                                                ALL
                                            </label>
                                        </div> --}}
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group mb-2">

                                            {{-- <div class="col-md-3">
                                                    <label for="simpleinput" class="col-md-12 h4">Region:</label>

                                                </div> --}}
                                            <div class="">
                                                <select class="form-control" id="chat_region">
                                                    <option value="">-- Select Region --</option>
                                                </select>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4 text-right">
                                        <button type="button" class="btn btn-blue waves-effect waves-light m-1"
                                            id="get_chat_button">Get
                                            Chat</button>
                                    </div>

                                </div>
                            </form>


                        </div>

                        <br>
                        <div class="col-m-12  m-1 " style="height: 450px;">


                            <div class="card" style="max-height: 450px;overflow-y: auto;">
                                <h4 class="m-2"><b>Agent Messages</b></h4>
                                <hr class="mt-0">

                                <ul class="conversation-list card-body m-1">
                                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



                                </ul>
                            </div>


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

    <script src="sweetalert2.all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var my_mandate = "{{ session()->get('UserMandate') }}"
    </script>

    <script src="{{ asset('assets/js/send_message.js') }}"></script>
@endsection
