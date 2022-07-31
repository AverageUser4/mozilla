"use strict";

class HeaderNavDropdownDesktop {
  
  activators = [];
  dropdowns = [];
  dropdowns_amount = 4;

  constructor() {
    for(let i = 1; i <= this.dropdowns_amount; i++) {
      this.activators.push(document.getElementById(`header-nav-activator-${i}`));
      this.dropdowns.push(document.getElementById(`header-nav-dropdown-${i}`));

      this.activators[i - 1].addEventListener('mouseenter', () => this.mouseEnter(i - 1));
      this.activators[i - 1].addEventListener('mouseleave', () => this.mouseLeave(i - 1));
    }
  }

  mouseEnter(index) {
    if(window.innerWidth <= 760)
      return;

    this.dropdowns[index].style.display = 'block';
    setTimeout(() => {
      this.dropdowns[index].classList.add('header-nav__dropdown-container--open');
    });
  }

  mouseLeave(index) {
    if(window.innerWidth <= 760)
      return;
      
    this.dropdowns[index].classList.remove('header-nav__dropdown-container--open');
    setTimeout(() => {
      this.dropdowns[index].style.display = 'none';
    }, 200);
    // the timeout has to be equal to transition duration
  }

}