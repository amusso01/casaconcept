import smoothscroll from "smoothscroll-polyfill";
import lozad from "lozad";
import hamburger from "./../part/hamburger";
import productLoop from "../part/productLoop";
import blockProductLoop from "../part/blockProductLoop";
import slider from "../part/slider";

export default {
	init() {
		// JavaScript to be fired on all pages

		// kick off the polyfill!
		smoothscroll.polyfill();

		// Hamburger event listener
		hamburger();

		// Lazy load image with lozad.js https://github.com/ApoorvSaxena/lozad.js
    const observer = lozad(); // lazy loads elements with default selector as '.lozad'
    observer.observe();

    const hasImageLoop = document.querySelector('.fdry-woo__img-wrapper');
    if (typeof(hasImageLoop) != 'undefined' && hasImageLoop != null){
      productLoop()
    }

    const hasBlockImageLoop = document.querySelector('.wc-block-grid__products');
    if (typeof(hasBlockImageLoop) != 'undefined' && hasBlockImageLoop != null){
      blockProductLoop()
    }

    const hasSlider = document.querySelector('.block-slider');
    if (typeof(hasSlider ) != 'undefined' && hasSlider  != null){
      slider()
    }

	},

	finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired
	},
};
