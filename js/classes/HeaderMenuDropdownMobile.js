"use strict";

class HeaderMenuDropdownMobile {

  constructor() {
    this.activator = document.getElementById('header__toggle-menu-button');
    this.dropdown = document.getElementById('header-nav');

    this.activator.addEventListener('click', () => this.toggleDropdown());
  }

  toggleDropdown() {
    if(getComputedStyle(this.dropdown).display === 'block') {
      this.dropdown.style.display = 'none';
      this.activator.firstElementChild.setAttribute('src', 'resources/general/menu_icon.svg');
    }
    else {
      this.dropdown.style.display = 'block';
      this.activator.firstElementChild.setAttribute('src', 'resources/general/menu_close_icon.svg');
    }
  }

}