var gulp = require('gulp');
var livereload = require('gulp-livereload');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('reload-sass', done =>{
    gulp.src('./sass/**/*.sass')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css/'))
    .pipe(livereload());
    done();
});

gulp.task('default', done => {
    livereload.listen();
    gulp.watch('./sass/**/*.sass', gulp.series('reload-sass'));
    done();
});





