const http = require('http');
const path = require('path');
const fs = require('fs');

const server = http.createServer((req, res) => {
    // if(req.url === '/'){
    //      fs.readFile(path.join(__dirname,'../../Web/php/','try.php'),(err,data)=>{
    //          if (err) throw err;
    //          res.writeHead(200,{'localhost':'text/html'});
    //         res.end(data);
    //     });
    //}


    let filepath = path.join(__dirname, '../../Web/html & css', req.url == '/' ? 'try.html' : req.url);
    let extname = path.extname(filepath);
    let conentType = 'text/html';
    switch (extname) {
        case '.js':
            conentType = 'text/javascript';
            break;
        case '.css':
            conentType = 'text/stylesheet';
            break;
        case '.json':
            conentType = 'application/json';
            break;
        case '.png':
            conentType = 'image/png';
            break;
    }

    console.log(filepath);
    res.end();
});
const port = process.env.port || 5000;

server.listen(port, () => {console.log(`server id running on ${port}`)});