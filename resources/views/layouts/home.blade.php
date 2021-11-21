{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="http://www.kalerhaat.com/front_asset/style.css">
  <link rel="stylesheet" href="http://www.kalerhaat.com/front_asset/responsive.css">
  <link rel="stylesheet" href="http://www.kalerhaat.com/front_asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://www.kalerhaat.com/front_asset/css/normalize.css">


  <link rel="stylesheet" href="http://www.kalerhaat.com/front_asset/css/font-awesome.min.css">


  <link rel="stylesheet" href="http://www.kalerhaat.com/front_asset/css/mega_menu.css">
  <link rel="stylesheet" href="http://www.kalerhaat.com/front_asset/css/customshop_style.css">
  <script src="http://www.kalerhaat.com/front_asset/jquery.min.js"></script>

  <link rel="shortcut icon" href="http://www.kalerhaat.com/front_asset/favicon.ico">
  <script>
    $(document).ready(function(){
      $("p").click(function(){
        alert("The paragraph was clicked.");
      });
    });
    </script>
    <script>
        function UpdateOrderInfo(obj) {
            if (obj == 1) {
                delivery_amount = 10.00;
            } else if (obj == 2) {
                delivery_amount = 20.00;
            } else {
                delivery_amount = 0.00;
            }

            total_order = document.getElementById("shipping").value;
            if (total_order) {
                total_amount = 490 + Number(delivery_amount);
                document.getElementById("CustomerDeliveryPoint").innerHTML = delivery_amount;
                document.getElementById("GrandOrder").innerHTML = total_amount;
            }

        }

        </script>
        <script>
            function UpdateOrderInfo(obj) {
                if (obj == 1) {
                    delivery_amount = 60;
                } else if (obj == 2) {
                    delivery_amount = 100;
                }else if (obj == 3) {
                    delivery_amount = 150;
                } else {
                    delivery_amount = 0;
                }
                total_order_tk = document.getElementById("TotalPtk").value
                if (total_order_tk) {
                    total_tk = Number(total_order_tk) + Number(delivery_amount);
                    document.getElementById("CustomerDeliveryPoint").innerHTML = ' ৳ ' + delivery_amount;

          document.getElementById("travel_cost").value = delivery_amount;
                    document.getElementById("GrandOrderTk").innerHTML = ' ৳ ' + total_tk;
                }

            }
</script>
</head>
<body>
    <div class="form-group" style="padding-bottom: 15px">
        <select id="DeliAddress" onchange="UpdateOrderInfo(this.value)" name="customer_area"  required="required"  class="form-control" style="border: 1px solid #ccc;border-radius: 5px !important;">
            <option value="">Select Your Area</option>
            <option   value="1">Inside Dhaka</option>
            <option value="2">Outside Dhaka</option>

           <option value="3">Outside Dhaka Home Delivery </option>
        </select>
    </div>
<hr>
<tr class="active">
    <td   style="padding:10px !important;text-align:left;font-family: 'Open Sans', sans-serif;
font-size: 14px;"> Sub Total</td>
    <td   style="padding:10px !important;text-align:right;font-family: 'Open Sans', sans-serif;
font-size: 14px;"> 	৳  490</td>
</tr>

<tr>
    <td  style="padding:10px !important;text-align:left;font-family: 'Open Sans', sans-serif;
font-size: 14px;"> Delivery Cost</td>
    <td   style="padding:10px !important;text-align:right;font-family: 'Open Sans', sans-serif;
font-size: 14px;" id="CustomerDeliveryPoint"> 00 </td>
</tr>


<tr class="active">
<input id="TotalPtk" type="hidden" value="490">

<td   style="padding:10px !important;text-align:left;font-family: 'Open Sans', sans-serif;
font-size: 14px;"> Grand Total</td>
<td   style="padding:10px !important;text-align:right;font-family: 'Open Sans', sans-serif;
font-size: 14px;" id="GrandOrderTk">

     ৳  490</td>
</tr>

     <input id="shipping" type="hidden" value="1000">

     <td colspan="3"> Grand Total</td>
     <td colspan="3" id="GrandOrder">0</td>
    @yield('content')

<script>
    $(document).ready(function(){
        $('.first').change(function(){
            if($(this).val() !=''){
                var select=$(this).attr("id");
                var value=$(this).val();
                var first=$(this).data('first');
                var _token=$('input[name="_token"]').val();
                $.ajax({
                    url:"{{route('home.fatch')}}",
                    method="POST",
                    data:{select:select,value:value,_token:_token,first:first},
                    success:function(result)
                    {
                        $('#'+first).html(result);
                    }
                })
            }
        })
    })
</script>
</body>
</html> --}}


