<?php

namespace Database\Seeders\Silabo;

use App\Models\Silabo\Resultado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Resultado = [
            [
                'resultado' => 'RE01: Aplica conocimientos de matemáticas, ciencias e ingeniería en la solución de problemas complejos relacionados al área de ingeniería de sistemas.',
            ],[
                'resultado' => 'RE02: Identifica, formula, busca información y analiza problemas complejos de ingeniería de sistemas para llegar a conclusiones fundamentadas usando principios básicos de matemáticas y ciencias de la ingeniería.',
            ],[
                'resultado' => 'RE03: Diseña soluciones y productos para problemas complejos de ingeniería y diseña sistemas de información, componentes o procesos para satisfacer necesidades deseadas dentro de restricciones realistas vinculadas a los aspectos socioeconómicos, ambientales, éticos, legales, de salud pública y de seguridad.',
            ],[
                'resultado' => 'RE04: Conduce indagaciones de problemas complejos de ingeniería usando conocimientos basados en la investigación y métodos de investigación incluyendo el diseño y la conducción de experimentos, el análisis y la interpretación de información, y la síntesis de información para producir conclusiones válidas.',
            ],[
                'resultado' => 'RE05: Uso de Herramientas Modernas: Crea, selecciona y utiliza técnicas, habilidades, recursos y herramientas modernas de la ingeniería y las tecnologías de la información, incluyendo la predicción y el modelamiento, con la comprensión de sus limitaciones.',
            ],[
                'resultado' => 'RE06: Aplica el razonamiento informado mediante el conocimiento contextual para evaluar cuestiones sociales, de salud, de seguridad, legales y culturales y las consecuentes responsabilidades relevantes para la práctica profesional de la ingeniería de sistemas.',
            ],[
                'resultado' => 'RE07: Comprende y evalúa el impacto de las soluciones a problemas complejos de ingeniería de sistemas en un contexto global, económico, ambiental y social.',
            ],[
                'resultado' => 'RE08: Aplica principios éticos y se compromete con la ética profesional y las responsabilidades y normas de la práctica de la ingeniería.',
            ],[
                'resultado' => 'RE09: Se desenvuelve eficazmente como individuo, como miembro o líder de equipos diversos.',
            ],[
                'resultado' => 'RE10: Se comunica eficazmente, mediante la comprensión y redacción de informes y documentación de diseño, la realización de exposiciones, y la transmisión y recepción de instrucciones claras.',
            ],[
                'resultado' => 'RE11: Demuestra conocimiento y comprensión de los principios de gestión en ingeniería y la toma de decisiones económicas, y su respectiva aplicación.',
            ],[
                'resultado' => 'RE12: Reconoce la necesidad del aprendizaje permanente y la encara en el más amplio contexto de los cambios tecnológicos.',
            ]
        ];

        Resultado::insert($Resultado);
    }
}
