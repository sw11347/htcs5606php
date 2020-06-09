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