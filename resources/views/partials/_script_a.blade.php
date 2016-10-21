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
    }

    $(document).ready(function() {
        run();

        // auto load contents
        var page = 1;
        loadMore();

        if($(window).height() >= $(document).height()) {
          if(page > {{ $activities->total() }}) {
            $('.more-activities').empty().append('<img src="{{ url('img/eoa.png') }}" class="end-of-act" alt="Loading" />');
          }
        }
        $(document).scroll(function(){
            if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                if(page < {{ $activities->total() }}) {
                    loadMore();
                } else {
                    $('.more-activities').empty().append('<img src="{{ url('img/eoa.png') }}" class="end-of-act" alt="Loading" />');
                }
            }
        });

        function loadMore()
        {
            $('.more-activities').html('<img src="{{ url('img/loading.png') }}" class="loader" alt="Loading" />');
            $.ajax({
                url: '{{ url('ajax/show/activities?page=') }}' + (page++),
                method: 'get',
                success: function(data){
                    $('.removeScript').remove();
                    $('.activities').append(data);
                    run();
                },
            });
        }
    });
</script>
