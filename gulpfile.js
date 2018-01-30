
let gulp = require('gulp');
let cssnano = require('gulp-cssnano');
let rename = require('gulp-rename');
let pump = require('pump');
let uglify = require('gulp-uglify');


gulp.task('css', ()=>{
    gulp.src(['./public/css/**/*.css','!./public/css/**/*.min.css'])
        .pipe(cssnano())
        .pipe(rename({
            suffix : '.min'
        }))
        .pipe(gulp.dest('./public/css'))
});

gulp.task('js', function (cb) {
    pump([
            gulp.src('./js/**/*.js'),
            uglify(),
            rename({
                suffix: '.min'
            }),
            gulp.dest('./js')
        ],
        cb
    );
});


