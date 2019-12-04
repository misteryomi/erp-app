@section('helpdesk_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/daterangepicker-master/daterangepicker.css')}}" />
@endsection

@section('helpdesk_scripts')
<script src="{{ asset('assets/vendors/daterangepicker-master/moment.min.js')}}"></script>
<script src="{{ asset('assets/vendors/daterangepicker-master/daterangepicker.js')}}"></script>

<script>
$(function() {
console.log('hee')
var requestFrom =  "{{ request()->from }}"
var requestTo =  "{{ request()->to }}"


var start = requestFrom ? moment(requestFrom) : moment().subtract(29, 'days');
var end = requestTo ? moment(requestTo) :  moment();

function cb(start, end) {
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    $('#date_from').val(start.format('YYYY-MM-DD'));
    $('#date_to').val(end.format('YYYY-MM-DD'));
}

$('#reportrange').daterangepicker({
    startDate: start,
    endDate: end,
    ranges: {
       'Today': [moment(), moment()],
       'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
       'Last 7 Days': [moment().subtract(6, 'days'), moment()],
       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
       'This Month': [moment().startOf('month'), moment().endOf('month')],
       'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    }
}, cb);

cb(start, end);

});
</script>
@endsection