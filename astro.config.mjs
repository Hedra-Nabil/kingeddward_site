import { defineConfig } from 'astro/config';

export default defineConfig({
  site: 'https://kingedwardtravel.com',
  trailingSlash: 'never',
  build: {
    format: 'file'
  }
});
