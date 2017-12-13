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
  	cleanCSS = require('gulp-clean-css');

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
		html = gulp.src(folder.src + '*.html')
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

// CSS clean up and minification
gulp.task('css', ['images'], function() {
	return gulp.src(folder.src + 'css/*')
		.pipe(purify([folder.src + 'js/*.js', folder.src + '*.html']))
		.pipe(cleanCSS({compatibility: 'ie8'}))
    	.pipe(gulp.dest(folder.build + 'css/')); 
});
