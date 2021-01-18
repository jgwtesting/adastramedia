<?php
	
    if(isset($_POST['KontaktEmail'])) {
    
        // Session LOOP2  start --------------------
                
        // Insamlingsdel
        $KontaktMeddelande = $_POST['KontaktMeddelande'];
        $KontaktEmail = 	$_POST['KontaktEmail'];
        $SPAM = 	$_POST['SPAM'];
        $GDPR = 	$_POST['GDPR'];
        
        // SPECIAL SWISH / PAYSON  --------------------
    
        $mailadress = $KontaktEmail  ;
    
        // GET  IP o URL  DEL -----------------
        
       if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $IP = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $IP = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $IP = $_SERVER['REMOTE_ADDR'];
        }
    
        /*  $URL =  "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  */
    
    
    
        $message ="Meddelande: $KontaktMeddelande
        Mailadress: $KontaktEmail
        SPAM: $SPAM
        GRPR: $GDPR
        " ;
    
        // SENDER o Subject här  --------------------
    
        $sender = $KontaktEmail ;
        $recipient = "kontakt@adastramedia.se" ;
        $subject = "Meddelande från kontaktsidan AMSE TEST";
        
        $senderB = $KontaktEmail ;
        $recipientB = "box@adastramedia.se";
        $subjectB = "Meddelande från kontaktsidan AMSE TEST KOPIA";
    
        // Generera datum och mailets id
        $date = date(DATE_RFC2822);
        $mid = "<" . sha1(microtime()) . "@" . $_SERVER['HTTP_HOST'] . ">";
     
    
        // Korrekt kodningstyp
    
        mb_internal_encoding("UTF-8");
    
        $sender = mb_encode_mimeheader($sender);
        $recipient = mb_encode_mimeheader($recipient);
    
        $senderB = mb_encode_mimeheader($senderB);
        $recipientB = mb_encode_mimeheader($recipientB);
    
        // Headers  1 MEDDELANDE   --------------------------------------------
    
        $headers =<<<EOT
        From: $sender
        Date: $date
        Message-ID: $mid
        MIME-Version: 1.0 
        Content-Type: text/plain; charset="UTF-8"
        EOT;
    
    
        mb_send_mail($recipient , $subject, $message, $headers , "-f$sender" );
    
        //  KOPIA MEDDELANDE  ---------------
    
        // Headers B  här --------------------------------------------
    
        $headersB =<<<EOT
        From: $senderB
        Date: $date
        Message-ID: $mid
        MIME-Version: 1.0 
        Content-Type: text/plain; charset="UTF-8"
        EOT;
    
        mb_send_mail($recipientB , $subjectB, $message, $headersB , "-f$senderB" );
    
    
    
    //  ------------------------------------------
    // Första IF loop SLUT   --------------------
    //  OMDIRIGERING , GÄLLER "IF SET mailadress" högst upp
    }
      
    else  {
        
      print "<meta http-equiv=\"refresh\" content=\"0;URL=https://www.adastramedia.se/index.html\">" ;	
    
    }
?>