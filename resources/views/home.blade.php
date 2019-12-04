@extends('layout.main')

@section("content")
    <section>
        <div class="container">
            <div class="padding-vertical-50">

                <div class="arrivals">
                    <div class="section-header center">
                        <h2><a name="wereccomended"> Мы рекомендуем</a></h2>
                    </div>

                    <div class="products home-products owl-carousel" data-items="4">
                        @foreach (config('boxes') as $id => $box)
                            @if (!empty($box['active']) && !empty($box['recommendations']))
                                <div class="product product-grid show_box" data-id="{{$id}}">
                                    <div class="product-media">
                                        <div class="product-thumbnail">
                                            <a href="#" title="">
                                                @foreach ($box['images'] as $key => $image)
                                                    <img src="{{$image}}" alt="" class="{{ $key == 0 ? 'current' : ''}}">
                                                @endforeach
                                            </a>
                                        </div>
                                    </div>

                                    <div class="product-body">
                                        <h2 class="product-name">
                                            <a href="#" title="{{$box['name']}}">{{$box['name']}}</a>
                                        </h2>

                                        <div class="product-price">
                                            <span class="amount">{{$box['price']}} грн</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <div class="container ourboxmain">
        <div class="arrivals">
            <div class="section-header center">
                <h2><a name="ourbox"> Наши Боксики</a></h2>
            </div>
            <div class="row ourboxes">
                @foreach (config('boxes') as $id => $box)
                    @if (!empty($box['active']))
                        <div class="col-sm-3 show_box" data-id="{{$id}}">
                            <img src="{{$box['images'][0]}}" alt="" class="current">
                            <h2 class="product-name">
                                <a href="#" title="{{$box['name']}}">{{$box['name']}}</a>
                            </h2>
                            <div class="product-price">
                                <span class="amount">{{$box['price']}} грн</span>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <section class="background background-color-dark background-image-section-customers-say">
        <div class="container">
            <div class="padding-top-60">
                <div class="section-header center">
                    <h2>Заказывая у нас Вы получаете</h2>
                </div>
                <!-- /.section-header -->

                <div class="section-customers">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="customers-carousel owl-carousel" id="customers-carousel" data-toggle="carousel" data-dots="true" data-nav="0">
                                <div class="center">
                                    <h4>Оригинальность подарка</h4>
                                    <p>Каждый подарок собран с любовью и каждый оригинален по своему, можно найти абсолютно для любого человека</p>
                                </div>
                                <!-- /.center -->

                                <div class="center">
                                    <h4>Экономия Вашего времени</h4>
                                    <p>Ведь поиски действительно хорошего подарка занимают очень много времени. Мы экономим Ваше время и нервы</p>
                                </div>
                                <!-- /.center -->

                                <div class="center">
                                    <h4>Natasha Roson</h4>
                                    <p>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If
                                        you are going to use a passage of Lorem Ipsum“</p>
                                </div>
                                <!-- /.center -->
                            </div>
                            <!-- /.customers-say-carousel -->
                        </div>
                    </div>
                </div>
                <!-- /.section-content -->
            </div>
        </div>
        <!-- /.container -->
        
    </section>
    <!-- /section -->

    <section>

        <div class="container ourinstruction">

            <div class="padding-vertical-60">
             <!--Accordion wrapper-->
<div class="accordion md-accordion " id="accordionEx1" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header " role="tab" id="headingTwo1">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1"
        aria-expanded="false" aria-controls="collapseTwo1">
        <h5 class="mb-0 menulist">
         <p> Доставка   <i class="fa fa-plus plusicon razvorot" aria-hidden="true"></i></p>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1"
      data-parent="#accordionEx1">
      <div class="card-body textabout"><p>
        Доставка производится по всей Украине<br>
-Доставка по Одессе - бесплатно<br>
-Доставка по Украине осуществляется Новой Почтой в течении 2 суток<br>
-Самовывоз возможен<br> 
</p>

      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo2">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo21"
        aria-expanded="false" aria-controls="collapseTwo21">
        <h5 class="mb-0 menulist">
          Оплата <i class="fa fa-plus plusicon" aria-hidden="true"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo21" class="collapse" role="tabpanel" aria-labelledby="headingTwo21"
      data-parent="#accordionEx1">
      <div class="card-body textabout"><p>
       Оплата производится двумя способами:<br>
       -Банковской картой<br>
       -Наличными<br></p>  
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree31">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree31"
        aria-expanded="false" aria-controls="collapseThree31">
        <h5 class="mb-0 menulist">
          Обмен и возврат <i class="fa fa-plus plusicon" aria-hidden="true"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree31" class="collapse" role="tabpanel" aria-labelledby="headingThree31"
      data-parent="#accordionEx1">
      <div class="card-body textabout"><p>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
        wolf
        moon
        officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
        Brunch
        3
        wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
        shoreditch
        et.
        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
        Ad
        vegan
        excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
        nesciunt
        you probably haven't heard of them accusamus labore sustainable VHS.</p>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->
                
    </section>
    <!-- /section -->
       
</div>
@overwrite
