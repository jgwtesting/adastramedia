<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            include 'delar/head.php';
        ?>
        <!-- fredriks original form check -->
        <script src="js/checkForm.js"></script> 
    <!-- facebooktaggar -->
    </head>
     
    <body>

        <?php 
            include 'delar/header.php'; 
        ?>
        
        <!-- Contact -->
        
        <main class="container d-flex  justify-content-center align-center flex-column">

        <!-- frontend funkar, med freriks original js form check -->    
        <div class="row">
                <div class="col-md d-flex flex-column justify-content-center align-items-center">
                   <div class="mb-2"><?php include 'delar/logo.php'; ?></div>
                   <h2>adastra media</h2>
                   <p class="text-center" id="fl-contact">
                        fredrik lindqvist<br>
                        övre bergsv. 7 (1107)<br>
                        126 34 hägersten<br>
                        073 906 5099<br>
                        <a id="maejl">        
                        </a>
                    </p>
                </div>
                <div class="col-md">
                   
                    <form action="contactFormControl.php" method="post" name="kontakt" id="kontakt" accept-charset="utf-8">
                        
                        <!-- Email -->
                        <div class="form-group">
                            <label for="Mailadress">Email</label>
                            <!-- <input name="Mailadress" id="Mailadress" class="form-control"  type="email" aria-describedby="emailHelp" placeholder="Ange email här...">  --> <!-- xxx -->
                            <input name="Mailadress" id="Mailadress" class="form-control" placeholder="Ange email här...">
                            <!-- <small id="emailHelp" class="form-text text-muted">Din email delas aldrig någonstans</small> -->
                        </div>

                        <!-- Meddelande -->
                        <div class="form-group">
                            <label for="Meddelande">Meddelande*</label>
                            <textarea name="Meddelande" id="Meddelande" class="form-control" id="Meddelande" rows="3"  placeholder="Skriv meddelande här..."></textarea>
                        </div>

                        <!-- Spamskydd -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">
                                Spamskydd
                                <small id="emailHelp" class="form-text text-muted">Ange summan av 3 plus 2 (siffran för det)</small>
                            </label>
                            <input name="spamskydd" id="spamskydd" type="text" class="form-control" style="width: 8%;" id="spamskydd" aria-describedby="emailHelp">
                        </div>

                         <!-- Godkänn -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="GDPR" id="GDPR">
                            <label class="form-check-label ml-2" for="exampleCheck1">Jag godkänner att uppgifterna lagras</label>
                            <small class="form-text text-muted">
                                Adastra media lämnar aldrig ut personuppgifter till tredje part. 
                            </small>
                        </div>
                        
                        <!-- Buttons -->
                        <input name="Submit2" type="submit"  class="btn btn-primary" onBlur="return document.MM_returnValue" onClick="YY_checkform('kontakt','GDPR','#q','1','Du måste godkänna att uppgifterna sparas för att vi ska kunna kommunicera','Mailadress','#S','2','* Kolla MAILADRESSEN \(om det råkat bli ett  mellanslag i slutet kan det bli fel\) *','spamskydd','#5_5','1','* Kolla SPAMSKYDD - Om du är människa skriver du siffran 5 *','Meddelande','1','1','* Kolla MEDDELANDE -  Det verkar vara tomt *');return document.MM_returnValue" value="Skicka"/>
                        <input name="Submit" type="reset" class="btn btn-danger" value="Rensa" />
                    
                    </form>
                    
                </div>
            </div>


        

</main> 
<!-- 
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

        <?php 
             include 'delar/scripts.php'; 
             include 'delar/footer.php'; 
        ?> 
    </body>
</html>