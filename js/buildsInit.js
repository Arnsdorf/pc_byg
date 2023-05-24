// buildsInit.js
const buildModules = [
    "./js/builds.js",
    "./js/builds1.js",
    "./js/builds2.js",
    "./js/builds3.js",
    "./js/builds4.js",
    "./js/builds5.js"
];


buildModules.forEach(modulePath => {
    import(modulePath)
        .then(BuildsModule => {
            const builds = new BuildsModule.default();
            builds.init();
        })
        .catch(error => console.error(error));
});
