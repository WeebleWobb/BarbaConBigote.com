// Gulp.js configuration
var
	// development mode?
	devBuild = (process.env.NODE_ENV !== 'production'),

	// modules
	gulp = require('gulp'),
	newer = require('gulp-newer'),

	// HTML
	imagemin = require('gulp-imagemin'),
	htmlclean = require('gulp-htmlclean');

	// JS
	concat = require('gulp-concat'),
  	uglify = require('gulp-uglify'),
  	jshint = require('gulp-jshint'),

  	// CSS
  	cleanCSS = require('gulp-clean-css'),
  	sass = require('gulp-sass'),
  	maps = require('gulp-sourcemaps'),
	autoprefixer = require('gulp-autoprefixer'),
	  
	// Dist Clean
	del = require('del'),

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

// JS Minification
gulp.task('js', function() {
	return gulp.src(folder.src + 'js/**/*')
		// .pipe(deporder())
		.pipe(jshint())
		.pipe(concat('script.js'))
		.pipe(uglify())
		.pipe(gulp.dest(folder.build + 'js/'));

});

// Sass Compiler
gulp.task('compileSass', function() {
  return gulp.src(folder.src + "scss/style.scss")
      .pipe(maps.init())
      .pipe(sass())
      .pipe(autoprefixer())
      .pipe(maps.write('./'))
      .pipe(gulp.dest(folder.src + 'css/'));
});

// Sass watch task
gulp.task('watchSass', function() {
  gulp.watch(folder.src + 'scss/**/*.scss', ['compileSass']);
})

// Build to dist task 
gulp.task('build', ['images', 'js', 'compileSass'], function() { 
	return gulp.src(['src/assets/*', 'src/*.php', 'src/inc/*/*', 'src/screenshot.png', 'src/css/style.css'], { base: 'src/'})
		.pipe(gulp.dest(folder.build)
	);
});	

// Default gulp task
gulp.task('default', ['clean'], function() {
	gulp.start('build');
});
