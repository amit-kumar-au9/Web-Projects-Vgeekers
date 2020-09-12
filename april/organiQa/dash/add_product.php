<?php include "include/header.php";?>
  <div id="page-wrapper" style="background:white">
    <div class="main-page" style="background:  white">
      <center><h2 class="title1" style="color: red;">Add New Product</h2></center>
      <div class="forms">
        <form style="margin: 10px" method="post" action="insert_products.php">
          <div class="container">
            <div class="row">
              <div class="form-group col-md-6" style="width: 50%">
                <label for="exampleInputPassword1">Name of the Product</label>
                <input type="text" class="form-control" placeholder="Product Name" name="name" required>
              </div>
              <div class="form-group col-md-6" style="width: 50%">
                <label for="exampleInputEmail1">Product Code</label>
                <input type="number" class="form-control" placeholder="Product Code" name="code" required>
              </div>
              <div class="form-group col-md-6" style="width: 50%">
                <label for="exampleInputEmail1">Product Cost</label>
                <input type="number" class="form-control" placeholder="Enter Product Cost" name="cost"  required>
              </div>
              <div class="form-group col-md-6" style="width: 50%">
                <label for="exampleInputEmail1">Product Price</label>
                <input type="number" class="form-control" placeholder="Enter Product Price" name="price"  required>
              </div>
              <div class="form-group col-md-6" style="width: 50%">
                <label for="exampleInputEmail1">Discount</label>
                <input type="number" class="form-control" placeholder="Discount(in percentage)" name="discount"  required>
              </div>
              <div class="form-group col-md-6" style="width: 50%">
                <label for="exampleInputPassword1">Product heading</label>
                <input type="text" class="form-control" placeholder="Product heading" name="heading"  required>
              </div>
              <div class="form-group col-md-12" style="width: 50%;">
                <label for="exampleFormControlTextarea1">Product Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="product description" name="description"  required></textarea>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" style="margin: 10px;">ADD</button>
        </form> 
      </div>
    </div>
  </div>
<?php include "include/footer.php";?>


