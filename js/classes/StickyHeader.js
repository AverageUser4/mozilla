'use strict';

class StickyHeader {

  header;
  lastScrollPosition = 0;
  lastTabPressTime = 0;
  hideTimeoutId;
  dropdownContainers;

  constructor() {
    this.header = document.getElementsByClassName('header')[0];

    this.dropdownContainers = document.getElementsByClassName('header-nav__dropdown-container');

    this.makeFocusingHeaderElementsShowHeader();
    
    window.addEventListener('scroll', () => this.onScroll());
    window.addEventListener('keydown', (event) => this.checkTabPress(event));
  }

  checkTabPress(event) {
    if(event.which === 9)
      this.lastTabPressTime = Date.now();
  }

  makeFocusingHeaderElementsShowHeader() {
    document.getElementsByClassName('mozilla-logo')[0].addEventListener(
      'focus', () => this.showHeader());
    document.getElementsByClassName('header__vpn-button-desktop')[0].addEventListener(
      'focus', () => this.showHeader());

    const list = document.getElementsByClassName('header-nav__list-item-button');

    for(let val of list)
      val.addEventListener('focus', () => this.showHeader());
  }

  showHeader() {
    this.header.classList.remove('header-out-of-screen');
  }

  hideHeader() {
    for(let val of this.dropdownContainers)
      if(getComputedStyle(val).display !== 'none')
        return;
        
    if(!matchMedia('(max-width: 760px)').matches)
      this.header.classList.add('header-out-of-screen');
  }

  onScroll() {
    // if we are (almost) on top of the page 
    // OR (user scrolled up AND the scrolling wasn't caused by 
    // focusing element with tab press) show the header
    if(
        window.scrollY <= 150 ||
        (this.lastScrollPosition > window.scrollY &&
        Date.now() - this.lastTabPressTime > 100)
      )
      this.showHeader();
    else
      this.hideHeader();

    this.lastScrollPosition = window.scrollY;
  }

}