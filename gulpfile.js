var gulp = require('gulp'),
    sass = require('gulp-sass');

gulp.task('default', ['watch']);

gulp.task('sass', function() {
  gulp.src('./*.scss')
      .pipe(sass())
      .pipe(gulp.dest('./css'));
});

gulp.task('watch', function() {
  gulp.watch('./*.scss', ['sass']);
});
