import React, { useState, useEffect } from "react";

function App() {
  const [count, setCount] = useState(0);

  // useEffect for side effect
  useEffect(() => {
    document.title = "Count: " + count;
  }, [count]);

  return (
    <div style={{ textAlign: "center", marginTop: "50px" }}>
      <h1>Counter App</h1>
      <h2>{count}</h2>

      <button onClick={() => setCount(count + 1)}>Increase</button>
      <button onClick={() => setCount(count - 1)}>Decrease</button>
      <button onClick={() => setCount(0)}>Reset</button>
    </div>
  );
}

export default App;