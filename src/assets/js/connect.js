import { createConnection } from 'mysql';


let connection = createConnection({
    
  host: 'nl-srv-web324.main-hosting.eu',
	user: 'u671633553_simpleCB',
	password: 'simpleCB@db69',
	database: 'u671633553_simpleCB'
});

connection.connect(function(err) {
    if (err) {
      return console.error('error: ' + err.message);
    }
  
    console.log('Connected to the MySQL server.');
  });

  connection.query('SELECT * FROM prompts',(err,rows)=>{
    if(err) throw err;
    console.log('Data received form DB:')
    console.log(rows);
  });