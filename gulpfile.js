// Gulp.js configuration
var
	// modules
	gulp = require('gulp'),
	newer = require('gulp-newer'),
	imagemin = require('gulp-imagemin'),

	// development mode?
	devBuild = (process.env.NODE_ENV !== 'production'),

	// folders
	folder = {
	src: 'src/',
	build: 'dist/'
	}
;

// Image Minification
gulp.task('images', function() {
	var imgDest = folder.build + 'assets/';
	var imgSrc = folder.src + 'assets/**/*';

	return gulp.src(imgSrc)
		.pipe(newer(imgDest))
		.pipe(imagemin({optimizationLevel: 5}))
		.pipe(gulp.dest(imgDest));
});