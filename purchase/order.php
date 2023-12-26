<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg"  style="max-width: 70%;"  role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img id="productImage" class="img-fluid" alt="Product Image" style="height: 100%;">
                    </div>
                    <div class="col-md-6  mt-3">
                        <div class="row  mt-2">
                            <div class="col-md-12  col-lg-12  co">
                                <h5 id="cartDetails"></h5>
                                <p  style="line-height:28px; letter-spacing:1px; margin-top:18px;font-family:Arial (sans-serif) ">
                                environment. With its sleek and modern design, the SmartHome Hub effortlessly integrates
                                into any home decor, enhancing both functionality and aesthetics. Compatible with a wide
                                range of smart devices such as lights, thermostats, and security cameras, this hub empowers
                                users to manage their entire home environment through a user-friendly mobile app. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-3  d-block">
                        <p  class="mt-2">Product ID: <span id="productIdDisplay"></span></p>
                    </div>
                    <div class="col-md-5 col-lg-5  d-block">
                        <input  type="number"  id="totalQuantityDisplay"  class="form-control"  placeholder="Quantity...">
                    </div>
                    <div class="col-md-4  d-block ">
                        <button type="button" class="btn btn-primary btl-lg ml-5" onclick="confirmOrder()">Confirm Order</button>
                    </div>
                </div>
                <p id="productDescription" style="line-height:28px; letter-spacing:1px; margin-top:18px; font-family:Arial (sans-serif) "></p>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
