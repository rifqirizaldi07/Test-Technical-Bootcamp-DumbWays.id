<script>
      
        function formValidate() {
            // membuat variabel untuk mengambil nilai dari password
            var pw = document.getElementById("password").value;
            // membuat pengkondisian password sudah sesuai yang di minta atau belum
            // cek apakah panjang karakter dari password minimal 8 atau tidak
            if (pw.length < 8) {
                // jika salah maka munculkan pesan kesalahan
                document.getElementById("error").innerHTML = "password minimal 8 karakter";
            } else if (pw.match(/[^a-zA-Z]/g)) {
                document.getElementById("error").innerHTML = "password harus angka huruf besar7kecil dan simbol";
            } else if (pw.match(/[^0-9]/g)) {
                document.getElementById("error").innerHTML = "password harus angka huruf besar&kecil dan simbol";
            } else {
                document.getElementById("info").innerHTML = "password benar";
            }
        }
    
</script>