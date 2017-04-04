<div class="modal fade details-1" id="details-1" tableindex="-1" role="dialog"  aria-labelledby="details-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class ="modal-header">
          <button class="close" type="button" data-dismiss="modal" area-label="Close" >
            <span aria-hidden="true">&times;</span> 
          </button>
          <h4 class="modal-title text-center">3 I Love You Roses </h4>
        </div><!--modal-header-->
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6 ">
                <div class="center-block">
                   <img src="img/thumb_3iloveyou_roses.jpg" alt="3 I Love You Roses" class="details img-responsive"/>
                 </div>
              </div>
              <div class="col-sm-6">
                <h4>Details</h4>
                <p>This fresh bouquet is bound by a local florist and consists of the following flowers; 3 red roses and greenery fillers.</p>
                <hr  />
                <p>Price: ₱700</p>
                <p>Color: Red</p>
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
              <a class="btn btn-success" href="cartAction.php?action=addToCart&id=1">Add to cart</a>
          </div>     
       </div><!--modal-body-->
     </div><!--modal-content-->
  </div><!--modal-dialog modal-lg-->
</div>      