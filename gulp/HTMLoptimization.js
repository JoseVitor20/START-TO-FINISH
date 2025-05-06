import gulp from 'gulp';
import htmlmin from 'gulp-htmlmin';
import path from 'path';
import concat from 'gulp-concat';

const paths = {
    html: './resources/views/sessoes/*.blade.php', // supondo que você tenha HTML fora do Blade
    dest: './resources/views/' // ou qualquer pasta de destino
};

export function OtimizarHTML() {
    return gulp.src(paths.html)
        .pipe(htmlmin({ collapseWhitespace: true, removeComments: true }))
        .pipe(concat('sessoes-min.blade.php')) // 2. Concatenar tudo num só arquivo
        .pipe(gulp.dest(paths.dest));
}

export function AssistirHTML() {
    return gulp.watch(paths.html, OtimizarHTML);
}

export default gulp.series(OtimizarHTML, AssistirHTML);