'use strict';

var gulp = require('gulp'),
	contact = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
	sass = require('gulp-sass'),
	maps = require('gulp-sourcemaps');
	cleanCss = require('gulp-clean-css');

/**
 *
 * JS Compilation
 *
 */

gulp.task('concatScripts', function(){
	return gulp.src([
		'_js/jquery.min.js',
		'_js/bootstrap.bundle.min.js',
		'_js/wow.min.js',
		'_js/slick.min.js',
		'_js/featherlight.js',
		'_js/featherlight.gallery.js',
		'_js/script.js'
		])
	.pipe(maps.init())
	.pipe(contact('main.js'))
	.pipe(gulp.dest('js'));

});

gulp.task('minifyScripts', ['concatScripts'], function(){
	return gulp.src('js/main.js')
		.pipe(uglify())
		.pipe(rename('main.min.js'))
		.pipe(gulp.dest('js'));

});


/**
 *
 * SCSS Compilation
 *
 */

gulp.task('compileSass', function(){
	return gulp.src('_scss/main.scss')
		.pipe(maps.init())
		// .pipe(sass().on('error', sass.logError))
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(rename('main.min.css'))
		.pipe(maps.write('./'))
		.pipe(gulp.dest('css'));
});

/**
 *
 * CSS Unification & Minification
 *
 */
gulp.task('minifyCss', ['compileSass'], function(){
	return gulp.src('css/*.css')
		.pipe(cleanCss())
		.pipe(concat('main.min.css'))
		.pipe(gulp.dest('css'));
});

/**
 *
 * Gulp Watch
 *
 */

gulp.task('watchAll', function () {
  gulp.watch('_scss/**/*.scss', ['compileSass']);
  gulp.watch('_js/**/*.js', ['concatScripts', 'minifyScripts']);
});

/**
 *
 * Gulp Default
 *
 */

 gulp.task('build', ['compileSass', 'concatScripts', 'minifyScripts', 'watchAll']);

 gulp.task('default', ['build']);
