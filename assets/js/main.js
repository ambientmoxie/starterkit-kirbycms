import "../scss/main.scss";
import LazyLoad from "vanilla-lazyload";

// Lazy loading
let lazyLoadInstance;

document.addEventListener("DOMContentLoaded", function () {
  lazyLoadInstance = new LazyLoad({
    elements_selector: "[data-lazyload]",
  });
});
