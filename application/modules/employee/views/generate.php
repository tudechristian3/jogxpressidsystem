<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>/idCard.css">
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
    <title>ID Card</title>
<!--     
    So lets start -->
</head>
<button onClick="generatePDF()">Generate ID</button>
<body id="generate_employee_id">
                
    <?php foreach($employees as $u): ?>
        <input type="hidden" class="form-control" name="employee_id" value="<?php echo $u['employee_id']; ?>">
            <div class="container">
                <div class="padding">
                    <div class="font">
                        <div class="top">
                        <img src="<?php echo base_url('upload')?>/<?php echo $u['employee_date_uploaded']?>/<?php echo $u['employee_image']?>">
                        </div>
                        <div class="bottom">
                            <p><?php echo $u['employee_name']?></p>
                            <p class="desi"><?php echo $u['employee_position']?></p>
                            <div class="barcode">
                                <img src="<?php echo base_url('assets')?>/img/jogxpresslogo.png">
                            </div>
                            <br>
                            <p class="no">0951 582 8377</p>
                            <p class="no">A. Del Rosario St Corner Echivaree St, Mandaue City, 6014 Cebu, Mandaue City, 6014 Cebu</p>
                        </div>
                    </div>
                </div>
                <div class="back">
                    <h1 class="Details">information</h1>
                    
                    <div class="details-info">
                        <p><b>Address : </b></p>
                        <p><?php echo $u['employee_address']?></p>
                        <p><b>Mobile No: </b></p>
                        <p><?php echo $u['employee_contact_number']?></p>  
                        <div class="logo">
                        <img src="<?php echo base_url('assets')?>/img/jogxpresslogo.png">
                        
                    </div>
                    </div>
                </div>
            </div>
           
    <?php endforeach; ?>
    <script>
        function generatePDF(){
            const element = document.getElementById("generate_employee_id");

            html2pdf().from(element).save();
        }
    </script>
</body>
</html>