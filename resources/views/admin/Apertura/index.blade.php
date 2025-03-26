@extends('adminlte::page')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

@section('content')
<div class="container">
    <h1>Lista de Aperturas</h1>

    <!-- Botón para agregar aperturas -->
    <a href="{{ route('admin.Apertura.create') }}" class="btn btn-success mb-4">Agregar Apertura</a>

    <!-- Filtros -->
    <form method="GET" action="{{ route('admin.Apertura.index') }}" id="filtro-form">
    <div class="row">
        <div class="col-md-4">
            <label for="periodo">Periodo:</label>
            <select name="periodo" id="periodo" class="form-control">
    <!-- Opción por defecto -->
    <option value="">Seleccione un periodo</option>
    
    <!-- Opciones dinámicas -->
    @foreach ($periodos as $periodo)
        <option value="{{ $periodo->id }}" {{ request('periodo') == $periodo->id ? 'selected' : '' }}>
            {{ $periodo->periodo }}
        </option>
    @endforeach
</select>
        </div>
        <div class="col-md-4">
            <label for="ciclo">Ciclo:</label>
            <select name="ciclo" id="ciclo" class="form-control">
            <option value="">Seleccione un ciclo</option>
        
            </select>
        </div>
        <div class="col-md-4">
            <label>&nbsp;</label>
            <button  type="submit" class="btn btn-primary btn-block" >Filtrar</button>
        </div>
    </div>
</form>
<div class="container mt-5">
    
  <!-- Tabla de resultados -->
  <table class=" table table-bordered" id="tabla-aperturas" name="tabla-aperturas" >
        <thead>
            <tr>
                <th>Curso</th>
                <th>ciclo</th>
                <th>Periodo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($aperturas as $apertura)
                <tr>
                    <td>{{ $apertura->curso }}</td>
                    <td>{{ $apertura->ciclo }}</td>
                    <td>{{ $apertura->periodo }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" class="text-center">No hay aperturas disponibles.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    </div>
    <div class="pdf-buttons-container" style="text-align: center; margin-top: 20px;">
    <div style="display: inline-block; margin-right: 10px;">
        <a href="{{ route('admin.Apertura.generarPDF', ['periodo' => request('periodo'), 'ciclo' => request('ciclo')]) }}" 
           class="btn btn-danger" 
           id="generar-pdf1">
            <i class="fas fa-file-pdf"></i> Generar PDF 
        </a>
        <p style="margin-top: 5px; font-size: 12px; color: #555;">Reporte detallado de aperturas</p>
    </div>
    <div style="display: inline-block;">
        <a href="{{ route('admin.reportes.estadistico', ['pdf' => true, 'periodo' => request('periodo'), 'ciclo' => request('ciclo')]) }}" 
           class="btn btn-danger" 
           id="generar-pdf2">
            <i class="fas fa-chart-bar"></i> Generar PDF 
        </a>
        <p style="margin-top: 5px; font-size: 12px; color: #555;">Reporte de aperturas en todos los peridos</p>
    </div>
</div>


<script>



document.addEventListener('DOMContentLoaded', function () {
    const tablaAperturas = document.getElementById('tabla-aperturas');
    const form = document.getElementById('filtro-form');

    // Prevenir el comportamiento por defecto si necesitas usar AJAX en el futuro
    form.addEventListener('submit', function (e) {
        // Eliminar la clase d-none para hacer visible la tabla
        tablaAperturas.classList.remove('d-none');
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const periodoSelect = document.getElementById('periodo');
    const cicloSelect = document.getElementById('ciclo');
  //  const tablaResultados = document.querySelector('.table');
    const formulario = document.querySelector('form');
    const pdfButton = document.getElementById('generar-pdf');

    // Inicialmente, ocultar la tabla y el botón PDF
  //  tablaResultados.style.display = 'none';
    
  
    // Actualizar los ciclos cuando se seleccione un período
    periodoSelect.addEventListener('change', function () {
     
        const periodoId = this.value;
        const ciclosUrl = "{{ route('admin.Apertura.ciclos') }}";

        // Limpiar las opciones del select de ciclos
        cicloSelect.innerHTML = '<option value="">Seleccione un ciclo</option>';
       
        if (periodoId) {
            fetch(`${ciclosUrl}?periodo=${periodoId}`)
    .then(response => response.json())
    .then(data => {
        console.log(data); // Inspecciona qué llega
        data.ciclos.forEach(ciclo => {
            const option = document.createElement('option');
            option.value = ciclo.ciclo;
            option.textContent = ciclo.ciclo;
            cicloSelect.appendChild(option);
        });
    })
    .catch(error => console.error('Error al cargar ciclos:', error));
        }
    });

    
})
</script>

<script>
    
        document.addEventListener('keydown', function(event) {
            
            // Detecta si la tecla F8 fue presionada
            if (event.key === 'F8') {
                
                event.preventDefault(); // Previene el comportamiento por defecto de F8
                window.open('/ayudaApertura/GuiaAperturaDeCursos/index.html', '_blank'); // Abre el archivo de ayuda en una nueva pestaña
            }
        });
    </script>

@endsection
