const mariadb = require('mariadb');
const express = require('express');
const app = express();

const pool = mariadb.createPool({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'trestristestigres'
});

app.get('/consultar-datos', async (req, res) => {
  let conn;
  try {
    conn = await pool.getConnection();
    const rows = await conn.query('SELECT * FROM user_information');
    res.json(rows);
  } catch (err) {
    throw err;
  } finally {
    if (conn) return conn.end();
  }
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Aplicación Node.js en ejecución en el puerto ${PORT}`);
});
