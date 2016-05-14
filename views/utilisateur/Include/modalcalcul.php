<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Check full chart</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Your daily chart</h4>
      </div>
      <div class="modal-body">
           <h4>All calculations are taking into consideratin the quantity given.</h4>
            <div id="tableauAliment">
               <table id="reponse" id="example" class="table table-striped table-bordered"  width="100%">
                   <tr>
                    <th>Aliment</th>
                        <th>Quantity</th>
                        <th>Protein</th>
                        <th>Carbs</th>
                        <th>Fiber</th>
                        <th>Fat</th>
                        <th>Sugar</th>
                        <th>Calories</th>
                   </tr>
                   <tr id="breakfastX"><td colspan="8" style="text-align:center" class="mealtd">Breakfast</td></tr>   
                   <tr><td colspan="6" style="text-align:right" class="caltd">Total calories of breakfast</td><td id="totalbreakfast"  colspan="2"></td></tr>
                   <tr id="lunchX"><td colspan="8" style="text-align:center" class="mealtd">Lunch</td></tr>   
                   <tr><td colspan="6" style="text-align:right" class="caltd">Total calories of lunch</td><td id="totallunch" colspan="2"></td></tr>
                   <tr id="dinerX"><td colspan="8" style="text-align:center" class="mealtd">Diner</td></tr>
                   <tr><td colspan="6" style="text-align:right" class="caltd">Total calories of diner</td><td id="totaldiner" colspan="2"></td></tr>
                   <tr id="col1X"><td colspan="8" style="text-align:center" class="mealtd">Morning Snack</td></tr>   
                   <tr><td colspan="6" style="text-align:right" class="caltd">Total calories of morning snack</td><td id="totalcol1" colspan="2"></td></tr>
                  <tr id="col2X"><td colspan="8" style="text-align:center" class="mealtd">Afternoon Snack</td></tr>
                  <tr><td colspan="6" style="text-align:right" class="caltd">Total calories of afternoon snack</td><td id="totalcol2" colspan="2"></td></tr>
                  <tr><td colspan="6" style="text-align:right" class="finalcal">Total calories</td><td id="total" colspan="2"></td></tr>
               </table>
                   
            </div>
      </div>
      <div class="modal-footer"><h2 id="return"></h2>
       <button type="button" class="btn btn-primary" onclick="perform()">Submit Calories</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>
function perform() {
   $.ajax({
      url: "calories.php",
      data:{},
      type: "POST",
      success: function(datareturned){
         $("#return").html(datareturned);
         console.log(datareturned);
      }
   });
}
</script>
<script>
	$(document).ready(function(){
		var spacer ='<tr class="spacer"></tr>'
		$('[id^="total"]').parent().after(spacer);
});
</script>