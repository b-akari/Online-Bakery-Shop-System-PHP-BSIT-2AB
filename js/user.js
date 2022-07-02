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
    })
}

const getCart = (user_ID) => {
  if(user_ID != "null"){
    $("#cart-list").html("");
    $.get(`DB/add-to-cart.php?type=get&user_ID=${user_ID}`)
    .done((res)=> {
      let data = JSON.parse(res);
      console.log({data});
      data.result.forEach((val)=> {

        $.post("components/cart-item.php", val)
        .done(htmlRes => {
          $("#cart-list").append(htmlRes);
        })

      })
    })
  } else {
    $("#cart-list").html(`<li class="center">
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
