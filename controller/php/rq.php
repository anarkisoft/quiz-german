<?php

if (isset($_POST['name'])) {
    if ($_POST['name'] == 'valid') {
        crearTabla();
    }
}

function crearTabla() {
    $tabla = '<table class="table table-bordered" >
                <tbody>
                    <tr>
                        <td>
                            <img id="img1" src="controller/img/img1.jpg" alt="Disco 1" class="img-circle">
                        </td>
                        <td><img id="img2" src="controller/img/img2.jpg" alt="Disco 2" class="img-circle"></td>
                        <td><img id="img3" src="controller/img/img3.jpg" alt="Disco 3" class="img-circle"></td>
                    </tr>
                    <tr>
                        <td><img id="img4" src="controller/img/img4.jpg" alt="Disco 4" class="img-circle"></td>
                        <td><img id="img5" src="controller/img/img5.jpg" alt="Disco 5" class="img-circle"></td>
                        <td><img id="img6" src="controller/img/img1.jpg" alt="Disco 6" class="img-circle"></td>
                    </tr>
                    <tr>
                        <td><img id="img7" src="controller/img/img2.jpg" alt="Disco 7" class="img-circle"></td>
                        <td><img id="img8" src="controller/img/img3.jpg" alt="Disco 8" class="img-circle"></td>
                        <td><img id="img9" src="controller/img/img4.jpg" alt="Disco 9" class="img-circle"></td>
                    </tr>
                </tbody>
            </table>';
    
    
    $value = array("tabla" => $tabla);
    echo json_encode($value);
}

?>