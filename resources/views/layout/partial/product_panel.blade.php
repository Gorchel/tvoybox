<div class="row">
	<div class="col-xs-12">
		<h3 class="section-heading text-uppercase">ВАШ ЗАКАЗ</h3>
	</div>
	
	@foreach ($content as $row)
		<div class="col-12">
			<div class="row">
				<div class="col-3">
					<img class="cart-img" src="{{$row['img']}}" alt="">
				</div>
				<div class="col-9">
					<div class="row mg-10">
						<div class="col-10 text-left">
							<span class="text-muted">{{$row['name']}}</span>
						</div>
						<div class="col-2">
							<i class="fas fa-times remove-item" data-id="{{$row['key']}}"></i>
						</div>
					</div>
					<div class="row">
						<div class="col-6 text-left counter-wrapper">
							<a class="counter-action" data-action="minus" data-count="{{$row['count']}}" data-id="{{$row['key']}}"><i class="fas fa-minus"></i></a>
							<span class="counter-text">{{$row['count']}}</span>
							<a class="counter-action" data-action="plus" data-count="{{$row['count']}}" data-id="{{$row['key']}}"><i class="fas fa-plus"></i></a>
						</div>
						<div class="col-6 text-right">
							{{$row['price']}} грн.
						</div>
					</div>
				</div>
			</div>
		</div>
	@endforeach

	<div class="col-12">
		<p class="text-right"><b>Итого: {{Cart::subtotal(0,' ',' ')}} грн.</b></p>
	</div>
</div>