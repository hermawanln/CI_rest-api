// 1. Berkenalan dengan object js dan merubah dari object ke JSON //
// 
// var mahasiswa = [
//     {
//         nama : "Hermawan Luthfi Nugroho",
//         nrp : "32523523523523",
//         email: "hermawan.luthfi@gmail.com"
//     },
//     {
//         nama : "Hermawan Luthfi Nugroho",
//         nrp : "32523523523523",
//         email: "hermawan.luthfi@gmail.com"
//     },
//     {
//         nama : "Hermawan Luthfi Nugroho",
//         nrp : "32523523523523",
//         email: "hermawan.luthfi@gmail.com"
//     },
// ]
// console.log("=== ISI DARI VARIABLE MAHASISWA ===");

// console.log(mahasiswa);

// console.log("=== ISI DARI VARIABLE MAHASISWA SETELAH STRINGIFY ===");

// // JSON.stringify -> digunakan untuk mengubah dari OBJECT ke JSON //
// console.log(JSON.stringify(mahasiswa));  

// 2. Merubah json ke object dengan Ajax //
// 
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if(xhr.readyState == 4 && xhr.status == 200){
//         // JSON.parse -> digunakan untuk mengubah dari JSON ke OBJECT  //
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }
// xhr.open('GET', 'json/coba.json', true);
// xhr.send();

// 3. Menggunakan JQuery //
// 
$.getJSON('json/coba.json', function(data){
    console.log(data);
    
});