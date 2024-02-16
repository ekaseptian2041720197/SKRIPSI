import{defineConfig}from'vite';
importlaravelfrom'laravel-vite-plugin';

exportdefaultdefineConfig({
plugins:[
laravel({
input:['resources/css/app.css','resources/js/app.js'],
refresh:true,
}),
],
});
