
function tombol() {
    // Manipulasi Element
    const title = document.getElementById('title');
    title.innerHTML = '<i>EXAMPLE BIODATA</i>';
    title.style.color = 'lightblue' // memberi warna teks

    // Manipulasi Node
    const kata = document.createElement('p'); // membuat elemen baru dalam document
    const newKata = document.createTextNode('Ini Akhir, Thank You 😊😊'); // membuat teks baru
    kata.appendChild(newKata); // Fungsi untuk menyimpan tulisan dan ditambahkan ke dalam paragraf
    
    const form = document.getElementById('form') // menyimpan tulisan di akhir element form
    form.appendChild(kata); // teks baru disimpan ke tempat baru yaitu diakhir element form
    kata.style.color = 'salmon'

    // membuat element baru
    const teks = document.createElement('p');
    const buatTeks = document.createTextNode('Ini merupakan contoh sederhana dari manipulasi DOM dengan javascript');
    teks.appendChild(buatTeks);
    const buat = document.getElementById('body');
    buat.appendChild(teks);
    teks.style.color = 'lightblue'
}