from flask import Flask, Response
import mysql.connector

app = Flask(__name__)

# Configuración de la base de datos (reemplaza con tus propios datos)
db_config = {
    "host": "localhost",
    "user": "root",
    "password": "",
    "database": "movies"
}

# Función para obtener datos de la base de datos
def get_data_from_db():
    connection = mysql.connector.connect(**db_config)
    cursor = connection.cursor(dictionary=True)

    # Ejecuta una consulta SQL para obtener datos
    query = "SELECT id, user, comment FROM comments"
    cursor.execute(query)

    data = cursor.fetchall()

    cursor.close()
    connection.close()

    return data

@app.route('/api/data', methods=['GET'])
def get_data():
    data = get_data_from_db()

    # Generar XML
    xml_data = '<?xml version="1.0" encoding="UTF-8"?>\n<data>\n'
    for item in data:
        xml_data += f'  <item>\n    <id>{item["id"]}</id>\n    <user>{item["user"]}</user>\n    <comment>{item["comment"]}</comment>\n  </item>\n'
    xml_data += '</data>'

    return Response(xml_data, content_type='application/xml')

if __name__ == '__main__':
    app.run(debug=True)
