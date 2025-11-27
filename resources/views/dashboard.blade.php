@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="center-align">Votos por Municipio</h4>

        <div class="card">
            <div class="card-content"
                style="text-align: center; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                <svg id="mapa" viewBox="-100 70 800 900" style="max-width: 100%; border: 1px solid #ccc;">


                    <polygon id="Puerto_Cortes" data-id="1"
                        points="365,290,366,296,368,301,368,307,369,312,374,312,377,305,377,298,372,292,373,281,366,278,359,278,354,272,356,264,350,265,344,263,346,254,350,248,356,244,344,245,337,245,342,238,348,235,354,230,356,222,362,218,366,224,372,222,373,212,381,210,378,201,377,190,372,183,368,190,367,178,362,172,361,163,362,155,369,158,368,148,374,148,374,140,374,133,376,124,375,116,382,108,389,104,396,100,396,90,400,77,390,89,381,94,374,93,366,96,356,89,342,95,324,100,319,106,312,112,305,116,298,114,290,116,281,115,276,126,285,132,291,133,297,129,301,122,306,119,311,122,310,130,306,136,301,140,295,140,292,147,286,154,280,158,273,164,276,170,277,177,276,183,273,191,273,196,283,196,293,196,306,196,313,196,323,198,326,204,325,211,322,218,318,225,320,231,323,238,326,244,329,252,334,260,340,267,347,274,347,281,352,286,358,288"
                        fill="#ff9999" stroke="#000" stroke-width="3" data-name="Puerto Cortés"></polygon>
                    <polygon id="Choloma" data-id="2"
                        points="223,250,226,243,229,234,236,231,243,227,251,225,256,219,262,212,266,204,273,198,281,198,290,196,298,196,307,196,318,196,326,198,327,206,326,213,325,218,320,221,320,227,320,233,325,237,327,248,329,253,332,259,338,266,344,270,346,277,347,282,352,286,360,289,366,294,368,303,368,309,361,309,356,312,349,315,344,321,339,326,332,327,333,332,332,338,334,347,325,349,313,352,304,347,296,346,288,340,280,338,273,339,268,331,263,323,254,312,248,304,241,295,235,286,229,274,224,260"
                        fill="#99ff99" stroke="#000" stroke-width="3" data-name="Choloma"></polygon>
                    <polygon id="Omoa" data-id="3"
                        points="28,339,33,335,38,329,46,323,53,317,61,311,65,305,72,298,76,291,78,283,85,273,88,264,88,254,95,247,98,251,104,250,111,245,118,243,126,238,130,228,126,219,132,217,142,218,150,224,156,231,162,236,170,240,180,243,190,242,200,233,202,224,200,217,207,211,213,206,220,195,228,190,232,180,233,172,238,171,245,172,251,171,262,168,269,163,276,158,282,155,275,163,275,168,277,176,276,184,274,190,274,195,268,203,258,212,258,218,253,224,244,231,234,233,228,236,226,241,220,254,217,264,216,273,212,280,209,288,206,296,201,299,192,298,185,295,177,292,170,284,160,283,153,284,147,289,141,292,135,296,129,301,126,305,121,309,114,311,109,315,102,318,93,322,84,326,77,328,69,330,61,332,52,334,44,336,33,339"
                        fill="#9999ff" stroke="#000" stroke-width="3" data-name="Omoa"></polygon>
                    <polygon id="San_Pedro_Sula" data-id="4"
                        points="25,343,34,340,46,338,61,333,68,330,78,327,88,323,102,317,113,311,124,304,137,297,150,287,161,283,170,284,176,291,181,295,190,299,195,301,201,301,205,295,209,288,213,281,216,272,220,263,221,251,226,264,228,273,230,281,234,287,239,294,245,303,251,312,257,319,261,326,268,333,271,339,280,337,288,342,300,348,306,352,316,351,325,349,333,347,333,354,332,359,328,363,322,367,317,372,314,377,314,384,309,390,305,396,305,404,305,412,294,421,289,423,289,417,284,413,280,421,278,429,273,434,268,436,262,432,259,438,254,441,245,440,240,436,234,440,228,438,226,444,220,443,214,441,206,443,199,445,191,446,186,449,186,456,183,462,179,466,172,469,164,464,155,457,151,448,143,448,135,444,133,434,130,425,129,417,128,410,128,404,129,390,128,381,116,376,107,372,98,371,87,365,77,362,64,358,48,352,38,347"
                        fill="#ffcc99" stroke="#000" stroke-width="3" data-name="San Pedro Sula"></polygon>
                    <polygon id="La_Lima" data-id="5"
                        points="279,430,278,423,278,415,284,411,289,415,286,420,290,423,296,419,298,412,305,409,306,402,304,394,309,387,313,383,316,372,321,368,328,364,331,357,333,349,334,340,332,330,336,324,342,321,349,316,357,310,364,307,366,314,370,318,373,325,372,331,364,323,358,328,361,335,357,342,352,348,353,355,355,360,356,367,350,362,344,361,345,368,344,374,341,380,344,384,347,388,346,398,351,400,355,404,356,413,353,418,352,423,345,424,343,414,333,414,328,416,330,422,328,427,323,433,316,436,309,435,300,436,295,438,289,443,283,443,280,435"
                        fill="#cc99ff" stroke="#000" stroke-width="3" data-name="La Lima"></polygon>
                    <polygon id="Villanueva" data-id="6"
                        points="180,470,184,462,188,454,192,448,198,444,205,441,213,442,218,441,224,445,228,436,232,441,237,434,244,436,249,440,255,441,258,435,265,436,272,441,276,449,281,457,284,464,285,472,283,478,279,482,280,489,280,496,283,504,284,512,284,520,280,525,269,528,262,526,253,528,248,532,245,539,248,545,249,552,251,559,250,565,253,571,246,574,242,580,236,583,227,586,221,586,215,585,206,582,201,574,200,563,193,554,190,542,192,531,191,515,189,501,189,486,188,475"
                        fill="#99ffcc" stroke="#000" stroke-width="3" data-name="Villanueva"></polygon>
                    <polygon id="San_Manuel" data-id="7"
                        points="270,441,272,434,278,437,283,440,285,445,292,442,297,438,306,437,312,433,318,438,318,430,324,434,328,426,335,422,343,429,348,436,349,445,349,452,341,454,338,461,336,470,333,477,328,483,323,489,320,494,325,495,325,501,318,495,314,502,315,508,308,510,300,512,304,520,298,524,290,521,284,518,281,503,279,493,278,483,281,478,286,470,282,459,276,449"
                        fill="#ff99cc" stroke="#000" stroke-width="3" data-name="San Manuel"></polygon>
                    <polygon id="Pimienta" data-id="8"
                        points="255,571,250,566,249,560,250,551,247,541,246,533,251,529,256,524,262,524,266,527,274,526,282,523,288,520,294,522,297,529,300,537,304,541,300,546,294,544,293,553,292,558,292,564,286,561,277,559,269,560,263,565"
                        fill="#cccc99" stroke="#000" stroke-width="3" data-name="Pimienta"></polygon>
                    <polygon id="SA_De_Cortes" data-id="9"
                        points="196,645,201,636,204,628,209,625,212,617,215,610,218,602,223,596,224,588,228,583,236,583,244,579,248,572,250,579,257,587,260,593,262,602,266,608,271,612,276,619,276,632,280,639,281,647,285,652,288,659,290,666,293,672,292,682,291,688,289,694,282,687,276,688,269,688,262,687,265,694,261,698,255,700,249,700,245,694,241,682,235,681,228,678,221,673,215,672,207,664,200,655"
                        fill="#ff9999" stroke="#000" stroke-width="3" data-name="SA de Cortes"></polygon>
                    <polygon id="Potrerillos" data-id="10"
                        points="277,630,277,622,274,615,268,607,261,602,259,591,255,586,249,579,247,571,252,573,256,567,262,564,267,561,276,559,287,561,292,565,292,571,298,567,299,575,300,583,299,590,300,597,305,599,309,603,300,607,293,613,296,620,298,629,300,637,298,643,296,650,292,659,285,651,281,640"
                        fill="#99ff99" stroke="#000" stroke-width="3" data-name=Potrerillos"></polygon>
                    <polygon id="Santa_Cruz_De_Yojoa" data-id="11"
                        points="237,744,242,747,251,748,260,751,269,750,276,749,281,743,289,735,289,723,289,712,289,702,289,692,293,680,293,669,292,661,293,655,296,647,297,640,300,634,299,626,298,618,293,612,300,607,308,601,315,600,322,601,328,605,331,609,336,615,338,619,341,623,346,622,352,622,356,627,362,626,365,631,365,636,370,639,377,635,384,641,390,651,397,654,398,661,397,668,396,676,392,683,390,691,389,699,390,706,393,713,395,719,394,725,393,730,392,737,394,743,398,750,397,757,392,767,386,770,381,773,373,777,372,787,366,785,364,791,358,795,352,798,346,801,339,806,335,810,335,815,329,822,322,831,316,838,308,845,300,851,293,857,283,866,277,870,274,877,269,881,262,878,257,866,257,857,257,849,259,841,260,833,261,825,253,818,246,810,244,799,245,787,238,786,230,791,230,779,232,769,232,755"
                        fill="#9999ff" stroke="#000" stroke-width="3" data-name="Santa Cruz de Yojoa"></polygon>
                    <polygon id="SAF De Yojoa" data-id="12"
                        points="236,743,240,744,246,746,254,751,265,751,275,750,282,745,288,738,290,728,290,715,290,705,287,692,281,686,274,686,268,690,262,686,266,695,259,698,254,700,248,701,242,705,242,713,242,719,242,729,242,734,236,743"
                        fill="#ffcc99" stroke="#000" stroke-width="3" data-name="SAF De Yojoa"></polygon>
                </svg>

                <div class="tooltip" id="tooltip"></div>
            </div>
        </div>
