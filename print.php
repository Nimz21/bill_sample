
<?php
include("conn.php");
$i=$_GET['id'];
$qry="select * from bill_tab where id='$i'";
$result=mysqli_query($con,$qry)or die('error'. mysqli_error($con));
$row=mysqli_fetch_array($result);
?>
<html>
    <head>Print Bill</head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bill Print</title>
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <link rel="stylesheet" href="css/bootstrap.css">
 <script src="js/print_save/app.min.js"></script>
    <body onload="window.print()">
        <div class="wrapper">
            <section class="invoice">
                <div class="container" style="margin-top: 50px;">
                    <div class="col-sm-12 bg-info">
                        <h2>Bill Receipt</h2>
                    </div>
                    <div class="col-sm-12 text-center">
                 <table class="table table-striped table-bordered" style="font-size: 14px; margin-top: 50px;">    
                                            
                                                <tr >
                                                            <th style="font-weight: bold;">Client name</th>
                                                            <td><?php echo $row['client_name']?></td>
                                                </tr>
                                                <tr >
                                                            <th style="font-weight: bold;">Transaction Loss</th>
                                                            <td><?php echo $row['transaction_loss']?></td>
                                                </tr>
                                                <tr >
                                                            <th style="font-weight: bold;">Amount</th>
                                                            <td><?php echo $row['amount']?></td>
                                                </tr>
                                                <tr >
                                                            <th style="font-weight: bold;">Currency Type</th>
                                                            <td><?php echo $row['currency']?></td>
                                                </tr>
                                                
                                                <tr >
                                                            <th style="font-weight: bold;">Bill Amount</th>
                                                            <td><?php echo $row['bill_amount']?></td>
                                                </tr>
                 </table></div>
                </div>                                    
            </section>
        </div>
    </body>
</html>