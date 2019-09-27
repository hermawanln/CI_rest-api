function tampilkanSemuaMenu() {
    $.getJSON('data/pizza.json', function(data) {
        let menu = data.menu;
        
        console.log("i adalah indeks");
        $.each(menu, function(i, data) {
            // append untuk menyisipkan html di dalam parameter id daftar-menu
            $('#daftar-menu').append('<div class="col-md-4"><div class="card mb-3"><img src="img/menu/'+ data.gambar +'" class="card-img-top" alt="iki gambar pizza"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><h5 class="card-title"><b>Rp. '+ data.harga +',-</b></h5><p class="card-text">'+ data.deskripsi +'</p><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>')
        }); 
    });
}

tampilkanSemuaMenu();


$('.nav-link').on('click', function() {
    $('#daftar-menu').html('');
    $('.nav-link').removeClass('active');
    $(this).addClass('active');
    
    
    let kategori = $(this).html(); // html berguna untuk mengambil isi html dari clas nav-link
    $('#kategori').html(kategori); // html berguna untuk merubah konten dari semua <p> element / replace
    
    if(kategori == "All Menu"){
        tampilkanSemuaMenu();
        return;
    }

    // ajax
    $.getJSON('data/pizza.json', function(data) {
       let menu = data.menu;
       let content = '';
       
       $.each(menu, function(i, data) {
           if(data.kategori == kategori.toLowerCase()){
               content += '<div class="col-md-4"><div class="card mb-3"><img src="img/menu/'+ data.gambar +'" class="card-img-top" alt="iki gambar pizza"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><h5 class="card-title"><b>Rp. '+ data.harga +',-</b></h5><p class="card-text">'+ data.deskripsi +'</p><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>';
           }
       });
       $("#daftar-menu").html(content);
    });

});