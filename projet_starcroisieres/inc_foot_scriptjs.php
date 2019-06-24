<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.cycle2.swipe@1.0.0/jquery.cycle2.swipe.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
  $(document).ready(function() {
	 function account() {
    $.ajax(
    {
     type:"POST",
     url: "affiche_commentaire.php?page=<?php echo$_GET['page'];?>",
     success:function(msg) {
     $('#data').html(msg);
	 }
	 });
   }
account(); 
	
	
	$('#envoi').click(function() {
	// on recupere les variables
	var page = <?php echo$_GET['page'];?>;
    var coments = $('#coments').val();
	$('#coments').val('');
	var action="envoi";
	
  $.ajax({
	type:'GET', // on envoi les donnes
	url:'article.php?page=<?php echo$_GET['page'];?>',// on traite par la fichier
	data:'action=envoi&page='+page+'&coments='+coments,
	async:true,
	success:function(data) { // on traite le fichier recherche apres le retour
		$('#dat').html(data);
		account();
	 },
	 error: function() {
    alert('pas de connexion'); }
	 
	});
});

$('.button').click(function() {
	// on recupere les variables
	var page = <?php echo$_GET['page'];?>;
    
 $.ajax({
	type:'GET', // on envoi les donnes
	url:'delete.php?page=<?php echo$_GET['page'];?>',// on traite par la fichier
	data:'page='+page,
	async:true,
	success:function(data) { // on traite le fichier recherche apres le retour
		$('#dats').html(data);
},
	 error: function() {
    alert('pas de connexion'); }
	 
	});
});

});
</script>
