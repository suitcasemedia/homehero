$(function(){

	

	$.get('admin/xhrGetListings', function(o){
		//console.log(o[0].text);
		for (var i= 0; i < o.length ; i++)
		{
			$('#list > tbody:last').append('<tr><td>' + o[i].id + '</td>  <td>' + o[i].orderdate + ' </td> <td>' + o[i].name + '</td>    <td>' + o[i].email + ' </td> <td> ' + o[i].phone + ' </td> <td> ' + o[i].postcode + '</td> <td> ' + o[i].address + ' </td>   <td> ' + o[i].summary + ' </td> <td>  <a  class="del" id="'+ o[i].id +'" rel="'+ o[i].id +'" href="#"> DELETE</a> </td></tr>');
		}		


		$('#randomInsert').submit(function() {
		var url = $(this).attr('action')
		var data = $(this).serialize();
		$.post(url, data, function(o) {
		alert(o.name);
		//$('#listInserts').append('<div>' + o.text + '<a class="del" rel="'+ o.id +'"  href="#"> DELETE</a></div>');
		$('#list > tbody:first').append('<tr><td>' + o.id + '</td>   <td> ' + o.orderdate + ' </td> <td>' + o.name + '</td>  <td>' + o.email + ' </td>  <td> ' + o.phone + ' </td> <td> ' + o.postcode + ' </td> <td>' + o.address + '</td> <td>' + o.summary + ' </td> <td>  <a  class="del" id="'+ o.id +'" rel="'+ o.id +'" href="#"> DELETE</a> </td></tr>');
		}, 'json') ;
		return false;
		});


	$('#list').on('click','a',function(){
			delItem = $(this) ;

			var id = $(this).attr('rel') ;
			//alert(id);
			//post for deleteing
			var r = confirm('delete entry id ' + id + '?');
			if (r == true) 
					{
   
				
						$.post('admin/xhrDeleteListing', {'id':id}, function(o) {

							
					

						delItem.parent().parent().remove();
					//alert(o.text);
					// $('#listInserts').append('<div>' + o.text + '<a class="del" rel="'+ o.id +'"  href="#">X</a></div>');
					//alert(1);

					
					return false;
						}, 'json');

					}

		//end of post for deleteing

			//alert(id) ;
			return false;
		});

	}, 'json');


			

		
});