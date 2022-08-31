function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

  function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
var t = 0;
  function sideAccess(){
    
    if(t==0){
      openNav()
      t=1;
    }
    else{
      closeNav()
      t=0;
    }
    
  }

  function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i =0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }


  function openSubTab(evt, cityName) {
    var i, tabcontent2, tablinks2;
    tabcontent2 = document.getElementsByClassName("tabcontent2");
    for (i =0; i < tabcontent2.length; i++) {
      tabcontent2[i].style.display = "none";
    }
    tablinks2 = document.getElementsByClassName("tablinks2");
    for (i = 0; i < tablinks2.length; i++) {
      tablinks2[i].className = tablinks2[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";

  }
  document.getElementById("defaultOpen").click();
  document.getElementById("defaultOpen2").click();

  