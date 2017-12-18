<script>
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
</script>

<!-- Create Function Script -->
<script>
	var tempTotal = 0;
    
    // Author : Andes Suciani
    $('#mulaiProduksi').on('click', function() {
        if (confirm('Apakah anda yakin akan memulai produksi untuk SPP ini?')) { 
            $(location).attr('href', './list.php?message=successStart') 
        }
    });
    $('#selesaiProduksi').on('click', function() {
        if (confirm('Apakah anda yakin akan menyelesaikan status produksi untuk SPP ini?')) { 
            $(location).attr('href', './list.php?message=successFinish') 
        }
    });
</script>