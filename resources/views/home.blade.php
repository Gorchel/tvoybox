@extends('layout.main')

@section("content")
    <!-- Services -->
    <section class="page-section" id="recomendations">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">МЫ РЕКОМЕНДУЕМ</h2>
              <h3 class="section-subheading text-muted">Познакомьтесь с нашими самыми популярными наборами</h3>
            </div>
          </div>
          <div class="row text-center recomendacions swiper-container portfolio">
            <div class="swiper-wrapper">
                @foreach (config('boxes') as $id => $box)
                    @if (!empty($box['active']) && !empty($box['recommendations']))
                        <article class="swiper-slide">
                            <div class="portfolio-item" data-id="{{$id}}">
                              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                  <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                  </div>
                                </div>
                                <img class="img-fluid" src="{{$box['sm_img']}}" alt="">
                              </a>
                              <div class="portfolio-caption">
                                <h4>{{$box['name']}}</h4>
                                <hr/>
                                <p class="text-muted">
                                  <span>{{$box['price']}} грн</span>
                                  <span><button class="btn btn-default is_order" data-id="{{$id}}">Заказать</button></span>
                                </p> 
                              </div>
                            </div>
                        </article>
                    @endif
                @endforeach
            </div>
          </div>
        </div>
    </section>

    <section class="bg-light page-section portfolio" id="boxes">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">НАШИ БОКСИКИ</h2>
              <h3 class="section-subheading text-muted">Мы готовы сделать Ваш праздник немножечко ярче</h3>
            </div>
          </div>
          <div class="row">
            @foreach (config('boxes') as $id => $box)
                @if (!empty($box['active']))
                    <div class="col-md-3 col-sm-6 portfolio-item" data-id="{{$id}}">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                          <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <i class="fas fa-plus fa-3x"></i>
                            </div>
                          </div>
                          <img class="img-fluid" src="{{$box['sm_img']}}" alt="">
                        </a>
                        <div class="portfolio-caption">
                          <h4>{{$box['name']}}</h4>
                          <hr/>
                          <p class="text-muted">
                            <span>{{$box['price']}} грн</span>
                            <span><button class="btn btn-default is_order" data-id="{{$id}}">Заказать</button></span>
                          </p>
                        </div>
                    </div>
                @endif
            @endforeach
          </div>
      </div>
    </section>

    <section id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase text-muted">Заказывая у нас Вы получаете:</h2><br/>
              <!-- <h3 class="section-subheading text-muted text-uppercase">Заказывая у нас Вы получаете:</h3> -->
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <ul class="timeline">
                <li>
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4>Оригинальность подарка</h4>
                      <!-- <h4 class="subheading">Our Humble Beginnings</h4> -->
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted">Каждый подарок собран с любовью и каждый оригинален по своему, можно найти абсолютно для любого человека</p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <!-- <h4>March 2011</h4> -->
                      <h4 class="subheading">Экономия Вашего времени</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted">Ведь поиски действительно хорошего подарка занимают очень много времени. Мы экономим Ваше время и нервы</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4>December 2012</h4>
                      <h4 class="subheading">Transition to Full Service</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4>July 2014</h4>
                      <h4 class="subheading">Phase Two Expansion</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-image">
                    <h4>Бокс
                      <br>ждет
                      <br>Тебя!</h4>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </section>

    <section class="bg-light page-section" id="pay">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">Доставка и Оплата</h2>
              <h3 class="section-subheading text-muted">Мы дорожим своими клиентами и предлагаем самый удобный сервис на территории Украины</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="pay-block text-center">
                <!-- <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt=""> -->
                <p>
                    <i class="icon rounded-circle fas fa-truck fa-4x"></i>
                </p>
                <h4>Доставка</h4><br/>
                <p class="text-muted">Доставка производится по всей Украине</p>
                <hr/> 
                <p class="text-muted">Доставка по Украине осуществляется Новой Почтой в течении 2 суток</p>
                <hr/>
                <p class="text-muted">Доставка по Одессе - Бесплатно</p>
                <hr/>  
                <p class="text-muted">Самовывоз</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="pay-block text-center">
                <!-- <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt=""> -->
                <p>
                    <i class="icon rounded-circle fas fa-credit-card fa-4x"></i>
                </p>
                <h4>Оплата производится двумя способами:</h4><br/>
                <p class="text-muted">Банковской картой</p>
                <hr/> 
                <p class="text-muted">Наличными</p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="pay-block text-center">
                <!-- <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt=""> -->
                <p>
                    <i class="icon rounded-circle fas fa-reply fa-4x"></i>
                </p>
                <h4>Обмен и возврат</h4><br/>
               <!--  <p class="text-muted">Доставка производится по всей Украине</p>
                <hr/> 
                <p class="text-muted">Доставка по Украине осуществляется Новой Почтой в течении 2 суток</p>
                <hr/>
                <p class="text-muted">Доставка по Одессе - Бесплатно</p>
                <hr/>  
                <p class="text-muted">Самовывоз</p> -->
              </div>
            </div>
          </div>
        </div>
  </section>

  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase color-yellow">Напиши Нам</h2>
          <h3 class="section-subheading text-muted color-white">Остались вопросы? Напиши и мы тебе перезвоним!</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" name="name" type="text" placeholder="Ваше ФИО" required="required" data-validation-required-message="Как к Вам обращаться?">
                  <p class="help-block text-white"></p>
                </div>
 <!--                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-white"></p>
                </div> -->
                <div class="form-group">
                  <input class="form-control" id="phone" name="phone" type="tel" placeholder="Ваш номер телефона" required="required" data-validation-required-message="Напишите свой номер телефона">
                  <p class="help-block text-white"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" name="message" placeholder="Ваше сообщение" required="required" data-validation-required-message="Напишите свое сообщение"></textarea>
                  <p class="help-block text-white"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Отправить</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>       
</div>
@overwrite
