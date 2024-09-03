const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

function styles() {
    return gulp.src('media/scss/template.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(gulp.dest('media/css'));
}

function watch() {
    gulp.watch('media/scss/**/*.scss', styles);
}

exports.styles = styles;
exports.watch = watch;

const gulp = require('gulp');

function copyUikit() {
    return gulp.src('node_modules/uikit/dist/**/*')
        .pipe(gulp.dest('media'));
}

exports.copyUikit = copyUikit;
