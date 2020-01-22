<script>
    $(document).ready(function() {

        //fetch depts
        $.get("{{ route('api.departments.list') }}", (res) => {
            departments = res.data;
            //append depts
            appendItems(departments, '#departments');
        });


        $('#departments').change(function(e) {
            units = departments.filter(item => item.id == e.target.value)[0].units;

            appendItems(units, '#units');
            $('#units').removeAttr('disabled');
        })


    })

    function appendItems(items, field) {
        $(field).html('<option value="">Select an option</option>')
        items.forEach((item) => {
                $(field).append(`<option value="${item.id}">${item.name}</option>`);
        })
    }
</script>
