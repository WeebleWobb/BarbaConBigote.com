// Gulp.js configuration
var
	// modules
	gulp = require('gulp'),
	newer = require('gulp-newer'),
	imagemin = require('gulp-imagemin'),
	htmlclean = require('gulp-htmlclean');
	concat = require('gulp-concat'),
  	deporder = require('gulp-deporder'),
  	stripdebug = require('gulp-strip-debug'),
  	uglify = require('gulp-uglify'),
  	purify = require('gulp-purify-css'),
  	cleanCSS = require('gulp-clean-css'),
  	sass = require('gulp-sass'),
  	maps = require('gulp-sourcemaps'),
  	autoprefixer = require('autoprefixer'),

	// folders
	folder = {
	src: 'src/',
	build: 'dist/'
	}
;

// Image Optimization
gulp.task('images', function() {
	var imgDest = folder.build + 'assets/';
	var imgSrc = folder.src + 'assets/**/*';

	return gulp.src(imgSrc)
		.pipe(newer(imgDest))
		.pipe(imagemin({optimizationLevel: 5}))
		.pipe(gulp.dest(imgDest));
});

// HTML Minification
gulp.task('html', ['images'], function() {
	var
		htmlDest = folder.build,
		html = gulp.src(folder.src + 'html/*.html')
			.pipe(newer(htmlDest));

	return html.pipe(gulp.dest(htmlDest));

});

// JS Minification
gulp.task('js', function() {
	return gulp.src(folder.src + 'js/**/*')
		.pipe(deporder())
		.pipe(concat('main.js'))
		.pipe(gulp.dest(folder.build + 'js/'));

});

// Sass Compiler
gulp.task('compileSass', function() {
  return gulp.src(folder.src + "scss/style.scss")
      .pipe(maps.init())
      .pipe(sass())
      .pipe(maps.write('./'))
      .pipe(gulp.dest(folder.src + 'css/'));
});

// Sass watch task
gulp.task('watchSass', function() {
  gulp.watch(folder.src + 'scss/*.scss', ['compileSass']);
})

gulp.task('build', ['images', 'html', 'js', 'sass'], function() { });
