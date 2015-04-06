var gulp = require('gulp'),
    sass = require('gulp-sass'),
    del = require('del'),
    path = require('path'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync');

var reload = browserSync.reload;

gulp.task('browser-sync', function() {
  browserSync({
    proxy: "localhost:8080"
  });
});

gulp.task('sass', function() {
  return gulp.src('src/scss/style.scss')
      .pipe(sass())
      .pipe(autoprefixer())
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

  // If file is deleted in src/ delete in theme/ as well
  gulp.watch('src/**/*.{php,scss}')
      .on('change', function(event) {
        if (event.type === 'deleted') {
          var f = path.join('theme/',
                            event.path.replace(process.cwd() + '/src/', ''));
          console.log('deleting: ' + f);
          del([f]);
        }
      });
});

gulp.task('build', ['sass', 'php']);
gulp.task('default', ['build', 'watch']);
