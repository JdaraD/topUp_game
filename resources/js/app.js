import './bootstrap';
// index.js
import 'preline'

import Swiper from 'swiper';
import { Autoplay, Navigation, Pagination, Scrollbar } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

const swiper = new Swiper('.swiper', {
    modules: [Autoplay, Navigation, Pagination, Scrollbar],

  autoplay: {
    delay: 5000,
  },
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
//   pagination: {
//     el: '.swiper-pagination',
//   },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
//   scrollbar: {
//     el: '.swiper-scrollbar',
//   },
});