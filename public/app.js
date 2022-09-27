import menu, { resize, navigation } from "./js/sidebar.js";
import dashboard from "./js/dashboard.js";

menu(
  document.querySelector('.header__menu'), 
  document.querySelector('.sidebar'), 
  document.querySelector('.humanresource')
);

navigation(document.querySelectorAll('.sidebar__link'));
navigation(document.querySelectorAll('.sidebar__link-icon'));


resize(
  window, 
  document.querySelectorAll('.sidebar__link'),
  document.querySelector('.sidebar__company_name')
);

dashboard(window);
