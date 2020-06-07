'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
sass.compiler = require('node-sass');

gulp.task('sass', function () {
	return gulp
		.src('./docs/scss/*.scss')
		.pipe(sass.sync().on('error', sass.logError))
		.pipe(gulp.dest('./docs/css/'));
});

gulp.task('watch', function () {
	gulp.watch('./docs/scss/*.scss', gulp.series('sass'));
});
