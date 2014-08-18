FormsOnFire
===========

The main purpose of Forms on Fire is to create a base from which you can create your own styled form elements that are as consistant as possible across browsers.

With [http://squidgemonster.github.io/formsonfire/latest/index.html](the example) I've aimed at a consistant approach for standard text inputs - including the 'date' input type. In an ideal world all browsers should have a baked-in date-picker (which this example assumes) if not, then feel free to use our friend Modernizr to detect and swap out with your preferred Js solution. I'd recommend that iOS/Android browsers use their default versions though (from experence!).

The select input has potentially two states in the example, including an iOS-style switch toggle.

All inputs have been reviewed for accessible tabbing as well - the highlight is subtle, but there for you to style to your hearts content!

All styling has been done in SCSS, with a nonrmalise base.

I've tried to have very minimal Javascript reliance, but have used FastClick and a small Js fix for the styled pointer on the dropdown.

Hopefully the beginnings of something people can use as a starting point for their own form styling adventures - give me a shout if you want to fork/have optimisation ideas.