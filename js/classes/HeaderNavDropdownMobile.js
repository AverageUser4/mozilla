"use strict";

class HeaderNavDropdownMobile {
  
  activators = [];
  dropdowns = [];
  dropdowns_amount = 4;
  open = 0;

  constructor() {
    this.inner_containers = document.getElementsByClassName('header-nav__dropdown-container');

    for(let i = 1; i <= this.dropdowns_amount; i++) {
      this.activators.push(document.getElementById(`header-nav-activator-${i}`));
      this.dropdowns.push(document.getElementById(`header-nav-dropdown-${i}`));

      this.activators[i - 1].addEventListener('click', () => this.toggleDropdown(i - 1));
      this.inner_containers[i - 1].addEventListener('click', (event) => event.stopPropagation());
    }

    window.addEventListener('resize', () => this.closeAll());
  }

  toggleDropdown(index) {
    if(window.innerWidth > 760)
      return;

    this.activators[index].firstElementChild.classList.toggle('header-nav__list-item-name--active');

    if(getComputedStyle(this.dropdowns[index]).display === 'block') {
      this.dropdowns[index].style.display = 'none';
      this.open--;
    }
    else {
      this.dropdowns[index].style.display = 'block';
      this.open++;
    }
  }

  closeAll() {
    if(this.open <= 0)
      return;

    for(let i = 0; i < this.dropdowns_amount; i++) {
      this.dropdowns[i].style.display = 'none';
      this.activators[i].firstElementChild.classList.remove('header-nav__list-item-name--active');
    }

    this.open = 0;
  }

}