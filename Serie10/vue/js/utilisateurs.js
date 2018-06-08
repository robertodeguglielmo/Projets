var  clicActive = function(){
	if($(this).text()=="0"){
		$destination='utilisateur_active.php';
	}else{
		$destination='utilisateur_desactive.php';
	};
	var elem = $( this );
	$.post( $destination, { code : $(this).parent().attr('id') } )
	.done(function( data ) {
		elem.empty();
		elem.html(data);
	}
	);
};

var  clicKeyUp = function(){

	$destination='utilisateurs_tab.php';
	
	var elem = $( this );

	$.post( $destination, { PRENOM : elem.val()} )
	.done(function( data ) {
		$('#utilisateurs').replaceWith(data);
	}
	);
};


var  clicModif = function(){
	var elem = $( this );
	$destination='utilisateurs_fic.php';
	$.post( $destination, { UTILISATEUR : $(this).parent().attr('id') })
	.done(function( data ) {
		displayModal(data);
	});
};

var  clicNew = function(event){
	event.preventDefault();
	var elem = $( this );
	$destination='utilisateurs_fic.php';
	$.post( $destination)
	.done(function( data ) {
		displayModal(data);
	});
};

var displayModal= function(data){
	$("#myModal").remove();
	$VarTmp = '<div class="modal fade" id="myModal" role="dialog">'+
	'<div class="modal-dialog modal-sm">'+
	'<div class="modal-content">'+
	'<div class="modal-header">'+
	'<button type="button" class="close" data-dismiss="modal">&times;</button>'+
	'<h4 class="modal-title">Modal Header</h4>'+
	'</div>'+
	'<div class="modal-body">'+
	'  <p></p>'+
	'</div>'+
	'</div>'+
	'</div>'+
	'</div>';

	$('body').append($VarTmp);
	$('.modal-body').html(data);
	$("#myModal").modal();
	$("#myModal form").submit(function( event ) {
		event.preventDefault();
		$.post('utilisateurs_fic.php',$(this).serialize()).done(function(data) {});
		$("#myModal").modal('toggle');
		$("form #PRENOM").trigger('keyup');

	});
}

$(function(){
	$(document).on('click','#utilisateurs #actif',clicActive);
	$(document).on('click','#utilisateurs #modifier',clicModif);
	$(document).on('change','form[name="FormUtilisateur_tab"] #PRENOM',clicKeyUp);
	$(document).on('keyup','form[name="FormUtilisateur_tab"] #PRENOM',clicKeyUp);
	$('form[name="NewUtilisateur_tab"]').submit(function( event ) {clicNew(event)});
	
});

