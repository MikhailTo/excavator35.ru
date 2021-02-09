// utils
var deepMerge = require('../utils/deepMerge');

// config
var assets = require('./common').paths.assets;

/**
 * Style Building
 * Configuration
 * Object
 *
 * @type {{}}
 */
module.exports = deepMerge({
	paths: {
		watch: [
			assets.src + '/scss/**/*.scss',
			'!' + assets.src + '/scss/**/*_tmp\\d+.scss'
		],
		src:   [
			assets.src + '/scss/*.scss',
			'!' + assets.src + '/scss/**/_*'
		],
		dest:  assets.dest + '/css',
		clean: assets.dest + '/css/**/*.{css,map}'
	},

	options: {
		sass: {},
		autoprefixer: {
			overrideBrowserslist: [
				'last 2 version',
				'> 1%',
				'ie >= 8',
				'edge >= 15',
				'ie_mob >= 10',
				'ff >= 45',
				'chrome >= 45',
				'safari >= 7',
				'opera >= 23',
				'ios >= 7',
				'android >= 4',
				'bb >= 10'
			]
		},
		minify: {
			preset: [
				'default',
				{
					discardComments: { removeAll: true }
				}
			]
		}
	}
});
