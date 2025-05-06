import gulp from 'gulp';
import { OtimizarCSS, AssistirCSS } from "./gulp/CSSoptimization.js";
import { OtimizarHTML, AssistirHTML } from "./gulp/HTMLoptimization.js";
import { OtimizarJS, AssistirJS } from "./gulp/JSoptimization.js";

gulp.task('default', gulp.parallel(
    // === Tarefas CSS ===
        OtimizarCSS,
        AssistirCSS,
    
    // === Tarefas HTML ===
        OtimizarHTML,
        AssistirHTML,
    
    // === Tarefas JS ===
        OtimizarJS,
        AssistirJS,
));