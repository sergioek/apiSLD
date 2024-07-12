<!-- resources/views/reporte_licencias.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Licencias</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #ffff;
        }

        .text{
            color:red;

        }
    </style>
</head>
<body>
    <div>
        <div>
            <table>
                <tr>
                    <th colSpan="2"><h3>DIRECCIÓN GENERAL DE NIVEL SECUNDARIO</h3></th>
                    <th>ANEXO RESOLUCIÓN Nº</th>
                    <th colSpan="3"><h3>PLANILLA A2 - LICENCIAS</h3></th>
                
                </tr>
                <tr>
                    <th>ESTABLECIMIENTO: <span class="text" >ESCUELA TÉCNICA Nº12</span></th>
                    <th>Domicilio: <span class="text" >José Cheein y Libertad S/N</span></th>
                    <th>LOCALIDAD: <span class="text" >FERNÁNDEZ</span></th>
                    <th>DPTO: <span class="text" >ROBLES</span></th>
                    <th>MES: <span class="text" >JUNIO</span></th>
                    <th>AÑO: <span class="text" >2024</span></th>
                </tr>
                <tr>
                    <th>HORARIO DE FUNCIONAMIENTO: <span class="text">7:30 a 12:30 / 14:00 a 18:00</span></th>
                    <th>TELEFAX:</th>
                    <th colSpan="4">E-MAIL: <span class="text">esctecnica12@gmail.com</span></th>
                </tr>
            </table>

            <table>
                <thead>
                    <tr>
                        <th rowSpan="3">Orden Nº</th>
                        <th rowSpan="3">Apellido y Nombre</th>
                        <th rowSpan="3">C.U.I.L. Nº</th>
                        <th rowSpan="3">Cargo</th>
                        <th colSpan="3">Que</th>
                        <th colSpan="4">Justificadas</th>
                        <th rowSpan="3">Total de Lic.con 100 % de Haberes</th>
                        <th rowSpan="3">Total de Lic. Con 50 % de Haberes</th>
                        <th rowSpan="2" colSpan="2">Injustificadas</th>
                        <th rowSpan="3">Número de tardanzas</th>
                        <th rowSpan="2" colSpan="5">A descontar</th>
                        <th rowSpan="2" colSpan="2">Lic. sin goce de sueldo</th>
                        <th rowSpan="3">Observaciones</th>
                    </tr>
                    <tr>
                        <th rowSpan="2">T</th>
                        <th rowSpan="2">I</th>
                        <th rowSpan="2">S</th>
                        <th colSpan="2">Lic. por salud</th>
                        <th colSpan="2">Otras Lic.</th>
                    </tr>
                    <tr>
                        <th>Art.</th>
                        <th>Lapso</th>
                        <th>Art.</th>
                        <th>Lapso</th>
                        <th>Lapso</th>
                        <th>Días</th>
                        <th>Como Tit.</th>
                        <th>Como Int.</th>
                        <th>Como Supl.</th>
                        <th>Inasist.</th>
                        <th>Causa del Desc.</th>
                        <th>Expte.</th>
                        <th>Artículo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($licencias as $index => $licencia)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{$licencia->apellidos}}</td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div>
                <p>FIRMA DIRECTOR</p>
                <p>FIRMA RECEPCIÓN</p>
                <p>FIRMA RECEPCIÓN</p>
                <p>ACLARACIÓN</p>
                <p>FIRMA ANALISTA</p>
            </div>
        </div>
    </div>
</body>
</html>
