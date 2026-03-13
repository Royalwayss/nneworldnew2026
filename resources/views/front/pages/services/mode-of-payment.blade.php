<div class="col-12 col-md-6 col-lg-6 mb-3" style="display:none">
						<div class="form-group">
							<label for="mode_of_payment">Listing Fees by:-</label>
							<select style="padding:12px; margin-left:4px; float:left; margin-bottom:10px; width:100%;"
								name="mode_of_payment" id="mode_of_payment" onchange="getmode(this.value)">
								<option value="">Select Mode of Payment</option>
								<option value="UPI">UPI</option>
								<option value="Cheque">Cheque</option>
								<option value="NEFT / Online Bank Transfer" selected>NEFT / Online Bank Transfer</option>

							</select>
							@php echo from_input_error_message('mode_of_payment') @endphp
							
							<div class="col-md-12 payment-detail" id="UPI">
								<h3>FOR UPI PAYMENT</h3>
								<blockquote style="line-height:30px;">Please scan the QR code for UPI payment:-<br>
									<img src="{{ asset('front/assets/images/upi-qrcode.png') }}" style="width:50%">
								     <a download href="{{ asset('front/assets/images/upi-qrcode.png') }}">Downlaod Qrcode</a>
								</blockquote>
							</div>
							<div class="col-md-12 payment-detail" id="Cheque">
								<h3>FOR PAYMENT BY CHEQUE</h3>
								<blockquote style="line-height:30px;">Make Cheque <br> on the Name of: <b>HELLO
										PROFESSIONALS SERVICES PRIVATE LIMITED</b> <br>And Send Cheque to Following
									Address with your details:-<br>
									#89, Rishi Nagar Market, Opp BSNL Office Ludhiana-141001.<br>
									ACCOUNT NUMBER: 088005500483 <br>
									ACCOUNT TYPE: CURRENT ACCOUNT<br>
									BANK NAME: ICICI BANK <br>
									IFSC CODE: ICIC0000880 <br>
									

									<p></p>
								</blockquote>
							</div>
							
							
							
							<div class="col-md-12 payment-detail" id="NEFT / Online Bank Transfer">
								
							</div>
						</div>

					</div>
					