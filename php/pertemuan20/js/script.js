$(document).ready(function(){
	//hilangkan tombol cari
	$('#tombol-cari').hide();

	//event when keyword ditulis
	$('#keyword').on('keyup', function() {
		//munculkan loading
		$('.loader').show();

		//ajax menggunakan load
		// $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());
		
		$.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data){
			$('#container').html(data);
			$('.loader').hide();
		})
	});
});