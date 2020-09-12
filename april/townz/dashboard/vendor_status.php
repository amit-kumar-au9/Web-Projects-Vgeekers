<?php include "include/header.php";?>

<div id="page-wrapper">
			<div class="main-page">
                <br>
<center><h2 class="title1" style="color: green;">VENDOR STATUS</h2></center>
</center>

<br><br> 
<center>
<table class="responstable">

<tr style="border:5px solid #024457;">
<th>Name</th>
<th data-th="Driver details"><span>Solved Queries</span></th>
<th>Unsolved Queries</th>
<th>Pending Queries</th>
<th>Revenue Genererated</th>
<th>User Rating</th>
</tr>

<tr>
<center>
    <td>Jhon Deo</td>
<td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">11</button></td>
<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2">9</button></td>
<td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal3">5</button></td>
<td><button type="button" class="btn btn-warning">Rs 3670</button></td>
<td><div class="rating left">
    <div class="stars right">
      <a class="star rated"></a>
      <a class="star rated"></a>
      <a class="star rated"></a>
      <a class="star"></a>
      <a class="star"></a>
    </div>
  </div>
  <br>
  <br>
  <center><span style="color:red">3.2/5</span></center>
  <br>
  <span>Total Ratings: 183</span>
</td>
</center>
</tr>



</table>
</center>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Completed Task</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <table class="responstable" >

            <tr style="border:5px solid #024457;">
              <th>Customer</th>
              <th data-th="Driver details"><span>Task</span></th>
              <th>Earnings</th>
              <!-- <th>Pending Queries</th>
              <th>Revenue Genererated</th> -->
              <th>User Rating</th>
            </tr>
            
            <tr>
              <center>
                <td>Person 1</td>
                <td>TV not working</td>
                <td>Rs/-1500</td>
              <!-- <td></td> -->
              <!-- <td></td> -->
              <td><div class="rating left">
                  <div class="stars right">
                    <a class="star rated"></a>
                    <a class="star rated"></a>
                    <a class="star rated"></a>
                    <a class="star rated"></a>
                    <a class="star rated"></a>
                  </div>
                  <center><span style="color:red">5/5</span></center>
                </div>
                
               
                
               
              </td>
              </center>
            </tr>
            
            <tr>
                <center>
                    <td>Person 2</td>
                <td>Ac not working</td>
                <td>Rs/-1000</td>
                <!-- <td></td> -->
                <!-- <td></td> -->
                <td><div class="rating left">
                    <div class="stars right">
                      <a class="star rated"></a>
                      <a class="star rated"></a>
                      <a class="star rated"></a>
                      <a class="star"></a>
                      <a class="star"></a>
                    </div>
                    <center><span style="color:red">3.2/5</span></center>
                  </div>
                  
                 
                  
                 
                </td>
                </center>
              </tr>
              
              <tr>
                <center>
                    <td>Person 3</td>
                <td>Light not working</td>
                <td>Rs/-200</td>
                <!-- <td></td> -->
                <!-- <td></td> -->
                <td><div class="rating left">
                    <div class="stars right">
                      <a class="star rated"></a>
                      <a class="star rated"></a>
                      <a class="star rated"></a>
                      <a class="star"></a>
                      <a class="star"></a>
                    </div>
                    <center><span style="color:red">3.2/5</span></center>
                  </div>
                  
                 
                  
                 
                </td>
                </center>
              </tr>
              
              <tr>
                <center>
                    <td>Person 4</td>
                <td>Fan not working</td>
                <td>Rs/-400</td>
                <!-- <td></td> -->
                <!-- <td></td> -->
                <td><div class="rating left">
                    <div class="stars right">
                      <a class="star rated"></a>
                      <a class="star rated"></a>
                      <a class="star rated"></a>
                      <a class="star rated"></a>
                      <a class="star"></a>
                    </div>
                    <center><span style="color:red">4.2/5</span></center>
                  </div>
                  
                 
                  
                 
                </td>
                </center>
              </tr>
              
            
            
          </table>
    </div>
    <div class="modal-footer">
   
     
 <center>     <button type="button" class="btn btn-primary" data-dismiss="modal" >Back</button></center>
    </div>
  </div>
</div>
</div>


<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Unsolved Tasks</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <table class="responstable" >

            <tr style="border:5px solid #024457;">
              <th>Customer</th>
              <th data-th="Driver details"><span>Task</span></th>
              <th>User Reason</th>
              <!-- <th>Pending Queries</th>
              <th>Revenue Genererated</th> -->
              <th>Vendor Reason</th>
            </tr>
            
            <tr>
              <center>
                <td>Person 1</td>
                <td>TV not working</td>
                <td>I had to go out of town</td>
              <!-- <td></td> -->
              <!-- <td></td> -->
              <td>
                Customer not availble
              </td>
              </center>
            </tr>
            
            <tr>
                <center>
                    <td>Person 2</td>
                    <td>Fan not working</td>
                    <td>Rate too high </td>
                  <!-- <td></td> -->
                  <!-- <td></td> -->
                  <td>
                    Custom not satisfyied with rate
                    </td>
                </center>
              </tr>
              
              <tr>
                <center>
                    <td>Person 3</td>
                    <td>TV not working</td>
                    <td>Rate too high </td>
                    <!-- <td></td> -->
                    <!-- <td></td> -->
                    <td>
                      Custom not satisfyied with rate
                      </td>
                </center>
              </tr>
              
              <tr>
                <center>
                    <td>Person 4</td>
                        <td>TV not working</td>
                        <td>Rate too high </td>
                        <!-- <td></td> -->
                        <!-- <td></td> -->
                        <td>
                          Custom not satisfyied with rate
                          </td>
                </center>
              </tr>
              
            
            
          </table>
    </div>
    <div class="modal-footer">
   
     
 <center>     <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 55px;height: 55px;font-size: 20px;">Back</button></center>
    </div>
  </div>
</div>
</div>




<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Pending Task</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        <table class="responstable" >

            <tr style="border:5px solid #024457;">
              <th>Customer</th>
              <th data-th="Driver details"><span>Task</span></th>
              <th>Due date</th>
              <!-- <th>Pending Queries</th>
              <th>Revenue Genererated</th> -->
            </tr>
            
            <tr>
              <center>
                <td>Person 1</td>
                <td>TV not working</td>
                <td>08-04-2020</td>
              <!-- <td></td> -->
              <!-- <td></td> -->
            =
              </center>
            </tr>
            
            <tr>
                <center>
                    <td>Person 2</td>
                <td>Ac not working</td>
                <td>08-04-2020</td>
                </center>
              </tr>
              
              <tr>
                <center>
                    <td>Person 3</td>
                <td>Light not working</td>
                <td>08-04-2020</td>
                </center>
              </tr>
              
              <tr>
                <center>
                    <td>Person 4</td>
                <td>Fan not working</td>
                <td>08-04-2020</td>
                <!-- <td></td> -->
                <!-- <td></td> -->
              
                </td>
                </center>
              </tr>
              
            
            
          </table>
    </div>
    <div class="modal-footer">
   
     
 <center>     <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 55px;height: 55px;font-size: 20px;">Back</button></center>
    </div>
  </div>
</div>
</div>
<style>

  td:nth-child(5)
  {
   width:10%;
  }
  .btn{
    width: 100%;
  }
  .responstable{
    max-height: 300px;
    overflow-y: scroll;
  }
</style>
<?php include "include/footer.php"?>