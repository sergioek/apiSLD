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

        th,
        td {
            border: 1px solid black;
            text-align: left;
            white-space: wrap;
        }

        td {
            font-size: 13px;
            padding-left: 3px;
            padding-right: 3px;
            
        }

        th {
            background-color: #ffff;
            text-align: center;
            padding: 8px;
        }

        h3,
        h4 {
            text-align: center;
        }

        .text {
            color: red;

        }
        .titulos{
            font-size: 20px;
        }

        .firmas {
            height: 140px;
            vertical-align:bottom;
            border: none;
           
              
        }

        .center {
            text-align: center;
        }

        .titular {
            color: blue;
        }

        .suplente {
            color: red;
        }

        .interino {
            color: black;
        }

        .contratado {
            color: green;
        }


         @page {
            margin-top: 50px;
            margin-left: 30px;
            margin-right: 30px;
            margin-bottom: 70px;
        }

        .page-number{
            position: fixed;
            bottom: -10px;
            left: 0px;
            right: 0px;
            height: auto;
            text-align: center; 
            font-size: 20px;
            font-style: oblique;
            background-color: white;
            border: solid 1px black;
            border-collapse: collapse;
            width: 100%;
            
            
        }

        .page-number:before {
            content: "Página " counter(page) " de <?php echo $pages; ?>";
            column-span: 24;
        }

        thead{
            display: table-header-group;
            border: solid 3px black;
        }

        tbody{
            display: table-row-group;
        }
    </style>

</head>

