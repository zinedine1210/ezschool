const mysql = require('mysql');


// buat konfigurasi koneksi
const koneksi = mysql.createConnection({
    host: '127.0.0.1',
    user: 'root',
    password: '',
    database: 'ezschool',
    socketPath: '/var/run/mysqld/mysqld.sock'
});

// koneksi database
koneksi.connect((err) => {
    if (err) {
        console.error('error connecting: ' + err.stack);
        return;
    }

    console.log('connected as id ' + connection.threadId);
});