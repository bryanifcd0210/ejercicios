import "./App.css";
import HeaderComponent from './components/HeaderComponent';
import BotonComponent from './components/BotonComponent.jsx';  // Verifica que el nombre del archivo sea correcto (BotonComponent.jsx)
import { useState } from "react";

function App() {
  const [saludos, setSaludos] = useState("Bienvenido a la primera semana de Marzo");

  // Función para cambiar el mensaje de saludo
  const cambiarSaludo = () => {
    setSaludos("¡Hola, React!");
  };

  return (
    <>
      <HeaderComponent saludos={saludos} />
      <BotonComponent changeMessage={cambiarSaludo} />
    </>
  );
}

export default App;
