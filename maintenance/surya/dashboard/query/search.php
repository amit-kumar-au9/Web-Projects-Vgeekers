
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />

        <title>SRM Javik Agro</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />

        <meta content="Coderthemes" name="author" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->

        <link rel="shortcut icon" href="assets/images/LOGO.png">



        <!-- jvectormap -->

        <link href="assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />



        <!-- DataTables -->

        <link href="assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>

        <link href="assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>

        

        <!-- App css -->

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <link href="assets/css/autocomplete.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />



        <!-- Alerity css  -->

        <link rel="stylesheet" href="alertify/css/alertify.css">

        <link rel="stylesheet" href="alertify/css/themes/default.css">

    </head><body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    

        
                    

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li>

                </ul>

                <ul class="list-unstyled menu-left mb-0">
                    <li class="float-left">
                        
                        <a href="index.php" class="logo">
                            <span class="logo-lg">
                                <img src="assets/images/LOGO.png" alt="" height="57px"width: "150px";>
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/LOGO.png" alt="" height="57px"width: "150px";>
                            </span>
                        </a>
                    </li>
                    <li class="float-left">
                        <a class="button-menu-mobile navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </li>
                    
                </ul>
            </div><!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="slimscroll-menu">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Home</li>
                <li>
                    <a href="dashboard.php">
                        <i class="dripicons-meter"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="dripicons-mail"></i>
                        <span> User Management </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="view-manager.php">Manager</a>
                        </li>
                        <li>
                            <a href="view-account-manager.php">Account Manager</a>
                        </li>
                        <li>
                            <a href="view-farmer.php">Farmer</a>
                        </li>
                        <li>
                            <a href="view-agency.php">Agency</a>
                        </li>
                        <li>
                            <a href="view-retail-user.php">Retail User</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="dripicons-mail"></i>
                        <span> Document Verification</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="f-doc-verification.php">Farmer</a>
                        </li>
                        <li>
                            <a href="a-doc-verification.php">Agency</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="check-inventory.php">
                        <i class="dripicons-mail"></i>
                        <span> Check Inventory</span>
                        
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="dripicons-mail"></i>
                        <span> Add Category/Commodity</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="view-category.php">Category </a>
                             <a href="view-commodity.php">Commodity </a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="product-price-chart.php">
                        <i class="dripicons-mail"></i>
                        <span>Product Price Chart</span>
                        
                    </a>
                </li>
                <li class="menu-title">Retail Model</li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="dripicons-mail"></i>
                        <span> Process Retail Order</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="view-manifest.php">Ganerate Manifest</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="javascript: void(0);">
                        <i class="dripicons-mail"></i>
                        <span>Orders</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);">Retail Orders</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">Status</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="dripicons-mail"></i>
                        <span> Reports </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);">Confirm</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">Transmit</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">Delivered</a>
                        </li>
                        <!--  <li>
                            <a href="payment-gen-in-fav-of-farmer.php">Payments To Farmers</a>
                        </li>
                        <li>
                            <a href="payment-recieved-from-agencies.php">Payment From Agencies</a>
                        </li>
                        <li>
                            <a href="payment-recieved-through-retail.php">Payments Through Retail</a>
                        </li>
                        <li>
                            <a href="approve-inventory.php">Approve Farmer's Inventory </a>
                        </li>
                        <li>
                            <a href="agency-purchase-order.php">Process Agencies PO</a>
                        </li>
                        <li>
                            <a href="add-status.php">Update Shipment Status</a>
                        </li>
                        <li>
                            <a href="genrate-order-report.php">Genrate Order Report</a>
                        </li>
                        <li>
                            <a href="gst-report.php">GST Reports</a>
                        </li> -->
                    </ul>
                </li>
                <li>
                    <a href="cctv-account.php">
                        <i class="dripicons-mail"></i>
                        <span> Farmer's CCTV Account</span>
                    </a>
                </li>
                <li>
                    <a href="view-training-media.php">
                        <i class="dripicons-mail"></i>
                        <span> Training Media</span>
                    </a>
                </li>
                <li>
                    <a href="check-payment-challan-gen-in-fav-of-farmer.php">
                        <i class="dripicons-mail"></i>
                        <span> Payment Challans </span>
                    </a>
                </li>
                <li>
                    <a href="view-generate-invoice.php">
                        <i class="dripicons-mail"></i>
                        <span> Generate Invoice </span>
                    </a>
                </li>
                <li>
                    <a href="farmer-loan-review-mark-as-defaulter.php">
                        <i class="dripicons-mail"></i>
                        <span> Farmer Loan Account </span>
                    </a>
                </li>
                
                <li>
                    <a href="monthly-revenue-summary.php">
                        <i class="dripicons-mail"></i>
                        <span> Monthly Revenue Summary </span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="dripicons-mail"></i>
                        <span> FAQ Section</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="faq-farmer.php">Farmer </a>
                            <a href="faq-agency.php">Agency </a>
                            <a href="faq-retailuser.php">Retail User </a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="dripicons-mail"></i>
                        <span> Help Center</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="view-farmer-help.php">Farmer </a>
                            <a href="view-agency-help.php">Agency </a>
                            <a href="view-retailuser-help.php">Retail User </a>
                        </li>
                        
                    </ul>
                </li>
                    
            
                
                
            </ul>
        </li>
    </ul>
