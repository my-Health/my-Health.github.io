$(document).ready(function () {

   var x = location.pathname.split("/");
    //alert(x[x.length - 1]);
   var query = "a[href$=\"" + x[x.length - 1] + "\"]";
   //var a = document.querySelector(query);
   $(query).parent().addClass('active');
   //alert(query);
   //a.parentNode.className += "active";
   //alert("it workd or not");
});