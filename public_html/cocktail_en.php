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
            <li>
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
                <a href="botle_en.php">
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
                        <li class="active"><a href="cocktail_en.php">Cocktail</a></li>
                        <li><a href="premium_cocktail_en.php">Premium Cocktail</a></li>
                    </div>
                </ul>
            </li>
        </ul>
    </nav>
    <main>
        <div class="category">
            <h2>Whiskey</h2>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Just like life, best enjoyed with a little chill and a lot of kick!" 🥃❄️</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"The perfect mix for when you're feeling bubbly, spicy, or just in need of a fizzy good time!"🥃✨</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"when life gives you lemons, you make a drink that says 'I'm the boss.'" 🍸👑</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Sour on the outside, smooth on the inside." 🍹😎</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Stay sharp, stay snappy, sip a Red Snapper." 🔥🍸</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Get your ginger on—Whiskey style!" 🍹🔥</p>
            </div>
        </div>

        <br><br>

        <div class="line"></div>

        <br><br>

        <div class="category">
            <h2>Gin</h2>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Gin + Tonic = Happy math." 🍸➕😊</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Feeling spicy? Gin Ginger’s got your back." 🍹🌶️</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Feeling a little sharp? Grab a Gimlet." 🍸🧊</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Bitter, sweet, and always neat. That's the Negroni way." 🍸🍊</p>
            </div>
        </div>

        <br><br>

        <div class="line"></div>

        <br><br>

        <div class="category">
            <h2>Vodka</h2>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Sip, sip, hooray! It’s a Vodka Tonic kind of day." 🥳🍸</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Don’t just fix things, screw things up—Screwdriver style!" 🍹🔨</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Sippin' on a Salty Dog and feeling paws-itively great!" 🐕🍹</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Where fruity meets fabulous!" 🍸🍍</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Take a shot of Kamikaze, and feel the impact!" 💣🍹</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"The only thing better than a mule is the drink that’s named after it." 🐴🍸</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"The only time it’s okay to have vegetables in your cocktail." 🍅🥒🍸</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Feeling salty? A Sea Breeze will help you chill." 🧂🍹</p>
            </div>
        </div>

        <br><br>

        <div class="line"></div>

        <br><br>

        <div class="category">
            <h2>Tequila</h2>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Rise and shine with a Tequila Sunrise—no coffee needed!" ☕🍹</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"When life gives you tequila, make a Tequila Sunset!" 🍹🌇</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"why have a regular drink when you can have a fiesta in a glass?" 🎉🍹</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Tequila deserves a good citrus partner." 🍋🍸</p>
            </div>
        </div>

        <br><br>

        <div class="line"></div>

        <br><br>

        <div class="category">
            <h2>Baileys ・ Kahlua</h2>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"When life’s too hot, cool it down with Baileys on the Rocks." 🍸❄️</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Sip Baileys Milk and feel like a grown-up with a sweet tooth." 🍫🥛</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Sip Kahlúa Milk and let the coffee buzz meet the creamy chill." 🍸💫</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Take a sip of Backstreet Romeo and feel the 90s love hit you." 🍸</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"When life gets too complicated, keep it simple with a White Russian." 🍸🍫</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Sip an Espresso Martini and let the caffeine kick in... with style!" 💃☕🍸</p>
            </div>
        </div>

        <br><br>

        <div class="line"></div>

        <br><br>

        <div class="category">
            <h2>Rum</h2>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"A Rum n' Coke a day keeps the dullness away." 🍹✨</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"The only thing better than a mojito is this! 🇨🇺.." 🍹😎</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"If you like drinking in the rain, with a splash of rum and a tropical gain, come sip with me, and
                    we’ll escape to paradise! 🍍🍹🌴"</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Sip a Dark n' Stormy and let the storm brew in your glass." ⛈️🥃</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"Catch the wave of wild flavors with a Surfer on Acid." 🌊🍸</p>
            </div>
        </div>

        <div class="item">
            <img src="icons/icons8-beer-32.png" alt="Beer" width="32" height="32">
            <h3>Beer</h3>
            <div class="description-box">
                <p>"When you want your drink to be as sweet as your mood." 🍍🍸</p>
            </div>
        </div>
    </main>
</body>

</html>