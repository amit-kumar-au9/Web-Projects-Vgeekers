<?php include 'include/header.php' ?>
<?php include 'include/sidebar.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Sales</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="admin.php">Dashboard</a></li>
                            <li class="active">Add Sales</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row">
                                <form class="form-horizontal form-material" method="post">
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Date *</label>
                                        <div class="col-md-12">
                                            <input type="date" class="form-control form-control-line" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Select Warehouse *</label>
                                        <div class="col-sm-6">
                                            <select class="form-control form-control-line" id="std" name="class">
                                                <option>Select </option>
                                                <?php 

                                                    include 'include/connection.php';

                                                    $checkWarehouse = "SELECT * FROM warehouse_detail";
                                                    $resultWarehouse = mysqli_query($conn, $checkWarehouse);

                                                    while($row = $resultWarehouse -> fetch_assoc()){

                                                        echo "<option value=".$row['id'].">".$row['name']."</option>";

                                                    }


                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Select Customer *</label>
                                        <div class="col-sm-6">
                                        <select class="form-control form-control-line" id="std" name="class">
                                            <option>Select </option>
                                            <?php 

                                                include 'include/connection.php';

                                                $checkWarehouse = "SELECT * FROM vendor";
                                                $resultWarehouse = mysqli_query($conn, $checkWarehouse);

                                                while($row = $resultWarehouse -> fetch_assoc()){

                                                    echo "<option value=".$row['id'].">".$row['name']."</option>";

                                                }


                                            ?>

                                        </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="SubmitButton">Add Sales</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!-- /row -->
                <!-- <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="col-md-12">Select Product *</label>
                                    <div class="col-sm-6">
                                        <select class="form-control form-control-line" id="std" name="class">
                                            <option>Select </option>
                                            <?php 

                                                include 'include/connection.php';

                                                $checkProduct = "SELECT * FROM product";
                                                $resultProduct = mysqli_query($conn, $checkProduct);

                                                while($row = $resultProduct -> fetch_assoc()){

                                                    echo "<option value=".$row['id'].">".$row['name']."</option>";

                                                }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- /.row -->

                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
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
                    </div>
                </div>
                <!-- /.row -->

                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="card-box card-items">
                                <div style="overflow-x: auto;">
                                    <table class="table table-bordered ">
                                        <thead>
                                          <tr>
                                            <!-- <th></th> -->
                                            <th>S.NO</th>
                                            <th>Product Name</th>
                                            <th>HSN CODE</th>
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
                                      <!-- <form action="view-generate-invoice.php"> -->
                                          <button type = 'submit' class="btn btn-primary table-submit">Submit</button>
                                      <!-- </form> -->
                                  </div>
                                </div>
                            </div> <!-- end card-box -->
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- /.row -->
                
            </div>
            <!-- /.container-fluid -->
<?php require'include/footer.php'; ?>

<script type="text/javascript">

var igst = cgst = sgst = 0;

    
$('.search-product').on('keyup', function(){

  var searchKeyword = $(this).val().toLowerCase();

  if(searchKeyword != ''){

    $.ajax({

        'data' : 'keyword='+searchKeyword,
        'type' : 'post',
        'url' : 'query/search-product.php',
        'success' : function(response){
            var json = JSON.parse(response);
            if(!json.error){
                console.log(json.response);
                var proposals = json.message;
                $('ul.proposal-list').empty();
                $.each(proposals, function(key, value){

                    $('ul.proposal-list').append('<li class="proposal" data-id="'+value.id+'">'+value.name+'</li>');
              
                });
            
            }
        }
    });
  }
  
  else{
    $('ul.proposal-list').empty();
  }
});


// function titleCase(text){
//   var output = text.toLowerCase().replace(/\b[a-z]/g, function(txtVal) {
//       return txtVal.toUpperCase();
//   });
//   return output;
// }

$('.card-items').hide();

