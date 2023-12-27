<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Jenny's Doubles!!!</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel-rtl/">

<link href="bootstrap.rtl.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
	  
	  /****************  My Personal CSS starts here *********/ 
	  
	  .qty{
	  width:40px;
	  }
	  
	  
	  #AlooPie1{
	  width: 300px;
	  height:250px;
	  border: 5px solid black;
	  border-radius:20%;
	  }
	  
	  
	  #Saheena1{
	  width: 300px;
	  height:250px;
	  border: 5px solid black;
	  border-radius:20%;
	  
	  }
	  
	  #Doubles1{
	  
	    width: 300px;
		height:250px;
	  border: 5px solid black;
	  border-radius:20%;
	  
	  }
	  
	 #balmain{
	 border:5px solid green;
	 height:300px;
	 width:400px;
	 }
	 
	 #body{
	 
	/* border:5px double black;*/
	 background:linear-gradient(90deg, red, white, red);
	 
	 color:black;
	 animation: bg 5s infinite;
	 
	 }
	 /*
	 @keyframes bg{
	 0%{background:linear-gradient(90deg, yellow, red);}
	 50%{background:linear-gradient(270deg, yellow, red);}
	 100%{background:linear-gradient(90deg, yellow, red);}
	 }
	 */
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.rtl.css" rel="stylesheet">
  </head>
  
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B7FM8RHVF8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-B7FM8RHVF8');
</script>

  <body class = "container text-center" id="body">

<p id="heading">
    <h2>Jenny's Doubles!!</h2>
<h2 id="spanish">  &#161;Bienvenido Para Comer!</h2> 
</p>
<h2>Mon - Sat 6:00AM - 10:00AM</h2>
<!--
  Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

<form method="POST"  action="index.php">   
    <div class="row" >
	
      <div class="col-lg-4">
      <img src="Doubles1.jpeg" alt="Delicious Doubles" id="Doubles1">
        <h2 class="fw-normal"><s>$6.00</s>
		<br>Doubles! 
		
		<br>(Only $4.00 now)</h2>
       <div class="row">  					<!--Doubles Options Row-->
	   <div class="col-lg-4">Sweet Sauce? 
	   <br><input type="radio" name="doublesSS" value="SweetSauce" id="doublesSS"><label for="doublesSS">Yes</label> 
	   <br><input type="radio" name="doublesSS" value="NoSweetSauce" id="doublesNoSS"><label for="doublesNoSS">No</label></div>
	   <div class="col-lg-4">Pepper? <br>
	   <input type="radio" name="doublesPep" value="Slight Pepper" id="doublesSlightPep"><label for="doublesSlightPep">Slight</label> 
	  
	   <br><input type="radio" name="doublesPep" value="Heavy Pepper" id="doublesHeavyPepper"><label for="doublesHeavyPepper">Heavy</label>
	   <br><input type="radio" name="doublesPep" value="NO pepper" id="noPepper" ><label for="noPepper">None</label></div>
	   <div class="col-lg-4"><label for="doublesQty">Quantity</label> <input type="number" maxlength = "2" size="2" class="qty" id="doublesQty" name="doublesQty"></div>
	   
        </div>
      
    
    </div><!-- /doubles row -->

	 
	
      <div class="col-lg-4">
       <img src="AlooPie.png" alt="Delicious Aloo Pie" id="AlooPie1">

        <h2 class="fw-normal"><s>$6.00</s>
		<br>Aloo Pie! 
		
		<br>(Only $4.00 now)</h2>
       <div class="row">  					<!--Aloo Pie Options Row-->
	   <div class="col-lg-4">Sweet Sauce? 
	   <br><input type="radio" name="alpSS" value="Sweet Sauce" id="alpSS"><label for="alpSS">Yes</label> 
	   <br><input type="radio" name="alpSS" value=" No Sweet Sauce" id="alpNoSS"><label for="alpNoSS">No</label></div>
	   <div class="col-lg-4">Pepper? <br>
	   <input type='radio' name="alpPep" value="Slight Pepper" id="alpPep"><label for="alpPep">Slight</label> 
	  
	   <br><input type='radio' name='alpPep' value='Heavy Pepper' id="alpHeavyPepper"><label for="alpHeavyPepper">Heavy</label>
	   <br><input type='radio' name='alpPep' value='NO Pepper' id="alpNoPepper"><label for="alpNoPepper">None</label> </div>
	   <div class="col-lg-4"><label for="alpQty">Quantity</label> <input type="number" maxlength = '2' size="2" class="qty" id='alpQty' name = 'alpQty' value="alpQty"></div>
	   
       
       
      </div>
      </center>
    </div><!-- /Aloo Pie col -->
	 
	  
	
      <div class="col-lg-4">
         <img src="Saheena.jpeg" alt="Delicious Saheena" id="Saheena1">
