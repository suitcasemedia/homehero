$(function(){

	
	$.get('dashboard/xhrGetListings', function(o){
		
		//console.log(o[0].text);
		for (var i= 0; i < o.length ; i++)
		{


			$('#listInserts').append('<div>' + o[i].text + '<a class="del" id="" rel="'+ o[i].dataid +'" href="#"> DELETE</a></div>');

		}

		$('.del').on('click',function(){
			delItem = $(this) ;

			var id = $(this).attr('rel') ;
			//alert(id);
			//post for deleteing
			$.post('dashboard/xhrDeleteListing', {'id':id}, function(o) {

				alert('delete entry id ' + id + '?');
		
		//alert(o.text);
		// $('#listInserts').append('<div>' + o.text + '<a class="del" rel="'+ o.id +'"  href="#">X</a></div>');
		//alert(1);

		delItem.parent().remove();
		return false;
			}, 'json');

		//end of post for deleteing

			//alert(id) ;
			return false;
		});

	}, 'json');


		
	$('#randomInsert').submit(function() {
		var url = $(this).attr('action')
		var data = $(this).serialize();


		$.post(url, data, function(o) {
		
		alert(o.text);
		$('#listInserts').append('<div>' + o.text + '<a class="del" rel="'+ o.id +'"  href="#"> DELETE</a></div>');

		}, 'json') ;
		

		return false;
		});

			

		
});