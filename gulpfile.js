'use strict';

var gulp = require('gulp'),
	contact = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
	sass = require('gulp-sass'),
	maps = require('gulp-sourcemaps');


/**
 *
 * SCSS Compilation
 *
 */

gulp.task ('compileSass', function(){
	gulp.src('_scss/main.scss')
		.pipe(maps.init())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(rename('main.min.css'))
		.pipe(maps.write('./'))
		.pipe(gulp.dest('css'));
});

/**
 *
 * Gulp Watch
 *
 */

gulp.task('watchSass', function () {
  gulp.watch('_scss/**/*.scss', ['compileSass']);
});

/**
 *
 * Gulp Default
 *
 */

 gulp.task('build', ['compileSass', 'watchSass']);

 gulp.task('default', ['build']);
