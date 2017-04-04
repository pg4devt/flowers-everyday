<div class="modal fade details-2" id="details-2" tableindex="-1" role="dialog"  aria-labelledby="details-2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
     <div class="modal-content">
        <div class ="modal-header">
          <button class="close" type="button" data-dismiss="modal" area-label="Close" >
            <span aria-hidden="true">&times;</span> 
          </button>
          <h4 class="modal-title text-center">6 Love Roses </h4>
        </div><!--modal-header-->
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6 ">
                <div class="center-block">
                   <img src="img/thumb_6love_roses.jpg" alt="6 Love Roses" class="details img-responsive"/>
                 </div>
              </div>
              <div class="col-sm-6">
                <h4>Details</h4>
                <p>Nothing speaks of love so much as a bouquet of beautiful 6 long stem red roses. Arranged in a classic glass vase, this bouquet is a gift to her heart from yours. </p>
                <hr  />
                <p>Price: ₱750</p>
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
              <a class="btn btn-success" href="cartAction.php?action=addToCart&id=2">Add to cart</a>
          </div>     
       </div><!--modal-body-->
     </div><!--modal-content-->
  </div><!--modal-dialog modal-lg-->
</div>      