var mysql = require('mysql');
var con = mysql.createConnection({
  host: 127.0.0.1:3306,
  user: "sumit123",
  password: "sumit123"
});

con.connect(function(err){
  if(err) throw err;
  console.log("Connected");
});
