import { src, dest } from 'gulp';

import cleanCSS from 'gulp-clean-css';
import filter from 'gulp-filter';
import sassImportJson from '@sayhellogmbh/gulp-sass-import-json';
import autoprefixer from 'gulp-autoprefixer';
import rename from 'gulp-rename';
import sourcemaps from 'gulp-sourcemaps';
const sass = require('gulp-sass')(require('sass'));

require('@babel/register')({
	presets: ['@babel/preset-env'],
});

export const task = (config) => {
	return src([config.assetsBuild + 'styles/**/*.scss', '!**/_components/**']) // Ignore files in a _components subfolder
		.pipe(sassImportJson({ cache: false, isScss: true }))
		.pipe(sourcemaps.init())
		.pipe(
			sass({
				includePaths: ['./node_modules/'],
			}).on('error', sass.logError)
		)
		.pipe(sourcemaps.write({ includeContent: false }))
		.pipe(sourcemaps.init({ loadMaps: true }))
		.pipe(autoprefixer())
		.pipe(dest(config.assetsDir + 'styles/'))
		.pipe(sourcemaps.write('.'))
		.on('error', config.errorLog)
		.pipe(cleanCSS())
		.pipe(
			rename({
				suffix: '.min',
			})
		)
		.on('error', config.errorLog)
		.pipe(dest(config.assetsDir + 'styles/'))
		.pipe(filter('**/*.css'));
};
