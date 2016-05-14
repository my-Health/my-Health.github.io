function ktop() {
   var k = document.getElementById('kg').value;
   document.getElementById('pound').value=(k*2.2046).toFixed(2);
}
function ptok() {
   var p = document.getElementById('pound').value;
   document.getElementById('kg').value=(p/2.2046).toFixed(2);
}
function mtofi() {
   var m = document.getElementById("meter").value;
   var fi = (m*39.37/100).toFixed(2);
   var i = parseInt(fi/12);
   var x = (fi - 12*i);
   document.getElementById("foot").value = i;
   document.getElementById("inch").value = x.toFixed(2);
}
function fitom() {
   var ft = document.getElementById("foot").value;
   var nn = document.getElementById("inch").value;
   var inch = parseInt(ft*12)+parseFloat(nn);
   //console.log(inch);
   inch = isNaN(inch)?0:inch;
   document.getElementById("meter").value = ((inch*2.54)).toFixed(2);
}