</div>

        


        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}
#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}
#myInput:focus {outline: 3px solid #ddd;}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown a:hover {background-color: #ddd;}
.show {display: block;}
.proposal-box{top : auto !important;z-index: 3;width: 100% !important;}
.proposal-list li {height: auto;text-transform :capitalize;}
.quantity-input {width: 92%;display: block;}
.instock {color: limegreen;font-size: 11px;}
</style>
<!-- ============================================================== -->

<!-- Start Page Content here -->

<!-- ============================================================== -->
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active"><a href="view-generate-invoice.php">Generate Invoice</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Genrate Invoice</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Date</label>
                                    <input type="DATE" class="form-control" id="inputAddress" placeholder="enter Date">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Customer Type</label>
                                    <select class="custom-select shop-type">
                                        <option selected disabled="disabled">Select</option>
                                        <option value="retailer">Retailer</option>
                                        <option value="agency">Agency</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">Customer</label>
                                    <select class="custom-select shopper-name">
                                      <option selected>Select</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-box">
                      <div class="row">
                          <div class="col-md-6">
                            <form>
                                  <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label class="col-form-label">Invoice Number</label>
                                      <input class="form-control invoice_num" placeholder="Invoice Number" value="" disabled="true">
                                    </div>
                                </div>
                                </form>
                            </div>
                          <div class="col-md-6 shop_details">
                              <label class="col-form-label">Invoice Details</label>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
            <div class="card-box">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <div class="dropdown">
                                <label class="col-form-label">Product</label>
                                <input class="form-control search-product" placeholder="Enter Product Name">
                                <div class="proposal-box" style="width: 318px; top: 50px;">
                                  <ul class="proposal-list">
                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card-box card-items">
                    <div style="overflow-x: auto;">
                        <table class="table table-bordered ">
                            <thead>
                              <tr>
                                <th></th>
                                <th>S.NO</th>
                                <th>Description</th>
                                <th>Product Name</th>
                                <th>Product ID</th>
                                <th>Quantity</th>
                                <th>Cost</th>
                                <th>Total Sales</th>
                                <th>IGST (5%)</th>
                                <th>CGST (2.5%)</th>
                                <th>SGST (2.5%)</th>
                                <th>Total</th>
                              </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class="col-12 text-right">
                          <form action="view-generate-invoice.php">
                              <button type = 'submit' class="btn btn-primary">Submit</button>
                          </form>
                      </div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<script src="assets/js/autocomplete.js"></script>

<script>

/* When the user clicks on the button,

toggle between hiding and showing the dropdown content */

function myFunction() {

  document.getElementById("myDropdown").classList.toggle("show");

}

function titleCase(text){
  var output = text.toLowerCase().replace(/\b[a-z]/g, function(txtVal) {
      return txtVal.toUpperCase();
  });
  return output;
}

function updateTotalData(){
  var igstPriceTotal = cgstPriceTotal = sgstPriceTotal = totalItemPrice = totalInvoicePrice = 0;
  $('tr[role="row"]').each(function(){
    var price = parseFloat($(this).find('td').eq(7).text());
    var igstPrice = price * igst;
    var sgstPrice = price * sgst;
    var cgstPrice = price * cgst;
    var totalPrice = price + igstPrice + cgstPrice + sgstPrice;
    $(this).find('td').eq(8).text(igstPrice);
    $(this).find('td').eq(9).text(cgstPrice);
    $(this).find('td').eq(10).text(sgstPrice);
    $(this).find('td').eq(11).text(totalPrice);
    totalItemPrice += parseFloat($(this).find('td').eq(7).text());
    igstPriceTotal += parseFloat($(this).find('td').eq(8).text());
    cgstPriceTotal += parseFloat($(this).find('td').eq(9).text());
    sgstPriceTotal += parseFloat($(this).find('td').eq(10).text());
    totalInvoicePrice += parseFloat($(this).find('td').eq(11).text());
  });
  $('tr').eq(-5).find('td').eq(-1).text(totalItemPrice);
  $('tr').eq(-4).find('td').eq(-1).text(igstPriceTotal);
  $('tr').eq(-3).find('td').eq(-1).text(cgstPriceTotal);
  $('tr').eq(-2).find('td').eq(-1).text(sgstPriceTotal);
  $('tr').eq(-1).find('td').eq(-1).text(totalInvoicePrice);
}

