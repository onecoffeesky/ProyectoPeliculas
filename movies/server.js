const express = require('express');
const app = express();
const port = 3001; // Puedes usar cualquier puerto que desees

app.use(express.static(__dirname)); // Sirve los archivos estáticos desde el directorio actual

app.listen(port, () => {
  console.log(`Servidor web local en http://localhost:${port}`);
});
