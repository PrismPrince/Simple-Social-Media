<script class="removeScript" type="text/javascript">
	var type;
	var id;

	$('.panel .read-more').click(function(e) {
		e.preventDefault();
		$('.activity-modal').modal('show');
		$('.activity-modal .modal-body').empty().append("<img src='{{ url('img/loading.png') }}' class='loader' alt='Loading' />").addClass('text-center');
		type = $(this).data('act-type');
		id = $(this).data('act-id');
	});

	$('.activity-modal').on('shown.bs.modal', function(){
		$.ajax({
			url: '{{ url('ajax') }}/' + type + '/' + id,
			cache: false,
			ifModified: true,
			success: function(json) {
				$('.activity-modal .modal-header > .modal-title').empty().append(json.head);
				$('.activity-modal .modal-body').empty().removeClass('text-center').append(json.body).append(json.com).append("<div class='more-comments text-center row'><img src='{{ url('img/loading.png') }}' class='loader' alt='Loading' /></div>");
				run();
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('error');
				console.log('Error: ' + textStatus + ' ' + errorThrown);
			}
		});

		$.ajax({
			url: '{{ url('ajax') }}/comment/' + id,
			cache: false,
			ifModified: true,
			success: function(json) {
				$('.activity-modal .modal-body .more-comments').empty().removeClass('text-center').append(json.coms);
				console.log(json.coms);
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('error');
				console.log('Error: ' + textStatus + ' ' + errorThrown);
			}
		});
/*
		$('.submit-com').click(function (e) {
			e.preventDefault();
			$.ajax({
				url: '{{ url('ajax') }}/com',
				data: {
					desc: $('.create-comment .desc').val(),
					post_id: $('.create-comment input[name="post_id"]').val(),
					_token: $('.create-comment input[name="_token"]').val()
				},
				cache: false,
				ifModified: true,
				success: function(json) {
					$('.activity-modal .modal-body .more-comments').empty().removeClass('text-center').prepend(json.scom);
				}
			});
		});
*/
	});
	$('.activity-modal').on('hide.bs.modal', function(e){
		$(this).find('.modal-body, .modal-title').empty();
	});
</script>