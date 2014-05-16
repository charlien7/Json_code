$(function(){
	$.getJSON( "jsonci", function( data ) {
		var items = [];
		$.each( data, function( key, val ) {
		items.push( "<tr id='row-" + key + "'><td>" + val.nombre + "</td><td>" + val.email + "</td><td>" + val.password+ "</td></tr>" );
		});
		var html = $(items.join( "" ));
		$("#users-body").append(html);
			/*$( "<ul/>", {
				"class": "my-new-list",
				html: items.join( "" )
				}).appendTo( "users-body" ); */
			
	});

});