var  clicActive = function(){
	alert('--'+$(this).text()+'--');
	if($(this).text()=="0"){
		$destination='utilisateur_active.php';
	}else{
		$destination='utilisateur_desactive.php';
	};
	var elem = $( this );
	$.post( $destination, { code : $(this).parent().attr('id') } )
  			.done(function( data ) {
	    			alert(data);
	    			elem.empty();
	    			elem.html(data);
  					}
  				);
};


var  clicModif = function(){
	var elem = $( this );
	$destination='utilisateurs_fic.php';
	$.post( $destination, { UTILISATEUR : $(this).parent().attr('id') } )
  			.done(function( data ) {
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
					        '<div class="modal-footer">'+
					        '  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+
					        '</div>'+
					      '</div>'+
					    '</div>'+
					  '</div>';

	    			$('body').append($VarTmp);
	    			$('.modal-body').html(data);

	    			 $("#myModal").modal();
	    			
  					}
  				);
};

$(function(){
	$('#utilisateurs #actif').on('click',clicActive);
	$('#utilisateurs #modifier').on('click',clicModif);
});
