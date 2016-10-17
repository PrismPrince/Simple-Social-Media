<script type="text/javascript">
   $(document).ready(function() {
        $('.create-idea').load("{{ url('ajax/create/post') }}", function(responseTxt, statusTxt, xhr){
            $(this).empty().append(responseTxt);
        });
    });
</script>
