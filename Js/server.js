/*

let http = require('http');
http.createServer(function (req,res) {
res.writeHead(200,{'content-type':'text/plain'});
res.end("Hello,World!\n");
}).listen(8124);
console.log('Server running on 8124');

*/
let http = require('http');
let fs = require('fs');
let counter = 0;
function writeNumbers(res) {

     // counter = 0;
    for (let i = 0; i < 100; i++){
        counter ++;
        res.write(counter.toString()+ '\n');
    }
}

http.createServer(function (req,res) {

    let query = require('url').parse(req.url).query;
     app = require('querystring').parse(query).file + '.txt';


    res.writeHead(200,{'content-type':'text/plain'});
    writeNumbers(res);

    setTimeout(function () {

            console.log('opening  ' + app);
            fs.readFile(app, 'utf8', function (err, data) {

                    if (err)
                        res.write('Could not find or open file for reading \n');
                    else {
                        res.write(data);
                    }
                    res.end();
                }
            );
        }


    ,2000);
}).listen(8124);