<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>kalerhaat</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="http://www.kalerhaat.com/front_asset/style.css">
        <link rel="stylesheet" href="http://www.kalerhaat.com/front_asset/responsive.css">
        <link rel="stylesheet" href="http://www.kalerhaat.com/front_asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://www.kalerhaat.com/front_asset/css/normalize.css">


        <link rel="stylesheet" href="http://www.kalerhaat.com/front_asset/css/font-awesome.min.css">


        <link rel="stylesheet" href="http://www.kalerhaat.com/front_asset/css/mega_menu.css">
        <link rel="stylesheet" href="http://www.kalerhaat.com/front_asset/css/customshop_style.css">
        <script src="http://www.kalerhaat.com/front_asset/jquery.min.js"></script>

        <link rel="shortcut icon" href="http://www.kalerhaat.com/front_asset/favicon.ico">

        <style>
            .cart-close {
                background: #d00;
                height: 50px;
                width: 30px;
                position: absolute;
                top: 50%;
                font-size: 30px;
                color: #fff;
                cursor: pointer;
                border-radius: 10px 0px 0px 10px;
                padding-left: 4px;
                padding-top: 7px;
                text-align: center;
            }
            .product-hover-effect:hover{
                border: 1px solid #00255f  !important;
                transition:  all .1s;
            }

            .buy-now:hover{
                color: #00255f ;
                transition:  all .1s;
            }
            li{list-style-type: none;}
            img.zoomEffect {
                /*    width: 350px;
                    height: 200px;*/
                -webkit-transition: all 1.5s ease-in-out;
                -moz-transition: all 1.5s ease-in-out;
                -o-transition: all 1.5s ease-in-out;
                -ms-transition: all 1.5s ease-in-out;
            }

            .transition {
                -webkit-transform: scale(1.4);
                -moz-transform: scale(1.4);
                -o-transform: scale(1.4);
                transform: scale(1.4);
            }
        </style>
        <style>
            .main-category:hover{
                background-color: #ededed;
            }
            .sub-category-name:hover{
                background-color: #ededed;
            }

            .footer-panel > li > a{
                font-weight: bolder
            }
            .footer-panel > li > a:hover{
                background: none;
                cursor: pointer;
                color: orange !important;
            }
            .footer-panel > li > a:focus{
                background: none;
            }

            input[type="button"], input[type="reset"], input[type="submit"] {
                -webkit-appearance: button;
                cursor: pointer;
                outline: none;}

            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            .product-name-c{
    font-size: 16px;
    text-align: center;
    font-weight: 400;
    height: 45px;
    margin: 0;
    color: #777777;
    overflow: hidden;
    line-height: normal;

            }


            .product-hover-area a img{

                padding: 0 !important;
                width: 100% !important;
            }
            @media (min-width: 768px) {
                .product-custom-area{
                    width: 14.2777% !important;
                }

            }
           @media (max-width: 767px) {
            .closemenu {
    position: absolute;
    left: 100%;
    top: 10%;
    background: #1d2127;
    border: #1d2127;
    padding: 5px;
    width: 40px;
    height: 40px;
    color: #fff;
    border-radius: 0 4px 4px 0;
    font-weight: bold;
    font-size: 20px;
    }

    .dropdown-menu {
    top: 15px;
    left: -79px;
    min-width: 180px;
    }
}
ul.ac-link .dropdown-menu {
    margin: 6px 0px 0px -57px;
    border: 1px solid #f3f1ee;
    -webkit-box-shadow: 0 0 0 4px rgba(0,0,0,0.03);
    box-shadow: 0 0 0 4px rgba(0,0,0,0.03);
    min-width: 180px;
}
ul.ac-link .dropdown-menu li {
    display: block!important;
    margin: 0!important;
    padding: 0px 7px!important;
    line-height: normal;
    height: auto;
    font-size: 11px;
    color: #000;
}ul.ac-link .dropdown-menu li .btn {
    width: 100%;
    display: block;
    padding: 10px;
    font-size: 13px!important;
    text-transform: uppercase;
    font-weight: 600;
    color: #fff!important;
    height: 36px!important;
    padding-top: 9px!important;
    border-radius: 4px;
}
ul.ac-link .dropdown-menu li .signup-overlay {
    margin-top: 5px;
}
.btn.btn-default {
    background-color: #074488;
    color: #fff;
    text-transform: uppercase;
}

</style>
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

        <script>
            if (performance.navigation.type == 2) {
                location.reload(true);
            }
        </script>
  <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1130071524134227');
fbq('init', '587802162298276');

fbq('track', 'PageView');
</script>

