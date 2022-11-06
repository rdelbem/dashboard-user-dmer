// Webpack uses this to work with directories
const path = require('path');
const TerserPlugin = require("terser-webpack-plugin");

// This is the main configuration object.
// Here, you write different options and tell Webpack what to do
module.exports = {

  // Path to your entry point. From this file Webpack will begin its work
  entry: './src/assets/js/index.js',

  // Path and filename of your result bundle.
  // Webpack will bundle all JavaScript into this file
  output: {
    path: path.resolve(__dirname, './src/assets/js-dist'),
    publicPath: '',
    filename: 'bundle.js'
  },
  optimization: {
    minimize: true,
    minimizer: [new TerserPlugin()],
  },

  // Default mode for Webpack is production.
  // Depending on mode Webpack will apply different things
  // on the final bundle. For now, we don't need production's JavaScript 
  // minifying and other things, so let's set mode to development
  mode: 'development'
};