$('.shop-type').change(function(){
  var shopType = $(this).val();
  console.log(shopType);
  $.ajax({
    'data' : 'shopType='+shopType+'&type=name',
    'type' : 'post',
    'url' : 'fetch_shopper_details.php',
    'success' : function(response){
      var json = JSON.parse(response);
      if(!json.error){
        $('.shopper-name').empty();
        $('.shopper-name').append('<option disabled="disabled" selected>Select</option>');
        $.each(json.shops, function(key, value){
          $('.shopper-name').append(new Option(titleCase(value.shop_name), value.id));
        });
      }
    }
  });
});

var igst = cgst = sgst = 0;

$('.shopper-name').change(function(){
  var shopName = $(this).val();
  var shopType = $('.shop-type').val();
  $.ajax({
    'data' : 'shopId='+shopName+'&shopType='+shopType+'&type=all',
    'type' : 'post',
    'url' : 'fetch_shopper_details.php',
    'async' : false,
    'success' : function(response){
      var json = JSON.parse(response);
      if(!json.error){
        $('.shop_details').find('p').remove();
        $('.invoice_num').val(json.shops.invoice_time);
        $('.shop_details').append('<p>Customer Name : '+titleCase(json.shops.shop_name)+'<br/>Address : '+titleCase(json.shops.address)+'</p>');
        if(json.shops.same_state == '1'){
          sgst = cgst = 0.025;          
          igst = 0;
        }
        else {
          igst = 0.05;
          sgst = cgst = 0;
        }
        updateTotalData();
      }
    }
  });
});

$('.search-product').on('keyup', function(){
  var searchKeyword = $(this).val().toLowerCase();
  if(searchKeyword != ''){
    $.ajax({
      'data' : 'keyword='+searchKeyword,
      'type' : 'post',
      'url' : 'search-product.php',
      'success' : function(response){
        var json = JSON.parse(response);
        if(!json.error){
          console.log(json.product);
          var proposals = json.product;
          $('ul.proposal-list').empty();
          $.each(proposals, function(key, value){
            $('ul.proposal-list').append('<li class="proposal" data-id="'+value.id+'">'+titleCase(value.product)+'</li>');
          });
        }
      }
    });
  }
  else{
    $('ul.proposal-list').empty();
  }
});

$('.card-items').hide();

$('body').on('click', 'li.proposal', function(){
  var selectedItemName = $(this).text();
  var selectedItemId = $(this).data('id');
  $('.search-product').val(selectedItemName);
  $('ul.proposal-list').empty();
  $.ajax({
    'data' : 'id='+selectedItemId,
    'type' : 'post',
    'url' : 'fetch_product_details.php',
    'success' : function(response){
      var json = JSON.parse(response);
      if(!json.error){
        var totalItemCount = $('tr[role="row"]').length;
        console.log(totalItemCount);
        var productRow = '<tr role="row">';
        $.each(json.productDetails, function(key, value){
      
      var igstPrice = value.price * igst;
      var sgstPrice = value.price * sgst;
      var cgstPrice = value.price * cgst;

      productRow += '<td><span class="delete-item"><i class="fas fa-trash-alt"></i></span></td>';
      productRow += '<td>'+(totalItemCount + 1)+'</td>';
      productRow += '<td>'+titleCase(value.description)+'</td>';
      productRow += '<td>'+titleCase(value.product_name)+'</td>';
      productRow += '<td>'+value.id+'</td>';
      productRow += '<td><input type="number" class="quantity-input" min="1" max="'+value.quantity+'" value="1"><span class="instock">In Stock: '+value.quantity+'</span></td>';
      productRow += '<td>'+value.price+'</td>';
      productRow += '<td>'+value.price+'</td>';
      productRow += '<td>'+igstPrice+'</td>';
      productRow += '<td>'+cgstPrice+'</td>';
      productRow += '<td>'+sgstPrice+'</td>';
      productRow += '<td>'+value.price+'</td>';
      if(totalItemCount < 1){
        productRow += '</tr>';
        productRow += '<tr>';
        productRow += '<td colspan="9" style="text-align: right";> Total Value (Excluding Taxes & Discount)</td>';
        productRow += '<td colspan="4" style="text-align: right";>'+value.price+'</td>';
        productRow += '</tr>';
        productRow += '<tr>';
        productRow += '<td colspan="9" style="text-align: right";> IGST</td>';
        productRow += '<td colspan="4" style="text-align: right";>'+igstPrice+'</td>';
        productRow += '</tr>';
        productRow += '<tr>';
        productRow += '<td colspan="9" style="text-align: right";> CGST</td>';
        productRow += '<td colspan="4" style="text-align: right";>'+cgstPrice+'</td>';
        productRow += '</tr>';
        productRow += '<tr>';
        productRow += '<td colspan="9" style="text-align: right";> SGST</td>';
        productRow += '<td colspan="4" style="text-align: right";>'+sgstPrice+'</td>';
        productRow += '</tr>';
        productRow += '<tr>';
        productRow += '<td colspan="9" style="text-align: right";> Total Value (Including Taxes & Discount)</td>';
        productRow += '<td colspan="4" style="text-align: right";>'+value.price+'</td>';
        productRow += '</tr>';
        $('tbody').prepend(productRow);
        $('.card-items').show();
      }
      else {
        productRow += '</tr>';
        $('tr[role="row"]').last().after(productRow);
      }
        });
      }
    }
  });
});

