import gulp from 'gulp';
import gulpWebpack from 'webpack-stream';
import rename from 'gulp-rename';
import uglify from 'gulp-uglify';
import fs from 'fs';

function getDirectories(path) {
	return fs.readdirSync(path).filter(function (file) {
		return fs.statSync(path + '/' + file).isDirectory();
	});
}

export const task = (config) => {
	return new Promise((resolve) => {
		const bundles = getDirectories(`${config.assetsBuild}scripts/`);
		const entry = {};
		bundles.forEach((bundle) => {
			const filePath = `${config.assetsBuild}scripts/${bundle}/index.js`;
			if (fs.existsSync(filePath)) {
				entry[bundle] = './' + filePath;
			}
		});

		gulp.src([`${config.assetsBuild}scripts/*`])
			.pipe(
				gulpWebpack({
					entry,
					mode: 'production',
					module: {
						rules: [
							{
								test: /\.js$/,
								exclude: /node_modules/,
								loader: 'babel-loader',
							},
							{
								test: /\.css$/i,
								use: ['style-loader', 'css-loader'],
							},
							{
								test: /\.scss$/i,
								exclude: /node_modules/,
								use: ['style-loader', 'css-loader', 'sass-loader'],
							},
						],
					},
					output: {
						filename: '[name].js',
					},
					externals: {
						jquery: 'jQuery',
					},
				})
			)
			.on('error', config.errorLog)
			.pipe(gulp.dest(config.assetsDir + 'scripts/'))
			.pipe(uglify())
			.pipe(
				rename({
					suffix: '.min',
				})
			)
			.on('error', config.errorLog)
			.pipe(gulp.dest(config.assetsDir + 'scripts/'));
		resolve();
	});
};
