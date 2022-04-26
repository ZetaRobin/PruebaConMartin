<?php

function lanzar_mensaje( $mensajes ){
    
    $mensajes = urldecode( $mensajes );
    
    echo "
        <script>
            window.alert( '$mensajes' );
        </script>
    ";
}