<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1130071524134227&ev=PageView&noscript=1"
/></noscript>

<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=587802162298276&ev=PageView&noscript=1"
/></noscript>

<!-- End Facebook Pixel Code -->
 <meta name="facebook-domain-verification" content="e7d2gfw7gm5dvdz4esmcjdwkknq5xo" />


    </head>

    <body style="background-color:#fff;font-family: Rubik,Noto Sans Bengali,Helvetica Neue,Helvetica,Arial,sans-serif;"  >
        <!--<body style="background-color:#fff" ondragstart="return false;" ondrop="return false;" oncontextmenu="return false;" > -->

<!--<section style="background-color:red ">-->
<!--                <div class="container">-->
<!--                    <div class="row"> -->
<!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">-->
<!--                            <style>-->
<!--                                .blink_me {-->
<!--  animation: blinker 6s linear infinite;-->
<!--}-->

<!--@keyframes blinker {-->
<!--  50% {-->
<!--    opacity: 0;-->
<!--  }-->
<!--}-->
<!--                            </style>-->
<!--                            <h3 style="    margin: 0;-->
<!--    padding: 5px;-->
<!--    font-size: 20px;-->
<!--    text-align: center;color:#fff" class="blink_me">-->
<!--                            দেশের সর্বিক পরিস্থিতি বিবেচনা করে আমাদের সকল কার্যাদি ও সেবা ২৫ মার্চ ২০ থেকে ৪ এপ্রিল পর্যন্ত বন্ধ থাকবে-->

<!--                              ।-->
<!--                            </h3>-->

<!--                        </div>-->


<!--                    </div> -->
<!--                </div>-->



