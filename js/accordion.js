/*
http://localhost/howto/code/index/cAccordion.php 
*/
function accordion(accordionItem) {
  var accordionItemElement = document.querySelectorAll(accordionItem);
  var i;
  
  for (i = 0; i < accordionItemElement.length; i++) {
    accordionItemElement[i].addEventListener("click", function() {
          // Toggle between adding and removing the "active" class,to highlight the button that controls the panel 
          this.classList.toggle("active");
  
          //Toggle between hiding and showing the active panel 

          var panel = this.nextElementSibling;
          var plus = this.querySelectorAll(".plus")[0];
          var minus = this.querySelectorAll(".minus")[0];
          if (panel.classList.contains("active")) {
              panel.classList.remove("active");
              //panel.style.display = "none";
              //panel.style.height = 0 + "px";
              plus.style.display = "inline-block";
              minus.style.display = "none";
          } else {
              panel.classList.add("active");
              //panel.style.display = "block";
              //panel.style.height = "auto";
              plus.style.display = "none";
              minus.style.display = "inline-block";
          }
          //Animated Accordion (Slide Down)
          if (panel.style.maxHeight){
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          } 
      });
  }
}


function accordionPlusAll(accordionItem, btnAccordionPlusAll) {  
  var btnAccordionPlusAllElement = document.querySelectorAll(btnAccordionPlusAll);
  for (var i = 0; i < btnAccordionPlusAllElement.length; i++){
    btnAccordionPlusAllElement[i].addEventListener('click', function() {
      var accordionItemElement = document.querySelectorAll(accordionItem);
      for (var j = 0; j < accordionItemElement.length; j++) {

        // Toggle between adding and removing the "active" class,to highlight the button that controls the panel 
        accordionItemElement[j].classList.toggle("active");

        //Toggle between hiding and showing the active panel 

        var panel = accordionItemElement[j].nextElementSibling;
        var plus = accordionItemElement[j].querySelectorAll(".plus")[0];
        var minus = accordionItemElement[j].querySelectorAll(".minus")[0];
        if (panel.classList.contains("active")) {
            //panel.classList.remove("active");
            //panel.style.display = "none";
            //panel.style.height = 0 + "px";
            //plus.style.display = "inline-block";
            //minus.style.display = "none";
        } else {
            panel.classList.add("active");
            //panel.style.display = "block";
            //panel.style.height = "auto";
            plus.style.display = "none";
            minus.style.display = "inline-block";
        }
        //Animated Accordion (Slide Down)
        
          panel.style.maxHeight = panel.scrollHeight + "px";
           
      }
    });
  }

}



function accordionMinusAll(accordionItem, btnAccordionMinusAll) {  
  var btnAccordionMinusAllElement = document.querySelectorAll(btnAccordionMinusAll);
  for (var i = 0; i < btnAccordionMinusAllElement.length; i++){
    btnAccordionMinusAllElement[i].addEventListener('click', function() {
      var accordionItemElement = document.querySelectorAll(accordionItem);
      for (var j = 0; j < accordionItemElement.length; j++) {

        // Toggle between adding and removing the "active" class,to highlight the button that controls the panel 
        accordionItemElement[j].classList.toggle("active");

        //Toggle between hiding and showing the active panel 

        var panel = accordionItemElement[j].nextElementSibling;
        var plus = accordionItemElement[j].querySelectorAll(".plus")[0];
        var minus = accordionItemElement[j].querySelectorAll(".minus")[0];
        if (panel.classList.contains("active")) {
            panel.classList.remove("active");
            //panel.style.display = "none";
            //panel.style.height = 0 + "px";
            plus.style.display = "inline-block";
            minus.style.display = "none";
        } else {
            //panel.classList.add("active");
            //panel.style.display = "block";
            //panel.style.height = "auto";
            //plus.style.display = "none";
            //minus.style.display = "inline-block";
        }
        //Animated Accordion (Slide Down)
          panel.style.maxHeight = null;
        
      }
    });
  }

}