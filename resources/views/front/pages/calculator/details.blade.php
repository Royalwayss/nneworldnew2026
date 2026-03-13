               <div class="contactForm__field mt-30 mb-5">
                  <h5 class="section-title">Monthly Payment:</h5>
                  <div>Total : {{ @$emi_detail['monthly_payment']['total'] }} </div>
                  <div>Mortgage :  {{ @$emi_detail['monthly_payment']['mortgage'] }} </div>
                  <div>Property Tax  :  {{ @$emi_detail['monthly_payment']['property_tax'] }} </div>
                  <div>Hoa  :  {{ @$emi_detail['monthly_payment']['hoa'] }} </div>
                  <div>Annual Home Ins  :  {{ @$emi_detail['monthly_payment']['annual_home_ins'] }} </div>
               </div>
               <div class="contactForm__field mt-30 mb-5">
                  <h5 class="section-title">Annual Payment:</h5>
                  <div>Total:  {{ @$emi_detail['annual_payment']['total'] }} </div>
                  <div>Mortgage :  {{ @$emi_detail['annual_payment']['mortgage'] }} </div>
                  <div>Property Tax  :  {{ @$emi_detail['annual_payment']['property_tax'] }} </div>
                  <div>Hoa  :  {{ @$emi_detail['annual_payment']['hoa'] }} </div>
                  <div>Home Insurance  :  {{ @$emi_detail['annual_payment']['home_insurance'] }} </div>
               </div>
               <div class="contactForm__field mt-30">
                  <h5 class="section-title">Total Interest Paid (Rs):  {{ number_format(@$emi_detail['total_interest_paid'],2) }}</h5>
				 
               </div>
            