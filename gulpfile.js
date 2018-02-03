
let gulp = require('gulp');
let cssnano = require('gulp-cssnano');
let rename = require('gulp-rename');
let pump = require('pump');
let uglify = require('gulp-uglify');
let babel = require('gulp-babel');

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
            gulp.src(['./public/js/**/*.js','!./public/js/**/*.min.js']),
            babel({
               presets : ['env']
            }),
            uglify(),
            rename({
                suffix: '.min'
            }),
            gulp.dest('./public/js')
        ],
        cb
    );
});

gulp.task('watch', function() {
    gulp.watch('./public/css/**/*.css', ['css']);
    gulp.watch('./public/js/**/*.js', ['js']);
});


