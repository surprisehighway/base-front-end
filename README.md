Base Front End
=========================

This a Surprise Highway starter project for front-end workflow and mockups. It features some sensible base styles and initial markup for building mockups.

Asset and Directory Structure
---------------

<pre>
.
├── <strong>gulp-tasks</strong> <small>(tasks defined in gulpfile.babel.js)</small>
├── <strong>public</strong>
│   ├── assets
│   │   ├── components <small>(bower-installed components)</small>
│   │   ├── <strong>dist</strong> <small>(js and css compiled from source)</small>
│   │   ├── img <small>(site design assets)</small>
│   │   └── vendor
│   └── mockups
│       ├── _includes <small>(php header, footer, and functions)</small>
│       ├── assets <small>(mockup assets - not to be used in production)</small>
│       ├── default.php <small>(placeholder)</small>
│       ├── home.php <small>(placeholder)</small>
│       ├── index.php <small>(mockups index)</small>
│       └── <strong>styleguide.php</strong>
├── <strong>source</strong> <small>(source scripts and styles)</small>
│   ├── js <small>(source scripts)</small>
│   └── scss  <small>(source styles)</small>
├── .babelrc <small>(Babel configuration file)</small>
├── .bowerrc <small>(Sets the bower path)</small>
├── .factory <small>(Tasks to run after SH Factory site generation)</small>
├── .nvmrc <small>(Node version to use for nvm)</small>
├── bower.json <small>(Bower packages manifest)</small>
├── gulpfile.babel.json <small>(gulp configuration)</small>
├── package.json <small>(NPM packages manifest)</small>
└── README.md <small>(Project read me file)</small>
</pre>


Frontend Workflow
---------------

This project uses [Sass](http://sass-lang.com) to process and compile CSS. [Gulp](http://gulpjs.com/) is used to monitor files, run node-sass, minify css, concatenate and minify javascript, and enable [BrowserSync](https://www.browsersync.io) for local development.

For developers that have not used Gulp before follow the first set of directions "Getting started with Gulp for the first time." If Node and Gulp have already been installed, please follow "Using Gulp with pre-existing projects." A short primer on creating a Gulp project from scratch is also included below.

#### Getting started with Gulp for the first time.

The preferred workflow is to use [nvm](https://github.com/creationix/nvm/blob/master/README.md#install-script). This will act as a wrapper to install and use the correct version of node as defined in `.nvmrc`.

1. CD to the project root.
2. If using nvm, install the [Gulp CLI](https://www.npmjs.com/package/gulp-cli) only and node will use the local project gulp using:<br>  `$ sudo npm install gulp-cli -g`<br>-- OR --<br>install the full [Gulp](http://gulpjs.com/) package globally using:<br>`$ sudo npm install gulp -g`.
3. In `gulpfile.babel.js` set the name of your local host to proxy for BrowserSync.
4. Run `$ npm install` to install each node package as defined in the project's packages.json dependency list.
5. Now, just run `$ gulp` to start watch tasks (defined in `gulpfile.babel.js`).

#### Using Gulp with pre-existing projects.

1. Clone this repo locally and CD to the project root.
2. In `gulpfile.babel.js` set the name of your local host to proxy for BrowserSync.
3. If using nvm, run `$ nvm use` (or `$ nvm install`) to use the Node version specified in `.nvmrc`.
4. Run `$ npm install` to install each node package as defined in the project's packages.json dependency list.
5. Run `$ gulp` to start watch tasks (defined in gulpfile.js). You're all set, get to work!

##### Notes:

You can also just run `$ gulp dist` to manually re-compile assets without using or launching BrowserSync.

BrowserSync can run a static server, but in this case we need to define the `local_proxy` running php for our mockups. This would be the hostname you set up locally using MAMP or Vagrant.

Gulp will revision the compiled assets using gulp-rev and a manifest is created in the `/public/assets/dist` directory. There is a php function included in the mockups that reads the manifest and outputs the revved asset filename.


Mockups
---------------
[www.example.com/mockups/](http://www.example.com/mockups/)

Static HTML mockups are placed in the public/mockups folder. The index file lists and links to all of the static mockup files.

PHP includes for the header, footer and any other partials that are reused across a number of mockups are in the `_includes` directory.

There are two sets of assets. One set of CSS, JS and image assets for production and development use; stored in the `public/assets` directory. And one for proof of concept demonstrations in `public/mockups/assets`; these are for quick and dirty experiments only. Do not use mockup assets within the production and development asset pipleline.

Ideally, the asset paths in the mockups are absolute (e.g. /assets/css/styles.css not ../assets/css/styles.css). We usually accomplish this by using MAMP or Vagrant to run a local virtual server.

Environments
---------------

**Development:**
[example.development.com](http://example.development.com)
Password protected site for developer sandbox and QA.

**Local:**
[example.dev](http://example.dev)
The bleeding edge hosted on developers' local machines using MAMP.

Deployment
---------------
We use [DeployHQ](http://deployhq.com/) for code deployment.

DeployHQ watches the Git repository. When you push to the development or staging branches DeployHQ notices and automatically pushes those changes to the development and staging servers.

Production deployments are manually initiated using the DeployHQ website.

Website Specifics
--------------------------
### Include any additional documentation here
