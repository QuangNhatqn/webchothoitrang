@extends('customer.layout.index')

@section('content')

<div>
  <div class="container">
    <div class="row">
      <br>
      <h1 style="text-align: center">Thông tin cá nhân</h1>

      @if(count($errors)>0)
      <div class="alert alert-danger">
        @foreach ($errors->all() as $err)
        {{$err}}<br>
        @endforeach
      </div>
      @endif

      @if (session('thongbao'))
      <div class="alert alert-success">
        {{session('thongbao')}}
      </div>
      @endif

      <div id="carouselExampleIndicators" class="carousel slide my-4 col-lg-9" data-ride="carousel ">
        <div class="container" style="color:rgba(0, 0, 0, 0.87);transition:all 450ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;box-sizing:border-box;font-family:Verdana, Arial, sans-serif;-webkit-tap-highlight-color:rgba(0,0,0,0);box-shadow:0 1px 2px rgba(0,0,0,.1);border-radius:2px;border:1px solid #D7D9DC;border-top:0;" data-reactid="35">
          <div class="row" data-reactid="36">
            <div class="col-12 col-md-12 padding" data-reactid="37" style="background-color: #FF923A">
              <div class="contactInfo false" data-reactid="38" >
                <br>

                <div class="info" data-reactid="50" style="text-align:center" >
                  <h4 class="name" data-reactid="51">{{$users->FullNames}}</h4>
                  <p style="color: gray;"><i>Số điện thoại: </i><span style="color: red; font-size: 20px;">{{$users->PhoneNumbers}}</span></p>
                  
                  <div class="infoText secondaryText" data-reactid="94">
                    <!-- react-text: 95 -->
                    Ngày tham gia
                    <!-- /react-text -->
                    <!-- react-text: 96 -->
                    <!-- /react-text -->
                    <!-- react-text: 97 -->
                    {{$users->ParticipateDates}}
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
              <li >
                <a href="" class="tendexuat" style="font-size:18px; padding: 15px; margin: 5px; border: 1px solid gray; border-radius: 5px; background-color: #FF923A;">Tất cả tin</a>
              </li>
              <li >
                <a href="" class="tendexuat" style="font-size:18px; padding: 15px; margin: 5px; border: 1px solid gray; border-radius: 5px; background-color: #FF923A;">Đang bán</a>
              </li>
              <li >
                <a href="" class="tendexuat" style="font-size:18px; padding: 15px; margin: 5px; border: 1px solid gray; border-radius: 5px; background-color: #FF923A;">Tin đã ẩn</a>
              </li>
              <li >
                <a href="" class="tendexuat" style="font-size:18px; padding: 15px; margin: 5px; border: 1px solid gray; border-radius: 5px; background-color: #FF923A;">Tin chưa duyệt</a>
              </li>
              <li >
                <a href="" class="tendexuat" style="font-size:18px; padding: 15px; margin: 5px; border: 1px solid gray; border-radius: 5px; background-color: #FF923A;">Tin đã hủy</a>
              </li>
            </ul>
          </div>
        </h4>
        <br>
        <div class="row">
          <!--item-->
          @foreach ($users2 as $us)
          {{-- expr --}}

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href=""><img class="card-img-top" src="{{$us->URLImage1s}}" alt="{{$us->URLImage1s}}" width="200" height="150"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="">{{$us->Titles}}</a>
                </h4>
                <h5>{{$us->Costs}}<sup>đ</sup></h5>
                <p class="card-text">{{$us->Details}}</p>
              </div>
              <div style="width: max-width;">
                <button style="margin: 4px; border-radius: 5px; display:inline; width: 45%;">Sửa tin</button>
                <button style="margin: 4px; border-radius: 5px; display: inline; width: 45%;" ><a href="customer/trangcanhan/an/{{$us->id}}">Ẩn tin<a></button>
                <button style="margin: 4px; border-radius: 5px; display: block; width: 95%;" onclick="document.getElementById('{{$us->id}}').style.display='block'">Bán nhanh hơn!</button>
              </div>

              <!--thong tin-->
              <div class="thongtin" style="text-align: right;">
                <div class="thongtin1">
                  <div class="thongtin2">
                    <span style="margin-left: 2px;"></span>
                    <span> @if ($us->Statuss == "1")
                {{'Chưa duyệt'}}
                @elseif ($us->Statuss == "2") {{'Đã duyệt'}}
                @elseif ($us->Statuss == "3") {{'Admin xóa'}}
                @else {{'Người dùng xóa'}}
              @endif</span>
                    <span style="border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                    <span style="margin-left: 2px;"></span>
                    <span title="{{$us->PostTimes}}">{{$us->PostTimes}}</span><!-- /react-text -->
                    <span style="border-left: 1px solid rgba(0,0,0,0.2);height: 14px;" ></span>
                    <span style="margin-left: 2px;"></span>
                    <span title="{{$us->Addresss}}">ĐC</span>
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

          <div class="col-lg-12" style="display: none;float: left;margin-bottom: 20px; border: 1px solid gray;" id="{{$us->id}}">
            <div class="col-lg-6" style="float: left; margin-top: 4px;">
              <div class="khungdv">
                <div style="text-align: left; margin-left: 10px;"><i class="far fa-question-circle"></i></div>
                <div>
                  <div><i class="fas fa-chevron-circle-up"></i></div>
                  <div class="serviceName"><a href="customer/trangcanhan/daytin/{{$us->id}}">Đẩy Tin Ngay<a></div>
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
        <button style="margin: 5px; border-radius: 5px; display: block;" onclick="document.getElementById('{{$us->id}}').style.display='none'"><i class="fas fa-sort-up"></i></button>
    </div>

    @endforeach


    
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
          <p data-reactid="161">Tài khoản Đồng Tốt hiện có:</p>
          <span data-reactid="162">{{$us->Coins}} COINS</span>
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
</div>
@endsection