const express = require('express');
const app = express();
const PORT = 3000;

// Example endpoint that returns a message
app.get('/api/message', (req, res) => {
    res.json({ message: 'Hello from the backend!' });
});

app.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`);
});

