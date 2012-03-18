*********************************************************************************
* Dynamic display block module theme: onslide-40p-B                             *
* (c) Copyright Phelsa Information Technology 2009 - 2010. All rights reserved. *
* Version 1.0(31-OCT-2010)                                                      *
* License: GPL                                                                  *
*********************************************************************************

Information
-----------
* Horizontal layout.
* Configurable slide and slidetext effects.
* Slide text configurable at top, left, bottom or right side.
* Pager configurable on left or right side.
* Custom Pager contains images links to the slides.
* Easy to change slideshow sizes.

Theme directory structure
-------------------------
The onslide-40p-B theme contains the following directories and files:

onslide-40p-B.jpg
README.txt
custom/
--modules/
----ddblock/
------ddblock-cycle-block-content.tpl.php
------ddblock-cycle-block-content-onslide-40p-B.tpl.php
------ddblock-cycle-pager-content.tpl.php
------ddblock-cycle-pager-content-onslide-40p-B.tpl.php
------onslide-40p-B/
--------ddblock-cycle-onslide-40p-B.css
--------ddblock-cycle-onslide-40p-B-700.css
--------images/
----------background_container.png
----------readmorebutton.png
----------readmorebutton_ie.png
----------transparent_bg.png
----------transparent_bg_333.png
IE/
--fix-ie-instruction.txt

Installation
------------
1.) Copy the custom directory with all sub directories to the theme directory of the theme you use, (which is probably at sites/all/themes/[YOUR_THEME_NAME]/).
    
You can find other Installation information in the Advanced dynamic display block tutorial at:
http://ddblock.myalbums.biz/node/747.
    
Configuration
-------------
1.) Goto the dynamic display block configuration screen.
2.) Choose custom for the template.
3.) Type onslide-40p-B (p from portrait) as the custom template name.

You can find other configuration settings in the Advanced dynamic display block tutorial at:
http://ddblock.myalbums.biz/node/747.

Internet explorer 6 (IE6)
-------------------------
To fix IE6 transparency bugs follow the instructions in: fix-ie-instruction.txt, which you can find in the IE directory.

Configurable ddblock slideshow sizes
------------------------------------
To create your own custom slideshow sizes, copy the ddblock-cycle-onslide-40p-B-700.css CSS files for defining the slideshow sizes and rename it to: ddblock-cycle-onslide-40p-B-[***custom size***].css. In the CSS file you can find an explanation about the different sizes used and how to apply your customisations. 
In the ddblock-cycle-block-content-onslide-40p-B.tpl.php file change $slideshow_width=700; to $slideshow_width=[***custom size***];

Support
-------
Frequently asked questions about the Dynamic display block module and the themes can be found at:
http://ddblock.myalbums.biz/faq
http://themes.myalbums.biz/faq

Information about installation and configuration of the themes can be found in the Advanced dynamic display block tutorial at: http://ddblock.myalbums.biz/node/747.

You can find and report issues with the dynamic display block module on drupal.org at:
http://drupal.org/project/issues/ddblock.

We can not give free support for CSS customizations of free themes.