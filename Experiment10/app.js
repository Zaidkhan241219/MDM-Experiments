import React, { useState, useEffect } from "react";
import axios from "axios";

function App() {
  const [users, setUsers] = useState([]);
  const [search, setSearch] = useState("");


  useEffect(() => {
    axios
      .get("https://jsonplaceholder.typicode.com/users")
      .then((res) => {
        setUsers(res.data);
      });
  }, []);


  const filteredUsers = users.filter((user) =>
    user.name.toLowerCase().includes(search.toLowerCase())
  );

  return (
    <div style={styles.container}>
      <h1>User Search App</h1>

      <input
        type="text"
        placeholder="Search user..."
        value={search}
        onChange={(e) => setSearch(e.target.value)}
        style={styles.input}
      />

      <div style={styles.cardContainer}>
        {filteredUsers.map((user) => (
          <div key={user.id} style={styles.card}>
            <h3>{user.name}</h3>
            <p>{user.email}</p>
            <p>{user.address.city}</p>
          </div>
        ))}
      </div>
    </div>
  );
}

const styles = {
  container: {
    textAlign: "center",
    padding: "20px",
  },

  input: {
    padding: "10px",
    width: "250px",
    marginBottom: "20px",
    borderRadius: "8px",
    border: "1px solid gray",
  },

  cardContainer: {
    display: "flex",
    flexWrap: "wrap",
    justifyContent: "center",
    gap: "15px",
  },

  card: {
    background: "#f5f5f5",
    padding: "15px",
    borderRadius: "10px",
    width: "200px",
    boxShadow: "0 5px 10px rgba(0,0,0,0.1)",
  },
};

export default App;