function add_to_cart(e) {
    cart = document.getElementById("cart_div");
    switch (e.id) {
        case "add_dog_food":
            qty = document.getElementById("dog_food_quantity").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Dog Food:<input type="number" class="cart_input" id = "cart_dog_food" pName = "dog_Food" price="6.50" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 6.5)
                    + '</p>');
            break;
        case "add_saddle":
            qty = document.getElementById("saddle_quantity").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Saddle:<input type="number" class="cart_input" id = "cart_saddle" pName = "saddle" price="49.99" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 49.99)
                    + '</p>');
            break;
        case "add_toys":
            qty = document.getElementById("toys_quantity").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Toys:<input type="number" class="cart_input" id = "cart_toys" pName = "pet_toys" price="14.99" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 14.99)
                    + '</p>');
            break;
        case "add_dog_meat":
            qty = document.getElementById("dog_meat_quantity").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Dog Meat:<input type="number" class="cart_input" id = "cart_dog_meat" pName = "dog_meat" price="14.99" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 10.00)
                    + '</p>');
            break;
        case "add_cat_food":
            qty = document.getElementById("cat_food_quantity").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Cat Food:<input type="number" class="cart_input" id = "cart_cat_food" pName = "cat_food" price="6.50" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 6.50)
                    + '</p>');
            break;
        case "add_cat_meat":
            qty = document.getElementById("cat_meat_quantity").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Cat Meat:<input type="number" class="cart_input" id = "cart_cat_meat" pName = "cat_meat" price="10.00" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 10.00)
                    + '</p>');
            break;
        case "add_horse_food":
            qty = document.getElementById("horse_food_quantity").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Horse Food:<input type="number" class="cart_input" id = "cart_horse_food" pName = "horse_food" price="10.00" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 10.00)
                    + '</p>');
            break;

    }

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