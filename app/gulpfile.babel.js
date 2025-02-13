import gulp from "gulp";
import babel from "gulp-babel";
import browserSync from "browser-sync";
import htmlValidator from "gulp-w3c-html-validator";
import postcss from "gulp-postcss";
import autoprefixer from "autoprefixer";
import cssnano from "cssnano";
import sass from "gulp-sass";
import sourcemaps from "gulp-sourcemaps";
import uglify from "gulp-uglify";
import plumber from "gulp-plumber";
import imagemin from "gulp-imagemin";
import del from "del";
import concat from "gulp-concat";
import fileinclude from "gulp-file-include";
import notify from "gulp-notify";
import sassdoc from "sassdoc";
import tailwindcss from "tailwindcss";
import nunjucksRender from "gulp-nunjucks-render";


const server = () => {
  browserSync.init({
    server: {
      watch: true,
      baseDir: "dist",
    },
  });
};

const html = () => {
  return (
    gulp
      .src("dev/**/*.njk")
      .pipe(plumber())
      .pipe(nunjucksRender({
        path: ['dev', 'dev/layout'],
        ext: '.html',
      }))
      .pipe(gulp.dest("dist"))
  );
};

const scss = () => {
  var options = {
    dest: "dist/docs",
    verbose: true,
    display: {
      access: ["public", "private"],
      alias: true,
      watermark: true,
    },
    groups: {
      undefined: "Global",
    },
  };
  return gulp
    .src("dev/assets/scss/**/*.scss")
    .pipe(sassdoc(options))
    .pipe(
      plumber({
        handleError: function (err) {
          console.log(err);
          this.emit("end");
        },
      })
    )
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: "" }).on("error", sass.logError))
    .pipe(
      postcss([tailwindcss("./tailwind.config.js"), require("autoprefixer")])
    )
    .pipe(sourcemaps.write())
    .pipe(gulp.dest("dist/assets/css"));
};

const plugin = () => {
  return gulp
    .src(["dev/assets/plugins/**/*"], { since: gulp.lastRun(plugin) })
    .pipe(gulp.dest("dist/assets/plugins"));
};

const js = () => {
  return gulp
    .src("dev/assets/js/**/*.js")
    .pipe(
      plumber({
        errorHandler: function (err) {
          notify.onError({
            title: "Gulp error in " + err.plugin,
            message: err.toString(),
          })(err);
        },
      })
    )
    .pipe(babel())
    // .pipe(sourcemaps.init())
    // .pipe(uglify())
    // .pipe(sourcemaps.write())
    .pipe(concat("ui.js"))
    .pipe(gulp.dest("dist/assets/js"));
};

//  이미지 용량 최소화
const minImg = () => {
  return gulp
    .src("dev/assets/images/**/*")
    .pipe(imagemin())
    .pipe(gulp.dest("dist/assets/images"));
};

const watchTask = () => {
  gulp.watch("dev/**/*.njk", html).on("change", browserSync.reload);
  gulp.watch("dev/**/*.scss", scss).on("change", browserSync.reload);
  gulp.watch("dev/**/*.js", js).on("change", browserSync.reload);
  gulp
    .watch("dev/**/*.{jpg,jpeg,png,gif,svg}", minImg)
    .on("change", browserSync.reload);
};

const clean = () => {
  return del("dist");
};

exports.default = gulp.series(
  clean,
  gulp.parallel(html, scss, js, plugin, minImg),
  gulp.parallel(server, watchTask)
);

exports.build = gulp.series(clean, html, scss, js, minImg, plugin);
