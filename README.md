FormsOnFire
===========

The main purpose of FormsOnFire is to create a base from which you can create your own fully styled form elements that are as consistant as possible across browsers - most notably, dropdowns, radio buttons and checkboxes.

[![FormsOnFire demo](https://github.com/squidgemonster/formsonfire/raw/master/preview.png)](http://jsfiddle.net/gh/get/mootools/1.2/squidgemonster/formsonfire/tree/master/)

Using CSS transitions and attribute selectors in the CSS, the styled replacement elements behave the same as their native counterparts.

Key Features
------------

- Tabbed highlighting / keyboard control (including radio, checkbox and switch)
- Disabled state (including radio, checkbox and switch)
- Checked state recognised
- Faded transitions for on/off states
- Potential to restyle inputs for touch
- Dropdown styling consistancy
- Works in all modern browsers (even in IE9+)

[Take a look at a demo](http://jsfiddle.net/gh/get/mootools/1.2/squidgemonster/formsonfire/tree/master/)

All styling has been done in SCSS, with a normalise base - will work on a more condensed / readable css companion to this as well.

Known Bugs / Issues
-------------------

- FastClick doesn't play nice with the checkbox / radio inputs
- Dropdown pointer style is lost but gracefully degrades on Firefox and older IE versions