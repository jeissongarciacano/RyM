var express = require('express');
var mysql = require('mysql');
var connect = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'database',
});
RTCPeerConnection.connect(function(error){
    if(!!error){
        console.log('error');
    } else{
        console.log('connected');
    }
});
app.get('/', function(req, resp){
    connection.query("SELECT * FROM database", function(error,rows, fields){
        if(!!error){
            console.log('Error in the query');
        }else{
            console.log('successful query');
        }
    });
});
app.listen(1337);