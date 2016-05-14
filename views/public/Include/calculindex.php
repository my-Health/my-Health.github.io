<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Your daily needed calories.</h4>
        </div>
        <div class="modal-body">
          <p id="result"></p>
          <img src="../../image/BMI.png" style=" width:500px; height :400px" alt="BMI Map"/>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
</div>
  <!-- Trigger the modal with a button -->
<script>
   $(document).ready(function(){
      $("#myForm input").keyup(function(){
         var form = document.formula;  
         if (form.checkValidity()) {
            //console.log("wtf");
            $("#submit").removeClass("disabled");
            document.getElementById("submit").disabled = false;
         }
      });
   });
    function doIt() {
       var form = document.formula;
       if (form.checkValidity() == false) {
          console.log("some error "+$("#myModal").css("display"));
          
       }else{
       var myForm = document.getElementById('myForm');
       var gender = document.getElementsByName('gender')[0];
       var kg = document.getElementById('kg');
       var meter = document.getElementById('meter');
       var age = document.getElementById('age');
       var sport = $("input[name='sport']:checked");
        var sexe=gender.value;
        var weight=kg.value;
        var heiyth=meter.value;
        var age=age.value;
        var sport=sport.value;
        var BMRf = 655.1 + (9.563 * weight)+12.7*heiyth-4.676*age;
        var BMRm = 66.5 + (13.75 * weight)+5.003*heiyth-6.755*age;
        var BMR = (sexe=="male")? BMRm:BMRf;
        var BMI = weight/((heiyth/100)*(heiyth/100));
        BMI = BMI.toFixed(2);
        var quot = (sport=="Oui")?1.4:1.2;
        var depense = BMR*quot;
        depense = (age==0)?0:depense.toFixed(2);
       var result = document.getElementById('result');
        result.innerHTML= "Your daily needs are: " + depense + " <span class='label label-primary '>kcal</span>";
        result.innerHTML += "<br/>Your BMI (Body Mass Index) is: " + BMI;
        result.style.color= "blue";
        result.style.fontWeight= "bold";
        result.style.fontFamily = "monospace";
	    result.style.fontSize = "16px";
       }
    }
</script>
   

