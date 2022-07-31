'use strict';

class FullFormActivator {

  /*
    - there are 2 visible form inputs at the beginning
    - activating either of them reveals the rest of the form
    - select elements are not getting opened when the label is clicked
      by default, may change that
    - other inputs are hidden by the object, so they are visible
      when JS is disabled
  */

  constructor() {
    this.hiddenBlock = document.getElementsByClassName('love-web__initially-hidden')[0];
    this.opener_1 = document.getElementById('love-web-opener-1');
    this.opener_2 = document.getElementById('love-web-opener-2');

    this.invoke = () => this.show();

    this.opener_1.addEventListener('click', this.invoke)
    this.opener_2.addEventListener('click', this.invoke);
    this.opener_1.addEventListener('focus', this.invoke);
    this.opener_2.addEventListener('focus', this.invoke);
  }

  show() {
    this.hiddenBlock.style.display = 'block';
    this.opener_1.removeEventListener('click', this.invoke);
    this.opener_2.removeEventListener('click', this.invoke);
    this.opener_1.removeEventListener('focus', this.invoke);
    this.opener_2.removeEventListener('focus', this.invoke);
  }

}