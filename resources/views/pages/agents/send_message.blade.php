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
                            <div class="checkbox checkbox-dark mb-2">
                                <input id="checkbox6c" type="checkbox">
                                <label for="checkbox6c" class="h4">
                                    ALL
                                </label>
                            </div>
                            <br>
                            <h3>Sort By:</h3>
                            <div class="form-group mb-1 row">
                                <label for="simpleinput" class="col-md-12 h5">Region</label>
                                {{-- <input type="text" id="agent_region" class="form-control col-md-8"
                                                placeholder="Enter Agent Region"> --}}
                                <select class="form-control col-md-12" id="agent_region">
                                    <option value="">-- Select Region --</option>
                                </select>
                            </div>
                            <div class="form-group mb-1 row">
                                <label for="simpleinput" class="col-md-12 h5">Constituency</label>
                                {{-- <input type="text" id="agent_constituency" class="form-control col-md-8"
                                                placeholder="Enter Agent Constituency"> --}}
                                <select class="form-control col-md-12" id="agent_constituency" multiple>
                                    <option value="">-- Select Constituency--</option>
                                </select>
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
                                <textarea class="col-md-12 readOnly" name="send_to" id="send_to" cols="30" rows="10"
                                    placeholder="Recipient" readonly></textarea>
                                {{-- <input type="text" id="send_to" class="form-control col-md-12"> --}}


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
                        <div class="media py-1">
                            <img src="{{ url('assets/images/agent-user.png') }}" class="mr-2 rounded-circle" height="36"
                                alt="Brandon Smith">
                            <div class="media-body">
                                <h5 class="mt-0 mb-0 font-15">
                                    <a href="contacts-profile.html" class="text-reset">Agent Messages</a>
                                </h5>
                                <p class="mt-1 mb-0 font-12">
                                    Replies
                                </p>
                            </div>
                            {{-- <hr> --}}

                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="conversation-list" data-simplebar style="max-height: 460px">
                            <li class="clearfix">
                                <div class="chat-avatar">
                                    <img src="{{ asset('assets/images/users/user-5.jpg') }}" class="rounded"
                                        alt="James Z" />
                                    <i>10:00</i>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <i>James Z</i>
                                        <p>
                                            Hello!
                                        </p>
                                    </div>
                                </div>
                                <div class="conversation-actions dropdown">
                                    <button class="btn btn-sm btn-link" data-toggle="dropdown" aria-expanded="false"><i
                                            class='mdi mdi-dots-vertical font-16'></i></button>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Copy Message</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </li>
                            {{-- <li class="clearfix odd">
                                <div class="chat-avatar">
                                    <img src="../assets/images/users/user-1.jpg" class="rounded" alt="Geneva M" />
                                    <i>10:01</i>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <i>Geneva M</i>
                                        <p>
                                            Hi, How are you? What about our next meeting?
                                        </p>
                                    </div>
                                </div>
                                <div class="conversation-actions dropdown">
                                    <button class="btn btn-sm btn-link" data-toggle="dropdown" aria-expanded="false"><i
                                            class='mdi mdi-dots-vertical font-16'></i></button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy Message</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </li> --}}
                            <li class="clearfix">
                                <div class="chat-avatar">
                                    <img src="{{ asset('assets/images/users/user-1.jpg') }}" class="rounded"
                                        alt="Geneva M" />
                                    <i>10:01</i>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <i>Geneva M</i>
                                        <p>
                                            Yeah everything is fine
                                        </p>
                                    </div>
                                </div>
                                <div class="conversation-actions dropdown">
                                    <button class="btn btn-sm btn-link" data-toggle="dropdown" aria-expanded="false"><i
                                            class='mdi mdi-dots-vertical font-16'></i></button>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Copy Message</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </li>
                            {{-- <li class="clearfix odd">
                                <div class="chat-avatar">
                                    <img src="../assets/images/users/user-1.jpg" class="rounded" alt="Geneva M" />
                                    <i>10:02</i>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <i>Geneva M</i>
                                        <p>
                                            Wow that great
                                        </p>
                                    </div>
                                </div>
                                <div class="conversation-actions dropdown">
                                    <button class="btn btn-sm btn-link" data-toggle="dropdown" aria-expanded="false"><i
                                            class='mdi mdi-dots-vertical font-16'></i></button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy Message</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </li> --}}
                            <li class="clearfix">
                                <div class="chat-avatar">
                                    <img src="{{ asset('assets/images/users/user-8.jpg') }}../" alt="Joshua"
                                        class="rounded" />
                                    <i>10:02</i>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <i>Joshua</i>
                                        <p>
                                            Let have it today if you are free
                                        </p>
                                    </div>
                                </div>
                                <div class="conversation-actions dropdown">
                                    <button class="btn btn-sm btn-link" data-toggle="dropdown" aria-expanded="false"><i
                                            class='mdi mdi-dots-vertical font-16'></i></button>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Copy Message</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </li>
                            {{-- <li class="clearfix odd">
                                <div class="chat-avatar">
                                    <img src="../assets/images/users/user-1.jpg" alt="Geneva M" class="rounded" />
                                    <i>10:03</i>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <i>Geneva M</i>
                                        <p>
                                            Sure thing! let me know if 2pm works for you
                                        </p>
                                    </div>
                                </div>
                                <div class="conversation-actions dropdown">
                                    <button class="btn btn-sm btn-link" data-toggle="dropdown" aria-expanded="false"><i
                                            class='mdi mdi-dots-vertical font-16'></i></button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy Message</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </li> --}}
                            {{-- <li class="clearfix">
                                <div class="chat-avatar">
                                    <img src="../assets/images/users/user-5.jpg" alt="James Z" class="rounded" />
                                    <i>10:04</i>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <i>James Z</i>
                                        <p>
                                            Sorry, I have another meeting scheduled at 2pm. Can we have it
                                            at 3pm instead?
                                        </p>
                                    </div>
                                </div>
                                <div class="conversation-actions dropdown">
                                    <button class="btn btn-sm btn-link" data-toggle="dropdown" aria-expanded="false"><i
                                            class='mdi mdi-dots-vertical font-16'></i></button>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Copy Message</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </li> --}}
                            {{-- <li class="clearfix">
                                <div class="chat-avatar">
                                    <img src="../assets/images/users/user-5.jpg" alt="James Z" class="rounded" />
                                    <i>10:04</i>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <i>James Z</i>
                                        <p>
                                            We can also discuss about the presentation talk format if you have some extra
                                            mins
                                        </p>
                                    </div>
                                </div>
                                <div class="conversation-actions dropdown">
                                    <button class="btn btn-sm btn-link" data-toggle="dropdown" aria-expanded="false"><i
                                            class='mdi mdi-dots-vertical font-16'></i></button>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Copy Message</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </li> --}}
                            {{-- <li class="clearfix odd">
                                <div class="chat-avatar">
                                    <img src="../assets/images/users/user-1.jpg" alt="Geneva M" class="rounded" />
                                    <i>10:05</i>
                                </div>
                                <div class="conversation-text">
                                    <div class="ctext-wrap">
                                        <i>Geneva M</i>
                                        <p>
                                            3pm it is. Sure, let discuss about presentation format, it would be great to
                                            finalize today.
                                            I am attaching the last year format and assets here...
                                        </p>
                                    </div>
                                    <div class="card mt-2 mb-1 shadow-none border text-left">
                                        <div class="p-2">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-primary rounded">
                                                            .ZIP
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col pl-0">
                                                    <a href="javascript:void(0);"
                                                        class="text-muted font-weight-bold">UBold-sketch.zip</a>
                                                    <p class="mb-0">2.3 MB</p>
                                                </div>
                                                <div class="col-auto">
                                                    <!-- Button -->
                                                    <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                        <i class="dripicons-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="conversation-actions dropdown">
                                    <button class="btn btn-sm btn-link" data-toggle="dropdown" aria-expanded="false"><i
                                            class='mdi mdi-dots-vertical font-16'></i></button>

                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy Message</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </li> --}}
                        </ul>
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

    <script src="{{ asset('assets/js/send_message.js') }}"></script>
@endsection
