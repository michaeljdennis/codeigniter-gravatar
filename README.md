CodeIgniter Gravatar Helper
===========================
A CodeIgniter helper for fetching gravatar image URLs from [gravatar.com](http://gravatar.com).

Usage
-------
	<?php echo gravatar('user@example.com', array('s' => 150, 'd' => 'mm')); ?>

Array Options
----------------
**Size** - s<br>
default : 80<br>
options : 1 - 512

**Default** - d<br>
default : mm<br>
options : 404, mm, identicon, monsterid, wavatar, retro

**Force Default** - f<br>
default : null<br>
options : y

**Rating** - r<br>
default : null<br>
options : g, pg, r, x