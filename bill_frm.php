<?php
include('conn.php');
if(isset($_POST) && !empty($_POST)):
$rt=0;
$id=$_POST['id'];
$client_name=$_POST['c_name'];
$cl_type=$_POST['client_type'];
$date=$_POST['date'];
$currency=$_POST['ctype'];
$trans=$_POST['t_loss'];
$amount=$_POST['amount'];

$qry="insert into bill_tab(client_name,client_type,date,transaction_loss,currency,amount,bill_amount)values('$client_name','$cl_type','$date','$trans','$currency','$amount','$rt')";
mysqli_query($con,$qry)or die('error'.mysqli_error($con));

endif;
?>

<html>
    <head>
     <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bill Generation</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="css/font-awesome.min.css"/> 
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  
  
    </head>
    <body>
        <div class="wrapper">
            <section>
                <div class="container-fluid">
                    <div class="jumbotron text-center" style="background-color: #0062cc;color:#FFF; "><h2>Bill Generating System</h2></div></div>
        
                
            </section>
            <section class="container">
                <form action="" method="post">
                     <div class="col-sm-12"></div>
                     <div class="col-sm-12">
                         <div class="row">
                    <div class="col-sm-5">
                        
                <label>Client Name</label>
                <input type="text" class="form-control" id="c_name" name="c_name"/>
                
                    </div>
                    <div class="col-sm-5 ">
                <label>Client Type</label>
                <select class="form-control" id="client_type" name="client_type">
                    <option value="">Select</option>
                    <option value="client">Client</option>
                    
                </select>
                
                    </div>
                    <div class="col-sm-2">
                    <label>Date</label>
                    <input type="date" class="form-control" id="date" name="date"/>
                    </div>
                </div>
                           <div class="row">
                        <div class="col-sm-4">
                <label>Currency Type</label>
                <select class="form-control" id="ctype" name="ctype">
                    <option value="">Select</option>
                    <option value="CAD">CAD</option>
                    <option value="INR">INR</option>
                </select>
            </div>
                        <div class="col-sm-4">
                            <label>Transaction Loss(in %)</label>
                            <input type="text" class="form-control" placeholder="percentage" id="t_loss" name="t_loss"/>
                        </div>
                        <div class="col-sm-4">
                            <label>Amount</label>
                            <input type="number" class="form-control"  placeholder="enter amount" id="amount" name="amount"/>
                        </div>
               </div>
                
                </div>
                     <div class="row">
                   <div class="col-sm-12 text-center" style="margin-top: 25px;">
                       
                       <input type="hidden" id="id" name="id"/>
                       <input type="reset" name="bt" class="btn btn-danger" value="Cancel"/>
                       <input type="submit" name="submit" class="btn btn-success" value="Generate Bill" />
                       
                       
                </div>
                </div>
                  
                </form>
                <div class="col-sm-12 container" id="final">
                <div class="row">
                    
                 <div class="col-sm-4 float-right">
                 <label>Amount to be Billed</label>
                 <input type="text" class="form-control" value=""/>
                 
                 </div>
                  </div>
                     
                     <div class="row " style="margin-top: 50px;">
                         <div class="col-sm-4">
                             <span><a href="" style="text-decoration: none" class="btn btn-danger">Print</a></span>
                         </div></div>
                    
                
                    
                 </div>
            </section>
            </div>
        
    </body>
</html>