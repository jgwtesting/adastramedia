<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
            include 'delar/head.php';
        ?>
    <!-- facebooktaggar -->
</head>

<body>

    <?php 
        include 'delar/header.php'; 
    ?>

     <!-- Contact Form Control -->

    <main class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">       
              <!-- <div class="text-center"> -->
              <div class="">
                <div height=""><h2>Kontrollera ditt meddelande</h2></div>
                  
                    
                <div>
                    &nbsp;
                    <h3>Detta har du skrivit: </h3></div>



                  <?php 


                  // Insamlingsdel

                  
                  $KontaktEmail = $_REQUEST['Mailadress'];
                  $KontaktMeddelande = $_REQUEST['Meddelande'];
                  $SPAM = $_REQUEST['spamskydd'];
                    $URL =  "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                  $GDPR = $_REQUEST['GDPR'];
                  
                  

                  ?>
                    

                          <div><strong>Meddelande</strong>:</div>
                          <div><strong>
                            <?php echo $KontaktMeddelande ?> &nbsp;</strong></div>
                      
                  
                          <div><strong>Mailadress:</strong></div>
                          <div><strong class="RoedMarkering"><?php echo $KontaktEmail ?></strong></div>

                    <div><strong>GDPR:</strong></div>
                          <div><strong class="RoedMarkering"><?php echo $GDPR ?></strong></div>
                            
                          <div><strong>SPAM:</strong></div>
                          <div><strong class="RoedMarkering"><?php echo $SPAM ?></strong></div>
                          
                                  

                      <div> G&aring; tillbaka <a href="javascript:history.back();" onFocus="this.blur()"><strong>HÄR</strong></a> och &auml;ndra om n&aring;got har blivit fel. <br> </div>
                      
                        <div> 
                <form name="form1" method="post"  action="contactMessageSent.php"  accept-charset="UTF-8">
                    <input name="SPAM" id="SPAM" type="hidden"  value="<? echo $SPAM ?>" />
                    <input name="GDPR" id="GDPR" type="hidden"  value="<? echo $GDPR ?>" />
                    <input name="KontaktEmail" type="hidden" id="KontaktEmail" value="<? echo $KontaktEmail ?>" />
                    <input name="KontaktMeddelande" type="hidden" id="KontaktMeddelande" value="<? echo $KontaktMeddelande ?>" />
                    <input type="submit" name="Submit" class="btn btn-primary" value=" SKICKA MEDDELANDET » ">
                </form>

                </div>
                </div>
              </div>
            </div>
        </div>
</main>


    
<?php 
             include 'delar/scripts.php'; 
             include 'delar/footer.php'; 
        ?>
</body>
</html>