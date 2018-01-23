var app = {

	init: function() {
		app.getPosts();
	},

	getPosts: function() {

		var rootURL = 'http://localhost/platzicomes/wp-json/wp/v2';

		$.ajax({
			type: 'GET',
			url: rootURL + '/viaje',
			dataType: 'json',
			success: function(data){

				$.each(data, function(index, value) {
			      $('ul.topcoat-list').append('<li class="topcoat-list__item">' +
			      	'<h3>'+value.title.rendered+'</h3>'+
							'<p>'+value.content.rendered+'</p>'+
			      	'<p><strong>Destino: </strong>'+value.destino+'</p>'+
			      	'<p><strong>Vacunas obligatorias: </strong>'+value.vacunas_obligatorias+'</p>'+
			      	'<p><strong>Vacunas recomendadas: </strong>'+value.vacunas_recomendadas+'</p>'+
			      	'<p><strong>Transporte local: </strong>'+value.transporte_local+'</p>'+
			      	'<p><strong>Peligrosidad: </strong>'+value.peligrosidad+'</p>'+
			      	'<p><strong>Moneda local: </strong>'+value.moneda_local+'</p>'+
							'</li>');
			    });
			},
			error: function(error){
				console.log(error);
			}

		});

	}

}
