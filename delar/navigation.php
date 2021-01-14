<?php 
    include 'path.php';
?>
<style>
    #link-main::after { content: "start";}
    #link-about::after { content: var(--heading-about);}
    #link-contact::after { content: var(--heading-contact);}
    #link-kurser::after { content: var(--heading-kurser);} 
    #link-services::after { content: var(--heading-services);}
    #link-gamlasajten::after { content: var(--heading-gamlasajten);} 
    #link-cv::after { content: var(--heading-cv);}
    #link-mall::after { content: var(--heading-mall);} 
    
    /****************  N Y    S I D A **********************************************
    *               1. Kopiera och aktivera kodrad nedan.
    *               2. Ändra 'mall' till 'xxx'
    ********************************************************************************/
   /*  #link-mall::after { content: var(--heading-mall);} */


</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#nav-button").click(function(){
            $("#button-hamburger").toggle();
            $("#button-cross").toggle();
        });
    });
</script>



    <nav class="navbar navbar-expand-lg container" id="mainNav"> 
   
            
        <a id="navbar-logo" class="navbar-brand js-scroll-trigger" href="index.php">
        <!--  <img src="assets/img/navbar-logo.svg" alt="" /> -->
            <svg version="1.1" id="logo" 
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                    x="0px" y="0px" width="90px"  viewBox="1 108 400 169" enable-background="new 1 108 400 169"
                    xml:space="preserve">
                <defs>
                </defs>
                <path  id="logo-shape" fill-rule="evenodd" clip-rule="evenodd" fill="#000" stroke="#000" stroke-width="4" stroke-linejoin="round" stroke-miterlimit="3" d="
                    M204,225c0,0,26,0,29,0c4,0,7-1,8-1c1-1,2-3,2-4c0-2,0-3-2-4c-1-1-4-2-7-2h-12l8-70c8-7,12-12,19-15c4-2,9-3,13-3c5,0,10,2,14,5
                    c3,4,5,8,5,13l-2,81h24c3,0,6,0,7-1s2-3,2-4c0-2,0-3-2-4c-1-1-4-2-7-2h-11l2-67c6-8,12-13,17-15c5-3,10-4,14-3c5,0,10,2,13,5
                    c4,3,6,7,6,12l5,76h23c3,0,5,0,7-1c1-1,1-2,1-4c0-1,0-3-2-4c-1-1-3-1-6-1h-11l-5-67c0-6-4-12-11-18c-5-5-12-7-20-8c-6,0-11,1-17,3
                    c-6,3-11,6-17,11c-3-5-7-9-12-12c-4-3-10-4-16-4c-11-1-20,3-32,11l1-10l-24-1c-3,0-6,0-7,1c-2,1-2,2-3,4c0,1,1,2,2,3s4,2,7,2h11
                    l-10,88h-20v-45c0-7-9-14-27-21c-15-6-34-10-51-10c-25,0-45,4-65,19c-9,7-20,22-22,33c-2,8-3,25-1,33c3,8,9,19,22,28
                    c18,10,38,15,63,15c28,1,52-4,63-8c8-3,12-6,12-8c0-4-3-6-10-5c-3,0-5,0-8,2c-5,2-11,3-19,5c-9,1-27,2-36,2c-18-1-31-2-45-9
                    c-10-5-22-13-24-24c-2-9-2-18,0-27c4-12,14-25,24-32c6-4,14-8,22-10s17-3,25-3c6,1,12,1,19,2c6,1,13,3,22,5c10,4,18,9,18,15v9
                    c-5-1-13-1-20-2c-7,0-16,0-22-1c-19,0-36,2-50,6c-10,3-26,9-26,22c0,10,16,18,24,21c10,3,12,3,32,4c25-1,46-6,62-15v10L204,225z
                    M169,188v16c-19,12-42,18-64,18c-10,0-18-2-25-4c-7-3-10-8-10-13c0-7,7-12,21-16c5-1,11-2,17-3s12-1,19-1c8,0,18,1,24,1
                    C158,187,165,188,169,188z"/>
                <!-- <rect x="1" y="1" display="none" fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#333333" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="3" width="400" height="401"/> -->
            
            </svg>
        </a>

        <button class="navbar-toggler navbar-toggler-right" id="nav-button" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" >
           <i class="fas fa-bars fa-lg ml-1" id="button-hamburger"></i></span>
            <i class="fas fa-times fa-lg ml-1" id="button-cross" style="display: none;"></i>
            
        </button>

        <div class="collapse navbar-collapse " id="navbarResponsive">
            <ul class="navbar-nav ml-auto shadowy js-scroll-trigger">
                <li class="nav-item" <?php if ($_SERVER['REQUEST_URI'] == $path . 'index.php'){ echo " id=\"currentpage\"";} ?>>
                    <a class="nav-link js-scroll-trigger" href="index.php" id="link-main"></a>
                </li>
         
                <li class="nav-item" <?php if ($_SERVER['REQUEST_URI'] ==  $path . 'about.php'){ echo " id=\"currentpage\"";} ?>>
                    <a class="nav-link js-scroll-trigger" href="about.php" id="link-about"></a>
                </li>
                
                <li class="nav-item" <?php if ($_SERVER['REQUEST_URI'] == $path . 'contact.php'){ echo " id=\"currentpage\"";} ?>>
                    <a class="nav-link js-scroll-trigger" href="contact.php" id="link-contact"></a>
                </li>
                

                 <li class="nav-item" <?php if ($_SERVER['REQUEST_URI'] ==  $path . 'gamlasajten.php'){ echo " id=\"currentpage\"";} ?>>
                <a class="nav-link js-scroll-trigger" href="gamlasajten.php" id="link-gamlasajten"></a></li>
                     
                <li class="nav-item" <?php if ($_SERVER['REQUEST_URI'] == $path . 'kurser.php'){ echo " id=\"currentpage\"";} ?>>
                    <a class="nav-link js-scroll-trigger" href="kurser.php" id="link-kurser"></a>
                </li>
             
                <li class="nav-item" <?php if ($_SERVER['REQUEST_URI'] == $path . 'services.php'){ echo " id=\"currentpage\"";} ?>>
                    <a class="nav-link js-scroll-trigger" href="services.php" id="link-services"></a>
                </li>
                
                <li class="nav-item" <?php if ($_SERVER['REQUEST_URI'] == $path . 'cv.php'){ echo " id=\"currentpage\"";} ?>>
                    <a class="nav-link js-scroll-trigger" href="cv.php" id="link-cv"></a>
                </li>
                
                <li class="nav-item" <?php if ($_SERVER['REQUEST_URI'] == $path . 'mall.php'){ echo " id=\"currentpage\"";} ?>>
                    <a class="nav-link js-scroll-trigger" href="mall.php" id="link-mall"></a>
                </li>
              
               
                <!------------  N Y   S I D A  -------------------------------------------------------- 
                -            1. Kopiera och aktivera kodsnutt nedan
                -            2. Ändra samtliga förekomster av 'mall' till 'xxx' 
                ------------------------------------------------------------------------------------>
                <!-- <li class="nav-item" <?php if ($_SERVER['REQUEST_URI'] == $path . 'mall.php'){ echo " id=\"currentpage\"";} ?>>
                    <a class="nav-link js-scroll-trigger" href="mall.php" id="link-mall"></a>
                </li> -->
                               

            </ul>
            <p>
           
            </p>
        </div>
    </nav>
    