<!--            </section>-->

        <section class=" area-mobile-off" style="box-shadow: 0 3px 5px rgba(57, 63, 72, 0.3);">

            <div id="hpart">
                <div class="container">
                    <div  class="wel-text col-sm-4">Welcome to <span>Kalerhaat.</span></div>
                    <div class="pull-right text-right col-sm-8">

                        <ul class="ac-link clearfix">
                            <li><a href="http://www.kalerhaat.com/"><span class="glyphicon glyphicon-home"></span> Home</a></li>

                            <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>

                            <li><a href="#"><span class="glyphicon glyphicon-search"></span> Track Order</a></li>

                            <li><a href="http://www.kalerhaat.com/resistration-information"><span class="glyphicon glyphicon-shopping-cart"></span> Checkout</a></li>


                            <li class="dropdown">
                                <a href="javascript:void(0)" data-toggle="dropdown" class="user-logs"><span class="glyphicon glyphicon-user"></span> Account</a>

                                 <ul class="dropdown-menu" style="margin-top:10px;padding-top: 0;">
                                        <li style="padding: 0 !important;">
                                            <div style="background:#eee;text-align:left;padding:10px">Login</div>
                                    <form action="http://www.kalerhaat.com/user/sign_in" method="post" class="form-horizontal" enctype="multipart/form-data"  >



                                    <div class="" style="padding: 10px">
                                        <input style="width: 100% !important;border: 1px solid #eee;padding-left: 10px" name="customer_mobile" required="" type="number" class="form-control" placeholder="Mobile Number .. "  >

                                    </div>

                                 <div class="" style="padding: 10px">
                                        <input style="width: 100% !important;border: 1px solid #eee;padding-left: 10px" name="customer_password" required="" type="password" class="form-control" placeholder="Password .. "  >

                                    </div>


                                    <div class="" style="padding-bottom: 15px">
                                        <input id="submitBTN" type="submit" class="btnlogin  btn btn-default" value="Login" style="width:100% !important;background: #008acf">
                                    </div>

                                       <div class="signup-overlay" style="padding:10px 5px;font-size: 11px;text-align:center">
                                                New customer? <a href="http://www.kalerhaat.com/user/sign_up"  style=" color: red; display: initial; font-size: 13px; text-shadow: 0px 0px 0px #ddd;  text-transform: lowercase;  " >Signup

                                                </a>  </div>

                                </form>





                                        </li>
                                    </ul>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <section style="background-color:#0083C4">
                <div class="container">
                    <div class="row" style="padding-top: 14px;">

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-zero">
                            <div style="float: left">
                                <a href="http://www.kalerhaat.com/"><img src="http://www.kalerhaat.com/image/manufacturer_logo/logo.png" style="float: right;padding-top: 5px;" alt="kalerhaat  shop" title="kalerhaat logo"></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 search-area" style="">

                            <div id="search" class="search">

                                    <select id="search_cat" name="cat">
                                        <option value="">ক্যাটেগরীজ</option>

                                <option value="2">গৃহস্থালী পণ্য</option>

                                <option value="3">স্বাস্থ্য সুরক্ষা  পণ্য</option>

                                <option value="4">ইলেকট্রনিক্স পণ্য </option>

                                <option value="5">ছেলেদের শপিং</option>

                                <option value="6">মেয়েদের শপিং</option>

                                <option value="7">বেবী অ্যান্ড কিডস</option>

                                <option value="8">কসমেটিক্স</option>

                                <option value="10">মোবাইল ও গ্যাজেট</option>

                                <option value="14">ঘড়ি</option>
                                                        </select>
                                    <div class="input-group">
                                        <input type="search" name="q" id="search_query" class="form-control" value="" placeholder="সার্চ করুন" autocomplete="off">
                                        <button onclick="SearchProduct_byUser(document.getElementById('search_query').value)" type="button">&nbsp;</button>
                                        <ul class="dropdown-menu"></ul>
                                    </div>

                            </div>


                        </div>

                        <div   class="menu-rig col-lg-3 col-md-3 col-sm-3 col-xs-12  " style="padding-top: 40px">

                            <div class="pull-right ">
                                <div class="hotline">
                                    <i class="fa fa-phone"></i>
                                    <span>01942-555666</span>
                                </div>
                                <div class="cartbtn">
                                    <!--<a  href="resistration-information" class="cart-button">-->

                                     <a  onclick="CartPanel(1)"  href="javascript:void(0)" class="cart-button">

                                        <div class="items">
                                            <img class="icon-shopping-bag" src="http://www.kalerhaat.com/images/shopping-bag.png">
                                                                                         <div class="itemcount item_0 "  id="MtotalCartItemsBlank">
                                                <span class="itemno" id="MtotalCartItems">1</span>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>



            <nav class="navbar navbar-default lightHeader " role="navigation" style="height: auto;top: 0;box-shadow: none;background: #006fa6">
                <div class="container"  >
                    <!--<div class="container" style="justify-content: center; display: flex; padding-right: 0;">-->

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>


                    <div class="collapse navbar-collapse navbar-ex1-collapse" style="padding:0">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="color-2">

                                <a  style="padding: 15px;" href="http://www.kalerhaat.com/" >
                                    <span style="font-weight: bold;padding: 0">
                                        Home
                                    </span>
                                </a>

                            </li>

                                <li class=" dropdown megaDropMenu color-2">
                                                                        <a  style="padding: 15px;" href="http://www.kalerhaat.com/category/গৃহস্থালী-পণ্য/2" >
                                        <span style="font-weight: bold;padding: 0">
                                            গৃহস্থালী পণ্য
                                        </span>
                                    </a>

                                </li>


                                <li class=" dropdown megaDropMenu color-2">
                                                                        <a  style="padding: 15px;" href="http://www.kalerhaat.com/category/স্বাস্থ্য-সুরক্ষা--পণ্য/3" >
                                        <span style="font-weight: bold;padding: 0">
                                            স্বাস্থ্য সুরক্ষা  পণ্য
                                        </span>
                                    </a>

                                </li>


                                <li class=" dropdown megaDropMenu color-2">
                                                                        <a  style="padding: 15px;" href="http://www.kalerhaat.com/category/ইলেকট্রনিক্স-পণ্য-/4" >
                                        <span style="font-weight: bold;padding: 0">
                                            ইলেকট্রনিক্স পণ্য
                                        </span>
                                    </a>

                                </li>


                                <li class=" dropdown megaDropMenu color-2">
                                                                        <a  style="padding: 15px;" href="http://www.kalerhaat.com/category/ছেলেদের-শপিং/5" >
                                        <span style="font-weight: bold;padding: 0">
                                            ছেলেদের শপিং
                                        </span>
                                    </a>

                                </li>


                                <li class=" dropdown megaDropMenu color-2">
                                                                        <a  style="padding: 15px;" href="http://www.kalerhaat.com/category/মেয়েদের-শপিং/6" >
                                        <span style="font-weight: bold;padding: 0">
                                            মেয়েদের শপিং
                                        </span>
                                    </a>

                                </li>


                                <li class=" dropdown megaDropMenu color-2">
                                                                        <a  style="padding: 15px;" href="http://www.kalerhaat.com/category/বেবী-অ্যান্ড-কিডস/7" >
                                        <span style="font-weight: bold;padding: 0">
                                            বেবী অ্যান্ড কিডস
                                        </span>
                                    </a>

                                </li>


                                <li class=" dropdown megaDropMenu color-2">
                                                                        <a  style="padding: 15px;" href="http://www.kalerhaat.com/category/কসমেটিক্স/8" >
                                        <span style="font-weight: bold;padding: 0">
                                            কসমেটিক্স
                                        </span>
                                    </a>

                                </li>


                                <li class=" dropdown megaDropMenu color-2">
                                                                        <a  style="padding: 15px;" href="http://www.kalerhaat.com/category/মোবাইল-ও-গ্যাজেট/10" >
                                        <span style="font-weight: bold;padding: 0">
                                            মোবাইল ও গ্যাজেট
                                        </span>
                                    </a>

                                </li>


                                <li class=" dropdown megaDropMenu color-2">
                                                                        <a  style="padding: 15px;" href="http://www.kalerhaat.com/category/ঘড়ি/14" >
                                        <span style="font-weight: bold;padding: 0">
                                            ঘড়ি
                                        </span>
                                    </a>

                                </li>



                        </ul>
                    </div>

                </div>
            </nav>


        </section>
        <div class="modal fade" id="mySms" role="dialog">
            <div class="modal-dialog">
                <form action="http://www.kalerhaat.com/ovation/find_order_history" method="post">
                    <!-- Modal content-->
                    <div class="modal-content" style="border: 3px solid #00255f ;">
                        <div class="modal-header" style="border-bottom: 1px solid #35A3D3;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"> <strong>Track Order Record</strong></h4>
                        </div>
                        <div class="modal-body">


                            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 form-group">
                                <input style="width:100% !important;padding: 20px;" required type="number" class="form-control" name="mobile_number" placeholder="Please Type Your Mobile Number">
                            </div>

                        </div>
                        <div class="modal-footer" style="border:0;padding: 50px 30px 30px 30px;">
                            <input style="color:#fff;font-weight:bold;padding: 5px;width:100% !important;background:#02255F"  type="submit" class="btn  pull-right" value="Search">
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!--=========================header bottom section==================-->


        <div id="hpart" class="area-mobile-on hpart-mobile" style="display: none">
            <div class="container" style="padding-right: 0">
                <div  class="wel-text col-xs-8">Welcome to <span>Kalerhaat.</span></div>
                <div class="pull-right text-right col-xs-4" style="padding-right: 0;">

                    <div class="topnav mobile"  style="float: right;">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </div>


