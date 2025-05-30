<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="api/app.js" defer></script>
</head>

<body>
    <nav id="sidebar">
        <ul>
            <li>
                <span class="logo">Example</span>
                <button onclick=toggleSidebar() id="toggle-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#e8eaed">
                        <path
                            d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z" />
                    </svg>
                </button>
            </li>
            <li>
                <a href="index_en.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#e8eaed">
                        <path
                            d="M240-200h120v-200q0-17 11.5-28.5T400-440h160q17 0 28.5 11.5T600-400v200h120v-360L480-740 240-560v360Zm-80 0v-360q0-19 8.5-36t23.5-28l240-180q21-16 48-16t48 16l240 180q15 11 23.5 28t8.5 36v360q0 33-23.5 56.5T720-120H560q-17 0-28.5-11.5T520-160v-200h-80v200q0 17-11.5 28.5T400-120H240q-33 0-56.5-23.5T160-200Zm320-270Z" />
                    </svg>
                    <span>Welcome</span>
                </a>
            </li>
            <li>
                <a href="beer_en.php">
                    <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
                    <span>Beer</span>
                </a>
            </li>
            <li class="active">
                <a href="wine_en.php">
                    <img src="icons/icons8-wine-and-glass-32.png" alt="Beer" width="32" height="32">
                    <span>Wine</span>
                </a>
            </li>
            <li>
                <a href="shot_en.php">
                    <img src="icons/icons8-vodka-shot-32.png" alt="Toggle Menu" width="24" height="24">
                    <span>Shot</span>
                </a>
            </li>
            <li>
                <a href="sake_en.php">
                    <img src="icons/sake.png" alt="Toggle Menu" width="24" height="24">
                    <span>Japanese Sake</span>
                </a>
            </li>
            <li>
                <a href="non-alcohol_en.php">
                    <img src="icons/icons8-soda-32.png" alt="Toggle Menu" width="24" height="24">
                    <span>Non-Alcohol</span>
                </a>
            </li>
            <li>
                <a href="bottle_en.php">
                    <img src="icons/icons8-champagne-bottle-32.png" alt="Toggle Menu" width="24" height="24">
                    <span>Bottle</span>
                </a>
            </li>
            <li>
                <button onclick=toggleSubMenu(this) class="dropdown-btn">
                    <img src="icons/icons8-cocktail-32.png" alt="Toggle Menu" width="24" height="24">
                    <span>Cocktail</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#e8eaed">
                        <path
                            d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z" />
                    </svg>
                </button>
                <ul class="sub-menu">
                    <div>
                        <li><a href="cocktail_en.php">Cocktail</a></li>
                        <li><a href="premium_cocktail_en.php">Premium Cocktail</a></li>
                    </div>
                </ul>
            </li>
        </ul>
    </nav>
    <main>
        <div class="category">
            <h2>Glass</h2>
        </div>

        <div class="item">
            <img src="DrinksImage/Wine/red.jpg" alt="Red" width="120" height="200">
            <h3>Red Wine</h3>
            <div class="description-box">
                <p>"Classy in the glass, sassy after a few!" 🍷😏</p>
            </div>
        </div>

        <div class="item">
            <img src="DrinksImage/Wine/white.jpg" alt="White" width="120" height="150">
            <h3>White Wine</h3>
            <div class="description-box">
                <p>"Elegance in a glass, mischief in a sip!" 🍷😉</p>
            </div>
        </div>

        <br><br>

        <div class="line"></div>

        <br><br>

        <div class="category">
            <h2>Bottle</h2>
        </div>

        <div class="item">
            <img src="DrinksImage/Wine/red-bottle.jpg" alt="Red Bottle" width="150" height="200">
            <h3>Red Wine Bottle</h3>
            <div class="description-box">
                <p>"One bottle, endless wisdom… or so it seems!" 🍷😆</p>
            </div>
        </div>

        <div class="item">
            <img src="DrinksImage/Wine/white-bottle.jpg" alt="White Bottle" width="150" height="200">
            <h3>White Wine Bottle</h3>
            <div class="description-box">
                <p>"Class in a glass, chaos in a bottle!" 🍷😏</p>
            </div>
        </div>

        <div class="item">
            <img src="DrinksImage/Wine/sparkling-bottle.jpg" alt="Sparkling Bottle" width="150" height="200">
            <h3>Sparkling Wine Bottle</h3>
            <div class="description-box">
                <p>"Fizz, pop, and questionable decisions ahead!" 🍾🥂😆</p>
            </div>
        </div>
</body>

</html>