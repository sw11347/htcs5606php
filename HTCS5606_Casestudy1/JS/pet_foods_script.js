total = 0;

function add_to_cart(e) {
    cart = $("#cart_div");
    name1 = $(e).attr("name");
    price = $(e).attr("price");
    console.log($(e).prev());
    qty = $(e).prev().prev().val();

    cart.append("<p>Name: "+name1+"  price:"+Number(price)*Number(qty) +"</p>");
    total = total +Number(price)*Number(qty);
}





    //Take everything from shopping cart

function invoice() {
    modal = document.getElementById("myModal");
    modal.style.display = "block";
    // Get the <span> element that closes the modal
    cross = document.getElementsByClassName("close")[0];
    console.log(cross);
    cross.onclick = function() {
        modal.style.display = "none";
    };
// When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
    //Take everything from shopping cart
    $("#invoicePlace").empty();
    $("#invoicePlace").append($("#cart_div").children());
    $("#invoicePlace").append("<p>Total: "+total+"</p>");

}