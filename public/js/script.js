$(document).ready(function() {
	$('body').on('click','.portfolio-item',function() {
		var id = $(this).data('id'),
			modal = $('#box-modal'),
			wrapper = $('#modal-swiper .swiper-wrapper').eq(0);

		jQuery.ajax({
	        type: "get",
	        url: '/box/' + id,
	        success: function (data) {
	            if (data['responce'] == 200) {
	            	var box = data['box'];

	            	// modal.find('#show-box-modal-img').eq(0).attr('src',box['full_images'][0]);
	            	modal.find('#show-box-modal-price').eq(0).html(box['price']);
	            	modal.find('#show-box-modal-name').eq(0).html(box['name']);
	            	modal.find('#show-box-modal-text').eq(0).html(box['text']);


	            	wrapper.html('');

	            	$.each(box['full_images'], function(index, value) {
	            		wrapper.append('<div class="swiper-slide"><img class="img-fluid" src="' + value + '" alt=""></div>');
	            	});

	            	modal_swiper.update();

	            	
	            	
	            	modal.modal('show');
	            };
	        }
	    });		
	});

	var modal_swiper = new Swiper('#modal-swiper.swiper-container', {
		slidesPerView: 1,
		// spaceBetween: 15,
		// autoplay: true,
		loop: true,
		// navigation: {
		//     nextEl: '.swiper-button-next',
		//     prevEl: '.swiper-button-prev',
		//   },
		breakpoints: {
			991: {
				slidesPerView: 1
            },
			767: {
				slidesPerView: 1
            }
        }
	});

	var partners = new Swiper('.recomendacions.swiper-container', {
		slidesPerView: 4,
		spaceBetween: 15,
		autoplay: true,
		loop: true,
		breakpoints: {
			991: {
				slidesPerView: 3
            },
			767: {
				slidesPerView: 1
            }
        }
	});
});