"use strict";

class HeaderNavDropdownDesktop {
  
  activators = [];
  dropdowns = [];

  constructor() {
    for(let i = 1; i <= 4; i++) {
      this.activators.push(document.getElementById(`header-nav-activator-${i}`));
      this.dropdowns.push(document.getElementById(`header-nav-dropdown-${i}`));

      this.activators[i - 1].addEventListener('mouseover', () => this.mouseOver(i - 1));//this.toggleDropdown(i - 1));
      this.activators[i - 1].addEventListener('mouseleave', () => this.mouseLeave(i - 1));//this.toggleDropdown(i - 1));
    }
  }

  mouseOver(index) {
    if(window.innerWidth <= 760)
      return;

    this.dropdowns[index].style.display = 'block';
  }

  mouseLeave(index) {
    if(window.innerWidth <= 760)
      return;
      
    this.dropdowns[index].style.display = 'none';
  }

}