FormsOnFire
===========

The main purpose of Forms on Fire is to create a base from which you can create your own styled form elements that are as consistant as possible across browsers - most notably, dropdowns, radio buttons and checkboxes.

![Forms on Fire demo](https://github.com/squidgemonster/formsonfire/raw/master/preview.png)

Take a look at a [demo](http://jsfiddle.net/gh/get/mootools/1.2/squidgemonster/formsonfire/tree/master/).

I've aimed at a consistant approach for standard text inputs - including the 'date' input type.

In an ideal world all browsers should have a baked-in date-picker (which this example assumes) if not, then feel free to use our friend Modernizr to detect and swap out with your preferred Js solution. [Rome](https://github.com/bevacqua/rome) is my new personal favourite.

The select input has potentially two states in the example, including an iOS-style switch toggle.

All inputs have been reviewed for accessible tabbing as well - the highlight is subtle, but there for you to style to your hearts content!

All styling has been done in SCSS, with a normalise base.

I've tried to have very minimal Javascript reliance, FastClick could be used, but has a strange effect on the styled inputs sadly, there is a small Js fix for the styled pointer on the dropdown as well.

Hopefully the beginnings of something people can use as a starting point for their own form styling adventures - give me a shout if you want to fork/have optimisation ideas.