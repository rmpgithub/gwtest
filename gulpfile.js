var gulp = require('gulp');
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var notify = require('gulp-notify');
var browserSync = require('browser-sync');
var cleanCSS = require('gulp-clean-css');
var color = require('gulp-color');
var plumber = require('gulp-plumber');
var watch = require('gulp-watch');
var rename = require('gulp-rename');
var size = require('gulp-size');

var handleError = function(err) {
    console.log(err.toString());
    this.emit('end');
};

//============================================
//Sass tasks
//============================================
gulp.task('sass:prod', function() {
    var s = size();
    return gulp.src('src/scss/main.scss')
        .pipe(plumber({
            errorHandler: handleError
        }))
        .pipe(sourcemaps.init())
        .pipe(
            sass({
                outputStyle : 'compressed'
            })
        )
        .pipe(autoprefixer({browsers: ["> 1%"]}))
        .pipe(cleanCSS())
        .pipe(s)
        .pipe(rename({suffix: '.min'}))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('dist/css'))
        .pipe(browserSync.stream({match: '**/*.css'}))
        .pipe(notify({
            onLast: true,
            message: function () {
                return 'Total CSS size: ' + s.prettySize;
            }
        }))
});

gulp.task('sass:dev', function() {
    var s = size();
    return gulp.src('src/styles/scss/main.scss')
        .pipe(plumber({
            errorHandler: handleError
        }))
        .pipe(sourcemaps.init())
        .pipe(
            sass({
                outputStyle : 'expanded'
            })
        )
        .pipe(autoprefixer({browsers: ["> 1%"]}))
        .pipe(rename({suffix: '.min'}))
        .pipe(s)
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('dist/css'))
        .pipe(browserSync.stream({match: '**/*.css'}))
        .pipe(notify({
            onLast: true,
            message: function () {
                return 'Total CSS size ' + s.prettySize;
            }
        }))
});


//============================================
//JS tasks
//============================================
// Lint Task
gulp.task('js-lint', function() {
    return gulp.src('src/**/*.js')
        .pipe(plumber({
            errorHandler: handleError
        }))
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Concatenate JS
gulp.task('js:dev', function() {
    var s = size();
    return gulp.src('src/js/**/*.js')
        .pipe(plumber({
            errorHandler: handleError
        }))
        .pipe(sourcemaps.init())
        .pipe(concat('scripts.js'))
        .pipe(s)
        .pipe(rename({suffix: '.min'}))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('dist/js'))
        .pipe(browserSync.stream())
        .pipe(notify({
            onLast: true,
            message: function () {
                return 'Total JS size ' + s.prettySize;
            }
        }))
});

// Minify JS
gulp.task('js:prod', function() {
    var s = size();
    return gulp.src('src/**/*.js')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(concat('scripts.js'))
        .pipe(uglify())
        .pipe(s)
        .pipe(rename({suffix: '.min'}))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('dist/js'))
        .pipe(browserSync.stream())
        .pipe(notify({
            onLast: true,
            message: function () {
                return 'Total JS size ' + s.prettySize;
            }
        }))
});


//============================================
//Watch tasks
//============================================
gulp.task('watch:prod', function() {
    gulp.watch('src/**/*.js', ['js-lint', 'js:prod']);
    gulp.watch('src/scss/**/*.scss', ['sass:prod']);
});

gulp.task('watch', function() {
    gulp.watch('src/**/*.js', ['js-lint', 'js:dev']);
    gulp.watch('src/styles/scss/**/*.scss', ['sass:dev']);
});

//============================================
//Global tasks
//============================================
gulp.task('compile:dev', function() {
    console.log(color('-------------------------------------------', 'YELLOW'));
    console.log(color('Compile SASS and merge JS', 'YELLOW'));
    console.log(color('-------------------------------------------', 'YELLOW'));
    gulp.start('sass:dev', 'js-lint', 'js:dev');
});

gulp.task('compile:prod', function() {
    console.log(color('-------------------------------------------', 'YELLOW'));
    console.log(color('Compile: SASS AND JS', 'YELLOW'));
    console.log(color('-------------------------------------------', 'YELLOW'));
    gulp.start('sass:prod', 'js-lint', 'js:prod');
});

gulp.task('dev', function() {
    gulp.start('sass:dev', 'js-lint', 'js:dev', 'watch:dev');
    console.log(color('-------------------------------------------', 'YELLOW'));
    console.log(color('Rozpoczynamy prace milordzie (DEV)', 'YELLOW'));
    console.log(color('-------------------------------------------', 'YELLOW'));
});

gulp.task('prod', function() {
    gulp.start('sass:prod', 'js-lint', 'js:prod', 'watch:prod');
    console.log(color('-------------------------------------------', 'YELLOW'));
    console.log(color('Rozpoczynamy prace milordzie (PROD)', 'YELLOW'));
    console.log(color('-------------------------------------------', 'YELLOW'));
});

gulp.task('default', ['dev']);