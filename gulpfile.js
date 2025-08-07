import gulp from 'gulp';
import { OtimizarCSS, AssistirCSS } from "./gulp/CSSoptimization.js";
import { OtimizarJS, AssistirJS } from "./gulp/JSoptimization.js";

gulp.task('default', gulp.parallel(
    // === Tarefas CSS ===
        OtimizarCSS,
        AssistirCSS,
    
    // === Tarefas JS ===
        OtimizarJS,
        AssistirJS,
));