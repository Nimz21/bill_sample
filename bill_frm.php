

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
                     </div>
                </form>
            </section>
            </div>
        
    </body>
</html>