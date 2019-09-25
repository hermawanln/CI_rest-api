$.getJSON('data/pizza.json', function(data) {
    let menu = data.menu;
    
    console.log("i adalah indeks");
    $.each(menu, function(i, data) {
        $('#daftar-menu').append('<div class="col-md-4"><div class="card mb-3"><img src="img/menu/'+ data.gambar +'" class="card-img-top" alt="iki gambar pizza"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><h5 class="card-title"><b>Rp. '+ data.harga +',-</b></h5><p class="card-text">'+ data.deskripsi +'</p><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>')
    });
    
    
});