function updateTotalData(){
  var igstPriceTotal = cgstPriceTotal = sgstPriceTotal = totalItemPrice = totalInvoicePrice = 0;
  $('tr[role="row"]').each(function(){
    var price = parseFloat($(this).find('td').eq(6).text());
    var itemPrice = parseFloat($(this).find('td').eq(6).text());
    var igstPrice = price * igst;
    var sgstPrice = price * sgst;
    var cgstPrice = price * cgst;
    var totalPrice = price + igstPrice + cgstPrice + sgstPrice;
    $(this).find('td').eq(7).text(igstPrice);
    $(this).find('td').eq(8).text(cgstPrice);
    $(this).find('td').eq(9).text(sgstPrice);
    $(this).find('td').eq(10).text(totalPrice);
    totalItemPrice += parseFloat($(this).find('td').eq(6).text());
    igstPriceTotal += parseFloat($(this).find('td').eq(7).text());
    cgstPriceTotal += parseFloat($(this).find('td').eq(8).text());
    sgstPriceTotal += parseFloat($(this).find('td').eq(9).text());
    totalInvoicePrice += parseFloat($(this).find('td').eq(10).text());
  });
  $('tr').eq(-5).find('td').eq(-1).text(totalItemPrice);
  $('tr').eq(-4).find('td').eq(-1).text(igstPriceTotal);
  $('tr').eq(-3).find('td').eq(-1).text(cgstPriceTotal);
  $('tr').eq(-2).find('td').eq(-1).text(sgstPriceTotal);
  $('tr').eq(-1).find('td').eq(-1).text(totalInvoicePrice);
}

var idArray = [];

$('body').on('click', 'li.proposal', function(){
  var selectedItemName = $(this).text();
  var selectedItemId = $(this).data('id');
  $('.search-product').val(selectedItemName);
  $('ul.proposal-list').empty();
  $.ajax({
    'data' : 'id='+selectedItemId+'&vendorId='+1+'&warehouseId='+1,
    'type' : 'post',
    'url' : 'query/fetch_product_details.php',
    'success' : function(response){
      var json = JSON.parse(response);
      if(!json.error){
        var totalItemCount = $('tr[role="row"]').length;
        console.log(totalItemCount);
        var productRow = '<tr role="row">';
        $.each(json.productDetails, function(key, value){
      
        if(value.igst > 0){
            igst = (value.igst/100);
            cgst = sgst = 0;
        }
        else {
            igst = 0;
            cgst = sgst = (2.5/100);
        }
      var igstPrice = value.selling_price * igst;
      var sgstPrice = value.selling_price * sgst;
      var cgstPrice = value.selling_price * cgst;

      tempJSON = {};
      tempJSON['id'] = value.id;
      tempJSON['qty'] = 1;
      idArray.push(tempJSON);

      // productRow += '<td><span class="delete-item"><i class="fas fa-trash-alt"></i></span></td>';
      productRow += '<td>'+(totalItemCount + 1)+'</td>';
      productRow += '<td>'+(value.product_name)+'</td>';
      productRow += '<td>'+value.hsn+'</td>';
      productRow += '<td><input type="number" class="quantity-input" min="1" data-id="'+value.id+'" max="'+value.qty+'" value="1"><span class="instock">In Stock: '+value.qty+'</span></td>';
      productRow += '<td>'+value.selling_price+'</td>';
      productRow += '<td>'+value.selling_price+'</td>';
      productRow += '<td>'+igstPrice+'</td>';
      productRow += '<td>'+cgstPrice+'</td>';
      productRow += '<td>'+sgstPrice+'</td>';
      productRow += '<td>'+value.selling_price+'</td>';
      if(totalItemCount < 1){
        productRow += '</tr>';
        productRow += '<tr>';
        productRow += '<td colspan="9" style="text-align: right";> Total Value (Excluding Taxes & Discount)</td>';
        productRow += '<td colspan="4" style="text-align: right";>'+value.selling_price+'</td>';
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
        productRow += '<td colspan="4" style="text-align: right";>'+value.selling_price+'</td>';
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

function jsonUpdate(id, qty) {
    $.each(idArray, function(key, value){
        if(value.id == id){
            value.qty = qty;
        }
    });
}

$('body').on('change', '.quantity-input', function(){
  var qty = $(this).val();
  var id = $(this).data('id');
  if(qty > 0){
    var itemPrice = parseFloat($(this).parents('tr').find('td').eq(5).text());
    var price = qty * itemPrice;
    jsonUpdate(id, qty);
    $(this).parents('tr').find('td').eq(6).text(price);
    updateTotalData();
  }
});

$('.table-submit').click(function(e){
    e.preventDefault();
    // Create A PDF then
    $('body').find('form.js').remove();
    $('body').append("<form class='js' action='query/pdf.php' method='post'><input name='arr' value='"+JSON.stringify(idArray)+"'><input name='customer_name' value=''></form>");
    $('body').find('form.js').submit();
    // Ajax call to save the data in DB
});



</script>