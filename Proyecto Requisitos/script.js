var express = require('express');
var mysql = require('mysql');
var connect = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
})
