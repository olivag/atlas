
$(document).ready(function(){
  
  pageTitle = $("title").text();
  $(".menu-item").removeClass("current-menu-item");

  if (pageTitle === "Atlas Institute | About Us") {
    $("#about-us").addClass("current-menu-item");
  } else if (pageTitle === "Atlas Institute | Location") {
    $("#contact").addClass("current-menu-item");
  } else if (pageTitle === "Atlas Institute | Certifications") {
    $("#courses").addClass("current-menu-item");
  } else if (pageTitle === "Atlas Institute | HVAC/R") {
    $("#courses").addClass("current-menu-item");
  } else if (pageTitle === "Atlas Institute | HVAC") {
    $("#courses").addClass("current-menu-item");
  } else if (pageTitle === "Atlas Institute | Our Mission") {
    $("#about-us").addClass("current-menu-item");
  } else if (pageTitle === "Atlas Institute | Gallery") {
    $("#about-us").addClass("current-menu-item");
  } else if (pageTitle === "Atlas Institute | Schedule") {
    $("#schedule").addClass("current-menu-item");
  } else if (pageTitle === "Atlas Institute | Events") {
    $("#schedule").addClass("current-menu-item");
  } else if (pageTitle === "Atlas Institute | Contact Us") {
    $("#contact").addClass("current-menu-item");
  } else if (pageTitle === "Atlas Institute | HVAC") {
    $("#courses").addClass("current-menu-item");
  } else if (pageTitle === "Atlas Institute | Our Mission") {
    $("#about-us").addClass("current-menu-item");
  } else if (pageTitle === "Atlas Institute | Gallery") {
    $("#about-us").addClass("current-menu-item");
  }
});