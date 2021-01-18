<?php

include 'path.php';


$heading = 'adastra media';




if ( $_SERVER[ 'REQUEST_URI' ] == $path . 'about.php' ) {
    $heading = 'om mig';
    ?>
    <style>
        :root {
            --page-banner-color: var(--about-banner-color);
        }
        
        /* #x::after { content: var(--heading-about);} */

    </style>


    <?php

//} elseif ( $_SERVER[ 'REQUEST_URI' ] == $path . 'index.php') {
} elseif ( $_SERVER[ 'REQUEST_URI' ] == $path || $_SERVER[ 'REQUEST_URI' ] == $path . 'index.php') {
    ?>
        <style>
            :root {
                --page-banner-color: var(--main-banner-color);
            }
            
            /* #x {
                font-size: var(--h1-main-font-size);
            } */
            
            /* #x::after { content: var(--heading-main);} */

        </style>

    <?php
} elseif ( $_SERVER[ 'REQUEST_URI' ] == $path . 'services.php' ) {
    $heading = 'tjänster';
    ?>
            <style>
                :root {
                    --page-banner-color: var(--services-banner-color);
                }
                
                /* #x::after { content: var(--heading-services);} */

            </style>


    <?php

} elseif ( $_SERVER[ 'REQUEST_URI' ] == $path . 'contact.php'  ||  $_SERVER[ 'REQUEST_URI' ] == $path . 'contactFormControl.php' ||  $_SERVER[ 'REQUEST_URI' ] == $path . 'contactMessageSent.php' ){
    $heading = 'kontakt';
    ?>
                <style>
                    :root {
                        --page-banner-color: var(--contact-banner-color);
                    }
                    
                    /* #x::after { content: var(--heading-contact);} */

                </style>

    <?php





} elseif ( $_SERVER[ 'REQUEST_URI' ] == $path . 'kurser.php' ) {
    $heading = 'kurser';
    ?>
                    <style>
                        :root {
                            --page-banner-color: var(--kurser-banner-color);
                        }
                        
                        /* #x::after { content: var(--heading-kurser);} */

                    </style>
    <?php

} elseif ( $_SERVER[ 'REQUEST_URI' ] == $path . 'gamlasajten.php' ) {
    $heading = 'gamla sajten';
    ?>
                        <style>
                            :root {
                                --page-banner-color: var(--gamlasajten-banner-color);
                            }
                            
                            /* #x::after { content: var(--heading-gamlasajten);} */

                        </style>

    <?php


} elseif ( $_SERVER[ 'REQUEST_URI' ] == $path . 'cv.php' ) {
    $heading = 'cv';
    ?>
                            <style>
                                :root {
                                    --page-banner-color: var(--cv-banner-color);
                                }
                                
                                /* #x::after { content: var(--heading-cv);} */

                            </style>
    <?php

    /* **************   MALL  */

} elseif ( $_SERVER[ 'REQUEST_URI' ] == $path . 'mall.php' ) {
    $heading = 'mall';
    ?>
                                <style>
                                    :root {
                                        --page-banner-color: var(--mall-banner-color);
                                    }
                                    
                                    /* #x::after { content: var(--heading-mall);} */

                                </style>

    <?php

    /***************   N Y    S I D A  **************************************************
    *   1. Kopiera och aktivera koden nedan
        2. Ändra 'mall' nedan till xxx
    ********************************************************************************/
    /*  } elseif ($_SERVER['REQUEST_URI'] == $path . 'mall.php') {
     $heading = 'mall';
     ?>   
             <style>
                 :root {--page-banner-color: var(--mall-banner-color);}
             </style>
     <?php */


} else {
    $heading = '';
}
?>


<div class="text-center">
    <h1>
        <?php 
            echo $heading; 
        ?>
    </h1>
</div>