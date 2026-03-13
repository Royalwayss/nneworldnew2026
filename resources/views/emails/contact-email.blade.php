<html>

    <head>

        <style type='text/css'>

                .style1 {

                    color: #FFFFFF

                }

                .style2 {

                    font-size: 11px;

                    font-weight: bold;

                    text-decoration: none;

                    font-family: Verdana, Arial, Helvetica, sans-serif;

                    color:#666666;

                }

                .style3 {

                    text-decoration: none;

                    font-family: Verdana, Arial, Helvetica, sans-serif;

                    font-size: 11px;

                    color:#666666;

                }

        </style>

    </head>

    <body>

        <table width='80%' border='0' cellpadding='3' cellspacing='3' style='border:#EFEFEF 5px solid; padding:5px;'>

            <tr>

                <td colspan='3'></td>

            </tr>

            <tr>

                <td  align='left' valign='middle'><img border='0' width="75px" src="{{ asset( $websettings['site_logo']) }}" alt='logo' /></td>

            </tr>

            <tr>

                <td>&nbsp;</td>

            </tr>

            <tr>

                <td class='style2'>Hi Admin! You have received the contact us information. Below are the details :-</td>

            </tr>

            <tr>

                <td>&nbsp;</td>

            </tr>           

            <tr>

               <td align='left' valign='middle'>

                   <table width='98%' border='0' align='right' cellpadding='5' cellspacing='5' style='background-color:#F5F5F5'>

                        <tr>

                           <td width='30%' align='left' valign='top' class='style2'>Name:</td>

                           <td width='5%' align='left' valign='top' class='style2'>:</td>

                           <td width='65%' align='left' valign='top' class='style3'>{{ $data['name'] }}</td>

                        </tr>

                        <tr>

                           <td width='30%' align='left' valign='top' class='style2'>Email:</td>

                           <td width='5%' align='left' valign='top' class='style2'>:</td>

                           <td width='65%' align='left' valign='top' class='style3'>{{ $data['email'] }}</td>

                        </tr>

                        <tr>

                           <td width='30%' align='left' valign='top' class='style2'>Message:</td>

                           <td width='5%' align='left' valign='top' class='style2'>:</td>

                           <td width='65%' align='left' valign='top' class='style3'>{{ $data['message'] }}</td>

                        </tr>
						
						
						@if(!empty(count($data['enquiry_products'])))
						
						
						   <tr> 
                            <td colspan="3" align='left' valign='top' class='style3'>
                                <table width='95%' border='0' align='left' cellpadding='3' cellspacing='1' bgcolor='ACA899'>
                                    <tr><td colspan="3"' align='center' valign='top' class='style2' bgcolor='#fff'>Enquiry  Products</td></tr>
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
						
                   </table>

               </td>

           </tr>

           <tr>

                <td>&nbsp;</td>

            </tr>

            <tr>

                <td  class='style2'> Regards<br />

                    Team {{config('constants.project_name')}} 

                </td>

            </tr>

        </table>

    </body>

</html>
