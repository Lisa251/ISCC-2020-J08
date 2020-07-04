<?php
function recuperer_parametres(){
    foreach($_GET as $key => $element)
     echo 
    "<ul>
    <li>$key</li>
    <li>$element</li>
    </ul>";
}
recuperer_parametres();
?>
