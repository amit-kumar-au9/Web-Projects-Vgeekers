<?php require'include/header.php' ?>

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Study Material</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Study Material</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="./img/core-img/curve-5.png" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <style type="text/css">
        .success{
            color: green;
        }
        .error{
            color: red;
        }
        .btn1{
            color: white;
            background-color: #1ab64f;
        }
        .btn1:hover {
            color: white;
            background-color: #DD263D;
        }
    </style>
    <?php 
    include "dashboard/include/connection.php";

    $checkClass = "SELECT DISTINCT class FROM notes ORDER BY class";
    $resultClass = mysqli_query($conn, $checkClass);

    ?>
     <!-- Filter Start-->
     <section class="mb-100">
        <div class="" >
            <div class="container notes-search">
               <div class="row">
                   <div class="col-md-12">
                    <form class="getPDF">
                        <div class="container mb-30" align="center">
                            <h1 style="color: white;font-weight: 700;">Find Your Notes Instantly</h1>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <select id="class" class="form-control" name="class">
                                    <option value="">Select Class</option>
                                    <?php 
                                        while($row=mysqli_fetch_array($resultClass)){
                                            echo "<option value='".$row['class']."'>Class".$row['class']."</option>";
                                        }   
                                    ?>
                                </select>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-3 col-sm-3">
                                <select id="subjectNames" class="form-control" name="subject">
                                    <option>-- Select Class First --</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <select id="topicNames" class="form-control" name="topic">
                                    <option>-- Select Subject First --</option>
                                </select>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-1 col-sm-1">
                                <button type="submit" class="btn btn1">Get Notes </button>
                            </div>
                        </div>
                    </form>
                    <div class="e-msg"></div>
                   </div>
               </div>
            </div>
        </div>
    </section>
        <!-- Filter End-->

    <!-- ***** Newsletter Area Start ***** -->
    <section class="uza-newsletter-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Newsletter Content -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="nl-content mb-80">
                        <h2>Subscribe to our Newsletter</h2>
                        <p>Subscribe our newsletter gor get notification about new updates, etc...</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="nl-form mb-80">
                        <form action="#" method="post">
                            <input type="email" name="email" value="" placeholder="Your Email">
                            <button type="submit" name="Subscribe">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Border Bottom -->
            <div class="border-line"></div>
        </div>
    </section>
    <!-- ***** Newsletter Area End ***** -->

<?php require'include/footer.php' ?>

    <script type="text/javascript">

        $(document).ready(function(){
            var classID = '';
            $('#class').on('change', function(){
                classID = $(this).val();
                // console.log(classID);
                if(classID){
                    $.ajax({
                        type:'POST',
                        url:'ajaxData.php',
                        data:'class_id='+classID,
                        success:function(html){
                            $('select#subjectNames').html(html);
                        }
                    }); 
                }
                else{
                    $('#subjectNames').append('<option value=" " >Select subject first</option>');
                }
            });

            var subjectID = '';
            $('#subjectNames').on('change', function(){
                subjectID = $(this).val();
                // console.log(subjectID);
                if(subjectID){
                    $.ajax({
                        type:'POST',
                        url:'ajaxData2.php?class_id='+classID,
                        data:'subject_id='+subjectID,
                        success:function(html){
                            $('select#topicNames').html(html);
                        }
                    }); 
                }
                else{
                    $('#topicNames').append('<option value=" " >Select topic first</option>');
                }
            });
        });

        $('form.getPDF').submit(function(e){
            e.preventDefault();
            var formdata = $(this).serialize();
            $.ajax({
                'type' : 'post',
                'data' : formdata,
                'url' : 'checkData.php',
                success : function(response){
                    var json = JSON.parse(response);
                    if(!json.error){
                        setTimeout(function(){
                            window.location.href='getPDF.php?token='+btoa(json.message);
                        }, 2000);
                    }
                    else{
                        $('div.e-msg').addClass('error').removeClass('success').text(json.message);
                    }
                }
            });
        });

    </script>


<?php
require 'dashboard/include/connection.php';
if(isset($_POST['Subscribe'])){ //check if form was submitted

    $email = test_input($_POST['email']);
    $checkQuery = "INSERT INTO newsletter (email) VALUES ('".$email."')";
    $checkResult=mysqli_query($conn, $checkQuery);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>