var gulp = require('gulp'),
    sass = require('gulp-sass'),
    del = require('del'),
    path = require('path'),
    autoprefixer = require('gulp-autoprefixer'),
    shell = require('gulp-shell'),
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

// necessary to delete all files in theme/ output folder before build tasks
// to prevent permission errors.
gulp.task('clear-theme', shell.task([
  'rm -rf theme/*']));

gulp.task('docker-up', shell.task([
  'docker-compose up -d --no-recreate']));

gulp.task('docker-backup', shell.task([
  'docker run --volumes-from oatsbyday_dbdata_1 --name backup -v $(pwd)/backup:/backup ubuntu tar cvf /backup/backup.tar /var/lib/mysql',
  'docker rm backup']));

gulp.task('docker-restore', shell.task([
  'docker-compose stop && docker-compose rm --force',
  'docker-compose up -d dbdata',
  'docker run --name restore --volumes-from oatsbyday_dbdata_1 -v $(pwd)/backup:/backup busybox tar xvf /backup/backup.tar',
  'docker rm restore']));

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

gulp.task('build', ['clear-theme', 'sass', 'php']);
gulp.task('default', ['docker-up', 'build', 'watch']);
