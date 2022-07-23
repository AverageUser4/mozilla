"use strict";

class HeaderNavDropdownMobile {
  
  activators = [];
  dropdowns = [];

  constructor() {
    for(let i = 1; i <= 4; i++) {
      this.activators.push(document.getElementById(`header-nav-activator-${i}`));
      this.dropdowns.push(document.getElementById(`header-nav-dropdown-${i}`));

      this.activators[i - 1].addEventListener('click', () => this.toggleDropdown(i - 1));
    }
  }

  toggleDropdown(index) {
    if(window.innerWidth > 760)
      return;

    this.activators[index].firstElementChild.classList.toggle('header-nav__list-item-name--active');

    if(getComputedStyle(this.dropdowns[index]).display === 'block')
      this.dropdowns[index].style.display = 'none';
    else
      this.dropdowns[index].style.display = 'block';
  }

}