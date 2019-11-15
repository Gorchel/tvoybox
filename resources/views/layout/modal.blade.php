<!-- /#wrapper -->
    <div id="login-popup" class="white-popup login-popup mfp-hide">
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#account-login" aria-controls="account-login" role="tab" data-toggle="tab">Account Login</a>
                </li>

                <li role="presentation">
                    <a href="#account-register" aria-controls="account-register" role="tab" data-toggle="tab">Register</a>
                </li>
            </ul>
            <!-- /.nav -->

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="account-login">
                    <form action="index.html" method="POST">
                        <div class="form-group">
                            <label for="login-account">Account</label>
                            <input type="text" class="form-control" id="login-account">
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label for="login-password">Password</label>
                            <input type="password" class="form-control" id="login-password" data-show-password="true">
                        </div>
                        <!-- /.form-group -->

                        <div class="forgot-passwd">
                            <a href="#" title="">
                                <i class="icon icon-key"></i>
                                <span>Forgot your password?</span>
                            </a>
                        </div>
                        <!-- /.forgot-passwd -->

                        <div class="form-button">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->

                <div role="tabpanel" class="tab-pane" id="account-register">
                    <form action="index.html" method="POST">
                        <div class="form-group">
                            <label for="register-username">Username <sup>*</sup>
                            </label>
                            <input type="text" class="form-control" id="register-username">
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label for="register-email">Email <sup>*</sup>
                            </label>
                            <input type="text" class="form-control" id="register-email">
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label for="register-password">Password <sup>*</sup>
                            </label>
                            <input type="password" class="form-control" id="register-password">
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label for="register-confirm-password">Confirm Password <sup>*</sup>
                            </label>
                            <input type="password" class="form-control" id="register-confirm-password">
                        </div>
                        <!-- /.form-group -->

                        <div class="form-button">
                            <button type="submit" class="btn btn-lg btn-warning btn-block">Register</button>
                        </div>
                        <!-- /.form-button -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
    </div>

<div class="modal fade bd-example-modal-lg" id="show-box-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    
      <div class="modal-body">
        <img src="" id="show-box-modal-img" alt="" class="current">
        <div class="product-price"><span id="show-box-modal-price"></span> грн.</div>
        <div id="show-box-modal-name" ></div>
        <div id="show-box-modal-text" >
            <!-- <span class="amount">Что внутри:</span>
            <ul style="font-size: 15px" >
                <li>Какая то штучка</li>
                <li>Еще какая то штучка</li>
                <li>Прекрасная штуковина</li>
            </ul> -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <button type="button" class="btn btn-primary">Купить</button>
      </div>
    </div>
  </div>
</div>