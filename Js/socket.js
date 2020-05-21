
let repl = require('repl'), net = require('net');
/*
let context = repl.start("node via stdin>", null,null,null,true).context;
context.http = require('http');
context.util = require('util');
context.os = require('os');

*/


net.createServer(function (socket) {

    repl.start("node via TCP socket> ",socket);
}).listen(8114);

/*
const nr = require('netcat-repl');
nr({
    port: 8389,
    verbose: true
});

 */
