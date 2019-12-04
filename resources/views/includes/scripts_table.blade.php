
@section('kc_styles')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}"  rel="stylesheet" type="text/css" />


<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('kc_scripts')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-markdown/lib/markdown.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
{{--<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/pages/scripts/form-validation.min.js') }}" type="text/javascript"></script>--}}
<!-- END PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/global/plugins/jquery-repeater/jquery.repeater.js') }}" type="text/javascript"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/pages/scripts/form-repeater.min.js') }}" type="text/javascript"></script>





<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"  type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/pages/scripts/table-datatables-buttons.min.js') }}" type="text/javascript"></script>
<!-- BEGIN THEME GLOBAL SCRIPTS -->
{{-- <script src="{{ asset('assets/global/scripts/app.min.js" type="text/javascript') }}" ></script> --}}
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/pages/scripts/table-datatables-fixedheader.min.js') }}"  type="text/javascript"></script>



@endsection
