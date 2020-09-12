<?php include 'include/header.php' ?>
<?php include 'include/sidebar.php' ?>

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Product</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="admin.php">Dashboard</a></li>
                            <li class="active">Add Product</li>
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
                                        <label class="col-md-12">Name *</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Quantity *</label>
                                        <div class="col-md-12">
                                            <input type="number" class="form-control form-control-line" name="qty" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Cost *</label>
                                        <div class="col-md-12">
                                            <input type="number" class="form-control form-control-line" name="cost" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">Selling Price *</label>
                                        <div class="col-md-12">
                                            <input type="number" class="form-control form-control-line" name="sp" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-md-12">HSN CODE *</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="hsn" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" name="SubmitButton">Add Product</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                
            </div>
            <!-- /.container-fluid -->

<?php require'include/footer.php'; ?>
<?php

include'include/connection.php';

if(isset($_POST['SubmitButton'])){

    $name = $_POST['name'];
    $qty = $_POST['qty'];
    $cost = $_POST['cost'];
    $hsn = $_POST['hsn'];
    $sp = $_POST['sp'];


    if ($name!="" &&  $qty!="" && $cost!="" && $hsn!="" && $sp!="" ) {
        
        $checkQuery = "INSERT INTO product (name, qty, cost, hsn, selling_price) VALUES ('".$name."','".$qty."', '".$cost."', '".$hsn."' , '".$sp."')";

        if (mysqli_query($conn, $checkQuery)) {

            echo "<script>window.alert('Product Added');window.location.href='add_product.php';</script>";

        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='add_product.php';</script>";

        }
        
    }

    else{

        echo "<script>window.alert('Fill all the required details');window.location.href='add_product.php';</script>";
    
    }

}  

?>