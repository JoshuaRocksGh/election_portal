<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            {{-- <img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md"> --}}
            {{-- <div class="col-md-4">
                    <div class="avatar-md">
                        <span class="avatar-title bg-soft-secondary text-secondary font-20 rounded-circle">
                            MD
                        </span>
                    </div>
                </div> --}}
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="mdi mdi-cog-outline mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock mr-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id=" side-menu">

                {{-- <li class="menu-title">Navigation</li> --}}
                @if (session()->get('UserMandate') == 'NationalLevel')
                    <li>
                        <a href="{{ route('home') }}">
                            {{-- <i class="mdi mdi-cellphone-message mdi-36px card-icon"></i></i> --}}
                            <i class="mdi mdi-home-outline"></i>
                            <span> Home</span>
                        </a>
                    </li>
                @elseif(session()->get('UserMandate') == 'RegionalLevel')


                    {{-- <p>{{ $UserRegion }}</p> --}}
                    <li>
                        <a href={{ url('region/' . $UserRegion) }}>
                            {{-- <i class="mdi mdi-cellphone-message mdi-36px card-icon"></i></i> --}}
                            <i class="mdi mdi-home-outline"></i>
                            <span> Home</span>
                        </a>
                    </li>
                @elseif(session()->get('UserMandate') == 'ConstituencyLevel')

                    <li>
                        <a href={{ url('constituency/' . $UserConstituency) }}>
                            <i class="mdi mdi-home-outline"></i>
                            <span> Home</span>
                        </a>
                    </li>
                @endif

                @if (session()->get('UserMandate') == 'NationalLevel')
                    <li>
                        <a href="#sidebarLoans" data-toggle="collapse">
                            <i class="mdi mdi-briefcase-check-outline"></i>
                            <span> Regional Users </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarLoans">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ url('all-regional-users') }}">All Regional Users</a>
                                </li>
                                <li>
                                    <a href="{{ url('create-user') }}">Create Regional User</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarTransfer" data-toggle="collapse">
                            <i class="mdi mdi-book-account-outline"></i>
                            <span> Reported Issue </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTransfer">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#">All Reported Issue</a>
                                </li>


                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarNotifications" data-toggle="collapse">
                            <i class="mdi mdi-domain"></i>
                            <span> Notifications & Alerts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarNotifications">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="send-notifications">Send Notifications</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarSettings" data-toggle="collapse">
                            <i class="mdi mdi-cog-outline"></i>
                            <span>Settings</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarSettings">
                            <ul class="nav-second-level">

                                <li>
                                    <a href="view-profile">View Profile</a>
                                </li>




                            </ul>
                        </div>
                    </li>
                @elseif(session()->get('UserMandate') == 'RegionalLevel')

                    <li>
                        <a href="#sidebarLoans" data-toggle="collapse">
                            <i class="mdi mdi-briefcase-check-outline"></i>
                            <span> Constituency Users </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarLoans">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ url('all-constituency-users') }}">All Constituency Users</a>
                                </li>
                                <li>
                                    <a href="{{ url('create-user') }}">Create Constituency User</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarTransfer" data-toggle="collapse">
                            <i class="mdi mdi-book-account-outline"></i>
                            <span> Reported Issue </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTransfer">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#">All Reported Issue</a>
                                </li>


                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarNotifications" data-toggle="collapse">
                            <i class="mdi mdi-domain"></i>
                            <span> Notifications & Alerts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarNotifications">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ url('send-notifications') }}">Send Notifications</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarSettings" data-toggle="collapse">
                            <i class="mdi mdi-cog-outline"></i>
                            <span>Settings</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarSettings">
                            <ul class="nav-second-level">

                                <li>
                                    <a href="{{ url('view-profile') }}">View Profile</a>
                                </li>




                            </ul>
                        </div>
                    </li>

                @endif



                {{-- <li class="menu-title mt-2">Apps</li> --}}

                @if (session()->get('UserMandate') == 'ConstituencyLevel')
                    <li>
                        <a href="#sidebarMyAccount" data-toggle="collapse">
                            <i class="mdi mdi-book-account-outline"></i>
                            <span> Agent</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMyAccount">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ url('add-agent') }}">Add New Agent</a>
                                </li>
                                <li>
                                    <a href="{{ url('edit-agent') }}">Edit Agent Details</a>
                                </li>
                                <li>
                                    <a href="{{ url('agent-list') }}">List Of Agents</a>
                                </li>
                                <li>
                                    <a href="{{ url('send-agent-message') }}">Send Message</a>
                                </li>
                                {{-- <li>
                                <a href="#budgeting" data-toggle="collapse">
                                    <span> Budgeting </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="budgeting">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ url('budgeting-spending-statics') }}">Spending
                                                Statistics</a>
                                        </li>

                                    </ul>
                                </div>
                            </li> --}}

                            </ul>
                        </div>
                    </li>
                @endif

                @if (session()->get('UserMandate') == 'ConstituencyLevel')
                    <li>
                        <a href="#sidebarTransfer" data-toggle="collapse">
                            <i class="mdi mdi-checkbox-multiple-marked-outline"></i>
                            <span> Approvals </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTransfer">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ url('own-account') }}">Pending</a>
                                </li>
                                {{-- <li>
                                <a href="{{ url('same-bank') }}">Same Bank</a>
                            </li> --}}
                                {{-- <li>
                                <a href="{{ url('bulk-transfer') }}">Bulk Transfer </a>
                            </li> --}}

                                {{-- <li>
                                <a href="{{ url('local-bank') }}">Local Bank</a>
                            </li> --}}


                                {{-- <li>
                                <a href="{{ url('international-bank') }}">International Bank</a>
                            </li> --}}
                                {{-- <li>
                                <a href="{{ url('standing-order') }}">Standing Order</a>
                            </li> --}}
                                {{-- <li>
                                <a href="{{ url('add-beneficiary') }}">Add Beneficiary</a>
                            </li> --}}
                                {{-- <li>
                                <a href="{{ url('beneficiary-list') }}">Beneficiary List</a>
                            </li> --}}

                            </ul>
                        </div>
                    </li>
                @endif

                {{-- <li>
                    <a href="#sidebarBeneficiary" data-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span>Payments </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarBeneficiary">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ url('payment-type') }}">Payment Types</a>
                            </li>

                            <li>
                                <a href="{{ url('qr-transfer') }}">
                                    <span> QR</span>
                                </a>
                            </li>

                            <li>

                            </li>

                            <li>
                                <a href="{{ url('cardless-payment') }}">Cardless</a>
                            </li>

                            <li>
                                <a href="{{ url('e-korpor') }}">E-Korpor</a>
                            <li>
                                <a href="#korpor" data-toggle="collapse">
                                    <i class="mdi mdi-book-account-outline"></i>
                                    <span> E-Korpor </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="korpor">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ url('e-korpor') }}">E-Korpor</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('bulk-korpor') }}">Bulk E-Korpor</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                </li> --}}
                {{-- <li>
                    <a href="{{ url('schedule-payment') }}">Schedule Payment</a>
                </li>
                <li>
                    <a href="{{ url('bulk-upload-payment') }}">Bulk Upload (Mobile Money)</a>
                </li>
                <li>
                    <a href="{{ url('request-blink') }}">Request Blink Pay </a>
                </li>
                <li>
                    <a href="{{ url('order-blink-payment') }}">Order Blink Pay </a>
                </li>
                <li>
                    <a href="{{ url('payment-beneficiary') }}">Add Beneficiary</a>
                </li>
                <li>
                    <a href="{{ url('payment-beneficiary-list') }}">Beneficiary List</a>
                </li> --}}
                {{-- <li>
                                <a href="{{ url('saved-beneficiary') }}">Saved Beneficiary</a>
</li>
<li>
    <a href="{{ url('one-time-payment') }}">One Time</a>
</li>
<li>
    <a href="{{ url('payment-add-beneficiary') }}">Add Beneficiary</a>
</li> --}}

                {{-- </ul>
        </div>

        </li> --}}



                {{-- <li>
            <a href="#sidebarMyInvestments" data-toggle="collapse">
                <i class="mdi mdi-domain"></i>
                <span> Investments </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarMyInvestments">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ url('fd-creation') }}">FD Creation</a>
                    </li>
                    <li>
                        <a href="{{ url('stop-fd') }}">Stop FD</a>
                    </li>
                </ul>
            </div>
        </li> --}}
                {{-- <li>
            <a href="#sidebarTradeFinance" data-toggle="collapse">
                <i class="mdi mdi-briefcase-check-outline"></i>
                <span> Trade Finance </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarTradeFinance">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ url('lc-origination') }}">LC Origination</a>
                    </li>
                </ul>
            </div>
        </li> --}}



                {{-- <li>
            <a href="#sidebarAccountServices" data-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Account Services </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarAccountServices">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ url('cheque-book-request') }}">Cheque Book Request </a>
                    </li>
                    <li>
                        <a href="{{ url('confirm-cheque') }}">Cheque Status</a>
                    </li>
                    <li>
                        <a href="{{ url('activate-cheque-book') }}">Activate Cheque Book</a>
                    </li>
                    <li>
                        <a href="#sidebarChequeApprovals" data-toggle="collapse">
                            <span>Cheque Approvals</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarChequeApprovals">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ url('cheque-approvals-pending') }}">Pending</a>
                                </li>
                                <li>
                                    <a href="{{ url('cheque-approvals-approved') }}">Approved</a>
                                </li>
                                <li>
                                    <a href="{{ url('cheque-approvals-rejected') }}">Rejected</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{ url('stop-cheque') }}">Stop Cheque</a>
                    </li>
                    <li>
                        <a href="#sidebarTasks" data-toggle="collapse">
                            <i class="mdi mdi-credit-card-multiple-outline"></i>
                            <span> Card Services </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTasks">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ url('block-debit-card') }}">Block Debit Card</a>
                                </li>
                                <li>
                                    <a href="{{ url('request-atm') }}">Request Card</a>
                                </li>
                                <li>
                                    <a href="{{ url('activate-card') }}">Activate Card</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="{{ url('request-for-letter') }}">Request For Letter</a>
                    </li>
                    <li>
                        <a href="{{ url('open-additional-account') }}">Open additional account</a>
                    </li>
                    <li>
                        <a href="{{ url('request-draft') }}">Request bank draft</a>
                    </li>

                    <li>
                        <a href="{{ url('add-signature') }}">Add Signatory</a>
                    </li>
                    <li>
                        <a href="{{ url('remove-signature') }}">Remove Signatory</a>
                    </li>
                    <li>
                        <a href="{{ url('kyc-update') }}">

                            <span> Update Company Info </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('complaint') }}">
                            <span>Make Complaint</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li> --}}
                {{-- <li>
            <a href="#approvals" data-toggle="collapse">
                <i class="mdi mdi-account-circle-outline"></i>
                <i class="mdi mdi-checkbox-multiple-marked-outline"></i>
                <span> Approvals </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="approvals">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ url('approvals-pending') }}">Pending</a>
                    </li>
                    <li>
                        <a href="{{ url('approvals-approved') }}">Approved</a>
                    </li>
                    <li>
                        <a href="{{ url('approvals-rejected') }}">Rejected</a>
                    </li>
                    <li>
                        <a href="{{ url('transfer-status') }}">Transfer Status</a>
                    </li>
                </ul>
            </div>
        </li> --}}

                {{-- <li>
                    <a href="#sidebarChatbot" data-toggle="collapse">

                        <i class="mdi mdi-chat-processing-outline"></i>
                        <span> Chatbot </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarChatbot">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ url('WhatsApp-Chatbot') }}">WhatsApp</a>
</li>
<li>
    <a href="{{ url('Facebook-Chatbot') }}">Facebook</a>
</li>
<li>
    <a href="{{ url('Instagram-Chatbot') }}">Instagram</a>
</li>
</ul>
</div>
</li> --}}


                {{-- <li>
            <a href="#sidebarSetting" data-toggle="collapse">
                <i class="mdi mdi-account-circle-outline"></i>
                <i class="mdi mdi-cog-outline"></i>
                <span> Settings </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarSetting">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ url('create-originator') }}">Create Originator</a>
                    </li>
                    <li>
                        <a href="{{ url('set-transaction-limit') }}">Set Transaction Limits</a>
                    </li>
                    <li>
                        <a href="{{ url('update-company-info') }}">Update Company Information</a>
                    </li>
                    <li>
                        <a href="{{ url('forgot-transaction-pin') }}">Forgot Transaction PIN</a>
                    </li>
                    <li>
                        <a href="{{ url('biometric-setup') }}">Biometric Setup</a>
                    </li>
                    <li>
                        <a href="{{ url('change-pin') }}">Pin Setup</a>
                    </li>


                </ul>
            </div>
        </li> --}}

                {{-- <li>
            <a href="{{ url('branch-locator') }}">
                <i class="mdi mdi-cellphone-message mdi-36px card-icon"></i></i>
                <i class="mdi mdi-map-marker-outline"></i>
                <span> Branch Locator </span>
            </a>
        </li> --}}

                <li>
                    <a href="{{ url('logout') }}">
                        <i data-feather="power" class="icon-dual-activity"></i>
                        <span> Logout </span>
                    </a>
                </li>

                {{-- Start Comment --}}

                {{-- <li>
                    <a href="#sidebarLayouts" data-toggle="collapse">
                        <i class="mdi mdi-cellphone-link"></i>
                        <span class="badge badge-info float-right">New</span>
                        <span> Layouts </span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="layouts-horizontal.html">Horizontal</a>
                            </li>
                            <li>
                                <a href="layouts-detached.html">Detached</a>
                            </li>
                            <li>
                                <a href="layouts-two-column.html">Two Column Menu</a>
                            </li>
                            <li>
                                <a href="layouts-two-tone-icons.html">Two Tones Icons</a>
                            </li>
                            <li>
                                <a href="layouts-preloader.html">Preloader</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2">Components</li>

                <li>
                    <a href="#sidebarBaseui" data-toggle="collapse">
                        <i class="mdi mdi-black-mesa"></i>
                        <span> Base UI </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarBaseui">
                        <ul class="nav-second-level">
                            <li>
                                <a href="ui-buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="ui-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="ui-avatars.html">Avatars</a>
                            </li>
                            <li>
                                <a href="ui-portlets.html">Portlets</a>
                            </li>
                            <li>
                                <a href="ui-tabs-accordions.html">Tabs & Accordions</a>
                            </li>
                            <li>
                                <a href="ui-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="ui-progress.html">Progress</a>
                            </li>
                            <li>
                                <a href="ui-notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="ui-spinners.html">Spinners</a>
                            </li>
                            <li>
                                <a href="ui-images.html">Images</a>
                            </li>
                            <li>
                                <a href="ui-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="ui-list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="ui-video.html">Embed Video</a>
                            </li>
                            <li>
                                <a href="ui-dropdowns.html">Dropdowns</a>
                            </li>
                            <li>
                                <a href="ui-ribbons.html">Ribbons</a>
                            </li>
                            <li>
                                <a href="ui-tooltips-popovers.html">Tooltips & Popovers</a>
                            </li>
                            <li>
                                <a href="ui-general.html">General UI</a>
                            </li>
                            <li>
                                <a href="ui-typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="ui-grid.html">Grid</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarExtendedui" data-toggle="collapse">
                        <i class="mdi mdi-layers-outline"></i>
                        <span class="badge badge-primary float-right">Hot</span>
                        <span> Extended UI </span>
                    </a>
                    <div class="collapse" id="sidebarExtendedui">
                        <ul class="nav-second-level">
                            <li>
                                <a href="extended-nestable.html">Nestable List</a>
                            </li>
                            <li>
                                <a href="extended-range-slider.html">Range Slider</a>
                            </li>
                            <li>
                                <a href="extended-dragula.html">Dragula</a>
                            </li>
                            <li>
                                <a href="extended-animation.html">Animation</a>
                            </li>
                            <li>
                                <a href="extended-sweet-alert.html">Sweet Alert</a>
                            </li>
                            <li>
                                <a href="extended-tour.html">Tour Page</a>
                            </li>
                            <li>
                                <a href="extended-scrollspy.html">Scrollspy</a>
                            </li>
                            <li>
                                <a href="extended-loading-buttons.html">Loading Buttons</a>
                            </li>
                        </ul>
                    </div>
                </li>



                <li>
                    <a href="#sidebarIcons" data-toggle="collapse">
                        <i class="mdi mdi-bullseye"></i>
                        <span> Icons </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarIcons">
                        <ul class="nav-second-level">
                            <li>
                                <a href="icons-two-tone.html">Two Tone Icons</a>
                            </li>
                            <li>
                                <a href="icons-feather.html">Feather Icons</a>
                            </li>
                            <li>
                                <a href="icons-mdi.html">Material Design Icons</a>
                            </li>
                            <li>
                                <a href="icons-dripicons.html">Dripicons</a>
                            </li>
                            <li>
                                <a href="icons-font-awesome.html">Font Awesome 5</a>
                            </li>
                            <li>
                                <a href="icons-themify.html">Themify</a>
                            </li>
                            <li>
                                <a href="icons-simple-line.html">Simple Line</a>
                            </li>
                            <li>
                                <a href="icons-weather.html">Weather</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarForms" data-toggle="collapse">
                        <i class="mdi mdi-bookmark-multiple-outline"></i>
                        <span> Forms </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarForms">
                        <ul class="nav-second-level">
                            <li>
                                <a href="forms-elements.html">General Elements</a>
                            </li>
                            <li>
                                <a href="forms-advanced.html">Advanced</a>
                            </li>
                            <li>
                                <a href="forms-validation.html">Validation</a>
                            </li>
                            <li>
                                <a href="forms-pickers.html">Pickers</a>
                            </li>
                            <li>
                                <a href="forms-wizard.html">Wizard</a>
                            </li>
                            <li>
                                <a href="forms-masks.html">Masks</a>
                            </li>
                            <li>
                                <a href="forms-summernote.html">Summernote</a>
                            </li>
                            <li>
                                <a href="forms-quilljs.html">Quilljs Editor</a>
                            </li>
                            <li>
                                <a href="forms-file-uploads.html">File Uploads</a>
                            </li>
                            <li>
                                <a href="forms-x-editable.html">X Editable</a>
                            </li>
                            <li>
                                <a href="forms-image-crop.html">Image Crop</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarTables" data-toggle="collapse">
                        <i class="mdi mdi-table"></i>
                        <span> Tables </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTables">
                        <ul class="nav-second-level">
                            <li>
                                <a href="tables-basic.html">Basic Tables</a>
                            </li>
                            <li>
                                <a href="tables-datatables.html">Data Tables</a>
                            </li>
                            <li>
                                <a href="tables-editable.html">Editable Tables</a>
                            </li>
                            <li>
                                <a href="tables-responsive.html">Responsive Tables</a>
                            </li>
                            <li>
                                <a href="tables-footables.html">FooTable</a>
                            </li>
                            <li>
                                <a href="tables-bootstrap.html">Bootstrap Tables</a>
                            </li>
                            <li>
                                <a href="tables-tablesaw.html">Tablesaw Tables</a>
                            </li>
                            <li>
                                <a href="tables-jsgrid.html">JsGrid Tables</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCharts" data-toggle="collapse">
                        <i class="mdi mdi-poll"></i>
                        <span> Charts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCharts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="charts-apex.html">Apex Charts</a>
                            </li>
                            <li>
                                <a href="charts-flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="charts-morris.html">Morris Charts</a>
                            </li>
                            <li>
                                <a href="charts-chartjs.html">Chartjs Charts</a>
                            </li>
                            <li>
                                <a href="charts-peity.html">Peity Charts</a>
                            </li>
                            <li>
                                <a href="charts-chartist.html">Chartist Charts</a>
                            </li>
                            <li>
                                <a href="charts-c3.html">C3 Charts</a>
                            </li>
                            <li>
                                <a href="charts-sparklines.html">Sparklines Charts</a>
                            </li>
                            <li>
                                <a href="charts-knob.html">Jquery Knob Charts</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarMaps" data-toggle="collapse">
                        <i class="mdi mdi-map-outline"></i>
                        <span> Maps </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMaps">
                        <ul class="nav-second-level">
                            <li>
                                <a href="maps-google.html">Google Maps</a>
                            </li>
                            <li>
                                <a href="maps-vector.html">Vector Maps</a>
                            </li>
                            <li>
                                <a href="maps-mapael.html">Mapael Maps</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarMultilevel" data-toggle="collapse">
                        <i class="mdi mdi-share-variant"></i>
                        <span> Multi Level </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMultilevel">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#sidebarMultilevel2" data-toggle="collapse">
                                    Second Level <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMultilevel2">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);">Item 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarMultilevel3" data-toggle="collapse">
                                    Third Level <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMultilevel3">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <a href="#sidebarMultilevel4" data-toggle="collapse">
                                                Item 2 <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarMultilevel4">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="javascript: void(0);">Item 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript: void(0);">Item 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li> --}}


            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->

@section('scripts')




    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js">
    </script>

    <script>
        $(".region_url").click() {
            alert('clicked')
        }
    </script>

    {{-- <script>
        var UserMandate = @json(session()->get('UserMandate'));
        var UserRegion = @json(session()->get('Region'));
        var UserConstituency_ = @json(session()->get('Constituency'))

        if (UserConstituency_.indexOf(' ') >= 0) {
            alert("contains spaces");
            var request = UserConstituency_
            UserConstituency = request.replace(/ /g, "_");

        }
        console.log(UserConstituency);
    </script> --}}



@endsection