<span class="dropdown">
                    <a data-toggle="dropdown"  class="usernav mobile btnlogin" href="javascript:void(0)" style="float: right;">
                        <span class="glyphicon glyphicon-user"></span>
                    </a>
                    <ul class="dropdown-menu" style="margin-top:10px;padding-top: 0;">
                                        <li style="padding: 0 !important;">
                                            <div style="background:#eee;text-align:left;padding:10px">Login</div>
                                    <form action="http://www.kalerhaat.com/user/sign_in" method="post" class="form-horizontal" enctype="multipart/form-data"  >



                                    <div class="" style="padding: 10px">
                                        <input style="width: 100% !important;border: 1px solid #eee;padding-left: 10px" name="customer_mobile" required="" type="number" class="form-control" placeholder="Mobile Number .. "  >

                                    </div>

                                 <div class="" style="padding: 10px">
                                        <input style="width: 100% !important;border: 1px solid #eee;padding-left: 10px" name="customer_password" required="" type="password" class="form-control" placeholder="Password .. "  >

                                    </div>


                                    <div class="" style="padding-bottom: 15px">
                                        <input id="submitBTN" type="submit" class="btnlogin  btn btn-default" value="Login" style="width:100% !important;background: #008acf">
                                    </div>

                                       <div class="signup-overlay" style="padding:10px 5px;font-size: 11px;text-align:center">
                                                New customer? <a href="http://www.kalerhaat.com/user/sign_up"  style=" color: red; display: initial; font-size: 13px; text-shadow: 0px 0px 0px #ddd;  text-transform: lowercase;  " >Signup

                                                </a>  </div>

                                </form>





                                        </li>
                                    </ul></span>                </div>
            </div>
            <ul class="ac-link  ">
                <li style="margin-left: 10px;"><a href="http://www.kalerhaat.com/"><span class="glyphicon glyphicon-home"></span> Home</a></li>

                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>

                <li><a href="#"><span class="glyphicon glyphicon-search"></span> Track Order</a></li>

                <li><a href="http://www.kalerhaat.com/resistration-information"><span class="glyphicon glyphicon-shopping-cart"></span> Checkout</a></li>


            </ul>
        </div>
        <nav id="menuBar" class="navbar navbar-default lightHeader  " role="navigation" style="height: auto;top:-1px;background: #0083C4;box-shadow: none;" >
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo-area" style="padding-top: 5px;padding-bottom: 5px;">
                    <div>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" style="padding-right: 0;float: left;margin-left: 20px;margin-top: 5px;background-color: transparent; border: 0;box-shadow: none;">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="search-area mobile" style="padding-top: 0;">
                        <button class="btntoggle">
                            <i class="fa fa-search"></i>
                        </button>
                        <div class="search-form" hidden="" style="display: none;">

                            <input type="search" name="q" id="searchMf" class="form-control ui-autocomplete-input" value="" placeholder="সার্চ করুন" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                            <button type="submit"  onclick="SearchProduct_byUser(document.getElementById('searchMf').value)">
                                <i class="fa fa-search"></i>
                            </button>
                            <button class="btnclose">
                                <i class="fa fa-times-circle"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        <a href="http://www.kalerhaat.com/" style="float: left;  ">
                            <img src="http://www.kalerhaat.com/image/manufacturer_logo/logo.png" class="img-responsive" alt="kalerhaat"  title="kalerhaat" style="width: 140px;">
                        </a>
                    </div>
                    <!--                    <a href="#"data-toggle="modal" data-target="#mySms"   style="float: right;padding-right: 20px;">
                                            <i class="fa fa-user" style="color: #fff; font-size: 30px; font-weight: bold; padding-top: 11px;"></i>
                                        </a>-->

                    <!--<a href="resistration-information"  style="float: right;padding-right: 20px;">-->

                     <a  onclick="CartPanel(1)"  href="javascript:void(0)" style="float: right;padding-right: 20px;">



                        <div class="cartbtn mobile">

                            <div class="items">
                                <img class="icon-shopping-bag" src="http://www.kalerhaat.com/images/shopping-bag.png">



                            <div class="itemcount item_1"  id="MtotalCartItemsBlank2">
                                    <span class="itemno" id="MtotalCartItems2"> 1</span>
                                </div>


                            </div>

                        </div>
                    </a>




                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse" style="position: absolute; width: 80%;">
                <button class="closemenu mobile" data-toggle="collapse" data-target=".navbar-ex1-collapse">x</button>
                    <ul class="nav navbar-nav navbar-left" style="height: 100vh;">




                            <li style="padding-left: 10px;" class=" dropdown megaDropMenu color-2" >
                                                                <a href="http://www.kalerhaat.com/category/গৃহস্থালী-পণ্য/2" >
                                    <span style="font-weight: normal;color: #000">গৃহস্থালী পণ্য
                                    </span>
                                </a>

                            </li>


                            <li style="padding-left: 10px;" class=" dropdown megaDropMenu color-2" >
                                                                <a href="http://www.kalerhaat.com/category/স্বাস্থ্য-সুরক্ষা--পণ্য/3" >
                                    <span style="font-weight: normal;color: #000">স্বাস্থ্য সুরক্ষা  পণ্য
                                    </span>
                                </a>

                            </li>


                            <li style="padding-left: 10px;" class=" dropdown megaDropMenu color-2" >
                                                                <a href="http://www.kalerhaat.com/category/ইলেকট্রনিক্স-পণ্য-/4" >
                                    <span style="font-weight: normal;color: #000">ইলেকট্রনিক্স পণ্য
                                    </span>
                                </a>

                            </li>


                            <li style="padding-left: 10px;" class=" dropdown megaDropMenu color-2" >
                                                                <a href="http://www.kalerhaat.com/category/ছেলেদের-শপিং/5" >
                                    <span style="font-weight: normal;color: #000">ছেলেদের শপিং
                                    </span>
                                </a>

                            </li>


                            <li style="padding-left: 10px;" class=" dropdown megaDropMenu color-2" >
                                                                <a href="http://www.kalerhaat.com/category/মেয়েদের-শপিং/6" >
                                    <span style="font-weight: normal;color: #000">মেয়েদের শপিং
                                    </span>
                                </a>

                            </li>


                            <li style="padding-left: 10px;" class=" dropdown megaDropMenu color-2" >
                                                                <a href="http://www.kalerhaat.com/category/বেবী-অ্যান্ড-কিডস/7" >
                                    <span style="font-weight: normal;color: #000">বেবী অ্যান্ড কিডস
                                    </span>
                                </a>

                            </li>


                            <li style="padding-left: 10px;" class=" dropdown megaDropMenu color-2" >
                                                                <a href="http://www.kalerhaat.com/category/কসমেটিক্স/8" >
                                    <span style="font-weight: normal;color: #000">কসমেটিক্স
                                    </span>
                                </a>

                            </li>


                            <li style="padding-left: 10px;" class=" dropdown megaDropMenu color-2" >
                                                                <a href="http://www.kalerhaat.com/category/মোবাইল-ও-গ্যাজেট/10" >
                                    <span style="font-weight: normal;color: #000">মোবাইল ও গ্যাজেট
                                    </span>
                                </a>

                            </li>


                            <li style="padding-left: 10px;" class=" dropdown megaDropMenu color-2" >
                                                                <a href="http://www.kalerhaat.com/category/ঘড়ি/14" >
                                    <span style="font-weight: normal;color: #000">ঘড়ি
                                    </span>
                                </a>

                            </li>



                    </ul>
                </div>

            </div>
        </nav>

        <!--content area start-->

        <section class="best_seller_product"  style="background-color: #fff;padding-bottom: 10px;padding-top:0" id="main_content_area">
            <style>
    td{padding: 1px !important;    font-size: 12px;}
    .reg-title{
    padding: 12px 12px !important;
    background: #f9f9f9 !important;
    margin: 5px 0 10px 0 !important;
    color: #495c58 !important;
    border-bottom: 1px dashed #E7E7E7 !important;
    cursor: pointer !important;
    text-transform: uppercase !important;
    font-weight: 600 !important;
    }
