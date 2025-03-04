import React, {useState} from "react";
import './App.css';
import BotonComponent from "./components/BotonComponent";
function App(){
  const [resultado, setResultado]=useState();

  const obtenerResultado=() =>{
    setResultado('holaaaaaaa')
  }

return(
  <div className="App">
    <h1>saludo </h1>
    <BotonComponent obtenerResultado={obtenerResultado}> </BotonComponent>
  {resultado && <p>{resultado}</p>}
  </div>
)
}
export default App;