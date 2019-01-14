var Twit = require('twit');
var config = require('./config');
var T = new Twit(config);

var mysql = require('mysql');

var link = "";
var author = "";
var name = "";

var conn = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "nodejs"
});

function music()
{
        conn.query('SELECT * FROM music ORDER BY RAND() LIMIT 1', function (err, rows, fields) {
        if (err)
        {
          throw err;
        }
        link = rows[0].link;
        name = rows[0].name;
        author = rows[0].author;
        console.log(link);
        console.log(name);
        console.log(author);
        T.post('statuses/update', { status:  "@" + author + ":" + name + " https://www.youtube.com/watch?v=" + link }, function(err, data, response)
        {
            console.log(data);
        });
        });
        //uncomment to delete a link once it is posted.
        /*conn.query("DELETE FROM music WHERE name =" + conn.escape(name), function (err, rows, fields) {
        if (err)
        {
            throw err;
        }
      });*/
}

music();
setInterval(music, 3600000);
