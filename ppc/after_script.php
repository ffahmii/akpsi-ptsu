<script>
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
</script>

<!-- Create Function Script -->
<script>
    var tempTotal = 0;
    $('#button_add_bahan').on('click', function() {
        $('#table_bahan tr:last').prev().after(
            '<tr>' +
            '<td>' + $('[name="kode_bahan"]').val() + '</td>' +
            '<td>' + $('[name="nama_bahan"]').val() + '</td>' +
            '<td>' + $('[name="jumlah_bahan"]').val() + ' liter</td>' +
            '</tr>'
        );

        $('[name="kode_bahan"]').val('');
        $('[name="nama_bahan"]').val('');
        $('[name="jumlah_bahan"]').val('');
        $('#modal_add_bahan').modal('toggle');
    });
</script>