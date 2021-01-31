// Nav slide function
const navSlide = () => {
  const btnup = document.querySelector(".btnup");
  const burger = document.querySelector(".navbar_burger");
  const nav_links = document.querySelector(".navbar_nav-links");
  const linksli = document.querySelectorAll(".navbar_nav-links li");
  burger.addEventListener("click", () => {
    // Toggle Nav
    nav_links.classList.toggle("navbar_nav-links-active");
    // Animate Links
    linksli.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${
          index / 7 + 0.4
        }s`;
      }
    });
    // Burger animation
    burger.classList.toggle("navbar_toggle-burger");

    // Hide the btnup
    btnup.classList.toggle("btnup_nav-active");
  });
};

// Scroll function
const scrollPage = () => {
  const btnup = document.querySelector(".btnup");
  const burger = document.querySelector(".navbar_burger");
  const nav = document.querySelector(".navbar");
  const nav_links = document.querySelector(".navbar_nav-links");
  const nav_logo = document.querySelector(".navbar_logo");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    if (
      document.body.scrollTop > 700 ||
      document.documentElement.scrollTop > 700
    ) {
      btnup.classList.add("btnup_scroll");
    } else if (
      document.body.scrollTop > 200 ||
      document.documentElement.scrollTop > 200
    ) {
      nav.classList.add("navbar_scroll");
      nav_logo.classList.add("navbar_logo_scroll");
      nav_links.classList.add("navbar_nav-links_scroll");
      burger.classList.add("navbar_burger_scroll");
      // nav_links.style.display = "flex";
      // layar_depan.style.opacity = "0";
      // layar_depan.style.height = "0vh";
      // document.getElementById("navbar").style.padding = "30px 10px";
      // document.getElementById("logo").style.fontSize = "25px";
    } else {
      nav.classList.remove("navbar_scroll");
      nav_logo.classList.remove("navbar_logo_scroll");
      nav_links.classList.remove("navbar_nav-links_scroll");
      burger.classList.remove("navbar_burger_scroll");
      // nav_links.style.display = "none";
      // layar_depan.style.opacity = "1";
      // layar_depan.style.height = "92vh";
      btnup.classList.remove("btnup_scroll");
    }
  }

  // When the user clicks on the button, scroll to the top of the document
};

//Button scroll to top
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

scrollPage();
navSlide();
