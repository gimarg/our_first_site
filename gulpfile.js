// Sass configuration
var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function() {
    gulp.src('themes/our_custom_theme/scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('themes/our_custom_theme/css'))
});

gulp.task('default', ['sass'], function() {
    gulp.watch('themes/our_custom_theme/scss/*.scss', ['sass']);
})