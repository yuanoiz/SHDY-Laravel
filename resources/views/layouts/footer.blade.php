
<footer class="bg-off-white">
    <div class="footer-upper pt-100 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="footer-content-item">
                        <div class="footer-logo">
                            <a href="{{url('/')}}"><img src="{{asset('assets/images/logo-red.png')}}" alt="logo"></a>
                        </div>
                        <div class="footer-details">
                            <p>珊海电业 </p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="footer-content-list footer-content-item">
                        <div class="footer-content-title">
                            <h3>Our Offer</h3>
                        </div>
                        <ul class="footer-details footer-list">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="blogs-right-sidebar.html">Blog</a></li>
                            <li><a href="faqs.html">FAQ's</a></li>
                            <li><a href="shops-right-sidebar.html">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">

                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="footer-content-list footer-content-item">
                        <div class="footer-content-title">
                            <h3>联系方式</h3>
                        </div>
                        <ul class="footer-details footer-address">
                            <li>地址: <span>广州市白云区石井大冈兰花街19号</span></li>
                            <li>电子邮件: <a href="mailto:support@luba.com">267158752@qq.com</a></li>
                            <li>电话: <a href="tel:0020-678-1234-5567">+86 18922775404</a></li>
                            <li>营业时间: <span>Mon-Fri / 9:00 AM - 6:00 PM</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-lower bg-off-white-dark">
        <div class="container">
            <div class="d-flex justify-content-between flex-wrap flex-lg-nowrap align-items-baseline">
                <div class="footer-lower-item d-flex justify-content-between flex-wrap align-items-baseline">
                    <div class="footer-copyright-text footer-copyright-text-red">
                        <p>Copyright ©2021 广州珊海电业有限公司  <a href="https://beian.miit.gov.cn">粤ICP备18096837号</a></p>
                    </div>
                    <div class="footer-lower-action d-flex flex-wrap align-items-baseline">
                        <ul class="footer-action-list">
                            <li>当前时间(HKT):<a> <?php
                                    use Carbon\Carbon;
                                    echo Carbon::now('Asia/Hong_Kong');
                                    ?></a> </li>
                            <li>当前IP(Address):<a> <?php
                                    $ip=$_SERVER["REMOTE_ADDR"];
                                    echo $ip;
                                    ?> </a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<div class="scroll-top" id="scrolltop">
    <div class="scroll-top-inner">
        <span><i class="flaticon-up-arrow"></i></span>
    </div>
</div>


