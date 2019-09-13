<?php
    class TaskView {
        function showHome($students) {
            $html = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="../css/style.css">
                <title>Alumnos</title>
            </head>
            <body>
            <form action="administrador" method="post">
                <label for="nombre">User
                <input type="text" name="usuario">
                </label>
                <label for="contrasenia">Pasword
                <input type="text" name="contrasenia">
                <button type="submit">Login</button>
                </label>
            </form>
            <table>
                <thead>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                    <th>Especialidad</th>
                </thead>
                <tbody>';
            foreach($students as $student) {
                $html .=    '<tr>
                                <td>'.$student->nombre.'</td>
                                <td>'.$student->apellido.'</td>
                                <td>'.$student->dni.'</td>
                                <td>'.$student->id_especialidad.'</td>';
                            // if($student->id_especialidad== 1){
                            // $html .= '<td>Inormatica</td>';
                            // }
                            // if($student->id_especialidad== 2){
                            //     $html .= '<td>Electromecanica</td>';
                            // }
                $html .='</tr>';
            }       
            $html .=    '</tbody>
                    </table>
                </body>
            </html>';
            echo $html;
        }
    }