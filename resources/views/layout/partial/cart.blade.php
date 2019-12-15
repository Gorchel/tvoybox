<div class="row">
	<div class="col-md-6 col-xs-12" id="cart-product-panel">
		@include('layout.partial.product_panel')
	</div>	
	<div class="col-md-6 col-sm-12">
		<form action="/order" method="POST" id="cart-form">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-heading text-uppercase">ЗАПОЛНИТЕ ДАННЫЕ</h3>
				</div>
				<div class="col-md-12">
					<div class="form-group">
					  <input class="form-control" id="name" name="name" type="text" placeholder="Ваше ФИО" required="required" data-validation-required-message="Как к Вам обращаться?">
					  <p class="help-block text-white"></p>
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
					  <input class="form-control" id="address" name="address" type="text" placeholder="Ваш адрес" required="required">
					  <p class="help-block text-white"></p>
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
					  <input class="form-control" id="phone" name="phone" type="text" placeholder="Ваш номер телефона" required="required">
					  <p class="help-block text-white"></p>
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
					  <input class="form-control" id="email" name="email" type="text" placeholder="Ваш номер email">
					  <p class="help-block text-white"></p>
					</div>
				</div>

				<div class="col-md-12">
					<button class="btn btn-primary form-control" id="cart-submit" type="button">
	                    <i class="fas fa-shopping-cart"></i>
	                    Оставить заказ</button>
				</div>
			</div>
		</form>
	</div>
</div>

