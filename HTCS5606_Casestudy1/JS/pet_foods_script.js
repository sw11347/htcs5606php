function add_to_cart(e) {
    cart = document.getElementById("#right_content");
    name1 = $(e).attr("name");
    price = $(e).attr("price");
    qty = $(e).prev().val();

    cart.append("<p>Name: "+name1+"  price:"+number(price)*number(qty) +"</p>")
}


function invoice() {

    invoice_page = document.getElementById("invoice_page");

    var btn = document.getElementById("show_invoice_button");


    var span = document.getElementsByClassName("close")[0];


    btn.onclick = function () {
        cart = document.getElementsByClassName("quantity");
        invoice_content = document.getElementById("invoice_content");
        Total = 0;
        var elems = document.getElementsByClassName("items");
        i = 0;
        while (i < elems.length) {
            elems[i].parentNode.removeChild(elems[i]);
        }


        i = 0;
        while (i < cart.length) {
            console.log(cart[i].id);
            qty = cart[i].value;
            switch (cart[i].id) {
                case "cart_dog_food":
                    invoice_content.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Dog Food: Quantity:' + qty + ' Price:$' + (Number(qty) * 6.5) + '</p>');
                    Total += (Number(qty) * 6.5);
                    break;
                case "cart_saddle":
                    invoice_content.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Saddle: Quantity:' + qty + ' Price:$' + (Number(qty) * 49.99) + '</p>');
                    Total += (Number(qty) * 49.99);
                    break;
                case "cart_toys":
                    invoice_content.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">toys: Quantity:' + qty + ' Price:$' + (Number(qty) * 14.99) + '</p>');
                    Total += (Number(qty) * 14.99);
                    break;
                case "cart_dog_meat":
                    invoice_content.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Dog Meat: Quantity:' + qty + ' Price:$' + (Number(qty) * 10) + '</p>');
                    Total += (Number(qty) * 10);
                    break;
                case "cart_cat_food":
                    invoice_content.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Cat Food: Quantity:' + qty + ' Price:$' + (Number(qty) * 6.5) + '</p>');
                    Total += (Number(qty) * 6.5);
                    break;
                case "cart_cat_meat":
                    invoice_content.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Cat Meat: Quantity:' + qty + ' Price:$' + (Number(qty) * 10) + '</p>');
                    Total += (Number(qty) * 10);
                    break;
                default:
                case "cart_horse_food":
                    invoice_content.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Horse Food: Quantity:' + qty + ' Price:$' + (Number(qty) * 10) + '</p>');
                    Total += (Number(qty) * 10);
                    break;

            }

            i++;

        }
        invoice_content.insertAdjacentHTML(
            'beforeend',
            '<p class = "items">Total: $' + Total + '</p>');

        invoice_page.style.display = "block";
        invoice_content.insertAdjacentHTML(
            'beforeend',
            '<p class = "items">Total: $'+ Total+'</p>');

       invoice_page.style.display = "block";
    };


    span.onclick = function() {
        invoice_page.style.display = "none";
    };

    window.onclick = function(event) {
        if (event.target == invoice_page) {
            invoice_page.style.display = "none";
        }
    }

}