$('body').on('change', '.quantity-input', function(){
  var qty = $(this).val();
  if(qty > 0){
    var itemPrice = parseFloat($(this).parents('tr').find('td').eq(6).text());
    var price = qty * itemPrice;
    $(this).parents('tr').find('td').eq(7).text(price);
    updateTotalData();
  }
});

$('body').on('click', '.delete-item', function(){
  $(this).parents('tr').remove();
  var totalItemCount = $('tr[role="row"]').length;
  if(totalItemCount == 0){
    $('tbody').empty();
    $('.card-items').hide();
  }
});

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>        

<!-- Footer Start -->

                <footer class="footer">

                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-md-12 text-center">

                                2020 &copy; SRM Javik Agro. All Rights Reserved.  

                            </div>

                        </div>

                    </div>

                </footer>

                <!-- end Footer -->



            </div>



            <!-- ============================================================== -->

            <!-- End Page content -->

            <!-- ============================================================== -->





        </div>

        <!-- END wrapper -->



        <!-- Right Sidebar -->

        <div class="right-bar">

            <div class="rightbar-title">

                <a href="javascript:void(0);" class="right-bar-toggle float-right">

                    <i class="mdi mdi-close"></i>

                </a>

                <h5 class="m-0 text-white">Settings</h5>

            </div>

            <div class="slimscroll-menu">

                <!-- User box -->

                <div class="user-box">

                    

            

                    <h5><a href="javascript: void(0);">Harshit Garg</a> </h5>

                    <p class="text-muted mb-0"><small>Admin</small></p>

                </div>



                <!-- Settings -->

                <hr class="mt-0" />

                <h5 class="pl-3">Basic Settings</h5>

                <hr class="mb-0" />

                <!-- Timeline -->

                

                <div class="p-3">

                    <div class="inbox-widget">

                        <div class="inbox-item">

                            <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>

                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">My Profile</a></p>

                        </div>

                        <div class="inbox-item">

                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>

                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Logout</a></p>

                        </div>

                        

                    </div> <!-- end inbox-widget -->

                </div> <!-- end .p-3-->



            </div> <!-- end slimscroll-menu-->

        </div>

        <!-- /Right-bar -->



        <!-- Right bar overlay-->

        <div class="rightbar-overlay"></div>



        <!-- Vendor js -->
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="assets/js/vendor.min.js"></script>



        <!-- KNOB JS -->

        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

        <!-- Chart JS -->

        <script src="assets/libs/chart-js/Chart.bundle.min.js"></script>



        <!-- Jvector map -->

        <script src="assets/libs/jqvmap/jquery.vmap.min.js"></script>

        <script src="assets/libs/jqvmap/jquery.vmap.usa.js"></script>

        

        <!-- Datatable js -->

        <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>

        <script src="assets/libs/datatables/dataTables.bootstrap4.min.js"></script>

        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>

        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>

        

        <!-- Dashboard Init JS -->

        <script src="assets/js/pages/dashboard.init.js"></script>

        

        <!-- App js -->

        <script src="assets/js/app.min.js"></script>



        <!-- Alertify js -->

        <script src="alertify/alertify.js"></script>



    </body>

</html>
