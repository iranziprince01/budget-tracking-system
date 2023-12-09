const express = require('express');
const mysql = require('mysql');
const bodyParser = require('body-parser');

const app = express();
app.use(bodyParser.json());

const db = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'password',
  database: 'budget_tracker',
});

db.connect((error) => {
  if (error) {
    console.error('Error connecting to MySQL database:', error);
    throw error;
  }
  console.log('Connected to MySQL database!');
});

app.post('/api/register', (req, res) => {
  const { name, email } = req.body;

  if (!name || !email) {
    return res.status(400).send('Name and email are required.');
  }

  const sql = 'INSERT INTO users (name, email) VALUES (?, ?)';
  db.query(sql, [name, email], (error, result) => {
    if (error) {
      console.error('Error registering user:', error);
      return res.status(500).send('Error creating user.');
    }
    res.status(201).send('User created!');
  });
});

app.post('/api/transaction', (req, res) => {
  const { amount, category, description } = req.body;

  if (!amount || !category || !description) {
    return res.status(400).send('Amount, category, and description are required.');
  }

  const sql = 'INSERT INTO transactions (amount, category, description) VALUES (?, ?, ?)';
  db.query(sql, [amount, category, description], (error, result) => {
    if (error) {
      console.error('Error logging transaction:', error);
      return res.status(500).send('Error saving transaction.');
    }
    res.status(201).send('Transaction saved!');
  });
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});
