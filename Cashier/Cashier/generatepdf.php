<?php  

 function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "aurora");  
      $sql = "SELECT part_quotation.pid, part.name, part.price, part_quotation.quantity,part.price*part_quotation.quantity as Total FROM part_quotation, part 
      where part_quotation.qid = '1' and part_quotation.pid = part.part_id; ";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["pid"].'</td>  
                          <td>'.$row["name"].'</td>  
                          <td>'.$row["price"].'</td>  
                          <td>'.$row["quantity"].'</td>
                          <td>'.$row["Total"].'</td>
                     </tr>  
                     
                          ';  
      }  
       return $output;  
 }  


 if(isset($_POST["create_pdf"]))  
 {  
      require_once('TCPDF-main/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();
      
      $content = '';  
      $content .= '
    
      <h3 align="center"><img  src="assets\img\logo.jpeg"  width="100px" height="80px" ></h3>
      <h1 align="center">Aurora Automotive Center</h1>
      <h5 align="center">Contact us :+9411-2745687</h5>
      <h5 align="center">E-mail :aurora@gmail.com</h5>
      <h3 align="center">Invoice</h3>
      <h6 align="right">Date: 2022-05-12</h6>

     
      <table border="2" cellspacing="0" cellpadding="5">  
           <tr >  
                <th width="15%">Part ID</th>  
                <th width="25%">Part Name</th> 
                <th width="25%">Unit Price</th> 
                <th width="15%">Quantity</th> 
                <th width="25%">Total</th>
           </tr>  
           
      ';  
      ob_end_clean();
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('emp.pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Export HTML Table data to PDF using TCPDF in PHP</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
           <h3 align="center"><img  src="assets\img\logo.jpeg"  width="100px" height="80px" ></h3>
      <h1 align="center">Aurora Automotive Center</h1>
      <h5 align="center">Contact us :+9411-2745687</h5>
      <h5 align="center">E-mail :aurora@gmail.com</h5>
      <h3 align="center">Invoice</h3>
      <h6 align="right">Date: 2022-05-12</h6>
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                          <th width="25%">Part ID</th>  
                <th width="25%">Part Name</th> 
                <th width="25%">Unit Price</th> 
                <th width="25%">Quantity</th> 
                <th width="25%">Total</th>   
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                     <br />  
                     <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  