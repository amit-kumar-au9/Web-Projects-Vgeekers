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
                                    <table class="table" id="example">
                                        <thead>
                                            <tr>
                                                <th>Sno.</th>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th>Cost</th>
                                                <th>Selling Price</th>
                                                <th>HSN</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                    <?php 

                                    include 'include/connection.php';

                                    $checkProduct = "SELECT * FROM product";
                                    $resultProduct = mysqli_query($conn, $checkProduct);
                                    $sno = 1;

                                    while($row = $resultProduct->fetch_assoc()){  

                                    ?>

                                    <tr>
                                        <form class="form-horizontal form-material" method="post">

                                            <input type="hidden" class="form-control form-control-line" name="id" value="<?php echo $row['id'];?>">

                                            <td>
                                                <?php echo $sno; ?>
                                            <td>
                                                <input type="text" class="form-control form-control-line" name="name" value="<?php echo $row['name'];?>">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control form-control-line" name="qty" value="<?php echo $row['qty'];?>">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control form-control-line" name="cost" value="<?php echo $row['cost'];?>">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control form-control-line" name="sp" value="<?php echo $row['selling_price'];?>">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control form-control-line" name="hsn" value="<?php echo $row['hsn'];?>">
                                            </td>
                                            <td>
                                                <button class="btn btn-success" name="UpdateButton">UPDATE</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-success" name="DeleteButton">DELETE</button>
                                            </td>

                                        </form>
                                    </tr>
                                    <?php 

                                        $sno++;
                                    }

                                    ?>
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

if(isset($_POST['UpdateButton'])){ //check if form was submitted

    $id = $_POST['id'];
    $name = $_POST['name'];
    $qty = $_POST['qty'];
    $cost = $_POST['cost'];
    $sp = $_POST['sp'];
    $hsn = $_POST['hsn'];

    $checkQuery= "UPDATE product SET name='".$name."', qty='".$qty."', cost='".$cost."', selling_price='".$sp."', hsn='".$hsn."' WHERE id='".$id."'";

    $checkResult=mysqli_query($conn, $checkQuery);

    echo "<script>window.location.href='update_product.php';</script>";
}

if(isset($_POST['delete'])){ //check if form was submitted

    $id = $_POST['id'];

    $checkQuery = "DELETE FROM product WHERE id='".$id."'";
    
    $checkResult=mysqli_query($conn, $checkQuery);

    $page = $_SERVER['PHP_SELF'];
    $sec = "1";

    header("Refresh: $sec; url=$page");

}

?>