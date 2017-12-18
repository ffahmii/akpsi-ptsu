<script>
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
</script>

<!-- Create Function Script -->
<script>

    // Author : Andes Suciani
    $('#setujuKeuangan').on('click', function() {
        if (confirm('Apakah anda yakin menyetujui PO ini?')) { 
            $(location).attr('href', './list.php?message=successSetuju') 
        }
    });
    $('#tolakKeuangan').on('click', function() {
        if (confirm('Apakah anda yakin menolak PO ini?')) { 
            $(location).attr('href', './list.php?message=successTolak') 
        }
    });
</script>