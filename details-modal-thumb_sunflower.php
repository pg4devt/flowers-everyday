<div class="modal fade details-8" id="details-8" tableindex="-1" role="dialog"  aria-labelledby="details-8" aria-hidden="true">
    <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class ="modal-header">
          <button class="close" type="button" data-dismiss="modal" area-label="Close" >
            <span aria-hidden="true">&times;</span> 
          </button> 
          <h4 class="modal-title text-center">Sunflower Bouquet </h4>
        </div><!--modal-header-->
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6 ">
                <div class="center-block">
                   <img src="img/thumb_sunflower.jpg" alt="Sunflower Bouquet " class="details img-responsive"/>
                 </div>
              </div>
              <div class="col-sm-6">
                <h4>Details</h4>
                <p>Bouquet of 10 stem Sunflower nice wrapped in a non woven paper.</p>
                <hr  />
                <p>Price: ₱800</p>
                <p>Color: Yellow</p>
                <form action="add_cart.php" method="post">
                  <div class="form-group">
                    <div class="col-xs-3">
                     <label for="quantity" id="quantity-label">Quantity:</label>
                      <input type="text" class="form-control" id="quantity" name="quantity" value="1"/>
                    </div><br /> <br /> <br /> 
                  </div>
                </form>
              </div>
            </div><!--row-->
          </div>
          <div class="modal-footer">
              <button class="btn btn-default" data-dismiss="modal">Close</button>
              <a class="btn btn-success" href="cartAction.php?action=addToCart&id=8">Add to cart</a>
          </div>     
       </div><!--modal-body-->
     </div><!--modal-content-->
  </div><!--modal-dialog modal-lg-->
</div>      