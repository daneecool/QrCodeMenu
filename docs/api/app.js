const toggleButton = document.getElementById('toggle-btn');
const sidebar = document.getElementById('sidebar');

function toggleSidebar() {
  sidebar.classList.toggle('close');
  toggleButton.classList.toggle('rotate');

  closeAllSubMenus();
}

function toggleSubMenu(button) {
  if (!button.nextElementSibling.classList.contains('show')) {
    closeAllSubMenus();
  }

  button.nextElementSibling.classList.toggle('show');
  button.classList.toggle('rotate');

  if (sidebar.classList.contains('close')) {
    sidebar.classList.toggle('close');
    toggleButton.classList.toggle('rotate');
  }
}

function closeAllSubMenus() {
  Array.from(sidebar.getElementsByClassName('show')).forEach(ul => {
    ul.classList.remove('show');
    ul.previousElementSibling.classList.remove('rotate');
  });
}

// Future Reference //
//function updateContainerContent() {
  // const container = document.getElementById('dynamic-container');
  // if (window.innerWidth <= 800) {
  //   container.innerHTML = `
  //     <h2>Swipe to view the menu on the top</h2>
  //     <div id="qr-code-container" style="display: none;">
  //       <!-- <img src="path/qrcode.png" alt="QR Code" /> Replace with your QR code image -->
  //     </div>
  //     <p>Opens port
  //       <br>
  //       <br>
  //       Close port
  //     </p>`;
  // } else {
  //   container.innerHTML = `
  //     <h2>Test00</h2>
  //     <div id="qr-code-container" style="display: none;">
  //       <!-- <img src="path/qrcode.png" alt="QR Code" /> Replace with your QR code image -->
  //     </div>
  //     <p>Opens port
  //       <br>
  //       <br>
  //       Close port
  //     </p>
  //   `;
  // }
// }

document.addEventListener('DOMContentLoaded', function() {
  const sidebar = document.getElementById('sidebar');
  sidebar.classList.add('swipe-indicator');

  setTimeout(() => {
    sidebar.classList.remove('swipe-indicator');
  }, 5000); // Remove the swipe indicator after 5 seconds

  // Restore scroll position from localStorage
  const savedScrollPosition = localStorage.getItem('sidebarScrollPosition');
  if (savedScrollPosition) {
    sidebar.scrollLeft = savedScrollPosition;
  }

  // Save scroll position before navigating away
  window.addEventListener('beforeunload', function() {
    localStorage.setItem('sidebarScrollPosition', sidebar.scrollLeft);
  });

  // Save scroll position on click and handle navigation manually
  sidebar.addEventListener('click', function(event) {
    const target = event.target.closest('a, .dropdown-btn');
    if (target) {
      event.preventDefault(); // Prevent the default link behavior
      localStorage.setItem('sidebarScrollPosition', sidebar.scrollLeft);

      // Use AJAX to load the content dynamically
      fetch(target.href)
        .then(response => response.text())
        .then(html => {
          document.querySelector('main').innerHTML = new DOMParser().parseFromString(html, 'text/html').querySelector('main').innerHTML;
          history.pushState(null, '', target.href); // Update the URL without reloading the page

          // Update the active class
          document.querySelectorAll('#sidebar li').forEach(li => li.classList.remove('active'));
          target.closest('li').classList.add('active');
        })
        .catch(error => console.error('Error loading content:', error));
    }
  });

  // Close submenu when an item inside it is clicked
  Array.from(sidebar.getElementsByClassName('sub-menu')).forEach(subMenu => {
    subMenu.addEventListener('click', function(event) {
      if (event.target.closest('a')) {
        // Do not close the submenu
        //closeAllSubMenus();
        //event.stopPropagation();
      }
    });
  });

  // Close all submenus when clicking outside of them
  document.addEventListener('click', function(event) {
    if (!event.target.closest('.sub-menu') && !event.target.closest('.dropdown-btn')) {
      closeAllSubMenus();
    }
  });

  // Update content on page load
  updateContainerContent();

  // Update content on window resize
  window.addEventListener('resize', updateContainerContent);
});