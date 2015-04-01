var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync');

var reload = browserSync.reload;

gulp.task('default', ['watch']);

gulp.task('sass', function() {
  return gulp.src('src/scss/style.scss')
      .pipe(sass())
      .pipe(gulp.dest('theme'))
      .pipe(reload({stream: true}));
});

gulp.task('php', function() {
  return gulp.src('src/*.php')
      .pipe(gulp.dest('theme'));
});

gulp.task('watch', ['browser-sync'], function() {
  gulp.watch('src/scss/**/*.scss', ['sass']);
  
  gulp.watch('src/*.php', ['php'])
      .on('change', reload);
});

gulp.task('browser-sync', function() {
  browserSync({
    proxy: "localhost:8080"
  });
});

gulp.task('build', ['sass', 'php']);
