<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="app.js" defer></script>
</head>
<body>
  <nav id="sidebar">
    <ul>
      <li>
        <span class="logo">IWI BAR</span>
        <button onclick=toggleSidebar() id="toggle-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z"/></svg>
        </button>
      </li>
      <li class="active">
        <a href="index.php">
          <img src="icons/icons8-beer-32.png" alt="Toggle Menu" width="24" height="24">  
          <span>Beer</span>
        </a>
      </li>
      <li>
        <a href="dashboard.html">
        <img src="icons/icons8-wine-32.png" alt="Toggle Menu" width="24" height="24">  
          <span>Wine</span>
        </a>
      </li>
      <li>
        <a href="dashboard.html">
        <img src="icons/icons8-vodka-shot-32.png" alt="Toggle Menu" width="24" height="24">  
          <span>Shot</span>
        </a>
      </li>
      <li>
        <a href="dashboard.html">
        <img src="icons/sake.png" alt="Toggle Menu" width="24" height="24">  
          <span>Japanese Sake</span>
        </a>
      </li>
      <li>
        <a href="dashboard.html">
        <img src="icons/icons8-soda-32.png" alt="Toggle Menu" width="24" height="24">  
          <span>Non-Alcohol</span>
        </a>
      </li>
      <li>
        <a href="dashboard.html">
        <img src="icons/icons8-champagne-bottle-32.png" alt="Toggle Menu" width="24" height="24">  
          <span>Bottle</span>
        </a>
      </li>
      <li>
        <button onclick=toggleSubMenu(this) class="dropdown-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h207q16 0 30.5 6t25.5 17l57 57h320q33 0 56.5 23.5T880-640v400q0 33-23.5 56.5T800-160H160Zm0-80h640v-400H447l-80-80H160v480Zm0 0v-480 480Zm400-160v40q0 17 11.5 28.5T600-320q17 0 28.5-11.5T640-360v-40h40q17 0 28.5-11.5T720-440q0-17-11.5-28.5T680-480h-40v-40q0-17-11.5-28.5T600-560q-17 0-28.5 11.5T560-520v40h-40q-17 0-28.5 11.5T480-440q0 17 11.5 28.5T520-400h40Z"/></svg>
          <span>Create</span>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
        </button>
        <ul class="sub-menu">
          <div>
            <li><a href="#">Folder</a></li>
            <li><a href="#">Document</a></li>
            <li><a href="#">Project</a></li>
          </div>
        </ul>
      </li>
      <li>
        <button onclick=toggleSubMenu(this) class="dropdown-btn">
          <img src="icons/icons8-cocktail-32.png" alt="Toggle Menu" width="24" height="24">
          <span>Cocktail</span>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
        </button>
        <ul class="sub-menu">
          <div>
            <li><a href="#">Cocktail</a></li>
            <li><a href="#">Premium Cocktail</a></li>
          </div>
        </ul>
      </li>
    </ul>
  </nav>
  <main>
    <div class="container">
      <h2>IWI BAR</h2>
      <p>Opens 7:00 PM every day except Sunday and Monday
        <br>
        <br>
        Close latest till 4:00 AM 
      </p>
    </div>
    <div class="container">
      <h2> Wifi Available in the bar </h2>
      <p> password : Happy_New_Year 
        <button onclick="copyPassword()" 
                class="copy-button">Copy Password
        </button>
      </p>
    </div>
    <div class="container">
      <h2>Example Heading 01</h2>
      <p> example of writting </p>
    </div>
  </main>
</body>
</html>