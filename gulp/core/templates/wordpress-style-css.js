var project = require('../../../project.config');

var possibleOptions = {
	name: 'excavator35.ru',
	prettyName: 'excavator35',
	themeURI: 'https://www.axurethemes.com/templates/axure-landing-page-template',
	description: 'Rent of excavators in Vologda',
	parentTheme: 'Axit PSD (Axure Themes)',
	version: '1.0',
	author: 'Toshkin Mikhail',
	authorURI: 'https://vk.com/toshkin_mikhail',
	license: 'License',
	licenseURI: 'License URI',
	tags: 'excavators, vologda, contacts, feedback'
};
var options = [];
var value;

for (var optionKey in possibleOptions) {
	if (possibleOptions.hasOwnProperty(optionKey) && project.hasOwnProperty(optionKey)) {
		value = project[optionKey];
		if (Array.isArray(value)) {
			value = value.join(', ');
		}

		options.push([' * ', possibleOptions[optionKey], ': ', value].join(''));
	}
}


module.exports = [
	'/**',
	options.join('\n'),
	' *',
	' * Theme Styles are in the assets/css folder,',
	' * this file is only used for theme initialization',
	' *',
	' * This file is generated automagically by the',
	' * build system. To edit theme styles use the files',
	' * in the "dev theme", in the assets/scss folder',
	' *',
	' * See more at:',
	' * https://github.com/MozaikAgency/wp-theme-starter',
	' *',
	' */'
].join('\n');