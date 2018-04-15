<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap_min.js')}}"></script>
<script src="{{asset('assets/js/date_picker.js')}}"></script>
<script src="{{asset('assets/js/slimscroll.min.js')}}"></script>
<script src="{{asset('assets/js/fastclick.min.js')}}"></script>
<script src="{{asset('assets/js/app_min.js')}}"></script>
<script src="{{asset('assets/js/jquery_data_table.js')}}"></script>
<script src="{{asset('assets/js/data_table.js')}}"></script>
<script src="{{asset('assets/js/bootstrap_data_table_responsive.js')}}"></script>
<script src="{{asset('assets/js/input_mask.js')}}"></script>
<script src="{{asset('assets/js/input_mask_date_extension.js')}}"></script>
<script src="{{asset('assets/js/input_mask_extension.js')}}"></script>
<script src="{{asset('assets/js/multiple_select_full_min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-timepicker.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('.date').datepicker({
            format: 'dd/mm/yyyy'
        });
        $("[data-mask]").inputmask();
        $(".select2").select2();
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>