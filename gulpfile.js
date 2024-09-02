const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

function styles() {
    return gulp.src('media/scss/template.scss')  // Source SASS file
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))  // Compile and compress
        .pipe(gulp.dest('media/css'));  // Output directory
}

function watch() {
    gulp.watch('media/scss/**/*.scss', styles);  // Watch for changes
}

exports.styles = styles;
exports.watch = watch;

// Task to copy UIkit files
function copyUikit() {
    return gulp.src('node_modules/uikit/dist/**/*')
        .pipe(gulp.dest('media/vendor/uikit'));
}

// Task to copy Bootstrap files
function copyBootstrap() {
    return gulp.src('node_modules/bootstrap/dist/**/*')
        .pipe(gulp.dest('media/vendor/bootstrap'));
}

// Export tasks
exports.copyUikit = copyUikit;
exports.copyBootstrap = copyBootstrap;
exports.default = gulp.series(copyUikit, copyBootstrap);