</style>
<section class="details_section" >
    <div class="container" style="padding-right: 0  !important;;">
        <div class="row" style="margin-right: 0;padding-top:20px">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-left: 5px;padding-right: 5px">


                <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12" >
                <div class="panel panel-success" style="border: 0;">

                    <div class="panel-heading reg-title">
                        <strong style="font-size: 16px;color: #495c58"> কাস্টমার ইনফরমেশন </strong>

                    </div>

                    <div class="panel-body" style="padding:0">

                            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12" >
                                <form action="http://www.kalerhaat.com/save-customer-information" method="post" class="form-horizontal" enctype="multipart/form-data">


                                    <div class="form-group" style="padding-bottom: 15px">

                                        <!--<input name="product_id" type="hidden" value="">-->
                                        <input style="width: 100% !important;border: 1px solid #ccc;padding-left: 10px;border-radius: 5px !important;" name="customer_name" required type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1">

                                    </div>

                                    <div class="form-group" style="padding-bottom: 15px">
                                        <!--<input style="width: 100% !important;border: 1px solid #ccc;padding-left: 10px;border-radius: 5px !important;" name="customer_mobile"  required type="number" class="form-control" placeholder="Mobile" aria-describedby="basic-addon1" >-->

<input style="width: 100% !important;border: 1px solid #ccc;padding-left: 10px;border-radius: 5px !important;" name="customer_mobile" required="" type="text" class="form-control" placeholder="number" aria-describedby="basic-addon1" pattern="\d*" maxlength="11" minlength="11">

                                    </div>


                                    <div class="form-group" style="padding-bottom: 15px">
                                        <input style="width: 100% !important;border: 1px solid #ccc;padding-left: 10px;border-radius: 5px !important;" name="customer_email"  type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1">

                                    </div>

                                    <div class="form-group" style="padding-bottom: 15px">
                                        <select id="DeliAddress" onchange="UpdateOrderInfo(this.value)" name="customer_area"  required="required"  class="form-control" style="border: 1px solid #ccc;border-radius: 5px !important;">
                                            <option value="">Select Your Area</option>
                                            <option   value="1">Inside Dhaka</option>
                                            <option value="2">Outside Dhaka</option>

                                           <option value="3">Outside Dhaka Home Delivery </option>
                                        </select>
                                    </div>
