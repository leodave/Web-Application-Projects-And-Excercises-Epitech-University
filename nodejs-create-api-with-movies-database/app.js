const express = require("express");
var cors = require("cors");
const mysql = require("mysql");
const app = express();
app.use(cors()); //https://expressjs.com/en/resources/middleware/cors.html#simple-usage-enable-all-cors-requests

const my = mysql.createConnection({
  host: "localhost",
  port: "3306",
  user: "david",
  password: "0912115246",
  database: "movies",
});

app.get("/api/movies", (req, res) => {
  const sql = "select * from movies where id<=20";

  my.query(sql, (error, result) => {
    if (error) throw error;
    if (result.length > 0) {
      res.json(result);
    } else {
      res.send("No movie available");
    }
  });
});
app.get("/api/movies/:id", function (req, res) {
  const sql = "select * from movies where id=?";
  const id = req.params.id;

  my.query(sql, [id], function (error, result, fields) {
    if (error) throw error;
    if (result.length >= 0) {
      res.json(result);
    } else {
      res.send("No movie available");
    }

    // res.send(id);
  });
});
app.get("/api/movies/:id/genres", function (req, res) {
  const sql =
    "select genres.name from movies inner join genres on genres.id=movies.genre_id where movies.id=?";
  const id = req.params.id;

  my.query(sql, [id], function (error, result, fields) {
    if (error) throw error;
    if (result.length >= 0) {
      res.json(result);
    } else {
      res.send("No movie available");
    }

    // res.send(id);
  });
});
app.get("/api/movies/:id/producers", function (req, res) {
  const sql =
    "select producers.name from movies inner join producers on producers.id=movies.producer_id where movies.id=?";
  const id = req.params.id;

  my.query(sql, [id], function (error, result, fields) {
    if (error) throw error;
    if (result.length > 0) {
      res.json(result);
    } else {
      res.send("No movie available");
    }

    // res.send(id);
  });
});
const port = process.env.PORT || 3000;
app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});
