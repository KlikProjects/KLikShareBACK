const fs = require ( 'fs ' );
const key = fs.readFileSync ( './ localhost / localhost.decrypted.key ' );
const cert = fs.readFileSync ( './ localhost / lo calhost.crt ' );
const express = require ( 'express ' );
const app = express()app.get ( '/ ' , (req, res, next) => {res.status ( 200 ) .send ( '¡Hola, mundo ' )});
const https = require ( 'https ' );
const server = https.createServer ({key, cert}, app);
const port = 3000 server.listen (port, () => { consola .log ( `El servidor escucha en https: // localhost: $ {port} ` )});
