$(document).ready(function() {
    console.log("Search active");
    $('#domain-search').on('submit', function(e) {
        console.log("Search clicked");
        e.preventDefault();
        
        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var result = data;
                if (result.response == 'exists') {
                    window.location.href = 'product.php?id='+result.idProduct;
                } else {
                    window.location.href = 'add-product.php?barCode='+result.barCodeEAN;
                }
            }
        })
    });
});