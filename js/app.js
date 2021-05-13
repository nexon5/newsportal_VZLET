const mysql = require('mysql');
const { config } = require('process');

const conn = mysql.createConnection(
{
    host: "localhost",
    user: "root",
    database: "user-bd"
});

conn.connect(err => {
    if(err){
        return console.error("ERROR: " + err.message);
    }
    else {
        console.log("DATABASE ------------ OK");
    }
});

let query = "SELECT * FROM users";

conn.query(query, (err, result) =>{
    console.log(err);
    console.log(result);
});

conn.end(err => {
    if(err){
        return console.error("ERROR: " + err.message);
    }
    else {
        console.log("DATABASE ------------ CLOSE");
    }
});