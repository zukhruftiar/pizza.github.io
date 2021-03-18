function allMenu(){
	$.getJSON('../pizzahut.co.id/pizza.json', function(data) {
		let menu = data.menu;
		$.each(menu, function(i, data) {
			$('#daftar-menu').append('<div class="col-md-4"><div class="card-group"><div class="card mb-3"><img src="../pizzahut.co.id/img/menu/'+data.gambar+'" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">'+data.nama+'</h5><p class="card-text">'+data.deskripsi+'</p><h5 class="card-title">Rp. '+data.harga+',-</h5></div><div class="card-footer"><a href="#" class="btn btn-primary">Order Now..</a></div></div></div></div>');
		});
	});
}

allMenu();

$('.nav-link').on('click', function() {
	$('.nav-link').removeClass('active');
	$(this).addClass('active');

	let kategori = $(this).html();
	$('h1').html(kategori);

	if (kategori == 'All Menu') {
		$('#daftar-menu').empty('fast', function() {

		});

		allMenu();
		return			
	}

	$.getJSON('../pizzahut.co.id/pizza.json', function(data) {
		let menu = data.menu;
		let content = '';

		$.each(menu, function(i, data) {
			if (data.kategori == kategori.toLowerCase()) {
				content += '<div class="col-md-4"><div class="card-group"><div class="card mb-3"><img src="../pizzahut.co.id/img/menu/'+data.gambar+'" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">'+data.nama+'</h5><p class="card-text">'+data.deskripsi+'</p><h5 class="card-title">Rp. '+data.harga+',-</h5></div><div class="card-footer"><a href="#" class="btn btn-primary">Order Now..</a></div></div></div></div>';
			}
		});

		$('#daftar-menu').html(content);
	});
});