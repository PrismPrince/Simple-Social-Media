<script type="text/javascript">
    function run() {
        $('.a-tt').hover(function(){
            $(this).tooltip({
                'placement': 'bottom'
            });
        });

        $('.a-h-d').each(function() {
            return $(this).html(function(i, o){
                $(this).attr('title', moment(o).format("ddd, MMM Do YYYY [at] h:mm a"));
                return "" + moment(o).fromNow();
            });
        }).removeClass('a-h-d');

        $('.act-delete, .act-edit').hover(function(){
            $(this).tooltip({
                'placement': 'bottom'
            });
        });
    }

    $(document).ready(function() {
        run();
    });
</script>
