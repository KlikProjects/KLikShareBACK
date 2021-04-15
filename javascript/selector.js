function selector(name) {
    console.log(name.id)
    let listItems = ""
    let nameselector = name.id
    newList.map((glasses) =>{
        if (glasses.id === nameselector){
            listItems += `
            <div class="item-pro" onclick="infoGenerator(this)" id="${glasses.index}">
            
                <img src="${glasses.img}" alt="${glasses.alt}">
            </div>
            `
            document.querySelector(".items-pro").innerHTML = listItems
        }
    })
}