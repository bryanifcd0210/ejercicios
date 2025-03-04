import React from "react";
function BotonComponent({ obtenerResultado}) {
    return(
        <button onClick={obtenerResultado}>
            pulsar para obtener reultado
        </button>
    );
}
export default BotonComponent;