<body>
    <div>
        <div>

            <table>
                <thead style="display:table-header-group;">
                    <tr>
                        <th colspan="8" class="titulos">DIRECCIÓN GENERAL DE NIVEL SECUNDARIO</th>
                        <th colspan="8" class="titulos">ANEXO RESOLUCIÓN Nº</th>
                        <th colspan="8" class="titulos">PLANILLA A2 LICENCIAS</th>
                    </tr>

                <tr>
                    <th colspan="8">ESTABLECIMIENTO: <span class="text">ESCUELA TÉCNICA Nº12</span></th>
                    <th colspan="6">Domicilio: <span class="text">José Cheein y Libertad S/N</span></th>
                    <th colspan="4">LOCALIDAD: <span class="text">FERNÁNDEZ</span></th>
                    <th colspan="3">DPTO: <span class="text">ROBLES</span></th>
                    <th colspan="2">MES: <span class="text">{{$mes}}</span></th>
                    <th colspan="1">AÑO: <span class="text">{{$año}}</span></th>
                </tr>

                <tr>
                    <th colspan="8" style="font-size: 14px">HORARIO DE FUNCIONAMIENTO: <span class="text">7:30 a 12:30 / 14:00 a 18:00</span></th>
                    <th colspan="8">TELEFAX:</th>
                    <th colSpan="8">E-MAIL: <span class="text">esctecnica12@gmail.com</span></th>
                </tr>
                    
                    <tr>
                        <th rowSpan="3">Nº</th>
                        <th rowSpan="3" style="white-space:nowrap;">Apellido y Nombre</th>
                        <th rowSpan="3" style="white-space: nowrap;">C.U.I.L. Nº</th>
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
                        @php
                            $clase = 'titular';

                            if ($licencia->caracter == 'Suplente') {
                                $clase = 'suplente';
                            } elseif ($licencia->caracter == 'Interino') {
                                $clase = 'interino';
                            }

                            if ($licencia->caracter == 'Contratado') {
                                $clase = 'contratado';
                            }

                        @endphp
                        <tr class={{ $clase }}>
                            <td class="center">{{ $index + 1 }}</td>
                            <td style="white-space:nowrap;">{{ strtoupper($licencia->apellidos) . ',' . $licencia->nombres }}</td>
                            <td class="center">
                                {{ $licencia->prefixCUIL . '-' . $licencia->dni . '-' . $licencia->postfixCUIL }}</td>
                            <td class="center">{{ $licencia->cargo }}</td>
                            <td class="center">{{ $licencia->caracter == 'Titular' ? 'X' : '' }}</td>
                            <td class="center">{{ $licencia->caracter == 'Interino' ? 'X' : '' }}</td>
                            <td class="center">{{ $licencia->caracter == 'Suplente' ? 'X' : '' }}</td>

                            <td class="center">
                                @if ($licencia->injustificada == 'NO')
                                    {{ str_contains($licencia->denominacion, 'Enfermedad') ? $licencia->articulo : '' }}
                                @endif

                            </td>

                            @php
                                $finicio = new DateTime($licencia->finicio);
                                $finicio = $finicio->format('d-m');

                                $ffinal = new DateTime($licencia->ffinal);

                                $ffinal = $ffinal->format('d-m');

                            @endphp
                            <td class="center">

                                @if ($licencia->injustificada == 'NO')
                                    {{ str_contains($licencia->denominacion, 'Enfermedad') ? $finicio . ' a ' . $ffinal : '' }}
                                @endif

                            </td>

                            <td class="center">
                                @if ($licencia->injustificada == 'NO')
                                    {{ !str_contains($licencia->denominacion, 'Enfermedad') ? $licencia->articulo : '' }}
                                @endif

                            </td>

                            <td class="center">

                                @if ($licencia->injustificada == 'NO')
                                    {{ !str_contains($licencia->denominacion, 'Enfermedad') ? $finicio . ' a ' . $ffinal : '' }}
                                @endif

                            </td>


                            <td class="center">
                                @if ($licencia->totalHaberes == '100%' && $licencia->injustificada == 'NO')
                                    @if ($licencia->cargo == 'Catedrático/a')
                                        {{ $licencia->horas . ' oblig.' }}
                                    @else
                                        {{ $licencia->dias . ' día/s' }}
                                    @endif
                                @endif
                            </td>


                            <td class="center">
                                @if ($licencia->totalHaberes == '50%' && $licencia->injustificada == 'NO')
                                    @if ($licencia->cargo == 'Catedrático/a')
                                        {{ $licencia->horas . ' oblig.' }}
                                    @else
                                        {{ $licencia->dias . ' día/s' }}
                                    @endif
                                @endif
                            </td>

                            <td class="center">
                                {{ $licencia->injustificada == 'SI' ? $finicio . ' a ' . $ffinal : '' }}
                            </td>

                            <td class="center">
                                @if ($licencia->injustificada == 'SI')
                                    @if ($licencia->cargo == 'Catedrático/a')
                                        {{ $licencia->horas . ' oblig.' }}
                                    @else
                                        {{ $licencia->dias . ' día/s' }}
                                    @endif
                                @endif

                            </td>

                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{ $licencia->observaciones }}</td>
                        </tr>

                        @if (is_int(($index+1) /11))
                        <tr>
                            <th colspan="5" class="firmas">FIRMA DIRECTOR</th>
                            <th colspan="5" class="firmas">FIRMA RECEPCIÓN</th>
                            <th colspan="5" class="firmas">FIRMA RECEPCIÓN</th>
                            <th colspan="4" class="firmas">ACLARACIÓN</th>
                            <th colspan="5" class="firmas">FIRMA ANALISTA</th>
                         </tr>
                     
                         <div class="page-number"></div>
                         
                        @endif
                        
                    @endforeach   
                        
                        <tr>
                            <th colspan="5" class="firmas">FIRMA DIRECTOR</th>
                            <th colspan="5" class="firmas">FIRMA RECEPCIÓN</th>
                            <th colspan="5" class="firmas">FIRMA RECEPCIÓN</th>
                            <th colspan="4" class="firmas">ACLARACIÓN</th>
                            <th colspan="5" class="firmas">FIRMA ANALISTA</th>
                         </tr> 
                        
                         <div class="page-number"></div>
                         
                </tbody>
            </table>
                                    

        </div>
              
                       
                
    </div>
</body>
</html>
