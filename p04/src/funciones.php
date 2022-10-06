c<?php

function multiplos5y7($numero) {
    if (($_GET['numero']%5 && $_GET['numero']%7) == 0){
        return $_GET['numero'].' Es multiplo de 5 y 7';
    }
    else{
        return $_GET['numero'].' no es multiplo';
    }
}

function gen_repetitiva($it){
    $it= 1;
    $cont=0;
    for($i=0; $i<$it; $i++){
        for($j=0; $j<3; $j++){
            $array[$i][$j] = rand(1, 100);
            $cont = ++$cont;
        }
        if($it>0){
            $it = ++$it;}
        if($array[$i][0]%2 == 1 && $array[$i][1]%2 == 0 && $array[$i][2]%2 == 1){
            break;
        }
    }
    return $cont.' numeros obtenidos en '.($it-1).' iteraciones';
}

function numero_random_multiplo($numero){
    $i = 0;
    $array[$i] = rand(1, 200);
    while (($array[$i] % $_GET['numero']) != 0) {
        $i++;
        $array[$i] = rand(1, 200);
        if($_GET['numero'] % $array[$i] == 0){
            break;
        }
    }
    return 'Se encontró que el numero '.$array[$i].' es multiplo de '.$_GET['numero'];
}

function numero_random_multiplo_do_while($numero){
    $i = 0;
    $array[$i] = rand(1, 200);
    do {
        $i++;
        $array[$i] = rand(1, 200);
        if($_GET['numero'] % $array[$i] == 0){
            break;
        }
    } while (($array[$i] % $_GET['numero']) != 0);
    return 'Se encontró que el numero '.$array[$i].' es multiplo de '.$_GET['numero'];
}

function indices_array(){
    for($i=97; $i<123; $i++){
        $indices[$i] = chr($i);
    }
    return $indices;
}

function Estacionamiento_placas(){
    //$_POST['matricula'];
    $autos = array();
    $autos['USA0010'] = array(
            'auto' => array(
                'marca' => 'TOYOTA', 'modelo' => 2022, 'tipo' => 'Prius'
            ),
            'propietario' => array(
                'nombre' => 'Iván Hernandez Lora', 'ciudad' => 'Cholula, Pue.', 'direccion' => 'Zerezotla'
            )
        );
    $autos['USA0011'] = array(
            'auto' => array(
                'marca' => 'TOYOTA', 'modelo' => 2019, 'tipo' => 'HILUX DIESEL'
            ),
            'propietario' => array(
                'nombre' => 'Melanie Sanchez Fernandez', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Camino Real'
            )
        );
    $autos['USA0012'] = array(
            'auto' => array(
                'marca' => 'MAZDA', 'modelo' => 2023, 'tipo' => 'CX-5'
            ),
            'propietario' => array(
                'nombre' => 'Jeronimo Francisco Pastrana', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Geo Villas'
            )
        );
    $autos['USA0013'] = array(
            'auto' => array(
                'marca' => 'NISSAN', 'modelo' => 2017, 'tipo' => 'Tsuru'
            ),
            'propietario' => array(
                'nombre' => 'Jesús Enrique Francisco Pérez', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'San Manuel'
            )
        );
    $autos['USA0014'] = array(
            'auto' => array(
                'marca' => 'CHEVROLET', 'modelo' => 2016, 'tipo' => '4X4'
            ),
            'propietario' => array(
                'nombre' => 'Diego Maradona', 'ciudad' => 'Buenos Aires, Argentina', 'direccion' => 'Coraje'
            )
        );
    $autos['USA0015'] = array(
            'auto' => array(
                'marca' => 'MITSUBISHI', 'modelo' => 2022, 'tipo' => 'MIRAGE G4'
            ),
            'propietario' => array(
                'nombre' => 'Andres Manuel Lopez Obrador', 'ciudad' => 'Chalco, EdoMex.', 'direccion' => 'Lomas de la Margarita'
            )
        );
    $autos['USA0016'] = array(
            'auto' => array(
                'marca' => 'CHEVROLET', 'modelo' => 2015, 'tipo' => 'hatchback'
            ),
            'propietario' => array(
                'nombre' => 'Lilia Cedillo', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Ciudad Universitaria'
            )
        );
    $autos['USA0017'] = array(
            'auto' => array(
                'marca' => 'MITSUBISHI', 'modelo' => 1999, 'tipo' => 'Montero Sport'
            ),
            'propietario' => array(
                'nombre' => 'Elian Franco', 'ciudad' => 'Atempan, Pue.', 'direccion' => 'Casajiztan'
            )
        );
    $autos['USA0018'] = array(
            'auto' => array(
                'marca' => 'HONDA', 'modelo' => 2021, 'tipo' => 'sedan lujosa'
            ),
            'propietario' => array(
                'nombre' => 'Pedro Reyes', 'ciudad' => 'Xalapa, Ver.', 'direccion' => 'Los Naranjos'
            )
        );
    $autos['USA0019'] = array(
            'auto' => array(
                'marca' => 'VOLKSWAGEN', 'modelo' => 1950, 'tipo' => 'Vocho'
            ),
            'propietario' => array(
                'nombre' => 'Samuel Garcia', 'ciudad' => 'Madrid, España.', 'direccion' => 'Mormon'
            )
        );
    $autos['USA0020'] = array(
            'auto' => array(
                'marca' => 'HYUNDAI', 'modelo' => 2023, 'tipo' => 'Palisade'
            ),
            'propietario' => array(
                'nombre' => 'Enrique Peña Nieto', 'ciudad' => 'Nezahualcoyotl, EdoMex.', 'direccion' => 'Muy muy abajo'
            )
        );
    $autos['USA0021'] = array(
            'auto' => array(
                'marca' => 'HYUNDAI', 'modelo' => 2020, 'tipo' => 'HB20'
            ),
            'propietario' => array(
                'nombre' => 'Alfonso Esparza', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Profugo'
            )
        );
    $autos['USA0022'] = array(
            'auto' => array(
                'marca' => 'HYUNDAI', 'modelo' => 2017, 'tipo' => 'Accent SD'
            ),
            'propietario' => array(
                'nombre' => 'Belem Mariel Francisco Pérez', 'ciudad' => 'Cholula, Pue.', 'direccion' => 'Explanada'
            )
        );
    $autos['USA0023'] = array(
            'auto' => array(
                'marca' => 'KIA', 'modelo' => 2020, 'tipo' => 'Rio'
            ),
            'propietario' => array(
                'nombre' => 'Maria Elena Pérez Lecona', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Zacatepec'
            )
        );
    $autos['USA0024'] = array(
            'auto' => array(
                'marca' => 'SEAT', 'modelo' => 2023, 'tipo' => 'Arona'
            ),
            'propietario' => array(
                'nombre' => 'Jesús Olvera', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'San Manuel'
            )
        );
    echo '<pre>';
    print_r($autos);
    echo '</pre>';
    $matricula = $_POST['matricula'];
    foreach($autos as $mat => $value){
        if($matricula==$mat){
            echo '<br>La info del auto con la matricula <strong>'.$mat.'</strong> es:<br>';
            echo '<pre>';
            print_r($value);
            echo '</pre>';
        }
    }
}

?>