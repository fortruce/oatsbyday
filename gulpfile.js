var gulp = require('gulp'),
    sass = require('gulp-sass');

gulp.task('default', ['watch']);

gulp.task('sass', function() {
  gulp.src('./*.scss')
      .pipe(sass())
      .pipe(gulp.dest('./css'));
});

gulp.task('copy-php', function() {
  gulp.src('src/**/*.php')
      .pipe(gulp.dest('theme'));
});

gulp.task('watch', function() {
  gulp.watch('./*.scss', ['sass']);
  gulp.watch('src/**/*.php', ['copy-php']);
});
