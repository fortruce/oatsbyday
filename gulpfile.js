var gulp = require('gulp'),
    sass = require('gulp-sass');

var src_dir = 'src/',
    sass_dir = 'src/scss/',
    dest_dir = 'theme/',
    css_dir = dest_dir + 'css/';

gulp.task('default', ['watch']);

gulp.task('sass', function() {
  gulp.src(sass_dir + '**/*.scss')
      .pipe(sass())
      .pipe(gulp.dest(css_dir));
});

gulp.task('php', function() {
  gulp.src(src_dir + '**/*.php')
      .pipe(gulp.dest(dest_dir));
});

gulp.task('watch', function() {
  gulp.watch(sass_dir + '**/*.scss', ['sass']);
  gulp.watch(src_dir + '**/*.php', ['php']);
});
