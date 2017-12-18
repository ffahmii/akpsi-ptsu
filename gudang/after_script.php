<script>
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
</script>

<!-- Create Function Script -->
<script>
	var tempTotal = 0;
    // tambah order item
    $('#button_add_order_item').on('click', function() {
        $('#table_order_item tr:last').prev().after(
            '<tr>' +
            '<td>' + $('[name="order_item_product_name"]').val() + '</td>' +
            '<td>' + $('[name="order_item_total_order"]').val() + '</td>' +
            '<td>Rp. ' + numberWithCommas($('[name="order_item_price_per_unit"]').val()) + ',00</td>' +
            '<td>' + $('[name="order_item_discount"]').val() + '%</td>' +
            '<td>' + $('[name="order_item_tax"]').val() + '%</td>' +
            '<td>' + $('[name="order_item_description"]').val() + '</td>' +
            '</tr>'
        );

        tempTotal += parseInt($('[name="order_item_price_per_unit"]').val()) * parseInt($('[name="order_item_total_order"]').val());

        $('[name="order_item_product_name"]').val('');
        $('[name="order_item_total_order"]').val('');
        $('[name="order_item_price_per_unit"]').val('');
        $('[name="order_item_discount"]').val('');
        $('[name="order_item_tax"]').val('');
        $('[name="order_item_description"]').val('');
        $('#modal_add_order_item').modal('toggle');
    });

    // hitung total biaya
    $('#button_calculate_total_costs').on('click', function() {
        var shippingCosts = $('[name="purchase_order_shipping_costs"]').val() ? $('[name="purchase_order_shipping_costs"]').val() : '0';
        $('[name="purchase_order_total_costs"]').val('Rp. ' + numberWithCommas(2000000 * 120 + parseInt(shippingCosts) + tempTotal) + ',00');
    });
</script>