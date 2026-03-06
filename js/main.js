const offcanvasEl = document.getElementById("offcanvasRight");
const toggleBtn = document.querySelector(".menu-toggle-btn");
const body = document.body;

// Prevent scroll inside offcanvas
function preventScroll(e) {
  e.preventDefault();
}

offcanvasEl.addEventListener("show.bs.offcanvas", () => {
  toggleBtn.classList.add("active");
  // Disable body scroll completely when offcanvas opens
  body.style.overflow = "hidden";

  // Disable scroll in offcanvas completely
  offcanvasEl.addEventListener("touchmove", preventScroll, false);
  offcanvasEl.addEventListener("wheel", preventScroll, false);
  offcanvasEl.addEventListener("mousewheel", preventScroll, false);
});

offcanvasEl.addEventListener("hidden.bs.offcanvas", () => {
  toggleBtn.classList.remove("active");
  // Re-enable body scroll when offcanvas closes
  body.style.overflow = "auto";

  // Re-enable scroll in offcanvas
  offcanvasEl.removeEventListener("touchmove", preventScroll, false);
  offcanvasEl.removeEventListener("wheel", preventScroll, false);
  offcanvasEl.removeEventListener("mousewheel", preventScroll, false);
});
// ===== HEADER HIDE/SHOW ON SCROLL =====
const header = document.querySelector(".header");
let lastScrollTop = 0;
let isHeaderVisible = true;

window.addEventListener("scroll", () => {
  let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

  // Add black background when scrolled down
  if (currentScroll > 50) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }

  // Show header when scrolling up
  if (currentScroll < lastScrollTop) {
    if (!isHeaderVisible) {
      header.classList.remove("header-hidden");
      header.classList.add("header-visible");
      isHeaderVisible = true;
    }
  }
  // Hide header when scrolling down (but not at top)
  else if (currentScroll > lastScrollTop && currentScroll > 50) {
    if (isHeaderVisible) {
      header.classList.remove("header-visible");
      header.classList.add("header-hidden");
      isHeaderVisible = false;
    }
  }
  // Always show header when at top
  else if (currentScroll <= 50) {
    header.classList.remove("header-hidden");
    header.classList.add("header-visible");
    isHeaderVisible = true;
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
});

//------------------------ slider js ------------------------//

const $heroSlider = $(".hero_slider");

if ($heroSlider.length) {
  $heroSlider.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    dots: false,
    fade: true,
    speed: 1000,
  });

  // CUSTOM ARROWS
  $(".hero-next").on("click", function () {
    $heroSlider.slick("slickNext");
  });

  $(".hero-prev").on("click", function () {
    $heroSlider.slick("slickPrev");
  });
}

const slider = document.querySelector(".featured-product-slider");

if (slider) {
  $(slider).slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    dots: true, // ✅ DOTS ENABLED
    responsive: [
      {
        breakpoint: 1200,
        settings: { slidesToShow: 4 },
      },
      {
        breakpoint: 992,
        settings: { slidesToShow: 3 },
      },
      {
        breakpoint: 768,
        settings: { slidesToShow: 2 },
      },
      {
        breakpoint: 480,
        settings: { slidesToShow: 1 },
      },
    ],
  });
}

$(document).ready(function () {
  $(".man_par_slider").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 5000,
    cssEase: "linear",
    infinite: true,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });
});

// ------------------------ end slider js ------------------------//

// --- Accordion images: show only the image related to the opened panel ---
const accordionEl = document.getElementById("accordionExample");
const exploreState = document.querySelector(".explore-state");
const previewImgs = document.querySelectorAll(
  ".images-only .accordion-preview-img",
);

if (accordionEl && exploreState && previewImgs.length) {
  function clearActive() {
    previewImgs.forEach((img) => img.classList.remove("active"));
  }

  function setActiveImage(panelId) {
    clearActive();
    const img = document.querySelector(
      `.images-only .accordion-preview-img[data-panel="${panelId}"]`,
    );
    if (img) img.classList.add("active");
  }

  // When a panel is fully shown, display its image and mark container as accordion-open
  accordionEl.addEventListener("shown.bs.collapse", function (e) {
    const id = e.target && e.target.id ? e.target.id : null;
    if (id) setActiveImage(id);
    exploreState.classList.add("accordion-open");
  });

  // When a panel is fully hidden, check if another panel is open; if so show its image
  // otherwise show all images again
  accordionEl.addEventListener("hidden.bs.collapse", function () {
    const open = accordionEl.querySelector(".accordion-collapse.show");
    if (open) {
      setActiveImage(open.id);
      exploreState.classList.add("accordion-open");
    } else {
      clearActive();
      exploreState.classList.remove("accordion-open");
    }
  });

  // Initialize on load: if a panel is open, show its image
  const initialOpen = accordionEl.querySelector(".accordion-collapse.show");
  if (initialOpen) {
    setActiveImage(initialOpen.id);
    exploreState.classList.add("accordion-open");
  } else {
    clearActive();
    exploreState.classList.remove("accordion-open");
  }
}

// Footer Wrapper Scroll with Cursor/Drag
const footerWrapper = document.querySelector(".common-footer-wrapper");
if (footerWrapper) {
  // Center scroll on page load
  setTimeout(() => {
    const scrollWidth = footerWrapper.scrollWidth;
    const clientWidth = footerWrapper.clientWidth;
    footerWrapper.scrollLeft = (scrollWidth - clientWidth) / 2;
  }, 100);

  let isDown = false;
  let startX;
  let scrollLeft;

  footerWrapper.addEventListener("mousedown", (e) => {
    isDown = true;
    footerWrapper.classList.add("active");
    startX = e.pageX - footerWrapper.offsetLeft;
    scrollLeft = footerWrapper.scrollLeft;
  });

  footerWrapper.addEventListener("mouseleave", () => {
    isDown = false;
    footerWrapper.classList.remove("active");
  });

  footerWrapper.addEventListener("mouseup", () => {
    isDown = false;
    footerWrapper.classList.remove("active");
  });

  footerWrapper.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - footerWrapper.offsetLeft;
    const walk = (x - startX) * 1; // scroll-fast
    footerWrapper.scrollLeft = scrollLeft - walk;
  });
}

// -------------------------------

document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter-number");
  let started = false;

  const startCounter = () => {
    counters.forEach((counter) => {
      const target = +counter.getAttribute("data-target");
      const suffix = counter.innerText.replace(/[0-9]/g, ""); // + or %
      let count = 0;

      const speed = target / 100; // animation speed

      const updateCount = () => {
        if (count < target) {
          count += speed;
          counter.innerText = Math.ceil(count) + suffix;
          requestAnimationFrame(updateCount);
        } else {
          counter.innerText = target + suffix;
        }
      };

      updateCount();
    });
  };

  const observer = new IntersectionObserver(
    (entries) => {
      if (entries[0].isIntersecting && !started) {
        started = true;
        startCounter();
      }
    },
    { threshold: 0.4 },
  );

  observer.observe(document.querySelector(".counter-section"));
});
