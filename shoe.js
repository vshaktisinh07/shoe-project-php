document.addEventListener("DOMContentLoaded", function() {
  const bestSellerContainer = document.getElementById("best-seller-cards");
  console.log("JS loaded, bestSellerContainer:", bestSellerContainer);
  fetch("https://dummyjson.com/products?limit=8")
    .then(res => res.json())
    .then(data => {
      console.log("API response:", data);
      bestSellerContainer.innerHTML = "";
      let cardsHtml = "";
      for (let i = 0; i < data.products.length; i += 4) {
        cardsHtml += '<div class="cards1">';
        for (let j = i; j < i + 4 && j < data.products.length; j++) {
          const product = data.products[j];
          const cardNum = (j % 4) + 1;
          cardsHtml += `
            <div class="Best-seller-card${cardNum}">
              <div class="Best-seller-card${cardNum}-img">
                <img src="${product.thumbnail}" alt="${product.title}">
              </div>
              <div class="Best-seller-card${cardNum}-text">
                <h3>${product.title}</h3>
                <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (${product.rating})</p>
              </div>
              <div class="card${cardNum}-rate">
                <h4>$ ${product.price} USD</h4>
                <span>$ ${(product.price*1.05).toFixed(2)} USD</span>
              </div>
            </div>
          `;
        }
        cardsHtml += '</div>';
      }
      bestSellerContainer.innerHTML = cardsHtml;
      console.log("Cards rendered");
    })
    .catch(err => {
      console.error("API fetch error:", err);
    });
});

let scrollcontainer = document.querySelector(".gallary");
let backbtn = document.getElementById("left");
let forwardbtn = document.getElementById("right");

scrollcontainer.addEventListener("wheel", (evt) => {
  evt.preventDefault();
  scrollcontainer.scrollLeft += evt.deltaX;
  scrollcontainer.style.scrollBehavior = "auto";

});

forwardbtn.addEventListener("click", ()=>{
  scrollcontainer.style.scrollBehavior = "smooth";
  scrollcontainer.scrollLeft += 900;
})

backbtn.addEventListener("click", ()=>{
  scrollcontainer.style.scrollBehavior = "smooth";
  scrollcontainer.scrollLeft -= 900;
})



