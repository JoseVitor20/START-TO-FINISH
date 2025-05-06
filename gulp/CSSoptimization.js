import gulp from 'gulp';
import cleanCSS from 'gulp-clean-css';
import concat from 'gulp-concat';
import wrap from 'gulp-wrap';
import path from 'path';
import autoprefixer from 'gulp-autoprefixer';

const paths = {
    css: './resources/css/*.css',
    dest: './public/css/'
};

export function OtimizarCSS() {
    return gulp.src(paths.css)
        .pipe(autoprefixer({ cascade: false }))
        .pipe(cleanCSS())
        .pipe(concat('style.min.css'))
        .pipe(gulp.dest(paths.dest));
}

export function AssistirCSS() {
    return gulp.watch(paths.css, OtimizarCSS);
}
