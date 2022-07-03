const addToCart = (user_ID, product_ID, variants_ID) => {
  let data = {
    type : "add",
    user_ID,
    product_ID,
    variants_ID,
  }

  $.post('DB/add-to-cart.php', data)
    .done((res)=> {
      console.log(res);
      M.toast({html: res})
      getCart(user_ID);
    })
}
const deleteFromCart = (addToCart_ID, user_ID) => {
  let data = {
    type : "delete",
    addToCart_ID,
  }
  $.post('DB/add-to-cart.php', data)
    .done((res)=> {
      M.toast({html: res})
      getCart(user_ID);
      getTotal(user_ID)
      displayCheckout(user_ID)

    })
}

const getCart = (user_ID) => {
  if(user_ID != "null"){
    $("#display-price").removeClass("hide");
    $("#buy-all-btn").removeClass("hide");

    $("#cart-list").html("");
    $.get(`DB/add-to-cart.php?type=get&user_ID=${user_ID}`)
    .done((res)=> {
      let data = JSON.parse(res);
      if(data == null){
        $("#display-price").addClass("hide");
        $("#buy-all-btn").addClass("hide");
      }
      data.result.forEach((val)=> {
        $.post("components/cart-item.php", val)
        .done(htmlRes => {
          $("#cart-list").append(htmlRes);
        })
      })
    })
    getTotal(user_ID);
  } else {
    $("#display-price").addClass("hide");
    $("#buy-all-btn").addClass("hide");

    $("#cart-list")
    .html(`<li class="center">
            <h5>
              <i class="material-icons">
                priority_high
              </i>
              Log-in to order
              <i class="material-icons">
                priority_high
              </i>
            </h5>
          </li>`);
  }
}

const updateQty = (cart_ID, quantity, user_ID) => {
  let data = {
    type : "quantity",
    cart_ID,
    quantity
  }
  $.post("DB/add-to-cart.php", data)
  .done(res => {
    getTotal(user_ID)
    displayCheckout(user_ID)
  })

}

const getTotal = (user_ID) => {
  let data = {
    type : 'get-quantity',
    user_ID
  }
  $.post("DB/add-to-cart.php", data)
  .done(res => {
    let result = JSON.parse(res);
    $("#total-quantity-cart").text(result.total_quantity)
    $("#total-price-cart").text(result.total_price)
  })
}

const displayCheckout = (user_ID) => {
  let data = {
    type : 'checkout-list',
    user_ID
  }
  $.post("DB/add-to-cart.php", data)
  .done(res =>{
    $("#checkout-data").html("");
    let json = JSON.parse(res);
    json.forEach((val, i)=>{
      $.post("components/checkout-item.php", val)
      .done(res =>{
        $("#checkout-data").append(res);
      })
      if(i == json.length - 1){
        displayTotalCheckout(user_ID);
      }
    })
  })
}

const displayTotalCheckout = (user_ID) => {
  let data = {
    type : 'checkout-list-total',
    user_ID
  }
  $.post("DB/add-to-cart.php", data)
  .done( res=> {
    let json = JSON.parse(res)[0];
    json.ID = 0;
    json.product = "<b>Total</b>";
    json.category = " ";
    json.base_price = " ";
    json.variant = " ";
    $.post("components/checkout-item.php", json)
    .done(res =>{
      $("#checkout-data").append(res);
    })
    $("#merchandise-price-payment").val(
      parseFloat(json.final_price)
      );
    $("#total-quantity").val(
      parseFloat(json.quantity)
      );
    let total = parseFloat(json.final_price) + 50;
    $("#total-price-payment").val(parseFloat(total));
  })
}

const checkOutItems = (input_data, user_ID) => {
  // spreading input_data into its own variable
  let [
    name,
    contact_number,
    address,
    payment_method,
    card_number,
    card_expiry_date,
    card_cvv,
    gcash_name,
    gcash_number,
    total_quantity,
    merchandise_price_payment,
    shipping_fee,
    total_price_payment,
  ] = input_data.map(val => val.value);

  let data = {
    name,
    contact_number,
    address,
    payment_method,
    card_number,
    card_expiry_date,
    card_cvv,
    gcash_name,
    gcash_number,
    total_quantity,
    merchandise_price_payment,
    shipping_fee,
    total_price_payment,
    user_ID
  }

  $.post("DB/checkout.php", data)
  .done(res =>{
    if(res == "success") {
      window.location = "thank-you.php";
    }
  })
  console.log(data)
}