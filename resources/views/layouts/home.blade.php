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

        <script src="http://www.kalerhaat.com/front_asset/jquery.min.js"></script>

        <link rel="shortcut icon" href="http://www.kalerhaat.com/front_asset/favicon.ico">


                                    <div class="form-group" style="padding-bottom: 15px">
                                        <select id="DeliAddress" onchange="UpdateOrderInfo(this.value)" name="customer_area"  required="required"  class="form-control" style="border: 1px solid #ccc;border-radius: 5px !important;">
                                            <option value="">Select Your Area</option>
                                            <option   value="1">Inside Dhaka</option>
                                            <option value="2">Outside Dhaka</option>

                                           <option value="3">Outside Dhaka Home Delivery </option>
                                        </select>
                                    </div>
<input type="hidden" id="travel_cost" name="travel_cost">



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





















        <script src="http://www.kalerhaat.com/front_asset/js/bootstrap.min.js"></script>


    </body>

</html>
