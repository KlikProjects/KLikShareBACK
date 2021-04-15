function infoGenerator(content) {  
    let photosind = content.id

    let newProduct = ""
    newProduct += `
    <section class="container_product">
    <div class="product_description">
      <section>
        <button class="button_close" onclick="closeficha()">X</button>
        <img class="photo_product" src="${newList[photosind].img}" />
        <aside class="info">
          <h3 class="product_name">${newList[photosind].name}</h3>
          <p class="reviews">⭐️⭐️⭐️⭐️12377 Reviews</p>
          <p class="price">$ 180</p>
          <input class="number_product" type="number" placeholder="0"/>
          <button class="button_addCart">Add to cart</button>
        </aside>
      </section>
      <section class="description">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, consequatur dolorum quo explicabo fugit quia architecto voluptatibus expedita eius nisi quidem harum repellat veniam tempora? Vitae commodi architecto optio quod!</p>
      </section>
    </div>
  </section>
    `
    document.getElementById("root").innerHTML = newProduct
}

function items() {
    let listItems = ""
    let number = newList.length
    for (let i = 0; i < number; i++) {
        listItems += `
    <div class="item-pro" onclick="infoGenerator(this)" id="${newList[i].index}">
        <img src="${newList[i].img}" alt="${newList[i].alt}">
    </div>
    `
    }
    
    document.querySelector(".items-pro").innerHTML = listItems
}
items()

function closeficha() {
  document.getElementById("root").innerHTML = ""
}