<h2 class="fw-normal"><s>$6.00</s> $4.00</h2>
		<h3>Special Saheena Saturdays!</h3>
		
		<h4>(With Dasheen Bush)</h4>
       <div class="row">  					<!--Saheena Options Row-->
	   <div class="col-lg-4">Sweet Sauce? 
	   <br><input type="radio" name="sahSS" value="Sweet Sauce" id="sahSS"><label for="sahSS">Yes</label> 
	   <br><input type="radio" name="sahSS" value="No Sweet Sauce" id="sahNoSS"><label for="sahNoSS">No</label></div>
	   <div class="col-lg-4">Pepper? <br>
	   <input type='radio' name="sahPep" value="slight pepper" id="sahPep"><label for="sahPep">Slight </label>
	  
	   <br><input type='radio' name='sahPep' value="heavy pepper" id="sahHeavyPepper"><label for="sahHeavyPepper">Heavy</label>
	   <br><input type='radio' name='sahPep' value="NO pepper" id="sahNoPepper"><label for="sahNoPepper">None</label> </div>
	   <div class="col-lg-4"><label for="sahQty">Quantity</label> <input type="number" maxlength = '2' size="2" class="qty" id='sahQty' name = 'sahQty' value="sahQty" ></div>
	      
       </div>
       </div>



   </div>
   </div>
  
   
 
   <h2>Drink $5.00</h2>
  
   <img src= "cocacola.jpeg" id="drinkImage" style="border: 4px solid blue;">
   <br>
  
   
   <input type="radio"  name = "flavor" value= "cocacola" id="cocacolaOption"><label for="cocacolaOption">CocaCola</label><br>
   <input type="radio"  name = "flavor" value="fanta" id="fantaOption" ><label  for="fantaOption">Fanta</label>
  
   
<br>
  <label for="drinksQty">Quantity: </label><input type="number" class="qty" id="drinksQty" name="drinksQty">
  
   
    
   <br><br>
   <button type = "button" onclick = "calculatePrice();reveal();attach();" name="calculate" >Calculate Bill</button>
   <p>BILL: $<span  id="billArea" name="price"> </span></p>
 
 <div id='orderDiv'>
<p><label for="pickUpName">Name for order pickup: </label><input type="text" name="orderName" id="pickUpName"></p>
<input type="submit" value="Book Now" name="book_now" onclick="calculatePrice();validate();">
</form>
</div>
 
 <!-- FOOTER -->
  <hr>
  
  <footer class="container">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.018777337391!2d-61.43701818520225!3d10.42008309256393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5bd4d171f3d5c36c!2zMTDCsDI1JzEyLjMiTiA2McKwMjYnMDUuNCJX!5e0!3m2!1sen!2stt!4v1671727426804!5m2!1sen!2stt" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
					width="400"
                    height="300"
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0">
            </iframe>
			<h4>6:00AM - 10:00AM</h4>
