
$(document).ready(function(){
  
  pageTitle = $("title").text();
  $(".menu-item").removeClass("current-menu-item");

  var companyName = "Atlas Institute";

  if (pageTitle === companyName + " | About Us") {
    $("#about-us").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Location") {
    $("#contact").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Certifications") {
    $("#courses").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | HVAC/R") {
    $("#courses").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | HVAC") {
    $("#courses").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Our Mission") {
    $("#about-us").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Gallery") {
    $("#about-us").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Schedule") {
    $("#schedule").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Events") {
    $("#schedule").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Contact Us") {
    $("#contact").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | HVAC") {
    $("#courses").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Our Mission") {
    $("#about-us").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Gallery") {
    $("#about-us").addClass("current-menu-item");
  
  // Spanish version
  } else if (pageTitle === companyName + " | Sobre Nosotros") {
    $("#about-us").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Local") {
    $("#contact").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Certificados") {
    $("#courses").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | HVAC/R") {
    $("#courses").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | HVAC") {
    $("#courses").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Nuestra Mision") {
    $("#about-us").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Galeria") {
    $("#about-us").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Horarios") {
    $("#schedule").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Eventos") {
    $("#schedule").addClass("current-menu-item");
  } else if (pageTitle === companyName + " | Contactenos") {
    $("#contact").addClass("current-menu-item");
  } 
});