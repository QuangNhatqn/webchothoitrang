@extends('customer.layout.index')

@section('content')

  <div class="container">
    <div class="row">
      <br>
      <h1 style="text-align: center">Thông tin cá nhân</h1>
      <div id="carouselExampleIndicators" class="carousel slide my-4 col-lg-9" data-ride="carousel ">
        <div class="container" style="color:rgba(0, 0, 0, 0.87);transition:all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;box-sizing:border-box;font-family:Verdana, Arial, sans-serif;-webkit-tap-highlight-color:rgba(0,0,0,0);box-shadow:0 1px 2px rgba(0,0,0,.1);border-radius:2px;border:1px solid #D7D9DC;border-top:0;" data-reactid="35">
          <div class="row" data-reactid="36">
            <div class="col-12 col-md-12 padding" data-reactid="37" style="background-color: #FF923A">
              <div class="contactInfo false" data-reactid="38" >
                <br>
                <!-- <div class="mapInfo false" style="background-image:url(/user/static/img/default-map.png);background-size:cover;height:100px; text-align: center;" data-reactid="39">
                  <img style="color:#ffffff;background-color:rgb(188, 188, 188);user-select:none;display:inline-flex;align-items:center;justify-content:center;font-size:40px;border-radius:50%;height:80px;width:80px;bottom: -50px; width: 100px!important; height: 100px!important; border: 7px solid #fff;left: 0; right: 0;margin-left: auto; margin-right: auto; background-image: url(../img/anhnen.jpg);" alt="Xuân Phú" size="80" src="https://static.chotot.com.vn/imaginary/bd8b1adedd7b5f89c7fa3ac07c9550e000f7c8cf/profile_avatar/df530db686f55fcb7572d879840ae357b4d9babb/thumbnail?width=160" class="avatar" data-reactid="49">
                </div> -->
                <div class="info" data-reactid="50" style="text-align:center" >
                  <h4 class="name" data-reactid="51">Xuân Phú</h4>
                  <p style="color: gray;"><i>Số điện thoại: </i><span style="color: red; font-size: 20px;">012345678</span></p>
                  <!-- <div class="topInfo infoText secondaryText" data-reactid="52">
                    <span class="infoHeading" data-reactid="53">Đã cung cấp</span>
                    <span class="icon active infoIcon" data-reactid="54">
                      <svg width="35" height="35" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-reactid="55">
                        <title data-reactid="56">01_1</title>
                        <defs data-reactid="57">
                          <circle id="a" cx="20" cy="20" r="20" data-reactid="58"></circle>
                        </defs>
                        <g fill="none" fill-rule="evenodd" data-reactid="59">
                          <g transform="translate(4 4)" data-reactid="60">
                            <use fill="#FFF" xlink:href="#a" data-reactid="61"></use>
                            <circle stroke="#589F39" cx="20" cy="20" r="19.5" data-reactid="62"></circle>
                          </g>
                          <path d="M21.994 34h3.99v-9.501h2.663L29 21.225h-3.015l.004-1.64c0-.853.083-1.31 1.328-1.31h1.664V15h-2.663c-3.199 0-4.324 1.589-4.324 4.26v1.965H20V24.5h1.994V34z" fill="#589F39" data-reactid="63"></path>
                        </g>
                      </svg>
                    </span>
                    <span class="icon active infoIcon" data-reactid="64">
                      <svg width="35" height="35" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-reactid="65">
                        <title data-reactid="66">02_2</title>
                        <defs data-reactid="67">
                          <circle id="a" cx="20" cy="20" r="20" data-reactid="68"></circle>
                        </defs>
                        <g fill="none" fill-rule="evenodd" data-reactid="69">
                          <g transform="translate(4 4)" data-reactid="70">
                            <use fill="#FFF" xlink:href="#a" data-reactid="71"></use>
                            <circle stroke="#589F39" cx="20" cy="20" r="19.5" data-reactid="72"></circle>
                          </g>
                          <path d="M29.259 27.428c-.47-.298-.89-.245-1.271.137l-.667.726a1.406 1.406 0 0 1-.846.357s-1.138.562-4.409-2.708c-3.276-3.277-2.713-4.414-2.713-4.414a1.4 1.4 0 0 1 .357-.847l.726-.667c.38-.38.434-.8.137-1.27l-3.288-4.457c-.333-.397-.733-.379-1.167.053l-1.685 1.687a1.72 1.72 0 0 0-.417.842s-.624 4.666 5.914 11.204c6.537 6.538 11.202 5.913 11.202 5.913.27-.036.65-.224.843-.416l1.686-1.687c.433-.431.451-.833.054-1.165l-4.456-3.288z" fill="#589F39" data-reactid="73"></path>
                        </g>
                      </svg>
                    </span>
                    <span class="icon default infoIcon" data-reactid="74">
                      <svg width="35" height="35" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-reactid="75">
                        <title data-reactid="76">02_2</title>
                        <defs data-reactid="77">
                          <circle id="a" cx="20" cy="20" r="20" data-reactid="78"></circle>
                        </defs>
                        <g fill="none" fill-rule="evenodd" data-reactid="79">
                          <g transform="translate(4 4)" data-reactid="80">
                            <use fill="#FFF" xlink:href="#a" data-reactid="81"></use>
                            <circle stroke="#BCBCBC" cx="20" cy="20" r="19.5" data-reactid="82"></circle>
                          </g>
                          <path d="M14.586 17.6A2.054 2.054 0 0 0 14 19.032v9.943c0 .097.016.189.03.283l7.749-6.044-7.193-5.614zm18.828 0l-7.193 5.614 7.75 6.044c.013-.094.029-.186.029-.283v-9.943c0-.556-.225-1.059-.586-1.432zm-8.835 6.897l-.579.451-.579-.451-.688-.46-8.153 6.335c.387.403.93.628 1.538.628h15.764c.618 0 1.17-.237 1.557-.653L25.29 24l-.71.497zm7.58-7.492c-.09-.012-.182.002-.277.002H16.118c-.095 0-.186-.014-.278-.002L24 23.37l8.16-6.364z" fill="#BCBCBC" data-reactid="83"></path>
                        </g>
                      </svg>
                    </span>
                    <span class="icon default infoIcon" data-reactid="84">
                      <svg width="35" height="35" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-reactid="85">
                        <title data-reactid="86">03_2</title>
                        <defs data-reactid="87">
                          <circle id="a" cx="20" cy="20" r="20" data-reactid="88"></circle>
                        </defs>
                        <g fill="none" fill-rule="evenodd" data-reactid="89">
                          <g transform="translate(4 4)" data-reactid="90">
                            <use fill="#FFF" xlink:href="#a" data-reactid="91"></use>
                            <circle stroke="#BCBCBC" cx="20" cy="20" r="19.5" data-reactid="92"></circle>
                          </g>
                          <path d="M17 21.418C17 17.321 20.09 14 23.903 14c3.813 0 6.904 3.321 6.904 7.418a8.416 8.416 0 0 1-1.925 5.327l-4.979 7.221-4.979-7.22A8.416 8.416 0 0 1 17 21.417zM24 24a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" fill="#BCBCBC" data-reactid="93"></path>
                        </g>
                      </svg>
                    </span>
                  </div> -->
                  <div class="infoText secondaryText" data-reactid="94">
                    <!-- react-text: 95 -->
                    Ngày tham gia
                    <!-- /react-text -->
                    <!-- react-text: 96 -->
                    <!-- /react-text -->
                    <!-- react-text: 97 -->
                    8/10/2018
                    <!-- /react-text -->
                  </div>
                </div>
                <div data-reactid="98">
                  <!-- react-empty: 99 -->
                  <!-- react-empty: 100 -->
                </div>
                <!-- react-empty: 101 -->
              </div>
            </div>
          </div>
          <hr>
          <div>
            <ul role="menu" itemscope="" itemtype="https://schema.org/SiteNavigationElement" class="khungdexuat1">
              <li class="khungdexuat2">
                <a href="#" class="tendexuat" style="font-size:18px;">Đang bán(3)</a>
              </li>
              &nbsp;
              <li class="khungdexuat2">
                <a href="#" class="tendexuat" style="font-size:18px;">Bị từ chối(0)</a>
              </li>
              &nbsp;
              <li class="khungdexuat2">
                <a href="#" class="tendexuat"style="font-size:18px;">Cần thanh toán(0)</a>
              </li>
              &nbsp;
              <li class="khungdexuat2">
                <a href="#" class="tendexuat"style="font-size:18px;">Khác(0)</a>
              </li>
              &nbsp;
            </li>
          </ul>
        </div>
      </h4>
      <br>
      <div class="row">
        <!--item-->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/aothun_mickey.jpg" alt="Áo thun Mickey" width="200" height="150"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Áo thun Mickey</a>
              </h4>
              <h5>99k</h5>
              <p class="card-text">Áo thun cổ trơn mickey, chất liệu cao cấp, bán tất cả các size.</p>
            </div>
            <div style="width: max-width;">
            <button style="margin: 4px; border-radius: 5px; display:inline; width: 45%;">Sửa tin</button>
            <button style="margin: 4px; border-radius: 5px; display: inline; width: 45%;">Ẩn tin</button>
            <button style="margin: 4px; border-radius: 5px; display: block; width: 95%;" onclick="document.getElementById('dv').style.display='block'">Bán nhanh hơn!</button>
            </div>

            <!--thong tin-->
            <div class="thongtin" style="text-align: right;">
              <div class="thongtin1">
                <div class="thongtin2">
                  <span style="margin-left: 2px;"></span>
                  <!-- react-text: 2544 --><i class="far fa-user-circle"></i>xuân phú<!-- /react-text -->
                  <span style="border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                  <span style="margin-left: 2px;"></span>
                  <span title="5 phút trước">5 phút trước</span><!-- /react-text -->
                  <span style="border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                  <span style="margin-left: 2px;"></span>
                  <span title="Quận 1, TP.HCM">q1</span>
                  &nbsp;
                </div>
              </div>
            </div>
            <!--Thông tin-->
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>

        <div class="col-lg-12" style="display: none;float: left;margin-bottom: 20px;" id="dv">
          <div class="col-lg-6" style="float: left; margin-top: 4px;">
            <div class="khungdv">
              <div style="text-align: left; margin-left: 10px;"><i class="far fa-question-circle"></i></div>
              <div>
                <div><i class="fas fa-chevron-circle-up"></i></div>
                <div class="serviceName">Đẩy Tin Ngay</div>
                <div style="font-size: 12px; color: green;"><b>1 ngày</b></div>
                <div class="servicePrice">
                  <span><i>5.000</i></span><!-- react-text: 47 --> <!-- /react-text -->
                  <u>đ</u>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" style="float: left;margin-top: 4px;"">
            <div class="khungdv">
              <div style="text-align: left; margin-left: 10px;"><i class="far fa-question-circle"></i></div>
              <div>
                <div><i class="far fa-star"></i></div>
                <div class="serviceName">Tin đặc biệt</div>
                <div style="font-size: 12px; color: green;"><b>24 giờ</b></div>
                <div class="servicePrice">
                  <span><i>10.000</i></span><!-- react-text: 47 --> <!-- /react-text -->
                  <u>đ</u>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" style="float: left;margin-top: 4px;"">
            <div class="khungdv">
              <div style="text-align: left; margin-left: 10px;"><i class="far fa-question-circle"></i></div>
              <div>
                <div><i class="fas fa-medal"></i></div>
                <div class="serviceName">Tin ưu tiên</div>
                <div style="font-size: 12px; color: green;"><b>1 ngày</b></div>
                <div class="servicePrice">
                  <span><i>20.000</i></span><!-- react-text: 47 --> <!-- /react-text -->
                  <u>đ</u>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" style="float: left;margin-top: 4px;"">
            <div class="khungdv">
              <div style="text-align: left; margin-left: 10px;"><i class="far fa-question-circle"></i></div>
              <div>
                <div><i class="fas fa-tags"></i></div>
                <div class="serviceName">Nhãn nổi bật</div>
                <div style="font-size: 12px; color: green;"><b>7 ngày</b></div>
                <div class="servicePrice">
                  <span><i>10.000</i></span><!-- react-text: 47 --> <!-- /react-text -->
                  <u>đ</u>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!--item-->
        <!--item-->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/aothun_xanhinhinh.jpg" alt="Áo thun xanh in hình"  width="200" height="150"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Áo thun xanh in hình</a>
              </h4>
              <h5>69k</h5>
              <p class="card-text">Áo thun xanh cổ trơn in hình, chất liệu cao cấp, bán tất cả các size cho cả nam và nữ.</p>
            </div>
           <div style="width: max-width;">
            <button style="margin: 4px; border-radius: 5px; display:inline; width: 45%;">Sửa tin</button>
            <button style="margin: 4px; border-radius: 5px; display: inline; width: 45%;">Ẩn tin</button>
            <button style="margin: 4px; border-radius: 5px; display: block; width: 95%;" onclick="document.getElementById('dv').style.display='block'">Bán nhanh hơn!</button>
            </div>
            <!--thong tin-->
            <div class="thongtin" style="text-align: right;">
              <div class="thongtin1">
                <div class="thongtin2">
                  <span style="margin-left: 2px;"></span>
                  <!-- react-text: 2544 --><i class="far fa-user-circle"></i>xuân phú<!-- /react-text -->
                  <span style="border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                  <span style="margin-left: 2px;"></span>
                  <span title="1 ngày trước">1 ngày trước</span><!-- /react-text -->
                  <span style="border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                  <span style="margin-left: 2px;"></span>
                  <span title="Quận Thủ Đức, TP.HCM">q.thủ đức</span>
                  &nbsp;
                </div>
              </div>
            </div>
            <!--Thông tin-->
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>
        <!--item-->
        <!--item-->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/aothun_trangthethao.jpg" alt="Áo thun trắng thể thao"  width="200" height="150"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Áo thun trắng thể thao</a>
              </h4>
              <h5>79k</h5>
              <p class="card-text">Áo thun trắng thể thao, thiết kế thoáng mát, chất liệu bền, phù hợp với người chơi thể thao, bán tất cả các size cho cả nam và nữ.</p>
            </div>
            <div style="width: max-width;">
            <button style="margin: 4px; border-radius: 5px; display:inline; width: 45%;">Sửa tin</button>
            <button style="margin: 4px; border-radius: 5px; display: inline; width: 45%;">Ẩn tin</button>
            <button style="margin: 4px; border-radius: 5px; display: block; width: 95%;" onclick="document.getElementById('dv').style.display='block'">Bán nhanh hơn!</button>
            </div>
            <!--thong tin-->
            <div class="thongtin" style="text-align: right;">
              <div class="thongtin1">
                <div class="thongtin2">
                  <span style="margin-left: 2px;"></span>
                  <!-- react-text: 2544 --><i class="far fa-user-circle"></i>xuân phú<!-- /react-text -->
                  <span style="    border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                  <span style="margin-left: 2px;"></span>
                  <span title="2 ngày trước">2 ngày trước</span><!-- /react-text -->
                  <span style="    border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                  <span style="margin-left: 2px;"></span>
                  <span title="Quận Thủ Đức, TP.HCM">q.thủ đức</span>
                  &nbsp;
                </div>
              </div>
            </div>
            <!--Thông tin-->
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>
      </div>
      <!--item--> 
    </div>
    <!-- /.row -->
  </div>
  <!-- /.col-lg-9 -->
  <div class="boxContentRight col-md-3" data-reactid="154">
    <div data-reactid="155">
      <div class="row _2_16BZzHYG7GBL-_f7N7Ug" data-reactid="156">
        <div class="col-md-12 _2fS5C7h2Uk0EmHRlc9sYGy" data-reactid="157">
          <div class="_2ZIVS1lDi3cofxmi0NnPnf" data-reactid="158">
            <img src="https://static.chotot.com.vn/storage/PRIVATE_DASHBOARD_CDN/fd0b58f741408a3c2032a16bdae00240.svg" alt=" " width="55" height="55" data-reactid="159">
          </div>
          <div class="d6zADvLJscIizUsAMmLBH" data-reactid="160">
            <p data-reactid="161">Tài khoản Đồng Tốt</p>
            <span data-reactid="162">50.000</span>
          </div>
        </div>
        <div class="col-md-12 _2hwv-KuSBwehpe35tKamc_" data-reactid="163">
          <span class="mtev6holy4sWg2Xws0K6v" data-reactid="164">Các gói nạp</span>
        </div>
        <div class="_3l3UCYzVGoYXZyA2VlLlTv" data-reactid="165">
          <ul class="_1902iE8tRDmhuAmwmwcuOe" data-reactid="166">
            <li data-reactid="167">
             <!--  <i data-reactid="168">40</i> -->
              <label data-reactid="169">
                <span class="xgL91COrexpdYDS0TGkqB" data-reactid="170">Nạp 1.500.000</span>
                <small class="_1mIdCFAzYjbxUJJsJjTXrs" data-reactid="171"></small>
              </label>
            </li>
            <li data-reactid="172">
              <!-- <i data-reactid="173">39</i> -->
              <label data-reactid="174">
                <span class="xgL91COrexpdYDS0TGkqB" data-reactid="175">Nạp 1.000.000</span>
                <small class="_1mIdCFAzYjbxUJJsJjTXrs" data-reactid="176"></small>
              </label>
            </li>
            <li data-reactid="177">
             <!--  <i data-reactid="178">38</i> -->
              <label data-reactid="179">
                <span class="xgL91COrexpdYDS0TGkqB" data-reactid="180">Nạp 500.000</span>
                <small class="_1mIdCFAzYjbxUJJsJjTXrs" data-reactid="181"></small>
              </label>
            </li>
            <li data-reactid="182">
              <!-- <i data-reactid="183">37</i> -->
              <label data-reactid="184">
                <span class="xgL91COrexpdYDS0TGkqB" data-reactid="185">Nạp 100.000</span>
                <small class="_1mIdCFAzYjbxUJJsJjTXrs" data-reactid="186"></small>
              </label>
            </li>
            <li data-reactid="187">
              <!-- <i data-reactid="188">36</i> -->
              <label data-reactid="189">
                <span class="xgL91COrexpdYDS0TGkqB" data-reactid="190">Nạp 50.000</span>
                <small class="_1mIdCFAzYjbxUJJsJjTXrs" data-reactid="191"></small>
              </label>
            </li>
            <li data-reactid="192">
            <!--   <i data-reactid="193">81</i> -->
              <label data-reactid="194">
                <span class="xgL91COrexpdYDS0TGkqB" data-reactid="195">Nạp 20.000</span>
                <small class="_1mIdCFAzYjbxUJJsJjTXrs" data-reactid="196"></small>
              </label>
            </li>
          </ul>
        </div>
        <div class="col-md-12 _2VydBcgD2uEjsebLNkOKQn" data-reactid="197">
          <a href="#" data-reactid="198">Nạp Ngay</a>
        </div>
      </div>
    </div>
  </div>
    
@endsection