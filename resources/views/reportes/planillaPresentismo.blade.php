<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Presentismo</title>
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
            text-align:start;
            padding: 8px;
        }

        h3,
        h4 {
            text-align: center;
        }

        span{
            font-weight: normal;
        }
      
        .textData-red {
            color: red;
            font-weight: bolder;
        }
        .textData-black{
            color: black;
            font-weight: bolder;
        }
       
        .center {
            text-align: center;
        }

        .title{
            font-size: 18px;
        }
        .subtitle{
            font-size: 13px;
            text-align: center;
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
            column-span: 7;
        }

        thead{
            display: table-header-group;
            border: solid 3px black;
        }

        tbody{
            display: table-row-group;
        
        }

        .firmas {
            height: 160px;
            vertical-align:bottom;
            border: none !important; 
            text-align: center;  
        }
    </style>

</head>

<body>
    <div>
        <div>

            <table>
                <thead style="display:table-header-group;">
         
                    <tr>
                        <th colspan="7"><span>Nivel: </span><span class="textData-black">DIRECCIÓN GENERAL DE NIVEL SECUNDARIO</span></th>
                    </tr>
                    <tr>
                        <th colspan="3"><span>Establecimiento: </span><span class="textData-red">ESCUELA TÉCNICA N°12</span></th>

                        <th colspan="4"><span>Liquidador: </span><span class="textData-red">Sra. MÓNICA CORONEL</span></th>
                    </tr>

                    <tr>
                        <th colspan="7"><span>CUE N°: </span><span class="textData-black">8602249-00</span></th>
                    </tr>

                    <tr>
                        <th colspan="4">
                            <span>Categoría: </span>
                            <span class="textData-black">Primera</span>
                        </th>
                        <th colspan="3">
                            <span>Zona: </span>
                            <span class="textData-black">"A"</span>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="7"><span>Dirección: </span><span class="textData-black">Calle José Cheein y Libertad S/N°</span></th>
                    </tr>

                    <tr>
                        <th colspan="2">
                            <span>Ciudad: </span>
                            <span class="textData-black">FERNÁNDEZ</span>
                        </th>
                        <th colspan="2">
                            <span>Dpto: </span>
                            <span class="textData-black">Robles</span>
                        </th>

                        <th colspan="3">
                            <span>Provincia: </span>
                            <span class="textData-black">Santiago del Estero</span>
                        </th>
                    </tr>

                    <tr>
                        <th colspan="7" class="center title">
                            <span class="textData-black">PLANILLA MENSUAL PARA DESCUENTO DE </span>
                            <span class="textData-red">PESENTISMO {{$mes . " DE " . $año}}</span>
                        </th>
                    </tr>



                    <tr>
                        <th class="subtitle">ORDEN</th>
                        <th class="subtitle">APELLIDO Y NOMBRE</th>
                        <th class="subtitle">CARGO</th>
                        <th class="subtitle">LIC. ART</th>
                        <th class="subtitle">TOTAL DÍAS</th>
                        <th class="subtitle">FECHA</th>
                        <th class="subtitle">N° CONTROL</th>
                    </tr>
                </thead>

                <tbody>


                    @foreach ($licencias as $index => $licencia)

                        
                        <tr>
                            <td class="center">{{$index+1}}</td>
                            <td style="white-space:nowrap;">{{ strtoupper($licencia->apellidos) . ',' . $licencia->nombres }}</td>
                            <td class="center">{{$licencia->cargo}}</td>
                            <td class="center">{{$licencia->articulo}}</td>
                            <td class="center">{{$licencia->dias . " día/s"}}</td>
                            @php
                                $finicio = new DateTime($licencia->finicio);
                                $finicio = $finicio->format('d-m');

                                $ffinal = new DateTime($licencia->ffinal);

                                $ffinal = $ffinal->format('d-m');

                            @endphp
                            <td class="center">{{$finicio . ' a ' . $ffinal}}</td>
                            <td class="center">{{$licencia->numeroControl}}</td>
                        </tr>


                    @if (is_int(($index+1) /15))
   
                         <tr>
                            <th class="firmas" colspan="4">SELLO</th>
                            <th class="firmas" colspan="3">FIRMA</th>
                         </tr>
                         <div class="page-number"></div>
                         
                    @endif

                    @endforeach     
                                  <tr>
                            <th class="firmas" colspan="4">SELLO</th>
                            <th class="firmas" colspan="3">FIRMA</th>
                         </tr>
                         <div class="page-number"></div>
                     
                </tbody>
            </table>
                                    

        </div>
              
                       
                
    </div>
</body>
</html>
