// webpack.mix.js


import * as Mix from 'laravel-mix';

Mix.js('src/app.js', 'dist').setPublicPath('dist')
Mix.copyDirectory('vendor/tinymce/tinymce', 'public/js/tinymce');
