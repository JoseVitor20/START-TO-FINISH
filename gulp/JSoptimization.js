import gulp from 'gulp';
import terser from 'gulp-terser';  // substitui gulp-minify
import concat from 'gulp-concat';
import wrap from 'gulp-wrap';
import path from 'path';
import { fileURLToPath } from 'url';
import { dirname } from 'path';

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

const paths = {
  js: path.join(__dirname, '../resources/js/*.js'),
  dest: path.join(__dirname, '../public/js/')
};

export function OtimizarJS() {
  return gulp.src(paths.js)
    .pipe(terser())  // agora usando gulp-terser para suportar ES6+
    .pipe(concat('scripts.min.js'))
    .pipe(wrap(`document.addEventListener('DOMContentLoaded', function() {\n<%= contents %>\n});`))
    .pipe(gulp.dest(paths.dest));
}

export function AssistirJS() {
  return gulp.watch(paths.js, OtimizarJS);
}

export default gulp.series(OtimizarJS, AssistirJS);
