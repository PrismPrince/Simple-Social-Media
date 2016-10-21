<script type="text/javascript">
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.img-up').css('display', 'none');
                $('.img-dismiss').css('display', 'block');
                $('.i-img').css('height', '250px')
                    .css('width', '100%')
                    .css('background',  'url(\'' + e.target.result + '\') no-repeat')
                    .css('background-size', '100%')
                    .css('background-position', '0 0');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $('.img-up').hover(function(){
        $(this).tooltip({
            'title': 'Upload a photo/Drag and Drop',
            'placement': 'right',
        });
    });

    $('.img-up').change(function(){
        if (!this.files[0].type.match('image.*')) {
            alert('Input is not an image!');
            $('.img-dismiss').css('display', 'none');
            $(this).css('display', 'block').val('');
            $('.i-img')
                .css('width', '50px')
                .css('height', '50px')
                .css('background',  'url(\'{{ url('img/plus.png') }}\') no-repeat')
                .css('background-size', '25px')
                .css('background-position', '50%');
            $('.img-drop').css('display', 'none');
            return false;
        }
        readURL(this);
    }).on('dragenter', function() {
        $('.i-img')
            .css('width', '100%')
            .css('height', '250px')
            .css('background', 'none');
        $('.img-drop').css('display', 'block');
    }).on('dragover', function() {
        $('.img-drop').css('display', 'block');
    }).on('drop', function() {
        $('.img-drop').css('display', 'none');
    }).on('dragleave', function() {
        $('.i-img')
            .css('width', '50px')
            .css('height', '50px')
            .css('background',  'url(\'{{ url('img/plus.png') }}\') no-repeat')
            .css('background-size', '25px')
            .css('background-position', '50%');
        $('.img-drop').css('display', 'none');
    });

    $('.img-dismiss').click(function(){
        $('.img-dismiss').css('display', 'none');
        $('.img-up').css('display', 'block').val('');
        $('.i-img').css('height', '50px')
            .css('width', '50px')
            .css('background',  'url(\'{{ url('img/plus.png') }}\') no-repeat')
            .css('background-size', '25px')
            .css('background-position', '50%');
    });

    var desc = $('form .data-post-desc');
    var submit = $('form .submit-idea');

    var descStat;

    function tt(o, m) {
        return o.attr('data-original-title', m).tooltip({placement: 'bottom'}).tooltip('show');
    }

    function valPost() {
        if(true == descStat) return true;
        else return false;
    }

    desc.focusout(function(e) {
        if(desc.val().trim().length === 0) {
            descStat = false;
            tt(desc, 'Please enter the description!');
        } else {
            descStat = true;
            tt(desc, '');
        }
    });

    submit.click(function() {
        $(this).submit();
    })

    $('.form-post input, .form-post textarea').focusout(function(e){
        if (valPost()) {
            submit.removeAttr('disabled');
        }
    });
</script>
