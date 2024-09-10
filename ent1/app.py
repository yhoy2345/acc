from flask import Flask, render_template, request, redirect, session, jsonify
import pymysql

app = Flask(__name__)
app.secret_key = 'your_secret_key'  # Necesario para las sesiones

# Conexión a la base de datos
def get_db_connection():
    return pymysql.connect(
        host='localhost',
        user='root',
        password='ellanoteama',
        db='persona',
        cursorclass=pymysql.cursors.DictCursor
    )

@app.route('/login', methods=['GET', 'POST'])
def login():
    if request.method == 'POST':
        nombre = request.form['nombre']
        password = request.form['password']
        session['nombre'] = nombre

        connection = get_db_connection()
        with connection.cursor() as cursor:
            sql = "SELECT * FROM usuarios WHERE nombre = %s AND password = %s"
            cursor.execute(sql, (nombre, password))
            user = cursor.fetchone()

        connection.close()

        if user:
            return redirect('/usuario')
        else:
            session.pop('nombre', None)
            return redirect('/login')
    return render_template('login.html')

@app.route('/usuario')
def usuario():
    return render_template('usuario.html')

@app.route('/editar_usuario/<int:id>', methods=['GET', 'POST'])
def editar_usuario(id):
    connection = get_db_connection()
    if request.method == 'POST':
        nombre = request.form['nombre']
        correo = request.form['correo']
        telefono = request.form['telefono']
        direccion = request.form['direccion']
        fecha_nacimiento = request.form['fecha_nacimiento']
        genero = request.form['genero']
        preferencias_estilo = request.form['preferencias_estilo']
        password = request.form['password']

        with connection.cursor() as cursor:
            sql = """
                UPDATE usuarios
                SET nombre = %s, correo = %s, telefono = %s, direccion = %s, 
                    fecha_nacimiento = %s, genero = %s, preferencias_estilo = %s, password = %s
                WHERE id = %s
            """
            cursor.execute(sql, (nombre, correo, telefono, direccion, fecha_nacimiento, genero, preferencias_estilo, password, id))
        connection.commit()
        connection.close()

        return redirect('/usuario')
    
    with connection.cursor() as cursor:
        sql = "SELECT * FROM usuarios WHERE id = %s"
        cursor.execute(sql, (id,))
        usuario = cursor.fetchone()

    connection.close()

    return render_template('editar_usuario.html', usuario=usuario)

@app.route('/eliminar_usuario/<int:id>', methods=['GET', 'POST'])
def eliminar_usuario(id):
    if request.method == 'POST':
        connection = get_db_connection()
        with connection.cursor() as cursor:
            sql = "DELETE FROM usuarios WHERE id = %s"
            cursor.execute(sql, (id,))
        connection.commit()
        connection.close()
        return redirect('/usuario')
    return render_template('eliminar_usuario.html', id=id)

@app.route('/carrito', methods=['GET'])
def carrito():
    if 'carrito' not in session:
        session['carrito'] = []
    
    total = sum(item['precio'] for item in session['carrito'])
    return jsonify({'total': total})

if __name__ == '__main__':
    app.run(debug=True)
