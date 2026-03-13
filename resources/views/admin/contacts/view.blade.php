
<div class="view-data">
	<div class="row">
		<div class="col-3"><strong>Name</strong></div>
		<div class="col-1">:</div>
		<div class="col-8">{{ $data['name'] }}</div>
	</div>
	<div class="row">
		<div class="col-3"><strong>Email</strong></div>
		<div class="col-1">:</div>
		<div class="col-8">{{ $data['email'] }}</div>
	</div>
	<div class="row">
		<div class="col-3"><strong>Message</strong></div>
		<div class="col-1">:</div>
		<div class="col-8">{{ $data['message'] }}</div>
	</div>
	<div class="row">
		<div class="col-3"><strong>Date</strong></div>
		<div class="col-1">:</div>
		<div class="col-8">{{ date("M-d-Y H:i a", strtotime($data['created_at'])) }}</div>
	</div>
	
		@if(!empty(count($data['enquiry_products'])))
						
						
						   <tr> 
                            <td colspan="3" align='left' valign='top' class='style3'>
                                <table width='95%' border='0' align='left' cellpadding='3' cellspacing='1' bgcolor='ACA899'>
                                    <tr><td colspan="3"' align='left' valign='top' class='style2' bgcolor='#fff'><strong>Enquiry  Products</strong></td></tr>
									<tr>
                                        <td width='20%' align='center' valign='top' class='style2' bgcolor='#cccccc'>Product Name</td>
                                        <td width='15%' align='center' valign='top' class='style2' bgcolor='#cccccc'>Image</td>
                                        <td width='15%' align='center' valign='top' class='style2' bgcolor='#cccccc'>Category</td>
                                    </tr> 
                                   @foreach( $data['enquiry_products'] as $product_details)
                                    <?php $product = $product_details['product']; ?>
									<tr>
                                        <td align='center' valign='top' class='style3' bgcolor='#F7F7F7'>
										<a target="_block" style="text-decoration: none;color: #666666;" href="{{ route('product',[$product['id'],$product['product_url']]) }}">
										   {{ $product['product_name'] }}
										</a>
                                        </td>
                                        <td align='center' valign='top' class='style3' bgcolor='#F7F7F7'>
										 
										 @if(!empty($product['product_image']))
												<a  target="_block" href="{{ route('product',[$product['id'],$product['product_url']]) }}">
													  <img width="30%" src="{{ asset('front/assets/images/products/large/'.$product['product_image']['image']) }}">
												</a>
										 @endif
										</td>
                                        <td align='center' valign='top' class='style3' bgcolor='#F7F7F7'>
										 @if(!empty($product['category']))
										       <a target="_block" style="text-decoration: none;color: #666666;" href="{{ url($product['category']['category_url']) }}">
										           {{ $product['category']['category_name'] }}
										        </a>
										 @endif
										
										</td>
										
                                    </tr>
                                  
                                  @endforeach
                                   
                                </table>
                            </td>
                        </tr>
                       
						@endif
	
	
	
	
	
	
</div>
       