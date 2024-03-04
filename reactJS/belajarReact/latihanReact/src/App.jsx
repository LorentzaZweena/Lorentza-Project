import { useState } from 'react';
import Header from './components/Header';

function App() {
  const students = ['Ariva', 'Zweena', 'Ariva Zweena'];
  const [likes, setLikes] = useState(0);
  function handleClick(){
    setLikes(likes + 1);
  }
  return(
  <>
    <Header name="Zweena"/>
  <ul>
    {
      students.map((students) => (
      <li key={students}>{students}</li>
      ))
    }
  </ul>
    <button onClick={handleClick}>Like ({likes})</button>
  </>
  );
}

export default App;
