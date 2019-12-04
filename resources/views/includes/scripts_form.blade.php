
@section('kc_styles')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" rel="stylesheet" type="text/css" />
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
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/pages/scripts/form-validation.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/global/plugins/jquery-repeater/jquery.repeater.js') }}" type="text/javascript"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/pages/scripts/form-repeater.min.js') }}" type="text/javascript"></script>




@endsection