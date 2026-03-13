@extends('front.layout.layout')
@section('content')  
<section class="breadcrumb-area">
	<div class="breadcrumb-area-bg" style="background-image: url(front/assets/images/banner-forms.jpg);">
	</div>
	<div class="shape-box"></div>
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="inner-content">
					<div class="breadcrumb-menu">
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li class="active">{{ $category['name'] }}</li>
						</ul>
					</div>
					<div class="title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear"
						data-aos-duration="1500">
						<h2>{{ $category['name'] }} </h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="about-style2-area project-inner-sec">
	<div class="container">
		<div class="row">
			@include('front.pages.projects.listing.search')
		</div>
		<div class="row" id="appendProjects">
			@include('front.pages.projects.listing.project-list')
		</div>
	</div>
</section>
<!--Start Slogan Style2 Area-->
<section class="slogan-style2-area">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="slogan-style2-content">
					<div class="title">
						<h2>We’re Delivering the Best<br> Customer Experience</h2>
					</div>
					<div class="button-box">
						<a class="btn-one" href="#"><span class="txt">Join Us</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="{{ asset('front/assets/js/ajax-jquery.min.js') }}"></script>
	<script>
	$(document).ready(function(){
		
		var queryStringObject = {};
		
		$('.searchselect').niceSelect('destroy');
		$('#search-state').select2();
		$('#search-city').select2();
		
		
		$("#search-state").change(function() { 
		    $(".loadingDiv").show();
			var state = $("#search-state").val(); 
	         var category_seo = "{{ $category['seo_unique'] }}"; 
			 
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': '<?= csrf_token() ?>'}});
                
            var ajaxUrl = "{{ route('searchprojectcity') }}";
        
			$.ajax({
				url : ajaxUrl,
				type : 'post',
				data: { state:state,category_seo:category_seo },
				dataType:'json',
				success:function(resp){ 
					
					$("#search-city").html(resp.cities);
					$(".loadingDiv").hide();
				},
				error:function(){ $(".loadingDiv").hide();     }
			});
			 
			 
			 
			 
			 
		});	
			
		$(".project-search").click(function(){
	       
			var state = $('#search-state').val();
			var city = $('#search-city').val();
			
			if(state != ''){				
				queryStringObject['state'] = [];
				queryStringObject['state'].push(state);
	        }else{
				delete queryStringObject['state'];
			}
	        
	        if(city != ''){				
				queryStringObject['city'] = [];
				queryStringObject['city'].push(city);
	        }else{
				delete queryStringObject['city'];
			}  
	        
	        filterproducts(queryStringObject);
              
		});	

	});  


    function filterproducts(queryStringObject){
       $(".loadingDiv").show();
        var queryString = "";
        for (var key in queryStringObject) {
            if(queryString==''){
                queryString +="?"+key+"=";
            }else{
                queryString +="&"+key+"=";
            }
            var queryValue = "";
            for (var i in queryStringObject[key]) {
                if(queryValue==''){
                    queryValue += queryStringObject[key][i];
                } else {
                    queryValue += "~"+queryStringObject[key][i];
                }
            }
            queryString += queryValue;
        } 
        if (history.pushState) {
            var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + queryString;
            window.history.pushState({path:newurl},'',newurl);
        }
        if (newurl.indexOf("?") >= 0) {
            newurl = newurl+"&json=";
        }else{
            newurl = newurl+"?json=";
        }
		
		
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '<?= csrf_token() ?>'
            }
        });
        $.ajax({
            url : newurl,
            type : 'get',
            dataType:'json',
            success:function(resp){ 
                
				$("#appendProjects").html(resp.projectHtml);
                $(".loadingDiv").hide();
            },
            error:function(){ $(".loadingDiv").hide();     }
        });
		
		


 }


	




	
	</script>
@endsection