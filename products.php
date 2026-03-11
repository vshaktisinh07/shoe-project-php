<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <link rel="stylesheet" href="shoe.css">
    <link rel="icon" type="image/x-icon" href="logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="shoe.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Zalando+Sans+Expanded:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">


    <style>
        body {
            font-family: Arial;
            background: #f4f6fb;
            margin: 0;
            /* padding: 40px; */
        }

        .filter-bar {
            display: flex;
            padding: 20px;
            margin-inline: 40px;
            justify-content: space-between;
            align-items: center;
            gap: 50px;
            background: white;
            padding: 20px 30px;
            padding-bottom: 50px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            flex-wrap: wrap;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            font-size: 14px;
        }

        .filter-group label {
            font-weight: 600;
            margin-bottom: 6px;
        }

        select {
            padding: 8px 10px;
            border-radius: 6px;
            border: 1px solid #ddd;
        }

        .checkbox-group {
            display: flex;
            gap: 10px;
        }

        .checkbox-group label {
            font-weight: 400;
        }

        .size-group {
            display: flex;
            gap: 8px;
        }

        .size-group button {
            border: 1px solid #ddd;
            background: white;
            padding: 6px 10px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        .size-group button:hover {
            background: #906344;
            color: white;
            border-color: #906344;
        }

        input[type="range"] {
            width: 150px;
        }

        .clear-btn {
            background: #906344;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .clear-btn:hover {
            background: #70492f;
        }
    </style>


</head>

<body>

    <?php include "navbar.php"; ?>

    <div class="Best-seller">
        <div class="Best-seller-text">
            <span style="font-size: 100px; padding-bottom: 20px;">Explore Our Shop</span>
        </div>

        <div class="filter-bar">

            <div class="filter-group">
                <label>Category</label>
                <select id="categoryFilter">
                    <option value="all">All</option>
                    <option value="running">Running</option>
                    <option value="sports">Sports</option>
                    <option value="casual">Casual</option>
                </select>
            </div>

            <div class="filter-group">
                <label>Brand</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" value="nike" class="brandFilter"> Nike</label>
                    <label><input type="checkbox" value="adidas" class="brandFilter"> Adidas</label>
                    <label><input type="checkbox" value="puma" class="brandFilter"> Puma</label>
                </div>
            </div>

            <div class="filter-group">
                <label>Size</label>
                <div class="size-group">
                    <button class="sizeFilter" data-size="7">7</button>
                    <button class="sizeFilter" data-size="8">8</button>
                    <button class="sizeFilter" data-size="9">9</button>
                    <button class="sizeFilter" data-size="10">10</button>
                </div>
            </div>

            <div class="filter-group">
                <label>Price</label>
                <input type="range" id="priceFilter" min="0" max="600" value="600">
                <span id="priceValue">$600</span>
            </div>

            <div class="filter-group">
                <label>Sort</label>
                <select id="sortFilter">
                    <option value="new">Newest</option>
                    <option value="low">Price Low → High</option>
                    <option value="high">Price High → Low</option>
                </select>
            </div>

            <button class="clear-btn" id="clearFilter">Clear</button>

        </div>


        <div class="cards1" style="padding-top: 50px;">
            <div class="Best-seller-card1">
                <div class="Best-seller-card1-img">
                    <img src="ns1.png" alt="Eclipse Sneakers">
                </div>
                <div class="Best-seller-card1-text">
                    <h3>Orinzo Running Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.8)</p>
                </div>
                <div class="card1-rate">
                    <h4>$ 400.00 USD</h4>
                    <span>$ 420.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card2">
                <div class="Best-seller-card2-img">
                    <img src="ns2.png" alt="Kixen Loafers">
                </div>
                <div class="Best-seller-card2-text">
                    <h3>Kixen Loafers</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.5)</p>
                </div>
                <div class="card2-rate">
                    <h4>$ 430.00 USD</h4>
                    <span>$ 490.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card3">
                <div class="Best-seller-card3-img">
                    <img src="ns3.png" alt="Cavora High Neck">
                </div>
                <div class="Best-seller-card3-text">
                    <h3>Cavora High Neck</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.5)</p>
                </div>
                <div class="card3-rate">
                    <h4>$ 320.00 USD</h4>
                    <span>$ 340.00 USD</span>
                </div>
            </div>
            <div class="Best-seller-card4">
                <div class="Best-seller-card4-img">
                    <img src="ns4.png" alt="Formal Rovik Shoe">
                </div>
                <div class="Best-seller-card4-text">
                    <h3>Formal Rovik Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.3)</p>
                </div>
                <div class="card4-rate">
                    <h4>$ 530.00 USD</h4>
                    <span>$ 550.00 USD</span>
                </div>
            </div>
        </div>
        <div class="cards1">
            <div class="Best-seller-card1">
                <div class="Best-seller-card1-img">
                    <img src="ns5.png" alt="Zunk Sports Shoe">
                </div>
                <div class="Best-seller-card1-text">
                    <h3>Zunk Sports Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.1)</p>
                </div>
                <div class="card1-rate">
                    <h4>$ 320.00 USD</h4>
                    <span>$ 340.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card2">
                <div class="Best-seller-card2-img">
                    <img src="ns6.png" alt="Strideon Boot">
                </div>
                <div class="Best-seller-card2-text">
                    <h3>Strideon Boot</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.2)</p>
                </div>
                <div class="card2-rate">
                    <h4>$ 400.00 USD</h4>
                    <span>$ 450.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card3">
                <div class="Best-seller-card3-img">
                    <img src="ns7.png" alt="Thrivo Oxford Shoe">
                </div>
                <div class="Best-seller-card3-text">
                    <h3>Thrivo Oxford Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.3)</p>
                </div>
                <div class="card3-rate">
                    <h4>$ 400.00 USD</h4>
                    <span>$ 450.00 USD</span>
                </div>
            </div>
            <div class="Best-seller-card4">
                <div class="Best-seller-card4-img">
                    <img src="ns8.png" alt="Stride Sneakers">
                </div>
                <div class="Best-seller-card4-text">
                    <h3>Stride Sneakers</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.4)</p>
                </div>
                <div class="card4-rate">
                    <h4>$ 435.00 USD</h4>
                    <span>$ 450.00 USD</span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="Best-seller">



        <div class="cards1">
            <div class="Best-seller-card1">
                <div class="Best-seller-card1-img">
                    <img src="ns1.png" alt="Eclipse Sneakers">
                </div>
                <div class="Best-seller-card1-text">
                    <h3>Orinzo Running Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.8)</p>
                </div>
                <div class="card1-rate">
                    <h4>$ 400.00 USD</h4>
                    <span>$ 420.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card2">
                <div class="Best-seller-card2-img">
                    <img src="ns2.png" alt="Kixen Loafers">
                </div>
                <div class="Best-seller-card2-text">
                    <h3>Kixen Loafers</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.5)</p>
                </div>
                <div class="card2-rate">
                    <h4>$ 430.00 USD</h4>
                    <span>$ 490.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card3">
                <div class="Best-seller-card3-img">
                    <img src="ns3.png" alt="Cavora High Neck">
                </div>
                <div class="Best-seller-card3-text">
                    <h3>Cavora High Neck</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.5)</p>
                </div>
                <div class="card3-rate">
                    <h4>$ 320.00 USD</h4>
                    <span>$ 340.00 USD</span>
                </div>
            </div>
            <div class="Best-seller-card4">
                <div class="Best-seller-card4-img">
                    <img src="ns4.png" alt="Formal Rovik Shoe">
                </div>
                <div class="Best-seller-card4-text">
                    <h3>Formal Rovik Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.3)</p>
                </div>
                <div class="card4-rate">
                    <h4>$ 530.00 USD</h4>
                    <span>$ 550.00 USD</span>
                </div>
            </div>
        </div>
        <div class="cards1">
            <div class="Best-seller-card1">
                <div class="Best-seller-card1-img">
                    <img src="ns5.png" alt="Zunk Sports Shoe">
                </div>
                <div class="Best-seller-card1-text">
                    <h3>Zunk Sports Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.1)</p>
                </div>
                <div class="card1-rate">
                    <h4>$ 320.00 USD</h4>
                    <span>$ 340.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card2">
                <div class="Best-seller-card2-img">
                    <img src="ns6.png" alt="Strideon Boot">
                </div>
                <div class="Best-seller-card2-text">
                    <h3>Strideon Boot</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.2)</p>
                </div>
                <div class="card2-rate">
                    <h4>$ 400.00 USD</h4>
                    <span>$ 450.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card3">
                <div class="Best-seller-card3-img">
                    <img src="ns7.png" alt="Thrivo Oxford Shoe">
                </div>
                <div class="Best-seller-card3-text">
                    <h3>Thrivo Oxford Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.3)</p>
                </div>
                <div class="card3-rate">
                    <h4>$ 400.00 USD</h4>
                    <span>$ 450.00 USD</span>
                </div>
            </div>
            <div class="Best-seller-card4">
                <div class="Best-seller-card4-img">
                    <img src="ns8.png" alt="Stride Sneakers">
                </div>
                <div class="Best-seller-card4-text">
                    <h3>Stride Sneakers</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.4)</p>
                </div>
                <div class="card4-rate">
                    <h4>$ 435.00 USD</h4>
                    <span>$ 450.00 USD</span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="Best-seller">



        <div class="cards1">
            <div class="Best-seller-card1">
                <div class="Best-seller-card1-img">
                    <img src="ns1.png" alt="Eclipse Sneakers">
                </div>
                <div class="Best-seller-card1-text">
                    <h3>Orinzo Running Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.8)</p>
                </div>
                <div class="card1-rate">
                    <h4>$ 400.00 USD</h4>
                    <span>$ 420.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card2">
                <div class="Best-seller-card2-img">
                    <img src="ns2.png" alt="Kixen Loafers">
                </div>
                <div class="Best-seller-card2-text">
                    <h3>Kixen Loafers</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.5)</p>
                </div>
                <div class="card2-rate">
                    <h4>$ 430.00 USD</h4>
                    <span>$ 490.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card3">
                <div class="Best-seller-card3-img">
                    <img src="ns3.png" alt="Cavora High Neck">
                </div>
                <div class="Best-seller-card3-text">
                    <h3>Cavora High Neck</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.5)</p>
                </div>
                <div class="card3-rate">
                    <h4>$ 320.00 USD</h4>
                    <span>$ 340.00 USD</span>
                </div>
            </div>
            <div class="Best-seller-card4">
                <div class="Best-seller-card4-img">
                    <img src="ns4.png" alt="Formal Rovik Shoe">
                </div>
                <div class="Best-seller-card4-text">
                    <h3>Formal Rovik Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.3)</p>
                </div>
                <div class="card4-rate">
                    <h4>$ 530.00 USD</h4>
                    <span>$ 550.00 USD</span>
                </div>
            </div>
        </div>
        <div class="cards1">
            <div class="Best-seller-card1">
                <div class="Best-seller-card1-img">
                    <img src="ns5.png" alt="Zunk Sports Shoe">
                </div>
                <div class="Best-seller-card1-text">
                    <h3>Zunk Sports Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.1)</p>
                </div>
                <div class="card1-rate">
                    <h4>$ 320.00 USD</h4>
                    <span>$ 340.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card2">
                <div class="Best-seller-card2-img">
                    <img src="ns6.png" alt="Strideon Boot">
                </div>
                <div class="Best-seller-card2-text">
                    <h3>Strideon Boot</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.2)</p>
                </div>
                <div class="card2-rate">
                    <h4>$ 400.00 USD</h4>
                    <span>$ 450.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card3">
                <div class="Best-seller-card3-img">
                    <img src="ns7.png" alt="Thrivo Oxford Shoe">
                </div>
                <div class="Best-seller-card3-text">
                    <h3>Thrivo Oxford Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.3)</p>
                </div>
                <div class="card3-rate">
                    <h4>$ 400.00 USD</h4>
                    <span>$ 450.00 USD</span>
                </div>
            </div>
            <div class="Best-seller-card4">
                <div class="Best-seller-card4-img">
                    <img src="ns8.png" alt="Stride Sneakers">
                </div>
                <div class="Best-seller-card4-text">
                    <h3>Stride Sneakers</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.4)</p>
                </div>
                <div class="card4-rate">
                    <h4>$ 435.00 USD</h4>
                    <span>$ 450.00 USD</span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="Best-seller">



        <div class="cards1">
            <div class="Best-seller-card1">
                <div class="Best-seller-card1-img">
                    <img src="ns1.png" alt="Eclipse Sneakers">
                </div>
                <div class="Best-seller-card1-text">
                    <h3>Orinzo Running Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.8)</p>
                </div>
                <div class="card1-rate">
                    <h4>$ 400.00 USD</h4>
                    <span>$ 420.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card2">
                <div class="Best-seller-card2-img">
                    <img src="ns2.png" alt="Kixen Loafers">
                </div>
                <div class="Best-seller-card2-text">
                    <h3>Kixen Loafers</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.5)</p>
                </div>
                <div class="card2-rate">
                    <h4>$ 430.00 USD</h4>
                    <span>$ 490.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card3">
                <div class="Best-seller-card3-img">
                    <img src="ns3.png" alt="Cavora High Neck">
                </div>
                <div class="Best-seller-card3-text">
                    <h3>Cavora High Neck</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.5)</p>
                </div>
                <div class="card3-rate">
                    <h4>$ 320.00 USD</h4>
                    <span>$ 340.00 USD</span>
                </div>
            </div>
            <div class="Best-seller-card4">
                <div class="Best-seller-card4-img">
                    <img src="ns4.png" alt="Formal Rovik Shoe">
                </div>
                <div class="Best-seller-card4-text">
                    <h3>Formal Rovik Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.3)</p>
                </div>
                <div class="card4-rate">
                    <h4>$ 530.00 USD</h4>
                    <span>$ 550.00 USD</span>
                </div>
            </div>
        </div>
        <div class="cards1">
            <div class="Best-seller-card1">
                <div class="Best-seller-card1-img">
                    <img src="ns5.png" alt="Zunk Sports Shoe">
                </div>
                <div class="Best-seller-card1-text">
                    <h3>Zunk Sports Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.1)</p>
                </div>
                <div class="card1-rate">
                    <h4>$ 320.00 USD</h4>
                    <span>$ 340.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card2">
                <div class="Best-seller-card2-img">
                    <img src="ns6.png" alt="Strideon Boot">
                </div>
                <div class="Best-seller-card2-text">
                    <h3>Strideon Boot</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.2)</p>
                </div>
                <div class="card2-rate">
                    <h4>$ 400.00 USD</h4>
                    <span>$ 450.00 USD</span>
                </div>

            </div>
            <div class="Best-seller-card3">
                <div class="Best-seller-card3-img">
                    <img src="ns7.png" alt="Thrivo Oxford Shoe">
                </div>
                <div class="Best-seller-card3-text">
                    <h3>Thrivo Oxford Shoe</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.3)</p>
                </div>
                <div class="card3-rate">
                    <h4>$ 400.00 USD</h4>
                    <span>$ 450.00 USD</span>
                </div>
            </div>
            <div class="Best-seller-card4">
                <div class="Best-seller-card4-img">
                    <img src="ns8.png" alt="Stride Sneakers">
                </div>
                <div class="Best-seller-card4-text">
                    <h3>Stride Sneakers</h3>
                    <p><i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i> (4.4)</p>
                </div>
                <div class="card4-rate">
                    <h4>$ 435.00 USD</h4>
                    <span>$ 450.00 USD</span>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php include "footer.php"; ?>


    <script>
        const products = document.querySelectorAll(".product");

        const categoryFilter = document.getElementById("categoryFilter");
        const brandFilter = document.querySelectorAll(".brandFilter");
        const priceFilter = document.getElementById("priceFilter");
        const priceValue = document.getElementById("priceValue");
        const sortFilter = document.getElementById("sortFilter");
        const clearFilter = document.getElementById("clearFilter");

        let selectedSize = null;

        priceFilter.addEventListener("input", () => {
            priceValue.innerText = "$" + priceFilter.value;
            filterProducts();
        });

        categoryFilter.addEventListener("change", filterProducts);
        sortFilter.addEventListener("change", filterProducts);

        brandFilter.forEach(cb => {
            cb.addEventListener("change", filterProducts);
        });

        document.querySelectorAll(".sizeFilter").forEach(btn => {
            btn.addEventListener("click", () => {
                selectedSize = btn.dataset.size;
                filterProducts();
            });
        });

        function filterProducts() {

            const category = categoryFilter.value;
            const maxPrice = priceFilter.value;

            let brands = [];
            brandFilter.forEach(cb => {
                if (cb.checked) brands.push(cb.value);
            });

            products.forEach(product => {

                const pCategory = product.dataset.category;
                const pBrand = product.dataset.brand;
                const pSize = product.dataset.size;
                const pPrice = product.dataset.price;

                let show = true;

                if (category !== "all" && category !== pCategory) show = false;

                if (brands.length && !brands.includes(pBrand)) show = false;

                if (selectedSize && selectedSize !== pSize) show = false;

                if (pPrice > maxPrice) show = false;

                product.style.display = show ? "block" : "none";

            });

        }

        clearFilter.addEventListener("click", () => {

            categoryFilter.value = "all";

            brandFilter.forEach(cb => cb.checked = false);

            selectedSize = null;

            priceFilter.value = 600;
            priceValue.innerText = "$600";

            products.forEach(p => p.style.display = "block");

        });
    </script>

</body>

</html>