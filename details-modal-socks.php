<div class="modal fade details-6" id="details-6" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="margin:0 !important"> 
                    <span aira-hidden="true"&times;>Close</span>
                </button> 

                <h4 class="modal-title text-center">Socks</h4>

            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="center-block">
                                <img src="images/socks.png" alt="Socks" class="details img-responsive" style="height:150px !important; margin-left: 30%; margin-top: 15%;">
                            </div>   
                        </div>

                        <div class="col-sm-6">
                            <h4>Details</h4>
                             <p> 
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                                incididunt ut labore et dolore magna aliqua. Pharetra pharetra massa massa ultricies mi.
                            </p>
 
                            <hr>

                            <p>Price: $3.99</p>
                            <p>Brand: Vans </p>

                            <form action="add_cart.php" method="post">
                                <div class="form-group">
                                    <div class="col-xs-3">
                                        <label for="quantity" id="quantity-label">Quantity:</label>
                                        <input type="text" class="form-control" id="quantity" name="quantity">
                                    </div>

                                    <br><br>

                                    <div class="form-group">
                                        <label for="size">Size:</label>
                                        <select name="size" id="size" class="form-control">
                                            <option value="39/41">39/41</option>
                                            <option value="42/44">42/44</option>
                                            <option value="44/46">44/46</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-warning" type="submit">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Add to cart 
                </button>
            </div>
        </div>
    </div>
</div>