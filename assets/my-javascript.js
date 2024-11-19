// Mengambil harga produk (harga kamar) berdasarkan id_produk
function harga(id_produk) {

    var xmlhttp = new XMLHttpRequest();
    // ketika state dari xmlhttp berubah
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // untuk menampilkan harga produk berdasarkan id_produk
            document.getElementById("harga_produk").value = this.responseText;
        }
    }
    // mengirimkan request ke server
    xmlhttp.open("GET", "function/harga.php?q=" + id_produk, true);
    xmlhttp.send();

}

// Menghitung total bayar berdasarkan harga produk, durasi menginap, dan sarapan
function hitung_total() {
    var harga = document.getElementById('harga_produk').value;
    var durasi_menginap = document.getElementById('durasi_menginap').value;
    var total_bayar = document.getElementById('total_bayar').value;
    var sarapan = document.getElementById('sarapan');
    var discount = document.getElementById('discount').value;

    // untuk menghitung total bayar dan mengecek apakah durasi menginap lebih dari 3 hari
    if (durasi_menginap >= 3) {
        // discount 10% jika durasi menginap lebih dari 3 hari
        discount = harga * durasi_menginap * 0.1;
        total_bayar = harga * durasi_menginap - discount;
        if (sarapan.checked) {
            total_bayar = total_bayar + 80000;
        }
    } else {
        total_bayar = harga * durasi_menginap;
        if (sarapan.checked) {
            total_bayar = total_bayar + 80000;
        }
    }

    // menampilkan hasil perhitungan
    document.getElementById('discount').value = discount;
    document.getElementById('total_bayar').value = total_bayar;
}


$(document).ready(function() {
    // Mengatur default setting untuk validasi form
    $.validator.setDefaults({
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'text-danger',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });
    // Menentukan rules dan messages untuk form reservasi
    $('#form_reservasi').validate({
        rules: {
            nik_pemesan: {
                minlength: 16,
                maxlength: 16
            },
            durasi_menginap: {
                number: true,
                min: 1
            },

        },
        messages: {
            nik_pemesan: {
                maxlength: "Masukan data 16 digit",
                minlength: "Masukan data 16 digit"
            },
            durasi_menginap: {
                number: "Masukan data angka",
                min: "Masukan data lebih dari 0"
            }
        }
    });
});