</div>

<!-- Modal de votos -->
<div id="modal-votos" class="modal">
    <div class="modal-content">
        <h5 id="modal-municipio-nombre">Votos por Candidato</h5>
        <table class="highlight" id="tabla-votos">
            <thead>
                <tr>
                    <th>Candidato</th>
                    <th>Votos</th>
                </tr>
            </thead>
            <tbody>
                <!-- Se llena dinámicamente -->
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <button id="btnExportarExcel" class="btn green waves-effect waves-light">
            📊 Exportar a Excel
        </button>
        <a href="#!" class="modal-close btn red">Cerrar</a>
    </div>
</div>

<style>
.tooltip {
    position: absolute;
    background: rgba(0,0,0,0.75);
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    display: none;
    pointer-events: none;
    font-size: 13px;
    white-space: pre-line;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tooltip = document.getElementById('tooltip');
    const votosMunicipios = @json($municipiosVotos); // {idMunicipio: {candidato: votos,...}, ...}
    const modal = document.getElementById('modal-votos');
    const tablaBody = document.querySelector('#tabla-votos tbody');
    const modalTitulo = document.getElementById('modal-municipio-nombre');
    const btnExportar = document.getElementById('btnExportarExcel');

    let municipioActual = ""; // guardará el nombre del municipio activo

    // Inicializar modal de Materialize
    M.Modal.init(modal);

    document.querySelectorAll('svg polygon').forEach(poly => {
        const municipioId = poly.dataset.id;
        const municipioNombre = poly.dataset.name;

        // Tooltip solo con el nombre
        poly.addEventListener('mouseover', e => {
            tooltip.style.display = 'block';
            tooltip.textContent = municipioNombre;
            poly.setAttribute('fill-opacity', '0.7');
        });

        poly.addEventListener('mousemove', e => {
            tooltip.style.top = (e.pageY + 10) + 'px';
            tooltip.style.left = (e.pageX + 10) + 'px';
        });

        poly.addEventListener('mouseout', e => {
            tooltip.style.display = 'none';
            poly.setAttribute('fill-opacity', '1');
        });

        // Click para mostrar modal con tabla de votos
        poly.addEventListener('click', e => {
            const votos = votosMunicipios[municipioId] || {};
            tablaBody.innerHTML = '';

            // Ordenar votos descendente y llenar tabla
            Object.entries(votos)
                .sort((a,b) => b[1]-a[1])
                .forEach(([candidato, cantidad]) => {
                    const tr = document.createElement('tr');
                    tr.innerHTML = `<td>${candidato}</td><td>${cantidad}</td>`;
                    tablaBody.appendChild(tr);
                });

            municipioActual = municipioNombre;
            modalTitulo.textContent = `Votos en ${municipioNombre}`;
            const instance = M.Modal.getInstance(modal);
            instance.open();
        });
    });

    // Exportar tabla a Excel
    btnExportar.addEventListener('click', function() {
        const tablaClon = document.getElementById('tabla-votos').cloneNode(true);

        // Convertir la tabla a HTML
        const html = `
            <html xmlns:o="urn:schemas-microsoft-com:office:office"
                  xmlns:x="urn:schemas-microsoft-com:office:excel"
                  xmlns="http://www.w3.org/TR/REC-html40">
            <head><meta charset="UTF-8"></head>
            <body>
                <h3>Resultados - ${municipioActual}</h3>
                ${tablaClon.outerHTML}
            </body>
            </html>
        `;

        // Crear archivo Excel
        const blob = new Blob([html], { type: 'application/vnd.ms-excel' });
        const url = URL.createObjectURL(blob);

        // Descargar el archivo
        const a = document.createElement('a');
        a.href = url;
        a.download = `votos_${municipioActual.replace(/\s+/g, '_')}.xls`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    });
});
</script>
@endsection
