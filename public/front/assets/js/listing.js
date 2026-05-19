$(document).ready(function() {
	var queryStringObject = {};
	
	$(document).on('click', '.apply-filter-btn', function(event) {
		$(".filterAjax").each( function () {
			var name = $(this).attr('name');
			queryStringObject[name] = [];
			$.each($("input[name='"+$(this).attr('name')+"']:checked"), function(){
				queryStringObject[name].push($(this).val());
			});
			if(queryStringObject[name].length == 0){
				delete queryStringObject[name];
			}
		});
		filterproducts(queryStringObject);
	});
	
	$(document).on('change', '.sort-select', function(event) {
		var name = 'sort';
		queryStringObject[name] = [];
		var val = $(this).val();
		if(val != ''){
			queryStringObject[name].push(val);
		}else{
			delete queryStringObject[name];
		}
		filterproducts(queryStringObject);
	});

	$(document).on('click', '.clear-filter-btn', function(event) {
			$('.sort-select').val('');
			$('.filterCheck').prop('checked', false);
				queryStringObject = {};
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
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$.ajax({
		url : newurl,
		type : 'get',
		dataType:'json',
		success:function(resp){
		$("#appendProductListing").html(resp.view);
			$(".loadingDiv").hide();
		},
		error:function(){$(".loadingDiv").hide();}
	});
    }