<div class="portfolio-modal modal fade" id="box-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2 class="text-uppercase" id="show-box-modal-name"></h2>
              <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
              <div class="row text-center swiper-container" id="modal-swiper">
                <div class="swiper-wrapper">
         
                </div>
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
               <!--  <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
              </div>

              <p id="show-box-modal-text"></p>
              <p><b><span id="show-box-modal-price"></span> грн.</b></p>
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <button class="btn btn-primary mg-20" id="is_order_modal" type="button">
                    <i class="fas fa-shopping-cart"></i>
                    Добавить в корзину</button>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <button class="btn btn-default modal-dissmiss-btn" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Закрыть</button>
                  </div>
              </div>     
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="portfolio-modal modal fade" id="cart-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <div class="modal-body">
              <!-- Project Details Go Here -->
              <h2 class="text-uppercase color-yellow">Ваша корзина</h2>
              <hr/>
              <div class="text-center" id="cart-body-modal">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>