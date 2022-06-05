<?php
function setArchivo($ruta){
    return request()->routeIs($ruta) ? 'activo' : '';
}
?>