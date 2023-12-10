import React, { useState, useEffect } from 'react';

function App() {
    const [message, setMessage] = useState('');

    useEffect(() => {
        // Fetch data from the backend API when the component mounts
        fetch('/api/message')
            .then((response) => response.json())
            .then((data) => {
                setMessage(data.message);
            })
            .catch((error) => {
                console.error('Error fetching data:', error);
            });
    }, []);

    return (
        <div className="App">
            <h1>Frontend connected to Backend</h1>
            <p>Message from the backend: {message}</p>
        </div>
    );
}

export default App;

