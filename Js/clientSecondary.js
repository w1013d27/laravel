let http = require('http');
let options = {
    host: 'localhost',
    port: 8124,
    path: '/?file=secondary',
    method: 'get'
};

let processPublicTimeline = function (response) {

    console.log('finished request');
};

for (let i = 0; i < 20000; i++){
    http.request(options,processPublicTimeline).end();
}
