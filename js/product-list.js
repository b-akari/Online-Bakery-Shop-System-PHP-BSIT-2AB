const displayAllProducts = () => {
  $.get(
    'DB/product-list.php?type=all'
  )
  .done((data)=>{
    let json = JSON.parse(data)
    json.results.forEach((val)=> {
      $.post('components/product-card.php', val)
      .done((res) => {
        $("#product-list").append(res);
        var elems = document.querySelectorAll('select');
        M.FormSelect.init(elems);
      })
    })
   
  })
}
const displayCategory = (type) => {
  $.get(
    `DB/product-list.php?type=${type}`
  )
  .done((data)=>{
    let json = JSON.parse(data)

    json.results.forEach((val)=> {
      $.post('components/product-card.php', val)
      .done((res) => {
        
        $("#category-list").append(res);

        var elems = document.querySelectorAll('select');
        M.FormSelect.init(elems);
      })
    })
   
  })
}

const highlightProduct = (product_ID) => {
  $.get(
    `DB/product-list.php?type=one&product_ID=${product_ID}`
  ).done(res =>{
    let data = JSON.parse(res)
    $.post(
      `components/product-highlight.php`,
      data.results[0]
    ).done(res => {
      $("#product-highlight").html(res)
      var elems = document.querySelectorAll('select');
      M.FormSelect.init(elems);
      var image = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(image );
    })
  })
}