# Super Easy Responsive Grid System
A quick & super straightforward to use grid system for creating easy to maintain responsive websites with [Sass](http://sass-lang.com).

### Why?
This grid system is set up because I wanted complete freedom with every selector. Not a complicated grid system with fixed media queries but a system which is easy to adjust for everyone.

### Quick start
The easiest way to get stfarted

- Include the grid.scss file as a partial in your in your core sass file
```sass
@import "_grid";
```
- Set up the desired configuration in `_grid.scss`
```sass
$columns: 12; // number of columns
$max-width: 966px; // max width of grid
$column-margin: 30px; // margin between columns
```
- Ready!
You can use the grid width by simply including `columns (number of columns)` in your selector.
```sass
.foo {
	@include columns (12);
	@media (min-width: 500px) {
	    @include columns (9);
	}
}
```
```html
<div class="section">
	<div class="foo"></div>
</div>
```


### Licence
[MIT Licence](http://opensource.org/licenses/mit-license.php)