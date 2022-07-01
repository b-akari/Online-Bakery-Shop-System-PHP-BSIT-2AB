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