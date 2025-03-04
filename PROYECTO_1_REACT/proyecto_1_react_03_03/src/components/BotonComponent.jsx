import React from 'react';

function BotonComponent({ changeMessage }) {
  return (
    <button onClick={changeMessage}>
      Cambiar Saludo
    </button>
  );
}

export default BotonComponent;
