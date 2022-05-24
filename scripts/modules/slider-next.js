/* ======= Slider start ======= */
/* make a loop that checks if a radio if one of the is checked, then
    wait 5 seconds and go to the other*/
jQuery(document).ready(function ($) {
  $(document).ready(function () {
    window.addEventListener("load", function () {
      let area = document.getElementById("slider-custom");
      console.log(area.getElementsByTagName("a"));
      linkst = area.getElementsByTagName("a")[0];
      linksn = area.getElementsByTagName("a")[1];
/*       linkrd = document.getElementsByTagName("a")[20];
      linkrth = document.getElementsByTagName("a")[21]; */
      nextBtn = document.getElementsByClassName("next half");
      /*  if(linkst.classList.contains("selected")){
                  console.log( "here" );
              } */

      linkst.classList.add("click-link-style");
      linksn.classList.add("click-link-style");
/*       linkrd.classList.add("click-link-style");
      linkrth.classList.add("click-link-style"); */

      linkst.removeAttribute("href");
      linksn.removeAttribute("href");
/*       linkrd.removeAttribute("href");
      linkrth.removeAttribute("href"); */

      var arrSlider = [linkst, linksn/* , linkrd, linkrth */];
      /* console.log( arrSlider); */

      function checkSlider() {
        for (i = 0; i < arrSlider.length; i++) {
          if (arrSlider[i].classList.contains("selected")) {
            /* arrSlider[i].classList.remove("selected"); */
            if (arrSlider[i + 1]) {
              arrSlider[i + 1].click();
              /* arrSlider[i+1].classList.add("selected"); */
            } else {
              arrSlider[0].click();
              /* arrSlider[0].classList.add("selected"); */
            }
            return;
          } else {
          }
        }
      }
      setInterval(checkSlider, 3900);
    });
  });
});
