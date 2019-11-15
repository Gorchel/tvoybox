$(document).ready(function() {
	$('body').on('click','.show_box',function() {
		var id = $(this).data('id'),
			modal = $('#show-box-modal');

		jQuery.ajax({
	        type: "get",
	        url: '/box/' + id,
	        success: function (data) {
	            if (data['responce'] == 200) {
	            	var box = data['box'];

	            	console.log(box);

	            	modal.find('#show-box-modal-img').eq(0).attr('src',box['full_images'][0]);
	            	modal.find('#show-box-modal-price').eq(0).html(box['price']);
	            	modal.find('#show-box-modal-name').eq(0).html(box['name']);
	            	modal.find('#show-box-modal-text').eq(0).html(box['text']);
	            	
	            	modal.modal('show');
	            };
	        }
	    });		
	})

	$('#audio-logo').on('click',function(){
		var audio = document.getElementById('audio');
		audio.play();
	});
});