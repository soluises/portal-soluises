// Bold Tempate - Made By Eon - All rights reserved
var gulp = require("gulp");
//var browserSync = require('browser-sync').create();

var plugins = require("gulp-load-plugins")({
	pattern: ['gulp-*', 'gulp.*'],
	replaceSting: /\bgulp[\-.]/
});

// Js
// Concat + Minifiy Js Files and move to vendor folder
var jsFiles = ['assets/js/plugins/*.js'];
var jsDest = 'assets/js/';

gulp.task('js', function () {
	return gulp.src(jsFiles)
		.pipe(plugins.order([
			'jquery.min.js',
			'bootstrap.min.js',
			'imagesloaded.pkgd.min.js',
			'*.js',
		]))
		.pipe(plugins.concat('plugins.js'))
		.pipe(gulp.dest(jsDest))
		.pipe(plugins.rename({ suffix:'.min' }))
		.pipe(plugins.uglify())
		.pipe(gulp.dest(jsDest));
});

// Css
// Concat + Minifiy Css Files and move to vendor folder
var cssFiles = 'assets/css/plugins/*.css';
var cssDest = 'assets/css/';

gulp.task('css', function () {
	return gulp.src(cssFiles)
		.pipe(plugins.order([
			'bootstrap.min.css',
			'*.css'
		]))
		.pipe(plugins.concat('plugins.css'))
		.pipe(gulp.dest(cssDest))
		.pipe(plugins.rename({ suffix:'.min' }))
		.pipe(plugins.cssmin({keepSpecialComments : 0 }))
		.pipe(gulp.dest(cssDest));
});

// Sass
var sassFile = 'assets/sass/style.scss';
var sassDest = 'assets/css/';
gulp.task('sass', function () {
	return gulp.src(sassFile)
		.pipe(plugins.sass({outputStyle: 'expanded'})) // expanded - compressed - compact - nested
		.pipe(plugins.autoprefixer({
			browsers: ['last 2 versions', 'ie 9'],
			cascade: false
		}))
		.pipe(gulp.dest(sassDest));
});


// Rtl Support - Runt gulp rtl task to create plugins.min-rtl.css and style-rtl.css files
gulp.task('rtl', function() {
	return gulp.src(['assets/css/plugins.css', 'assets/css/plugins.min.css', 'assets/css/style.css'])
		.pipe(plugins.rtlcss()) // Convert to RTL. 
        .pipe(plugins.rename({ suffix: '-rtl' })) // Append "-rtl" to the filename. 
        .pipe(gulp.dest(cssDest)); // Output RTL stylesheets. 
});

// call - gulp htmlmin
// Html files minify 
// this will make your html files minified 
// make sure to copy all html files before using this
gulp.task('htmlmin', function () {
	return gulp.src('*.html')
	    .pipe(plugins.htmlmin({
	    	collapseWhitespace: true,
	    	removeComments: true,
	    	minifyJS: true, // minify js too
	    	minifyCSS: true // minify css too
	    }))
	    .pipe(gulp.dest(''))
});

// Images - Optimize jpeg and png images
gulp.task('imagemin', function () {
	return gulp.src('assets/images/**/*')
	    .pipe(plugins.imagemin())
	    .pipe(gulp.dest('assets/images'));
});

// Default Task
gulp.task('default', ['js', 'css', 'sass'], function() {
	// watch js files
	gulp.watch(jsFiles, ['js']);
	
	// watch scss files
	gulp.watch(['assets/sass/*.scss', 'assets/sass/*/*.scss'], ['sass']);

	// watch css files
	gulp.watch(cssFiles, ['css']);

	console.log('Watching taks. Sass/Js/Css...');
});