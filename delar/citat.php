
    <blockquote class="blockquote">
      <p class="mb-0" id="quote">
          Radikal och Reaktionär levde tillsammans som i ett<br>
          olyckligt äktenskap.<br>
          formade av varann, beroende av varann.<br>
          Men vi som är deras barn måste bryta oss loss.<br>
          Varje problem ropar på sitt eget språk.<br>
          Gå som en spårhund där sanningen trampade!
      </p>
      <footer class="blockquote-footer text-right" id="who">
          <!--  Tomas Tranströmer <cite title="Source Title">Dikter, Månpocket 1985</cite>  -->
          Tomas Tranströmer
      </footer>
    </blockquote>
   

<script type="text/javascript">
    quotes = [
        {quote: "Lorem ipsum<br>dolor sit amet<br>dolor sit amet<br>amet fugit perspiciatis", who: "Tomas Tranströmer"},
        {
          quote: "Consequatur<br>ipsa voluptate<br>yet another", 
          who: "Bruno K Öjer"
        },
        {
          quote: 
            "Fugit perspiciatis sit possimus<br>aborum optio iste?<br>fugit perspiciatis sit possimus<br>dolorum fugit minus nemo<br>fugit perspiciatis sit possimus<br>",
          who: "Katarina Frostensson"
        }, 
       
        /* {
          quote: "Bla<br>new row<br>another one", 
          who: "Katarina Frostensson"
        }, */
    ];

   
   if (typeof(Storage) !== "undefined") { // check browser support
        let quoteNr =  Math.floor(Math.random()*quotes.length);
        let quote = quotes[quoteNr].quote;
        let who = quotes[quoteNr].who;
        document.getElementById("quote").innerHTML = quote;
        document.getElementById("who").innerHTML = who;
   }
</script>