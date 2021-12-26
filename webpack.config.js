const glob = require('glob');
const defaultConfig = require("@wordpress/scripts/config/webpack.config");

let entry = glob.sync('./inc/gutenberg/blocks/**/index.js').reduce((acc, path) => {
	const entry = path.replace(/(\.\/inc\/gutenberg\/blocks\/)|(\/index.js)/g, "");
	acc[entry] = path;
	return acc;
}, {});

module.exports = {
	...defaultConfig,
	entry
};
