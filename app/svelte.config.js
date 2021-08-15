import adapter from '@sveltejs/adapter-node';

/** @type {import('@sveltejs/kit').Config} */
const config = {
	kit: {
		// hydrate the <div id="svelte"> element in src/app.html
		target: '#svelte',
		adapter: adapter({
			// default options are shown
			out: 'build',
			precompress: false,
			env: {
				host: '0.0.0.0',
				port: '3000'
			}
		}),
		vite: () => ({
			server: {
				watch: {
					usePolling: true
				} 
			}
		})
	}
};

export default config;
