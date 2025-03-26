<?php

namespace Database\Seeders\Silabo;

use App\Models\Silabo\Referencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReferenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Referencia = [
            #PRIMER AÑO
            #Arquitectura y organizacion de computadoras
            [
                'referencia' => 'CORRES, Jesus y BARIÁIN, Cándido (2017).  Programación de Microcontroladores PIC en Lenguaje C. Editorial Marcombo. 1era ed. España. 350p. ISBN:  8426724272, 978-8426724274',
                'silabo_id' => 1
            ],[
                'referencia' => 'PATTERSON, David A. y HENNESSY John L. (2011) Estructura y diseño de computadores: La interfaz Translated by Javier Díaz Bruguera. Editorial Reverté, S.A. 4ta Ed, USA. 913p. ISBN 8429126201, 9788429126204.',
                'silabo_id' => 1
            ],[
                'referencia' => 'STALLINGS, William (2006). Organización y Arquitectura de Computadores. Editorial Pearson Prentice Hall, 7ta. ed , España. 840p. ISBN: 8489660824 ISBN-13: 9788489660823 En línea: https://www.academia.edu/22218951/Organizaci%C3%B3n_y_Arquitectura_de_Computadores_William_St allings_-_7ta_edici%C3%B3n.pdf',
                'silabo_id' => 1
            ],[
                'referencia' => 'ANGULO. Jose y GUTIERREZ, José.(2005). Arquitectura de Microprocesadores. Los Pentium a fondo. Editorial Thomson. 2da ed., Madrid, España. 464p. ISBN: 9788497322423',
                'silabo_id' => 1
            ],[
                'referencia' => 'PEREZ, Fernando y CARRATERO, Jesús. (2003). Problemas de Sistemas Operativos. De la base al diseño.  S.A. MCGRAW-HILL / INTERAMERICANA DE ESPAÑA. 2da ed., Madrid, España. 470p. ISBN: 9788448139919',
                'silabo_id' => 1
            ],


            #Ingenieria de datos I
            [
                'referencia' => 'SQL Server 2016. Aprende a administrar una base de datos transaccional',
                'silabo_id' => 2
            ],[
                'referencia' => 'SQL Server. Despliegue, Operación y Programación de una base de datos',
                'silabo_id' => 2
            ],[
                'referencia' => 'Bases de datos - Desarrollo de aplicaciones Multiplataformas y Web',
                'silabo_id' => 2
            ],


            #Tecnologias web
            [
                'referencia' => 'MARTIN, Bean “Laravel 5 Essentials”. 1ª Edición. Editorial Packt Publishing. Reino Unido 2015. ISBN: 978-1-78528-301-7',
                'silabo_id' => 3
            ],[
                'referencia' => 'GAUCHAT, Juan Diego. “El gran libro de HTML5, CSS3 y Javascript”. Barcelona España. Editorial Marcombo. 2012. 354 p. ISBN 978-84-267-1782-5',
                'silabo_id' => 3
            ],[
                'referencia' => 'MATTHEW, MacDonald “Creación y diseño web”. Ediciones Anaya Multimedia. España. 2016. ISBN: 9978-84-415-3742-2',
                'silabo_id' => 3
            ],


            #Tecnologias web
            [
                'referencia' => 'Laudon, K. y Laudon, J. (2016). Sistemas de información gerencial. 14ª ed. México, D.F. Pearson.',
                'silabo_id' => 4
            ],[
                'referencia' => 'Beynon-Davies, Paul. (2014). Sistemas de Información. Ed. Reverté, S.A. España. ',
                'silabo_id' => 4
            ],[
                'referencia' => 'Stair, R. y Reynolds, G. (2013). Principles of Information Systems. (11° ed.). Boston: Cengage Learning.',
                'silabo_id' => 4
            ],[
                'referencia' => 'ANDREU, RAFAEL; RICART, JOAN E; VALOR JOSEP. (1996). Estrategia y Sistemas de Información. 2da edición. España: Editorial McGraw Hill. ',
                'silabo_id' => 4
            ],[
                'referencia' => 'CORONEL, MORRIS, ROB. (2011). Bases de datos. Diseño, implementación y administración. 9na edición. Ed. Cengage Learning',
                'silabo_id' => 4
            ],


            #Ingenieria de datos II
            [
                'referencia' => 'SQL Server 2016. Aprende a administrar una base de datos transaccional',
                'silabo_id' => 5
            ],[
                'referencia' => 'SQL Server. Despliegue, Operación y Programación de una base de datos',
                'silabo_id' => 5
            ],[
                'referencia' => 'SQL Server 2012',
                'silabo_id' => 5
            ],[
                'referencia' => 'Bases de datos - Desarrollo de aplicaciones Multiplataformas y Web',
                'silabo_id' => 5
            ],


            #Sistemas operativos
            [
                'referencia' => 'STALLINGS, William (2005). Sinopsis de SISTEMAS OPERATIVOS: ASPECTOS INTERNOS Y PRINCIPIOS DE DISEÑO. Editorial Pearson Prentice Hall, 5ta. ed., España. 208p. ISBN: 9788420544625 en línea: http://cotana.informatica.edu.bo/downloads/Sistemas%20Operativos.pdf.',
                'silabo_id' => 6
            ],[
                'referencia' => 'PONS, Nicolas. (2020) Linux. Practique con los comandos básicos: ejercicios y respuestas. Editorial Thomson. 3ra ed., Barcelona, España. 208p. ISBN: 9782409026492',
                'silabo_id' => 6
            ],[
                'referencia' => 'PEREZ, Fernando y CARRATERO, Jesús. (2003). Problemas de Sistemas Operativos. De la base al diseño.  S.A. MCGRAW-HILL / INTERAMERICANA DE ESPAÑA. 2da ed., Madrid, España. 470p. ISBN: 9788448139919',
                'silabo_id' => 6
            ],[
                'referencia' => 'RAMOS, Antonio y GARCIA, Jean. (2015). Instala, administra, securiza y virtualiza entornos Linux. Editorial Ra-Ma, 1ra ed., Madrid. España. 399p. ISBN: 978-84-9964-144-7.',
                'silabo_id' => 6
            ],[
                'referencia' => 'TANENBAUM, Andrew S. (2009). Sistemas operativos modernos. Editorial PEARSON EDUCACIÓN., 3ra ed., México., 1104p., ISBN: 978-607-442-046-3. En línea: https://es.pdfdrive.com/descarga-del-libro-sistemas-operativos-3-ed-andrew-tanenbaum-d18060001.html',
                'silabo_id' => 6
            ],


            #Ingenieria de requerimientos
            [
                'referencia' => 'Beynon-Davies, Paul. (2014). Sistemas de Información. Ed. Reverté, S.A. España. ',
                'silabo_id' => 7
            ],[
                'referencia' => 'Bourque, P. & Fairley, R.E. (2014). Guide to the Software Engineering Body of Knowledge (SWEBOK), Version 3.0. IEEE Computer Society. Retrieved July 07, 2014, from www.swebok.org.',
                'silabo_id' => 7
            ],[
                'referencia' => 'Mulla Nilofar, Girase Sheetal. (2012). A new approach to requirement elicitation based on stakeholder recommendation and collaborative filtering, international journal of software engineering & applications (IJSEA) - EBSCO, 3(3), 51 - 61.',
                'silabo_id' => 7
            ],[
                'referencia' => 'Pressman, R. (2010). Ingeniería de Software: Un enfoque práctico (7th ed.). New York: McGraw-Hill higher education.',
                'silabo_id' => 7
            ],[
                'referencia' => 'Sommerville, I. (2011).  Ingeniería de Software (9th ed.). Boston: Addison-Wesley.',
                'silabo_id' => 7
            ],[
                'referencia' => 'Riunaudo, L. & Pantaleo, G. (2015). Ingeniería de software (1ra ed.).  Alfa y Omega',
                'silabo_id' => 7
            ],


            #Sistemas inteligentes
            [
                'referencia' => 'GARCIA Serrano Alberto. Inteligencia Artificial: Fundamentos, Práctica y Aplicaciones. Editorial Libros RC.2012 ',
                'silabo_id' => 8
            ],[
                'referencia' => 'PAJARES, Martin; SANZ, Gonzalo. Inteligencia artificial e Ingeniería del Conocimiento. EE.UU. Addison-Wesley Iberoamericana. 2da ed. Rama editorial, 2012 384p. ISBN 978-84-7897- 676-8',
                'silabo_id' => 8
            ],[
                'referencia' => 'NILSSON, Nils J. Inteligencia Artificial: Una Mera Síntesis. Editorial McGraw Hill.2014.',
                'silabo_id' => 8
            ],[
                'referencia' => 'MARTÍN DE BRIO, Bonifacio; SANZ, Alfredo. Redes Neuronales y sistemas borrosos. 3era ed. México D.F.: Alfaomega, 2007. P ISBN: 9789701512500',
                'silabo_id' => 8
            ],[
                'referencia' => 'FERNÁNDEZ, Gil. Sistemas expertos: Representación e inferencia. Problemas resueltos. 1era ed. Madrid: Dykinson, 2010. p. ISBN: 9788498499995',
                'silabo_id' => 8
            ],


            #Ingenieria de software I
            [
                'referencia' => 'Bruegge, B., & Dutoit, A. H. (2002). Ingeniería de software orientado a objetos (Primera ed.). México D.F., México: Pearson.',
                'silabo_id' => 9
            ],[
                'referencia' => 'Fowler, M., & Scott, K. (1999). UML gota a gota (Primera ed.). México D.F., México: Pearson.',
                'silabo_id' => 9
            ],[
                'referencia' => 'Gibert Ginestà, M., & Peña González, Á. (2005). Ingeniería del software en entornos de SL (Segunda ed.). Barcelona, España: Eureca Media, SL.',
                'silabo_id' => 9
            ],[
                'referencia' => 'Gómez Fuentes, M. d., Cervantes Ojeda, J., & González Pérez, P. P. (2019). Fundamentos de ingeniería de software (Primera ed.). México D.F., México: Universidad Autónoma Metropolitana, Unidad Cuajimalpa.',
                'silabo_id' => 9
            ],[
                'referencia' => 'Jacobson, I., Booch, G., & Rumbaugh, J. (2000). El proceso unificado de desarrollo de software (Primera ed.). Madrid, España: Pearson.',
                'silabo_id' => 9
            ],[
                'referencia' => 'Kendall, J. E., & Kendall, E. J. (2011). Análisis y diseño de sistemas (Octava ed.). México D.F., México: Pearson.',
                'silabo_id' => 9
            ],[
                'referencia' => 'Kimmel, P. (2008). Manual de UML (Primera ed.). México, México: McGraw-Hill.',
                'silabo_id' => 9
            ],


            #Metodologia de la investigacion
            [
                'referencia' => 'Carhuancho Mendoza, I. M., Sicheri Monteverde, L., Nolazco Labajos, F. A., Guerrero Bejarano, M. A., & Casana Jara, K. M. (2019). Metodología de la investigación holística. https://repositorio.uide.edu.ec/handle/37000/ 3893 GUAYAQUIL/UIDE/2019.',
                'silabo_id' => 10
            ],[
                'referencia' => 'Cohen, N., & Gómez Rojas, G. (2019). Metodología de la investigación, ¿para qué? Editorial Teseo. http://up rid2.up.ac.pa:8080/xmlui/handle/123456789 /1363',
                'silabo_id' => 10
            ],[
                'referencia' => 'Gómez Gonzales, W., Gonzales Santos, E., & Rosales Rojas, R. (2015). Metodología de la Investigación. Repositorio Institucional - UMA. repositorio.uma.edu.pe/handle/UMA/96',
                'silabo_id' => 10
            ],[
                'referencia' => 'Gomez, S., & Cecilia, E. (2019). El proyecto de investigación. Universidad Nacional de Trujillo. http://dspace.unitru.edu.pe/handle/UNITRU /15000',
                'silabo_id' => 10
            ],[
                'referencia' => 'Arias, F. G. (2012). El proyecto de investigación: Introducción la metodología científica (6th edition). Episteme.',
                'silabo_id' => 10
            ],


            #Planeamiento estrategico de la informacion
            [
                'referencia' => 'Laudon, Kenneth & Laudon Jane. Sistemas de Información Gerencial. Editorial Pearson. 12 Ed. Mexico. 2012.',
                'silabo_id' => 11
            ],[
                'referencia' => 'Rodriguez, Joaquín. Cómo aplicar la Planeación Estratégica a la pequeña y mediana empresa. Editorial Thompson. 1 Ed. Mexico. 2001',
                'silabo_id' => 11
            ],[
                'referencia' => 'Lluis, Josep. Business Intelligence, Competir con Información. España. 2000.',
                'silabo_id' => 11
            ],[
                'referencia' => 'OZ, EFFY. Administración de los sistemas de información. Editorial Thompson. México. 2008.',
                'silabo_id' => 11
            ],[
                'referencia' => 'INEI. Guía teórico-práctica para la elaboración de planes estratégicos de TI. Lima. Perú. 2002.',
                'silabo_id' => 11
            ],[
                'referencia' => 'Applegate, Lynda. Estrategia y gestión de la información corporativa. Editorial McGraw Hill. España. 2004.',
                'silabo_id' => 11
            ],[
                'referencia' => 'Martin, James. Information Engineering-Block II. Editorial Prentice Hall. New Jersey. 1990.',
                'silabo_id' => 11
            ],


            #Gestion de servicio de TIC
            [
                'referencia' => 'AREITIO, Javier. SEGURIDAD DE LA INFORMACIÓN. Redes, Informática y Sistemas de Información. 1a ed. España. PARANINFO.  ISBN: 978-84-9732-502-8.',
                'silabo_id' => 12
            ],[
                'referencia' => 'GÓMEZ, Luis; FERNÁNDEZ, Pedro. Cómo implantar un SGSI según ISO/IEC 27001. 1a ed. Colombia. AENOR.ISBN:978-958-778-470-1.',
                'silabo_id' => 12
            ],[
                'referencia' => 'MERINO, Cristina; CAÑIZARES, Ricardo. Auditoría de Sistemas de Gestión de seguridad de la información. 1a ed. España. FC EDITORIAL. ISBN978-84-15683-97-1',
                'silabo_id' => 12
            ],[
                'referencia' => 'PIATTINI, Mario y DEL PESO, Emilio. Auditoría de tecnologías y sistemas de información. 1ra ed. Madrid : Alfaomega, 2008. pág. 692 ISBN 9789701513781.',
                'silabo_id' => 12
            ],[
                'referencia' => 'VALENCIA, Francisco. Aseguramiento y auditoria de tecnologías de información orientada a riesgos. Un enfoque basado en estándares internacionales. 1ª Ed Colombia. UNIVERSIDADAD NACIONAL DE COLOMBIA. ISBN 978-958783359-1',
                'silabo_id' => 12
            ],


            #Redes y comunicaciones I
            [
                'referencia' => 'DORDOIGNE, Jose. Redes Informáticas Nociones Fundamentales. 5ta ed. España. Editorial Ediciones ENI. 2015. 315p. ISBN: 978-2-7460-9733-9.',
                'silabo_id' => 13
            ],[
                'referencia' => 'ARIGANELLO, Ernesto. Redes Cisco. Guía De Estudio Para La Certificación CCNA Routing Y Switching. 3ra ed. España. Editorial RAMA. 2014. 510p. ISBN: 978-84-9964-272-7',
                'silabo_id' => 13
            ],[
                'referencia' => 'STALLINGS, William. Comunicación y Redes de Computadores. 7a. ed. España, Madrid. Editorial Pearson educacion. 2004. 896 p. ISBN: 9788420541105',
                'silabo_id' => 13
            ],[
                'referencia' => 'TANENBAUM, Andrew. Redes de Ordenadores. 4a. ed. México, D.F. Editorial Prentice Hall. 2003. 1408 p. ISBN: 9789702601623',
                'silabo_id' => 13
            ],[
                'referencia' => 'CISCO, Systems. Tecnologías de Interconectividad de Redes. 1a. ed. México, D.F. Editoral Prentice Hall. 1998. 716 p. ISBN: 9701701712 ISBN: 9789701701713',
                'silabo_id' => 13
            ],


            #Seguridad de la informacion
            [
                'referencia' => 'GÓMEZ, Luis; FERNÁNDEZ, Pedro. Cómo implantar un SGSI según ISO/IEC 27001. 1a ed. Colombia. AENOR. ISBN: 978-958-778-470-1.',
                'silabo_id' => 14
            ],[
                'referencia' => 'MERINO, Cristina; CAÑIZARES, Ricardo. Auditoría de Sistemas de Gestión de seguridad de la información. 1a ed. España. FC EDITORIAL. ISBN: 978-84-15683-97-14',
                'silabo_id' => 14
            ],[
                'referencia' => 'AREITIO, Javier. SEGURIDAD DE LA INFORMACIÓN. Redes, Informática y Sistemas de Información. 1a ed. España. PARANINFO. ISBN: 978-84-9732-502-8',
                'silabo_id' => 14
            ],
            
            
            #Marketing digital y Medios sociales
            [
                'referencia' => 'Kotler, P. Kartajaya, H. Setiawan, I. (2020). Marketing 4.0. 3ra. ed. España: Editorial Lid ',
                'silabo_id' => 15
            ],[
                'referencia' => 'Sanagustín, E. (2018). Vender más con marketing digital. Tu estrategia online paso a paso. 1ra. ed. Colombia: Editorial ECOE.',
                'silabo_id' => 15
            ],[
                'referencia' => 'Florido, M. (2019). Curso de Marketing Digital. 1ra. ed. España: Editorial ANAYA MULTIMEDIA', 
                'silabo_id' => 15
            ],[
                'referencia' => 'Rosales, P. (2010). Estrategia Digital: Cómo usar las nuevas tecnologías mejor que la competencia. 7ma. ed. España: Editorial Deusto.',
                'silabo_id' => 15
            ],[
                'referencia' => 'Holiday, R. (2014). Growth Hacker Marketing: El futuro del Social Media y la Publicidad. 1ra. ed. España: Editorial ANAYA MULTIMEDIA ',
                'silabo_id' => 15
            ],[
                'referencia' => 'Sanagustín, E. (2020). Marketing de contenidos: Estrategias para atraer clientes a tu empresa. 1ra. ed. España: Editorial ANAYA MULTIMEDIA',                               
                'silabo_id' => 15
            ],[
                'referencia' => 'Sanagustín, E. (2020). Marketing de contenidos: Estrategias para atraer clientes a tu empresa. 1ra. ed. España: Editorial ANAYA MULTIMEDIA',
                'silabo_id' => 15
            ],[
                'referencia' => 'Zavaleta, Jherson & otros. Sistema de Información para la Gestión de la Biblioteca Universitaria: Una Revisión Sistemática. Memorias de la Vigésima Segunda Conferencia Iberoamericana en Sistemas, Cibernética e Informática: CISCI 2023. Indexación a SCOPUS',
                'silabo_id' => 15
            ],[
                'referencia' => 'Santos, Juan & otros. Modelos de Series Temporales Predictivos para la Demanda Turística en el Perú. Memorias de la Vigésima Segunda Conferencia Iberoamericana en Sistemas, Cibernética e Informática: CISCI 2023. Indexación a SCOPUS.',    
                'silabo_id' => 15
            ],
            
            
            ##Ingenieria de software II
            [
                'referencia' => 'Bruegge, B., & Dutoit, A. H. (2002). Ingeniería de software orientado a objetos (Primera ed.). México D.F., México: Pearson. ',
                'silabo_id' => 16
            ],[
                'referencia' => 'Fowler, M., & Scott, K. (1999). UML gota a gota (Primera ed.). México D.F., México: Pearson. ',
                'silabo_id' => 16
            ],[
                'referencia' => 'Gibert Ginestà, M., & Peña González, Á. (2005). Ingeniería del software en entornos de SL (Segunda ed.). Barcelona, España: Eureca Media, SL.',
                'silabo_id' => 16
            ],[
                'referencia' => 'Gómez Fuentes, M. d., Cervantes Ojeda, J., & González Pérez, P. P. (2019). Fundamentos de ingeniería de software (Primera ed.). México D.F., México: Universidad Autónoma Metropolitana, Unidad Cuajimalpa.',
                'silabo_id' => 16
            ],[
                'referencia' => 'Gómez Fuentes, M. d., Cervantes Ojeda, J., & González Pérez, P. P. (2019). Fundamentos de ingeniería de software (Primera ed.). México D.F., México: Universidad Autónoma Metropolitana, Unidad Cuajimalpa.',
                'silabo_id' => 16
            ],[
                'referencia' => 'Jacobson, I., Booch, G., & Rumbaugh, J. (2000). El proceso unificado de desarrollo de software (Primera ed.). Madrid, España: Pearson.',
                'silabo_id' => 16
            ],[
                'referencia' => 'Kendall, J. E., & Kendall, E. J. (2011). Análisis y diseño de sistemas (Octava ed.). México D.F., México: Pearson',
                'silabo_id' => 16
            ],[
                'referencia' => 'Kimmel, P. (2008). Manual de UML (Primera ed.). México, México: McGraw-Hill.',
                'silabo_id' => 16
            ],[
                'referencia' => 'Larman, C. (2003). UML y patrones. Una intdroducción al anñalisis y diseño orientado a objetos y al proceso unificado (Segunda ed.). Madrid, España: Pearson.',
                'silabo_id' => 16
            ],[
                'referencia' => 'Pressman, R. (2010). Ingeniería del software. Un enfoque práctico (Séptima ed.). México D.F., México: McGraw-Hill.',
                'silabo_id' => 16
            ],[
                'referencia' => 'Rumbaugh, J., Jacobson, I., & Booch, G. (2000). El lenguaje unificado de modelado. Manual de referencia (Primera ed.). Madrid, España: Pearson.',
                'silabo_id' => 16
            ],[
                'referencia' => 'Sommerville, I. (2011). Ingeniería de software (Novena ed.). México D.F., México: Pearson.',
                'silabo_id' => 16
            ],
            
            
            #Inteligencia de negocios
            [
                'referencia' => 'Kenneth C. Laudon “Administración de los Sistemas de Información” 14va. Edición, Pearson, México. 2016',
                'silabo_id' => 17
            ],[
                'referencia' => 'Ralph Kimball - Margary Ross . The DataWareHouse Toolkit . 3ra Edición. The Complete Guide to Dimensional Modeling.. USA Wiley 2013 .',
                'silabo_id' => 17
            ],[
                'referencia' => 'Teo Lachev Appllied Microsoft Power BI - 5ta Edición. Prologika , USA - 2020 ',
                'silabo_id' => 17
            ],[
                'referencia' => 'Roland Mosimann, The Performance Manager, Cognos Incorporated, USA 2007',
                'silabo_id' => 17
            ],


            #Internet de las cosas
            [
                'referencia' => 'Kaustubh, D. (2021). Lifecycle iot security for engineers. Artech House.',
                'silabo_id' => 18
            ],[
                'referencia' => 'Le, D., Bhatt, C., & Madhukar, M. (Eds.). (2019). Security designs for the cloud, iot, and social networking. John Wiley & Sons, Incorporated.',
                'silabo_id' => 18
            ],[
                'referencia' => 'Liyanage, M., Braeken, A., Kumar, P., & Ylianttila, M. (Eds.). (2020). Iot security : Advances in authentication. John Wiley & Sons, Incorporated.',
                'silabo_id' => 18
            ],[
                'referencia' => 'Quiñonez, O. (2019). Internet de las Cosas (IoT). Editorial Ibukku.',
                'silabo_id' => 18
            ],[
                'referencia' => 'Sachan, V. K. (2020). Internet de las Cosas (IoT) y sus aplicaciones. Amazon Digital Services LLC - KDP Print US, 2020',
                'silabo_id' => 18
            ],[
                'referencia' => 'Tascón, M. (2020). Big Data y el Internet de las cosas: Qué hay detrás y cómo nos va a cambiar. Los Libros De La Catarata.',
                'silabo_id' => 18
            ],[
                'referencia' => 'Vermesan, O. (Ed.). (2018). Advancing iot platforms interoperability. River Publishers.',
                'silabo_id' => 18
            ],


            #SEGUNDO AÑO
            #Arquitectura y organizacion de computadoras
            [
                'referencia' => 'CORRES, Jesus y BARIÁIN, Cándido (2017).  Programación de Microcontroladores PIC en Lenguaje C. Editorial Marcombo. 1era ed. España. 350p. ISBN:  8426724272, 978-8426724274',
                'silabo_id' => 19
            ],[
                'referencia' => 'PATTERSON, David A. y HENNESSY John L. (2011) Estructura y diseño de computadores: La interfaz Translated by Javier Díaz Bruguera. Editorial Reverté, S.A. 4ta Ed, USA. 913p. ISBN 8429126201, 9788429126204.',
                'silabo_id' => 19
            ],[
                'referencia' => 'STALLINGS, William (2006). Organización y Arquitectura de Computadores. Editorial Pearson Prentice Hall, 7ta. ed , España. 840p. ISBN: 8489660824 ISBN-13: 9788489660823 En línea: https://www.academia.edu/22218951/Organizaci%C3%B3n_y_Arquitectura_de_Computadores_William_St allings_-_7ta_edici%C3%B3n.pdf',
                'silabo_id' => 19
            ],[
                'referencia' => 'ANGULO. Jose y GUTIERREZ, José.(2005). Arquitectura de Microprocesadores. Los Pentium a fondo. Editorial Thomson. 2da ed., Madrid, España. 464p. ISBN: 9788497322423',
                'silabo_id' => 19
            ],[
                'referencia' => 'PEREZ, Fernando y CARRATERO, Jesús. (2003). Problemas de Sistemas Operativos. De la base al diseño.  S.A. MCGRAW-HILL / INTERAMERICANA DE ESPAÑA. 2da ed., Madrid, España. 470p. ISBN: 9788448139919',
                'silabo_id' => 19
            ],


            #Ingenieria de datos I
            [
                'referencia' => 'SQL Server 2016. Aprende a administrar una base de datos transaccional',
                'silabo_id' => 20
            ],[
                'referencia' => 'SQL Server. Despliegue, Operación y Programación de una base de datos',
                'silabo_id' => 20
            ],[
                'referencia' => 'Bases de datos - Desarrollo de aplicaciones Multiplataformas y Web',
                'silabo_id' => 20
            ],


            #Tecnologias web
            [
                'referencia' => 'MARTIN, Bean “Laravel 5 Essentials”. 1ª Edición. Editorial Packt Publishing. Reino Unido 2015. ISBN: 978-1-78528-301-7',
                'silabo_id' => 21
            ],[
                'referencia' => 'GAUCHAT, Juan Diego. “El gran libro de HTML5, CSS3 y Javascript”. Barcelona España. Editorial Marcombo. 2012. 354 p. ISBN 978-84-267-1782-5',
                'silabo_id' => 21
            ],[
                'referencia' => 'MATTHEW, MacDonald “Creación y diseño web”. Ediciones Anaya Multimedia. España. 2016. ISBN: 9978-84-415-3742-2',
                'silabo_id' => 21
            ],


            #Tecnologias web
            [
                'referencia' => 'Laudon, K. y Laudon, J. (2016). Sistemas de información gerencial. 14ª ed. México, D.F. Pearson.',
                'silabo_id' => 22
            ],[
                'referencia' => 'Beynon-Davies, Paul. (2014). Sistemas de Información. Ed. Reverté, S.A. España. ',
                'silabo_id' => 22
            ],[
                'referencia' => 'Stair, R. y Reynolds, G. (2013). Principles of Information Systems. (11° ed.). Boston: Cengage Learning.',
                'silabo_id' => 22
            ],[
                'referencia' => 'ANDREU, RAFAEL; RICART, JOAN E; VALOR JOSEP. (1996). Estrategia y Sistemas de Información. 2da edición. España: Editorial McGraw Hill. ',
                'silabo_id' => 22
            ],[
                'referencia' => 'CORONEL, MORRIS, ROB. (2011). Bases de datos. Diseño, implementación y administración. 9na edición. Ed. Cengage Learning',
                'silabo_id' => 22
            ],


            #Ingenieria de datos II
            [
                'referencia' => 'SQL Server 2016. Aprende a administrar una base de datos transaccional',
                'silabo_id' => 23
            ],[
                'referencia' => 'SQL Server. Despliegue, Operación y Programación de una base de datos',
                'silabo_id' => 23
            ],[
                'referencia' => 'SQL Server 2012',
                'silabo_id' => 23
            ],[
                'referencia' => 'Bases de datos - Desarrollo de aplicaciones Multiplataformas y Web',
                'silabo_id' => 23
            ],


            #Sistemas operativos
            [
                'referencia' => 'STALLINGS, William (2005). Sinopsis de SISTEMAS OPERATIVOS: ASPECTOS INTERNOS Y PRINCIPIOS DE DISEÑO. Editorial Pearson Prentice Hall, 5ta. ed., España. 208p. ISBN: 9788420544625 en línea: http://cotana.informatica.edu.bo/downloads/Sistemas%20Operativos.pdf.',
                'silabo_id' => 24
            ],[
                'referencia' => 'PONS, Nicolas. (2020) Linux. Practique con los comandos básicos: ejercicios y respuestas. Editorial Thomson. 3ra ed., Barcelona, España. 208p. ISBN: 9782409026492',
                'silabo_id' => 24
            ],[
                'referencia' => 'PEREZ, Fernando y CARRATERO, Jesús. (2003). Problemas de Sistemas Operativos. De la base al diseño.  S.A. MCGRAW-HILL / INTERAMERICANA DE ESPAÑA. 2da ed., Madrid, España. 470p. ISBN: 9788448139919',
                'silabo_id' => 24
            ],[
                'referencia' => 'RAMOS, Antonio y GARCIA, Jean. (2015). Instala, administra, securiza y virtualiza entornos Linux. Editorial Ra-Ma, 1ra ed., Madrid. España. 399p. ISBN: 978-84-9964-144-7.',
                'silabo_id' => 24
            ],[
                'referencia' => 'TANENBAUM, Andrew S. (2009). Sistemas operativos modernos. Editorial PEARSON EDUCACIÓN., 3ra ed., México., 1104p., ISBN: 978-607-442-046-3. En línea: https://es.pdfdrive.com/descarga-del-libro-sistemas-operativos-3-ed-andrew-tanenbaum-d18060001.html',
                'silabo_id' => 24
            ],


            #Ingenieria de requerimientos
            [
                'referencia' => 'Beynon-Davies, Paul. (2014). Sistemas de Información. Ed. Reverté, S.A. España. ',
                'silabo_id' => 25
            ],[
                'referencia' => 'Bourque, P. & Fairley, R.E. (2014). Guide to the Software Engineering Body of Knowledge (SWEBOK), Version 3.0. IEEE Computer Society. Retrieved July 07, 2014, from www.swebok.org.',
                'silabo_id' => 25
            ],[
                'referencia' => 'Mulla Nilofar, Girase Sheetal. (2012). A new approach to requirement elicitation based on stakeholder recommendation and collaborative filtering, international journal of software engineering & applications (IJSEA) - EBSCO, 3(3), 51 - 61.',
                'silabo_id' => 25
            ],[
                'referencia' => 'Pressman, R. (2010). Ingeniería de Software: Un enfoque práctico (7th ed.). New York: McGraw-Hill higher education.',
                'silabo_id' => 25
            ],[
                'referencia' => 'Sommerville, I. (2011).  Ingeniería de Software (9th ed.). Boston: Addison-Wesley.',
                'silabo_id' => 25
            ],[
                'referencia' => 'Riunaudo, L. & Pantaleo, G. (2015). Ingeniería de software (1ra ed.).  Alfa y Omega',
                'silabo_id' => 25
            ],


            #Sistemas inteligentes
            [
                'referencia' => 'GARCIA Serrano Alberto. Inteligencia Artificial: Fundamentos, Práctica y Aplicaciones. Editorial Libros RC.2012 ',
                'silabo_id' => 26
            ],[
                'referencia' => 'PAJARES, Martin; SANZ, Gonzalo. Inteligencia artificial e Ingeniería del Conocimiento. EE.UU. Addison-Wesley Iberoamericana. 2da ed. Rama editorial, 2012 384p. ISBN 978-84-7897- 676-8',
                'silabo_id' => 26
            ],[
                'referencia' => 'NILSSON, Nils J. Inteligencia Artificial: Una Mera Síntesis. Editorial McGraw Hill.2014.',
                'silabo_id' => 26
            ],[
                'referencia' => 'MARTÍN DE BRIO, Bonifacio; SANZ, Alfredo. Redes Neuronales y sistemas borrosos. 3era ed. México D.F.: Alfaomega, 2007. P ISBN: 9789701512500',
                'silabo_id' => 26
            ],[
                'referencia' => 'FERNÁNDEZ, Gil. Sistemas expertos: Representación e inferencia. Problemas resueltos. 1era ed. Madrid: Dykinson, 2010. p. ISBN: 9788498499995',
                'silabo_id' => 26
            ],


            #Ingenieria de software I
            [
                'referencia' => 'Bruegge, B., & Dutoit, A. H. (2002). Ingeniería de software orientado a objetos (Primera ed.). México D.F., México: Pearson.',
                'silabo_id' => 27
            ],[
                'referencia' => 'Fowler, M., & Scott, K. (1999). UML gota a gota (Primera ed.). México D.F., México: Pearson.',
                'silabo_id' => 27
            ],[
                'referencia' => 'Gibert Ginestà, M., & Peña González, Á. (2005). Ingeniería del software en entornos de SL (Segunda ed.). Barcelona, España: Eureca Media, SL.',
                'silabo_id' => 27
            ],[
                'referencia' => 'Gómez Fuentes, M. d., Cervantes Ojeda, J., & González Pérez, P. P. (2019). Fundamentos de ingeniería de software (Primera ed.). México D.F., México: Universidad Autónoma Metropolitana, Unidad Cuajimalpa.',
                'silabo_id' => 27
            ],[
                'referencia' => 'Jacobson, I., Booch, G., & Rumbaugh, J. (2000). El proceso unificado de desarrollo de software (Primera ed.). Madrid, España: Pearson.',
                'silabo_id' => 27
            ],[
                'referencia' => 'Kendall, J. E., & Kendall, E. J. (2011). Análisis y diseño de sistemas (Octava ed.). México D.F., México: Pearson.',
                'silabo_id' => 27
            ],[
                'referencia' => 'Kimmel, P. (2008). Manual de UML (Primera ed.). México, México: McGraw-Hill.',
                'silabo_id' => 27
            ],


            #Metodologia de la investigacion
            [
                'referencia' => 'Carhuancho Mendoza, I. M., Sicheri Monteverde, L., Nolazco Labajos, F. A., Guerrero Bejarano, M. A., & Casana Jara, K. M. (2019). Metodología de la investigación holística. https://repositorio.uide.edu.ec/handle/37000/ 3893 GUAYAQUIL/UIDE/2019.',
                'silabo_id' => 28
            ],[
                'referencia' => 'Cohen, N., & Gómez Rojas, G. (2019). Metodología de la investigación, ¿para qué? Editorial Teseo. http://up rid2.up.ac.pa:8080/xmlui/handle/123456789 /1363',
                'silabo_id' => 28
            ],[
                'referencia' => 'Gómez Gonzales, W., Gonzales Santos, E., & Rosales Rojas, R. (2015). Metodología de la Investigación. Repositorio Institucional - UMA. repositorio.uma.edu.pe/handle/UMA/96',
                'silabo_id' => 28
            ],[
                'referencia' => 'Gomez, S., & Cecilia, E. (2019). El proyecto de investigación. Universidad Nacional de Trujillo. http://dspace.unitru.edu.pe/handle/UNITRU /15000',
                'silabo_id' => 28
            ],[
                'referencia' => 'Arias, F. G. (2012). El proyecto de investigación: Introducción la metodología científica (6th edition). Episteme.',
                'silabo_id' => 28
            ],


            #Planeamiento estrategico de la informacion
            [
                'referencia' => 'Laudon, Kenneth & Laudon Jane. Sistemas de Información Gerencial. Editorial Pearson. 12 Ed. Mexico. 2012.',
                'silabo_id' => 29
            ],[
                'referencia' => 'Rodriguez, Joaquín. Cómo aplicar la Planeación Estratégica a la pequeña y mediana empresa. Editorial Thompson. 1 Ed. Mexico. 2001',
                'silabo_id' => 29
            ],[
                'referencia' => 'Lluis, Josep. Business Intelligence, Competir con Información. España. 2000.',
                'silabo_id' => 29
            ],[
                'referencia' => 'OZ, EFFY. Administración de los sistemas de información. Editorial Thompson. México. 2008.',
                'silabo_id' => 29
            ],[
                'referencia' => 'INEI. Guía teórico-práctica para la elaboración de planes estratégicos de TI. Lima. Perú. 2002.',
                'silabo_id' => 29
            ],[
                'referencia' => 'Applegate, Lynda. Estrategia y gestión de la información corporativa. Editorial McGraw Hill. España. 2004.',
                'silabo_id' => 29
            ],[
                'referencia' => 'Martin, James. Information Engineering-Block II. Editorial Prentice Hall. New Jersey. 1990.',
                'silabo_id' => 29
            ],


            #Gestion de servicio de TIC
            [
                'referencia' => 'AREITIO, Javier. SEGURIDAD DE LA INFORMACIÓN. Redes, Informática y Sistemas de Información. 1a ed. España. PARANINFO.  ISBN: 978-84-9732-502-8.',
                'silabo_id' => 30
            ],[
                'referencia' => 'GÓMEZ, Luis; FERNÁNDEZ, Pedro. Cómo implantar un SGSI según ISO/IEC 27001. 1a ed. Colombia. AENOR.ISBN:978-958-778-470-1.',
                'silabo_id' => 30
            ],[
                'referencia' => 'MERINO, Cristina; CAÑIZARES, Ricardo. Auditoría de Sistemas de Gestión de seguridad de la información. 1a ed. España. FC EDITORIAL. ISBN978-84-15683-97-1',
                'silabo_id' => 30
            ],[
                'referencia' => 'PIATTINI, Mario y DEL PESO, Emilio. Auditoría de tecnologías y sistemas de información. 1ra ed. Madrid : Alfaomega, 2008. pág. 692 ISBN 9789701513781.',
                'silabo_id' => 30
            ],[
                'referencia' => 'VALENCIA, Francisco. Aseguramiento y auditoria de tecnologías de información orientada a riesgos. Un enfoque basado en estándares internacionales. 1ª Ed Colombia. UNIVERSIDADAD NACIONAL DE COLOMBIA. ISBN 978-958783359-1',
                'silabo_id' => 30
            ],


            #Redes y comunicaciones I
            [
                'referencia' => 'DORDOIGNE, Jose. Redes Informáticas Nociones Fundamentales. 5ta ed. España. Editorial Ediciones ENI. 2015. 315p. ISBN: 978-2-7460-9733-9.',
                'silabo_id' => 31
            ],[
                'referencia' => 'ARIGANELLO, Ernesto. Redes Cisco. Guía De Estudio Para La Certificación CCNA Routing Y Switching. 3ra ed. España. Editorial RAMA. 2014. 510p. ISBN: 978-84-9964-272-7',
                'silabo_id' => 31
            ],[
                'referencia' => 'STALLINGS, William. Comunicación y Redes de Computadores. 7a. ed. España, Madrid. Editorial Pearson educacion. 2004. 896 p. ISBN: 9788420541105',
                'silabo_id' => 31
            ],[
                'referencia' => 'TANENBAUM, Andrew. Redes de Ordenadores. 4a. ed. México, D.F. Editorial Prentice Hall. 2003. 1408 p. ISBN: 9789702601623',
                'silabo_id' => 31
            ],[
                'referencia' => 'CISCO, Systems. Tecnologías de Interconectividad de Redes. 1a. ed. México, D.F. Editoral Prentice Hall. 1998. 716 p. ISBN: 9701701712 ISBN: 9789701701713',
                'silabo_id' => 31
            ],


            #Seguridad de la informacion
            [
                'referencia' => 'GÓMEZ, Luis; FERNÁNDEZ, Pedro. Cómo implantar un SGSI según ISO/IEC 27001. 1a ed. Colombia. AENOR. ISBN: 978-958-778-470-1.',
                'silabo_id' => 32
            ],[
                'referencia' => 'MERINO, Cristina; CAÑIZARES, Ricardo. Auditoría de Sistemas de Gestión de seguridad de la información. 1a ed. España. FC EDITORIAL. ISBN: 978-84-15683-97-14',
                'silabo_id' => 32
            ],[
                'referencia' => 'AREITIO, Javier. SEGURIDAD DE LA INFORMACIÓN. Redes, Informática y Sistemas de Información. 1a ed. España. PARANINFO. ISBN: 978-84-9732-502-8',
                'silabo_id' => 32
            ],
            
            
            #Marketing digital y Medios sociales
            [
                'referencia' => 'Kotler, P. Kartajaya, H. Setiawan, I. (2020). Marketing 4.0. 3ra. ed. España: Editorial Lid ',
                'silabo_id' => 33
            ],[
                'referencia' => 'Sanagustín, E. (2018). Vender más con marketing digital. Tu estrategia online paso a paso. 1ra. ed. Colombia: Editorial ECOE.',
                'silabo_id' => 33
            ],[
                'referencia' => 'Florido, M. (2019). Curso de Marketing Digital. 1ra. ed. España: Editorial ANAYA MULTIMEDIA', 
                'silabo_id' => 33
            ],[
                'referencia' => 'Rosales, P. (2010). Estrategia Digital: Cómo usar las nuevas tecnologías mejor que la competencia. 7ma. ed. España: Editorial Deusto.',
                'silabo_id' => 33
            ],[
                'referencia' => 'Holiday, R. (2014). Growth Hacker Marketing: El futuro del Social Media y la Publicidad. 1ra. ed. España: Editorial ANAYA MULTIMEDIA ',
                'silabo_id' => 33
            ],[
                'referencia' => 'Sanagustín, E. (2020). Marketing de contenidos: Estrategias para atraer clientes a tu empresa. 1ra. ed. España: Editorial ANAYA MULTIMEDIA',                               
                'silabo_id' => 33
            ],[
                'referencia' => 'Sanagustín, E. (2020). Marketing de contenidos: Estrategias para atraer clientes a tu empresa. 1ra. ed. España: Editorial ANAYA MULTIMEDIA',
                'silabo_id' => 33
            ],[
                'referencia' => 'Zavaleta, Jherson & otros. Sistema de Información para la Gestión de la Biblioteca Universitaria: Una Revisión Sistemática. Memorias de la Vigésima Segunda Conferencia Iberoamericana en Sistemas, Cibernética e Informática: CISCI 2023. Indexación a SCOPUS',
                'silabo_id' => 33
            ],[
                'referencia' => 'Santos, Juan & otros. Modelos de Series Temporales Predictivos para la Demanda Turística en el Perú. Memorias de la Vigésima Segunda Conferencia Iberoamericana en Sistemas, Cibernética e Informática: CISCI 2023. Indexación a SCOPUS.',    
                'silabo_id' => 33
            ],
            
            
            ##Ingenieria de software II
            [
                'referencia' => 'Bruegge, B., & Dutoit, A. H. (2002). Ingeniería de software orientado a objetos (Primera ed.). México D.F., México: Pearson. ',
                'silabo_id' => 34
            ],[
                'referencia' => 'Fowler, M., & Scott, K. (1999). UML gota a gota (Primera ed.). México D.F., México: Pearson. ',
                'silabo_id' => 34
            ],[
                'referencia' => 'Gibert Ginestà, M., & Peña González, Á. (2005). Ingeniería del software en entornos de SL (Segunda ed.). Barcelona, España: Eureca Media, SL.',
                'silabo_id' => 34
            ],[
                'referencia' => 'Gómez Fuentes, M. d., Cervantes Ojeda, J., & González Pérez, P. P. (2019). Fundamentos de ingeniería de software (Primera ed.). México D.F., México: Universidad Autónoma Metropolitana, Unidad Cuajimalpa.',
                'silabo_id' => 34
            ],[
                'referencia' => 'Gómez Fuentes, M. d., Cervantes Ojeda, J., & González Pérez, P. P. (2019). Fundamentos de ingeniería de software (Primera ed.). México D.F., México: Universidad Autónoma Metropolitana, Unidad Cuajimalpa.',
                'silabo_id' => 34
            ],[
                'referencia' => 'Jacobson, I., Booch, G., & Rumbaugh, J. (2000). El proceso unificado de desarrollo de software (Primera ed.). Madrid, España: Pearson.',
                'silabo_id' => 34
            ],[
                'referencia' => 'Kendall, J. E., & Kendall, E. J. (2011). Análisis y diseño de sistemas (Octava ed.). México D.F., México: Pearson',
                'silabo_id' => 34
            ],[
                'referencia' => 'Kimmel, P. (2008). Manual de UML (Primera ed.). México, México: McGraw-Hill.',
                'silabo_id' => 34
            ],[
                'referencia' => 'Larman, C. (2003). UML y patrones. Una intdroducción al anñalisis y diseño orientado a objetos y al proceso unificado (Segunda ed.). Madrid, España: Pearson.',
                'silabo_id' => 34
            ],[
                'referencia' => 'Pressman, R. (2010). Ingeniería del software. Un enfoque práctico (Séptima ed.). México D.F., México: McGraw-Hill.',
                'silabo_id' => 34
            ],[
                'referencia' => 'Rumbaugh, J., Jacobson, I., & Booch, G. (2000). El lenguaje unificado de modelado. Manual de referencia (Primera ed.). Madrid, España: Pearson.',
                'silabo_id' => 34
            ],[
                'referencia' => 'Sommerville, I. (2011). Ingeniería de software (Novena ed.). México D.F., México: Pearson.',
                'silabo_id' => 34
            ],
            
            
            #Inteligencia de negocios
            [
                'referencia' => 'Kenneth C. Laudon “Administración de los Sistemas de Información” 14va. Edición, Pearson, México. 2016',
                'silabo_id' => 35
            ],[
                'referencia' => 'Ralph Kimball - Margary Ross . The DataWareHouse Toolkit . 3ra Edición. The Complete Guide to Dimensional Modeling.. USA Wiley 2013 .',
                'silabo_id' => 35
            ],[
                'referencia' => 'Teo Lachev Appllied Microsoft Power BI - 5ta Edición. Prologika , USA - 2020 ',
                'silabo_id' => 35
            ],[
                'referencia' => 'Roland Mosimann, The Performance Manager, Cognos Incorporated, USA 2007',
                'silabo_id' => 35
            ],


            #Internet de las cosas
            [
                'referencia' => 'Kaustubh, D. (2021). Lifecycle iot security for engineers. Artech House.',
                'silabo_id' => 36
            ],[
                'referencia' => 'Le, D., Bhatt, C., & Madhukar, M. (Eds.). (2019). Security designs for the cloud, iot, and social networking. John Wiley & Sons, Incorporated.',
                'silabo_id' => 36
            ],[
                'referencia' => 'Liyanage, M., Braeken, A., Kumar, P., & Ylianttila, M. (Eds.). (2020). Iot security : Advances in authentication. John Wiley & Sons, Incorporated.',
                'silabo_id' => 36
            ],[
                'referencia' => 'Quiñonez, O. (2019). Internet de las Cosas (IoT). Editorial Ibukku.',
                'silabo_id' => 36
            ],[
                'referencia' => 'Sachan, V. K. (2020). Internet de las Cosas (IoT) y sus aplicaciones. Amazon Digital Services LLC - KDP Print US, 2020',
                'silabo_id' => 36
            ],[
                'referencia' => 'Tascón, M. (2020). Big Data y el Internet de las cosas: Qué hay detrás y cómo nos va a cambiar. Los Libros De La Catarata.',
                'silabo_id' => 36
            ],[
                'referencia' => 'Vermesan, O. (Ed.). (2018). Advancing iot platforms interoperability. River Publishers.',
                'silabo_id' => 36
            ],


            #ELECTIVOS
            #PRIMER AÑO
            #Transformacion digital
            [
                'referencia' => 'De Pablos, C. (2015).Organizacion y Transformacion de los Sistemas de Informacion en la Empresa (Tercera ed.).Madrid, España: ESIC.',
                'silabo_id' => 37
            ],[
                'referencia' => 'Cohen, D., Asín, E. (2009). Tecnologías de la información en los negocios (Quinta ed.). México D.F., México: McGraw-Hil.',
                'silabo_id' => 37
            ],[
                'referencia' => 'Pérez, J. (2015). Gestión por Procesos (Quinta ed.). Madrid, España: ESIC.',
                'silabo_id' => 37
            ],[
                'referencia' => 'Schilling, M. (2008). Dirección Estratégica de la Innovación Tecnológica (Segunda ed.). México D.F., México: McGraw-Hil.',
                'silabo_id' => 37
            ],[
                'referencia' => 'Jiménez, M. (2012). Gestión Informática de las Empresa - Nuevo Modelo de Negocios (Primera ed.). Bogotá, Colombia: Ediciones de la U.',
                'silabo_id' => 37
            ],


            #Negocios electronicos
            [
                'referencia' => 'Amor, Daniel (2014). La (R)evolución e-Business. (7° ed.). España: Prentice Hall.',
                'silabo_id' => 38
            ],[
                'referencia' => 'Gary P. Schneider (2011). eBusiness (9° ed.). USA: Editorial Cengage Learning.',
                'silabo_id' => 38
            ],[
                'referencia' => 'Rodríguez A. Inmaculada (2012). Marketing.com y Comercio Electrónico en la Sociedad de la Información (3° ed.). México: Editorial Pirámide.',
                'silabo_id' => 38
            ],[
                'referencia' => 'Janice Reynolds (2011). El Libro Completo del e Commerce (2° ed.). México: Editorial Deusto.',
                'silabo_id' => 38
            ],[
                'referencia' => 'Peter S. Cohan (2010). El Negocio está en Internet (2° ed.). México: Pearson Education',
                'silabo_id' => 38
            ],


            #Arquitectura basada en microservicios
            [
                'referencia' => 'Roldán M.  David, Valderas A. Pedro, Torres B. Victoria. “Microservicios Un enfoque integrado”. Madrid España. Editorial Ra Ma 2018. 182p. ISBN 978-84-9964-765-4',
                'silabo_id' => 39
            ],[
                'referencia' => 'Ortega C, José Manuel. “Tecnologías para arquitecturas basadas en microservicios: Patrones y soluciones para aplicaciones desplegadas en contenedores”. Madrid España. Editorial Anaya Multimedia. 2020. 252p. ISBN 978-620-0-41131-0',
                'silabo_id' => 39
            ],


            #SEGUNDO AÑO
            #Transformacion digital
            [
                'referencia' => 'De Pablos, C. (2015).Organizacion y Transformacion de los Sistemas de Informacion en la Empresa (Tercera ed.).Madrid, España: ESIC.',
                'silabo_id' => 40
            ],[
                'referencia' => 'Cohen, D., Asín, E. (2009). Tecnologías de la información en los negocios (Quinta ed.). México D.F., México: McGraw-Hil.',
                'silabo_id' => 40
            ],[
                'referencia' => 'Pérez, J. (2015). Gestión por Procesos (Quinta ed.). Madrid, España: ESIC.',
                'silabo_id' => 40
            ],[
                'referencia' => 'Schilling, M. (2008). Dirección Estratégica de la Innovación Tecnológica (Segunda ed.). México D.F., México: McGraw-Hil.',
                'silabo_id' => 40
            ],[
                'referencia' => 'Jiménez, M. (2012). Gestión Informática de las Empresa - Nuevo Modelo de Negocios (Primera ed.). Bogotá, Colombia: Ediciones de la U.',
                'silabo_id' => 40
            ],


            #Negocios electronicos
            [
                'referencia' => 'Amor, Daniel (2014). La (R)evolución e-Business. (7° ed.). España: Prentice Hall.',
                'silabo_id' => 41
            ],[
                'referencia' => 'Gary P. Schneider (2011). eBusiness (9° ed.). USA: Editorial Cengage Learning.',
                'silabo_id' => 41
            ],[
                'referencia' => 'Rodríguez A. Inmaculada (2012). Marketing.com y Comercio Electrónico en la Sociedad de la Información (3° ed.). México: Editorial Pirámide.',
                'silabo_id' => 41
            ],[
                'referencia' => 'Janice Reynolds (2011). El Libro Completo del e Commerce (2° ed.). México: Editorial Deusto.',
                'silabo_id' => 41
            ],[
                'referencia' => 'Peter S. Cohan (2010). El Negocio está en Internet (2° ed.). México: Pearson Education',
                'silabo_id' => 41
            ],


            #Arquitectura basada en microservicios
            [
                'referencia' => 'Roldán M.  David, Valderas A. Pedro, Torres B. Victoria. “Microservicios Un enfoque integrado”. Madrid España. Editorial Ra Ma 2018. 182p. ISBN 978-84-9964-765-4',
                'silabo_id' => 42
            ],[
                'referencia' => 'Ortega C, José Manuel. “Tecnologías para arquitecturas basadas en microservicios: Patrones y soluciones para aplicaciones desplegadas en contenedores”. Madrid España. Editorial Anaya Multimedia. 2020. 252p. ISBN 978-620-0-41131-0',
                'silabo_id' => 42
            ],
        ];
        Referencia::insert($Referencia);
    }
}
