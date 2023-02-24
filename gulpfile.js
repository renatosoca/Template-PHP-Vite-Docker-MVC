const { src, dest, watch, parallel } = require('gulp');

//CSS
const sass = require('gulp-sass')(require('sass'));
//const plumber = require('gulp-plumber');
const autoprefixer = require('autoprefixer');
const postcss    = require('gulp-postcss')
const sourcemaps = require('gulp-sourcemaps')
const cssnano = require('cssnano');

//JS
//const concat = require('gulp-concat');
const terser = require('gulp-terser-js');
//const rename = require('gulp-rename');

//IMAGES
const imagemin = require('gulp-imagemin');
const notify = require('gulp-notify');
const cache = require('gulp-cache');
//const clean = require('gulp-clean');
const webp = require('gulp-webp');
//const avif = require('gulp-avif');

//WEBPACL
//const webpack = require('webpack-stream');

const paths = {
  scss: 'src/scss/**/*.scss',
  js: 'src/js/**/*.js',
  img: 'src/img/**/*'
}

function css() {
  return src(paths.scss)
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(postcss([autoprefixer(), cssnano()]))
    //.pipe( sass({outputStyle: 'expanded'}))
    .pipe(sourcemaps.write('.'))
    .pipe( dest('public/build/css') );
}

function javascript() {
  return src(paths.js)
    /* .pipe(webpack({
      module: {
        rules: [
          {
            test: /\.css$/i,
            use: ['style-loader', 'css-loader']
          }
        ]
      },
      mode: 'production',
      entry:'./src/js/app.js',
      watch: true
    })) */
    .pipe(sourcemaps.init())
    //.pipe(concat('bundle.js')) 
    .pipe(terser())
    .pipe(sourcemaps.write('.'))
    //.pipe(rename({ suffix: '.min' }))
    .pipe(dest('./public/build/js'))
}

function images() {
  return src(paths.img)
    .pipe(cache(imagemin({ optimizationLevel: 3})))
    .pipe(dest('public/build/img'))
    .pipe(notify({ message: 'Imagen Completada'}));
}

function versionWebp() {
  return src(paths.img)
    .pipe( webp( { quality: 50 } ) )
    .pipe( dest( 'public/build/img' ) )
    .pipe( notify( { message: 'Imagen webp Completada' } ) );
}

/* function versionAvif() {
  return src(paths.img)
    .pipe( avif({ quality: 50 }) )
    .pipe( dest('public/build/img') )
    .pipe( notify( { message: 'Imagen Avif Completada' } ) );
} */

function watchArchivos() {
  watch( paths.scss, css );
  watch( paths.js, javascript );
  watch( paths.img, images );
  watch( paths.img, versionWebp );
}

/* exports.css = css;
exports.js = javascript;
exports.imagenes = images;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif; */
exports.default = parallel(css, javascript,  images, versionWebp,  watchArchivos ); 