const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');

// Compile SCSS
gulp.task('sass', function () {
  return gulp.src('./src/scss/style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./assets/css'))
    .pipe(browserSync.stream());
});

// Compile and Minify JavaScript
gulp.task('js', function () {
  return gulp.src('./src/js/main.js')
    .pipe(sourcemaps.init())
    .pipe(babel({ presets: ['@babel/preset-env'] }))
    .pipe(uglify())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./assets/js'))
    .pipe(browserSync.stream());
});

// Serve with BrowserSync and watch for changes
gulp.task('serve', function () {
  browserSync.init({
    proxy: "http://localhost/developersajeeb/src",
    files: ["**/*.php"],
    notify: false
  });
  gulp.watch('./src/scss/**/*.scss', gulp.series('sass'));
  gulp.watch('./src/js/**/*.js', gulp.series('js'));
  gulp.watch('**/*.php').on('change', browserSync.reload);
});

gulp.task('default', gulp.parallel('serve'));