<input type="hidden" id="travel_cost" name="travel_cost">
                                    <div class="form-group" style="padding-bottom: 15px">
                                        <textarea style="border: 1px solid #ccc;border-radius: 5px !important;"  class="form-control" name="customer_address"  required  placeholder="Delivery Address"></textarea>


                                    </div>


                                    <div class="form-group  reg-btn-desk " style="padding-bottom: 15px;width: 40%;margin-right: 15px;float:left" >
                                        <input id="submitBTN" type="submit" class="btn btn-success btn-block" value="অর্ডার কনফার্ম করুন" style="background: #286090;padding: 6px 12px;font-size: 14px; font-weight: 400;border:0;border-radius: 4px !important;">
                                    </div>
                                     <div class="form-group reg-btn-desk" style="padding-bottom: 15px;width: 32%;float: left;">
                                          <a href="http://www.kalerhaat.com/" class="btn btn-info btn-block" style="background: #37A1D1;padding: 6px 12px;font-size: 14px; font-weight: 400;border:0;border-radius: 4px !important;"> আরো শপিং করুন </a>
                                     </div>

                                </form>
                            </div>

                    </div>
                </div>
                </div>
            </div>


                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-left: 5px;padding-right: 5px; ">
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12" >
                    <div class="panel panel-info" style="border: 0;">
                        <div class="panel-heading reg-title"><strong style="font-size: 16px;color: #495c58;">  অর্ডার ইনফরমেশন</strong></div>
                        <div class="panel-body " style="padding: 0">


                            <table class="table table-bordered" style="margin-top: 0px;border:0" >
                                <thead>
            <tr class="active">
                <th>প্রোডাক্ট</th>
              <th style="width: 35%;text-align: right;padding:10px">মূল্য  </th>
            </tr>
                                </thead>
                                <tbody id="CustomerOrderData">


                                        <tr style="cursor: pointer">


                                            <td style="">
                                                <img style="float:left;width:40px;height: 40px" src="http://www.kalerhaat.com/image/product_image/PicsArt_10-10-04.16.10.jpg" title="Shoes & Socks Bad Smell Remover Spray" alt=" Shoes & Socks Bad Smell Remover Spray">
                                                <label style=" float: left; padding: 5px;margin-bottom:0;font-weight:500">
                               Shoes & Socks Bad Smell Remover Spray  <br>
   ৳ 490
            <i style="color:#333;font-weight:500" class="fa fa-times" ></i>
            1            &nbsp;</label>
                                            </td>





                                            <td style="width: 35%;text-align: right;padding:10px !important;text-align:right;font-family: 'Open Sans', sans-serif;
    font-size: 14px;">
                                                 ৳ 490
                                            </td>

                                        </tr>

                                                                        <tr>
                                        <td colspan="2" style="border:0;padding:20px !important"></td>
                                    </tr>
                                    <tr class="active">
                                        <td   style="padding:10px !important;text-align:left;font-family: 'Open Sans', sans-serif;
    font-size: 14px;"> Sub Total</td>
                                        <td   style="padding:10px !important;text-align:right;font-family: 'Open Sans', sans-serif;
    font-size: 14px;"> 	৳  490</td>
                                    </tr>

                                    <tr>
                                        <td  style="padding:10px !important;text-align:left;font-family: 'Open Sans', sans-serif;
    font-size: 14px;"> Delivery Cost</td>
                                        <td   style="padding:10px !important;text-align:right;font-family: 'Open Sans', sans-serif;
    font-size: 14px;" id="CustomerDeliveryPoint"> 00 </td>
                                    </tr>


                                    <tr class="active">
                                <input id="TotalPtk" type="hidden" value="390">

                                <td   style="padding:10px !important;text-align:left;font-family: 'Open Sans', sans-serif;
    font-size: 14px;"> Grand Total</td>
                                <td   style="padding:10px !important;text-align:right;font-family: 'Open Sans', sans-serif;
    font-size: 14px;" id="GrandOrderTk">

                                     	৳  490</td>
                                </tr>

                                </tbody>
                            </table>




                        </div>
                    </div>

                </div>
                </div>

                    </div>
    </div>
