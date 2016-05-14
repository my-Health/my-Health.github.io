<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Voir la fiche complète</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Fiche de votre journée</h4>
      </div>
      <div class="modal-body">
           <h4>Tous les calculs sont multipliés par la quantité que vous avez choisi</h4>
            <div id="tableauAliment">
               <table id="reponse" id="example" class="table table-striped table-bordered"  width="100%">
                   <tr>
                    <th>Aliment</th>
                    <th>Quantité</th>
                    <th>Protéine</th>
                    <th>Carbs</th>
                    <th>Fiber</th>
                    <th>Fat</th>
                    <th>Sugar</th>
                    <th>Calories</th>
                   </tr>
                   <tr id="breakfastX"><td colspan="8" style="text-align:center">Breakfast</td></tr>   
                   <tr><td colspan="6">Total des calories p'tit déj</td><td id="total1"  colspan="2"></td></tr>
                   <tr id="lunchX"><td colspan="8" style="text-align:center">Lunch</td></tr>   
                   <tr><td colspan="6">Total des calories déj</td><td id="total2" colspan="2"></td></tr>
                   <tr id="dinerX"><td colspan="8" style="text-align:center">Dinner</td></tr>
                   <tr><td colspan="6">Total des calories diner</td><td id="total3" colspan="2"></td></tr>
                   <tr id="col1X"><td colspan="8" style="text-align:center">Collation morning</td></tr>   
                   <tr><td colspan="6">Total des calories collation matinale</td><td id="total4" colspan="2"></td></tr>
                  <tr id="col2X"><td colspan="8" style="text-align:center">Collation afternoon</td></tr>
                  <tr><td colspan="6">Total des calories collation aprem</td><td id="total5" colspan="2"></td></tr>
                  <tr><td colspan="6">Total des calories</td><td id="total6"></td></tr>
               </table>
                   
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>