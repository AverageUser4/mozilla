'use strict';

class HeaderNavDropdown {
  
  activators = [];
  dropdowns = [];
  dropdowns_amount = 4;
  open = 0;
  mouseLeaveCloseTimeout = [];

  constructor() {
    const inner_containers = document.getElementsByClassName('header-nav__dropdown-container');

    for(let i = 1; i <= this.dropdowns_amount; i++) {
      this.activators.push(document.getElementById(`header-nav-activator-${i}`));
      this.dropdowns.push(document.getElementById(`header-nav-dropdown-${i}`));

      this.activators[i - 1].addEventListener('keydown', (event) => this.keyPressToggle(i - 1, event));

      this.activators[i - 1].addEventListener('mouseenter', () => this.mouseEnter(i - 1));
      this.activators[i - 1].addEventListener('mouseleave', () => this.mouseLeave(i - 1));

      this.activators[i - 1].addEventListener('click', () => this.toggleDropdown(i - 1));
      inner_containers[i - 1].addEventListener('click', (event) => event.stopPropagation());

      this.dropdowns[i - 1].addEventListener('mouseenter', () => clearTimeout(this.mouseLeaveCloseTimeout[i - 1]));
      this.dropdowns[i - 1].addEventListener('mouseleave', () => this.mouseLeave(i - 1));
    }

    window.addEventListener('keydown', (event) => {
      if(event.key === 'Escape')
        this.closeAll();
    });
    window.addEventListener('resize', () => {
      // return if there are no dropdowns open
      if(this.open <= 0)
        return;

      this.closeAll()
    });
  }


  // DESKTOP

  keyPressToggle(index, event) {
    if(event.which !== 13 && event.which !== 32)
      return;

    if(getComputedStyle(this.dropdowns[index]).display === 'block')
      this.mouseLeave(index);
    else
      this.mouseEnter(index);
  }

  attemptToClose(index) {
    // wait some time before attempting to close dropdown,
    // save timeout id, so you can clear it if needed
    this.mouseLeaveCloseTimeout[index] = setTimeout(() => {
      // remove class, and set display to none after delay, so transition plays
      this.dropdowns[index].classList.remove('header-nav__dropdown-container--open');
      setTimeout(() => {
        this.dropdowns[index].style.display = 'none';
      }, 200); // the timeout has to be equal to transition duration
    }, 500);
  }

  mouseEnter(index) {
    // return if we are in mobile view
    if(window.innerWidth <= 760)
      return;

    this.closeAll(index);

    clearTimeout(this.mouseLeaveCloseTimeout[index]);

    // show dropdown, add open class with delay, so transition plays
    this.dropdowns[index].style.display = 'block';
    setTimeout(() => {
      this.dropdowns[index].classList.add('header-nav__dropdown-container--open');
    });
  }

  mouseLeave(index) {
    // return if we are in mobile view
    if(window.innerWidth <= 760)
      return;
      
    this.attemptToClose(index);
  }
    

  // MOBILE

  toggleDropdown(index) {
    // return if we are in desktop view and user is able to hover over elements
    if(
        window.innerWidth > 760 &&
        matchMedia('(any-hover: hover)').matches
      )
      return;

    // open if closed, close if opened and keep track of amount of open dropdowns
    if(getComputedStyle(this.dropdowns[index]).display === 'block') {
      this.activators[index].classList.remove('header-nav__list-item-button--active');
      this.dropdowns[index].classList.remove('header-nav__dropdown-container--open');
      this.dropdowns[index].style.display = 'none';
      this.open--;
    }
    else {
      this.activators[index].classList.add('header-nav__list-item-button--active');
      this.dropdowns[index].classList.add('header-nav__dropdown-container--open');
      this.dropdowns[index].style.display = 'block';
      this.open++;
    }
  }

  closeAll(except) {
    // instant change without timeout, we don't care about transition as this method only
    // gets invoked on resize
    for(let i = 0; i < this.dropdowns_amount; i++) {
      if(i === except)
        continue;
      this.dropdowns[i].style.display = 'none';
      this.activators[i].classList.remove('header-nav__list-item-name--active');
      this.dropdowns[i].classList.remove('header-nav__dropdown-container--open');
    }

    this.open = 0;
  }

}