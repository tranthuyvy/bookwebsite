var urlBase = "http://localhost/bookwebsite/"
function addWishlist(id) {
    $.get(urlBase+'wishlist/add', {'id': id}, function (data) {
        alert("Success");
    });
}

function addCart(id){
    $.get(urlBase+'shopping/addcart', {'id': id}, function (data) {
        val = data.split("-");
        $("#amount").text(val[0]);
        $("#total").text(val[1]);
    });
}

function deleteCart(id){
    var result = confirm("Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?");
    if (result){
        $.get(urlBase+'shopping/deletecart', {'id': id}, function (data) {
            val = data.split("-");
            $("#amount").text(val[0]);
            $("#total").text(val[1]);
            $("#item_"+id).remove();

            $("#listCart").load(urlBase+'shopping/viewcart','#listCart');
        });
    }
}

function updateCart(id){
    amount = $("#amount_"+id).val();
    $.get(urlBase+'shopping/updatecart', {'id': id, 'amount':amount}, function (data) {
        val = data.split("-");
        $("#amount").text(val[0]);
        $("#total").text(val[1]);
        $("#item_"+id).remove();

        $("#listCart").load(urlBase+'shopping/viewcart','#listCart');
    });
}