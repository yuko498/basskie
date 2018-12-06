'use strict';

var gulp    = require('gulp'),
    sass    = require('gulp-sass'),
    glob    = require('gulp-sass-glob'), // sassのimportでワイルトカードを利用可能に
    maps    = require('gulp-sourcemaps'),
    prefix  = require('gulp-autoprefixer'),
    plumber = require('gulp-plumber'),
    notify  = require('gulp-notify'),
    bs      = require('browser-sync').create();

// gulp-sassの設定
gulp.task('sass', function() {
  gulp.src('./scss/style.scss')
    .pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
    .pipe(maps.init())
    .pipe(glob({ignorePaths: ['*node_modules*']}))
    .pipe(sass({outputStyle: 'expanded'}))
    // ベンダープレフィックス自動付加
    .pipe(prefix({
      browsers: ['last 2 version', 'iOS >= 8', 'Android >= 4.1'],
      cascade: false
    }))
    // Sassの編集時はリロードせずにブラウザに反映
    .pipe(maps.write('./'))
    .pipe(gulp.dest('./css'))
    .pipe(bs.stream());
});

// BrowserSyncの設定
// ブラウザ画面への通知を無効化
gulp.task('sync', function() {
  bs.init({
    proxy: "localhost/basskie/",
    notify: false
  });
});

gulp.task('reload', function() {
  bs.reload();
});

gulp.task('watch', function() {
  gulp.watch(['./scss/style.scss'], ['sass']);
  gulp.watch(['./js/**/*.js','./*.php'], ['reload']);
});

gulp.task('default', ['sass', 'sync', 'reload', 'watch']);


// Sassをコンパイルするタスク設定
gulp.task("default", function () {
    gulp.src('vendor/bootstrap/scss/bootstrap.scss') // コンパイル対象のSassファイル
        .pipe(sass())           // コンパイル実行
        .pipe(autoprefixer())   // ベンダープレフィックスの付与
        .pipe(gulp.dest('vendor/bootstrap/css/bootstrap.css')); // cssフォルダに出力
});


gulp.task("default", function () {
    // bootstrapのscssフォルダを監視し、変更があったらコンパイルする
    gulp.watch('vendor/bootstrap/scss/bootstrap.scss', function() {
        gulp.src('vendor/bootstrap/scss/bootstrap.scss')
            .pipe(sass())
            .pipe(autoprefixer())
            .pipe(gulp.dest('vendor/bootstrap/css/bootstrap.css'));
    });
});

