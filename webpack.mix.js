let mix = require('laravel-mix');

mix
.js  ('assets/src/app.js',   'assets/dist')
.sass('assets/src/app.sass', 'assets/dist');