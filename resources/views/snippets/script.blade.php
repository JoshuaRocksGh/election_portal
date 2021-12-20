{{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}

<!-- Third Party js-->
<script src="{{ asset('land_asset/js/jquery.min.js') }}"></script>
<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>


{{-- Jequery cdn --}}


{{-- firebase --}}
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.17.1/firebase-firestore.js"></script>



<!-- Plugins js-->
<script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}">
</script>
<script src="{{ asset('assets/libs/clockpicker/bootstrap-clockpicker.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}">
</script>
<script src="{{ asset('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}">
</script>

{{-- <script src="{{ asset('assets/libs/bootstrap-tour/js/bootstrap-tour.min.js') }}">
</script> --}}
{{-- <script src="{{ asset('assets/js/jquery.userTimeout.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
</script> --}}
{{-- <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}">
</script> --}}
{{-- <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}">
</script> --}}

{{-- <!-- Tour page js -->
        <script src="{{ asset('assets/libs/hopscotch/js/hopscotch.min.js') }}"></script>

<!-- Tour init js-->
<script src="{{ asset('assets/js/pages/tour.init.js') }}"></script> --}}

<!-- Dashboar 1 init js-->
{{-- <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}">
</script> --}}

{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}


<!-- Init js-->
{{-- <script src="{{ asset('assets/libs/pages/form-pickers.init.js') }}">
</script>
<script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script> --}}



<!-- App js-->
<script src="{{ asset('assets/js/app.min.js') }}"></script>



<!-- Plugin js-->
<script src="{{ asset('assets/libs/parsleyjs/parsley.min.js') }}"></script>

<!-- Validation init js-->
{{-- <script src="{{ asset('assets/js/pages/form-validation.init.js') }}">
</script> --}}



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js">
    < /scrip>   <
    script src = "https://code.jquery.com/ui/1.12.1/jquery-ui.js" >
</script>

<script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "{{ config('services.firebase.apiKey') }}",
        authDomain: "{{ config('services.firebase.authDomain') }}",
        projectId: "{{ config('services.firebase.projectId') }}",
        storageBucket: "{{ config('services.firebase.storageBucket') }}",
        messagingSenderId: "{{ config('services.firebase.messagingSenderId') }}",
        appId: "{{ config('services.firebase.appId') }}",
        measurementId: "{{ config('services.firebase.measurementId') }}"
    };

    // Initialize Firebase
    const app = firebase.initializeApp(firebaseConfig);
    const analytics = firebase.getAnalytics(app);
</script>

<script>
    function siteLoading(state) {
        if (state === "show") {
            $("#preloader").css("background-color", "#4fc6e17a")
            $(".preloader").fadeIn(500);
            return
        }
        $(".preloader").fadeOut(500);
        // $("#preloader").css("background-color", "#fff")
        return
    }
</script>
