@extends('layouts.master')
@section('content')
<div class="container" style="background:#fff;">
	<div class="row">
    	<div class="col-md-12">
        	<p class="pop-heading" style="border-bottom: 1px solid #f9bf37; padding-top:20px;padding-bottom:15px; margin-bottom: 30px;">
        	your Shopping <span>Basket</span></p>
        </div>
    </div>
    <div class="row product-details">        
        <div class="col-md-12">
         
        	<div class="row">
                <div class="col-sm-6 col-md-6">
                    <h4 class="product-details-heading hidden-xs">report description</h4>    
                </div>
                <div class="col-sm-6 col-md-3">
                	<h4 class="product-details-heading hidden-xs">license type</h4>
                </div>
                <div class="col-sm-6 col-md-3">
                	<h4 class="product-details-heading hidden-xs" align="right">report Price</h4>
                </div>
            </div>
            
            <div class="clearfix"></div>  	               
    	</div>
        
      	<div id="shopp_cart">
         <div id="cart_content">
                          
        @foreach($itemHash = LaraCart::getItems() as $item) 
      <div class="col-md-12 product-border bg-info">
         
        	<div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="pop-report-image wrapper-img">
                    	<img height="136" src="https://www.bigmarketresearch.com/assets/images/dum_rep.jpg">
                    	
                    </div>
                    <a href="food-service-equipment-market"> <p class="product-title">{{$item->report_title}}</p> </a>
                    <div>
                        <p class="product-desc">
                        <strong>Selected License :</strong>Single User PDF / $5370 </p>
                        <p class="product-desc" style="font-size:12px;">REMOVE 
                        <a href="https://www.bigmarketresearch.com/cart/remove/f672d84549c71510c000a0d0445610ee"><mark>X</mark></a>                         </p>
                       
                    </div>    
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12">
                       <select name="user_licence" id="user_licence" class="license" onchange="updatecart_promoajax('731000','f672d84549c71510c000a0d0445610ee',this.value,'1')">
                  <option id="optradio0" value="Single User PDF:5370" name="selected_license" selected="">
                    
                     Single User PDF: US $5370
                     
                     </option>
                      <option id="optradio1" value="Five User Online/PDF:6638" name="selected_license">
                    
                     Five User Online/PDF: US $6638
                     
                     </option>
                      <option id="optradio2" value="Enterprise Online/PDF:7497" name="selected_license">
                    
                     Enterprise Online/PDF: US $7497
                     
                     </option>
                      <option id="optradio3" value="Data Pack:3840" name="selected_license">
                    
                     Data Pack: US $3840
                     
                     </option>
                         
                        
           </select>
                      
<br>
					<p style="font-size: 12px;color: #7B50F7"></p>
                </div>
                
                <div class="col-sm-6 col-md-3 col-xs-12">
                   
                                        <p align="right" style="font-size:18px; color:#373737; font-weight:700;">$5370</p>
                    
                    
                                      <div class="input-group">
                        <input type="text" class="form-control" name="discount_code" id="dc_f672d84549c71510c000a0d0445610ee" placeholder="Discount Code Here">
                        <span class="input-group-btn">
                        	<button class="btn btn-secondary" type="button" id="dc_bttonf672d84549c71510c000a0d0445610ee" onclick="updatecart_promoajax('731000','f672d84549c71510c000a0d0445610ee',document.getElementById('dc_f672d84549c71510c000a0d0445610ee').value,'2')">Apply</button>
                        </span>
                    </div>
                                       
       		</div>
            </div>
               
            <div class="clearfix"></div>
              	               
    	</div>
        @endforeach
       
	
    <div class="clearfix"></div>
   
    <div class="row product-details product-total">    
    
    	<div class="col-md-6 pull-right row col-xs-12">
        <div class="col-sm-6 col-md-6 col-xs-7" align="right">
        	<p class="product-sub-total">Sub Total:</p>
            <p class="product-sub-total">Delivery Charges:</p>
            <hr style="border-color: #cacaca;">
            <p class="product-grand-total">Grand Total:</p>
        </div>
        <div class="col-sm-6 col-md-6 col-xs-5" align="right">
       
        	<p class="product-sub-total-price">
            $5370</p>
            <p class="product-sub-total-price">$0.00</p>
            <hr style="border-color: #cacaca;">
            <p class="product-grand-total-price">$5370</p>
                                    
        </div>       
         </div>
	</div>
    </div>

   </div>
    </div>
    <div class="clearfix"></div>
    
    <div class="row product-checkout-buttons">
    	<div class="col-sm-6 col-md-6 col-xs-12">
        	<a href="https://www.bigmarketresearch.com/latest-reports" name="continue_shopping" class="btn checkout-button cont-shppping"> &lt;&lt; &nbsp; Continue Shopping</a>
        </div>
       
        <div class="col-sm-6 col-md-6 text-right col-xs-12">
        	<a href="https://www.bigmarketresearch.com/checkout/710915" name="proceed_to_checkout" class="btn checkout-button proceed-btn"> Proceed To Checkout &nbsp; &gt;&gt;</a>
        </div>
    </div>
    </div>
@stop