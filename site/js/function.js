
function suppressionImage(row)
{

		if(confirm("Etes-vous sur de vouloir supprimer le theme nommé  " + row+"?") ){
			$.post( "C:/wamp/www/projet/suppression.php", row){
    		});
  			alert( "success" );
		}
}