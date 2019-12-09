$(document).ready(function() {
	updateCart();

	$('body').on('click','.portfolio-item',function() {
		var id = $(this).data('id'),
			modal = $('#box-modal'),
			wrapper = $('#modal-swiper .swiper-wrapper').eq(0);

		jQuery.ajax({
	        type: "get",
	        url: '/box/' + id,
	        success: function (data) {
	            if (data['response'] == 200) {
	            	var box = data['box'];

	            	// modal.find('#show-box-modal-img').eq(0).attr('src',box['full_images'][0]);
	            	modal.find('#show-box-modal-price').eq(0).html(box['price']);
	            	modal.find('#show-box-modal-name').eq(0).html(box['name']);
	            	modal.find('#show-box-modal-text').eq(0).html(box['text']);

	            	modal.find('#is_order_modal').data('id', id);

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

	jQuery('body').on('click','.is_order', function(e) {
		e.stopPropagation();
		var _this = jQuery(this);

		addToCart(_this);
	});

	jQuery('body').on('click','#is_order_modal', function() {
		var _this = jQuery(this);

		addToCart(_this);

		$('#box-modal').modal('hide');
	});

		//Удаление элемента
	$('body').on('click','.remove-item',function() {
		var _this = jQuery(this),
			id = _this.data('id');

		jQuery.ajax({
	        type: "get",
	        url: '/delete_item/' + id,
	        success: function (data) {
	            updateCart(1);
	        }
	    });	
	});

	$('body').on('click','.counter-action',function() {
		var _this = jQuery(this),
			id = _this.data('id'),
			action = _this.data('action'),
			count = _this.data('count');

		if (action == 'minus') {
			if (count == 1) {
				return;
			}

			count = count - 1;
		} else {
			count = count + 1;
		}

		jQuery.ajax({
	        type: "get",
	        data: {count: count},
	        url: '/update_count/' + id,
	        success: function (data) {
	            updateCart(1);
	        }
	    });	
	});

	//Подтверждение
	$('body').on('click','#cart-submit',function() {
		var _this = jQuery(this),
			serialize_data = jQuery('#cart-form').serialize();

		$.ajax({
	        url: "/order",
	        type: "POST",
	        data: serialize_data,
	        cache: false,
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        },
	        success: function(dataJson) {
	        	var data = JSON.parse(dataJson);
	        
	            jQuery('#cart-body-modal').html(data['content']);

	            setTimeout(reload, 2000);
	        },
	        error: function() {
	         
	        },
	    });
	});
	
});

function reload() {
	window.location.reload();
}

function addToCart(_this) {
	var id = _this.data('id');

	jQuery.ajax({
        type: "get",
        url: '/add_to_cart/' + id,
        success: function (data) {
            updateCart();
        }
    });			
}

function updateCart(only_panel = 0) {
	jQuery.ajax({
        type: "get",
        data: {only_panel: only_panel},
        url: '/get_cart/',
        success: function (data) {
        	var count = data['count']

        	if (only_panel == 1) {
        		jQuery('#cart-product-panel').html(data['content']);
        	} else {
        		jQuery('#cart-body-modal').html(data['content']);
        	}
        	
        	if (count > 0) {
        		jQuery('#cart-counter-ajax').html('<span class="badge badge-danger cart-counter">' + count + '</span>');
        		//cart-body-modal

        		// if (jQuery('#cart-submit').hasClass('d-none')) {
        		// 	jQuery('#cart-submit').removeClass('d-none');
        		// }
        	} else {
        		jQuery('#cart-counter-ajax').html('');

        		// if (!jQuery('#cart-submit').hasClass('d-none')) {
        		// 	jQuery('#cart-submit').addClass('d-none');
        		// }
        	}
        }
    });	
}