module.exports = {
  darkMode: 'class',
	theme: {
  	extend: {
  	}
	},

	variants: {
		extend: {
     		fontWeight: ['hover', 'focus']
  	}
	},
  	
	plugins: [
		require('@tailwindcss/forms'),
	]
};