</section>

<script>
    function UpdateOrderInfo(obj) {
        if (obj == 1) {
            delivery_amount = 60;
        } else if (obj == 2) {
            delivery_amount = 100;
        }else if (obj == 3) {
            delivery_amount = 150;
        } else {
            delivery_amount = 0;
        }
        total_order_tk = document.getElementById("TotalPtk").value
        if (total_order_tk) {
            total_tk = Number(total_order_tk) + Number(delivery_amount);
            document.getElementById("CustomerDeliveryPoint").innerHTML = ' ৳ ' + delivery_amount;

  document.getElementById("travel_cost").value = delivery_amount;
            document.getElementById("GrandOrderTk").innerHTML = ' ৳ ' + total_tk;
        }

    }




</script>


        </section>

        <!--content area end-->





        <footer class="navbar-default" style="background: #000000">
            <div class="container-fluid ">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mobile-padding-zero" >
                    <p class="text-center" style="padding-top:5px"></p>
                    <center>
                        <a href="http://www.kalerhaat.com/about-us" target="_blank" style="color: white !important;">আমাদের সম্পর্কে </a>
                        <a href="http://www.kalerhaat.com/delivery-payment" target="_blank" style="color: white !important; margin:0 15px"> ডেলিভারি পলিসি </a>
                        <a href="http://www.kalerhaat.com/replace-refund" target="_blank" style="color: white !important;">  রিপ্লেসমেন্ট পলিসি </a>

                    </center>

                    <p class="text-center" style="color:#fff;font-weight:bold;padding-top:8px;padding-bottom: 8px;">Copyright © 2015 | kalerhaat.com </p>
                </div>

            </div>
        </footer>



















        <script src="http://www.kalerhaat.com/front_asset/js/bootstrap.min.js"></script>


    </body>

</html>