<h2>Mondays - Saturdays </h2>
<h2> Lunes - Sabado</h2>
   <p class="float-end"></p>
    <p>&copy; Jenny & Sharlene Inc. </p>
  </footer>
  

  
   <script>
	  
	  var body = document.getElementById("body");
		var heading = document.getElementById("heading");
	  var doublesSS = document.getElementById("doublesSS");
	  
	
     var orderDiv = document.getElementById('orderDiv');
		orderDiv.style.visibility = 'hidden';	  
	  
	  
	  
	  
	  function reveal(){
	  orderDiv.style.visibility = 'visible';
	  }
	  
	  
	  function attach(){
	      
	      var storeScript = document.createElement("script");
	      storeScript.src ="storeValues.js";
	      body.appendChild(storeScript);
	  }
	  
	  
	  
	   var drinkValidate = document.getElementById("DrinkSelect");
	    function validate(){
	 
	 //Validate the doubles

	var doublesPep = document.getElementById("doublesSlightPep");
	var doublesQty = document.getElementById("doublesQty");
	
	if (doublesQty.value!=""){
	var required = document.createAttribute("required");
doublesSS.setAttributeNode(required);
	var required = document.createAttribute("required");
doublesPep.setAttributeNode(required);
}

	 //Validate the Aloopie
	 
	 var aloopieSS = document.getElementById("alpSS");
	var aloopiePep = document.getElementById("alpPep");
	var aloopieQty = document.getElementById("alpQty");
	
	if (aloopieQty.value!=""){
	var required = document.createAttribute("required");
aloopieSS.setAttributeNode(required);
	var required = document.createAttribute("required");
aloopiePep.setAttributeNode(required);
}

	 //Validate the Saheena
	 
	 var sahSS = document.getElementById("sahSS");
	var sahPep = document.getElementById("sahPep");
	var sahQty = document.getElementById("sahQty");
	
	if (sahQty.value!=""){
	var required = document.createAttribute("required");
sahSS.setAttributeNode(required);
	var required = document.createAttribute("required");
sahPep.setAttributeNode(required);
}

//Validate the Drinks

	 var drinksQty = document.getElementById("drinksQty");
	 var drinkValidate = document.getElementById("fantaOption");
	
	if (drinksQty.value!=""){
	var required = document.createAttribute("required");
drinkValidate.setAttributeNode(required);
	 
	}
    //validate the name
	    
	    var pickUpName = document.getElementById("pickUpName");
	    var required = document.createAttribute("required");
	    pickUpName.setAttributeNode(required);

}
	  </script>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="calculatePrice.js"></script>
	 
	 
	   <script src="drinks.js"></script>
	     
  </body>


</html>


  <?php
  
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;    
require 'vendor/autoload.php'; 



if (isset($_POST['book_now'])){
  
        $email = "jennysdoubles@gmail.com";
     
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPOptions = array('ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false,'allow_self_signed' => true));
            //Server settings
            $mail->SMTPDebug = false;//SMTP::DEBUG_SERVER;                   // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'jennysdoubles@gmail.com';                     // SMTP username
            $mail->Password   = 'rpuhhhcqfqhomxza';                               // SMTP password
            $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                          // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom("jennysdoubles@gmail.com", "New Doubles Order");
            $mail->addAddress($email);     // Add a recipient
            
              
            if ($_POST['sahQty']==""){
                
                $_POST['sahSS'] = "NULL";
                $_POST['sahPep'] = "NULL";
                $_POST['sahQty']=0;
            }
          
            if ($_POST['alpQty']==""){
                $_POST['alpSS'] = "NULL";
                $_POST['alpPep'] = "NULL";
                $_POST['alpQty']=0;
            }
              if ($_POST['doublesQty']==""){
                $_POST['doublesSS'] = "NULL";
                $_POST['doublesPep'] = "NULL";
                $_POST['doublesQty']=0;
            }
            
             if ($_POST['drinksQty']==""){
                $_POST['flavor'] = "NULL";
                  $_POST['drinksQty']=0;
                   }
            
             
            $doublesSS = $_POST['doublesSS'];
            $doublesPep = $_POST['doublesPep'];
            $doublesQty = $_POST['doublesQty'];
            $alooPieSS  = $_POST['alpSS'];
            $alooPiePep = $_POST['alpPep'];
            $alooPieQty = $_POST['alpQty'];
            $saheenaSS  = $_POST['sahSS'];
            $saheenaPep = $_POST['sahPep'];
            $saheenaQty = $_POST['sahQty'];
            $drinksQty = $_POST['drinksQty'];
            $flavor  = $_POST['flavor'];
            $orderName  = $_POST['orderName'];
          // $price      = $_POST['price'];
            
          
           $price = (($doublesQty*4)+ ($alooPieQty*4)+($saheenaQty*4)+($drinksQty*5));
            
            
         
           $body= "$orderName would like to place the following order: <br><br>
 $doublesQty Doubles  $doublesSS $doublesPep<br>
$alooPieQty Aloo Pie   $alooPieSS $alooPiePep<br>
$saheenaQty Saheena   $saheenaSS $saheenaPep<br><br>

$drinksQty drinks $flavor flavor
<br>
Total Price: $$price.00

<br><br>Jenny & Sharlene Inc. <br>

<br>
<br><hr>
";
            
            
            
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Doubles Order';
            $mail->Body    = $body;
            $mail->AltBody = strip_tags($body);


            if ($mail->send()){
                echo"Yay";
            }
            else{
                echo"Nay";
            }
        }
        catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {
               $mail->ErrorInfo
        }";
            }
    
    
    //end of mailer code
    //////////////////////
    //beginning of database code
  
    
