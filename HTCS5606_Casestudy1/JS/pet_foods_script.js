function add_to_cart(e) {
    cart = document.getElementById("#right_content");
    name1 = $(e).attr("name");
    price = $(e).attr("price");
    qty = $(e).prev().val();

    cart.append("<p>Name: "+name1+"  price:"+number(price)*number(qty) +"</p>");
    total = total +number(price)*number(qty);
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
    i = 0;
    while (i < $("#right_content").children().length){
        // console.log($("#rightDiv").children()[i]);
        $("#invoicePlace").append($("#right_content").children()[i]);
        i=i+1;
    }

    $("#invoicePlace").append("<p>Total: "+total+"</p>");

}