const path = require('path')
const { VueLoaderPlugin } = require('vue-loader')
const StyleLintPlugin = require('stylelint-webpack-plugin')
const ESLintWebpackPlugin = require('eslint-webpack-plugin')

const eslintOptions = {
	extensions: [`js`, `ts`, `.vue`],
	exclude: [`node_modules`],
}

const config = {
	entry: path.join(__dirname, 'src', 'sidebarloader.js'),
	output: {
		path: path.resolve(__dirname, './js'),
		publicPath: '/js/',
		filename: `personssidebar.js`,
		chunkFilename: 'chunks/[name]-[hash].js',
	},
	module: {
		rules: [
			{
				test: /\.css$/,
				use: ['vue-style-loader', 'css-loader'],
			},
			{
				test: /\.scss$/,
				use: ['vue-style-loader', 'css-loader', 'sass-loader'],
			},
			{
				test: /\.vue$/,
				loader: 'vue-loader',
				exclude: /node_modules/,
			},
			{
				test: /\.js$/,
				loader: 'babel-loader',
				exclude: /node_modules/,
			},
		],
	},
	plugins: [
		new VueLoaderPlugin(),
		new StyleLintPlugin(),
		new ESLintWebpackPlugin(eslintOptions)
	],
	resolve: {
		extensions: ['*', '.js', '.vue'],
		symlinks: false,
	},
}

module.exports = config