//$mysqli = new mysqli("localhost","id20051327_jenny","DasheenBush69!","id20051327_orders");
$mysqli = new mysqli("localhost","id20051327_jenny","DasheenBush69!","id20051327_orders");
 //Check connection

/* 
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
    echo "Connected to Database OOP Style";
}

*/


/*  Procudural Connect to database


$con = mysqli_connect("localhost","id20051327_jenny","DasheenBush69!","id20051327_orders");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}else{
    echo "Connected to Database Procedural Style";
}

*/



  //to validate ORDERS table row to enter into PHPmyAdmin database correctly 
  //each column within ORDERS needs to be populated with a value for the insert into to be successful
          
          if ($doublesQty == ""){
           $doublesSS = "(NULL)";
            $doublesPep = "(NULL)";
            $doublesQty =0;
          }
         
              if ($alooPieQty == ""){
           $alooPieSS = "(NULL)";
            $alooPiePep = "(NULL)";
            $alooPieQty =0;
          }
            if ($saheenaQty == ""){
           $saheenaSS = "(NULL)";
            $saheenaPep = "(NULL)";
            $saheenaQty =0;
          }

        if ($drinksQty == ""){
           $flavor = "No Drink";
           $drinksQty = 0;
          }



$place_order = "INSERT INTO ORDERS (Name,Doubles,Doubles_Pepper,Doubles_Sweet_Sauce,Aloo_Pie,Aloo_Pie_Pepper, Aloo_Pie_Sweet_Sauce,Saheena,Saheena_Pepper,Saheena_Sweet_Sauce,DrinksQty,Flavor,Price) VALUES('$orderName','$doublesQty','$doublesPep','$doublesSS','$alooPieQty','$alooPiePep','$alooPieSS','$saheenaQty','$saheenaPep','$saheenaSS','$drinksQty','$flavor','$price');";

//$place_order = "INSERT INTO ORDERS (Doubles_Sweet_Sauce) VALUES('$doublesSS');";
    
    $test = "insert into TEST(aloopie) values ('$alooPieQty');";
    
   /*  -- show error messages  to insert into ORDERS table and TEST table  */
     
   
   if($mysqli->query($place_order)===TRUE){
        echo "<br>ORDERS table data INSERT successful";
            }else{
        echo "<br>ORDERS insertion failed";
    }
    
    
         if($mysqli->query($test)===TRUE){
        echo "<br>Test data insertion successful ";
            }else{
        echo "<br>TEST insertion failed";
    }
   
    
    $mysqli->close();
  
};


?>
