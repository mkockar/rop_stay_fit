function search() {
  let searchInput = document.querySelector(".search-bar").value.toUpperCase();
  let product = document.querySelectorAll(".item-container");
  let productName = document.getElementsByTagName("span");

  for (var i = 0; i <= productName.length; i++) {
    let a = product[i].getElementsByTagName("tr")[0];
    //const b = a.getElementsByClassName(".product-name")[0];
    //console.log(a);
    let value = a.innerHTML || a.innerText || a.textContent;

    if (value.toUpperCase().indexOf(searchInput) > -1) {
      product[i].parentElement.style.display = "inline";
    } else {
      product[i].parentElement.style.display = "none";
    }
  }
}
