
<div>
	<ul class="userlist">
	
	</ul>
</div>


<script type="text/javascript">
	
	$(document).ready(function(){

		$.ajax({
			method:'GET',
			url: 'https://jsonplaceholder.typicode.com/photos',
			dataType: 'json'
		}).done(function(data){
			console.log(data);
			$.map(data, function(photos, i){
				//$('.userlist').append('<img src="'+ photos.thumbnailUrl + '"/>' );
			});
			  $('.userlist').append('<img src="'+ data[0].thumbnailUrl + '"/>' );
		});

	});
</script>