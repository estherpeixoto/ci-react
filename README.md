# CodeIgniter 4 + React.js

## Getting started

From your project root, run:

- Bootstrap Vite: `php spark vite:init --framework react`
- Install your node dependencies: `npm install`
- Start vite server: `npm run dev`
- Start CI server: `php spark serve` or access it through your virtual host.

> NOTE:
>
> `npm run dev` is not where you should work, it main purpose is to serve assets, such as scripts or stylesheets. once you build your files, it becomes useless but as long as it running, the package will use it instead of the bundled files. So make sure to access your project from ci server or a vitual host.

## Build your files

To bundle your files, run:

```npm run build```

This command will generate the bundled assets in your public directory. But as we said before, as long as vite server is running, the package will use it instead of bundled files, so make sure to stop it when you're done developing.

## Support

Please support the original developer of the package: [mihatori/codeignitervite](https://github.com/firtadokei/codeigniter-vitejs).
