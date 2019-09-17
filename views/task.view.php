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
                <label for="user">User</label>
                <input type="text" name="user">
                <label for="password">Password</label>
                <input type="password" name="password">
                <button type="submit">Login</button>
               
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
                $id = $student->id_alumno;
                $html .=    '<form action="eliminarAlumno" method="post">
                <tr>
                <td>'.$student->nombre.'</td>
                                    <td>'.$student->apellido.'</td>
                                    <td>'.$student->dni.'</td>
                                    <td>'.$student->id_especialidad.'</td>
                                    <td><input type="submit" name="btn"value="'.$id.'"></td>
                                    </tr>
                                    </form>';
                            // if($student->id_especialidad== 1){
                                // $html .= '<td>Inormatica</td>';
                            // }
                            // if($student->id_especialidad== 2){
                            //     $html .= '<td>Electromecanica</td>';
                            // }
                            $html .='</tr>
                            </form>';
            }       
            $html .=    '</tbody>
                    </table>
                </body>
            </html>';
            echo $html;
        }

        public function showAdmin($students) {
            $h = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="../css/style.css">
                <title>Administrador</title>
            </head>
            <body>  
                <form action="cargaralumno" method="POST">
                <table>
                    <thead>
                        <th>
                            <label for="nombre">Nombre</label>
                        </th>
                        <th>
                            <label for="apellido">Apellido</label>
                        </th>
                        <th>
                            <label for="dni">DNI</label>
                        </th>
                        <th>
                            <label for="id_especialidad">Especialidad</label>
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" name="nombre">
                            </td>
                            <td>
                                <input type="text" name="apellido">
                            </td>
                            <td>
                                <input type="text" name="dni">
                            </td>
                            <td>
                                <input type="text" name="id_especialidad">
                            </td>
                            <td>
                            <button type="submit">Cargar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>';

            foreach($students as $student) {
                $h .=    '<tr>
                                <td>'.$student->nombre.'</td>
                                <td>'.$student->apellido.'</td>
                                <td>'.$student->dni.'</td>
                                <td>'.$student->id_especialidad.'</td>';
                $h .='</tr>';
            }     
        $h .= '</body>
        </html>';
        echo $h;
        }
    }