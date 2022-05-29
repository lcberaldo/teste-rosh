var gulp = require("gulp");
var sass = require("gulp-sass");
var htmlmin = require("gulp-htmlmin");
var notify = require("gulp-notify");
var concat = require("gulp-concat");
var uglify = require("gulp-uglify");
var browserSync = require("browser-sync").create();
var babel = require("gulp-babel");
const image = require("gulp-image");
var clean = require("gulp-clean");

gulp.task("browser-sync", function () {
  browserSync.init({
    proxy: "localhost/teste-rosh/",
  });
});

/* Task compile scss to css */
gulp.task("sass", function () {
  return gulp
    .src("./source/sass/*.scss")
    .pipe(sass({ outputStyle: "compressed" }))
    .on(
      "error",
      notify.onError({
        title: "Seu burro , presta atenção!",
        message: "<%= error.message %>",
      })
    )
    .pipe(gulp.dest("./dist/css"));
});

/* Task minify html */
gulp.task("html", function () {
  return gulp
    .src(["./source/php/*.php", "./source/php/template-parts/*.php"])
    .pipe(htmlmin({ collapseWhitespace: true }))
    .pipe(gulp.dest("./"));
});

/* Task minify js */
gulp.task("js", function () {
  return gulp
    .src(["./source/js/plugins/*.js", "./source/js/*.js"])
    .pipe(babel({ presets: ["@babel/env"] }))
    .pipe(concat("app.js"))
    .pipe(uglify())
    .pipe(gulp.dest("./dist/js"));
});

/*Minify images */

gulp.task("images", function () {
  return gulp
    .src("source/img/*")
    .pipe(image())
    .pipe(clean())
    .pipe(gulp.dest("dist/img/"));
});

/* Watch */
gulp
  .watch("./source/sass/**/*.scss", gulp.series("sass"))
  .on("change", browserSync.reload);
gulp
  .watch("./source/js/**/*.js", gulp.series("js"))
  .on("change", browserSync.reload);
gulp
  .watch("./source/php/**/**", gulp.series("html"))
  .on("change", browserSync.reload);

gulp
  .watch("./source/img/*", gulp.series("images"))
  .on("change", browserSync.reload);

gulp.task(
  "default",
  gulp.parallel("sass", "html", "js", "images", "browser-sync")
);
