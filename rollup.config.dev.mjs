import nodeResolve from "@rollup/plugin-node-resolve";
import commonjs from "@rollup/plugin-commonjs";
import postcss from 'rollup-plugin-postcss';
import autoprefixer from 'autoprefixer';

export default {
  input: "assets/js/main.js",
  watch: {
    include: ['assets/js/**', 'assets/scss/**'],
    exclude: ['node_modules/**']
  },
  output: [
    {
      dir: 'assets/bundle',
      entryFileNames: 'js/bundle.js',
      format: "iife",
      name: "version",
    },
  ],
  plugins: [
    postcss({
      extensions: ['.scss', '.css'],
      extract: 'css/bundle.css',
      minimize: false,
      plugins: [autoprefixer()],
    }),
    nodeResolve(),
    commonjs(),
  ],
};
