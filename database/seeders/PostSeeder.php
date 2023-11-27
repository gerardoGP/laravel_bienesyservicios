<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1 : bien, 2:servicio
        $data = [
            [
            "description" => "SERVICIO DE ESPECIALISTA EN GESTIÓN DEL SISTEMA DE TESORERIA PUBLICA.",
            "url_pdf" => "https://drive.google.com/file/d/1fSn5wYohO5jx_U7f0YvQux0mxePmRWaS/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-03 09:00:00",
            "last_date" => "2022-10-04 12:00:00",
            "created_at" => "2022-10-03 09:00:00",
            "updated_at" => "2022-10-03 09:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE ÚTILES DE OFICINA PARA LA OFICINA DE PSICOLOGIA.",
            "url_pdf" => "https://drive.google.com/file/d/144ZPHIJJuclYcD9hrdVtTECkDIbi3pNB/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 1,
            "start_date" => "2022-10-03 18:00:00",
            "last_date" => "2022-10-05 18:00:00",
            "created_at" => "2022-10-03 18:00:00",
            "updated_at" => "2022-10-03 18:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE HERRAMIENTAS BÁSICAS: ALICATES, DESTORNILLADOR, CAUTÍN Y MULTITESTER PARA EL TALLER DE MÚSICA 2022 - OFICINA DE BIENESTAR UNIVERSITARIO - TALLER DE MÚSICA",
            "url_pdf" => "https://drive.google.com/file/d/1zgDMFbPZsNnYIg3VTd5L8e5eOZHamuSo/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 1,
            "start_date" => "2022-10-03 18:00:00",
            "last_date" => "2022-10-05 18:00:00",
            "created_at" => "2022-10-03 18:00:00",
            "updated_at" => "2022-10-03 18:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE ÚTILES DE OFICINA PARA LA OFICINA DE SEGUIMIENTO AL GRADUADO",
            "url_pdf" => "https://drive.google.com/file/d/1Id6K-fDI9JBX77f11ySQSWO3B1lwTMxc/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 1,
            "start_date" => "2022-10-03 18:00:00",
            "last_date" => "2022-11-07 18:00:00",
            "created_at" => "2022-10-03 18:00:00",
            "updated_at" => "2022-10-03 18:00:00"
            ]
            ,[
            "description" => "ADQUISICION DE UTILES DE ESCRITORIO PARA LA UNIDAD DE SERVICIOS CULTURALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1sQqIQv2sCoqmschpqaWnbxw3vMConlaY/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 1,
            "start_date" => "2022-10-03 18:00:00",
            "last_date" => "2022-10-05 18:00:00",
            "created_at" => "2022-10-03 18:00:00",
            "updated_at" => "2022-10-03 18:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE ALIMENTOS Y BEBIDAS PARA LOS EVENTOS CULTURALES Y DEPORTIVOS ORGANIZADOS POR LA DIRECCIÓN DE BIENESTAR UNIVERSITARIO.",
            "url_pdf" => "https://drive.google.com/file/d/1TE2kWwCxGjqxJZtuY2Vv92ITzqcEhv3R/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 1,
            "start_date" => "2022-10-03 18:00:00",
            "last_date" => "2022-10-28 18:00:00",
            "created_at" => "2022-10-03 18:00:00",
            "updated_at" => "2022-10-03 18:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE FUNDAS PARA INSTRUMENTOS MUSICALES DE PERCUSIÓN PARA EL TALLER DE MÚSICA 2022 - DIRECCIÓN DE BIENESTAR UNIVERSITARIO",
            "url_pdf" => "https://drive.google.com/file/d/1Gou53XfYOgPfFGU11iIHMAgwmwmxZWP5/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 1,
            "start_date" => "2022-10-03 18:00:00",
            "last_date" => "2022-10-05 18:00:00",
            "created_at" => "2022-10-03 18:00:00",
            "updated_at" => "2022-10-03 18:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE INDUMENTARIA DEPORTIVA PARA LOS TALLERES DEPORTIVOS Y DEPORTES DE ALTA COMPETENCIA DE LA UNDC - DIRECCIÓN DE BIENESTAR UNIVERSITARIO – SERVICIOS DEPORTIVOS",
            "url_pdf" => "https://drive.google.com/file/d/1LKwxdediM1CEYi5nNpVAX3flrYTv6L_3/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 1,
            "start_date" => "2022-10-03 18:00:00",
            "last_date" => "2022-10-07 18:00:00",
            "created_at" => "2022-10-03 18:00:00",
            "updated_at" => "2022-10-03 18:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE ACCESORIO – CLAVIJERO PARA EL MANTENIMIENTO DE INSTRUMENTOS MUSICALES DEL TALLER DE MÚSICA",
            "url_pdf" => "https://drive.google.com/file/d/1a_beP6-wf5bdRn9XmIYcnJD1x0glQf5Y/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 1,
            "start_date" => "2022-10-03 18:00:00",
            "last_date" => "2022-10-05 18:00:00",
            "created_at" => "2022-10-03 18:00:00",
            "updated_at" => "2022-10-03 18:00:00"
            ]
            ,[
            "description" => "SERVICIO DE FORMULACIÓN Y GESTIÓN DE REQUERIMIENTOS DE BIENES Y SERVICIOS PARA EJECUCIÓN DEL PLAN DE TRABAJO DEL CICLO ORDINARIO 2022-II DEL CENTRO PREUNIVERSITARIO DE LA UNDC",
            "url_pdf" => "https://drive.google.com/file/d/15J1S5raw1uf7BAFP6JWLH04Mjpu3qDdn/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-03 18:00:00",
            "last_date" => "2022-10-04 13:00:00",
            "created_at" => "2022-10-03 18:00:00",
            "updated_at" => "2022-10-03 18:00:00"
            ]
            ,[
            "description" => "SERVICIO DE INFRAESTRUCTURA EN NUBE PARA LA PLATAFORMA DE GESTIÓN ACADÉMICA DE LA UNDC",
            "url_pdf" => "https://drive.google.com/file/d/1_aYgdk_xuK0aiDBFxqNAbgbFvvztvfiJ/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-04 10:00:00",
            "last_date" => "2022-10-12 13:00:00",
            "created_at" => "2022-10-04 10:00:00",
            "updated_at" => "2022-10-04 10:00:00"
            ]
            ,[
            "description" => "SERVICIO DE SEGUIMIENTO, COORDINACIÓN Y MONITOREO DE LOS PROYECTOS DE INVERSIÓN SEGÚN PLAN DE TRABAJO PARA LA UNIDAD EJECUTORA DE INVERSIONES",
            "url_pdf" => "https://drive.google.com/file/d/1JEM0WBpLHoHrQe4y-XwebfFm08s9M_N0/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-04 13:00:00",
            "last_date" => "2022-10-05 13:00:00",
            "created_at" => "2022-10-04 13:00:00",
            "updated_at" => "2022-10-04 13:00:00"
            ]
            ,[
            "description" => "SERVICIO ESPECIALIZADO DE ENSEÑANZA DE VÓLEY PARA DESARROLLO DE LOS TALLERES DEPORTIVOS Y FORMACIÓN DE LA SELECCIÓN DE VÓLEY FEMENINO Y MASCULINO DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1dpIQq6_FYlxKMMrqkIBwwIMVKuJ4oaZw/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-04 15:00:00",
            "last_date" => "2022-10-07 14:00:00",
            "created_at" => "2022-10-04 15:00:00",
            "updated_at" => "2022-10-04 15:00:00"
            ]
            ,[
            "description" => "CONTRATACIÓN DE SERVICIO DE AUDITORÍA INTERNA DE LAS NORMAS INTERNACIONALES ISO ISO 9001:2015 Y/O 21001:2018, 14001:2015 Y 45001:2018, EN LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            "url_pdf" => "https://drive.google.com/file/d/1M7EQ0Kg47PNeTlZyzINtKxVrlwLMUZek/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-04 16:00:00",
            "last_date" => "2022-10-14 13:00:00",
            "created_at" => "2022-10-04 16:00:00",
            "updated_at" => "2022-10-04 16:00:00"
            ]
            ,[
            "description" => "SERVICIO ESPECIALIZADO DE ENSEÑANZA DE AJEDREZ PARA DESARROLLO DE LOS TALLERES Y FORMACIÓN DE LA SELECCIÓN DE AJEDREZ FEMENINO Y MASCULINO DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1KTMouGIUNDV-1ko1k_lTLiRMb05MYqVr/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-04 16:00:00",
            "last_date" => "2022-10-05 13:00:00",
            "created_at" => "2022-10-04 16:00:00",
            "updated_at" => "2022-10-04 16:00:00"
            ]
            ,[
            "description" => "SERVICIO DE PROFESIONAL DE ENFERMERÍA PARA LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1ViHcnpRU3IxeUwFXK48iLKnc3EFU_k45/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-05 10:00:00",
            "last_date" => "2022-11-11 18:00:00",
            "created_at" => "2022-10-05 10:00:00",
            "updated_at" => "2022-10-05 10:00:00"
            ]
            ,[
            "description" => "SERVICIO DE ENSEÑANZA DE TEATRO PARA DICTAR CLASES A LOS ESTUDIANTES DE LAS CINCO CARRERAS PROFESIONALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            "url_pdf" => "https://drive.google.com/file/d/1vT-Kvm2ibYJ5DrQpB0f6gDHIQnb_5hE8/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-05 10:00:00",
            "last_date" => "2022-10-10 18:00:00",
            "created_at" => "2022-10-05 10:00:00",
            "updated_at" => "2022-10-05 10:00:00"
            ]
            ,[
            "description" => "ADQUISICION DE EQUIPOS PERIFERICOS PARA LA UNIDAD DE ABASTECIMIENTO DE LA UNDC",
            "url_pdf" => "https://drive.google.com/file/d/1vzN3PvJwmVBOA-0C0_BD-McNTgb5SB_2/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 1,
            "start_date" => "2022-10-05 10:00:00",
            "last_date" => "2022-10-06 10:00:00",
            "created_at" => "2022-10-05 10:00:00",
            "updated_at" => "2022-10-05 10:00:00"
            ]
            ,[
            "description" => "Adquisición de equipos de telefonía móvil para la alta dirección de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/1AxbY_HHQfMM5g_01fIrS6LT3xe0-C6Tl/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 1,
            "start_date" => "2022-10-06 08:00:00",
            "last_date" => "2022-10-06 14:00:00",
            "created_at" => "2022-10-06 08:00:00",
            "updated_at" => "2022-10-06 08:00:00"
            ]
            ,[
            "description" => "SERVICIO DE SEGUIMIENTO Y MONITOREO DE PLAN DE ACTIVIDADES EN EL PROCESO DE ACREDITACIÓN DE LAS ESCUELAS PROFESIONALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1nAVrCf_Wh7QxuiWOdu3RYxYzqWNClOpm/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-06 10:00:00",
            "last_date" => "2022-10-10 13:00:00",
            "created_at" => "2022-10-06 10:00:00",
            "updated_at" => "2022-10-06 10:00:00"
            ]
            ,[
            "description" => "SERVICIO DE CAPACITACIÓN PARA EL FORTALECIMIENTO EN TEMAS DE AUTOEVALUACIÓN CON FINES DE ACREDITACIÓN PARA COMITÉS DE CALIDAD DE LAS CARRERAS PROFESIONALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1S1qj3PpQ9Y_6BQDjqm9vaqYeqjYtk1fq/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-19 11:00:00",
            "last_date" => "2022-10-21 23:59:00",
            "created_at" => "2022-10-19 11:00:00",
            "updated_at" => "2022-10-19 11:00:00"
            ]
            ,[
            "description" => "ADQUISICION DE EQUIPOS PARA LOS LABORATORIOS DE CIIS EN LUNAHAUANA",
            "url_pdf" => "https://drive.google.com/drive/folders/14Rm3KXkg3T705Ab96OnLB5WfdOI8bOeD?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 1,
            "start_date" => "2022-10-06 10:00:00",
            "last_date" => "2022-10-10 12:00:00",
            "created_at" => "2022-10-06 10:00:00",
            "updated_at" => "2022-10-06 10:00:00"
            ]
            ,[
            "description" => "Servicio de inscripción para participar de la capacitación denominado Curso: “AUDITORIA FINANCIERA”.",
            "url_pdf" => "https://drive.google.com/file/d/1jcGRBeMN6eA1VSX3Hj-LqG4pwNz3kgIJ/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-05 15:00:00",
            "last_date" => "2022-10-24 13:00:00",
            "created_at" => "2022-10-05 15:00:00",
            "updated_at" => "2022-10-05 15:00:00"
            ]
            ,[
            "description" => "Servicio de inscripción para participar capacitación denominado diplomado especializado en “OFIMÁTICA OFFICE 2019”.",
            "url_pdf" => "https://drive.google.com/file/d/1IZqzqa_suzc8qjs-pzoW7znO0GXOQ2Po/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-05 15:00:00",
            "last_date" => "2022-10-14 13:00:00",
            "created_at" => "2022-10-05 15:00:00",
            "updated_at" => "2022-10-05 15:00:00"
            ]
            ,[
            "description" => "ADQUISICION DE UTILES DE ESCRITORIO PARA LA UNIDAD DE ABASTECIMIENTO",
            "url_pdf" => "https://drive.google.com/file/d/13A44lWmUP-i3qCdWr9kjVVHWcxDC2jSA/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 1,
            "start_date" => "2022-10-06 14:00:00",
            "last_date" => "2022-10-10 00:00:00",
            "created_at" => "2022-10-06 14:00:00",
            "updated_at" => "2022-10-06 14:00:00"
            ]
            ,[
            "description" => "CURSO TALLER DE ÉTICA, TRANSPARENCIA E INTEGRIDAD EN LA ADMINISTRACIÓN PÚBLICA- CAPACITACIÓN DE CURSO DE ÉTICA INTEGRIDAD Y SU IMPORTANCIA DE LA GESTIÓN PÚBLICA",
            "url_pdf" => "https://drive.google.com/file/d/1VAOliRojwIxQ8j0nJQe0Jcp0t2Vayp-Z/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-10 08:00:00",
            "last_date" => "2022-10-10 15:00:00",
            "created_at" => "2022-10-10 08:00:00",
            "updated_at" => "2022-10-10 08:00:00"
            ]
            ,[
            "description" => "CONTRATACIÓN DE UN CONSULTOR PARA CAPACITACIÓN SOBRE REDACCIÓN DE ARTÍCULOS CIENTÍFICOS PARA LA VICEPRESIDENCIA DE INVESTIGACIÓN",
            "url_pdf" => "https://drive.google.com/file/d/1gEaaWtHQr9xZ9fNhnDoTLFl9ZfanASjG/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-10 16:00:00",
            "last_date" => "2022-10-11 13:00:00",
            "created_at" => "2022-10-10 16:00:00",
            "updated_at" => "2022-10-10 16:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE MATERIALES DE ENSEÑANZA PARA DIFUNDIR EN FERIAS DE ORIENTACIÓN VOCACIONAL EL PROCESO DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1PvLgWzat98r-tnqFWuGOfPfBO5BD5BuB/view?usp=sharing",
            "typePost_id" => 1,
            "user_id" => 1,
            "start_date" => "2022-10-10 16:00:00",
            "last_date" => "2022-10-26 18:00:00",
            "created_at" => "2022-10-10 16:00:00",
            "updated_at" => "2022-10-10 16:00:00"
            ]
            ,[
            "description" => "Contratación de servicio de Difusión por perifoneo para publicidad del Centro Preuniversitario de la Universidad Nacional de Cañete. ",
            "url_pdf" => "https://drive.google.com/file/d/1Z6H76tZZeyM0EPobYu5446zmJqAd2IPI/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-10 16:00:00",
            "last_date" => "2022-10-11 13:00:00",
            "created_at" => "2022-10-10 16:00:00",
            "updated_at" => "2022-10-10 16:00:00"
            ]
            ,[
            "description" => "SERVICIO DE PROGRAMACIÓN Y SEGUIMIENTO DE USO DE LA PLATAFORMA VIRTUAL DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1Cx6FkK9Cyp7ExG8wdwHOyZD2pbktq18K/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-10 16:00:00",
            "last_date" => "2022-10-11 13:00:00",
            "created_at" => "2022-10-10 16:00:00",
            "updated_at" => "2022-10-10 16:00:00"
            ]
            ,[
            "description" => "SERVICIOS DE UN (01) PROFESIONAL EN TRABAJO SOCIAL PARA EJECUCIÓN DE PROGRAMAS DE SERVICIO SOCIAL DE LA DIRECCIÓN DE BIENESTAR UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            "url_pdf" => "https://drive.google.com/file/d/113fWJoDzfTppS6rPqlOLS8dCdeJQFYUu/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-10 16:00:00",
            "last_date" => "2022-10-25 13:00:00",
            "created_at" => "2022-10-10 16:00:00",
            "updated_at" => "2022-10-10 16:00:00"
            ]
            ,[
            "description" => "Contratación del servicio de Supervisor de Seguridad para la Unidad de Servicios Generales de Universidad Nacional de Cañete 2022",
            "url_pdf" => "https://drive.google.com/file/d/1vFeua7eGyT-CgytpVp3c3N-NziGwAS0m/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-11 11:26:00",
            "last_date" => "2022-10-13 18:00:00",
            "created_at" => "2022-10-11 11:26:00",
            "updated_at" => "2022-10-11 11:26:00"
            ]
            ,[
            "description" => "SERVICIO DE MANTENIMIENTO Y PINTADO DE LOS LOCALES ACADÉMICOS Y ADMINISTRATIVOS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1Gtt4jI5T8x6Va9hgnlqQ7_HVAUHjmjiR/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-11 11:50:00",
            "last_date" => "2022-10-19 18:00:00",
            "created_at" => "2022-10-11 11:50:00",
            "updated_at" => "2022-10-11 11:50:00"
            ]
            ,[
            "description" => "SERVICIO DE MANTENIMIENTO DE PARCELA AGRICOLA DE 18 HECTAREAS EN EL FUNDO TERCER MUNDO DE LA UNDC",
            "url_pdf" => "https://drive.google.com/file/d/1riBSUa1d7J79zM1EicV9U1tW1BEI5cKm/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-11 11:58:00",
            "last_date" => "2022-10-19 18:00:00",
            "created_at" => "2022-10-11 11:58:00",
            "updated_at" => "2022-10-11 11:58:00"
            ]
            ,[
            "description" => "Servicio especializado de profesor Técnico en danza. ",
            "url_pdf" => "https://drive.google.com/file/d/17BhDRLmP3bDk8oWwm0Rqv0_7yAxGJwmf/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-06 16:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-06 16:00:00",
            "updated_at" => "2022-10-06 16:00:00"
            ]
            ,[
            "description" => "SUPERVISION DE EXPEDIENTE TECNICO - Código Único de Inversión 2509078",
            "url_pdf" => "https://drive.google.com/file/d/1-lS2nHW_e4g5-az7GT48l00jyeVrO0cs/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 10:19:00",
            "last_date" => "2022-10-17 10:00:00",
            "created_at" => "2022-10-12 10:19:00",
            "updated_at" => "2022-10-12 10:19:00"
            ]
            ,[
            "description" => "Adquisición de insumos médicos para la Unidad de Servicios Médicos",
            "url_pdf" => "https://drive.google.com/file/d/1KrL4vDrvurykWd0oNm1D5ax9nPUZ2u1o/view?usp=sharing",
            "typePost_id" => 1,
            "user_id" => 1,
            "start_date" => "2022-10-12 08:00:00",
            "last_date" => "2022-12-01 18:00:00",
            "created_at" => "2022-10-12 08:00:00",
            "updated_at" => "2022-10-12 08:00:00"
            ]
            ,[
            "description" => "Contratación de Servicio de Impresión y Empastado de Libros para la Vicepresidencia de Investigación",
            "url_pdf" => "https://drive.google.com/file/d/1J3GtqycUP7xWNDqYwfjw4oxBaGsR7Yhb/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 11:17:00",
            "last_date" => "2022-10-13 18:00:00",
            "created_at" => "2022-10-12 11:17:00",
            "updated_at" => "2022-10-12 11:17:00"
            ]
            ,[
            "description" => "Adquisición de equipos periféricos para la Escuela Profesional de Agronomía.",
            "url_pdf" => "https://drive.google.com/file/d/1T-5IhEfetg_l-wOeT1BsUWE1xjevsQHN/view?usp=sharing",
            "typePost_id" => 1,
            "user_id" => 1,
            "start_date" => "2022-10-12 08:00:00",
            "last_date" => "2022-10-14 10:00:00",
            "created_at" => "2022-10-12 08:00:00",
            "updated_at" => "2022-10-12 08:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete - Biología en el bloque I y Física en el bloque II.",
            "url_pdf" => "https://drive.google.com/file/d/1UEWqmllUxC3dbF7y-B19Ti7tB46vvN-Z/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete - Biología en el bloque I.",
            "url_pdf" => "https://drive.google.com/file/d/1IyZw5yYPpQVhyuxOVaLWs2pZfbhM5z4T/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete – asignaturas de Habilidad Lógico Matemático I en el bloque I y Habilidad Lógico Matemático II en el bloque II",
            "url_pdf" => "https://drive.google.com/file/d/18LufGJmFpZV6KrUuMX5vpn9v8HFjkwNa/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete – Asignaturas de Habilidad Lógico Matemático y Aritmética en el bloque I y Habilidad Lógico Matemático II y Trigonometría en el bloque II",
            "url_pdf" => "https://drive.google.com/file/d/1YWJNkSgfqBnH3fpCEAw6pnaPmLvVcEfV/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete – Asignaturas de Habilidad Verbal I en el bloque I y Habilidad Verbal II en el bloque II",
            "url_pdf" => "https://drive.google.com/file/d/1KIkQZj_rGPVQkmp3rYedaDp121yR6S9L/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete – Asignaturas de Habilidad Verbal I en el bloque I y Habilidad Verbal II en el bloque II",
            "url_pdf" => "https://drive.google.com/file/d/1EinSeGSIt5YmzM62uEljhZVUzm3YLvdJ/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete – Asignaturas de Habilidad Verbal I en el bloque I y Habilidad Verbal II en el bloque II",
            "url_pdf" => "https://drive.google.com/file/d/1lyDTQkXTXjSPVMrtDRqhO1qaNC2osrSb/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete – Asignaturas de Aritmética en el bloque I y Geometría en el bloque II",
            "url_pdf" => "https://drive.google.com/file/d/1QiipUg-FD_7w_k74MGRfB_rUbVR6iqyM/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete – Asignaturas de Álgebra en el bloque I y Geometría en el bloque II",
            "url_pdf" => "https://drive.google.com/file/d/1HX1R_T091faF_hY4fsDBXsIKx4zX_RcE/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete – Asignaturas de Álgebra en el bloque I y Trigonometría en el bloque II",
            "url_pdf" => "https://drive.google.com/file/d/1VPi5c5xtBi7wwhcLt8-enZD86-VHhuaq/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete – Asignaturas de Química en el bloque I y Física en el bloque II",
            "url_pdf" => "https://drive.google.com/file/d/1rOnkNjP16WTkjL5-ALs8zHpA-2kOd97S/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete – asignaturas de Lenguaje en el bloque I y Literatura en el bloque II",
            "url_pdf" => "https://drive.google.com/file/d/1XfEtXZlsHSE1B9NUIypYn-3Hx95097rJ/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete – Asignaturas de Lenguaje en el bloque I y Literatura en el bloque II",
            "url_pdf" => "https://drive.google.com/file/d/1vLaCVrcZwZM-jAuEo5Mhof2dO97smw2n/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete – Asignaturas de Historia en el bloque I y Geografía en el bloque II",
            "url_pdf" => "https://drive.google.com/file/d/1t47Lfcn4ZpPRfxhMtUh8JlBDaMDk_4m2/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete – Asignaturas de Historia en el bloque I y Geografía en el bloque II",
            "url_pdf" => "https://drive.google.com/file/d/1gRYoZcAEZtqCfZeKgBPA2afC1D6AUTRg/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete – Asignaturas de Educación Cívica en el bloque I y Economía, Filosofía y Psicología en el bloque II",
            "url_pdf" => "https://drive.google.com/file/d/1njDlKRxO7QojgnU5k9aQaQjx2U_fQZwr/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Contratación del Servicio de Docencia para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete – Asignaturas de Educación Cívica en el bloque I y Economía en el bloque II",
            "url_pdf" => "https://drive.google.com/file/d/17bWL83Y9fkMbAqCIYisdRaZcFtXGvpaP/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-12 13:00:00",
            "last_date" => "2022-10-13 13:00:00",
            "created_at" => "2022-10-12 13:00:00",
            "updated_at" => "2022-10-12 13:00:00"
            ]
            ,[
            "description" => "Adquisición de 28 Diplomas de Bachiller con caligrafiado para los Graduados de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/18Hut-6WmcpgRUqVTZ3nbzlOT_yttXrOh/view?usp=sharing",
            "typePost_id" => 1,
            "user_id" => 1,
            "start_date" => "2022-10-13 08:00:00",
            "last_date" => "2022-10-14 18:00:00",
            "created_at" => "2022-10-13 08:00:00",
            "updated_at" => "2022-10-13 08:00:00"
            ]
            ,[
            "description" => "Adquisición de filtro de carbón activado tipo cartucho para la Dirección de Proyección Social y Extensión Universitaria.",
            "url_pdf" => "https://drive.google.com/file/d/1mKHpfzjsSgUw9baIbEyEzaBBMfI_jz1_/view?usp=sharing",
            "typePost_id" => 1,
            "user_id" => 1,
            "start_date" => "2022-10-13 11:00:00",
            "last_date" => "2022-10-14 18:00:00",
            "created_at" => "2022-10-13 11:00:00",
            "updated_at" => "2022-10-13 11:00:00"
            ]
            ,[
            "description" => "CONTRATACIÓN DE UN PROVEEDOR PARA EL SERVICIO DE ELABORACIÓN DE CONTENIDO DE ARTÍCULO CIENTÍFICO PARA SU PUBLICACIÓN EN UNA REVISTA INDEXADA",
            "url_pdf" => "https://drive.google.com/file/d/13_AffBKISwBWbe57c-vrHVXiTtIH7PJp/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-13 16:00:00",
            "last_date" => "2022-10-17 18:00:00",
            "created_at" => "2022-10-13 16:00:00",
            "updated_at" => "2022-10-13 16:00:00"
            ]
            ,[
            "description" => "Adquisición de medicamentos para la Unidad de Servicios Médicos",
            "url_pdf" => "https://drive.google.com/file/d/14h3yY3M6LXrmcssXwLXJI8g2yXt1kapK/view?usp=sharing",
            "typePost_id" => 1,
            "user_id" => 1,
            "start_date" => "2022-11-11 09:00:00",
            "last_date" => "2022-12-01 18:00:00",
            "created_at" => "2022-11-11 09:00:00",
            "updated_at" => "2022-11-11 09:00:00"
            ]
            ,[
            "description" => "Adquisición de materiales deportiva, para los Talleres Deportivos y Deportes de Alta Competencia de la UNDC.",
            "url_pdf" => "https://drive.google.com/file/d/1Z5uq-EnqvgRr-umGmlHWvLTC1eoVZ1-j/view?usp=sharing",
            "typePost_id" => 1,
            "user_id" => 1,
            "start_date" => "2022-10-14 09:00:00",
            "last_date" => "2022-10-24 18:00:00",
            "created_at" => "2022-10-14 09:00:00",
            "updated_at" => "2022-10-14 09:00:00"
            ]
            ,[
            "description" => "Solicito Cotizacion para el servicio de una Videoconferencia sobre el tema: “LOS RETOS DE LA TRANSFORMACIÓN DIGITAL EN EL PERÚ en la modalidad virtual dirigida a los docentes, estudiantes, profesionales y público en general, como parte del evento académico denominado: “IV Congreso Internacional de Investigación y Tecnologías de Información 2022”",
            "url_pdf" => "https://drive.google.com/file/d/1nynk0r45QXngLvxmYuEsUI1skN6xGdZL/view?usp=sharing",
            "typePost_id" => 1,
            "user_id" => 2,
            "start_date" => "2022-10-14 18:00:00",
            "last_date" => "2022-10-17 12:00:00",
            "created_at" => "2022-10-14 18:00:00",
            "updated_at" => "2022-10-14 18:00:00"
            ]
            ,[
            "description" => "Solicito Cotizacion para el servicio de una Videoconferencia sobre el tema: “MODELO DE GOBERNANZA DIGITAL PARA EL SERVICIO EDUCATIVO SUPERIOR UNIVERSITARIO” en la modalidad virtual dirigida a los docentes, estudiantes, profesionales y público en general, como parte del evento académico denominado: “IV Congreso Internacional de Investigación y Tecnologías de Información 2022”",
            "url_pdf" => "https://drive.google.com/file/d/1yFpcmppZVx1k1Bhj77L2HpgCscMUsIJM/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-14 18:00:00",
            "last_date" => "2022-10-18 18:00:00",
            "created_at" => "2022-10-14 18:00:00",
            "updated_at" => "2022-10-14 18:00:00"
            ]
            ,[
            "description" => "Solicito Cotizacion para el servicio de una Videoconferencia sobre el tema: “INTELIGENCIA ARTIFICIAL EN EL SECTOR SALUD” en la modalidad virtual dirigida a los docentes, estudiantes, profesionales y público en general, como parte del evento académico denominado: “IV Congreso Internacional de Investigación y Tecnologías de Información 2022”",
            "url_pdf" => "https://drive.google.com/file/d/1u0b7Bim1LzM0Z6gGDG-cCI1JTdk1q1dG/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-14 18:00:00",
            "last_date" => "2022-10-17 12:00:00",
            "created_at" => "2022-10-14 18:00:00",
            "updated_at" => "2022-10-14 18:00:00"
            ]
            ,[
            "description" => "Solicito Cotizacion para el servicio de una Videoconferencia sobre el tema: “INTELIGENCIA ARTIFICIAL Y SUS APLICACIONES” en la modalidad virtual dirigida a los docentes, estudiantes, profesionales y público en general, como parte del evento académico denominado: “IV Congreso Internacional de Investigación y Tecnologías de Información 2022”",
            "url_pdf" => "https://drive.google.com/file/d/1t_g7RsKqe9J5aekSGOr00GAd0da-f4xM/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-14 18:00:00",
            "last_date" => "2022-10-17 12:00:00",
            "created_at" => "2022-10-14 18:00:00",
            "updated_at" => "2022-10-14 18:00:00"
            ]
            ,[
            "description" => "Solicito Cotizacion para el servicio de una Videoconferencia sobre el tema: “DESARROLLO DE SOFTWARE CON SCRUM” en la modalidad virtual dirigida a los docentes, estudiantes, profesionales y público en general, como parte del evento académico denominado: “IV Congreso Internacional de Investigación y Tecnologías de Información 2022”",
            "url_pdf" => "https://drive.google.com/file/d/1aJIcyXyv8OZZmlFhPyfrKzv6hPgYRfF8/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-14 18:00:00",
            "last_date" => "2022-10-17 12:00:00",
            "created_at" => "2022-10-14 18:00:00",
            "updated_at" => "2022-10-14 18:00:00"
            ]
            ,[
            "description" => "Solicito Cotizacion para el servicio de una Videoconferencia sobre el tema: “APLICACIÓN DE LA INTELIGENCIA ARTIFICIAL EN RECURSOS HUMANOS” en la modalidad virtual dirigida a los docentes, estudiantes, profesionales y público en general, como parte del evento académico denominado: “IV Congreso Internacional de Investigación y Tecnologías de Información 2022”",
            "url_pdf" => "https://drive.google.com/file/d/1ZNU_rhfDGuJqQ2P7KJTfvogsFpSHCvqK/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" => 2,
            "start_date" => "2022-10-14 18:00:00",
            "last_date" => "2022-10-17 12:00:00",
            "created_at" => "2022-10-14 18:00:00",
            "updated_at" => "2022-10-14 18:00:00"
            ]
            ,[
            "description" => "Solicito Cotizacion para el servicio de una Videoconferencia sobre el tema: “INTELIGENCIA ARTIFICIAL Y SUS APLICACIONES” en la modalidad virtual dirigida a los docentes, estudiantes, profesionales y público en general, como parte del evento académico denominado: “IV Congreso Internacional de Investigación y Tecnologías de Información 2022”",
            "url_pdf" => "https://drive.google.com/file/d/1P7fEwdovcp2hCfs3Itdes_eBn-oiJmhf/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-14 18:00:00",
            "last_date" => "2022-10-17 12:00:00",
            "created_at" => "2022-10-14 18:00:00",
            "updated_at" => "2022-10-14 18:00:00"
            ]
            ,[
            "description" => "Solicito Cotizacion para el servicio de una Videoconferencia sobre el tema: “COMPETENCIA DIGITAL DOCENTE A PUERTAS DEL POST PANDEMIA” en la modalidad virtual dirigida a los docentes, estudiantes, profesionales y público en general, como parte del evento académico denominado: “IV Congreso Internacional de Investigación y Tecnologías de Información 2022”",
            "url_pdf" => "https://drive.google.com/file/d/1tO1awKsGI5VBo8fPrwAUGCtJ17q013V7/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-14 18:00:00",
            "last_date" => "2022-10-17 12:00:00",
            "created_at" => "2022-10-14 18:00:00",
            "updated_at" => "2022-10-14 18:00:00"
            ]
            ,[
            "description" => "Solicito Cotizacion para el servicio de una Videoconferencia sobre el tema: ¿CÓMO USAR LAS TI EN EL ÁREA DE RECURSOS HUMANOS? en la modalidad virtual dirigida a los docentes, estudiantes, profesionales y público en general, como parte del evento académico denominado: “IV Congreso Internacional de Investigación y Tecnologías de Información 2022”",
            "url_pdf" => "https://drive.google.com/file/d/15Ba2AAHzLWjbGjhzWgDV3pGDt-jR0IyN/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-14 18:00:00",
            "last_date" => "2022-10-17 12:00:00",
            "created_at" => "2022-10-14 18:00:00",
            "updated_at" => "2022-10-14 18:00:00"
            ]
            ,[
            "description" => "Servicio de alquiler de maquinaría agrícola (tractor) a cargo de una persona natural para actividades agrícolas en 5.8 hectáreas del del Fundo Tercer Mundo de la Escuela Profesional de Agronomía de la UNDC.",
            "url_pdf" => "servicio de alquiler de maquinaría agrícola (tractor) a cargo de una persona natural para actividades agrícolas en 5.8 hectáreas del del Fundo Tercer Mundo de la Escuela Profesional de Agronomía de la UNDC.",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-14 18:00:00",
            "last_date" => "2022-10-17 12:00:00",
            "created_at" => "2022-10-14 18:00:00",
            "updated_at" => "2022-10-14 18:00:00"
            ]
            ,[
            "description" => "Adquisición de 69 Diplomas con caligrafiado de Titulo Profesional para los Titulados de la Universidad Nacional de Cañete",
            "url_pdf" => "https://drive.google.com/file/d/1Ak9lxbVQsP5YiJTjgBulGLL3vG8qxmB5/view?usp=sharing",
            "typePost_id" => 1,
            "user_id" => 1,
            "start_date" => "2022-10-17 08:00:00",
            "last_date" => "2022-10-18 13:00:00",
            "created_at" => "2022-10-17 08:00:00",
            "updated_at" => "2022-10-17 08:00:00"
            ]
            ,[
            "description" => "SERVICIO DE UN PROFESIONAL ESPECIALIZADO PARA EL SOPORTE Y COORDINACIÓN DEL PLAN DE CONTINGENCIA Y CONTINUIDAD OPERATIVA DEL PERSONAL Y ESTUDIANTES DE LA UNIVERSIDAD NACIONAL DE CAÑETE, EN EL MARCO DE LA RESOLUCIÓN VICEMINISTERIAL 076-2022-MINEDU Y SU MODIFICATORIA DEL ARTÍCULO 3º MEDIANTE RESOLUCIÓN VICEMINISTERIAL 094-2022-MINEDU.",
            "url_pdf" => "https://drive.google.com/file/d/1yB3glUvKkIYpEcOQHE70w_Wu8eT8kjwJ/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-17 08:00:00",
            "last_date" => "2022-10-18 12:00:00",
            "created_at" => "2022-10-17 08:00:00",
            "updated_at" => "2022-10-17 08:00:00"
            ]
            ,[
            "description" => "Contratación del servicio especializado en instalaciones eléctricas - Técnico para la Unidad de Servicios Generales de la Universidad Nacional de Cañete",
            "url_pdf" => "https://drive.google.com/file/d/17bdW-blvW2Aiaxapi8XyGQawvcQRJ8TT/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-17 10:47:00",
            "last_date" => "2022-10-25 18:00:00",
            "created_at" => "2022-10-17 10:47:00",
            "updated_at" => "2022-10-17 10:47:00"
            ]
            ,[
            "description" => "SERVICIO DE MANTENIMIENTO DE LA PLANTA DE TRATAMIENTO DE AGUAS RESIDUALES Y SISTEMA DE BOMBEO DE AGUA DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1_t9zyLw6DLRBLDfmR2JcrvbinrLrsX3O/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-17 10:56:00",
            "last_date" => "2022-10-19 18:00:00",
            "created_at" => "2022-10-17 10:56:00",
            "updated_at" => "2022-10-17 10:56:00"
            ]
            ,[
            "description" => "Adquisición de implementos para los puestos de seguridad y vigilancia de los locales de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/1NjVAjlU7--ZkkTVPacBkfQYfsyCbx17T/view?usp=sharing",
            "typePost_id" => 1,
            "user_id" => 1,
            "start_date" => "2022-10-17 15:00:00",
            "last_date" => "2022-10-18 18:00:00",
            "created_at" => "2022-10-17 15:00:00",
            "updated_at" => "2022-10-17 15:00:00"
            ]
            ,[
            "description" => "Servicio de inscripción para participar de la capacitación denominado Curso: “GESTIÓN POR PROCESOS PARA EL SECTOR PÚBLICO”",
            "url_pdf" => "https://drive.google.com/file/d/1GNSNGG_wXcsLUQ8iaiMT07aMC73wWSA4/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-19 09:00:00",
            "last_date" => "2022-10-20 13:00:00",
            "created_at" => "2022-10-19 09:00:00",
            "updated_at" => "2022-10-19 09:00:00"
            ]
            ,[
            "description" => "Servicio de capacitación denominado Curso: “SEMINARIO CIERRE CONTABLE DEL EJERCICIO FISCAL 2022: ELABORACIÓN Y PRESENTACIÓN DE LA INFORMACIÓN FINANCIERA Y PRESUPUESTARIA EN EL SECTOR PÚBLICO”",
            "url_pdf" => "https://drive.google.com/file/d/1vxaO1vUEDtzXZnpwdLaYmObfEGJ13bp-/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-19 09:00:00",
            "last_date" => "2022-10-20 13:00:00",
            "created_at" => "2022-10-19 09:00:00",
            "updated_at" => "2022-10-19 09:00:00"
            ]
            ,[
            "description" => "Servicio de capacitación denominado: “CURSO ELABORACIÓN DEL ESTADO DE FLUJO DE EFECTIVO EF-04”",
            "url_pdf" => "https://drive.google.com/file/d/13Njt6RabjBPh-ueVHxoalubcniqL7tf_/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-19 09:00:00",
            "last_date" => "2022-10-20 13:00:00",
            "created_at" => "2022-10-19 09:00:00",
            "updated_at" => "2022-10-19 09:00:00"
            ]
            ,[
            "description" => "Servicio de instructor de apoyo para el taller de danza. DANZAS DE LA COSTA, SIERRA Y SELVA. ",
            "url_pdf" => "https://drive.google.com/file/d/1Qt-Su1bWMIkJF87T5i7GpACdeEajCqPx/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-19 12:00:00",
            "last_date" => "2022-10-20 13:00:00",
            "created_at" => "2022-10-19 12:00:00",
            "updated_at" => "2022-10-19 12:00:00"
            ]
            ,[
            "description" => "Contratación de Servicio de Mantenimiento Correctivo de Una Impresora Multifuncional Epson L5190",
            "url_pdf" => "https://drive.google.com/file/d/1tB1wEEFLUIPK9lRaXY_YsHepSWuKxLqL/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-19 13:00:00",
            "last_date" => "2022-10-21 13:00:00",
            "created_at" => "2022-10-19 13:00:00",
            "updated_at" => "2022-10-19 13:00:00"
            ]
            ,[
            "description" => "Contratación de Servicio de análisis, desarrollo y mantenimiento de soluciones informáticas para la Dirección de Registros Académicos de la UNDC",
            "url_pdf" => "https://drive.google.com/file/d/10dLJIJBG1Kq0x3Ygma5QMVCxHU5Ux0uJ/view?usp=sharing",
            "typePost_id" => 2,
            "user_id" => 1,
            "start_date" => "2022-10-20 10:00:00",
            "last_date" => "2022-10-21 23:59:00",
            "created_at" => "2022-10-20 10:00:00",
            "updated_at" => "2022-10-20 10:00:00"
            ]
            ,[
            "description" => "Adquisición de equipos y dispositivos para el taller de teatro de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/1GvPUPoT9v1guOVW-tqtJFQ47FsKvKpxs/view?usp=sharing",
            "typePost_id" => 1,
            "user_id" => 1,
            "start_date" => "2022-10-20 10:00:00",
            "last_date" => "2022-11-22 18:00:00",
            "created_at" => "2022-10-20 10:00:00",
            "updated_at" => "2022-10-20 10:00:00"
            ]
            ,[
            "description" => "Contratación de Servicio de mejora de documentación de procedimientos de gestión operativa de plataforma de soporte de base de datos para la Dirección de Registros Académicos de la UNDC",
            "url_pdf" => "https://drive.google.com/file/d/1cLWtajWWc7gdPPuaxofH89lANwuYHkMd/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-20 10:00:00",
            "last_date" => "2022-10-25 18:00:00",
            "created_at" => "2022-10-20 10:00:00",
            "updated_at" => "2022-10-20 10:00:00"
            ]
            ,[
            "description" => "Servicios de consultoría por parte de un especialista, para la identificacion de materia patentable y redaccion de cinco (5) documentos técnicos de patentes de modelo de utilidad a favor de la Universidad Nacional de Cañete ante INDECOPI.",
            "url_pdf" => "https://drive.google.com/file/d/1ENekkH8-Hs_LtquA8j02-hU0tHVBwqXo/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-20 10:00:00",
            "last_date" => "2022-10-21 12:00:00",
            "created_at" => "2022-10-20 10:00:00",
            "updated_at" => "2022-10-20 10:00:00"
            ]
            ,[
            "description" => "Adquisición de (50) mesas de plástico. ",
            "url_pdf" => "https://drive.google.com/file/d/1Vus3FUgx3vxN7cAiU6Z4mHucsj0pFYxC/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-20 12:00:00",
            "last_date" => "2022-10-21 10:00:00",
            "created_at" => "2022-10-20 12:00:00",
            "updated_at" => "2022-10-20 12:00:00"
            ]
            ,[
            "description" => "Adquisición de instrumentos de marco musical para el taller de Danza",
            "url_pdf" => "https://drive.google.com/file/d/19s1vu4IpTt0NTkTdZlnBuXZ2Jt5TEay2/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-21 08:00:00",
            "last_date" => "2022-10-24 12:00:00",
            "created_at" => "2022-10-21 08:00:00",
            "updated_at" => "2022-10-21 08:00:00"
            ]
            ,[
            "description" => "Adquisición de INSTRUMENTOS MUSICALES para el Taller de Música.",
            "url_pdf" => "https://drive.google.com/file/d/1e0gNZAsPXzInxF3krLXIN9k63eX4hLXn/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-21 09:00:00",
            "last_date" => "2022-10-24 23:00:00",
            "created_at" => "2022-10-21 09:00:00",
            "updated_at" => "2022-10-21 09:00:00"
            ]
            ,[
            "description" => "SERVICIO DE ASISTENCIA TÉCNICA PARA SISTEMAS DE INFORMACIÓN DE LAS ESCUELAS PROFESIONALES DE ADMINISTRACIÓN DE TURISMO Y HOTELERÍA Y DE AGRONOMÍA DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1DNFZgOZ4bHjhZtvTlaV6eyO8WFcO8Auw/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-20 10:00:00",
            "last_date" => "2022-10-21 18:00:00",
            "created_at" => "2022-10-20 10:00:00",
            "updated_at" => "2022-10-20 10:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE ACCESORIOS PARA INSTRUMENTOS MUSICALES Y EQUIPAMIENTO DEL TALLER DE MÚSICA 2022 ",
            "url_pdf" => "https://drive.google.com/file/d/1Qt3KZFr6MoV9WVrNw1oRc77FbzhOuHn9/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-21 10:00:00",
            "last_date" => "2022-10-24 23:59:00",
            "created_at" => "2022-10-21 10:00:00",
            "updated_at" => "2022-10-21 10:00:00"
            ]
            ,[
            "description" => "Servicio Especializado en Registro de Datos en Grados y Títulos.",
            "url_pdf" => "https://drive.google.com/file/d/1BDEml5t-HLRZNYYV9jiZUw-COykX4EHK/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-20 13:00:00",
            "last_date" => "2022-10-21 18:00:00",
            "created_at" => "2022-10-20 13:00:00",
            "updated_at" => "2022-10-20 13:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE MATERIALES DE LIMPIEZA PARA LA DIRECCIÓN DE BIENESTAR UNIVERSITARIO",
            "url_pdf" => "https://drive.google.com/file/d/1KEU0uZpvZeTc7tQofw8YVncGgzZnFqDk/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-21 16:00:00",
            "last_date" => "2022-10-24 18:00:00",
            "created_at" => "2022-10-21 16:00:00",
            "updated_at" => "2022-10-21 16:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE MATERIALES DE DECORACION PARA LA DIRECCIÓN DE BIENESTAR UNIVERSITARIO",
            "url_pdf" => "https://drive.google.com/file/d/1vONhDocPM77Oqmh8_V-DB6Te9rsQHB3F/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-21 16:00:00",
            "last_date" => "2022-10-24 18:00:00",
            "created_at" => "2022-10-21 16:00:00",
            "updated_at" => "2022-10-21 16:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE CONECTORES PARA EL MANTENIMIENTO DE GUITARRAS Y CABLES DE CONEXIÓN PARA EL TALLER DE MÚSICA 2022",
            "url_pdf" => "https://drive.google.com/file/d/1RppMtOrS2UfxYIMvuu1ip7JDouY4GYSt/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-21 16:00:00",
            "last_date" => "2022-10-25 18:00:00",
            "created_at" => "2022-10-21 16:00:00",
            "updated_at" => "2022-10-21 16:00:00"
            ]
            ,[
            "description" => "Adquisición de juegos de pilas con cargador. ",
            "url_pdf" => "https://drive.google.com/file/d/19xUziFKeCefWkF6RUDo7rjID68_CHfJ4/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-15 16:00:00",
            "last_date" => "2022-11-16 18:00:00",
            "created_at" => "2022-11-15 16:00:00",
            "updated_at" => "2022-11-15 16:00:00"
            ]
            ,[
            "description" => "CONTRATACIÓN DEL SERVICIO PARA SERVICIO DE ESTUDIO DE LA DEMANDA SOCIAL Y PERTINENCIA DE LOS PROGRAMAS DE ESTUDIOS DE LAS CINCO ESCUELAS PROFESIONALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE ALINEADOS AL MODELO DE RENOVACIÓN DE LICENCIAMIENTO Y ACREDITACIÓN.",
            "url_pdf" => "https://drive.google.com/file/d/1zmCwA4HlbdMwCeeobSGjNhAjXuvOCvwl/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-24 08:30:00",
            "last_date" => "2022-10-25 18:00:00",
            "created_at" => "2022-10-24 08:30:00",
            "updated_at" => "2022-10-24 08:30:00"
            ]
            ,[
            "description" => "Adquisición de equipos de protección personal y de seguridad para el personal de mantenimiento de la Universidad Nacional de Cañete",
            "url_pdf" => "https://drive.google.com/file/d/1A6_wfaczRQbUR9GIpDdUbcCbmMNvQFDy/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-24 08:30:00",
            "last_date" => "2022-10-25 18:00:00",
            "created_at" => "2022-10-24 08:30:00",
            "updated_at" => "2022-10-24 08:30:00"
            ]
            ,[
            "description" => "Adquisición de Útiles de Oficina para la Unidad de Archivo Central de la Secretaria General de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/1D8xPeeYo0q4Dmvx4VpDBAkSRwBZdcMvZ/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-24 08:30:00",
            "last_date" => "2022-10-25 18:00:00",
            "created_at" => "2022-10-24 08:30:00",
            "updated_at" => "2022-10-24 08:30:00"
            ]
            ,[
            "description" => "Adquisición de equipo de sonido y accesorios para la Dirección De Proyección Social y Extensión Universitaria.",
            "url_pdf" => "https://drive.google.com/file/d/1Dur78vZxv3Xirn8MxLDX2PfoFXCaQ169/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-24 09:00:00",
            "last_date" => "2022-10-25 10:00:00",
            "created_at" => "2022-10-24 09:00:00",
            "updated_at" => "2022-10-24 09:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE LETREROS INFORMATIVOS PARA LA DIRECCIÓN DE PROYECCIÓN SOCIAL Y EXTENSIÓN UNIVERSITARIA",
            "url_pdf" => "https://drive.google.com/file/d/1Zfbhgir_SLAxUmnK3a4MhKDSz1M5EpAc/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-24 08:30:00",
            "last_date" => "2022-10-25 18:00:00",
            "created_at" => "2022-10-24 08:30:00",
            "updated_at" => "2022-10-24 08:30:00"
            ]
            ,[
            "description" => "Solicito Cotizacion para la Contratación de Servicio de Mantenimiento Correctivo de Una Impresora Multifuncional Epson L5190",
            "url_pdf" => "https://drive.google.com/file/d/1tB1wEEFLUIPK9lRaXY_YsHepSWuKxLqL/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-24 09:00:00",
            "last_date" => "2022-10-26 10:00:00",
            "created_at" => "2022-10-24 09:00:00",
            "updated_at" => "2022-10-24 09:00:00"
            ]
            ,[
            "description" => "Contratación de Servicio de Diagramación de Artículos Científicos para la Revista de Investigación Cañetana de la Universidad Nacional de Cañete",
            "url_pdf" => "https://drive.google.com/file/d/1bcwYrjDK49ULz5kbmbX9VOK_wC3wwPNs/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-24 17:00:00",
            "last_date" => "2022-11-18 17:00:00",
            "created_at" => "2022-10-24 17:00:00",
            "updated_at" => "2022-10-24 17:00:00"
            ]
            ,[
            "description" => "Adquisición de toldos desmontables para la Dirección de Bienestar Universitario",
            "url_pdf" => "https://drive.google.com/file/d/1SIg9DKJ_jNMPmmV3w5ZYpNz2axw8x4mo/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-24 16:00:00",
            "last_date" => "2022-10-26 18:00:00",
            "created_at" => "2022-10-24 16:00:00",
            "updated_at" => "2022-10-24 16:00:00"
            ]
            ,[
            "description" => "Servicio de Capacitación “El disfrute de una relación de pareja” ",
            "url_pdf" => "https://drive.google.com/file/d/1owxUburO7jfZoQYIEJ6GbflF7HRFKWjL/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-25 08:00:00",
            "last_date" => "2022-10-26 13:00:00",
            "created_at" => "2022-10-25 08:00:00",
            "updated_at" => "2022-10-25 08:00:00"
            ]
            ,[
            "description" => "SERVICIO DE MANTENIMIENTO DE LA INFRAESTRUCTURA DE LOS LOCALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1ME_RKPJH8_g69e7qPyVPmEZQLmfDYaZ3/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-25 10:00:00",
            "last_date" => "2022-11-02 16:00:00",
            "created_at" => "2022-10-25 10:00:00",
            "updated_at" => "2022-10-25 10:00:00"
            ]
            ,[
            "description" => "SERVICIO DE MANTENIMIENTO DE LA INFRAESTRUCTURA DE LOS LOCALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1ME_RKPJH8_g69e7qPyVPmEZQLmfDYaZ3/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-25 10:00:00",
            "last_date" => "2022-11-02 16:00:00",
            "created_at" => "2022-10-25 10:00:00",
            "updated_at" => "2022-10-25 10:00:00"
            ]
            ,[
            "description" => "Contratación del servicio de alquiler de inmueble para la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/1wjtakEYDN_cB1d1BleRGhllXIrFAB7_H/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-25 10:00:00",
            "last_date" => "2022-10-28 12:00:00",
            "created_at" => "2022-10-25 10:00:00",
            "updated_at" => "2022-10-25 10:00:00"
            ]
            ,[
            "description" => "SERVICIO DE SUBSCRIPCIÓN ANUAL DE PLATAFORMA DE BOLSA DE TRABAJO DE SEGUIMIENTO AL GRADUADO DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            "url_pdf" => "https://drive.google.com/file/d/1LcRU3gQqzduo8iwY-auA4_TqSsAUo_Fo/view?usp=sharing",
            "user_id" => 1,
            "typePost_id" =>2,
            "start_date" => "2022-10-25 12:00:00",
            "last_date" => "2022-10-27 12:00:00",
            "created_at" => "2022-10-25 12:00:00",
            "updated_at" => "2022-10-25 12:00:00"
            ]
            ,[
            "description" => "Servicio Especializado de Responsabilidad Social Universitaria para la Universidad Nacional de Cañete",
            "url_pdf" => "",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-25 12:00:00",
            "last_date" => "2022-11-21 13:00:00",
            "created_at" => "2022-10-25 12:00:00",
            "updated_at" => "2022-10-25 12:00:00"
            ]
            ,[
            "description" => "SERVICIOS DE PASAJES AÉREOS, HOSPEDAJES Y ALIMENTACIÓN EN LA CIUDAD DE CUSCO PARA EL TALLER DE MÚSICA DE LA DIRECCIÓN DE BIENESTAR UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            "url_pdf" => "https://drive.google.com/file/d/1cBT2YvEGBjv5g70Uz6CcbienDGQNgXgl/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-25 12:00:00",
            "last_date" => "2022-10-28 18:00:00",
            "created_at" => "2022-10-25 12:00:00",
            "updated_at" => "2022-10-25 12:00:00"
            ]
            ,[
            "description" => "Servicio de mantenimiento correctivo del sistema de embrague de la unidad vehicular de placa EGO-951 de propiedad de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/1Pk-TdNJFxPXnre7OpOqSCxyxVpprjc6s/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-25 13:00:00",
            "last_date" => "2022-10-27 15:00:00",
            "created_at" => "2022-10-25 13:00:00",
            "updated_at" => "2022-10-25 13:00:00"
            ]
            ,[
            "description" => "SERVICIO DE IMPRESIÓN DE VOLANTES PUBLICITARIOS PARA EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1ZyfRI36j8M_ZvfNHnkyEnVPpYgajnjol/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-26 13:00:00",
            "last_date" => "2022-10-28 18:00:00",
            "created_at" => "2022-10-26 13:00:00",
            "updated_at" => "2022-10-26 13:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE VESTIMENTAS PARA EL TALLER DE MÚSICA ",
            "url_pdf" => "https://drive.google.com/file/d/166cM-G41l1wTRCATOccBrkaoxY-a1X2W/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-26 13:00:00",
            "last_date" => "2022-11-07 18:00:00",
            "created_at" => "2022-10-26 13:00:00",
            "updated_at" => "2022-10-26 13:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE VESTIMENTAS PARA EL TALLER DE DANZAS DE LA DIRECCIÓN DE BIENESTAR UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            "url_pdf" => "https://drive.google.com/file/d/1DKvBMNzKAZqPcDVQltE9Hci7czWC5CEv/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-26 13:00:00",
            "last_date" => "2022-11-18 18:00:00",
            "created_at" => "2022-10-26 13:00:00",
            "updated_at" => "2022-10-26 13:00:00"
            ]
            ,[
            "description" => "SERVICIO DE ACOMPAÑAMIENTO PARA LA IMPLEMENTACIÓN DE UN SISTEMA DE GESTIÓN ANTISOBORNO CON BASE A LOS REQUISITOS DE LA NORMA TÉCNICA PERUANA ISO 37001:2017",
            "url_pdf" => "https://drive.google.com/file/d/1bUZDpnii82mFqqBookLWTKD_yX8X-FUc/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-27 09:00:00",
            "last_date" => "2022-11-02 18:00:00",
            "created_at" => "2022-10-27 09:00:00",
            "updated_at" => "2022-10-27 09:00:00"
            ]
            ,[
            "description" => "CURSO DE ESPECIALIZACIÓN “DISEÑO Y APLICACIÓN DE INSTRUMENTOS PARA LA MEDICIÓN DE COMPETENCIAS DEL PERFIL DE INGRESO Y OBJETIVOS EDUCACIONALES CONTEXTUALIZADO A LOS MODELOS DE RENOVACIÓN DE LICENCIA Y ACREDITACIÓN INSTITUCIONAL”",
            "url_pdf" => "https://drive.google.com/file/d/1dGwr0qnTQF4ZHMvz4iqY-Sbp6is4wtfo/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-27 12:00:00",
            "last_date" => "2022-10-27 14:00:00",
            "created_at" => "2022-10-27 12:00:00",
            "updated_at" => "2022-10-27 12:00:00"
            ]
            ,[
            "description" => "Conferencia virtual en el tema: TALLER EN TEMAS EMPRESARIALES DE GESTION Y ORGANIZACIÓN ",
            "url_pdf" => "https://drive.google.com/file/d/1u0sIuLBm2oMV_UyKICtZbvBDTyABsqBH/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-27 10:00:00",
            "last_date" => "2022-10-27 16:00:00",
            "created_at" => "2022-10-27 10:00:00",
            "updated_at" => "2022-10-27 10:00:00"
            ]
            ,[
            "description" => "TALLER DE ETICA EN LA FUNCION PUBLICA dirigido a egresados y graduados de la Escuela Profesional de Administración de la UNDC",
            "url_pdf" => "https://drive.google.com/file/d/1eAN12EGMjor31H1qom_gyAld05PBNi4z/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-27 10:00:00",
            "last_date" => "2022-10-27 16:00:00",
            "created_at" => "2022-10-27 10:00:00",
            "updated_at" => "2022-10-27 10:00:00"
            ]
            ,[
            "description" => "CAPACITACION EN MARKETING Y VENTAS ‘’Capacitación en Marketing de servicios’’ dirigido a egresados y graduados de la Escuela Profesional de Administración de la UNDC",
            "url_pdf" => "https://drive.google.com/file/d/1EdKYjjulkecNz-lV8zVFIpJ4PcZnLhz_/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-27 10:00:00",
            "last_date" => "2022-10-27 16:00:00",
            "created_at" => "2022-10-27 10:00:00",
            "updated_at" => "2022-10-27 10:00:00"
            ]
            ,[
            "description" => "Contratación para realizar el servicio de Seguimiento y Ejecución del Cuadro de necesidades etapa de consolidación y aprobación de la dirección de bienestar universitario.",
            "url_pdf" => "https://drive.google.com/file/d/1w3pdsOXznq5oRAhd4QF_mZVdZDvOEStq/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-27 10:00:00",
            "last_date" => "2022-10-27 18:00:00",
            "created_at" => "2022-10-27 10:00:00",
            "updated_at" => "2022-10-27 10:00:00"
            ]
            ,[
            "description" => "SERVICIO DE MANTENIMIENTO, SEGUIMIENTO Y MEJORA CONTINUA DEL SISTEMA DE GESTIÓN DE CALIDAD ISO 9001:2015 Y/O 21001:2018, 14001:2015 Y 45001:2018 EN LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1oDBRiVB08hDWB4o_tRL0hX_6XYz-d1nC/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-28 08:00:00",
            "last_date" => "2022-11-04 18:00:00",
            "created_at" => "2022-10-28 08:00:00",
            "updated_at" => "2022-10-28 08:00:00"
            ]
            ,[
            "description" => "Adquisición de mascarillas de tela y lanyard con frasco dispensador de alcohol.",
            "url_pdf" => "https://drive.google.com/file/d/1yAzcnHhgauYozGiUK8Hww6PEM_pwjUx7/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-28 12:00:00",
            "last_date" => "2022-11-01 18:00:00",
            "created_at" => "2022-10-28 12:00:00",
            "updated_at" => "2022-10-28 12:00:00"
            ]
            ,[
            "description" => "SERVICIO DE EXAMEN MÉDICO OCUPACIONAL PARA LOS TRABAJADORES DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            "url_pdf" => "https://drive.google.com/file/d/1TqmfEFnU7JE26s3sc2y5AMJ6QljMzNfp/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-28 12:00:00",
            "last_date" => "2022-11-08 18:00:00",
            "created_at" => "2022-10-28 12:00:00",
            "updated_at" => "2022-10-28 12:00:00"
            ]
            ,[
            "description" => "“SERVICIO DE MANTENIMIENTO DE EQUIPOS Y MAQUINARIAS DE LA UNIVERSIDAD NACIONAL DE CAÑETE”",
            "url_pdf" => "https://drive.google.com/file/d/1kR_GR8Fv_TBb6aEh-rlzAWC-YEFXRGSY/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-28 12:00:00",
            "last_date" => "2022-11-01 18:00:00",
            "created_at" => "2022-10-28 12:00:00",
            "updated_at" => "2022-10-28 12:00:00"
            ]
            ,[
            "description" => "Adquisición de equipos multimedia para sala de reuniones",
            "url_pdf" => "https://drive.google.com/file/d/1yf2Pgz6PwnDX_AraxjtnzRQb7a9MgwTx/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-28 12:00:00",
            "last_date" => "2022-11-11 18:00:00",
            "created_at" => "2022-10-28 12:00:00",
            "updated_at" => "2022-10-28 12:00:00"
            ]
            ,[
            "description" => "CONTRATACIÓN DE UN SERVICIO DE PERITAJE PARA LA OBRA “INSTALACIÓN DE INFRAESTRUCTURA Y EQUIPAMIENTO PARA EL PROGRAMA DE ESTUDIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE-DISTRITO DE SAN LUISPROVINCIA DE CAÑETE-REGIÓN LIMA”.",
            "url_pdf" => "https://drive.google.com/file/d/1zIc9bZkdzEW64IsKNBUKobppMURtM4lz/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-28 12:00:00",
            "last_date" => "2022-11-03 18:00:00",
            "created_at" => "2022-10-28 12:00:00",
            "updated_at" => "2022-10-28 12:00:00"
            ]
            ,[
            "description" => "Adquisición de Útiles de Oficina - Cajas Archivadoras de Cartón Prensado",
            "url_pdf" => "https://drive.google.com/file/d/1yN5BvptegtjoZBlK8QxofF0DTQhRU3qn/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-28 12:00:00",
            "last_date" => "2022-11-01 18:00:00",
            "created_at" => "2022-10-28 12:00:00",
            "updated_at" => "2022-10-28 12:00:00"
            ]
            ,[
            "description" => "Adquisición de uniformes de trabajo para el personal de mantenimiento y limpieza de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/1GoFTJ0cLlxQTKoJt3DH1NPKoEQ5fnFhM/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-28 12:00:00",
            "last_date" => "2022-11-01 18:00:00",
            "created_at" => "2022-10-28 12:00:00",
            "updated_at" => "2022-10-28 12:00:00"
            ]
            ,[
            "description" => "SERVICIO ESPECIALIZADO EN SISTEMAS INFORMÁTICOS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1wv99cY1DzTiVIcCGl6ByM0Tix2inbMRb/view?usp=sharing",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-10-28 12:00:00",
            "last_date" => "2022-11-17 13:00:00",
            "created_at" => "2022-10-28 12:00:00",
            "updated_at" => "2022-10-28 12:00:00"
            ]
            ,[
            "description" => "Adquisición de materiales de limpieza para los locales de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/1AH-2FN0kwY7GLM7JnPN2gAt7ZiGu_cyP/view?usp=sharing",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-10-28 12:00:00",
            "last_date" => "2022-11-04 18:00:00",
            "created_at" => "2022-10-28 12:00:00",
            "updated_at" => "2022-10-28 12:00:00"
            ]
            ,[
            "description" => "Adquisición de combustible DIESEL B5 y GASOLINA DE 97 OCTANOS para las unidades de transporte de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/drive/folders/1xljgHJtIxN3tMAlQQdTyWKpUPhi0hP4s?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-02 15:00:00",
            "last_date" => "2022-11-08 15:00:00",
            "created_at" => "2022-11-02 15:00:00",
            "updated_at" => "2022-11-02 15:00:00"
            ]
            ,[
            "description" => "SERVICIO DE SEGUIMIENTO Y MONITOREO DE ACTIVIDADES DE CONTRATACION DE BIENES Y SERVICIOS PARA LA UNIDAD DE ABASTECIMIENTO",
            "url_pdf" => "https://drive.google.com/file/d/1u0APXn2X74ij5zvpnDR8j2JyOVJVukKG/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-02 13:00:00",
            "last_date" => "2022-11-03 15:00:00",
            "created_at" => "2022-11-02 13:00:00",
            "updated_at" => "2022-11-02 13:00:00"
            ]
            ,[
            "description" => "CONTRATACIÓN DE UN SERVICIO DE PERITAJE PARA LA OBRA “INSTALACIÓN DE INFRAESTRUCTURA Y EQUIPAMIENTO PARA EL PROGRAMA DE ESTUDIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE-DISTRITO DE SAN LUISPROVINCIA DE CAÑETE-REGIÓN LIMA”.",
            "url_pdf" => "https://drive.google.com/file/d/1TmRpePafRxdl7kmVQzksNMXGukDCETEz/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-02 10:00:00",
            "last_date" => "2022-11-04 18:00:00",
            "created_at" => "2022-11-02 10:00:00",
            "updated_at" => "2022-11-02 10:00:00"
            ]
            ,[
            "description" => "Servicio de seguridad privada para las instalaciones de los locales académicos Casa de la Cultura, CNI, Fundo Don Luis, local Casuarinas, sede administrativa y el Centro de Investigación para la sustentabilidad Lunahuaná de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/1h4X3vUCUlZOoc3VLRmoyogqFShpVaIzT/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-03 08:00:00",
            "last_date" => "2022-11-07 18:00:00",
            "created_at" => "2022-11-03 08:00:00",
            "updated_at" => "2022-11-03 08:00:00"
            ]
            ,[
            "description" => "Adquisición de (03) discos duros. ",
            "url_pdf" => "https://drive.google.com/file/d/12MhEC68ULRcAUfvABI4qduVORQxzeGvZ/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-03 08:00:00",
            "last_date" => "2022-11-04 18:00:00",
            "created_at" => "2022-11-03 08:00:00",
            "updated_at" => "2022-11-03 08:00:00"
            ]
            ,[
            "description" => "Adquisición de indumentaria para elenco de teatro. ",
            "url_pdf" => "https://drive.google.com/file/d/17ZaZ15MtJRanNtg_2rBvI2FMHrPGT0FN/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-03 08:00:00",
            "last_date" => "2022-11-07 18:00:00",
            "created_at" => "2022-11-03 08:00:00",
            "updated_at" => "2022-11-03 08:00:00"
            ]
            ,[
            "description" => "Adquisición de implementos educacionales para el taller de teatro. ",
            "url_pdf" => "https://drive.google.com/file/d/1J3TO2lMtpfptfLDWv2oy0Bu_PzjgIKfZ/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-03 08:00:00",
            "last_date" => "2022-11-07 18:00:00",
            "created_at" => "2022-11-03 08:00:00",
            "updated_at" => "2022-11-03 08:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE IMPRESORA MULTIFUNCIONAL PARA LA DIRECCIÓN DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1hqhyhFsW6s9RdS-2X3DyXPqQgt2P4hSK/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-04 09:00:00",
            "last_date" => "2022-11-08 13:00:00",
            "created_at" => "2022-11-04 09:00:00",
            "updated_at" => "2022-11-04 09:00:00"
            ]
            ,[
            "description" => "SERVICIO DE CAPACITACIÓN PARA EL FORTALECIMIENTO EN TEMAS DE AUTOEVALUACIÓN CON FINES DE ACREDITACIÓN PARA COMITÉS DE CALIDAD DE LAS ESCUELAS PROFESIONALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/10bFycwVmPKztoRAZJQcSvl7znLVpMNdt/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-04 11:00:00",
            "last_date" => "2022-11-11 18:00:00",
            "created_at" => "2022-11-04 11:00:00",
            "updated_at" => "2022-11-04 11:00:00"
            ]
            ,[
            "description" => "Adquisición de 34 Diplomas de Titulación con caligrafiado y 6 Diplomas de Bachiller con caligrafiado para los Graduados de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/1Chzie5_slIoXOFJmy78ligxkZA6bQHX-/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-04 13:00:00",
            "last_date" => "2022-11-07 18:00:00",
            "created_at" => "2022-11-04 13:00:00",
            "updated_at" => "2022-11-04 13:00:00"
            ]
            ,[
            "description" => "Adquisición de 26 Porta Diplomas para los graduados de la UNDC dividido en (16 Porta Diplomas para Titulados y 10 Porta Diplomas para Bachiller).",
            "url_pdf" => "https://drive.google.com/file/d/1HJwIKzGIf7CdWfQlHyOBIRZgdavpmPq0/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-04 13:30:00",
            "last_date" => "2022-11-07 12:00:00",
            "created_at" => "2022-11-04 13:30:00",
            "updated_at" => "2022-11-04 13:30:00"
            ]
            ,[
            "description" => "Adquisición de tintas para impresora multifuncional para la Dirección de Servicios Educativos de Extensión de la UNDC.",
            "url_pdf" => "https://drive.google.com/file/d/1QKnBWSCSKkFc_SdBycAOjAwhekGlit6i/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-04 14:00:00",
            "last_date" => "2022-11-07 12:00:00",
            "created_at" => "2022-11-04 14:00:00",
            "updated_at" => "2022-11-04 14:00:00"
            ]
            ,[
            "description" => "Adquisición de impresora multifuncional para la Dirección de Servicios Educativos de Extensión de la UNDC.",
            "url_pdf" => "https://drive.google.com/file/d/1C6JLQ65BqXHhjxx3xdTGdoEYPpAKUOvV/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-04 14:00:00",
            "last_date" => "2022-11-07 12:00:00",
            "created_at" => "2022-11-04 14:00:00",
            "updated_at" => "2022-11-04 14:00:00"
            ]
            ,[
            "description" => "Adquisición de una Impresora Multifuncional para la Escuela Profesional de Ingeniería de Sistemas de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/19lMB66XV68Fg_xUInZrLGBqzbfLVhNAR/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-04 15:00:00",
            "last_date" => "2022-11-08 12:00:00",
            "created_at" => "2022-11-04 15:00:00",
            "updated_at" => "2022-11-04 15:00:00"
            ]
            ,[
            "description" => "ADQUISICION DE ESCRITORIOS PARA LA UNIDAD DE ABASTECIMIENTO DE LA UNDC",
            "url_pdf" => "https://drive.google.com/file/d/1bG6WVM-HG2_EjUbJVpikTBFqoVoJ_Kdu/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-07 09:00:00",
            "last_date" => "2022-11-07 18:00:00",
            "created_at" => "2022-11-07 09:00:00",
            "updated_at" => "2022-11-07 09:00:00"
            ]
            ,[
            "description" => " Adquisición de Guillotina y Maquina Espiraladora ",
            "url_pdf" => "https://drive.google.com/file/d/1y6jxfrYL5C0_PMFpB47OlSJEaCoFaeiz/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-07 09:00:00",
            "last_date" => "2022-11-15 18:00:00",
            "created_at" => "2022-11-07 09:00:00",
            "updated_at" => "2022-11-07 09:00:00"
            ]
            ,[
            "description" => "Servicio de capacitación denominado curso “CONTRATACIONES Y ADQUISICIONES DEL ESTADO”",
            "url_pdf" => "https://drive.google.com/file/d/1xv8sXc64V0ilzvEp82IvM-UJdQRQJs3C/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-07 11:00:00",
            "last_date" => "2022-11-08 18:00:00",
            "created_at" => "2022-11-07 11:00:00",
            "updated_at" => "2022-11-07 11:00:00"
            ]
            ,[
            "description" => "SERVICIO DE ASISTENCIA TÉCNICA PARA SISTEMAS DE INFORMACIÓN DE LA ESCUELA PROFESIONAL DE CONTABILIDAD DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1bDiQ0ZA0IgyrwAY6J15m7Kb5nWxO1cDs/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-07 13:00:00",
            "last_date" => "2022-11-08 18:00:00",
            "created_at" => "2022-11-07 13:00:00",
            "updated_at" => "2022-11-07 13:00:00"
            ]
            ,[
            "description" => "Servicio de seguimiento y monitoreo de proyectos sociales y ambientales",
            "url_pdf" => "https://drive.google.com/file/d/1VaU8hq3U8H5Plvs3Ysu62D-X-PWZDzuJ/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-07 17:00:00",
            "last_date" => "2022-11-08 18:00:00",
            "created_at" => "2022-11-07 17:00:00",
            "updated_at" => "2022-11-07 17:00:00"
            ]
            ,[
            "description" => "Adquisición de 25 Porta Diplomas para los graduados de la UNDC dividido en (15 Porta Diplomas para Titulados y 10 PortaDiplomas para Bachiller).",
            "url_pdf" => "https://drive.google.com/file/d/1KCqLvRg6rVlbhkeZIIhBMdYhSQh23FMP/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-07 17:00:00",
            "last_date" => "2022-11-08 13:00:00",
            "created_at" => "2022-11-07 17:00:00",
            "updated_at" => "2022-11-07 17:00:00"
            ]
            ,[
            "description" => "Servicio de Capacitaciones para el evento académico denominado “III Congreso Internacional: Administración, Emprendimiento e Investigación”",
            "url_pdf" => "https://drive.google.com/file/d/1Otm1oMeWc47dY8lMUi0Cv9eItDSWDuZM/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-07 17:00:00",
            "last_date" => "2022-11-09 23:00:00",
            "created_at" => "2022-11-07 17:00:00",
            "updated_at" => "2022-11-07 17:00:00"
            ]
            ,[
            "description" => "Contratación de Servicio de Docente para la enseñanza del Curso de Inglés. Nivel Básico Regular",
            "url_pdf" => "https://drive.google.com/file/d/1W-5dclCbjlX0KRMukLfEll4vKyrpEnh1/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-07 13:00:00",
            "last_date" => "2022-11-08 18:00:00",
            "created_at" => "2022-11-07 13:00:00",
            "updated_at" => "2022-11-07 13:00:00"
            ]
            ,[
            "description" => "Adquisición de 1 Silla Giratoria de Metal con brazos para la Unidad de Grados y Títulos-Secretaria General de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/1jjhbJG-z-q3Os252ZJ6hTF1VOndUR4WX/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-07 14:45:00",
            "last_date" => "2022-11-14 18:00:00",
            "created_at" => "2022-11-07 14:45:00",
            "updated_at" => "2022-11-07 14:45:00"
            ]
            ,[
            "description" => "Adquisición de 1 Silla Fija de Metal, para la Secretaria General de la UniversidadNacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/1SogqmfaNQ5GvO2VIh_xp1ZEcE3ss02MN/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-07 15:00:00",
            "last_date" => "2022-11-24 18:00:00",
            "created_at" => "2022-11-07 15:00:00",
            "updated_at" => "2022-11-07 15:00:00"
            ]
            ,[
            "description" => "SERVICIO DE MANTENIMIENTO DE EQUIPOS Y MAQUINARIAS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1uUGAYuHXrQa_uAfYYm55jg1lNFcd29z_/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-07 16:00:00",
            "last_date" => "2022-11-08 18:00:00",
            "created_at" => "2022-11-07 16:00:00",
            "updated_at" => "2022-11-07 16:00:00"
            ]
            ,[
            "description" => "ADQUISICION DE EQUIPO PARA EL PERSONAL DE LA UNIDAD DE TESORERIA DE LA UNDC",
            "url_pdf" => "https://drive.google.com/file/d/1SWZXUYaIeNm61FZ0uUjG5r0U4lyB_6_N/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-08 08:00:00",
            "last_date" => "2022-11-09 18:00:00",
            "created_at" => "2022-11-08 08:00:00",
            "updated_at" => "2022-11-08 08:00:00"
            ]
            ,[
            "description" => "CONTRATACIÓN DEL SERVICIO DE CONSULTORIA PARA LA ELABORACION DEL ESTUDIO DE LA DEMANDA EDUCATIVA EN LA PROVINCIA DE CAÑETE ASI COMO EL ESTUDIO DE LA DEMANDA SOCIAL DE LOS PROGRAMAS DE ESTUDIOS DE LA UNIVERSIDAD NACIONAL DE CAÑETE ALINEADOS AL MODELO DE RENOVACIÓN DE LICENCIAMIENTO Y ACREDITACIÓN.",
            "url_pdf" => "https://drive.google.com/file/d/1tU9YqgLLiRkuqrzzr5cJAZIXOY3ZMxSq/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-08 10:00:00",
            "last_date" => "2022-11-18 09:00:00",
            "created_at" => "2022-11-08 10:00:00",
            "updated_at" => "2022-11-08 10:00:00"
            ]
            ,[
            "description" => "“Servicio de soporte informático para actividades de proyección social y gestión ambiental”.",
            "url_pdf" => "https://drive.google.com/file/d/1SfhbWxoIDfP7tmV-gwCn6P_i3rDoUfCJ/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-08 10:00:00",
            "last_date" => "2022-11-08 17:00:00",
            "created_at" => "2022-11-08 10:00:00",
            "updated_at" => "2022-11-08 10:00:00"
            ]
            ,[
            "description" => "“Servicio de soporte informático para actividades de proyección social y gestión ambiental”.",
            "url_pdf" => "https://drive.google.com/file/d/1SfhbWxoIDfP7tmV-gwCn6P_i3rDoUfCJ/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-08 10:00:00",
            "last_date" => "2022-11-08 17:00:00",
            "created_at" => "2022-11-08 10:00:00",
            "updated_at" => "2022-11-08 10:00:00"
            ]
            ,[
            "description" => "Contratación del servicio de renovación de Póliza de Seguro Vehicular para las unidades de transporte de placa EGO - 731, EGJ - 132 y EGI - 244 de propiedad de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/1jpd2MRqxsnT558tuK2J1fqdWg8tHkNrg/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-08 11:00:00",
            "last_date" => "2022-11-09 18:00:00",
            "created_at" => "2022-11-08 11:00:00",
            "updated_at" => "2022-11-08 11:00:00"
            ]
            ,[
            "description" => "Servicio de mantenimiento preventivo de las unidades de transporte de placas EGJ-132 y EGI-244 de propiedad de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/114vwuWq8K5sOunSY1uIEUnOQrtO11oRP/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-08 11:00:00",
            "last_date" => "2022-11-11 18:00:00",
            "created_at" => "2022-11-08 11:00:00",
            "updated_at" => "2022-11-08 11:00:00"
            ]
            ,[
            "description" => "Contratación de Servicio de Enseñanza para el Curso de Inglés. Nivel Básico Intensivo",
            "url_pdf" => "https://drive.google.com/file/d/1bTJRuZtSPt4leh-u8MRDofB074OZThzo/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-08 08:00:00",
            "last_date" => "2022-11-10 18:00:00",
            "created_at" => "2022-11-08 08:00:00",
            "updated_at" => "2022-11-08 08:00:00"
            ]
            ,[
            "description" => "Servicio de mantenimiento preventivo de las unidades de transporte de placas EGJ-132 y EGI-244 de propiedad de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/114vwuWq8K5sOunSY1uIEUnOQrtO11oRP/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-08 11:00:00",
            "last_date" => "2022-11-11 18:00:00",
            "created_at" => "2022-11-08 11:00:00",
            "updated_at" => "2022-11-08 11:00:00"
            ]
            ,[
            "description" => "Servicio de mantenimiento preventivo de las unidades de transporte de placas EGJ-132 y EGI-244 de propiedad de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/114vwuWq8K5sOunSY1uIEUnOQrtO11oRP/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-08 11:00:00",
            "last_date" => "2022-11-11 18:00:00",
            "created_at" => "2022-11-08 11:00:00",
            "updated_at" => "2022-11-08 11:00:00"
            ]
            ,[
            "description" => "Contratación de Servicio de Docente para la enseñanza del Curso de Inglés. Nivel Básico Regular",
            "url_pdf" => "https://drive.google.com/file/d/1W-5dclCbjlX0KRMukLfEll4vKyrpEnh1/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-08 10:00:00",
            "last_date" => "2022-11-09 13:00:00",
            "created_at" => "2022-11-08 10:00:00",
            "updated_at" => "2022-11-08 10:00:00"
            ]
            ,[
            "description" => "Adquisición de tomatodos para difusión de lucha contra el Cancer.",
            "url_pdf" => "https://drive.google.com/file/d/1yHUFR-ucNqWkSK9QLmmbKxEly3QzbDaf/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-08 12:00:00",
            "last_date" => "2022-11-11 18:00:00",
            "created_at" => "2022-11-08 12:00:00",
            "updated_at" => "2022-11-08 12:00:00"
            ]
            ,[
            "description" => "Servicio de capacitación denominado Curso: “SEMINARIO CIERRE CONTABLE DEL EJERCICIO FISCAL 2022: ELABORACIÓN Y PRESENTACIÓN DE LA INFORMACIÓN FINANCIERA Y PRESUPUESTARIA EN EL SECTOR PÚBLICO”",
            "url_pdf" => "https://drive.google.com/file/d/1LykuLac66rHuaAqNyZa_WCqgC8sHkSBk/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-08 16:00:00",
            "last_date" => "2022-11-09 18:00:00",
            "created_at" => "2022-11-08 16:00:00",
            "updated_at" => "2022-11-08 16:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE COMBUSTIBLE DIESEL B5 PARA EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1p9bPvB4OFBXj7e_LNoLCAEwqeaJX7jb1/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-08 17:00:00",
            "last_date" => "2022-11-09 18:00:00",
            "created_at" => "2022-11-08 17:00:00",
            "updated_at" => "2022-11-08 17:00:00"
            ]
            ,[
            "description" => "CONTRATAR LOS SERVICIOS DE UN PROFESIONAL RELACIONADO AL SERVICIO DE GESTIÓN Y SEGUIMIENTO DE ACTIVIDADES ADMINISTRATIVAS DE LA PRESIDENCIA DE LA COMISIÓN ORGANIZADORA",
            "url_pdf" => "https://drive.google.com/file/d/1bsSynXcvF6zrTnR2YVrflfwOe5l-xPP4/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-09 09:00:00",
            "last_date" => "2022-11-10 18:00:00",
            "created_at" => "2022-11-09 09:00:00",
            "updated_at" => "2022-11-09 09:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE MATERIALES DE BIOSEGURIDAD PARA LA UNIDAD DE SERVICIOS CULTURALES DE LA UNDC PERIODO 2022",
            "url_pdf" => "https://drive.google.com/file/d/1z6eg4-GVRU3pJhuXtU-NgnweEPn9wAsb/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-09 11:00:00",
            "last_date" => "2022-11-09 18:00:00",
            "created_at" => "2022-11-09 11:00:00",
            "updated_at" => "2022-11-09 11:00:00"
            ]
            ,[
            "description" => "Adquisición de útiles de escritorio para la Unidad de Servicios Generales de la Universidad Nacional de Cañete. ",
            "url_pdf" => "https://drive.google.com/file/d/13bMFhMKxYdkTSG0FJdMFZOLq1qM73mO9/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-09 12:00:00",
            "last_date" => "2022-11-14 18:00:00",
            "created_at" => "2022-11-09 12:00:00",
            "updated_at" => "2022-11-09 12:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE UNIFORMES INSTITUCIONALES PARA EL PERSONAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1AvmYAas3PV3hPBprtmTg7BvjaHqMypW3/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-10 09:00:00",
            "last_date" => "2022-12-02 13:00:00",
            "created_at" => "2022-11-10 09:00:00",
            "updated_at" => "2022-11-10 09:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE CONTABILIDAD DE LA UNDC",
            "url_pdf" => "https://drive.google.com/file/d/1zv5TQ8bqAsShpd-QFlha22XiX5bRCJBP/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-10 11:00:00",
            "last_date" => "2022-11-11 18:00:00",
            "created_at" => "2022-11-10 11:00:00",
            "updated_at" => "2022-11-10 11:00:00"
            ]
            ,[
            "description" => "ADQUISICION DE PAPEL TOALLA, ALGODÓN HIDROFILO, MASCARILLA (3 PLIEGUES Y KN95), ALCOHOL ETILICO SPRAY Y GEL PARA LA UNIDAD DE SERVICIO DE PSICOPEDAGOGÍA",
            "url_pdf" => "https://drive.google.com/file/d/1SB_Zx1hb46ElXLIxyeGv4Bn4Icy0Bjkz/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-10 11:00:00",
            "last_date" => "2022-11-11 18:00:00",
            "created_at" => "2022-11-10 11:00:00",
            "updated_at" => "2022-11-10 11:00:00"
            ]
            ,[
            "description" => "Adquisición de reactivos químicos para desarrollo de prácticas en laboratorio de química, incluidas en el plan de estudios de la Escuela Profesional de Agronomía.",
            "url_pdf" => "https://drive.google.com/file/d/1UAorV-jJ_S8SXZZxU5AoMW6UvRPMq7Rb/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-10 13:00:00",
            "last_date" => "2022-11-11 18:00:00",
            "created_at" => "2022-11-10 13:00:00",
            "updated_at" => "2022-11-10 13:00:00"
            ]
            ,[
            "description" => "Adquisición de (12) medallas con estuche para las Autoridades de la Facultad de Ingeniería – Coordinador de Facultad, Departamento Académico, Responsable de la Escuela Profesional de Ingeniería de Sistemas, Director de la Unidad de Investigación y Director de Posgrado (06 medallas) y para los Jurados Examinadores de Tesis de la Escuela Profesional de Ingeniería de Sistemas (06 medallas) de la Universidad Nacional de Cañete.",
            "url_pdf" => "https://drive.google.com/file/d/1O62qrmiamBbWg7VQvQR4NG7Md-H1HttH/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-10 16:00:00",
            "last_date" => "2022-11-11 18:00:00",
            "created_at" => "2022-11-10 16:00:00",
            "updated_at" => "2022-11-10 16:00:00"
            ]
            ,[
            "description" => "REQUERIMIENTO DE AGUA DE MESA PARA PRESTACION DE SERVICIOS CULTURALES",
            "url_pdf" => "https://drive.google.com/file/d/1Cpv-0RC4wEobK3apt2hZtP7Ocw_uePna/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-10 10:00:00",
            "last_date" => "2022-11-11 10:00:00",
            "created_at" => "2022-11-10 10:00:00",
            "updated_at" => "2022-11-10 10:00:00"
            ]
            ,[
            "description" => "Adquisición de Insumos Químicos para el Laboratorio de Suelo de la Escuela Profesional de Agronomía de la UNDC.",
            "url_pdf" => "https://drive.google.com/file/d/1At0pndoZaKOt5gE85EvPAYPwtJSSY1zl/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-10 17:00:00",
            "last_date" => "2022-11-11 18:00:00",
            "created_at" => "2022-11-10 17:00:00",
            "updated_at" => "2022-11-10 17:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE REACTIVOS QUÍMICOS PARA LABORATORIO DE FITOMEJORAMIENTO Y SEMILLA DE LA ESCUELA PROFESIONAL DE AGRONOMÍA DE LA UNDC ",
            "url_pdf" => "https://drive.google.com/file/d/1XYEGKxb8vXUgCZurbXEAD9PmK3Tf_yaY/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-10 17:00:00",
            "last_date" => "2022-11-11 18:00:00",
            "created_at" => "2022-11-10 17:00:00",
            "updated_at" => "2022-11-10 17:00:00"
            ]
            ,[
            "description" => "REQUERIMIENTO DE SERVICIO DE LAVADO Y PLANCHADO DE TRAJES Y VESTIMENTAS DE LOS TALLERES CULTURALES",
            "url_pdf" => "https://drive.google.com/file/d/1dn8GuGVBGpvJgwEM2A9TWkvuuZ5swkjo/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-10 13:00:00",
            "last_date" => "2022-11-11 18:00:00",
            "created_at" => "2022-11-10 13:00:00",
            "updated_at" => "2022-11-10 13:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE ÚTILES DE OFICINA PARA LA DIRECCIÓN DE BIENESTAR UNIVERSITARIO",
            "url_pdf" => "https://drive.google.com/file/d/1d20s1zO9OxBJalFqcV1oSHp4xcKIIFfh/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-10 17:00:00",
            "last_date" => "2022-12-07 18:00:00",
            "created_at" => "2022-11-10 17:00:00",
            "updated_at" => "2022-11-10 17:00:00"
            ]
            ,[
            "description" => "CONTRATACIÓN DE SERVICIO DE CONSULTORIA Y DE CAPACITACIÓN DEL SOPORTE INFORMATICO PARA LA GESTIÓN DE LA INVESTIGACIÓN UNIVERSITARIA, RADAR DE PERTINENCIA, SEGUIMIENTOS DE OBJETIVOS DE GESTIÓN VPI Y REGISTRO INSTITUCIONAL DE PRODUCCIÓN CIENTÍFICA DE DOCENTES PARA UNIVERSIDAD NACIONAL DE CAÑETE",
            "url_pdf" => "https://drive.google.com/file/d/1lB1YP2SFS4oYLZqYWxlrCqR-V5kOwm-X/view?usp=share_link",
            "typePost_id" =>2,
            "user_id" => 1,
            "start_date" => "2022-11-10 13:00:00",
            "last_date" => "2022-11-11 18:00:00",
            "created_at" => "2022-11-10 13:00:00",
            "updated_at" => "2022-11-10 13:00:00"
            ]
            ,[
            "description" => "ADQUISICIÓN DE ÚTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE AGRONOMÍA DE LA UNDC",
            "url_pdf" => "https://drive.google.com/file/d/1qEPRriSqe7f29Zxh2-1ZsNy_4zvXqqlG/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-11 08:00:00",
            "last_date" => "2022-11-15 18:00:00",
            "created_at" => "2022-11-11 08:00:00",
            "updated_at" => "2022-11-11 08:00:00"
            ]
            ,[
            "description" => "Adquisición de insumos médicos para la Unidad de Servicios Médicos ",
            "url_pdf" => "https://drive.google.com/file/d/16NCGFaeaOsED_3WjF16smjzrRyObGdvw/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-11 09:00:00",
            "last_date" => "2022-12-01 18:00:00",
            "created_at" => "2022-11-11 09:00:00",
            "updated_at" => "2022-11-11 09:00:00"
            ]
            ,[
            "description" => "Adquisición de mobiliarios para el taller de Danza.",
            "url_pdf" => "https://drive.google.com/file/d/1YB6yiCe1bwfP3OvfZM73FEZ1IyAnU6gB/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-11 10:00:00",
            "last_date" => "2022-11-15 18:00:00",
            "created_at" => "2022-11-11 10:00:00",
            "updated_at" => "2022-11-11 10:00:00"
            ]
            ,[
            "description" => "CONTRATACIÓN DE SERVICIO DE ACTUALIZACIÓN DE INFORMACION DE BIENES PATRIMONIALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE AL CIERRE DEL PERIODO 2022. ",
            "url_pdf" => "https://drive.google.com/file/d/1AHWSRf9FM_M7BJf18xze0Ey81Xbp1aq5/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-11 11:00:00",
            "last_date" => "2022-11-15 18:00:00",
            "created_at" => "2022-11-11 11:00:00",
            "updated_at" => "2022-11-11 11:00:00"
            ]
            ,[
            "description" => "ADQUISICION DE MALETIN DE LONA PARA COMPUTADORA PORTATIL (LAPTOP)",
            "url_pdf" => "https://drive.google.com/file/d/1RxyzbAY7so8mXDrVPhNtZJQPeT12rF83/view?usp=share_link",
            "typePost_id" =>1,
            "user_id" => 1,
            "start_date" => "2022-11-11 10:00:00",
            "last_date" => "2022-11-16 13:00:00",
            "created_at" => "2022-11-11 10:00:00",
            "updated_at" => "2022-11-11 10:00:00"
            ]
            // ,[
            // "description" => "Servicio de capacitación en el CURSO: PLANEAMIENTO EN LAS RELACIONES PUBLICAS - Conferencia RELACIONES PÚBLICAS Y PROTOCOLO, la cual se desarrollará en la modalidad virtual y está dirigida a los estudiantes de la Escuela Profesional de Administración de la UNDC, a efectos de ejecutar el plan de trabajo 2022 de esta Escuela.",
            // "url_pdf" => "https://drive.google.com/file/d/1KlJUyb5hCMnVJTTt6BBcraDZH-eGHXAf/view?usp=share_link",
            // "typePost_id" =>2,
            // "user_id" => 1,
            // "start_date" => "2022-11-11 12:00:00",
            // "last_date" => "2022-11-15 18:00:00",
            // "created_at" => "2022-11-11 12:00:00",
            // "updated_at" => "2022-11-11 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de capacitación en el CURSO TALLER SISTEMA INTEGRADO DE ADMINISTRACIÓN FINANCIERA (SIAF) Y SISTEMA INTEGRADO DE GESTIÓN ADMINISTRATIVA (SIGA), la cual se desarrollará en la modalidad virtual y está dirigida a los estudiantes de la Escuela Profesional de Administración de la UNDC, a efectos de ejecutar el plan de trabajo 2022 de esta Escuela.",
            // "url_pdf" => "https://drive.google.com/file/d/1eznNQXTg3fAAiHn1Iu47Qp_E4vF355Oe/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-11 12:00:00",
            // "last_date" => "2022-11-15 18:00:00",
            // "created_at" => "2022-11-11 12:00:00",
            // "updated_at" => "2022-11-11 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de capacitación en el CURSO TALLER SOBRE CONTROL INTERNO Y GESTION DE RIESGO EN LAS ENTIDADES DEL ESTADO, la cual se desarrollará en la modalidad virtual y está dirigida a los estudiantes de la Escuela Profesional de Administración de la UNDC, a efectos de ejecutar el plan de trabajo 2022 de esta Escuela",
            // "url_pdf" => "https://drive.google.com/file/d/1eznNQXTg3fAAiHn1Iu47Qp_E4vF355Oe/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-11 15:00:00",
            // "last_date" => "2022-11-15 18:00:00",
            // "created_at" => "2022-11-11 15:00:00",
            // "updated_at" => "2022-11-11 15:00:00"
            // ]
            // ,[
            // "description" => "Servicio de capacitación en el CURSO DE CAPACITACIÓN DE REDACCIÓN ESPECIALIZADA EN ARTÍCULOS CIENTÍFICOS Conferencia: La importancia de los artículos científicos, la cual se desarrollará en la modalidad virtual y está dirigida a los estudiantes de la Escuela Profesional de Administración de la UNDC, a efectos de ejecutar el plan de trabajo 2022 de esta Escuela.",
            // "url_pdf" => "https://drive.google.com/file/d/1ENWFbeopUQDOAZk0QoBOyKzFCh-58mk6/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-11 15:00:00",
            // "last_date" => "2022-11-17 18:00:00",
            // "created_at" => "2022-11-11 15:00:00",
            // "updated_at" => "2022-11-11 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE TALLER DE GESTIÓN PÚBLICA PARA SEGUIMIENTO AL GRADUADO DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/114WhF_jJEXMk09MseyNDo0UIn_hQNslx/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-11 15:00:00",
            // "last_date" => "2022-11-15 18:00:00",
            // "created_at" => "2022-11-11 15:00:00",
            // "updated_at" => "2022-11-11 15:00:00"
            // ]
            // ,[
            // "description" => "SOLICITO ADQUISICIÓN DE MUEBLES Y EQUIPOS",
            // "url_pdf" => "https://drive.google.com/file/d/1CM7EkHfbpvqYP0OJxcyWa82nYczT02mG/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-11 18:00:00",
            // "last_date" => "2022-11-24 18:00:00",
            // "created_at" => "2022-11-11 18:00:00",
            // "updated_at" => "2022-11-11 18:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE LIMPIEZA PARA LA UNIDAD DE SERVICIOS CULTURALES DE LA UNDC PERIODO 2022",
            // "url_pdf" => "https://drive.google.com/file/d/13CJcPVKKO2de7FJ8fVRLHp-85MTwOBJB/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-14 08:00:00",
            // "last_date" => "2022-11-14 18:00:00",
            // "created_at" => "2022-11-14 08:00:00",
            // "updated_at" => "2022-11-14 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y MONITOREO DE PLAN DE ACTIVIDADES PARA EL PROCESO DE LICENCIAMIENTO INSTITUCIONAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1w4Y0Nti_bm4z8NxJKwyDr7TkEStEdsl0/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-14 09:00:00",
            // "last_date" => "2022-11-15 13:00:00",
            // "created_at" => "2022-11-14 09:00:00",
            // "updated_at" => "2022-11-14 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE LIMPIEZA PARA LA OFICINA DE SEGUIMIENTO AL GRADUADO",
            // "url_pdf" => "https://drive.google.com/file/d/1vZD9A69kNw8PLWzRlLj2R1ZRVb39JpEz/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-14 09:00:00",
            // "last_date" => "2022-11-14 18:00:00",
            // "created_at" => "2022-11-14 09:00:00",
            // "updated_at" => "2022-11-14 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE TALLER DE SEGURIDAD Y SALUD EN EL TRABAJO PARA SEGUIMIENTO AL GRADUADO DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1_VRMy3SExzLxOquaop3LN4jvpyzAoRQj/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-14 10:00:00",
            // "last_date" => "2022-11-15 18:00:00",
            // "created_at" => "2022-11-14 10:00:00",
            // "updated_at" => "2022-11-14 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisicion de (01) guillotina y (01) maquina Espiraladora. ",
            // "url_pdf" => "https://drive.google.com/file/d/17MgbnoSaT7qZ37fyWVgfiw9HB4viz75_/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-14 10:00:00",
            // "last_date" => "2022-11-15 18:00:00",
            // "created_at" => "2022-11-14 10:00:00",
            // "updated_at" => "2022-11-14 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE UTILES DE ESCRITORIO PARA LA UNIDAD DE SERVICIOS CULTURALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1NNTo50URRV87wvjvY40d1QXOKiu9lVFY/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-14 10:00:00",
            // "last_date" => "2022-11-15 18:00:00",
            // "created_at" => "2022-11-14 10:00:00",
            // "updated_at" => "2022-11-14 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES DE OFICINA PARA LA OFICINA DE PSICOLOGIA.",
            // "url_pdf" => "https://drive.google.com/file/d/184OwokIXdqAiARFiv9xf5XCpfo13w7zA/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-14 10:00:00",
            // "last_date" => "2022-11-15 18:00:00",
            // "created_at" => "2022-11-14 10:00:00",
            // "updated_at" => "2022-11-14 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES DE OFICINA PARA LA OFICINA DE SEGUIMIENTO AL GRADUADO.",
            // "url_pdf" => "https://drive.google.com/file/d/1LHKmB5Tl27IzS7UEhLgSx_1wLu_b_5nC/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-14 10:00:00",
            // "last_date" => "2022-11-15 18:00:00",
            // "created_at" => "2022-11-14 10:00:00",
            // "updated_at" => "2022-11-14 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE PRENDAS PUBLICITARIAS PARA EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1VmoiexhDaEHqEI32rMLEjqSNHK-47F89/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-14 16:00:00",
            // "last_date" => "2022-11-30 18:00:00",
            // "created_at" => "2022-11-14 16:00:00",
            // "updated_at" => "2022-11-14 16:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ALIMENTOS Y BEBIDAS PARA EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1qVeZekjyVq3LtTXpBjYYL9lHcry08FR0/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-14 16:00:00",
            // "last_date" => "2022-11-16 18:00:00",
            // "created_at" => "2022-11-14 16:00:00",
            // "updated_at" => "2022-11-14 16:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE HERRAMIENTAS BÁSICAS: ALICATES, DESTORNILLADOR, CAUTÍN Y MULTITESTER PARA EL TALLER DE MÚSICA 2022",
            // "url_pdf" => "https://drive.google.com/file/d/1Le83RgJglu4RIbRI32bl1LTNMy3Xm2J7/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 17:00:00",
            // "last_date" => "2022-11-16 18:00:00",
            // "created_at" => "2022-11-15 17:00:00",
            // "updated_at" => "2022-11-15 17:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de productos alimenticios para la Escuela Profesional de Agronomía.",
            // "url_pdf" => "https://drive.google.com/file/d/1hIBKu1cF_rbcxKGUMpyuXC0ag_SQuLbk/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-14 18:00:00",
            // "last_date" => "2022-11-15 18:00:00",
            // "created_at" => "2022-11-14 18:00:00",
            // "updated_at" => "2022-11-14 18:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de accesorios de conexión para el Taller de Música.",
            // "url_pdf" => "https://drive.google.com/file/d/1njTuqUCD67tiWf-eLXrAfcUc31-LoO3R/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-14 15:00:00",
            // "last_date" => "2022-11-17 18:00:00",
            // "created_at" => "2022-11-14 15:00:00",
            // "updated_at" => "2022-11-14 15:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de Banner, afiches y material publicitario para Servicios Médicos. ",
            // "url_pdf" => "https://drive.google.com/file/d/16fHTiHFrCrFdKvFilzX9CcXMrVNymUVz/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 08:00:00",
            // "last_date" => "2022-11-16 18:00:00",
            // "created_at" => "2022-11-15 08:00:00",
            // "updated_at" => "2022-11-15 08:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de materiales de difusión para la Dirección de Bienestar Universitario. ",
            // "url_pdf" => "https://drive.google.com/file/d/1P4Rz4hlL5ewc4QSw9O_5pEwG-1GDgeYn/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 10:00:00",
            // "last_date" => "2022-11-16 18:00:00",
            // "created_at" => "2022-11-15 10:00:00",
            // "updated_at" => "2022-11-15 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE (02) GUILLOTINA Y (02) MAQUINA ESPIRALADORA",
            // "url_pdf" => "https://drive.google.com/file/d/1nOF3wL7eYv1is3HLiKM26efNeGXuSDWS/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 08:00:00",
            // "last_date" => "2022-11-16 18:00:00",
            // "created_at" => "2022-11-15 08:00:00",
            // "updated_at" => "2022-11-15 08:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE ANÁLISIS, REVISIÓN, SEGUIMIENTO Y ELABORACIÓN DE DOCUMENTOS PARA LA FACULTAD DE INGENIERÍA DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1i7diGDWYvKw66CfCVYFWb-6Qem0V_pK3/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 12:00:00",
            // "last_date" => "2022-11-15 15:00:00",
            // "created_at" => "2022-11-15 12:00:00",
            // "updated_at" => "2022-11-15 12:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Soporte Informático para el Centro de Idiomas de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/18wtElpxYo1gSoYDlq0tTYbTnjgjq907r/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 16:00:00",
            // "last_date" => "2022-11-16 13:00:00",
            // "created_at" => "2022-11-15 16:00:00",
            // "updated_at" => "2022-11-15 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Docencia para el curso de Portugués.",
            // "url_pdf" => "https://drive.google.com/file/d/1grAosEn91seOqyli_yjhdW4sdsaEpLit/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 16:00:00",
            // "last_date" => "2022-11-16 13:00:00",
            // "created_at" => "2022-11-15 16:00:00",
            // "updated_at" => "2022-11-15 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Desarrollo de Sistemas Web para la Dirección de Servicios Educativos de Extensión de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1_mwCBOQi6jEj_VzfdgX-xTHL2XAiWyRm/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 16:00:00",
            // "last_date" => "2022-11-16 13:00:00",
            // "created_at" => "2022-11-15 16:00:00",
            // "updated_at" => "2022-11-15 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de ANÁLISIS, REVISIÓN, SEGUIMIENTO Y ELABORACIÓN DE DOCUMENTOS para las realizaciones en las actividades del Departamento Académico y Unidad de Investigación de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/18pwYD_1nLawp5qgLJX77r_PwGl0Mj5e8/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 17:00:00",
            // "last_date" => "2022-11-15 19:00:00",
            // "created_at" => "2022-11-15 17:00:00",
            // "updated_at" => "2022-11-15 17:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de (01) SILLA GIRATORIA, para la Oficina de Cooperación y Relaciones Internacionales. ",
            // "url_pdf" => "https://drive.google.com/file/d/1BezUkn2lkNSMaRwlfzkbXG1G1xtY3v0R/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 17:00:00",
            // "last_date" => "2022-11-16 18:00:00",
            // "created_at" => "2022-11-15 17:00:00",
            // "updated_at" => "2022-11-15 17:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE 01 ESCRITORIO PARA LA OFICINA DE COOPERACIÓN Y RELACIONES INTERNACIONALES DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1AgDk0f3_1kGHm6U3sluMV1rdD0kY_l9c/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 17:00:00",
            // "last_date" => "2022-11-16 18:00:00",
            // "created_at" => "2022-11-15 17:00:00",
            // "updated_at" => "2022-11-15 17:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de un monitor",
            // "url_pdf" => "https://drive.google.com/file/d/17N9mB1Qc9lw544OJjIrDbT8omx52QuA8/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 17:00:00",
            // "last_date" => "2022-11-16 18:00:00",
            // "created_at" => "2022-11-15 17:00:00",
            // "updated_at" => "2022-11-15 17:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de una Unidad de Control de Proceso",
            // "url_pdf" => "https://drive.google.com/file/d/1au2VHr-qxs114g2ZUR2GbHppk6CAoUzI/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 17:00:00",
            // "last_date" => "2022-11-16 18:00:00",
            // "created_at" => "2022-11-15 17:00:00",
            // "updated_at" => "2022-11-15 17:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MASCARILLAS DE TELA Y LANYARD CON FRASCO DISPENSADOR DE ALCOHOL.",
            // "url_pdf" => "https://drive.google.com/file/d/16tuVVR_WLtHAT2eTo3l4V3_Fzd3tSZAF/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 15:00:00",
            // "last_date" => "2022-11-17 18:00:00",
            // "created_at" => "2022-11-15 15:00:00",
            // "updated_at" => "2022-11-15 15:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de análisis, desarrollo y mantenimiento de soluciones informáticas para la Dirección de Registros Académicos de la UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1ebIvPzq7dfehD6ibhKcG_Jw6nDwVLCtb/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 15:00:00",
            // "last_date" => "2022-11-16 13:00:00",
            // "created_at" => "2022-11-15 15:00:00",
            // "updated_at" => "2022-11-15 15:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE RULETA PARA DIFUSIÓN DE LUCHA CONTRA EL CANCER.",
            // "url_pdf" => "https://drive.google.com/file/d/1ww92oJ04K79t3YXHdHLZiEDSaId6dQi5/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 15:00:00",
            // "last_date" => "2022-11-16 18:00:00",
            // "created_at" => "2022-11-15 15:00:00",
            // "updated_at" => "2022-11-15 15:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES PARA EJECUCIÓN DE ACTIVIDAD DE LUCHA CONTRA EL CANCER.",
            // "url_pdf" => "https://drive.google.com/file/d/1ZU6WLlECgeJauNOOK19SS0xWZcUuT4ke/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-15 15:00:00",
            // "last_date" => "2022-12-01 18:00:00",
            // "created_at" => "2022-11-15 15:00:00",
            // "updated_at" => "2022-11-15 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DEL CURSO “FORMULACIÓN DE PROYECTOS DE INVESTIGACIÓN PARA FONDOS CONCURSABLES.",
            // "url_pdf" => "https://drive.google.com/file/d/1dPx2Iz9WR1aTC6PuH5tL-HTybiLLXfm1/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-15 16:00:00",
            // "last_date" => "2022-11-16 18:00:00",
            // "created_at" => "2022-12-15 16:00:00",
            // "updated_at" => "2022-12-15 16:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de impresora multifuncional para la Dirección de Servicios Educativos de Extensión de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1g_am0DQJ4UNlPKORrmk0Qum0EgQPXBaC/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-16 10:00:00",
            // "last_date" => "2022-11-17 18:00:00",
            // "created_at" => "2022-11-16 10:00:00",
            // "updated_at" => "2022-11-16 10:00:00"
            // ]
            // ,[
            // "description" => "Servicio de capacitación denominada CURSO DE REDACCIÓN EN NORMAS APA PARA TESIS E INVESTIGACIONES CIENTIFICAS, la cual se desarrollará en la modalidad virtual y está dirigida a los docentes de la Escuela Profesional de Administración de Turismo y Hotelería de la UNDC, a efectos de ejecutar el plan de trabajo 2022 de esta Escuela. ",
            // "url_pdf" => "https://drive.google.com/file/d/1minQsbSnwJUbs9lznzi3d4idANy6fN9u/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-16 10:00:00",
            // "last_date" => "2022-11-17 18:00:00",
            // "created_at" => "2022-11-16 10:00:00",
            // "updated_at" => "2022-11-16 10:00:00"
            // ]
            // ,[
            // "description" => "Servicio de lavado y planchado de vestuarios de servicios culturales. ",
            // "url_pdf" => "https://drive.google.com/file/d/1t4gfZEaBLr72PpoLS8bpXxza4dbzJXP-/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-16 10:00:00",
            // "last_date" => "2022-11-18 13:00:00",
            // "created_at" => "2022-11-16 10:00:00",
            // "updated_at" => "2022-11-16 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de un (02) Unidad de Discos duros externos para la Escuela Profesional Administración de Turismo y Hotelería. ",
            // "url_pdf" => "https://drive.google.com/file/d/1hK1mh4nGWFLNkE3LcDL4_uHmGzezh1Jp/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-16 10:00:00",
            // "last_date" => "2022-11-17 18:00:00",
            // "created_at" => "2022-11-16 10:00:00",
            // "updated_at" => "2022-11-16 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de gigantografía para la Dirección Responsabilidad Social Universitaria",
            // "url_pdf" => "https://drive.google.com/file/d/1RRnsDRE0feC4Fd4x32CdsC3VY1LeF1XO/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-16 17:00:00",
            // "last_date" => "2022-11-17 18:00:00",
            // "created_at" => "2022-11-16 17:00:00",
            // "updated_at" => "2022-11-16 17:00:00"
            // ]
            // ,[
            // "description" => "Escuela Profesional de Ingeniería de Sistemas de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/12RBppFi2S-8QqHL4g9ohbHCdUh4ap_jB/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-16 17:00:00",
            // "last_date" => "2022-11-17 18:00:00",
            // "created_at" => "2022-11-16 17:00:00",
            // "updated_at" => "2022-11-16 17:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE ENSEÑANZA PARA DIFUNDIR EN FERIAS DE ORIENTACIÓN VOCACIONAL EL PROCESO DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1IcRIqLT1EVev1QWQ42qSQt2qSKbEojx8/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-16 16:00:00",
            // "last_date" => "2022-11-18 13:00:00",
            // "created_at" => "2022-11-16 16:00:00",
            // "updated_at" => "2022-11-16 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación de un (01) proveedor que brinde el servicio de dos videoconferencias virtuales con los temas: “EL CONECTIVISMO Y LA DEMOCRATIZACIÓN DE LA EDUCACIÓN SUPERIOR’’ y “CALIDAD EN LA EDUCACIÓN VIRTUAL”, dirigida a estudiantes, docentes y público en general, como parte del evento denominado: “IV CONGRESO INTERNACIONAL DE INVESTIGACIÓN EN HABILIDADES INVESTIGATIVAS - 2022”, a efectos de ejecutar el Plan de Trabajo 2022 y presupuesto asignado a esta Escuela Profesional de Contabilidad. ",
            // "url_pdf" => "https://drive.google.com/file/d/1lq25HdeoD6BkPQDtHh9ONl_LJcZkVnbN/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-17 10:00:00",
            // "last_date" => "2022-11-17 18:00:00",
            // "created_at" => "2022-11-17 10:00:00",
            // "updated_at" => "2022-11-17 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación de un (01) proveedor que brinde el servicio de dos videoconferencias virtuales con los temas: “CULTURA DE NEGOCIOS GLOBALES” y “BANCA ELECTRÓNICA: EL EFECTO DE LA BANCA ELECTRÓNICA EN LA SATISFACCIÓN DEL CONSUMIDOR”, dirigida a estudiantes, docentes y público en general, como parte del evento denominado: “IV CONGRESO INTERNACIONAL DE INVESTIGACIÓN EN HABILIDADES INVESTIGATIVAS - 2022”, a efectos de ejecutar el Plan de Trabajo 2022 y presupuesto asignado a esta Escuela Profesional de Contabilidad.",
            // "url_pdf" => "https://drive.google.com/file/d/15Q780z-VSLGV5WMSBmKMJcfXC2Pcg2bW/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-17 10:00:00",
            // "last_date" => "2022-11-17 18:00:00",
            // "created_at" => "2022-11-17 10:00:00",
            // "updated_at" => "2022-11-17 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación de un (01) proveedor que brinde el servicio de dos videoconferencias virtuales con los temas: “ÉTICA EN LA INVESTIGACIÓN’’ y “PARADIGMAS EN LA INVESTIGACIÓN CIENTÍFICA POST COVID-19”, dirigida a estudiantes, docentes y público en general, como parte del evento denominado: “IV CONGRESO INTERNACIONAL DE INVESTIGACIÓN EN HABILIDADES INVESTIGATIVAS - 2022”, a efectos de ejecutar el Plan de Trabajo 2022 y presupuesto asignado a esta Escuela Profesional de Contabilidad. ",
            // "url_pdf" => "https://drive.google.com/file/d/19SW8s91hp3fS7Wwi68T-LvuaYJkVGmeV/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-17 10:00:00",
            // "last_date" => "2022-11-17 18:00:00",
            // "created_at" => "2022-11-17 10:00:00",
            // "updated_at" => "2022-11-17 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO ESPECIALIZADO DE RESPONSABILIDAD SOCIAL UNIVERSITARIA PARA LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1x-SxieSC_lV8lX5tLAJyxExVMKuifRqL/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-16 08:00:00",
            // "last_date" => "2022-11-20 13:00:00",
            // "created_at" => "2022-11-16 08:00:00",
            // "updated_at" => "2022-11-16 08:00:00"
            // ]
            // ,[
            // "description" => "Contratación de un (01) proveedor que brinde el servicio de dos videoconferencias virtuales con los temas: “EL USO DE LA TECNOLOGÍA Y SU IMPACTO EN LA INVESTIGACIÓN CIENTÍFICA” y “EL ESTADO DEL ARTE BÚSQUEDA DE FUENTES BIBLIOGRÁFICAS”, dirigida a estudiantes, docentes y público en general, como parte del evento denominado: “IV CONGRESO INTERNACIONAL DE INVESTIGACIÓN EN HABILIDADES INVESTIGATIVAS - 2022”, a efectos de ejecutar el Plan de Trabajo 2022 y presupuesto asignado a esta Escuela Profesional de Contabilidad. ",
            // "url_pdf" => "https://drive.google.com/file/d/1-OSFHeMNTB5jYvQTBwk_yssQe0xJcI-C/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-17 10:00:00",
            // "last_date" => "2022-11-17 18:00:00",
            // "created_at" => "2022-11-17 10:00:00",
            // "updated_at" => "2022-11-17 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación de un (01) proveedor que brinde el servicio de dos videoconferencias virtuales con los temas: “EL LIDERAZGO DEL DOCENTE PARA LA INVESTIGACIÓN” y “LA IMPORTANCIA DE LA INVESTIGACIÓN EN LAS UNIVERSIDADES”, dirigida a estudiantes, docentes y público en general, como parte del evento denominado: “IV CONGRESO INTERNACIONAL DE INVESTIGACIÓN EN HABILIDADES INVESTIGATIVAS - 2022”, a efectos de ejecutar el Plan de Trabajo 2022 y presupuesto asignado a esta Escuela Profesional de Contabilidad.",
            // "url_pdf" => "https://drive.google.com/file/d/1mTWKAy4qtBD5s0LxK3Wdjz0tIyc0ayR9/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-17 10:00:00",
            // "last_date" => "2022-11-17 18:00:00",
            // "created_at" => "2022-11-17 10:00:00",
            // "updated_at" => "2022-11-17 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación de un (01) proveedor que brinde el servicio de dos videoconferencias virtuales con los temas: “LOS ESTUDIOS DE POSGRADO EN LA ACTUALIDAD’’ y “EDUCACIÓN DISRUPTIVA EN EL NUEVO MODELO DEL SIGLO XXI”, dirigida a estudiantes, docentes y público en general, como parte del evento denominado: “IV CONGRESO INTERNACIONAL DE INVESTIGACIÓN EN HABILIDADES INVESTIGATIVAS - 2022”, a efectos de ejecutar el Plan de Trabajo 2022 y presupuesto asignado a esta Escuela Profesional de Contabilidad. ",
            // "url_pdf" => "https://drive.google.com/file/d/1IExs5Dh10nmIE6wtaUpfvkD9aS5hlnSE/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-17 10:00:00",
            // "last_date" => "2022-11-17 18:00:00",
            // "created_at" => "2022-11-17 10:00:00",
            // "updated_at" => "2022-11-17 10:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACIÓN DE UN SERVICIO DE PERITAJE PARA LA OBRA “INSTALACIÓN DE INFRAESTRUCTURA Y EQUIPAMIENTO PARA EL PROGRAMA DE ESTUDIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE-DISTRITO DE SAN LUISPROVINCIA DE CAÑETE-REGIÓN LIMA”.,",
            // "url_pdf" => "https://drive.google.com/file/d/1zIc9bZkdzEW64IsKNBUKobppMURtM4lz/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-17 15:00:00",
            // "last_date" => "2022-11-22 18:00:00",
            // "created_at" => "2022-11-17 15:00:00",
            // "updated_at" => "2022-11-17 15:00:00"
            // ]
            // ,[
            // "description" => "CONTRATAR EL SERVICIO DE UN PERSONAL PARA EL SEGUIMIENTO DE IMPLEMENTACIÓN DE CONVENIOS DE COOPERACIÓN INTERINSTITUCIONALES DE LA OFICINA DE COOPERACIÓN Y RELACIONES INTERNACIONALES.",
            // "url_pdf" => "https://drive.google.com/file/d/1CD8hRVDjCH0WOu46pKARWbBYUQbIi4OK/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-17 15:00:00",
            // "last_date" => "2022-11-18 18:00:00",
            // "created_at" => "2022-11-17 15:00:00",
            // "updated_at" => "2022-11-17 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y MONITOREO DE PLAN DE ACTIVIDADES PARA EL PROCESO DE LICENCIAMIENTO INSTITUCIONAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1wX1M7UfLZ3RTl7XRCys__5Rq-meVlTGJ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-17 16:00:00",
            // "last_date" => "2022-11-21 13:00:00",
            // "created_at" => "2022-11-17 16:00:00",
            // "updated_at" => "2022-11-17 16:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Capacitación “Mujeres Guerreras y Valientes” ",
            // "url_pdf" => "https://drive.google.com/file/d/1EW-QL9CJa0_nQAj-ikKmQ_X4VG-MqwON/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-17 15:00:00",
            // "last_date" => "2022-11-18 18:00:00",
            // "created_at" => "2022-11-17 15:00:00",
            // "updated_at" => "2022-11-17 15:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Capacitación “Mujeres Guerreras y Valientes” ",
            // "url_pdf" => "https://drive.google.com/file/d/1EW-QL9CJa0_nQAj-ikKmQ_X4VG-MqwON/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-17 15:00:00",
            // "last_date" => "2022-11-18 18:00:00",
            // "created_at" => "2022-11-17 15:00:00",
            // "updated_at" => "2022-11-17 15:00:00"
            // ]
            // ,[
            // "description" => "Servicio de mantenimiento preventivo de las unidades de transporte de placas EGO-950, EGO-737, EGO-731 y EGO-951 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1tnFaNtAA9JqoFAT_UDexW4hx0S_l2737/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-17 15:00:00",
            // "last_date" => "2022-11-18 18:00:00",
            // "created_at" => "2022-11-17 15:00:00",
            // "updated_at" => "2022-11-17 15:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de impresora multifuncional láser color para la Dirección de Servicios Educativos de Extensión de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/128U7R3BVTbY8z2vApaSGiGZY0Ofy9obW/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-17 15:00:00",
            // "last_date" => "2022-11-18 18:00:00",
            // "created_at" => "2022-11-17 15:00:00",
            // "updated_at" => "2022-11-17 15:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de agua de mesa sin gas para Control Patrimonial y Almacén de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1ZjRLEbm2Wre-uZ0GjqTNB00q8pEWRHsN/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-18 10:00:00",
            // "last_date" => "2022-11-18 18:00:00",
            // "created_at" => "2022-11-18 10:00:00",
            // "updated_at" => "2022-11-18 10:00:00"
            // ]
            // ,[
            // "description" => "Se requiere la Contratación de Servicio de (01) Proveedor para la capacitación en el CURSO SECTOR TURISMO, dirigido a los estudiantes de la Escuela Profesional de Administración de Turismo y Hotelería de la UNDC ",
            // "url_pdf" => "https://drive.google.com/file/d/1h0hsmYSQeENMZaJXWwo-4zFu49Qwc4ki/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-18 11:00:00",
            // "last_date" => "2022-11-22 22:00:00",
            // "created_at" => "2022-11-18 11:00:00",
            // "updated_at" => "2022-11-18 11:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Contratación Del Servicio De Mantenimiento De Equipos Informáticos De La Universidad Nacional De Cañete. ",
            // "url_pdf" => "https://drive.google.com/file/d/1lbB7tZrdG6EGFSPyYttjC4aev4VzExuB/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-18 11:00:00",
            // "last_date" => "2022-11-29 18:00:00",
            // "created_at" => "2022-11-18 11:00:00",
            // "updated_at" => "2022-11-18 11:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE ANÁLISIS, REVISIÓN, SEGUIMIENTO Y ELABORACIÓN DE DOCUMENTOS PARA ESCUELA DE ADMINISTRACIÓN DE TURISMO Y HOTELERÍA. ",
            // "url_pdf" => "https://drive.google.com/file/d/1MCu-CpDEEJCDgfvU65yCtQFgZQVFX7Db/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-18 11:00:00",
            // "last_date" => "2022-11-22 18:00:00",
            // "created_at" => "2022-11-18 11:00:00",
            // "updated_at" => "2022-11-18 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de material bibliográfico ",
            // "url_pdf" => "https://drive.google.com/file/d/1ig9sVbMJOuwwY_F8TEfjR1xiEQIXAr1R/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-18 11:00:00",
            // "last_date" => "2022-11-22 18:00:00",
            // "created_at" => "2022-11-18 11:00:00",
            // "updated_at" => "2022-11-18 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de mobiliarios para el taller de Danza. ",
            // "url_pdf" => "https://drive.google.com/file/d/1piyAPv8jJQxkqANwQqW_ceK9CLm9GjKY/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-18 11:00:00",
            // "last_date" => "2022-11-22 18:00:00",
            // "created_at" => "2022-11-18 11:00:00",
            // "updated_at" => "2022-11-18 11:00:00"
            // ]
            // ,[
            // "description" => "CAPACITACIÓN EN PYTHON FUNDAMENTALS FOR DATA SCIENCE",
            // "url_pdf" => "https://drive.google.com/file/d/1PFtmoMqKpsxD63XS25hqqDex-QyCAnw4/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-21 13:00:00",
            // "last_date" => "2022-11-23 18:00:00",
            // "created_at" => "2022-11-21 13:00:00",
            // "updated_at" => "2022-11-21 13:00:00"
            // ]
            // ,[
            // "description" => "“SERVICIO DE SEGUIMIENTO Y MONITOREO DE REQUERIMIENTOS DE BIENES Y SERVICIOS PARA LA UNIDAD DE ABASTECIMIENTO”",
            // "url_pdf" => "https://drive.google.com/file/d/11ofqX-POFBpaUCtM4MN6h798p6WCrlJ8/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-21 18:00:00",
            // "last_date" => "2022-11-21 19:00:00",
            // "created_at" => "2022-11-21 18:00:00",
            // "updated_at" => "2022-11-21 18:00:00"
            // ]
            // ,[
            // "description" => "ESPECIALISTA EN GESTION DE CONTRATACIONES PUBLICAS",
            // "url_pdf" => "https://drive.google.com/file/d/1VY2bmeSqX9lEg9hUZxVEF8A9yAZp06oN/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-21 16:00:00",
            // "last_date" => "2022-11-22 13:00:00",
            // "created_at" => "2022-11-21 16:00:00",
            // "updated_at" => "2022-11-21 16:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 20 Diplomas de Grado Académico de Bachiller con caligrafiado y 1 Diploma de Título Profesional con caligrafiado para los Graduados de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/14QvzQpZIJEgWcczDyZRpRcbRf3dN59H9/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-22 08:00:00",
            // "last_date" => "2022-11-22 18:00:00",
            // "created_at" => "2022-11-22 08:00:00",
            // "updated_at" => "2022-11-22 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO TALLER VIVENCIAL DE AUTOLIDERAZGO DESDE EL SER ESENCIAL.",
            // "url_pdf" => "https://drive.google.com/file/d/1CIwvxeSry9lU6tYKyuMSXz02KHUkrA8x/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-23 11:00:00",
            // "last_date" => "2022-11-30 18:00:00",
            // "created_at" => "2022-11-23 11:00:00",
            // "updated_at" => "2022-11-23 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO DE INTERPRETACION, IMPLANTACION Y AUDITORIA INTERNA EN SISTEMAS DE GESTION EN ORGANIZACIONES EDUCATIVAS ISO 21001.",
            // "url_pdf" => "https://drive.google.com/file/d/1zRVCA46fJ6zlF4AXw5a1GaGeqmXDTEtX/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-23 12:00:00",
            // "last_date" => "2022-12-12 18:00:00",
            // "created_at" => "2022-11-23 12:00:00",
            // "updated_at" => "2022-11-23 12:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ALIMENTACIÓN PARA LA CAPACITACIÓN DENOMINADO TALLER VIVENCIAL DE AUTOLIDERAZGO DESDE EL SER ESENCIAL.",
            // "url_pdf" => "https://drive.google.com/file/d/1Pm4hb5bSZC-FG6XBeYCuLYEV_KCk8wE5/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-23 11:00:00",
            // "last_date" => "2022-11-30 18:00:00",
            // "created_at" => "2022-11-23 11:00:00",
            // "updated_at" => "2022-11-23 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de Silla Giratoria Gerencial para la Unidad Abastecimiento de la Universidad Nacionalde Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1RYDWGqE1sKPAOLX93BLyixmYaEbap5C_/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-23 17:00:00",
            // "last_date" => "2022-11-24 18:00:00",
            // "created_at" => "2022-11-23 17:00:00",
            // "updated_at" => "2022-11-23 17:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 4 Sillas Giratorias de Metal con brazos para la Unidad Abastecimiento de la Universidad Nacionalde Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1obmb-ndZR_4kjGkK13NNz6roleL90qou/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-23 17:00:00",
            // "last_date" => "2022-11-24 18:00:00",
            // "created_at" => "2022-11-23 17:00:00",
            // "updated_at" => "2022-11-23 17:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 22 Porta Diplomas para los Bachilleres de la UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/18bX-125E1ozCgv3iqPZlIKASeH8tg46u/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-24 16:00:00",
            // "last_date" => "2022-11-25 18:00:00",
            // "created_at" => "2022-11-24 16:00:00",
            // "updated_at" => "2022-11-24 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio mantenimiento y de limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete. ",
            // "url_pdf" => "https://drive.google.com/file/d/12v30Y1A1nzIowh_RkJ85T42T1mTIcFad/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-24 16:00:00",
            // "last_date" => "2022-11-25 18:00:00",
            // "created_at" => "2022-11-24 16:00:00",
            // "updated_at" => "2022-11-24 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio mantenimiento y de limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete. ",
            // "url_pdf" => "https://drive.google.com/file/d/11dG-PWKrTN_M85gz_g2TlkfV7PmNACdO/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-24 16:00:00",
            // "last_date" => "2022-11-25 18:00:00",
            // "created_at" => "2022-11-24 16:00:00",
            // "updated_at" => "2022-11-24 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio mantenimiento y de limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/118QhBrlObUJNs5bjJytj_jCr8xGKQRKy/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-24 16:00:00",
            // "last_date" => "2022-11-25 18:00:00",
            // "created_at" => "2022-11-24 16:00:00",
            // "updated_at" => "2022-11-24 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio mantenimiento y de limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete. ",
            // "url_pdf" => "https://drive.google.com/file/d/1nP1YjKhhN2l5Ov1m2_G7Q5qNmZpdZs5p/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-24 16:00:00",
            // "last_date" => "2022-11-25 18:00:00",
            // "created_at" => "2022-11-24 16:00:00",
            // "updated_at" => "2022-11-24 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio mantenimiento y de limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete. ",
            // "url_pdf" => "https://drive.google.com/file/d/1mH4OXaM-Wll6QjIBu2r0jSmdmk5EAS9g/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-24 16:00:00",
            // "last_date" => "2022-11-25 18:00:00",
            // "created_at" => "2022-11-24 16:00:00",
            // "updated_at" => "2022-11-24 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio mantenimiento y de limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete. ",
            // "url_pdf" => "https://drive.google.com/file/d/1z8PZxSm79mh_dvsaCTPV8k4WAJAy5k5o/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-24 16:00:00",
            // "last_date" => "2022-11-25 18:00:00",
            // "created_at" => "2022-11-24 16:00:00",
            // "updated_at" => "2022-11-24 16:00:00"
            // ]
            // ,[
            // "description" => "Adquisición del tóner de impresión, para la Oficina de Defensoría Universitaria de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1_rFK__bn40kq_9LJOUiYqmUjylnGW94B/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-24 16:00:00",
            // "last_date" => "2022-12-15 10:00:00",
            // "created_at" => "2022-11-24 16:00:00",
            // "updated_at" => "2022-11-24 16:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE CONTABILIDAD DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1qs03ITJse0YHgYbM1vUTr18fk8VgtQbK/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-24 15:00:00",
            // "last_date" => "2022-11-30 18:00:00",
            // "created_at" => "2022-11-24 15:00:00",
            // "updated_at" => "2022-11-24 15:00:00"
            // ]
            // ,[
            // "description" => "ESPECIALISTA EN GESTIÓN DEL SISTEMA DE TESORERIA PUBLICA.",
            // "url_pdf" => "https://drive.google.com/file/d/1PAs4wW-i82REeczTlJ1Y2ddhO4M3d-e-/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 08:00:00",
            // "last_date" => "2022-11-25 18:00:00",
            // "created_at" => "2022-11-25 08:00:00",
            // "updated_at" => "2022-11-25 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CONTROL PREVIO Y REVISION DE DOCUMENTOS ADMINISTRATIVOS",
            // "url_pdf" => "https://drive.google.com/file/d/12F2K9bUpKOuuQxRJtFuMD6kZUGxcnqWF/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 10:00:00",
            // "last_date" => "2022-11-25 18:00:00",
            // "created_at" => "2022-11-25 10:00:00",
            // "updated_at" => "2022-11-25 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1zv8xTnO3oAJP4wdosT8ymR80dIa6Ob9w/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 10:00:00",
            // "last_date" => "2022-11-25 18:00:00",
            // "created_at" => "2022-11-25 10:00:00",
            // "updated_at" => "2022-11-25 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete. ",
            // "url_pdf" => "https://drive.google.com/file/d/1In4Do3Y7uMsEpcuVFL3pzbbb3cEmUV8W/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 10:00:00",
            // "last_date" => "2022-11-25 18:00:00",
            // "created_at" => "2022-11-25 10:00:00",
            // "updated_at" => "2022-11-25 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete. ",
            // "url_pdf" => "https://drive.google.com/file/d/14Ryn5T5jg5fIxCF2WghzjESL2hf9GgmO/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 10:00:00",
            // "last_date" => "2022-11-25 18:00:00",
            // "created_at" => "2022-11-25 10:00:00",
            // "updated_at" => "2022-11-25 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete. ",
            // "url_pdf" => "https://drive.google.com/file/d/1Gf5Ykz92R6_dF-iJE-GIcYiOu-aF54Pe/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 10:00:00",
            // "last_date" => "2022-11-25 18:00:00",
            // "created_at" => "2022-11-25 10:00:00",
            // "updated_at" => "2022-11-25 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete. ",
            // "url_pdf" => "https://drive.google.com/file/d/14Mng4kWDjZ3121AwjJde-ncmpx9gJcKX/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 10:00:00",
            // "last_date" => "2022-11-25 18:00:00",
            // "created_at" => "2022-11-25 10:00:00",
            // "updated_at" => "2022-11-25 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de profesional en ingeniería para el cumplimiento del plan de actividades de mantenimiento de la Universidad Nacional de Cañete 2022. ",
            // "url_pdf" => "https://drive.google.com/file/d/1ZexXCDNluGyJ0rZ0VW-xK-LxlkTkZSbV/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 10:00:00",
            // "last_date" => "2022-11-30 18:00:00",
            // "created_at" => "2022-11-25 10:00:00",
            // "updated_at" => "2022-11-25 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación de un profesional para las actividades administrativas del plan de actividades de mantenimiento de la Universidad Nacional de Cañete 2022. ",
            // "url_pdf" => "https://drive.google.com/file/d/1xHZid_T-p6I1mRo-Wq8QdEg1BTlFapEO/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 10:00:00",
            // "last_date" => "2022-11-29 18:00:00",
            // "created_at" => "2022-11-25 10:00:00",
            // "updated_at" => "2022-11-25 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Diagramación de Artículos Científicos para la Revista de Investigación Cañetana de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1oz0si-xMDMXVd85coH6wy4BoBfg652x3/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 17:00:00",
            // "last_date" => "2022-11-28 18:00:00",
            // "created_at" => "2022-11-25 17:00:00",
            // "updated_at" => "2022-11-25 17:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 2 Sillas Giratorias de Metal con brazos para la Unidad de Grados y TítulosSecretaria General de la UniversidadNacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/15re2g71HT6_r7QSfGj3OjW4_8mJo_jd8/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 17:00:00",
            // "last_date" => "2022-11-28 18:00:00",
            // "created_at" => "2022-11-25 17:00:00",
            // "updated_at" => "2022-11-25 17:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 2 Sillas Giratorias de Metal con brazos para la Unidad de Grados y TítulosSecretaria General de la UniversidadNacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/15re2g71HT6_r7QSfGj3OjW4_8mJo_jd8/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 17:00:00",
            // "last_date" => "2022-12-05 18:00:00",
            // "created_at" => "2022-11-25 17:00:00",
            // "updated_at" => "2022-11-25 17:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE REDACCIÓN, ORDENAMIENTO Y CLASIFICACIÓN DE DOCUMENTOS DEL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1e9-d0DbrcPjrPxL2c1cW1mYryVYLtLCA/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 15:00:00",
            // "last_date" => "2022-11-28 18:00:00",
            // "created_at" => "2022-11-25 15:00:00",
            // "updated_at" => "2022-11-25 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MONITOREO DE DIFUSIÓN DEL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1UO_TIl295yMeQi92dkXrXgklmCuGi6XI/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 15:00:00",
            // "last_date" => "2022-11-28 18:00:00",
            // "created_at" => "2022-11-25 15:00:00",
            // "updated_at" => "2022-11-25 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE COORDINADOR EN EL PROCESO DE INSCRIPCIÓN AL EXAMEN DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/17mfLvKpbrlGPsLcfIqCR-Q1F2q6M6ESY/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 15:00:00",
            // "last_date" => "2022-11-28 18:00:00",
            // "created_at" => "2022-11-25 15:00:00",
            // "updated_at" => "2022-11-25 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ORIENTACIÓN DE POSTULANTES A LA CARRERA PROFESIONAL DE ADMINISTRACIÓN DURANTE EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/11KiDjPnS1xLTPf-Fm_xhRA7xziTHEnfE/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 15:00:00",
            // "last_date" => "2022-11-28 18:00:00",
            // "created_at" => "2022-11-25 15:00:00",
            // "updated_at" => "2022-11-25 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ORIENTACIÓN DE POSTULANTES A LA CARRERA PROFESIONAL DE CONTABILIDAD DURANTE EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1lRlpcvlD7bXMvx4lNi3eRdVg_z6FYSBK/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 15:00:00",
            // "last_date" => "2022-11-28 18:00:00",
            // "created_at" => "2022-11-25 15:00:00",
            // "updated_at" => "2022-11-25 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ORIENTACIÓN DE POSTULANTES A LA CARRERA PROFESIONAL DE ADMINISTRACIÓN DE TURISMO Y HOTELERÍA DURANTE EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1rQ6hNtkvTD5oScgOvGh3XXCjuow_S7Fi/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 15:00:00",
            // "last_date" => "2022-11-28 18:00:00",
            // "created_at" => "2022-11-25 15:00:00",
            // "updated_at" => "2022-11-25 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ORIENTACIÓN DE POSTULANTES A LA CARRERA PROFESIONAL DE INGENIERÍA DE SISTEMAS DURANTE EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/11edku3N04Z_ImK1soTKaDnGswSaUBZK4/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 15:00:00",
            // "last_date" => "2022-11-28 18:00:00",
            // "created_at" => "2022-11-25 15:00:00",
            // "updated_at" => "2022-11-25 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ORIENTACIÓN DE POSTULANTES A LA CARRERA PROFESIONAL DE AGRONOMÍA DURANTE EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1pu6daFrOko4ALBIFHzUqVQJuSoxeLvlv/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-25 15:00:00",
            // "last_date" => "2022-11-28 18:00:00",
            // "created_at" => "2022-11-25 15:00:00",
            // "updated_at" => "2022-11-25 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO, COORDINACIÓN Y MONITOREO DEL PROYECTO DE INVERSIÓN: “MEJORAMIENTO DE LOS SERVICIOS DE FORMACIÓN PROFESIONAL EN ADMINISTRACIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN LUIS - PROVINCIA DE CAÑETE - DEPARTAMENTO DE LIMA” CON CUI 2468668, SEGÚN PLAN DE TRABAJO DE LA UNIDAD EJECUTORA DE INVERSIONES",
            // "url_pdf" => "https://drive.google.com/file/d/1wUh15ybhjzfssASdQjzJYD58VKGidUH3/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-28 09:00:00",
            // "last_date" => "2022-11-28 18:00:00",
            // "created_at" => "2022-11-28 09:00:00",
            // "updated_at" => "2022-11-28 09:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACIÓN DE SERVICIO DE APOYO EN ATENCIÓN DE REQUERIMIENTOS DE INGRESO EN LOS ALMACENES DE LA UNIVERSIDAD NACIONAL DE CAÑETE AL CIERRE DEL PERIODO 2022. ",
            // "url_pdf" => "https://drive.google.com/file/d/1U7ZYvxrQ1RBqoVLFg1uKrjoYYjNOmwQd/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-28 11:00:00",
            // "last_date" => "2022-11-28 18:00:00",
            // "created_at" => "2022-11-28 11:00:00",
            // "updated_at" => "2022-11-28 11:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACIÓN DE SERVICIO DE APOYO EN LA DISTRIBUCIÓN DE BIENES DEL ALMACÉN Y DERIVACIÓN DE DOCUMENTOS AL CIERRE DEL PERIODO 2022. ",
            // "url_pdf" => "https://drive.google.com/file/d/1bbumt6WU1Gt0NtHeLt2Dhepu-jsZ6dQS/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-28 11:00:00",
            // "last_date" => "2022-11-28 18:00:00",
            // "created_at" => "2022-11-28 11:00:00",
            // "updated_at" => "2022-11-28 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE TOMA DE INVENTARIO FISICO GENERAL DE BIENES MUEBLES PATRIMONIALES – ACTIVOS FIJOS, BIENES NO DEPRECIABLES Y EXISTENCIAS DEL ALMACEN AL 31 DE DICIEMBRE DEL 2022 DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1Nt0kn4WQaM-QVQx1Vh_m2Trf1VzxtQus/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-28 13:00:00",
            // "last_date" => "2022-12-01 08:00:00",
            // "created_at" => "2022-11-28 13:00:00",
            // "updated_at" => "2022-11-28 13:00:00"
            // ]
            // ,[
            // "description" => "MANTENIMIENTO AMBIENTES DEL TALLER DE MÚSICA Y TEATRO EN EL LOCAL ACADÉMICO CNI DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1d21dLM2BJO1jzaXp2_fQH-pItsqbPG2q/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-28 17:00:00",
            // "last_date" => "2022-12-02 13:00:00",
            // "created_at" => "2022-11-28 17:00:00",
            // "updated_at" => "2022-11-28 17:00:00"
            // ]
            // ,[
            // "description" => "Servicio de implementación de sistema de alarma contra incendios en el Local académico Centro de Investigación para la sustentabilidad Lunahuaná de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1CGVXG35vYoahmr_nSKIGzTX89aDrgGyW/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-28 17:00:00",
            // "last_date" => "2022-12-12 18:00:00",
            // "created_at" => "2022-11-28 17:00:00",
            // "updated_at" => "2022-11-28 17:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Mantenimiento y Ordenamiento De La Red De Internet De La Universidad Nacional De Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1vGtu5Bf55otys-aBeK1aZyWmZBfqgJrh/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-28 17:00:00",
            // "last_date" => "2022-12-02 18:00:00",
            // "created_at" => "2022-11-28 17:00:00",
            // "updated_at" => "2022-11-28 17:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 10 Medallas con estuche para los graduados de la UNDC para la entrega del Grado Académico de Bachiller de la UniversidadNacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1OZRqvHrG8aDZ_wwH89irPogU-r_bSVWm/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-29 09:00:00",
            // "last_date" => "2022-11-30 18:00:00",
            // "created_at" => "2022-11-29 09:00:00",
            // "updated_at" => "2022-11-29 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE REDACCIÓN, ORDENAMIENTO Y CLASIFICACIÓN DE DOCUMENTOS DEL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1dJu_yic_aUl5CZ8eDBxI49VzswpUg5ek/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-30 09:00:00",
            // "last_date" => "2022-12-01 18:00:00",
            // "created_at" => "2022-11-30 09:00:00",
            // "updated_at" => "2022-11-30 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MONITOREO DE DIFUSIÓN DEL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1lEpEF2NPmM2P36qroZnGZlWYxLE2mkgz/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-30 09:00:00",
            // "last_date" => "2022-12-01 18:00:00",
            // "created_at" => "2022-11-30 09:00:00",
            // "updated_at" => "2022-11-30 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE COORDINADOR EN EL PROCESO DE INSCRIPCIÓN AL EXAMEN DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1ywhNVE5JyG99206ti3_vuptzoXvP1Uij/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-30 09:00:00",
            // "last_date" => "2022-12-01 18:00:00",
            // "created_at" => "2022-11-30 09:00:00",
            // "updated_at" => "2022-11-30 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ORIENTACIÓN DE POSTULANTES A LA CARRERA PROFESIONAL DE ADMINISTRACIÓN DURANTE EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/14Nlwum904wpS5v545fbyvpk9Ew7DfnPw/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-30 09:00:00",
            // "last_date" => "2022-12-01 18:00:00",
            // "created_at" => "2022-11-30 09:00:00",
            // "updated_at" => "2022-11-30 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ORIENTACIÓN DE POSTULANTES A LA CARRERA PROFESIONAL DE CONTABILIDAD DURANTE EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1Lz97RXFbeTTqZfTWtm955gD9Fg6DTF01/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-30 09:00:00",
            // "last_date" => "2022-12-01 18:00:00",
            // "created_at" => "2022-11-30 09:00:00",
            // "updated_at" => "2022-11-30 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ORIENTACIÓN DE POSTULANTES A LA CARRERA PROFESIONAL DE ADMINISTRACIÓN DE TURISMO Y HOTELERÍA DURANTE EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1hGkE4vcYxSYjYDOTxyVyk_XE57mmyQLx/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-30 09:00:00",
            // "last_date" => "2022-12-01 18:00:00",
            // "created_at" => "2022-11-30 09:00:00",
            // "updated_at" => "2022-11-30 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ORIENTACIÓN DE POSTULANTES A LA CARRERA PROFESIONAL DE INGENIERÍA DE SISTEMAS DURANTE EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1BdbIAROz8kE6sgcSTgm7wMz2XRDpcqI2/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-30 09:00:00",
            // "last_date" => "2022-12-01 18:00:00",
            // "created_at" => "2022-11-30 09:00:00",
            // "updated_at" => "2022-11-30 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ORIENTACIÓN DE POSTULANTES A LA CARRERA PROFESIONAL DE AGRONOMÍA DURANTE EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1vgveERNTPxlZ6oM-nUPkje5YzGPS1mPz/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-09 09:00:00",
            // "last_date" => "2022-12-01 18:00:00",
            // "created_at" => "2022-11-09 09:00:00",
            // "updated_at" => "2022-11-09 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE ENSEÑANZA PARA DIFUNDIR EN FERIAS DE ORIENTACIÓN VOCACIONAL EL PROCESO DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1jjwprw-e9Sub_q6e_UyV4XFa8X0HtTuM/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-30 11:00:00",
            // "last_date" => "2022-12-01 12:00:00",
            // "created_at" => "2022-11-30 11:00:00",
            // "updated_at" => "2022-11-30 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de bidones de agua de mesa para la Unidad de Archivo Central de la SecretariaGeneral de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1sKPDExy-TM0RO6IbpdTl1R_P7cfawcS_/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-30 11:00:00",
            // "last_date" => "2022-11-30 18:00:00",
            // "created_at" => "2022-11-30 11:00:00",
            // "updated_at" => "2022-11-30 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de bidones de mesa para la secretaría general de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1FCy7BSxmQFWiYDVDBc8WFThSFG44zI0q/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-30 11:00:00",
            // "last_date" => "2022-11-30 18:00:00",
            // "created_at" => "2022-11-30 11:00:00",
            // "updated_at" => "2022-11-30 11:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Mantenimiento y Recarga de Extintores de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/111negnF4EQUC1wBLqr0vwOnlAB-ne--m/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-30 11:00:00",
            // "last_date" => "2022-12-01 18:00:00",
            // "created_at" => "2022-11-30 11:00:00",
            // "updated_at" => "2022-11-30 11:00:00"
            // ]
            // ,[
            // "description" => "“CONTRATACIÓN DEL SERVICIO DE MANTENIMIENTO PREVENTIVO DE LOS EQUIPOS DE LABORATORIO DE LA ESCUELA PROFESIONAL DE AGRONOMÍA DE LA UNIVERSIDAD NACIONAL DE CAÑETE”",
            // "url_pdf" => "https://drive.google.com/file/d/1O_cZ5yrEKp8-hTUkYFYCew6lDlfj9ZOk/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-30 17:00:00",
            // "last_date" => "2022-12-01 18:00:00",
            // "created_at" => "2022-11-30 17:00:00",
            // "updated_at" => "2022-11-30 17:00:00"
            // ]
            // ,[
            // "description" => "Servicio de mantenimiento preventivo de las unidades de transporte de placas EGO-950, EGO-737, EGO-731 y EGO-951 de propiedad de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1WcHqSgf1eblm1anHyhb4otTOUqBq2c7a/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-11-30 17:00:00",
            // "last_date" => "2022-12-01 18:00:00",
            // "created_at" => "2022-11-30 17:00:00",
            // "updated_at" => "2022-11-30 17:00:00"
            // ]
            // ,[
            // "description" => "“Servicio de revisión de información en aplicativo informático para la Unidad de Abastecimiento de la UNDC”",
            // "url_pdf" => "https://drive.google.com/file/d/1H01zFw8D-cMklKbOLZkzDA6Gk85O-a5q/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-01 09:00:00",
            // "last_date" => "2022-12-01 15:00:00",
            // "created_at" => "2022-12-01 09:00:00",
            // "updated_at" => "2022-12-01 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE CINTA DE SEÑALIZACIÓN DE SEGURIDAD PARA LA UNIDAD DE RECURSOS HUMANOS DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/17IzeyxiIVzsf3tFg6cAgv4U3Sf4XDki4/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-01 15:00:00",
            // "last_date" => "2022-12-02 18:00:00",
            // "created_at" => "2022-12-01 15:00:00",
            // "updated_at" => "2022-12-01 15:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE COMBUSTIBLE DIESEL B5 PARA EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1u1eq7P17LqgP3SLLN9bTyzW5BqpHBrOL/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-01 15:00:00",
            // "last_date" => "2022-12-02 18:00:00",
            // "created_at" => "2022-12-01 15:00:00",
            // "updated_at" => "2022-12-01 15:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE EQUIPOS PARA EL LABORATORIO DE BIOTECNOLOGÍA MOLECULAR AGRÍCOLA DEL CENTRO INTERNACIONAL DE INVESTIGACIÓN PARA LA SUSTENTABILIDAD (CIIS) DE LA UNIVERSIDAD NACIONAL DE CAÑETE SEDE - LUNAHUANÁ",
            // "url_pdf" => "https://drive.google.com/file/d/1_fVyJ6vrmsvIHSvKEfkAhhvL0WDFgrCq/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-02 09:00:00",
            // "last_date" => "2022-12-05 18:00:00",
            // "created_at" => "2022-12-02 09:00:00",
            // "updated_at" => "2022-12-02 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES PARA EL LABORATORIO DE LABORATORIO DE CULTIVO IN VITRO DE TEJIDO VEGETAL DEL CENTRO INTERNACIONAL DE INVESTIGACION PARA LA SUSTENTABILIDAD DE LA UNIVERSIDAD NACIONAL DE CAÑETE SEDE - LUNAHUANÁ ",
            // "url_pdf" => "https://drive.google.com/file/d/1fEM9dXdgX9nt-u-akWHwrDJaQbLV1a6B/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-02 09:00:00",
            // "last_date" => "2022-12-05 18:00:00",
            // "created_at" => "2022-12-02 09:00:00",
            // "updated_at" => "2022-12-02 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES PARA EL LABORATORIO DE CONTROL MICROBIOLÓGICO DE PLAGAS AGRÍCOLAS",
            // "url_pdf" => "https://drive.google.com/file/d/1klr3KdxJCaZ6oc5_dLq4DvxUoFpboZCt/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-02 09:00:00",
            // "last_date" => "2022-12-05 18:00:00",
            // "created_at" => "2022-12-02 09:00:00",
            // "updated_at" => "2022-12-02 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE REACTIVOS PARA EL LABORATORIO DE CONTROL MICROBIOLÓGICO DE PLAGAS AGRÍCOLAS",
            // "url_pdf" => "https://drive.google.com/file/d/1UfRho9ig6Zn0_SRlzM0iwQHAeKaZYMrN/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-02 09:00:00",
            // "last_date" => "2022-12-05 18:00:00",
            // "created_at" => "2022-12-02 09:00:00",
            // "updated_at" => "2022-12-02 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE EQUIPOS PARA EL LABORATORIO DE CONTROL MICROBIOLÓGICO DE PLAGAS AGRÍCOLAS",
            // "url_pdf" => "https://drive.google.com/file/d/1PnXSxMXRcX8r2T4sT5bd0-Aoo1sPpdfq/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-02 09:00:00",
            // "last_date" => "2022-12-05 18:00:00",
            // "created_at" => "2022-12-02 09:00:00",
            // "updated_at" => "2022-12-02 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de equipos para la implementación de Laboratorio de Bioquímica de Plantas Aromáticas y Medicinales de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1DA7l1QGyheUKejqtDflRFkU5sTh_MsgO/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-02 09:00:00",
            // "last_date" => "2022-12-05 18:00:00",
            // "created_at" => "2022-12-02 09:00:00",
            // "updated_at" => "2022-12-02 09:00:00"
            // ]
            // ,[
            // "description" => "Servicio de seguridad privada para las instalaciones de los locales académicos Casa de la Cultura, CNI, Fundo Don Luis, local Casuarinas, sede administrativa y el Centro de Investigación para la sustentabilidad Lunahuaná de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1t8TLDpAH7RhxeeHbt9NS_qeSUcAGreqG/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-02 09:00:00",
            // "last_date" => "2022-12-19 18:00:00",
            // "created_at" => "2022-12-02 09:00:00",
            // "updated_at" => "2022-12-02 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de gas licuado de petróleo GLP para la Escuela Profesional de Administración de Turismo y Hotelería de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1KWQqiGi9vPS8hxsKef2fhb2geKkHO8E3/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-02 10:00:00",
            // "last_date" => "2022-12-06 18:00:00",
            // "created_at" => "2022-12-02 10:00:00",
            // "updated_at" => "2022-12-02 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MEDALLAS CON ESTUCHE",
            // "url_pdf" => "https://drive.google.com/file/d/1G51eEVhmIcSex8kNSC48p6CXTq7ank9g/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-02 10:00:00",
            // "last_date" => "2022-12-05 18:00:00",
            // "created_at" => "2022-12-02 10:00:00",
            // "updated_at" => "2022-12-02 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE BANDEROLAS EN MATERIAL PANA",
            // "url_pdf" => "https://drive.google.com/file/d/1udU-Yf2JiDNTiGUS7S18ITrHvAZTyAFi/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-02 10:00:00",
            // "last_date" => "2022-12-05 18:00:00",
            // "created_at" => "2022-12-02 10:00:00",
            // "updated_at" => "2022-12-02 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de equipos y dispositivos para el taller de teatro. ",
            // "url_pdf" => "https://drive.google.com/file/d/1IWiuK6vGoJb7o5_1GeUpNG5HbKZ8HNv3/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-05 12:00:00",
            // "last_date" => "2022-12-06 12:00:00",
            // "created_at" => "2022-12-05 12:00:00",
            // "updated_at" => "2022-12-05 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de internet de banda ancha dedicado para el Centro de Investigación para la Sustentabilidad Lunahuaná, el local administrativo central y los locales académicos Casa de la Cultura y CNI de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1iXEvKdkL4srI1cyqxFxmF9FZ4Gur66rG/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-05 17:00:00",
            // "last_date" => "2022-12-06 09:00:00",
            // "created_at" => "2022-12-05 17:00:00",
            // "updated_at" => "2022-12-05 17:00:00"
            // ]
            // ,[
            // "description" => "MANTENIMIENTO DE SISTEMA DE AGUA Y DESAGÜE DE LA PLANTA DE TRATAMIENTO EN LA CIUDAD UNIVERSITARIA DEL FUNDO DON LUIS DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1dE36ezvEcixE44CcgArDC0EDXMvR8_aQ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-06 08:00:00",
            // "last_date" => "2022-12-07 10:00:00",
            // "created_at" => "2022-12-06 08:00:00",
            // "updated_at" => "2022-12-06 08:00:00"
            // ]
            // ,[
            // "description" => "MANTENIMIENTO DE MOTORREDUCTORES Y SISTEMA DE AIRE DE LA PLANTA DE TRATAMIENTO EN LA CIUDAD UNIVERSITARIA DEL FUNDO DON LUIS DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1hhfqEQHSHJA_r3im7mJ4B2nGRripAY0Y/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-06 08:00:00",
            // "last_date" => "2022-12-07 10:00:00",
            // "created_at" => "2022-12-06 08:00:00",
            // "updated_at" => "2022-12-06 08:00:00"
            // ]
            // ,[
            // "description" => "MANTENIMIENTO DE TABLEROS DE CONTROL Y SISTEMA ELECTRICO DE LA PLANTA DE TRATAMIENTO EN LA CIUDAD UNIVERSITARIA DEL FUNDO DON LUIS DE LA UNDC ",
            // "url_pdf" => "https://drive.google.com/file/d/1ym1d5aGzbLqYT7ETWWACiFOGBOVzCNi2/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-06 08:00:00",
            // "last_date" => "2022-12-07 10:00:00",
            // "created_at" => "2022-12-06 08:00:00",
            // "updated_at" => "2022-12-06 08:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de consultoría para la elaboración del estudio de la demanda educativa en la provincia de Cañete y la demanda social de los programas de estudios de la UNDC, alineados al modelo de renovación de licenciamiento y al modelo de acreditación para programas de estudio.",
            // "url_pdf" => "https://drive.google.com/file/d/1b4SLBcnndIi0Ux0g5gITMNIlq_8s3MuH/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-06 11:00:00",
            // "last_date" => "2022-12-12 13:00:00",
            // "created_at" => "2022-12-06 11:00:00",
            // "updated_at" => "2022-12-06 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de Banner, afiches y material publicitario para Servicios Médicos. ",
            // "url_pdf" => "https://drive.google.com/file/d/1C_eyPKpr0kDqa3V89cmK7SDov0xKcSWs/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-06 11:00:00",
            // "last_date" => "2022-12-07 18:00:00",
            // "created_at" => "2022-12-06 11:00:00",
            // "updated_at" => "2022-12-06 11:00:00"
            // ]
            // ,[
            // "description" => "Servicio Especializado de Responsabilidad Social Universitaria para la Universidad Nacional de Cañete ",
            // "url_pdf" => "https://drive.google.com/file/d/1kiKl-WoKrQADqfJ0W93lHMiuLXIkmDus/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-06 15:00:00",
            // "last_date" => "2022-12-07 18:00:00",
            // "created_at" => "2022-12-06 15:00:00",
            // "updated_at" => "2022-12-06 15:00:00"
            // ]
            // ,[
            // "description" => "Servicio Especializado de Responsabilidad Social Universitaria para la Universidad Nacional de Cañete ",
            // "url_pdf" => "https://drive.google.com/file/d/1kiKl-WoKrQADqfJ0W93lHMiuLXIkmDus/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-06 15:00:00",
            // "last_date" => "2022-12-07 18:00:00",
            // "created_at" => "2022-12-06 15:00:00",
            // "updated_at" => "2022-12-06 15:00:00"
            // ]
            // ,[
            // "description" => "Servicio Especializado de Responsabilidad Social Universitaria para la Universidad Nacional de Cañete ",
            // "url_pdf" => "https://drive.google.com/file/d/1kiKl-WoKrQADqfJ0W93lHMiuLXIkmDus/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-06 15:00:00",
            // "last_date" => "2022-12-07 18:00:00",
            // "created_at" => "2022-12-06 15:00:00",
            // "updated_at" => "2022-12-06 15:00:00"
            // ]
            // ,[
            // "description" => "Servicio Especializado de Responsabilidad Social Universitaria para la Universidad Nacional de Cañete ",
            // "url_pdf" => "https://drive.google.com/file/d/1kiKl-WoKrQADqfJ0W93lHMiuLXIkmDus/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-06 15:00:00",
            // "last_date" => "2022-12-12 18:00:00",
            // "created_at" => "2022-12-06 15:00:00",
            // "updated_at" => "2022-12-06 15:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACIÓN DEL SERVICIO DE MANTENIMIENTO DE PINTADO DE BUSES DE LA UNIVERSIDAD NACIONAL DE CAÑETE - LIMA",
            // "url_pdf" => "https://drive.google.com/file/d/15yfm67YyRy9Mv7orpmfBqWYNWHBnTFYn/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-06 17:00:00",
            // "last_date" => "2022-12-07 17:00:00",
            // "created_at" => "2022-12-06 17:00:00",
            // "updated_at" => "2022-12-06 17:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACIÓN DE SERVICIO DE CONSULTORIA Y DE CAPACITACIÓN DEL SOPORTE INFORMATICO PARA LA GESTIÓN DE LA INVESTIGACIÓN UNIVERSITARIA, RADAR DE PERTINENCIA, SEGUIMIENTOS DE OBJETIVOS DE GESTIÓN VPI Y REGISTRO INSTITUCIONAL DE PRODUCCIÓN CIENTÍFICA DE DOCENTES PARA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/14i4VFas1dTkACFFYIo_SOzsT7Il7D1Es/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-07 11:00:00",
            // "last_date" => "2022-12-12 12:00:00",
            // "created_at" => "2022-12-07 11:00:00",
            // "updated_at" => "2022-12-07 11:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACIÓN DEL SERVICIO CEREMONIA DE ENTREGA DE DIPLOMAS DE GRADOS DE BACHILLER Y TÍTULOS.",
            // "url_pdf" => "https://drive.google.com/file/d/1GsssV5xDd4S_sS3fglhe22hGBe950zV5/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-12 10:00:00",
            // "last_date" => "2022-12-12 18:00:00",
            // "created_at" => "2022-12-12 10:00:00",
            // "updated_at" => "2022-12-12 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MONITOREO DE DIFUSIÓN DEL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1ZzxIhyh_HdCqFmtgIN8CfvllgGG-GGhQ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-12 16:00:00",
            // "last_date" => "2022-12-12 18:00:00",
            // "created_at" => "2022-12-12 16:00:00",
            // "updated_at" => "2022-12-12 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE REDACCIÓN, ORDENAMIENTO Y CLASIFICACIÓN DE DOCUMENTOS DEL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/11wGA8ge8PGlTqBpmPPkA5FUX-POtuzHL/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-12 16:00:00",
            // "last_date" => "2022-12-12 18:00:00",
            // "created_at" => "2022-12-12 16:00:00",
            // "updated_at" => "2022-12-12 16:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de equipos y dispositivos para el taller de teatro.",
            // "url_pdf" => "https://drive.google.com/file/d/1UyhiaRjI5VePLDhiGu4JnCz7NuwvYc3-/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-13 11:00:00",
            // "last_date" => "2022-12-13 18:00:00",
            // "created_at" => "2022-12-13 11:00:00",
            // "updated_at" => "2022-12-13 11:00:00"
            // ]
            // ,[
            // "description" => "“CONTRATACIÓN DEL SERVICIO DE MANTENIMIENTO DE EQUIPOS INFORMÁTICOS DE LA UNIVERSIDAD NACIONAL DE CAÑETE”",
            // "url_pdf" => "https://drive.google.com/file/d/13YH5qprD-vW5EnWfuNVIDHbIsnRjCG_Z/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-13 11:00:00",
            // "last_date" => "2022-12-14 13:00:00",
            // "created_at" => "2022-12-13 11:00:00",
            // "updated_at" => "2022-12-13 11:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de renovación de Póliza de Seguro Vehicular para las unidades de transporte de placa EGO - 731, EGJ - 132 y EGI - 244 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/181pKbsVKFvLI5f-34SmTg09rEekPHQjr/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-13 12:00:00",
            // "last_date" => "2022-12-18 15:00:00",
            // "created_at" => "2022-12-13 12:00:00",
            // "updated_at" => "2022-12-13 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Volanteo para el Centro Preuniversitario de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1ki_U67gw-Bj5jTt47AwKjA-Eeu0dTMWO/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-13 13:00:00",
            // "last_date" => "2022-12-14 18:00:00",
            // "created_at" => "2022-12-13 13:00:00",
            // "updated_at" => "2022-12-13 13:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de impresión de volantes para el Centro Pre Universitario de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1OHob1HxhDpGIKa0dKNjfdCk9N6r0NEDn/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-13 13:00:00",
            // "last_date" => "2022-12-14 18:00:00",
            // "created_at" => "2022-12-13 13:00:00",
            // "updated_at" => "2022-12-13 13:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Volanteo para el Centro Preuniversitario de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1DEs7j6efH6LU4lhYUB1-aD_Gwxd5cAyw/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-14 09:00:00",
            // "last_date" => "2022-12-14 18:00:00",
            // "created_at" => "2022-12-14 09:00:00",
            // "updated_at" => "2022-12-14 09:00:00"
            // ]
            // ,[
            // "description" => "“SERVICIO DE INSTALACIÓN DE SISTEMA DE REFRIGERACIÓN PARA EL CENTRO DE DATOS”",
            // "url_pdf" => "https://drive.google.com/file/d/14QL8Vod8UTCpl1c3kq4iDyXkBGoIO37K/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-15 09:00:00",
            // "last_date" => "2022-12-19 18:00:00",
            // "created_at" => "2022-12-15 09:00:00",
            // "updated_at" => "2022-12-15 09:00:00"
            // ]
            // ,[
            // "description" => "Servicio de seguridad privada para las instalaciones de los locales académicos Casa de la Cultura, CNI, Fundo Don Luis, local Casuarinas, sede administrativa y el Centro de Investigación para la sustentabilidad Lunahuaná de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1oqh1RcE6Fvvn8GfuhiYhvsxrC11pg-em/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-15 10:00:00",
            // "last_date" => "2022-12-19 18:00:00",
            // "created_at" => "2022-12-15 10:00:00",
            // "updated_at" => "2022-12-15 10:00:00"
            // ]
            // ,[
            // "description" => "MANTENIMIENTO DE SISTEMA DE AGUA Y DESAGÜE DE LA PLANTA DE TRATAMIENTO EN LA CIUDAD UNIVERSITARIA DEL FUNDO DON LUIS DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1CVV2w_58n9V8dCf3QRexbspHX41BVcU1/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-15 16:00:00",
            // "last_date" => "2022-12-16 13:00:00",
            // "created_at" => "2022-12-15 16:00:00",
            // "updated_at" => "2022-12-15 16:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACIÓN DEL SERVICIO DE MANTENIMIENTO DE PINTADO DE BUSES DE LA UNIVERSIDAD NACIONAL DE CAÑETE - LIMA",
            // "url_pdf" => "https://drive.google.com/file/d/1AWhXeJHcDXNH-vKqlXVtku4j3T_gQrA1/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-15 16:00:00",
            // "last_date" => "2022-12-16 13:00:00",
            // "created_at" => "2022-12-15 16:00:00",
            // "updated_at" => "2022-12-15 16:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de materiales de mantenimiento para los locales de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1wkSfB1vQ-XfC7BLO-NC6oKUCOYFWeg8D/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-16 08:00:00",
            // "last_date" => "2022-12-16 15:00:00",
            // "created_at" => "2022-12-16 08:00:00",
            // "updated_at" => "2022-12-16 08:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de elaboración de Spot publicitario para radio y televisión para el Centro Preuniversitario.",
            // "url_pdf" => "https://drive.google.com/file/d/1-Z6-XPaW8ZYrxsRBpLnQbh0erwtVHj2w/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-16 16:00:00",
            // "last_date" => "2022-12-19 18:00:00",
            // "created_at" => "2022-12-16 16:00:00",
            // "updated_at" => "2022-12-16 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de elaboración de Spot publicitario para radio y televisión para el Centro Preuniversitario.",
            // "url_pdf" => "https://drive.google.com/file/d/1-Z6-XPaW8ZYrxsRBpLnQbh0erwtVHj2w/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-16 16:00:00",
            // "last_date" => "2022-12-19 18:00:00",
            // "created_at" => "2022-12-16 16:00:00",
            // "updated_at" => "2022-12-16 16:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES PARA EL POSICIONAMIENTO DE LA IMAGEN DE LA UNIVERSIDAD NACIONAL DE CAÑETE, EN ACTOS PROTOCOLARES",
            // "url_pdf" => "https://drive.google.com/file/d/1HrQJOlWHYapC-SL_ihgbYbspJPA1c-qs/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-16 16:00:00",
            // "last_date" => "2022-12-19 15:00:00",
            // "created_at" => "2022-12-16 16:00:00",
            // "updated_at" => "2022-12-16 16:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de filtro de carbón activado tipo cartucho para la Dirección de Responsabilidad Social Universitaria”",
            // "url_pdf" => "https://drive.google.com/file/d/1hBgv9oTbm2RTsPJmzhpSUb7Gr8-yAXCi/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-20 12:00:00",
            // "last_date" => "2022-12-20 17:00:00",
            // "created_at" => "2022-12-20 12:00:00",
            // "updated_at" => "2022-12-20 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de elaboración de contenido digital para las redes sociales y ejecución de la campaña digital, para el Centro Pre Universitario de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1raKXVjflDai4DZXywI9MxoyH7jPevSfq/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-23 08:30:00",
            // "last_date" => "2022-12-23 15:00:00",
            // "created_at" => "2022-12-23 08:30:00",
            // "updated_at" => "2022-12-23 08:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Comunicación Televisiva, para difusión del Centro Pre Universitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/drive/folders/1v39CBZt4-fR_X7ThmRsmZdcNfnrg9-EA?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2022-12-23 15:00:00",
            // "last_date" => "2022-12-26 11:00:00",
            // "created_at" => "2022-12-23 15:00:00",
            // "updated_at" => "2022-12-23 15:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE CHALECOS PERSONALIZADOS PARA LA DIRECCIÓN DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1rBQWgVyLMaIRLTvcPdbFU30ac7LZhvm1/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-26 11:00:00",
            // "last_date" => "2022-12-26 17:30:00",
            // "created_at" => "2022-12-26 11:00:00",
            // "updated_at" => "2022-12-26 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición De Herramientas Y Accesorios Para El Taller De Maestranza de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1_eaK2LVv9-2cH1a_PRDBUsaE18cF8bq7/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-28 10:00:00",
            // "last_date" => "2022-12-30 13:00:00",
            // "created_at" => "2022-12-28 10:00:00",
            // "updated_at" => "2022-12-28 10:00:00"
            // ]
            // ,[
            // "description" => "Servicio de internet de banda ancha dedicado para el Centro de Investigación para la Sustentabilidad Lunahuaná, el local administrativo central, el local Hualcará y los locales académicos Casa de la Cultura, CNI y el local Fundo Don Luis de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/10invjUsbMOoFsjcsJJ3brV5RRTAKdmSL/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-12-30 08:00:00",
            // "last_date" => "2022-12-30 13:00:00",
            // "created_at" => "2022-12-30 08:00:00",
            // "updated_at" => "2022-12-30 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE VERIFICACIÓN DE DOCUMENTOS EN EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1tIbbMkLEXC-GHznn7hJLQBC-lMv4tbX_/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-23 08:00:00",
            // "last_date" => "2023-01-24 12:00:00",
            // "created_at" => "2023-01-23 08:00:00",
            // "updated_at" => "2023-01-23 08:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Especialista en Gestión del Sistema de Tesorería Publica",
            // "url_pdf" => "https://drive.google.com/file/d/1shXrDi2ZdJIAzQI3WlQWXfYyq_y8QHLc/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-23 08:30:00",
            // "last_date" => "2023-01-24 12:00:00",
            // "created_at" => "2023-01-23 08:30:00",
            // "updated_at" => "2023-01-23 08:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIAL PUBLICITARIO PARA EL PROCESO DE ADMISIÓN UNDC 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/11vVAJqjL0XNg6D_uyrnt3DUsmjeBtmAC/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-23 08:30:00",
            // "last_date" => "2023-01-24 12:00:00",
            // "created_at" => "2023-01-23 08:30:00",
            // "updated_at" => "2023-01-23 08:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ELABORACIÓN DE SPOT PUBLICITARIO AUDIOVISUAL PARA EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1aJsYy8dEKvs6EQEJU20sD1vKEvyEGjxq/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-23 08:30:00",
            // "last_date" => "2023-01-24 12:00:00",
            // "created_at" => "2023-01-23 08:30:00",
            // "updated_at" => "2023-01-23 08:30:00"
            // ]
            // ,[
            // "description" => "Adquisición De 16 Diplomas De Bachiller Con Caligrafiado Para Los Graduados De La Universidad Nacional De Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1n4b2RKUmVhJvCBtIoNeMtTCVef_S4MTR/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-23 09:00:00",
            // "last_date" => "2023-01-24 12:00:00",
            // "created_at" => "2023-01-23 09:00:00",
            // "updated_at" => "2023-01-23 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANEJO DE PLATAFORMA VIRTUAL Y PAGINA WEB EN EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/16KW0G3KCOBxNZETvaDzmD5gTKgOBsuSv/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-23 10:00:00",
            // "last_date" => "2023-01-24 13:00:00",
            // "created_at" => "2023-01-23 10:00:00",
            // "updated_at" => "2023-01-23 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE IMPRESIÓN DE VOLANTES Y AFICHES PUBLICITARIOS PARA EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1Xyzt4Ea74hsP0VcpyQYNL4ZWqIvFnh4p/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-23 10:30:00",
            // "last_date" => "2023-01-24 13:30:00",
            // "created_at" => "2023-01-23 10:30:00",
            // "updated_at" => "2023-01-23 10:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE PROCESAMIENTO, ORDENAMIENTO Y CLASIFICACION DE DOCUMENTOS ADMINISTRATIVOS.",
            // "url_pdf" => "https://drive.google.com/file/d/1uf2w_YJvQ8t5xDkUmoYa3yYf0BO7DXLH/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-23 10:30:00",
            // "last_date" => "2023-01-24 13:30:00",
            // "created_at" => "2023-01-23 10:30:00",
            // "updated_at" => "2023-01-23 10:30:00"
            // ]
            // ,[
            // "description" => "Estudio de mercado para la contratación del servicio de consultoría para la elaboración del estudio de preinversión a nivel de Perfil: “Del Centro de Investigación de la Universidad Nacional De Cañete – Distrito De San Luis – Provincia de Cañete – Región de Lima”",
            // "url_pdf" => "https://drive.google.com/drive/folders/1GKfVKIZVZ8g3CFNwpW_P-P-z4FCHZXxe?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-23 11:00:00",
            // "last_date" => "2023-01-26 10:00:00",
            // "created_at" => "2023-01-23 11:00:00",
            // "updated_at" => "2023-01-23 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE PUBLICIDAD EN REDES SOCIALES PARA EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1J_3Jt-Qff0q6SX-YCmglC44qcGDaG05r/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-23 11:00:00",
            // "last_date" => "2023-01-27 12:00:00",
            // "created_at" => "2023-01-23 11:00:00",
            // "updated_at" => "2023-01-23 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DESCRIPCIÓN ANALÍTICA Y CONSERVACIÓN PREVENTIVA DE DOCUMENTOS, para Archivo Central de la Secretaría General de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/drive/u/0/folders/1D6TIWM2VcMrIAoQWY9noS79sSEA3Gt7Y",
            // "user_id" => 1,
            // "start_date" => "2023-01-24 12:35:00",
            // "last_date" => "2023-01-26 18:00:00",
            // "created_at" => "2023-01-24 12:35:00",
            // "updated_at" => "2023-01-24 12:35:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ELABORACION DE CUADRO DE NECESIDADES ",
            // "url_pdf" => "https://drive.google.com/file/d/1vo4DH3FzCBelVJOydMl-MH9wMrrxhq_e/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 08:00:00",
            // "last_date" => "2023-01-25 15:00:00",
            // "created_at" => "2023-01-25 08:00:00",
            // "updated_at" => "2023-01-25 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ELABORACION DE CUADRO DE NECESIDADES ",
            // "url_pdf" => "https://drive.google.com/file/d/1vo4DH3FzCBelVJOydMl-MH9wMrrxhq_e/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 08:00:00",
            // "last_date" => "2023-01-25 15:00:00",
            // "created_at" => "2023-01-25 08:00:00",
            // "updated_at" => "2023-01-25 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y MONITOREO DE PLAN DE ACTIVIDADES EN LOS PROCESOS DEL SISTEMA INTEGRADO DE GESTIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1BQbVCIv9xgaMKParQ8sn8G2jms6YflUs/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 09:00:00",
            // "last_date" => "2023-01-25 18:00:00",
            // "created_at" => "2023-01-25 09:00:00",
            // "updated_at" => "2023-01-25 09:00:00"
            // ]
            // ,[
            // "description" => "Adquirir licencias de Software Antivirus",
            // "url_pdf" => "https://drive.google.com/file/d/1-X2OpJC4_dMKez7M5pS8PiGp_zqm-ujl/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 09:30:00",
            // "last_date" => "2023-01-27 12:00:00",
            // "created_at" => "2023-01-25 09:30:00",
            // "updated_at" => "2023-01-25 09:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE LEVANTAMIENTO DE NO CONFORMIDADES, AUDITORÍA INTERNA Y REVISIÓN POR LA DIRECCIÓN DE LAS NORMAS INTERNACIONALES ISO DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1h5N0UvkJnlL7sgs_FibcNwLUta3GT04w/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 10:00:00",
            // "last_date" => "2023-01-26 09:00:00",
            // "created_at" => "2023-01-25 10:00:00",
            // "updated_at" => "2023-01-25 10:00:00"
            // ]
            // ,[
            // "description" => "“Servicio Especializado en Gestión de Contrataciones Públicas para la Unidad de Abastecimiento de la UNDC”",
            // "url_pdf" => "https://drive.google.com/file/d/1cOCuG6flrAcsvZMFdxPg4VIzmHetnFXn/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 10:00:00",
            // "last_date" => "2023-01-25 18:00:00",
            // "created_at" => "2023-01-25 10:00:00",
            // "updated_at" => "2023-01-25 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y MONITOREO DE PLAN DE ACTIVIDADES PARA EL PROCESO DE LICENCIAMIENTO INSTITUCIONAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1zfY7PjJSbPFNq4treZ7Id_B46KtjKMjK/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 10:00:00",
            // "last_date" => "2023-01-26 09:00:00",
            // "created_at" => "2023-01-25 10:00:00",
            // "updated_at" => "2023-01-25 10:00:00"
            // ]
            // ,[
            // "description" => "CONTRATAR LOS SERVICIOS DE UN PROFESIONAL ESPECIALISTA EN GESTIÓN ADMINISTRATIVA PARA LA PRESIDENCIA DE LA COMISIÓN ORGANIZADORA",
            // "url_pdf" => "https://drive.google.com/file/d/1Vn2H2qRTl84V-wRzyW4CqAoqW366EfBq/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 10:40:00",
            // "last_date" => "2023-01-26 12:00:00",
            // "created_at" => "2023-01-25 10:40:00",
            // "updated_at" => "2023-01-25 10:40:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DE SERVICIO DE SEGUIMIENTO Y MONITOREO EN LAS ACTIVIDADES DE GESTION Y DE CAMPO EN EL PROCESO DE INVENTARIO DE BIENES MUEBLES Y EXISTENCIAS DE LA UNDC ",
            // "url_pdf" => "https://drive.google.com/file/d/1SVqDka2YFVqJEOzhMAPtmCeoFsB8d890/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 10:45:00",
            // "last_date" => "2023-01-26 12:00:00",
            // "created_at" => "2023-01-25 10:45:00",
            // "updated_at" => "2023-01-25 10:45:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ENSEÑANZA DE TEATRO ",
            // "url_pdf" => "https://drive.google.com/file/d/1f_RdM8QyU5gOjVmFQp6-mQyKgHCmDgEm/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 11:22:00",
            // "last_date" => "2023-01-26 18:00:00",
            // "created_at" => "2023-01-25 11:22:00",
            // "updated_at" => "2023-01-25 11:22:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ENSEÑANZA DE DANZAS ",
            // "url_pdf" => "https://drive.google.com/file/d/1SRvWB3x3tiiHXHPEima1e-E3n1tRy30N/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 12:55:00",
            // "last_date" => "2023-01-26 18:00:00",
            // "created_at" => "2023-01-25 12:55:00",
            // "updated_at" => "2023-01-25 12:55:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CONTROL PREVIO Y REVISION DE DOCUMENTOS ADMINISTRATIVOS.",
            // "url_pdf" => "https://drive.google.com/file/d/1QmDuY0dNB5dLW-KIXyEuD8NRYoqZO_LO/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 13:00:00",
            // "last_date" => "2023-01-26 11:00:00",
            // "created_at" => "2023-01-25 13:00:00",
            // "updated_at" => "2023-01-25 13:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de Seguridad y Vigilancia para el local Hualcará de la Universidad Nacional de Cañete. 1",
            // "url_pdf" => "https://drive.google.com/file/d/1akSDCPwMXjW8OJi1Q_Z0JcrpEq70o1AM/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 15:37:00",
            // "last_date" => "2023-01-26 18:00:00",
            // "created_at" => "2023-01-25 15:37:00",
            // "updated_at" => "2023-01-25 15:37:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de Seguridad y Vigilancia para el local Hualcará de la Universidad Nacional de Cañete. 2",
            // "url_pdf" => "https://drive.google.com/file/d/1Uejcw1IKaz59CLSPjW4PXQPauH2oZJmt/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 15:38:00",
            // "last_date" => "2023-01-26 18:00:00",
            // "created_at" => "2023-01-25 15:38:00",
            // "updated_at" => "2023-01-25 15:38:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de Seguridad y Vigilancia para el local Hualcará de la Universidad Nacional de Cañete. 3",
            // "url_pdf" => "https://drive.google.com/file/d/1jVW3VOuJHiSyoP_yK04WxEi4ADnFh_Ec/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 15:39:00",
            // "last_date" => "2023-01-26 18:00:00",
            // "created_at" => "2023-01-25 15:39:00",
            // "updated_at" => "2023-01-25 15:39:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para el Local Administrativo Central de la Universidad Nacional de Cañete. ",
            // "url_pdf" => "https://drive.google.com/file/d/1Tz04TXkNoZ92gBL7qQYXJ72P9uFJK5tL/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 15:56:00",
            // "last_date" => "2023-01-26 18:00:00",
            // "created_at" => "2023-01-25 15:56:00",
            // "updated_at" => "2023-01-25 15:56:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para el Local de Hualcará de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1iWreLS9qb2fNa7iJgrLywhnU7tDWkXgh/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 15:57:00",
            // "last_date" => "2023-01-26 18:00:00",
            // "created_at" => "2023-01-25 15:57:00",
            // "updated_at" => "2023-01-25 15:57:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y de limpieza de local para el Centro Internacional de Investigación para la Sustentabilidad Lunahuaná de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1lZ0BmAQkEYH_uiVao0J_wZPeLWxYJzrK/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 15:59:00",
            // "last_date" => "2023-01-26 18:00:00",
            // "created_at" => "2023-01-25 15:59:00",
            // "updated_at" => "2023-01-25 15:59:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Evaluación Técnica-científica de proyectos de investigación, en atención a la Convocatoria de Fondos Concursables “Resolviendo Problemas de Cañete y el Perú” - Evaluador 1.",
            // "url_pdf" => "https://drive.google.com/file/d/1lM9iyAEpx2_BV2JG7pbf85MgkVIugZhY/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 16:00:00",
            // "last_date" => "2023-01-26 16:00:00",
            // "created_at" => "2023-01-25 16:00:00",
            // "updated_at" => "2023-01-25 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Evaluación Técnica-científica de proyectos de investigación, en atención a la Convocatoria de Fondos Concursables “Resolviendo Problemas de Cañete y el Perú” - Evaluador 2.",
            // "url_pdf" => "https://drive.google.com/file/d/1LtT3XCCS_Ap1wU5_F9KRL_NwjGrv__0t/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 16:00:00",
            // "last_date" => "2023-01-26 16:00:00",
            // "created_at" => "2023-01-25 16:00:00",
            // "updated_at" => "2023-01-25 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Evaluación Técnica-científica de proyectos de investigación, en atención a la Convocatoria de Fondos Concursables “Resolviendo Problemas de Cañete y el Perú” - Evaluador 3.",
            // "url_pdf" => "https://drive.google.com/file/d/1AZdx9UfyLnqxuftnHLOboMr8kxo7kKUF/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 16:00:00",
            // "last_date" => "2023-01-26 16:00:00",
            // "created_at" => "2023-01-25 16:00:00",
            // "updated_at" => "2023-01-25 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Evaluación Técnica-científica de proyectos de investigación, en atención a la Convocatoria de Fondos Concursables “Resolviendo Problemas de Cañete y el Perú” - Evaluador 4.",
            // "url_pdf" => "https://drive.google.com/file/d/1J_NgyzkqcwUniTjt_uhig6hc9UH9_EDn/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 16:00:00",
            // "last_date" => "2023-01-26 16:00:00",
            // "created_at" => "2023-01-25 16:00:00",
            // "updated_at" => "2023-01-25 16:00:00"
            // ]
            // ,[
            // "description" => "“Servicio de formulación y gestión de requerimientos de bienes y servicios” ",
            // "url_pdf" => "https://drive.google.com/file/d/1EADtd14fVAmvQoDIb_islGA2mvUGO4UD/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-25 16:00:00",
            // "last_date" => "2023-01-26 12:00:00",
            // "created_at" => "2023-01-25 16:00:00",
            // "updated_at" => "2023-01-25 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del “Servicio de soporte informático” para el Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1sj6VOM4C5ctC8idUG2kWhxUFZWvFexKD/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-26 08:00:00",
            // "last_date" => "2023-01-27 12:00:00",
            // "created_at" => "2023-01-26 08:00:00",
            // "updated_at" => "2023-01-26 08:00:00"
            // ]
            // ,[
            // "description" => "“Servicio de formulación y gestión de requerimientos de bienes y servicios” para ejecución del Plan de Trabajo del Ciclo Ordinario 2022-II del Centro Preuniversitario",
            // "url_pdf" => "https://drive.google.com/file/d/1j8qUbLjhIE17e2x-XTa0XiS35DkZWdiq/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-26 08:00:00",
            // "last_date" => "2023-01-27 12:00:00",
            // "created_at" => "2023-01-26 08:00:00",
            // "updated_at" => "2023-01-26 08:00:00"
            // ]
            // ,[
            // "description" => "Contratación de “Servicio de soporte informático en web”, para la plataforma virtual del Centro Preuniversitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/13zAt8yHioo27rH3jWYVuf6IlSLwKnZUS/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-26 08:00:00",
            // "last_date" => "2023-01-27 12:00:00",
            // "created_at" => "2023-01-26 08:00:00",
            // "updated_at" => "2023-01-26 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ASISTENCIA ADMINISTRATIVA Y PRESUPUESTAL PARA EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1a4bER9upB3ShAMMULxFaQ-IECQuLYXPk/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-26 08:00:00",
            // "last_date" => "2023-01-26 12:00:00",
            // "created_at" => "2023-01-26 08:00:00",
            // "updated_at" => "2023-01-26 08:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Especialista para la gestión, coordinación administrativa y financiera de proyectos de investigación para la Vicepresidencia de Investigación.",
            // "url_pdf" => "https://drive.google.com/file/d/1UawtoeOT0QEWMjyTX8tXTVJE5MiiDFa0/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-26 09:00:00",
            // "last_date" => "2023-01-26 18:00:00",
            // "created_at" => "2023-01-26 09:00:00",
            // "updated_at" => "2023-01-26 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE PROGRAMACIÓN Y SOPORTE INFORMÁTICO PARA EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1tuN1gJuFi3TgS1-8b53byXt_QqpoWy3H/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-26 09:00:00",
            // "last_date" => "2023-01-26 18:00:00",
            // "created_at" => "2023-01-26 09:00:00",
            // "updated_at" => "2023-01-26 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE UN PERSONAL PARA EL SEGUIMIENTO DE EJECUCIÓN DE CONVENIOS DE COOPERACIÓN INTERINSTITUCIONALES DE LA OFICINA DE COOPERACIÓN Y RELACIONES INTERNACIONALES.",
            // "url_pdf" => "https://drive.google.com/file/d/1tXy4pJEJP_ok2Ie9K12CydUtMzy2oy1C/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-26 09:30:00",
            // "last_date" => "2023-01-26 18:00:00",
            // "created_at" => "2023-01-26 09:30:00",
            // "updated_at" => "2023-01-26 09:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y MONITOREO DE PLAN DE ACTIVIDADES EN EL PROCESO DE ACREDITACIÓN DE LAS ESCUELAS PROFESIONALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1MBE1Uj__qaRXJrqucA2dPEcYzz2FKZ2E/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-26 10:30:00",
            // "last_date" => "2023-01-26 18:00:00",
            // "created_at" => "2023-01-26 10:30:00",
            // "updated_at" => "2023-01-26 10:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y MONITOREO DE PLAN DE ACTIVIDADES EN EL PROCESO DE ACREDITACIÓN DE LAS ESCUELAS PROFESIONALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1MBE1Uj__qaRXJrqucA2dPEcYzz2FKZ2E/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-26 10:30:00",
            // "last_date" => "2023-01-26 18:00:00",
            // "created_at" => "2023-01-26 10:30:00",
            // "updated_at" => "2023-01-26 10:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de combustible DIESEL B5 S50, GASOHOL 97 PLUS y GASOLINA 90 OCTANOS para las unidades de transporte y maquinarias de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1q-IsNoKOTYCCvXVhTJzAZvCXza1l3G73/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-27 07:49:00",
            // "last_date" => "2023-01-30 13:00:00",
            // "created_at" => "2023-01-27 07:49:00",
            // "updated_at" => "2023-01-27 07:49:00"
            // ]
            // ,[
            // "description" => "Contratación de un profesional para las actividades administrativas del plan de mantenimiento de la Universidad Nacional de Cañete. ",
            // "url_pdf" => "https://drive.google.com/file/d/1asib28kErecXnA30hjXBBzJYPoPEM6ok/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-27 07:58:00",
            // "last_date" => "2023-01-30 13:00:00",
            // "created_at" => "2023-01-27 07:58:00",
            // "updated_at" => "2023-01-27 07:58:00"
            // ]
            // ,[
            // "description" => "Contratación del “Servicio de limpieza y mantenimiento de local “Casa de la Cultura de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1zwEZTetLcR3b3w3twIcMvRJTjv3Nf-Nu/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-27 08:00:00",
            // "last_date" => "2023-01-27 14:00:00",
            // "created_at" => "2023-01-27 08:00:00",
            // "updated_at" => "2023-01-27 08:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de un profesional en ingeniería para la Unidad de Servicios Generales de la Universidad Nacional de Cañete. ",
            // "url_pdf" => "https://drive.google.com/file/d/1XmBqF0MJTATVaOBpUC7HAmG1ptbpNqR6/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-27 08:02:00",
            // "last_date" => "2023-01-30 18:00:00",
            // "created_at" => "2023-01-27 08:02:00",
            // "updated_at" => "2023-01-27 08:02:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1DP6qjQiXcDF0ZxNQjtuj6VLgtZErPdcN/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-27 08:07:00",
            // "last_date" => "2023-01-27 13:00:00",
            // "created_at" => "2023-01-27 08:07:00",
            // "updated_at" => "2023-01-27 08:07:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de Supervisor de Seguridad para la Unidad de Servicios Generales de Universidad Nacional de Cañete. ",
            // "url_pdf" => "https://drive.google.com/file/d/150Ent6_JVOX41OfBWapLkYMp0Tz3cZ-s/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-27 09:04:00",
            // "last_date" => "2023-01-30 13:00:00",
            // "created_at" => "2023-01-27 09:04:00",
            // "updated_at" => "2023-01-27 09:04:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio especializado en instalaciones eléctricas - Técnico para la Unidad de Servicios Generales de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1qNGoegwpzucT3iT_PQ_znLQ-8Bnq39Sw/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-27 09:25:00",
            // "last_date" => "2023-01-30 13:00:00",
            // "created_at" => "2023-01-27 09:25:00",
            // "updated_at" => "2023-01-27 09:25:00"
            // ]
            // ,[
            // "description" => "Servicio de mano de obra no calificada para la parcela 75 del predio San Roque del campo experimental de la Escuela Profesional de Agronomía.",
            // "url_pdf" => "https://drive.google.com/file/d/1dJl2kntXrKG_l2FujpdhdVytb84K4Qzg/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-27 15:07:00",
            // "last_date" => "2023-01-27 18:00:00",
            // "created_at" => "2023-01-27 15:07:00",
            // "updated_at" => "2023-01-27 15:07:00"
            // ]
            // ,[
            // "description" => "Servicio de mano de obra no calificada para la parcela 83 del predio San Roque del campo experimental de la Escuela Profesional de Agronomía.",
            // "url_pdf" => "https://drive.google.com/file/d/14GnCp1S0pCMowSIgTkJ1lao-kFf_s_RU/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-27 15:08:00",
            // "last_date" => "2023-01-27 18:00:00",
            // "created_at" => "2023-01-27 15:08:00",
            // "updated_at" => "2023-01-27 15:08:00"
            // ]
            // ,[
            // "description" => "Contratación de una persona natural para ejecución de gasto para actividades agrícolas mediante el servicio de instalación y conducción de parcelas experimentales en el fundo tercer mundo de la Escuela Profesional de Agronomía de la UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1xBpba4UYgOwpravZ7y5nPwgcGmefaAAs/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-27 16:35:00",
            // "last_date" => "2023-01-30 13:00:00",
            // "created_at" => "2023-01-27 16:35:00",
            // "updated_at" => "2023-01-27 16:35:00"
            // ]
            // ,[
            // "description" => "CONTRATACIÓN DE UN PROFESIONAL PARA REALIZAR EL SERVICIO ESPECIALIZADO DE SEGUIMIENTO, GESTIÓN, COORDINACIÓN Y MONITOREO DE LOS PROYECTOS DE INVERSIÓN QUE SE ENCUENTRAN EN ELABORACIÓN DE EXPEDIENTE TÉCNICO Y EJECUCIÓN, PARA LA UNIDAD EJECUTORA DE INVERSIONES",
            // "url_pdf" => "https://drive.google.com/file/d/13fL4QrLU9gOmTWt19b3H3rmGZTWhze6P/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 08:00:00",
            // "last_date" => "2023-01-31 15:00:00",
            // "created_at" => "2023-01-31 08:00:00",
            // "updated_at" => "2023-01-31 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ASISTENCIA TECNICA PARA EL MONITOREO DEL PROCESO DE INGRESO Y CONTRATACION DE DOCENTES PARA EL SECTOR EDUCACION.",
            // "url_pdf" => "https://drive.google.com/file/d/1l5XVqBFLrtVOZGq9SlfeufIFCNmaP95y/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 08:00:00",
            // "last_date" => "2023-01-31 15:00:00",
            // "created_at" => "2023-01-31 08:00:00",
            // "updated_at" => "2023-01-31 08:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de Útiles de Oficina para el abastecimiento del despacho de la Presidencia de la Comisión Organizadora de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1ZlUVLZKggmCi1lQT_qqX6bFwl7wRcXKg/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 09:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-01-31 09:00:00",
            // "updated_at" => "2023-01-31 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de Útiles de Oficina para el abastecimiento del despacho de la Presidencia de la Comisión Organizadora de la Universidad Nacional de Cañete 2.",
            // "url_pdf" => "https://drive.google.com/file/d/1HCk5yH6E1a-AFZUvt0cFiHVvCl8A7DN_/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 09:02:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-01-31 09:02:00",
            // "updated_at" => "2023-01-31 09:02:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SOPORTE TECNICO EN REDES ",
            // "url_pdf" => "https://drive.google.com/file/d/1h-3lOCgins-OljJEXXpVu1KnGpz4idCS/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 09:02:00",
            // "last_date" => "2023-01-31 15:00:00",
            // "created_at" => "2023-01-31 09:02:00",
            // "updated_at" => "2023-01-31 09:02:00"
            // ]
            // ,[
            // "description" => "Adquisición de de Útiles de escritorios para la EPAGR",
            // "url_pdf" => "https://drive.google.com/file/d/1OkbWSmKW0NxpyZqKEQdW9keQ8tYuPF6q/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 09:03:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-01-31 09:03:00",
            // "updated_at" => "2023-01-31 09:03:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ACTUALIZACION DE PLATAFORMA VIRTUAL Y PAGINA WEB",
            // "url_pdf" => "https://drive.google.com/file/d/1oNO8GWlRyppb1lPRqU6XAvYDkt7XKrPY/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 09:00:00",
            // "last_date" => "2023-01-31 15:00:00",
            // "created_at" => "2023-01-31 09:00:00",
            // "updated_at" => "2023-01-31 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE ADMINISTRACIÓN DE TURISMO Y HOTELERÍA DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1P1TmAM8SW67FRVIbbCp_fTUBIH0k0TiF/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 09:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-01-31 09:00:00",
            // "updated_at" => "2023-01-31 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de Útiles de Oficina para el abastecimiento a la Unidad de Grados y Títulos-Secretaria General de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1ORmHkw0fow77OEHqHRg3bsaWwQKS1ZhK/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 09:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-01-31 09:00:00",
            // "updated_at" => "2023-01-31 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de útiles de escritorio para e l á r e a d e Control Patrimonial y Almacén de la UniversidadNacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1TNOWqQ_9XaQyfisbufEjGqEtpFwMSO71/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 09:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-01-31 09:00:00",
            // "updated_at" => "2023-01-31 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de útiles de escritorio para el Centro Pre Universitario de la UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1gzk1NLGnoJNxsp4m-9veKLkt79fCIIEW/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-01-31 09:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2022-01-31 09:00:00",
            // "updated_at" => "2022-01-31 09:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de oficina” VPIN 2",
            // "url_pdf" => "https://drive.google.com/file/d/1GwyLnYlrTZ9iRlt3010bXf3_ZxDd4muj/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-01-31 09:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2022-01-31 09:00:00",
            // "updated_at" => "2022-01-31 09:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de oficina” VPIN 1",
            // "url_pdf" => "https://drive.google.com/file/d/1fBLOYohbefdEbUOR0k-9N0jDhHXC8Ssa/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 09:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-01-31 09:00:00",
            // "updated_at" => "2023-01-31 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE ADMINISTRACIÓN DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1NFsw6KPTqu11Hm0D25TMjHaXQnMneBDA/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 09:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-01-31 09:00:00",
            // "updated_at" => "2023-01-31 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE INGENIERÍA DE SISTEMAS DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1Cw1EZ5XhyB-H29IiJIHS4POO_bnBRpyH/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 09:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-01-31 09:00:00",
            // "updated_at" => "2023-01-31 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE AGUA MINERAL PARA LA UNIDAD DE GRADOS Y TITULO",
            // "url_pdf" => "https://drive.google.com/file/d/1QDzNXgEyEwoJELn-4ypp9U7g_0X1y70F/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 09:00:00",
            // "last_date" => "2023-02-01 15:00:00",
            // "created_at" => "2023-01-31 09:00:00",
            // "updated_at" => "2023-01-31 09:00:00"
            // ]
            // ,[
            // "description" => "REQUERIMIENTO DE ALIMENTOS Y BEBIDAS PARA EL CONSUMO HUMANO, PRA LA OFICINA DE ASESORIA JURIDICA",
            // "url_pdf" => "https://drive.google.com/file/d/1bEKSqE1r5sIrrDM_G7XHmTQ7qyK3lJSY/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 09:00:00",
            // "last_date" => "2023-02-01 15:00:00",
            // "created_at" => "2023-01-31 09:00:00",
            // "updated_at" => "2023-01-31 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE ALIMENTOS Y BEBIDAS PARA CONSUMO HUMANO",
            // "url_pdf" => "https://drive.google.com/file/d/1cpWF_XhOEHJ6vqlL0Nk22adNki8NSk-8/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 09:00:00",
            // "last_date" => "2023-02-01 15:00:00",
            // "created_at" => "2023-01-31 09:00:00",
            // "updated_at" => "2023-01-31 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE INGENIERÍA DE SISTEMAS DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1Cw1EZ5XhyB-H29IiJIHS4POO_bnBRpyH/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-01-31 09:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-01-31 09:00:00",
            // "updated_at" => "2023-01-31 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE ALIMENTOS Y BEBIDAS PARA CONSUMO HUMANO",
            // "url_pdf" => "https://drive.google.com/file/d/1oXlaUWZC-0xco5Q9a-X47LQvqkCPQsSz/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 09:00:00",
            // "last_date" => "2023-02-01 15:00:00",
            // "created_at" => "2023-02-01 09:00:00",
            // "updated_at" => "2023-02-01 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE ALIMENTOS Y BEBIDAS PARA CONSUMO HUMANO",
            // "url_pdf" => "https://drive.google.com/file/d/1qFzWtUV3f9nUS2u4HWvWC8Axg0vdNLhS/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 09:00:00",
            // "last_date" => "2023-02-07 15:00:00",
            // "created_at" => "2023-02-01 09:00:00",
            // "updated_at" => "2023-02-01 09:00:00"
            // ]
            // ,[
            // "description" => "Servicio de limpieza y mantenimiento de local “Casa de la Cultura de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1b3S_olA-E-Ow6rMvzPvw0GirOsdEq2Me/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 08:00:00",
            // "last_date" => "2023-02-01 11:00:00",
            // "created_at" => "2023-02-01 08:00:00",
            // "updated_at" => "2023-02-01 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - BIOLOGIA Y FISICA",
            // "url_pdf" => "https://drive.google.com/file/d/1ft5gYcfJ2-iehGL1sTO-kOiw-DEyEH7v/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - QUIMICA",
            // "url_pdf" => "https://drive.google.com/file/d/1R-vnQ70BA0dG5uu9-LWTpyw3IWOejItT/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - HLM I Y II",
            // "url_pdf" => "https://drive.google.com/file/d/1KyLiBdTOp5Yn2gTcRXxTRybDBqX6lsxw/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE- AA HLM GT",
            // "url_pdf" => "https://drive.google.com/file/d/1kNiTYxPImKGldWV2eUb_f5tr6onTo-sb/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - HV I Y II",
            // "url_pdf" => "https://drive.google.com/file/d/1XjSPlotbOikiCdeyM0XdrmcHuTazyu04/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - HABILIDAD VERBAL I Y II",
            // "url_pdf" => "https://drive.google.com/file/d/1fuVa-pMf92tTQ7FBps7cYB1nJTB-B6eU/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - ARITMETICA Y GEOMETRIA",
            // "url_pdf" => "https://drive.google.com/file/d/1ipsilBj0T3n44POfklqFykNwU0X6RDt4/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - ALGEBRA Y TRIGONOMETRIA",
            // "url_pdf" => "https://drive.google.com/file/d/1iPKmfTNe1u2R8vaIAHieYsW92z9A3q0l/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - HLM I, ALG, HLM II Y TRIG ",
            // "url_pdf" => "https://drive.google.com/file/d/1zKyX20--M_C7JUoTNRXa5a4tMA-9zXMi/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - QUIMICA Y FISICA",
            // "url_pdf" => "https://drive.google.com/file/d/1BMOqnvKoTIoHR4gosRlyHXgkY6agOWte/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - LENGUAJE Y LITERATURA",
            // "url_pdf" => "https://drive.google.com/file/d/1fGqzHPk6hNIoynBAzNMYbrZZ9DqcKE0d/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - LENGUAJE Y LITERATURA II",
            // "url_pdf" => "https://drive.google.com/file/d/1Mhmvdo9ZjEOoWmPO_nNJ6Q_JVtYi4wXX/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - HISTORIA Y GEOGRAFIA ",
            // "url_pdf" => "https://drive.google.com/file/d/19rNSTlLAMnvMkX7t5tMmogn9nmHPxw5l/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - HISTORIA Y GEOGRAFIA 2",
            // "url_pdf" => "https://drive.google.com/file/d/1_ShpkU6xbmyxDdI7ny-qFdjrZHVfRam9/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - EC Y ECONOMIA",
            // "url_pdf" => "https://drive.google.com/file/d/1DS5-8wg0GLRwoOE9cogXp2IlhrVHHY6H/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - EC Y ECONOMIA 2",
            // "url_pdf" => "https://drive.google.com/file/d/1nqVDfu1NGVsyQ8BI3W6MCUPWw-VmYlh-/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - EC Y CG ",
            // "url_pdf" => "https://drive.google.com/file/d/1jcOhkl5eOvqIG45qi7ahMi39kPxoo7cI/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 11:00:00",
            // "updated_at" => "2023-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DOCENCIA, PARA LA ENSEÑANZA EN EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE - FILOSOFIA Y PSICOLOGIA ",
            // "url_pdf" => "https://drive.google.com/file/d/1yzsl0U9qpjRAn-ijYvPyk3r01KwiD_4B/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2022-02-01 11:00:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2022-02-01 11:00:00",
            // "updated_at" => "2022-02-01 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ELABORACION DE CONTENIDO DIGITAL PARA LAS REDES SOCIALES Y EJECUCION DE LA CAMPAÑA DIGITAL",
            // "url_pdf" => "https://drive.google.com/file/d/13YourJxBUuVXQOVN3XldVpEiGqVb9mDv/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-01 12:30:00",
            // "last_date" => "2023-02-02 18:00:00",
            // "created_at" => "2023-02-01 12:30:00",
            // "updated_at" => "2023-02-01 12:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE INTERNET DE BANDA ANCHA DEDICADO PARA EL CENTRO DE INVESTIGACIÓN PARA LA SUSTENTABILIDAD LUNAHUANÁ, EL LOCAL ADMINISTRATIVO CENTRAL, EL LOCAL HUALCARÁ Y LOS LOCALES ACADÉMICOS CASA DE LA CULTURA, CNI Y EL LOCAL FUNDO DON LUIS DE LA UNIVERSIDAD NACIONAL DE CAÑETE. ",
            // "url_pdf" => "https://drive.google.com/file/d/14guZLXssHUc8x05WxI5ifstVFRMs2VY3/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-03 08:55:00",
            // "last_date" => "2023-02-07 12:00:00",
            // "created_at" => "2023-02-03 08:55:00",
            // "updated_at" => "2023-02-03 08:55:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE INSTALACIÓN DE GIGANTOGRAFÍAS PARA EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1X1TcFaduJguhC_8ZfvkfrXl8ppd99NpS/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-03 18:00:00",
            // "last_date" => "2023-02-06 10:00:00",
            // "created_at" => "2023-02-03 18:00:00",
            // "updated_at" => "2023-02-03 18:00:00"
            // ]
            // ,[
            // "description" => "Servicio de mantenimiento preventivo de las unidades de transporte de placas EGJ-132 y EGI-244 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1FtevCEEldvydguTOkazR88rbj0_RSg9E/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-06 09:00:00",
            // "last_date" => "2023-02-06 18:00:00",
            // "created_at" => "2023-02-06 09:00:00",
            // "updated_at" => "2023-02-06 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ANÁLISIS, REVISIÓN, SEGUIMIENTO Y ELABORACIÓN DE DOCUMENTOS PARA ESCUELA DE ADMINISTRACIÓN",
            // "url_pdf" => "https://drive.google.com/file/d/1OQRUwytZl8My-cIcMkudkxMkb3kG-g7p/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-06 09:30:00",
            // "last_date" => "2023-02-06 13:00:00",
            // "created_at" => "2023-02-06 09:30:00",
            // "updated_at" => "2023-02-06 09:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ANÁLISIS, REVISIÓN, SEGUIMIENTO Y ELABORACIÓN DE DOCUMENTOS PARA LA FACULTAD DE INGENIERÍA DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1TLcR1X8GGoh772ASoLQe_g2B1Ea6aiWE/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-07 13:00:00",
            // "last_date" => "2023-02-07 18:00:00",
            // "created_at" => "2023-02-07 13:00:00",
            // "updated_at" => "2023-02-07 13:00:00"
            // ]
            // ,[
            // "description" => "Servicio de ANÁLISIS, REVISIÓN, SEGUIMIENTO Y ELABORACIÓN DE DOCUMENTOS para la Facultad de Ciencias Agrarias, Departamento Académico y Unidad de Investigación de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1BQNpu6QG0oLOKYXw_FbFDejtqsczp_Ja/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-07 13:00:00",
            // "last_date" => "2023-02-08 12:00:00",
            // "created_at" => "2023-02-07 13:00:00",
            // "updated_at" => "2023-02-07 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ANÁLISIS, REVISIÓN, SEGUIMIENTO Y ELABORACIÓN DE DOCUMENTOS PARA LA UNIDAD DE INVESTIGACIÓN DE LA FACULTAD DE CIENCIAS EMPRESARIALES",
            // "url_pdf" => "https://drive.google.com/file/d/1gKXfOhJVYOzzwVgzRl8hWUys27FOsJeb/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-07 13:00:00",
            // "last_date" => "2023-02-07 18:00:00",
            // "created_at" => "2023-02-07 13:00:00",
            // "updated_at" => "2023-02-07 13:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE CAMISETAS PUBLICITARIAS PARA EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1BICvKlApCTchvOEQOqlalHtwKIROw8lk/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-07 14:00:00",
            // "last_date" => "2023-02-10 12:30:00",
            // "created_at" => "2023-02-07 14:00:00",
            // "updated_at" => "2023-02-07 14:00:00"
            // ]
            // ,[
            // "description" => "Servicio Especializado de Revisión de Acuerdo Marco para la Unidad de Abastecimiento.",
            // "url_pdf" => "https://drive.google.com/file/d/1UKj9Jhk8rrGpyr3GWBvsJv6WAvtoJ9-I/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-08 09:00:00",
            // "last_date" => "2023-02-08 15:00:00",
            // "created_at" => "2023-02-08 09:00:00",
            // "updated_at" => "2023-02-08 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES DE OFICINA PARA EL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1Gfq8LTOwepeWegl6ORFQj8auwGQSWtEO/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-09 15:00:00",
            // "last_date" => "2023-02-13 11:00:00",
            // "created_at" => "2023-02-09 15:00:00",
            // "updated_at" => "2023-02-09 15:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Docencia para enseñanza del Idioma Ingles - Intensivo",
            // "url_pdf" => "https://drive.google.com/file/d/1wjgXj87Cv097GJfGQbqT0w7Y4qpxf9Qw/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-10 09:00:00",
            // "last_date" => "2023-02-10 15:00:00",
            // "created_at" => "2023-02-10 09:00:00",
            // "updated_at" => "2023-02-10 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Docencia para enseñanza del Idioma Ingles - NIVEL INTERMEDIO",
            // "url_pdf" => "https://drive.google.com/file/d/1JaXj0SAOcuP_Eoi1WlSGTWumio0g__qy/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-10 09:00:00",
            // "last_date" => "2023-02-10 15:00:00",
            // "created_at" => "2023-02-10 09:00:00",
            // "updated_at" => "2023-02-10 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DIGITALIZACIÓN ESPECIALIZADA EN GRADOS Y TÍTULOS",
            // "url_pdf" => "https://drive.google.com/file/d/1Vx907R8Lpl1yb0skGDMaX6CVGZHUeV7u/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-10 12:00:00",
            // "last_date" => "2023-02-10 15:00:00",
            // "created_at" => "2023-02-10 12:00:00",
            // "updated_at" => "2023-02-10 12:00:00"
            // ]
            // ,[
            // "description" => "REQUERIMIENTO DE ALIMENTOS Y BEBIDAS PARA CONSUMO HUMANO DE LA DIRECCION DE BIENESTAR UNIVERSITARIO",
            // "url_pdf" => "https://drive.google.com/file/d/1njO4U9QxOpmYYdkMHpmcfTS0dZWFow5n/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-10 12:00:00",
            // "last_date" => "2023-02-13 15:30:00",
            // "created_at" => "2023-02-10 12:00:00",
            // "updated_at" => "2023-02-10 12:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE TINTAS PARA IMPRESORA PARA LA DIRECCIÓN DE RESPONSABILIDAD SOCIAL UNIVERSITARIA",
            // "url_pdf" => "https://drive.google.com/file/d/14bZkFgd8Hgs2xZ1NCaq_SvMg787wdVuY/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-10 12:30:00",
            // "last_date" => "2023-02-13 12:30:00",
            // "created_at" => "2023-02-10 12:30:00",
            // "updated_at" => "2023-02-10 12:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ACONDICIONAMIENTO DE OFICINAS DE LA SEDE HUALCARÁ DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1fcjZOIv2QzzzxlhqiLKlTX6y7bmaYSuP/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-10 13:00:00",
            // "last_date" => "2023-02-15 12:30:00",
            // "created_at" => "2023-02-10 13:00:00",
            // "updated_at" => "2023-02-10 13:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES DE OFICINA",
            // "url_pdf" => "https://drive.google.com/file/d/1rAL3w4ZK4LU-3nrsOTIb_NGdRk6fTTB3/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-10 13:00:00",
            // "last_date" => "2023-02-13 13:00:00",
            // "created_at" => "2023-02-10 13:00:00",
            // "updated_at" => "2023-02-10 13:00:00"
            // ]
            // ,[
            // "description" => " SERVICIO DE SEGUIMIENTO Y MONITOREO DE REQUERIMIENTOS DE BIENES Y SERVICIOS PARA LA UNIDAD DE ABASTECIMIENTO",
            // "url_pdf" => "https://drive.google.com/file/d/1gkQLNE9e98LZXU15jpRW-yKsL4GlqkOO/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-10 13:00:00",
            // "last_date" => "2023-02-10 16:30:00",
            // "created_at" => "2023-02-10 13:00:00",
            // "updated_at" => "2023-02-10 13:00:00"
            // ]
            // ,[
            // "description" => " SERVICIO DE SEGUIMIENTO Y MONITOREO DE REQUERIMIENTOS DE BIENES Y SERVICIOS PARA LA UNIDAD DE ABASTECIMIENTO",
            // "url_pdf" => "https://drive.google.com/file/d/1gkQLNE9e98LZXU15jpRW-yKsL4GlqkOO/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-10 13:00:00",
            // "last_date" => "2023-02-10 16:30:00",
            // "created_at" => "2023-02-10 13:00:00",
            // "updated_at" => "2023-02-10 13:00:00"
            // ]
            // ,[
            // "description" => "Servicio de suscripción anual de Identificador de Objetos Digitales (DOI) para la Revista de Investigación Cañetana de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1RCdvnR20bym9zoF3Qrzop-B7TMu5rT2w/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-10 13:00:00",
            // "last_date" => "2023-02-15 15:30:00",
            // "created_at" => "2023-02-10 13:00:00",
            // "updated_at" => "2023-02-10 13:00:00"
            // ]
            // ,[
            // "description" => "Servicio de asistencia académica y administrativa para la Dirección de Gestión Académica de la UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1eO4nGOyG3kXxLSNHmIOWqUR6gLJDfyto/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-13 08:30:00",
            // "last_date" => "2023-02-13 15:30:00",
            // "created_at" => "2023-02-13 08:30:00",
            // "updated_at" => "2023-02-13 08:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE REUBICACIÓN Y ACONDICIONAMIENTO DE LOS EQUIPOS DEL DATA CENTER DE LA SEDE HUALCARÁ DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1YwOLtkYYUR672sxBEcIoPAGmMvaa0Q-c/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-13 10:30:00",
            // "last_date" => "2023-02-15 12:30:00",
            // "created_at" => "2023-02-13 10:30:00",
            // "updated_at" => "2023-02-13 10:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 05 bidones de Agua de Mesa sin gas x 20 L para la Escuela Profesional de Administración de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1aTRfukR6IQyi-laJaSErjN6jr_r4LZiF/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-13 10:30:00",
            // "last_date" => "2023-02-21 12:00:00",
            // "created_at" => "2023-02-13 10:30:00",
            // "updated_at" => "2023-02-13 10:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CONSULTORIA EN MONITOREO DE AGENTES OCUPACIONALES",
            // "url_pdf" => "https://drive.google.com/file/d/1xxDg-8a_urUZpbVCEoGgev7oLxgmZ0OA/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-13 11:00:00",
            // "last_date" => "2023-02-13 14:30:00",
            // "created_at" => "2023-02-13 11:00:00",
            // "updated_at" => "2023-02-13 11:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES DE OFICINA PARA LA DIRECCIÓN DE GESTIÓN ACADÉMICA",
            // "url_pdf" => "https://drive.google.com/file/d/1VX2cE1uI0y6lSVlD4KTMvmyJRRB7fwMm/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-13 15:30:00",
            // "last_date" => "2023-02-15 09:00:00",
            // "created_at" => "2023-02-13 15:30:00",
            // "updated_at" => "2023-02-13 15:30:00"
            // ]
            // ,[
            // "description" => "REQUERIMIENTO DE UTILES DE OFICINA PARA LA DIRECCION DE BIENESTAR UNIVERSITARIO ",
            // "url_pdf" => "https://drive.google.com/file/d/1-1_uAsqxvO1ckUpuKEoaRsg_BfTqK9f0/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-21 13:00:00",
            // "last_date" => "2023-03-06 10:30:00",
            // "created_at" => "2023-02-21 13:00:00",
            // "updated_at" => "2023-02-21 13:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de Útiles de Oficina para la Secretaria General de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1HxCl1IetITjze2AYPWX8jxrEEihRnlfq/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-21 13:00:00",
            // "last_date" => "2023-02-23 15:30:00",
            // "created_at" => "2023-02-21 13:00:00",
            // "updated_at" => "2023-02-21 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ACONDICIONAMIENTO DE REDES Y CABLEADO ESTRUCTURADO DE LA SEDE HUALCARÁ DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1AivyT7wACir2-c9xEsIjkayAHUt9e0Vi/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-14 15:30:00",
            // "last_date" => "2023-02-17 14:00:00",
            // "created_at" => "2023-02-14 15:30:00",
            // "updated_at" => "2023-02-14 15:30:00"
            // ]
            // ,[
            // "description" => "ACONDICIONAMIENTO DE OFICINAS DE LA SEDE HUALCARÁ DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1fcjZOIv2QzzzxlhqiLKlTX6y7bmaYSuP/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-14 15:30:00",
            // "last_date" => "2023-02-15 13:30:00",
            // "created_at" => "2023-02-14 15:30:00",
            // "updated_at" => "2023-02-14 15:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE COMUNICACIÓN TELEVISIVA PARA DIFUSIÓN DEL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/drive/folders/1qHSNaKtcRet-AED_og5TbBJpnkSeNY5d?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-15 09:00:00",
            // "last_date" => "2023-02-15 15:30:00",
            // "created_at" => "2023-02-15 09:00:00",
            // "updated_at" => "2023-02-15 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE COMUNICACIÓN RADIAL PARA DIFUSIÓN DEL PROCESO DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/drive/folders/1qHSNaKtcRet-AED_og5TbBJpnkSeNY5d?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-15 09:00:00",
            // "last_date" => "2023-02-15 15:30:00",
            // "created_at" => "2023-02-15 09:00:00",
            // "updated_at" => "2023-02-15 09:00:00"
            // ]
            // ,[
            // "description" => "Servicio de un Especialista en instalaciones eléctricas para elaboración de informes técnicos para el seguimiento de los proyectos de inversión en ejecución de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1I7V5IifBuygtB5xPkv0qdsW0y64FEtit/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-15 13:00:00",
            // "last_date" => "2023-02-20 15:30:00",
            // "created_at" => "2023-02-15 13:00:00",
            // "updated_at" => "2023-02-15 13:00:00"
            // ]
            // ,[
            // "description" => "Servicio de análisis de desarrollo y mantenimiento de soluciones informáticas para la Dirección de Gestión Académica de la UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1Eo0X6sQaE4lqtBgp3uQv5tzXXKdnOAKC/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-16 09:00:00",
            // "last_date" => "2023-02-16 15:30:00",
            // "created_at" => "2023-02-16 09:00:00",
            // "updated_at" => "2023-02-16 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE BIDONES DE AGUA DE MESA SIN GAS X 20 L",
            // "url_pdf" => "https://drive.google.com/file/d/1q5vXceq7kyQ_CHt3iMumV_a3uq_SN-4H/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-21 11:30:00",
            // "last_date" => "2023-02-22 13:30:00",
            // "created_at" => "2023-02-21 11:30:00",
            // "updated_at" => "2023-02-21 11:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE OFICINA",
            // "url_pdf" => "https://drive.google.com/file/d/13JadJf8B0oIodvY63KkG9EO8truDETv4/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-21 12:00:00",
            // "last_date" => "2023-02-23 15:30:00",
            // "created_at" => "2023-02-21 12:00:00",
            // "updated_at" => "2023-02-21 12:00:00"
            // ]
            // ,[
            // "description" => "REQUERIMIENTO DE COMPRA DE MATERIALES Y UTILES DE OFICINA PARA LA VICEPRESIDENCIA ACADÉMICA",
            // "url_pdf" => "https://drive.google.com/file/d/1AmeX-jjmdvzpFfrAGWENXmCY_wNCjoiJ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-21 13:00:00",
            // "last_date" => "2023-03-06 10:30:00",
            // "created_at" => "2023-02-21 13:00:00",
            // "updated_at" => "2023-02-21 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO INFORMÁTICO DE LAS PLATAFORMAS DE INVESTIGACIÓN EN LA DIRECCIÓN DE LA UNIDAD DE INVESTIGACIÓN DE LA FACULTAD DE AGRONOMÍA Y LA DIRECCIÓN DE LA UNIDAD DE INVESTIGACIÓN DE LA FACULTAD DE INGENIERÍA",
            // "url_pdf" => "https://drive.google.com/file/d/1v_2r_oGbhrbBZwqzJLhb2DppxGylP0SW/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-21 13:00:00",
            // "last_date" => "2023-03-03 15:30:00",
            // "created_at" => "2023-02-21 13:00:00",
            // "updated_at" => "2023-02-21 13:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE ENSEÑANZA PARA LA DIRECCIÓN DE RESPONSABILIDAD SOCIAL UNIVERSITARIA",
            // "url_pdf" => "https://drive.google.com/file/d/1t74_9HOOrjn50uqxN8tmEQPbZ1cTgd9u/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-21 13:00:00",
            // "last_date" => "2023-02-23 15:30:00",
            // "created_at" => "2023-02-21 13:00:00",
            // "updated_at" => "2023-02-21 13:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de accesorios informáticos y de comunicación para el personal de la Dirección de Gestión Académica",
            // "url_pdf" => "https://drive.google.com/file/d/1s_vXuy_rnx8rBsw3pEdGRYs3qYK5AgLS/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-21 13:00:00",
            // "last_date" => "2023-02-23 15:30:00",
            // "created_at" => "2023-02-21 13:00:00",
            // "updated_at" => "2023-02-21 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE UN ESPECIALISTA ADMINISTRATIVOS PARA LA ACTUALIZACIÓN DEL TEXTO ÚNICO DE PROCEDIMIENTOS ADMINISTRATIVOS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1834u-yzMH3TBf6cqKCXQBCsB2EYmthRq/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-21 13:30:00",
            // "last_date" => "2023-02-23 15:30:00",
            // "created_at" => "2023-02-21 13:30:00",
            // "updated_at" => "2023-02-21 13:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE 10 UNIDADES DE MÓDULO DE DESARROLLO NVIDIA PARA APLICACIONES DE INTELIGENCIA ARTIFICIAL PARA LA ESCUELA PROFESIONAL DE INGENIERÍA DE SISTEMAS DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/145G_TAuhBPl13cjFm6rKLerYx_Xh96dx/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-21 13:40:00",
            // "last_date" => "2023-02-27 15:30:00",
            // "created_at" => "2023-02-21 13:40:00",
            // "updated_at" => "2023-02-21 13:40:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE BIDONES DE AGUA DE MESA SIN GAS X 20 L PARA LA ESCUELA PROFESIONAL DE INGENIERÍA DE SISTEMAS",
            // "url_pdf" => "https://drive.google.com/file/d/1vksH3nd-YWZAEwb57brNBAZIQDYj_Inv/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-21 14:00:00",
            // "last_date" => "2023-02-22 13:30:00",
            // "created_at" => "2023-02-21 14:00:00",
            // "updated_at" => "2023-02-21 14:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE 3 UNIDADES DE MALETÍN DE LONA PARA COMPUTADORA PORTÁTIL - LAPTOP Y PAD PARA MOUSE ANATÓMICO CON GEL PARA LA ESCUELA PROFESIONAL DE INGENIERÍA DE SISTEMAS DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/drive/folders/1m74yAPLIPoG4-yuMBJ3iRe94T9zimIU-?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-21 14:00:00",
            // "last_date" => "2023-02-23 15:30:00",
            // "created_at" => "2023-02-21 14:00:00",
            // "updated_at" => "2023-02-21 14:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE IMPLEMENTACIÓN DE SISTEMA DE ALARMA CONTRA INCENDIOS EN LA SEDE CASA DE LA CULTURA, CNI Y HUALCARÁ DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1j3zGkKJDxrduEztko64gqlqKGTOp9twB/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-21 14:00:00",
            // "last_date" => "2023-02-22 14:00:00",
            // "created_at" => "2023-02-21 14:00:00",
            // "updated_at" => "2023-02-21 14:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 05 bidones de Agua de Mesa sin gas x 20 L para la Escuela Profesional de Administración de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/18Bayl2W3XjDqmitk4Wema1lN8GoFGFdb/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-21 14:00:00",
            // "last_date" => "2023-02-21 18:00:00",
            // "created_at" => "2023-02-21 14:00:00",
            // "updated_at" => "2023-02-21 14:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de agua de mesa y galletas para la Dirección de Responsabilidad Social Universitaria.”",
            // "url_pdf" => "https://drive.google.com/file/d/19ti7Bh_G6JCuKRQya71lDFnDbD-3AzbB/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-22 10:00:00",
            // "last_date" => "2023-02-23 13:00:00",
            // "created_at" => "2023-02-22 10:00:00",
            // "updated_at" => "2023-02-22 10:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición mascarillas y alcohol etílico para la Dirección de Responsabilidad Social Universitaria”.",
            // "url_pdf" => "https://drive.google.com/file/d/1jyr102EmPMKPzJ9BycEsyOY11PPslgBC/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-23 10:30:00",
            // "last_date" => "2023-02-24 12:00:00",
            // "created_at" => "2023-02-23 10:30:00",
            // "updated_at" => "2023-02-23 10:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de equipos de protección personal y de seguridad para el personal de mantenimiento de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/drive/folders/1r6gGjusd_kzlzx0MZvFeSUksFBsOfjAo?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-23 12:00:00",
            // "last_date" => "2023-02-27 18:00:00",
            // "created_at" => "2023-02-23 12:00:00",
            // "updated_at" => "2023-02-23 12:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de Inspección Técnica Vehicular para las unidades de transporte de placa EGO-950, EGO-731 y EGO-951 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1XCFj9TEj5zlGy5dleVIfOlMa7KSozG3P/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-23 12:30:00",
            // "last_date" => "2023-02-27 12:00:00",
            // "created_at" => "2023-02-23 12:30:00",
            // "updated_at" => "2023-02-23 12:30:00"
            // ]
            // ,[
            // "description" => "Servicio de elaboración de Expediente Técnico o documento equivalente para la Inversión IOARR denominado: “ADQUISICION DE VEHICULO; EN EL(LA) UNIDAD DE SERVICIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN VICENTE DE CAÑETE, PROVINCIA CAÑETE, DEPARTAMENTO LIMA”, con Código Único de Inversión 2571526.",
            // "url_pdf" => "https://drive.google.com/file/d/1u0nfWIhXfTka7MX_s8X2zv8W87WcMYJe/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-23 12:30:00",
            // "last_date" => "2023-03-01 18:30:00",
            // "created_at" => "2023-02-23 12:30:00",
            // "updated_at" => "2023-02-23 12:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE AGUA DE MESA PARA LAESCUELA PROFESIONAL DE AGRONOMIA DE LA FACULTAD DE CIENCIAS AGRARIAS",
            // "url_pdf" => "https://drive.google.com/file/d/1cSRtCrbSRQCqb-oq5hOqZjSH_5dXPRY6/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-21 12:30:00",
            // "last_date" => "2023-02-24 10:00:00",
            // "created_at" => "2023-02-21 12:30:00",
            // "updated_at" => "2023-02-21 12:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE COMEDOR UNIVERSITARIO SEMESTRE I Y II",
            // "url_pdf" => "https://drive.google.com/file/d/1n1aenrvN5gRVn2xkLHpUAq5iKjQuY_x3/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-24 11:30:00",
            // "last_date" => "2023-03-07 15:30:00",
            // "created_at" => "2023-02-24 11:30:00",
            // "updated_at" => "2023-02-24 11:30:00"
            // ]
            // ,[
            // "description" => "Servicio Especializado en Sistemas Informáticos",
            // "url_pdf" => "https://drive.google.com/file/d/1fZwRY9EOq2pm49DUI0CvduBayfr5IA4v/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-24 15:00:00",
            // "last_date" => "2023-02-27 15:30:00",
            // "created_at" => "2023-02-24 15:00:00",
            // "updated_at" => "2023-02-24 15:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE IMPRESORA DE FOTOCHECK",
            // "url_pdf" => "https://drive.google.com/file/d/1ubnSjMBCVD8h7pwgNIpDw179zNyQOYL2/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-27 11:00:00",
            // "last_date" => "2023-02-28 11:00:00",
            // "created_at" => "2023-02-27 11:00:00",
            // "updated_at" => "2023-02-27 11:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de apoyo Informático de las plataformas de investigación en la Dirección de la Unidad de Investigación de la Facultad de Ciencias Empresariales.",
            // "url_pdf" => "https://drive.google.com/file/d/1vWApAFXnC1n58KnQR93TqaKxR22SZk0q/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-24 11:00:00",
            // "last_date" => "2023-03-03 15:30:00",
            // "created_at" => "2023-02-24 11:00:00",
            // "updated_at" => "2023-02-24 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO INFORMÁTICO DE LAS PLATAFORMAS DE INVESTIGACIÓN EN LA VICEPRESIDENCIA DE INVESTIGACIÓN",
            // "url_pdf" => "https://drive.google.com/file/d/1dJgw7rD1VJJhHn7Asl66nex4S0q5vtDm/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-27 08:00:00",
            // "last_date" => "2023-03-03 15:00:00",
            // "created_at" => "2023-02-27 08:00:00",
            // "updated_at" => "2023-02-27 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ALQUILER DE LOCAL EDUCATIVO PARA REALIZAR EL EXAMEN DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/14sb3w60_-gQM2XzQUQKU2s1dr1wqo00l/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-28 08:00:00",
            // "last_date" => "2023-02-28 15:00:00",
            // "created_at" => "2023-02-28 08:00:00",
            // "updated_at" => "2023-02-28 08:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de Seguridad y Vigilancia para el Centro de Investigación para la sustentabilidad Lunahuaná de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1P8N8lAXtT8mLtFq3p3jkZ9QpNyVXyW_V/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-28 08:00:00",
            // "last_date" => "2023-02-28 15:00:00",
            // "created_at" => "2023-02-28 08:00:00",
            // "updated_at" => "2023-02-28 08:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de Seguridad y Vigilancia para los locales de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1za3uSk8Oy8INCywW01jsIRLJa1FYzP_B/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-28 08:00:00",
            // "last_date" => "2023-03-01 13:00:00",
            // "created_at" => "2023-02-28 08:00:00",
            // "updated_at" => "2023-02-28 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ACONDICIONAMIENTO DE TABLEROS ELECTRICOS EN LA SEDE HUALCARÁ DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1g38BTT-PyaHj0gVhe8YLdKEXn1Z4aZ3r/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-28 08:00:00",
            // "last_date" => "2023-03-02 12:00:00",
            // "created_at" => "2023-02-28 08:00:00",
            // "updated_at" => "2023-02-28 08:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de Herramientas y materiales para el mantenimiento del Fundo Tercer Mundo de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1MjG1IqKPH72hOFKjSlac8S5Y9vvhXJxp/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-28 08:00:00",
            // "last_date" => "2023-03-02 12:00:00",
            // "created_at" => "2023-02-28 08:00:00",
            // "updated_at" => "2023-02-28 08:00:00"
            // ]
            // ,[
            // "description" => "“Servicio de gestión de actividades del medio ambiente, para la Dirección de Responsabilidad Social Universitaria” ",
            // "url_pdf" => "https://drive.google.com/file/d/1Sb4uwXvUIP-K6tnQ9ZFl0btdMXstRd5i/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-28 08:30:00",
            // "last_date" => "2023-03-07 15:30:00",
            // "created_at" => "2023-02-28 08:30:00",
            // "updated_at" => "2023-02-28 08:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de licencia de uso de software Generador de Reportes en Excel, contables, tesorería, logístico y presupuestal",
            // "url_pdf" => "https://drive.google.com/file/d/1f_5hAjGqOw6bpLkqsf-R1LL01Frn8dP9/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-28 08:30:00",
            // "last_date" => "2023-03-14 15:30:00",
            // "created_at" => "2023-02-28 08:30:00",
            // "updated_at" => "2023-02-28 08:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Actualización ",
            // "url_pdf" => "https://drive.google.com/file/d/1ILcv_v38UBZ1d0X4Fiel7PFc9qG0wgfY/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-28 08:30:00",
            // "last_date" => "2023-02-28 11:00:00",
            // "created_at" => "2023-02-28 08:30:00",
            // "updated_at" => "2023-02-28 08:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Actualización de Plataforma Virtual y Página Web",
            // "url_pdf" => "https://drive.google.com/file/d/1ILcv_v38UBZ1d0X4Fiel7PFc9qG0wgfY/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-28 10:20:00",
            // "last_date" => "2023-02-28 15:30:00",
            // "created_at" => "2023-02-28 10:20:00",
            // "updated_at" => "2023-02-28 10:20:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ALQUILER DE LOCAL EDUCATIVO PARA REALIZAR EL EXAMEN DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1ce_3hDcE8Zan7OvPJL0OLkoe6sbpFkTx/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-01 20:00:00",
            // "last_date" => "2023-03-01 15:30:00",
            // "created_at" => "2023-03-01 20:00:00",
            // "updated_at" => "2023-03-01 20:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE 04 BIDONES DE AGUA DE MESA SIN GAS X 20 L PARA LA UNIDAD DE GRADOS Y TITULOS-SG",
            // "url_pdf" => "https://drive.google.com/file/d/176qV2shRdOk0Hi11venVHPxLxJfh72dr/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-03 13:30:00",
            // "last_date" => "2023-03-07 13:30:00",
            // "created_at" => "2023-03-03 13:30:00",
            // "updated_at" => "2023-03-03 13:30:00"
            // ]
            // ,[
            // "description" => " ADQUISICION DE UTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE CONTABILIDAD",
            // "url_pdf" => "https://drive.google.com/file/d/1NziCaDyN7D6HnpIdQMOJ9_EWiQ17drFU/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-03 14:00:00",
            // "last_date" => "2023-03-08 10:30:00",
            // "created_at" => "2023-03-03 14:00:00",
            // "updated_at" => "2023-03-03 14:00:00"
            // ]
            // ,[
            // "description" => "ADQUISION DE UTILES DE OFICINA PARA EL PROCESO DE ACREDITACION DE DE LAS ESCUELAS PROFESIONALES",
            // "url_pdf" => "https://drive.google.com/file/d/1wK8FDQ4eYZu8YDKkWomVaw-WQEB09bIp/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-03 14:30:00",
            // "last_date" => "2023-03-06 14:30:00",
            // "created_at" => "2023-03-03 14:30:00",
            // "updated_at" => "2023-03-03 14:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES Y ÚTILES DE OFICINA PARA LA OFICINA DE GESTIÓN DE LA CALIDAD",
            // "url_pdf" => "https://drive.google.com/file/d/1J_Bg9E_wRtlRnkYgNdhl3zJ8SgJnvAgG/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-03 15:00:00",
            // "last_date" => "2023-03-15 15:30:00",
            // "created_at" => "2023-03-03 15:00:00",
            // "updated_at" => "2023-03-03 15:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DE SERVICIO DE GESTION DE INVENTARIOS DE INTANGIBLES E INVERSIONES.",
            // "url_pdf" => "https://drive.google.com/file/d/1Lcp7GlFvnEQMHHaNZdXyw4CSZ2ayC4SK/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-03 15:00:00",
            // "last_date" => "2023-03-07 15:30:00",
            // "created_at" => "2023-03-03 15:00:00",
            // "updated_at" => "2023-03-03 15:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES Y ÚTILES DE OFICINA PARA LA OFICINA DE GESTIÓN DE LA CALIDAD",
            // "url_pdf" => "https://drive.google.com/file/d/1uwhXjvoa1893do0CSYSJtKbyTZyomuKV/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-03 15:00:00",
            // "last_date" => "2023-03-06 14:00:00",
            // "created_at" => "2023-03-03 15:00:00",
            // "updated_at" => "2023-03-03 15:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de televisión por cable para el local administrativo y el local Hualcará de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1C1gopz7pN9417OGFBgVz4Y05_wsTudtr/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-03 15:00:00",
            // "last_date" => "2023-03-06 18:00:00",
            // "created_at" => "2023-03-03 15:00:00",
            // "updated_at" => "2023-03-03 15:00:00"
            // ]
            // ,[
            // "description" => "Adquisición De 09 Diplomas Con Caligrafiado Para Los Graduados De La UNDC dividido en (07 Diplomas de Bachiller y 02 Diplomas de Título Profesional).",
            // "url_pdf" => "https://drive.google.com/file/d/13b-PcvOPEdT4zBh27oc9hC9MUhPSMaJA/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-06 08:30:00",
            // "last_date" => "2023-03-07 15:30:00",
            // "created_at" => "2023-03-06 08:30:00",
            // "updated_at" => "2023-03-06 08:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE LIMPIEZA PARA EL CENTRO PRE UNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1iiC-N5Orixhp0FHptaiJtler3tmIM29i/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-06 10:00:00",
            // "last_date" => "2023-03-08 13:00:00",
            // "created_at" => "2023-03-06 10:00:00",
            // "updated_at" => "2023-03-06 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGURIDAD Y VIGILANCIA PARA EL CENTRO DE INVESTIGACIÓN PARA LA SUSTENTABILIDAD LUNAHUANÁ DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1APOccpDAXxwlSMdEm8E9ky7T0BReiykt/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-06 10:30:00",
            // "last_date" => "2023-03-06 15:30:00",
            // "created_at" => "2023-03-06 10:30:00",
            // "updated_at" => "2023-03-06 10:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGURIDAD Y VIGILANCIA PARA EL CENTRO DE INVESTIGACIÓN PARA LA SUSTENTABILIDAD LUNAHUANÁ DE LA UNIVERSIDAD NACIONAL DE CAÑETE - TURNO TARDE",
            // "url_pdf" => "https://drive.google.com/file/d/10c_uwolkcNqBa-q6ipspdg5oO97I2fe5/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-06 11:00:00",
            // "last_date" => "2023-03-06 15:30:00",
            // "created_at" => "2023-03-06 11:00:00",
            // "updated_at" => "2023-03-06 11:00:00"
            // ]
            // ,[
            // "description" => "REQUERIMIENTO DE UTILES DE OFICINA PARA LA DIRECCION DE BIENESTAR UNIVERSITARIO ",
            // "url_pdf" => "https://drive.google.com/file/d/1QnttvDwrNsAy_-6NolmldhHcfkknYqK9/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-06 11:30:00",
            // "last_date" => "2023-03-08 10:30:00",
            // "created_at" => "2023-03-06 11:30:00",
            // "updated_at" => "2023-03-06 11:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE ADMINISTRACIÓN DE TURISMO Y HOTELERÍA DE LA UNDC. - VERSION 2",
            // "url_pdf" => "https://drive.google.com/file/d/1erKFZvTm8wRTfQi_hBmJ9sxKl-lXnkAP/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-06 13:30:00",
            // "last_date" => "2023-03-07 10:30:00",
            // "created_at" => "2023-03-06 13:30:00",
            // "updated_at" => "2023-03-06 13:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE ADMINISTRACIÓN DE LA UNDC. -VERSION 2",
            // "url_pdf" => "https://drive.google.com/file/d/1N7meRbqnKBpF6M0ZY4qptJK65eB5J3or/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-06 14:00:00",
            // "last_date" => "2023-03-07 14:00:00",
            // "created_at" => "2023-03-06 14:00:00",
            // "updated_at" => "2023-03-06 14:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE INGENIERÍA DE SISTEMAS DE LA UNDC. - VERSION 2",
            // "url_pdf" => "https://drive.google.com/file/d/1_LmcWK9RXiQg5zmSOB_eIoqff0xwa-ke/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-06 14:30:00",
            // "last_date" => "2023-03-07 14:30:00",
            // "created_at" => "2023-03-06 14:30:00",
            // "updated_at" => "2023-03-06 14:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE AGUA DE MESA SIN GAS PARA LA UNIDAD DE TESORERIA",
            // "url_pdf" => "https://drive.google.com/file/d/1nZl_dfq-jn87veZp2X8kmaM3NvQEoZRh/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-06 14:40:00",
            // "last_date" => "2023-03-08 14:40:00",
            // "created_at" => "2023-03-06 14:40:00",
            // "updated_at" => "2023-03-06 14:40:00"
            // ]
            // ,[
            // "description" => "Servicio de alimentos corporativos para las sesiones de Comisión Organizadora de la UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1g9o4XsPzJ8EZn8NlEWJJwFyALL05xCak/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-06 14:30:00",
            // "last_date" => "2023-03-15 15:30:00",
            // "created_at" => "2023-03-06 14:30:00",
            // "updated_at" => "2023-03-06 14:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Docencia para enseñanza del Idioma Ingles - INTENSIVO",
            // "url_pdf" => "https://drive.google.com/file/d/1Z9cbzhw0nQzsOnn6X99wrznL5BAuT0F6/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-06 14:50:00",
            // "last_date" => "2023-03-09 10:00:00",
            // "created_at" => "2023-03-06 14:50:00",
            // "updated_at" => "2023-03-06 14:50:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Docencia para enseñanza del Idioma Ingles - REGULAR",
            // "url_pdf" => "https://drive.google.com/file/d/1znaMRIJWrqqbL3YCL0glYthVuCrQeEyC/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-06 14:50:00",
            // "last_date" => "2023-03-09 10:00:00",
            // "created_at" => "2023-03-06 14:50:00",
            // "updated_at" => "2023-03-06 14:50:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE AGRONOMIA DE LA UNDC.- VERSION 02",
            // "url_pdf" => "https://drive.google.com/file/d/15tgqrpUNTCm_O8jbM4NVscCTEUUZjlmc/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-06 15:20:00",
            // "last_date" => "2023-03-07 15:30:00",
            // "created_at" => "2023-03-06 15:20:00",
            // "updated_at" => "2023-03-06 15:20:00"
            // ]
            // ,[
            // "description" => "Adquisición de combustible DIESEL B5 S50, Gasohol Premium y Gasohol Regular para las unidades de transporte y maquinarias de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1f-IIcI4LQKHedEDfSJYxzr1vqtRtVcx8/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-07 08:30:00",
            // "last_date" => "2023-03-07 15:00:00",
            // "created_at" => "2023-03-07 08:30:00",
            // "updated_at" => "2023-03-07 08:30:00"
            // ]
            // ,[
            // "description" => "Servicio de soporte informático para actividades de la Dirección de Responsabilidad Social Universitaria",
            // "url_pdf" => "https://drive.google.com/file/d/1ZiLUuOWmj9Q0lsTDQD5Fqlyfpzvu2tCs/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-06 08:00:00",
            // "last_date" => "2023-03-08 15:00:00",
            // "created_at" => "2023-03-06 08:00:00",
            // "updated_at" => "2023-03-06 08:00:00"
            // ]
            // ,[
            // "description" => "Servicio de empalme y adecuación de la Alimentación Eléctrica en baja tension desde el tablero general ubicado en la subestación a, al tablero td-7 para la obra: ”Mejoramiento de los servicios de educación superior en la sede Académica CNI, de la Universidad Nacional de Cañete, Distrito de San Luis – Provincia de Cañete – Departamento de Lima”",
            // "url_pdf" => "https://drive.google.com/file/d/1aqZVfnuyGCzZcWq57twvPra3o6nBsCFL/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-08 08:33:00",
            // "last_date" => "2023-03-09 15:30:00",
            // "created_at" => "2023-03-08 08:33:00",
            // "updated_at" => "2023-03-08 08:33:00"
            // ]
            // ,[
            // "description" => "Servicio de elaboración de Expediente Técnico o documento equivalente para la Inversión IOARR denominado: “ADQUISICION DE VEHICULO; EN EL(LA) UNIDAD DE SERVICIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN VICENTE DE CAÑETE, PROVINCIA CAÑETE, DEPARTAMENTO LIMA”, con Código Único de Inversión 2571526. ",
            // "url_pdf" => "https://drive.google.com/file/d/1AKSRNYKEttNvBfkw2HTW4FZK-XfdE-hQ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-08 08:35:00",
            // "last_date" => "2023-03-09 15:30:00",
            // "created_at" => "2023-03-08 08:35:00",
            // "updated_at" => "2023-03-08 08:35:00"
            // ]
            // ,[
            // "description" => "“Servicio de gestión de actividades del medio ambiente, para la Dirección de Responsabilidad Social Universitaria” ",
            // "url_pdf" => "https://drive.google.com/file/d/1st9AFgqqPzxAb6R80490EoZCELGbxtb-/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-08 08:40:00",
            // "last_date" => "2023-03-13 10:00:00",
            // "created_at" => "2023-03-08 08:40:00",
            // "updated_at" => "2023-03-08 08:40:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CONTROL PREVIO Y REVISION DE DOCUMENTOS ADMINISTRATIVOS",
            // "url_pdf" => "https://drive.google.com/file/d/1rWjcAzIAWXDQbqX6GCoa-MtCCY5moZvf/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-08 10:15:00",
            // "last_date" => "2023-03-08 18:00:00",
            // "created_at" => "2023-03-08 10:15:00",
            // "updated_at" => "2023-03-08 10:15:00"
            // ]
            // ,[
            // "description" => "SUSCRIPCION ANUAL: ACTUALIDAD GUBERNAMENTAL",
            // "url_pdf" => "https://drive.google.com/file/d/1W7bYJW1oDyL8Z1uk8B5yKkxX1aMom0Pw/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-08 12:20:00",
            // "last_date" => "2023-03-08 15:00:00",
            // "created_at" => "2023-03-08 12:20:00",
            // "updated_at" => "2023-03-08 12:20:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE GESTIÓN Y SEGUIMIENTO DE ACTIVIDADES ADMINISTRATIVAS DE LAS DIRECCIONES DE LA VICEPRESIDENCIA DE INVESTIGACIÓN.",
            // "url_pdf" => "https://drive.google.com/file/d/15bQnNrFA0QEQDyVO37m9KlYwK4yE_AFe/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-08 09:40:00",
            // "last_date" => "2023-03-08 18:00:00",
            // "created_at" => "2023-03-08 09:40:00",
            // "updated_at" => "2023-03-08 09:40:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Impresión de 100 ejemplares del “Manual del programa de emprendimiento Millennial 2.0”.",
            // "url_pdf" => "https://drive.google.com/drive/folders/1Rqk5uHGSBwl0f5j4X9CRmnCXS4hxJqzW?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-09 15:00:00",
            // "last_date" => "2023-03-13 10:00:00",
            // "created_at" => "2023-03-09 15:00:00",
            // "updated_at" => "2023-03-09 15:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION MOBILIARIO Y EQUIPAMIENTO DEL PROYECTO “MEJORAMIENTO DE LOS SERVICIOS DE FORMACIÓN PROFESIONAL EN ADMINISTRACIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN LUIS - PROVINCIA DE CAÑETE - DEPARTAMENTO DE LIMA”.",
            // "url_pdf" => "https://drive.google.com/file/d/1KzHLrKysl1q6aPhYQV3wz9ozrfWDVNsL/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-09 15:00:00",
            // "last_date" => "2023-03-13 10:00:00",
            // "created_at" => "2023-03-09 15:00:00",
            // "updated_at" => "2023-03-09 15:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE MOBILIARIO Y EQUIPAMIENTO DEL PROYECTO “MEJORAMIENTO DE LOS SERVICIOS DE EDUCACIÓN SUPERIOR EN LA SEDE ACADÉMICA CNI, DE LA UNIVERSIDAD NACIONAL DE CAÑETE, FUNDO SAN LUIS DEL DISTRITO DE SAN LUIS – PROVINCIA DE CAÑETE – DEPARTAMENTO DE LIMA”",
            // "url_pdf" => "https://drive.google.com/file/d/1eQqJEXd6lk4llKaYD260dbF7d9RySUGt/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-09 15:00:00",
            // "last_date" => "2023-03-13 10:00:00",
            // "created_at" => "2023-03-09 15:00:00",
            // "updated_at" => "2023-03-09 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE GESTIÓN Y SEGUIMIENTO DE ACTIVIDADES ADMINISTRATIVAS DE LAS DIRECCIONES DE LA VICEPRESIDENCIA DE INVESTIGACIÓN.",
            // "url_pdf" => "https://drive.google.com/file/d/1BVL3KsYBpeJfIgm3PNlH5vTnC8CajARE/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-10 09:00:00",
            // "last_date" => "2023-03-10 15:00:00",
            // "created_at" => "2023-03-10 09:00:00",
            // "updated_at" => "2023-03-10 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE BIDÓN DE AGUA DE MESA SIN GAS X 20 L PARA LA ESCUELA PROFESIONAL DE ADMINISTRACIÓN DE TURISMO Y HOTELERÍA DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1EhoFGnO7wEz468yvrC0pljAg6l5YKFPg/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-10 09:30:00",
            // "last_date" => "2023-03-13 12:00:00",
            // "created_at" => "2023-03-10 09:30:00",
            // "updated_at" => "2023-03-10 09:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE 160 PORTA DIPLOMAS PARA LOS BACHILLERES DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1CpeSSxSHhBN3adoiOzgEaqQHXT6HY4g1/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-10 12:50:00",
            // "last_date" => "2023-03-15 09:00:00",
            // "created_at" => "2023-03-10 12:50:00",
            // "updated_at" => "2023-03-10 12:50:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE 161 MEDALLAS CON ESTUCHE PARA LOS GRADUADOS DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/11zwAZW71qs2Coh5IGt6b0k3NFaS_K6Id/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-10 12:55:00",
            // "last_date" => "2023-03-14 11:00:00",
            // "created_at" => "2023-03-10 12:55:00",
            // "updated_at" => "2023-03-10 12:55:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CONTROL PREVIO Y REVISION DE DOCUMENTOS ADMINISTRATIVOS.",
            // "url_pdf" => "https://drive.google.com/file/d/1LEDQCGYp1gMDaSZod0EU3meoubULxOwP/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-10 15:30:00",
            // "last_date" => "2023-03-13 10:00:00",
            // "created_at" => "2023-03-10 15:30:00",
            // "updated_at" => "2023-03-10 15:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 24 bidones de Agua de Mesa sin gas x 20 L para la Unidad de Abastecimiento de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1Apkd1FtQ7hghKz4q834NayppRfhRDSRL/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-10 15:30:00",
            // "last_date" => "2023-03-15 15:00:00",
            // "created_at" => "2023-03-10 15:30:00",
            // "updated_at" => "2023-03-10 15:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANTENIMIENTO Y LIMPIEZA DE TOGAS",
            // "url_pdf" => "https://drive.google.com/file/d/14pTqP1HpBgJMNYe_V2f9Ebw7kA-3Eb2s/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-13 08:00:00",
            // "last_date" => "2023-03-15 13:00:00",
            // "created_at" => "2023-03-13 08:00:00",
            // "updated_at" => "2023-03-13 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO ESPECIALIZADO EN SISTEMAS INFORMÁTICOS",
            // "url_pdf" => "https://drive.google.com/file/d/12JTROB6AVNRWxhtQiw1h7twar7VF8uj4/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-13 10:40:00",
            // "last_date" => "2023-03-14 15:00:00",
            // "created_at" => "2023-03-13 10:40:00",
            // "updated_at" => "2023-03-13 10:40:00"
            // ]
            // ,[
            // "description" => "Adquisición de reactivos químicos.",
            // "url_pdf" => "https://drive.google.com/file/d/1DXE9O-jP64yRbdf_UHQPnXiEjVHL78A-/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-13 09:00:00",
            // "last_date" => "2023-03-15 13:00:00",
            // "created_at" => "2023-03-13 09:00:00",
            // "updated_at" => "2023-03-13 09:00:00"
            // ]
            // ,[
            // "description" => "INSTALACIÓN Y ACONDICIONAMIENTO DE AIRE ACONDICIONADO EN LA SEDE HUALCARÁ Y LOCAL ADMINISTRATIVO CENTRAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1mlV7ev-P3zFsGg6g2nBy8ayKP6V0DBxK/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-14 08:00:00",
            // "last_date" => "2023-03-17 13:00:00",
            // "created_at" => "2023-03-14 08:00:00",
            // "updated_at" => "2023-03-14 08:00:00"
            // ]
            // ,[
            // "description" => " Adquisición de gas licuado de petróleo GLP para la Escuela Profesional de Administración de Turismo y Hotelería -UNDC. ",
            // "url_pdf" => "https://drive.google.com/file/d/1HvNeUPYJ9IZWru-utHnt-_i057uIciIR/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-14 08:00:00",
            // "last_date" => "2023-03-22 10:00:00",
            // "created_at" => "2023-03-14 08:00:00",
            // "updated_at" => "2023-03-14 08:00:00"
            // ]
            // ,[
            // "description" => "Servicio de actualización de presupuesto del expediente técnico del proyecto “Mejoramiento del Servicio de Educación Superior de la Escuela Profesional de Administración de Turismo y Hotelería en la Universidad Nacional de Cañete, distrito de San Luis, Provincia de Cañete, Región Lima”",
            // "url_pdf" => "https://drive.google.com/file/d/1RCxiaTuD-TdPuSD6aR6qKfrdJ0LPunGd/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-14 08:30:00",
            // "last_date" => "2023-03-16 13:00:00",
            // "created_at" => "2023-03-14 08:30:00",
            // "updated_at" => "2023-03-14 08:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES DE OFICINA PARA EL ABASTECIMIENTO DEL DESPACHO DE LA PRESIDENCIA DE LA COMISIÓN ORGANIZADORA DE LA UNIVERSIDAD NACIONAL DE CAÑETE 2 -VERSION 02",
            // "url_pdf" => "https://drive.google.com/file/d/1wJvP3dT3w0nFH_hVx9FthLK4VauBkzV-/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-14 12:00:00",
            // "last_date" => "2023-03-15 15:30:00",
            // "created_at" => "2023-03-14 12:00:00",
            // "updated_at" => "2023-03-14 12:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES DE OFICINA PARA EL ABASTECIMIENTO DEL DESPACHO DE LA PRESIDENCIA DE LA COMISIÓN ORGANIZADORA DE LA UNIVERSIDAD NACIONAL DE CAÑETE 1 -VERSION 02",
            // "url_pdf" => "https://drive.google.com/file/d/11CwijiqY9pC89eRPYF-i1K6w5wIvqwrS/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-14 12:00:00",
            // "last_date" => "2023-03-15 15:30:00",
            // "created_at" => "2023-03-14 12:00:00",
            // "updated_at" => "2023-03-14 12:00:00"
            // ]
            // ,[
            // "description" => "REQUERIMIENTO DE UTILES DE OFICINA PARA LA DIRECCION DE BIENESTAR UNIVERSITARIO - VERSION 02 ",
            // "url_pdf" => "https://drive.google.com/file/d/1Ij1mT3lvnKwtQRrvUhW93pQPQWoI0-s_/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-14 13:00:00",
            // "last_date" => "2023-03-15 15:30:00",
            // "created_at" => "2023-03-14 13:00:00",
            // "updated_at" => "2023-03-14 13:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE OFICINA PARA LA DIRECCIÓN DE SERVICIOS EDUCATIVOS DE EXTENSIÓN – CENTRO DE IDIOMA",
            // "url_pdf" => "https://drive.google.com/file/d/1M09wMDFZEhJsgOi6NUcq2HG1ZDVQ20ut/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-14 13:00:00",
            // "last_date" => "2023-03-15 15:30:00",
            // "created_at" => "2023-03-14 13:00:00",
            // "updated_at" => "2023-03-14 13:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE OFICINA PARA LA OFICINA DE COOPERACIÓN Y RELACIONES INTERNACIONAL",
            // "url_pdf" => "https://drive.google.com/file/d/1ErD8CsVZOKeisnHuPYEFS7M5fRpwlwvc/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 10:00:00",
            // "last_date" => "2023-03-16 15:30:00",
            // "created_at" => "2023-03-15 10:00:00",
            // "updated_at" => "2023-03-15 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE INTERNET DE BANDA ANCHA DEDICADO PARA EL CENTRO DE INVESTIGACIÓN PARA LA SUSTENTABILIDAD LUNAHUANÁ, EL LOCAL ADMINISTRATIVO CENTRAL, EL LOCAL HUALCARÁ Y LOS LOCALES ACADÉMICOS CASA DE LA CULTURA, CNI Y EL LOCAL FUNDO DON LUIS DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1m_zXBhbrPIrIE3JlC9birRLlPqiGw2zG/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 08:00:00",
            // "last_date" => "2023-03-22 08:00:00",
            // "created_at" => "2023-03-15 08:00:00",
            // "updated_at" => "2023-03-15 08:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE OFICINA PARA LA UNIDAD DE CONTABILIDAD - VERSION 02",
            // "url_pdf" => "https://drive.google.com/file/d/1SWY_lEi8qv6vniJJ_UmLg3LMmZ5xqzrx/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 10:00:00",
            // "last_date" => "2023-03-16 20:30:00",
            // "created_at" => "2023-03-15 10:00:00",
            // "updated_at" => "2023-03-15 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE IMPLEMENTACIÓN DE CAPACITACIÓN EN INSTRUMENTOS DE EVALUACIÓN DOCENTE",
            // "url_pdf" => "https://drive.google.com/file/d/1b5B7WSeSUIX3CIniDUNGzgswqnZE_Ux8/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 09:00:00",
            // "last_date" => "2023-03-16 16:00:00",
            // "created_at" => "2023-03-15 09:00:00",
            // "updated_at" => "2023-03-15 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA UNIDAD DE INVESTIGACIÓN DE LA FACULTAD DE INGENIERÍA.",
            // "url_pdf" => "https://drive.google.com/file/d/10dN_CtvYfoNU8pRhMyp81PIC5oiXChJw/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 10:00:00",
            // "last_date" => "2023-03-16 15:30:00",
            // "created_at" => "2023-03-15 10:00:00",
            // "updated_at" => "2023-03-15 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE MATERIALES DE OFICINA PARA LA VICEPRESIDENCIA DE INVESTIGACION 02 - VERSION 02 ",
            // "url_pdf" => "https://drive.google.com/file/d/1rEOpAKtJJrfalLT4oxMdOG_O8iYO3rjI/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 10:00:00",
            // "last_date" => "2023-03-16 15:30:00",
            // "created_at" => "2023-03-15 10:00:00",
            // "updated_at" => "2023-03-15 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE MATERIALES DE OFICINA PARA LA VICEPRESIDENCIA DE INVESTIGACION 01 - VERSION 02",
            // "url_pdf" => "https://drive.google.com/file/d/1xDUAtGs86o7-tL-TniKvYj0bmNfO5t4P/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 10:00:00",
            // "last_date" => "2023-03-16 15:30:00",
            // "created_at" => "2023-03-15 10:00:00",
            // "updated_at" => "2023-03-15 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE MATERIALES DE OFICINA PARA LA VICEPRESIDENCIA DE INVESTIGACION 01 - VERSION 02",
            // "url_pdf" => "https://drive.google.com/file/d/1xDUAtGs86o7-tL-TniKvYj0bmNfO5t4P/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 10:00:00",
            // "last_date" => "2023-03-16 15:30:00",
            // "created_at" => "2023-03-15 10:00:00",
            // "updated_at" => "2023-03-15 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del Servicio de una persona natural para la asesoría en la construcción de calidad, genuinidad y originalidad del artículo científico “Relación entre el planeamiento estratégico y la cultura organizacional de la Bodega y Viñedos Santa María S.A.C. del distrito de Lunahuaná, provincia de Cañete, 2021” para su publicación, del Proyecto de Investigación “Planeamiento estratégico flexible para el manejo financiero de las Mypes- 2019”. de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1nWILplxKSwUL20bnDwvXief4lgYNCrur/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 09:00:00",
            // "last_date" => "2023-03-15 15:30:00",
            // "created_at" => "2023-03-15 09:00:00",
            // "updated_at" => "2023-03-15 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación del Servicio de una persona natural para la asesoría en la construcción de calidad, genuinidad y originalidad del artículo científico “La motivación y el emprendimiento en estudiantes de los últimos ciclos de administración de la universidad nacional de cañete, 2021“ para su publicación; Proyecto de Investigación: “Efectos del programa de emprendimiento Milenial 2.0 sobre el nivel de la capacidad de innovación tecnológica de los alumnos de la Universidad Nacional de Cañete en el periodo 2019“",
            // "url_pdf" => "https://drive.google.com/file/d/1CL2ZqS1yGYWJ3ZR2iI9nugxzfk74_PEu/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 09:00:00",
            // "last_date" => "2023-03-15 15:30:00",
            // "created_at" => "2023-03-15 09:00:00",
            // "updated_at" => "2023-03-15 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación del Servicio de una persona natural para la asesoría en la construcción de calidad, genuinidad y originalidad del artículo científico: “La capacidad de innovación tecnológica y nivel de emprendimiento en los alumnos de la universidad nacional de cañete, 2021“ para su publicación; del proyecto “Efectos del programa de emprendimiento Milenial 2.0 sobre el nivel de la capacidad de innovación tecnológica de los alumnos de la Universidad Nacional de Cañete en el periodo 2019.",
            // "url_pdf" => "https://drive.google.com/file/d/1uBR6dktMlidISaML0ERoQ7lNxCiDFwpu/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 09:00:00",
            // "last_date" => "2023-03-15 15:30:00",
            // "created_at" => "2023-03-15 09:00:00",
            // "updated_at" => "2023-03-15 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación del Servicio de una persona natural para la asesoría en la construcción de calidad, genuinidad y originalidad del artículo científico “El Balanced Scorecard y el desarrollo empresarial de las Mipymes en San Vicente de Cañete, 2021, para su publicación. Proyecto de Investigación Experimental de Menor “Planeamiento estratégico flexible para el manejo financiero de las Mypes en Cañete 2019’’",
            // "url_pdf" => "https://drive.google.com/file/d/1FTQa542bkzzrMuGJ-LQpIJdQstDSU_en/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 09:00:00",
            // "last_date" => "2023-03-15 15:30:00",
            // "created_at" => "2023-03-15 09:00:00",
            // "updated_at" => "2023-03-15 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE 34 PORTA DIPLOMAS PARA LOS CONVENIOS DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1kPlmgeHpKcPxMsGVuxuVc70EMpoHkSix/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 02:20:00",
            // "last_date" => "2023-03-21 12:00:00",
            // "created_at" => "2023-03-15 02:20:00",
            // "updated_at" => "2023-03-15 02:20:00"
            // ]
            // ,[
            // "description" => " ADQUISICION DE TRAJES DE CORO PARA EL TALLER DE MUSICA ",
            // "url_pdf" => "https://drive.google.com/file/d/1DGGFZJt0bG2CUp62-BdVGCj5BoRTt4Q5/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 15:20:00",
            // "last_date" => "2023-04-03 15:00:00",
            // "created_at" => "2023-03-15 15:20:00",
            // "updated_at" => "2023-03-15 15:20:00"
            // ]
            // ,[
            // "description" => "Contratación de servicio de gestión y soporte técnico de sistemas informáticos académicos para la Dirección de Gestión Académica de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1JG__4g7y2dd2M1GrILMJTLPrLslQ7riQ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 11:00:00",
            // "last_date" => "2023-03-20 10:00:00",
            // "created_at" => "2023-03-15 11:00:00",
            // "updated_at" => "2023-03-15 11:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE ASISTENCIA EN PROCESO DE CALIDAD ACADÉMICA Y ACREDITACIÓN DE LA FACULTAD DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1NSfOhoxDszQC3FLnPz9zZVuLFOUxPFyu/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-15 12:00:00",
            // "last_date" => "2023-03-16 12:00:00",
            // "created_at" => "2023-03-15 12:00:00",
            // "updated_at" => "2023-03-15 12:00:00"
            // ]
            // ,[
            // "description" => " ADQUISICIÓN DE ÚTILES DE OFICINA PARA LA UNIDAD DE RECURSOS HUMANOS.",
            // "url_pdf" => "https://drive.google.com/file/d/10ySc8x3L-tBUSgJZnCvgVRzHZN3axtse/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-16 11:00:00",
            // "last_date" => "2023-03-16 15:30:00",
            // "created_at" => "2023-03-16 11:00:00",
            // "updated_at" => "2023-03-16 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANTENIMIENTO Y LIMPIEZA DE LOCAL PARA EL LOCAL FUNDO DON LUIS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/19TqaI3f2UJB5CXtoaa2LjZdrxJdzCTUN/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-16 13:40:00",
            // "last_date" => "2023-03-21 16:30:00",
            // "created_at" => "2023-03-16 13:40:00",
            // "updated_at" => "2023-03-16 13:40:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANTENIMIENTO Y LIMPIEZA DE LOCAL PARA EL LOCAL ACADÉMICO CASA DE LA CULTURA DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1rlZYRPjOATog2_WXSCm18QZOASfvJVRt/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-16 13:50:00",
            // "last_date" => "2023-03-21 16:30:00",
            // "created_at" => "2023-03-16 13:50:00",
            // "updated_at" => "2023-03-16 13:50:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE TRAJES DE TUNO PARA EL TALLER DE MUSICA",
            // "url_pdf" => "https://drive.google.com/file/d/10s3JK0WdfQoDmG4Ha46IXYKgWoPNXXLe/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-16 14:00:00",
            // "last_date" => "2023-03-23 15:00:00",
            // "created_at" => "2023-03-16 14:00:00",
            // "updated_at" => "2023-03-16 14:00:00"
            // ]
            // ,[
            // "description" => "MANTENIMIENTO PREVENTIVO A LOS EQUIPOS INFORMÁTICOS DE LOS LABORATORIOS DE CÓMPUTO N° 01, 02, 03, LABORATORIO DE REDES Y SERVIDORES DE LA ESCUELA PROFESIONAL DE INGENIERÍA DE SISTEMAS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1YiUPzm54FgWvsP-YqqNM94yAuHbBgmN6/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-17 09:40:00",
            // "last_date" => "2023-03-21 12:00:00",
            // "created_at" => "2023-03-17 09:40:00",
            // "updated_at" => "2023-03-17 09:40:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ALIMENTOS Y BEBIDAS PARA EL DESPACHO DE LA PRESIDENCIA DE LA COMISIÓN ORGANIZADORA DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1JCvYi13OkPXmggTLzDC5xIO8JkEXBxSO/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-17 10:00:00",
            // "last_date" => "2023-03-20 15:30:00",
            // "created_at" => "2023-03-17 10:00:00",
            // "updated_at" => "2023-03-17 10:00:00"
            // ]
            // ,[
            // "description" => "Servicio de actualización de presupuesto del expediente técnico del proyecto “Mejoramiento del Servicio de Educación Superior de la Escuela Profesional de Administración de Turismo y Hotelería en la Universidad Nacional de Cañete, distrito de San Luis, Provincia de Cañete, Región Lima” - 2DA CONVOCATORIA",
            // "url_pdf" => "https://drive.google.com/file/d/1RCxiaTuD-TdPuSD6aR6qKfrdJ0LPunGd/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-17 13:00:00",
            // "last_date" => "2023-03-20 15:00:00",
            // "created_at" => "2023-03-17 13:00:00",
            // "updated_at" => "2023-03-17 13:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE MOBILIARIO Y EQUIPAMIENTO DEL PROYECTO “MEJORAMIENTO DE LOS SERVICIOS DE EDUCACIÓN SUPERIOR EN LA SEDE ACADÉMICA CNI, DE LA UNIVERSIDAD NACIONAL DE CAÑETE, FUNDO SAN LUIS DEL DISTRITO DE SAN LUIS – PROVINCIA DE CAÑETE – DEPARTAMENTO DE LIMA”",
            // "url_pdf" => "https://drive.google.com/file/d/1eQqJEXd6lk4llKaYD260dbF7d9RySUGt/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-17 13:00:00",
            // "last_date" => "2023-03-21 15:30:00",
            // "created_at" => "2023-03-17 13:00:00",
            // "updated_at" => "2023-03-17 13:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION MOBILIARIO Y EQUIPAMIENTO DEL PROYECTO “MEJORAMIENTO DE LOS SERVICIOS DE FORMACIÓN PROFESIONAL EN ADMINISTRACIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN LUIS - PROVINCIA DE CAÑETE - DEPARTAMENTO DE LIMA”",
            // "url_pdf" => "https://drive.google.com/file/d/1KzHLrKysl1q6aPhYQV3wz9ozrfWDVNsL/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-17 13:00:00",
            // "last_date" => "2023-03-21 15:30:00",
            // "created_at" => "2023-03-17 13:00:00",
            // "updated_at" => "2023-03-17 13:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE MOBILIARIO Y EQUIPAMIENTO DEL PROYECTO “MEJORAMIENTO DE LOS SERVICIOS DE EDUCACIÓN SUPERIOR EN LA SEDE ACADÉMICA CNI, DE LA UNIVERSIDAD NACIONAL DE CAÑETE, FUNDO SAN LUIS DEL DISTRITO DE SAN LUIS – PROVINCIA DE CAÑETE – DEPARTAMENTO DE LIMA”.",
            // "url_pdf" => "https://drive.google.com/file/d/1eQqJEXd6lk4llKaYD260dbF7d9RySUGt/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-17 18:00:00",
            // "last_date" => "2023-04-12 18:00:00",
            // "created_at" => "2023-03-17 18:00:00",
            // "updated_at" => "2023-03-17 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación de servicio de un profesional especializado para apoyo en la implementación del Sistema de Control Interno en la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1wB_v8A2VvXMQu7a-2m8PxuKdWehf8gZv/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-21 10:00:00",
            // "last_date" => "2023-03-22 10:00:00",
            // "created_at" => "2023-03-21 10:00:00",
            // "updated_at" => "2023-03-21 10:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Elaboración de Documentos Administrativos",
            // "url_pdf" => "https://drive.google.com/file/d/1DunQn844mbqS5LMk4QMIVYyjYQaIJxUV/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-21 10:30:00",
            // "last_date" => "2023-03-22 11:00:00",
            // "created_at" => "2023-03-21 10:30:00",
            // "updated_at" => "2023-03-21 10:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES PARA LA UNIDAD DE ABASTECIMIENTO DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1D5BMa3zB_kUJJchaxl6uBVaJbE9eM150/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-21 12:00:00",
            // "last_date" => "2023-03-29 10:00:00",
            // "created_at" => "2023-03-21 12:00:00",
            // "updated_at" => "2023-03-21 12:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA Y MATERIAL DIDACTICO PARA EL DEPARTAMENTO ACADÉMICO DE INGENIERÍA DE SISTEMAS DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/17IQxj-SW-uoq7IkzW4diBCtRH6fgk83H/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-21 12:00:00",
            // "last_date" => "2023-03-22 15:30:00",
            // "created_at" => "2023-03-21 12:00:00",
            // "updated_at" => "2023-03-21 12:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES Y ÚTILES DE OFICINA PARA LA OFICINA DE GESTIÓN DE LA CALIDAD 02 - VERSION 02",
            // "url_pdf" => "https://drive.google.com/file/d/1B1u6APkiCdWkZ0zGHrr9gMSezuybPeFy/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-21 12:00:00",
            // "last_date" => "2023-03-22 15:30:00",
            // "created_at" => "2023-03-21 12:00:00",
            // "updated_at" => "2023-03-21 12:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE UTILES DE ESCRITORIO Y MATERIAL DIDACTICOS PARA EL DEPARTAMENTO ACADEMICO DE AGRONOMIA DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1ripE6GOT5iIrAYXx7vwJt4ak2OfiYuMd/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-21 14:30:00",
            // "last_date" => "2023-03-23 09:30:00",
            // "created_at" => "2023-03-21 14:30:00",
            // "updated_at" => "2023-03-21 14:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES DE ESCRITORIO PARA LA UNIDAD DE INVESTIGACIÓN DE AGRONOMÍA DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1nWUaM0dD_KxbyR967bSXv9JfKeMooa2_/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-21 14:30:00",
            // "last_date" => "2023-03-23 09:30:00",
            // "created_at" => "2023-03-21 14:30:00",
            // "updated_at" => "2023-03-21 14:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE IMPRESORA A INYECCIÓN DE TINTA COLOR PARA LA DIRECCIÓN DE SERVICIOS EDUCATIVOS DE EXTENSIÓN- CENTRO DE IDIOMA",
            // "url_pdf" => "https://drive.google.com/file/d/1BiU6CJc97rN5xcQP6b1r36vFSXFBqHB-/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-21 14:30:00",
            // "last_date" => "2023-04-10 17:00:00",
            // "created_at" => "2023-03-21 14:30:00",
            // "updated_at" => "2023-03-21 14:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de lavaderos de acero inoxidable para la implementación del Instituto de Investigación",
            // "url_pdf" => "https://drive.google.com/file/d/1Qwwc0xsmp_epajEcMZ0txHHkvOc0MdKN/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-22 08:20:00",
            // "last_date" => "2023-03-23 15:00:00",
            // "created_at" => "2023-03-22 08:20:00",
            // "updated_at" => "2023-03-22 08:20:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES PARA EL POSICIONAMIENTO DE LA IMAGEN DE LA UNIVERSIDAD NACIONAL DE CAÑETE, EN ACTOS PROTOCOLARES",
            // "url_pdf" => "https://drive.google.com/file/d/1ANVm9ctrDJ2J-1KuBK_swYx0aoG1KolX/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-23 09:40:00",
            // "last_date" => "2023-03-28 12:00:00",
            // "created_at" => "2023-03-23 09:40:00",
            // "updated_at" => "2023-03-23 09:40:00"
            // ]
            // ,[
            // "description" => "CONTRATACIÓN DE SERVICIO PARA LA EJECUCIÓN DEL CURSO DE ÉTICA EN INVESTIGACIÓN CIENTÍFICA",
            // "url_pdf" => "https://drive.google.com/file/d/18Q2EvNLpa5W9_WlFoOREWpPbbNWsWUNY/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-23 09:50:00",
            // "last_date" => "2023-03-24 10:00:00",
            // "created_at" => "2023-03-23 09:50:00",
            // "updated_at" => "2023-03-23 09:50:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ALIMENTOS Y BEBIDAS PARA CONSUMO HUMANO - SERVICIOS GENERALES",
            // "url_pdf" => "https://drive.google.com/file/d/1r014-4RI3tiPTGa-LK32VAaLicS68UkT/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-23 10:50:00",
            // "last_date" => "2023-04-05 10:00:00",
            // "created_at" => "2023-03-23 10:50:00",
            // "updated_at" => "2023-03-23 10:50:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE ALIMENTOS Y BEBIDAS PARA CONSUMO HUMANO - ASESORIA JURICA",
            // "url_pdf" => "https://drive.google.com/file/d/1MYHlES7f5yIEes8YP6MBOTxqdzYj_Srl/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-23 11:00:00",
            // "last_date" => "2023-04-10 10:30:00",
            // "created_at" => "2023-03-23 11:00:00",
            // "updated_at" => "2023-03-23 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CONSULTORÍA: ACOMPAÑAMIENTO PARA EL PROCESO DE AUTOEVALUACIÓN PARA ACREDITACIÓN INSTITUCIONAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/15craPJr28wDlHyGYwxoLEX_bfloupZFz/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-23 12:00:00",
            // "last_date" => "2023-03-27 12:00:00",
            // "created_at" => "2023-03-23 12:00:00",
            // "updated_at" => "2023-03-23 12:00:00"
            // ]
            // ,[
            // "description" => "“Servicio de seguimiento y monitoreo de actividades de la Dirección de Responsabilidad Social Universitaria”",
            // "url_pdf" => "https://drive.google.com/file/d/1eouG7UXpwjk6-3SFPjIrtH5NXDdmrP44/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-23 18:00:00",
            // "last_date" => "2023-03-24 13:00:00",
            // "created_at" => "2023-03-23 18:00:00",
            // "updated_at" => "2023-03-23 18:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de materiales de limpieza para el Centro Pre Universitario de la UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1lnA0nWOl2j6Xc-f1Wk9Wr3kXtdB6rYuL/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-24 09:00:00",
            // "last_date" => "2023-04-05 13:30:00",
            // "created_at" => "2023-03-24 09:00:00",
            // "updated_at" => "2023-03-24 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación de los Servicios de consultoría por parte de un especialista, para la identificación de materia patentable y redacción de cinco (5) documentos técnicos de patentes de modelo de utilidad a favor de la Universidad Nacional de Cañete ante INDECOPI.",
            // "url_pdf" => "https://drive.google.com/file/d/1rxIJAx1lfMfEo6da7Vw0FPGuSrm_9CN3/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-24 09:00:00",
            // "last_date" => "2023-04-03 03:00:00",
            // "created_at" => "2023-03-24 09:00:00",
            // "updated_at" => "2023-03-24 09:00:00"
            // ]
            // ,[
            // "description" => "Servicio de curso especializado en Responsabilidad Social Universitaria",
            // "url_pdf" => "https://drive.google.com/file/d/1cT1IWbjVTRRByzGOD4eCSksGSCdRSvNZ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-24 09:00:00",
            // "last_date" => "2023-05-17 14:30:00",
            // "created_at" => "2023-03-24 09:00:00",
            // "updated_at" => "2023-03-24 09:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Soporte Técnico de Sistemas Informáticos de la Escuela Profesional De Contabilidad",
            // "url_pdf" => "https://drive.google.com/file/d/1SG1M1bfDLdbYzaM4nsK7MT7G7E98gCR8/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-24 09:30:00",
            // "last_date" => "2023-03-27 09:00:00",
            // "created_at" => "2023-03-24 09:30:00",
            // "updated_at" => "2023-03-24 09:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Soporte Técnico de Sistemas Informáticos de la Escuela Profesional De Agronomía",
            // "url_pdf" => "https://drive.google.com/file/d/1N512gOG2zJDPrT1e8Hagq9fHQgg1prCi/view?usp=share_linkhttps://drive.google.com/file/d/1N512gOG2zJDPrT1e8Hagq9fHQgg1prCi/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-24 09:30:00",
            // "last_date" => "2023-03-27 09:00:00",
            // "created_at" => "2023-03-24 09:30:00",
            // "updated_at" => "2023-03-24 09:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Soporte Técnico de Sistemas Informáticos de la Escuela Profesional de Administración",
            // "url_pdf" => "https://drive.google.com/file/d/12rRizzxGZihk__G-bO61gQ43G-E7EEgs/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-24 09:30:00",
            // "last_date" => "2023-03-27 09:00:00",
            // "created_at" => "2023-03-24 09:30:00",
            // "updated_at" => "2023-03-24 09:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Soporte Técnico de Sistemas Informáticos de la Escuela Profesional de Ingeniería de Sistemas",
            // "url_pdf" => "https://drive.google.com/file/d/17VYud_uhby6n56u54nmenEuoNjQOhOSy/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-24 09:30:00",
            // "last_date" => "2023-03-27 09:00:00",
            // "created_at" => "2023-03-24 09:30:00",
            // "updated_at" => "2023-03-24 09:30:00"
            // ]
            // ,[
            // "description" => "CONTRATAR LOS SERVICIOS DE UN PROFESIONAL ESPECIALISTA EN GESTIÓN ADMINISTRATIVA PARA LA PRESIDENCIA DE LA COMISIÓN ORGANIZADORA",
            // "url_pdf" => "https://drive.google.com/file/d/1-Ulm1uEtLQAQ8w9fSTie8RPjNvF4jYEI/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-24 09:30:00",
            // "last_date" => "2023-03-30 15:30:00",
            // "created_at" => "2023-03-24 09:30:00",
            // "updated_at" => "2023-03-24 09:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE SOFTWARE PARA LA ADMINISTRACIÓN DOCUMENTARIA DEL SISTEMA INTEGRADO DE GESTIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1KpdrkZKiBeYzSai5uRtKAZn9Tw_f9qoh/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-24 10:00:00",
            // "last_date" => "2023-04-05 13:00:00",
            // "created_at" => "2023-03-24 10:00:00",
            // "updated_at" => "2023-03-24 10:00:00"
            // ]
            // ,[
            // "description" => "Servicio de ANÁLISIS, REVISIÓN, SEGUIMIENTO Y ELABORACIÓN DE DOCUMENTOS para la Facultad de Ciencias Agrarias, Departamento Académico y Unidad de Investigación de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1z_HRKQOmbE0gHV-pgdWW7qXVT4ZGe_ci/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-24 10:00:00",
            // "last_date" => "2023-03-28 08:00:00",
            // "created_at" => "2023-03-24 10:00:00",
            // "updated_at" => "2023-03-24 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de insumos agrícolas para el desarrollo de prácticas de campo en el Fundo Tercer Mundo, en las diferentes asignaturas del semestre 2023-1, de la Escuela Profesional de Agronomía de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1uCqDWl-YDnos8K-UipFxO1BoLrxcyVng/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-24 10:00:00",
            // "last_date" => "2023-03-27 15:00:00",
            // "created_at" => "2023-03-24 10:00:00",
            // "updated_at" => "2023-03-24 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO PROFESIONAL DE MEDICO CIRUJANO",
            // "url_pdf" => "https://drive.google.com/file/d/1io9GTmV0cH49fHiYxgTz5tOneyWMR04G/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-24 11:00:00",
            // "last_date" => "2023-04-14 16:00:00",
            // "created_at" => "2023-03-24 11:00:00",
            // "updated_at" => "2023-03-24 11:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ROTULOS DE SEÑALIZACIÓN PARA LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/12p13xTO_h7IIW13Y3OVhufbiNzJ_ZPwy/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-24 11:30:00",
            // "last_date" => "2023-03-27 17:00:00",
            // "created_at" => "2023-03-24 11:30:00",
            // "updated_at" => "2023-03-24 11:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de combustible DIESEL B5 S50, Gasohol Premium y Gasohol Regular para las unidades de transporte y maquinarias de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1qNkFKVf7LZeP3TxpZFmz_DGseHCbcndL/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-27 09:00:00",
            // "last_date" => "2023-03-27 15:00:00",
            // "created_at" => "2023-03-27 09:00:00",
            // "updated_at" => "2023-03-27 09:00:00"
            // ]
            // ,[
            // "description" => "MANTENIMIENTO PREVENTIVO A LOS EQUIPOS INFORMÁTICOS DE LOS LABORATORIOS DE CÓMPUTO N° 01, 02, 03",
            // "url_pdf" => "https://drive.google.com/file/d/1iSx58XlKfsAqpwmgNi4qDSDCXOn0T-qb/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-27 14:00:00",
            // "last_date" => "2023-03-30 15:00:00",
            // "created_at" => "2023-03-27 14:00:00",
            // "updated_at" => "2023-03-27 14:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de uniformes institucionales para el personal de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1yAWmVzdhElQ-YT5PRZ2-EZeFOoKA__2k/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-27 18:00:00",
            // "last_date" => "2023-03-29 15:20:00",
            // "created_at" => "2023-03-27 18:00:00",
            // "updated_at" => "2023-03-27 18:00:00"
            // ]
            // ,[
            // "description" => "INSTALACIÓN Y ACONDICIONAMIENTO DE AIRE ACONDICIONADO EN LA SEDE HUALCARÁ Y LOCAL ADMINISTRATIVO CENTRAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1BQVm5S3jplokVxw1Pdr5xmoKoFlU2NrP/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-28 08:00:00",
            // "last_date" => "2023-03-29 15:30:00",
            // "created_at" => "2023-03-28 08:00:00",
            // "updated_at" => "2023-03-28 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y MONITOREO DE ACTIVIDADES DE GESTION Y/O ADMINISTRATIVAS DE LA ESCUELA PROFESIONAL DE ADMINISTRACION",
            // "url_pdf" => "https://drive.google.com/file/d/1zQz2HtjnNrdddoZX_URg0a8bUZycS0jl/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-28 13:20:00",
            // "last_date" => "2023-03-30 13:00:00",
            // "created_at" => "2023-03-28 13:20:00",
            // "updated_at" => "2023-03-28 13:20:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES PARA LA UNIDAD DE ABASTECIMIENTO DE LA UNDC - VERSION 02",
            // "url_pdf" => "https://drive.google.com/file/d/1pT-hzYDU-asR63Z-maE6rWt0jzOqBczs/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-28 10:00:00",
            // "last_date" => "2023-03-30 13:30:00",
            // "created_at" => "2023-03-28 10:00:00",
            // "updated_at" => "2023-03-28 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE PROFESIONAL EN NUTRICION Y BROMATOLOGIA",
            // "url_pdf" => "https://drive.google.com/file/d/1rr2xgl4LaCTvghFvSEyoI8i4veUneH3q/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-29 10:00:00",
            // "last_date" => "2023-04-04 10:00:00",
            // "created_at" => "2023-03-29 10:00:00",
            // "updated_at" => "2023-03-29 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ENSEÑANZA DE TEATRO",
            // "url_pdf" => "https://drive.google.com/file/d/1qG4W2i_eDcmCvzavJjMSGAP2LgwoJ4KA/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-29 10:00:00",
            // "last_date" => "2023-04-03 10:30:00",
            // "created_at" => "2023-03-29 10:00:00",
            // "updated_at" => "2023-03-29 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO ESPECIALIZADO EN GESTIÓN DE CONTRATACIONES PÚBLICAS PARA LA UNIDAD DE ABASTECIMIENTO DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1AHneByNg29IG4xd61dSTVFqU-SQUMoZj/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-29 11:00:00",
            // "last_date" => "2023-03-30 11:00:00",
            // "created_at" => "2023-03-29 11:00:00",
            // "updated_at" => "2023-03-29 11:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de equipos para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/10y8b3IJhZz2ifS2G5LpvDQFgsGzk_PbD/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-29 14:00:00",
            // "last_date" => "2023-03-31 13:00:00",
            // "created_at" => "2023-03-29 14:00:00",
            // "updated_at" => "2023-03-29 14:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE INDAGACIÓN DE MERCADO DE BIENES Y SERVICIOS",
            // "url_pdf" => "https://drive.google.com/file/d/1Xt2Tv1dpvwo0Ck3xliyhG2o5gUQxj9po/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-30 07:30:00",
            // "last_date" => "2023-03-30 15:00:00",
            // "created_at" => "2023-03-30 07:30:00",
            // "updated_at" => "2023-03-30 07:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de gas licuado de petróleo GLP para la Escuela Profesional de Administración de Turismo y Hotelería -UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1MiHSlcNe74VXU8neB6jhTIGcBlBnuWBp/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-30 18:00:00",
            // "last_date" => "2023-04-03 12:00:00",
            // "created_at" => "2023-03-30 18:00:00",
            // "updated_at" => "2023-03-30 18:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE ALIMENTOS Y BEBIDAS PARA CONSUMO HUMANO - VICE INVESTIGACION",
            // "url_pdf" => "https://drive.google.com/file/d/1TAM8aMAYXTbSGH7LYJZNcPW5GlrDHlot/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-31 08:30:00",
            // "last_date" => "2023-04-10 10:30:00",
            // "created_at" => "2023-03-31 08:30:00",
            // "updated_at" => "2023-03-31 08:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Elaboración de Informe final del Ciclo Intensivo 2023 del Centro Preuniversitario",
            // "url_pdf" => "https://drive.google.com/file/d/1vtYXRDkhwQdH0dr_Sv_szQLWnXWheMpr/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-31 12:00:00",
            // "last_date" => "2023-04-03 10:00:00",
            // "created_at" => "2023-03-31 12:00:00",
            // "updated_at" => "2023-03-31 12:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ELABORACION DE CONTENIDO DIGITAL PARA LAS REDES SOCIALES Y EJECUCION DE LA CAMPAÑA DIGITAL",
            // "url_pdf" => "https://drive.google.com/file/d/1dIoUihQjxPC-wzT24OutKH7gET-n6Dhv/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-03-31 12:30:00",
            // "last_date" => "2023-04-03 12:30:00",
            // "created_at" => "2023-03-31 12:30:00",
            // "updated_at" => "2023-03-31 12:30:00"
            // ]
            // ,[
            // "description" => "REQUERIMIENTO DE UTILES DE OFICINA - BIENESTA UNIVERSITARIO",
            // "url_pdf" => "https://drive.google.com/file/d/1w9fMF5chVmSs7HcGyknaRxlFYVer9XdV/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-02-03 08:30:00",
            // "last_date" => "2023-04-04 12:00:00",
            // "created_at" => "2023-02-03 08:30:00",
            // "updated_at" => "2023-02-03 08:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Impresión de 100 ejemplares del “Manual del programa de emprendimiento Millennial 2.0”.",
            // "url_pdf" => "https://drive.google.com/file/d/1wM-4yywLv_9BiMhwnsIN1BKj7Rd_l8tN/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-03 08:00:00",
            // "last_date" => "2023-04-03 15:30:00",
            // "created_at" => "2023-04-03 08:00:00",
            // "updated_at" => "2023-04-03 08:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Impresión del 50 ejemplares del “Manual de Planeamiento estratégico flexible para el manejo financiero de las Mypes” en Quechua.",
            // "url_pdf" => "https://drive.google.com/file/d/1GKNXh1qrmwu5nz7MKYwnB98yaMzO4tSD/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-03 08:00:00",
            // "last_date" => "2023-04-03 15:30:00",
            // "created_at" => "2023-04-03 08:00:00",
            // "updated_at" => "2023-04-03 08:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Impresión de 50 ejemplares del “Manual de Planeamiento estratégico flexible para el manejo financiero de las Mypes” en Castellano.",
            // "url_pdf" => "https://drive.google.com/file/d/1GZh9FoF1DBbnIw4lgDaG3NxqRFqFu2rA/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-03 09:00:00",
            // "last_date" => "2023-04-03 15:30:00",
            // "created_at" => "2023-04-03 09:00:00",
            // "updated_at" => "2023-04-03 09:00:00"
            // ]
            // ,[
            // "description" => " REQUERIMIENTO DE BIENES PARA EL INSTITUTO DE INVESTIGACIÓN.",
            // "url_pdf" => "https://drive.google.com/drive/folders/1722brH5_-p1AFBP5OJ0u1Y_i6LGfofEm?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-03 12:00:00",
            // "last_date" => "2023-06-26 18:00:00",
            // "created_at" => "2023-04-03 12:00:00",
            // "updated_at" => "2023-04-03 12:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento preventivo y correctivo de las unidades de transporte de placas EGO-950, EGO-737, EGO-731 y EGO-951 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1wEwq7qAwb69pA6pE0q4J2c73BVUayCxf/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-04 10:00:00",
            // "last_date" => "2023-04-14 13:00:00",
            // "created_at" => "2023-04-04 10:00:00",
            // "updated_at" => "2023-04-04 10:00:00"
            // ]
            // ,[
            // "description" => "INSTALACIÓN Y ACONDICIONAMIENTO DE AIRE ACONDICIONADO EN LA SEDE HUALCARÁ Y LOCAL ADMINISTRATIVO CENTRAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1iS0gRzwr87du8FudDPQ1lu_6RUsLcyWE/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-04 14:00:00",
            // "last_date" => "2023-04-10 16:00:00",
            // "created_at" => "2023-04-04 14:00:00",
            // "updated_at" => "2023-04-04 14:00:00"
            // ]
            // ,[
            // "description" => "Servicio especializado en seguimiento y gestión documental, concerniente a los Proyectos de Inversión en fase de ejecución y elaboración de Expediente Técnico.",
            // "url_pdf" => "https://drive.google.com/file/d/1GIaEuFEgyJudkEdfP1wcwqlkh08l5oXT/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 08:00:00",
            // "last_date" => "2023-04-05 13:00:00",
            // "created_at" => "2023-04-05 08:00:00",
            // "updated_at" => "2023-04-05 08:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de Inspección Técnica Vehicular para la unidad de transporte de placa EGO-737de propiedad de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1-QmmhwruXHYJTHoOvCA95NZgT4pNrNzF/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 08:00:00",
            // "last_date" => "2023-04-15 18:00:00",
            // "created_at" => "2023-04-05 08:00:00",
            // "updated_at" => "2023-04-05 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE REFERENCISTA Y ATENCION AL USUARIO BIBLIOTECA",
            // "url_pdf" => "https://drive.google.com/file/d/1jAYKHWgB4554bx8cWwXn6ILjAxgt53rT/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 08:30:00",
            // "last_date" => "2023-04-10 10:00:00",
            // "created_at" => "2023-04-05 08:30:00",
            // "updated_at" => "2023-04-05 08:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de oficina para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1MVMLzJ4a-rROpBf4N58zSLj9F50zZsba/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 08:00:00",
            // "last_date" => "2023-04-20 18:00:00",
            // "created_at" => "2023-04-05 08:00:00",
            // "updated_at" => "2023-04-05 08:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de limpieza para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1fzpLCj1hL8tkhsM45L45iM4iBqZnRFez/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 08:00:00",
            // "last_date" => "2023-04-13 18:00:00",
            // "created_at" => "2023-04-05 08:00:00",
            // "updated_at" => "2023-04-05 08:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de energía para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/12tQQGvzfYdEIzJSxck7URjSn9Yfub-a0/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 08:30:00",
            // "last_date" => "2023-04-21 15:00:00",
            // "created_at" => "2023-04-05 08:30:00",
            // "updated_at" => "2023-04-05 08:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de bienes para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/10LHwYAYBpNbTwJXitJwtyV9GQdKthGMB/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 08:30:00",
            // "last_date" => "2023-04-14 17:00:00",
            // "created_at" => "2023-04-05 08:30:00",
            // "updated_at" => "2023-04-05 08:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de equipos para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete.”",
            // "url_pdf" => "https://drive.google.com/file/d/14MJf_Jh8mYtSIzfaWnt6jinrXGeuN3wK/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 08:30:00",
            // "last_date" => "2023-04-13 18:00:00",
            // "created_at" => "2023-04-05 08:30:00",
            // "updated_at" => "2023-04-05 08:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento correctivo y preventivo de equipos para el laboratorio de química, sanidad vegetal, suelos y topografía, fitomejoramiento y semillas, de la Escuela Profesional de Agronomía de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1jJClJ1-DIbpCU-aA_aIBuLGbiW3ZehF1/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 10:00:00",
            // "last_date" => "2023-04-10 14:00:00",
            // "created_at" => "2023-04-05 10:00:00",
            // "updated_at" => "2023-04-05 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES Y ÚTILES DE OFICINA PARA LA OFICINA DE GESTIÓN DE LA CALIDAD 02 - VERSION 02 ",
            // "url_pdf" => "https://drive.google.com/file/d/1YREoBkq5LJoTXgc_lphEuBl3FQbz7gbH/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 10:00:00",
            // "last_date" => "2023-04-10 14:00:00",
            // "created_at" => "2023-04-05 10:00:00",
            // "updated_at" => "2023-04-05 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de útiles de escritorio para el area de Control Patrimonial y Almacén de la Universidad Nacional de Cañete - Version 02",
            // "url_pdf" => "https://drive.google.com/file/d/1bUyW2eeqtQeaCCts7YhyVjHHpyw9lKZd/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 10:00:00",
            // "last_date" => "2023-04-10 14:00:00",
            // "created_at" => "2023-04-05 10:00:00",
            // "updated_at" => "2023-04-05 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de materiales de enseñanza para la Dirección de Responsabilidad Social Universitaria - Version 2",
            // "url_pdf" => "https://drive.google.com/file/d/1bS3IBkm0c3oMcCOMDR9zW-Z7kBD3Pp77/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 10:00:00",
            // "last_date" => "2023-04-11 14:00:00",
            // "created_at" => "2023-04-05 10:00:00",
            // "updated_at" => "2023-04-05 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO ESPECIALIZADO EN PSICOLOGIA",
            // "url_pdf" => "https://drive.google.com/file/d/1G_S2zUpssVLdEE8Udfqii3qAHIETSBzF/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 14:30:00",
            // "last_date" => "2023-04-10 10:00:00",
            // "created_at" => "2023-04-05 14:30:00",
            // "updated_at" => "2023-04-05 14:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de agua de mesa para el Departamento Académico de Agronomía de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1mUcERV43kYzuyXPbfLMGaRfry1O5F0Fv/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 15:00:00",
            // "last_date" => "2023-04-10 10:30:00",
            // "created_at" => "2023-04-05 15:00:00",
            // "updated_at" => "2023-04-05 15:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de agua de mesa para la Unidad de Investigación de Agronomía de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1WmdguIavWZmnL5wDyYuXpqGUe8ZCkBEo/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 15:00:00",
            // "last_date" => "2023-04-10 10:30:00",
            // "created_at" => "2023-04-05 15:00:00",
            // "updated_at" => "2023-04-05 15:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de impresora multifuncional para el Centro Pre Universitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1jIxezKotEOiBJziiyAxgVBH8IFP-ykbP/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-05 14:30:00",
            // "last_date" => "2023-04-10 17:00:00",
            // "created_at" => "2023-04-05 14:30:00",
            // "updated_at" => "2023-04-05 14:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 34 Porta Diplomas para los Convenios de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1rsmae5E4It9VSryMcauWBNC6ZsZpBoLg/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-10 15:30:00",
            // "last_date" => "2023-04-11 13:00:00",
            // "created_at" => "2023-04-10 15:30:00",
            // "updated_at" => "2023-04-10 15:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ENSEÑANZA DE DANZAS",
            // "url_pdf" => "https://drive.google.com/file/d/1AHhPfVvYHzlbiFvqOTOFGOtRDDohNG-4/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 11:50:00",
            // "last_date" => "2023-04-20 18:00:00",
            // "created_at" => "2023-04-11 11:50:00",
            // "updated_at" => "2023-04-11 11:50:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para el Fundo Tercer Mundo de la Universidad Nacional de Cañete - Personal 1",
            // "url_pdf" => "https://drive.google.com/file/d/185zORLhC1vvCz_MHK8BZNtW2DRmSheG8/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 13:00:00",
            // "last_date" => "2023-04-12 12:00:00",
            // "created_at" => "2023-04-11 13:00:00",
            // "updated_at" => "2023-04-11 13:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para el Fundo Tercer Mundo de la Universidad Nacional de Cañete - Personal 2",
            // "url_pdf" => "https://drive.google.com/file/d/1bx2Y_yclFwZINvt0TrjHTaZE2buIqxWH/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 13:00:00",
            // "last_date" => "2023-04-12 12:00:00",
            // "created_at" => "2023-04-11 13:00:00",
            // "updated_at" => "2023-04-11 13:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Especialista para la gestión, coordinación administrativa y financiera de proyectos de investigación para la Vicepresidencia de Investigación",
            // "url_pdf" => "https://drive.google.com/file/d/1HYvhHVN7fYf1Sc4NJ9iCflHv5jRmVwfc/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 16:00:00",
            // "last_date" => "2023-04-13 18:00:00",
            // "created_at" => "2023-04-11 16:00:00",
            // "updated_at" => "2023-04-11 16:00:00"
            // ]
            // ,[
            // "description" => "Servicio Especializado en Gestión de Tesorería ",
            // "url_pdf" => "https://drive.google.com/file/d/1n1bheh7QnsQ3FRdDpx8YcTfvfuVO8-mb/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 16:00:00",
            // "last_date" => "2023-04-13 13:00:00",
            // "created_at" => "2023-04-11 16:00:00",
            // "updated_at" => "2023-04-11 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y de limpieza para la Unidad de Servicios Generales de la Universidad Nacional de Cañete – Personal 6.",
            // "url_pdf" => "https://drive.google.com/file/d/1pO4xvqY9eUqs__6dUNF-DejouNdyVNb4/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 17:20:00",
            // "last_date" => "2023-04-14 15:00:00",
            // "created_at" => "2023-04-11 17:20:00",
            // "updated_at" => "2023-04-11 17:20:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 5",
            // "url_pdf" => "https://drive.google.com/file/d/1DY6HdeCmwwhPHX32NhPpnICS0ICYV9CQ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 17:20:00",
            // "last_date" => "2023-04-14 18:00:00",
            // "created_at" => "2023-04-11 17:20:00",
            // "updated_at" => "2023-04-11 17:20:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 4",
            // "url_pdf" => "https://drive.google.com/file/d/1t-laL1NxHgM5prBC6UNDpvxFK3Xk14U5/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 17:20:00",
            // "last_date" => "2023-04-14 18:00:00",
            // "created_at" => "2023-04-11 17:20:00",
            // "updated_at" => "2023-04-11 17:20:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 3",
            // "url_pdf" => "https://drive.google.com/file/d/1Z2ve04HGkv6DAnl4IZzJER0MYyaKvU9w/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 17:20:00",
            // "last_date" => "2023-04-14 18:00:00",
            // "created_at" => "2023-04-11 17:20:00",
            // "updated_at" => "2023-04-11 17:20:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 2",
            // "url_pdf" => "https://drive.google.com/file/d/1oaeDxNgq6x11iUA1EMlnXMF8jvki-nud/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 17:30:00",
            // "last_date" => "2023-04-14 15:00:00",
            // "created_at" => "2023-04-11 17:30:00",
            // "updated_at" => "2023-04-11 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 1",
            // "url_pdf" => "https://drive.google.com/file/d/1xIdMcfsMVbcoy-J34JB5uSngVoVbl2R2/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 17:30:00",
            // "last_date" => "2023-04-13 18:00:00",
            // "created_at" => "2023-04-11 17:30:00",
            // "updated_at" => "2023-04-11 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 1",
            // "url_pdf" => "https://drive.google.com/file/d/1AoHNUyGov9BXRz7QzoLvR2sl-SY_pc4S/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 17:30:00",
            // "last_date" => "2023-04-17 18:00:00",
            // "created_at" => "2023-04-11 17:30:00",
            // "updated_at" => "2023-04-11 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 2",
            // "url_pdf" => "https://drive.google.com/file/d/14mWCRsoaQUihmKejOWthUXfSdpWj2gnS/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 17:30:00",
            // "last_date" => "2023-04-17 18:00:00",
            // "created_at" => "2023-04-11 17:30:00",
            // "updated_at" => "2023-04-11 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 3",
            // "url_pdf" => "https://drive.google.com/file/d/1Il99LAT3-k-SYv8QxJELjOQRYEUefsUH/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 17:30:00",
            // "last_date" => "2023-04-17 18:00:00",
            // "created_at" => "2023-04-11 17:30:00",
            // "updated_at" => "2023-04-11 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 4",
            // "url_pdf" => "https://drive.google.com/file/d/1pW4Ex4lvWiSRzn83k_JsF7ptn44LONv_/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 17:40:00",
            // "last_date" => "2023-04-17 18:00:00",
            // "created_at" => "2023-04-11 17:40:00",
            // "updated_at" => "2023-04-11 17:40:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete – Personal 1",
            // "url_pdf" => "https://drive.google.com/file/d/1KRG0nxQkaHTChwUs5-EQpo8cxxmzZciU/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 17:40:00",
            // "last_date" => "2023-04-14 18:00:00",
            // "created_at" => "2023-04-11 17:40:00",
            // "updated_at" => "2023-04-11 17:40:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete – Personal 2",
            // "url_pdf" => "https://drive.google.com/file/d/1LZQhDnf2o8xu4QFvYqEUbLUMQEmYYe-9/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 17:40:00",
            // "last_date" => "2023-04-14 18:00:00",
            // "created_at" => "2023-04-11 17:40:00",
            // "updated_at" => "2023-04-11 17:40:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete – Personal 3",
            // "url_pdf" => "https://drive.google.com/file/d/165O6EgRngyDXDMZcW_yBl0QGcgdvCN7P/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 17:40:00",
            // "last_date" => "2023-04-14 18:00:00",
            // "created_at" => "2023-04-11 17:40:00",
            // "updated_at" => "2023-04-11 17:40:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete – Personal 4",
            // "url_pdf" => "https://drive.google.com/file/d/1S_uh6mnYVmny3Rk6EQVjkhvD84BI_LIT/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 17:40:00",
            // "last_date" => "2023-04-14 18:00:00",
            // "created_at" => "2023-04-11 17:40:00",
            // "updated_at" => "2023-04-11 17:40:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete – Personal 5",
            // "url_pdf" => "https://drive.google.com/file/d/1aGJ_sv63ZE6LCUSU7hNECyxHq-Nmr_EQ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-11 17:40:00",
            // "last_date" => "2023-04-14 18:00:00",
            // "created_at" => "2023-04-11 17:40:00",
            // "updated_at" => "2023-04-11 17:40:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MEJORAMIENTO DE TABLEROS ELECTRICOS PARA EL CENTRO DE INVESTIGACIÓN PARA LA SUSTENTABILIDAD LUNAHUANÁ DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1O5KmWpdJjD-Eq4bttq3wprBDmKJi26EU/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-12 09:00:00",
            // "last_date" => "2023-04-13 18:00:00",
            // "created_at" => "2023-04-12 09:00:00",
            // "updated_at" => "2023-04-12 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ASISTENCIA TÉCNICA EN MONITOREO Y SEGUIMIENTO EN GESTIÓN ADMINISTRATIVA PARA LA ESCUELA PROFESIONAL DE ADMINISTRACION DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1SvI3hrDWx1Cu_7a_Y71hRsWeGD6BgP_t/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-12 09:30:00",
            // "last_date" => "2023-04-12 18:00:00",
            // "created_at" => "2023-04-12 09:30:00",
            // "updated_at" => "2023-04-12 09:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO ESPECIALIZADO EN PSICOLOGIA",
            // "url_pdf" => "https://drive.google.com/file/d/16QIs8QxoLCwDC9WSTsE9m8KgFLNEhcSY/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-12 11:00:00",
            // "last_date" => "2023-04-13 18:00:00",
            // "created_at" => "2023-04-12 11:00:00",
            // "updated_at" => "2023-04-12 11:00:00"
            // ]
            // ,[
            // "description" => "Servicio de alquiler de un vehículo menor, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”.",
            // "url_pdf" => "https://drive.google.com/file/d/135BONpkDkYSZd3x-HJv7KbjaRBPtdB3o/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-12 12:40:00",
            // "last_date" => "2023-04-13 13:00:00",
            // "created_at" => "2023-04-12 12:40:00",
            // "updated_at" => "2023-04-12 12:40:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y EVALUACIÓN DE LA ASIGNACIÓN Y EJECUCIÓN PRESUPUESTAL",
            // "url_pdf" => "https://drive.google.com/file/d/1OkCo-RtUC3JkDtQPZFuMv13n0QrNUsia/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-12 13:00:00",
            // "last_date" => "2023-04-13 18:00:00",
            // "created_at" => "2023-04-12 13:00:00",
            // "updated_at" => "2023-04-12 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ASISTENCIA EN SISTEMA DE SEGUIMIENTO DE EXPEDIENTES DE TITULACIÓN DE LA UNIDAD DE INVESTIGACIÓN DE LA FACULTAD DE CIENCIAS EMPRESARIALES",
            // "url_pdf" => "https://drive.google.com/file/d/1kKgJwaas6tzeO_WQAFE-nhaO9dcnMtWv/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-12 13:00:00",
            // "last_date" => "2023-04-13 18:00:00",
            // "created_at" => "2023-04-12 13:00:00",
            // "updated_at" => "2023-04-12 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO ESPECIALIZADO EN REVISIÓN DE DOCUMENTOS PARA LA UNIDAD DE ABASTECIMIENTO.",
            // "url_pdf" => "https://drive.google.com/file/d/1Ei64pt_T8kv5iRTNGmAODqGzgsgqqVW9/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-13 11:00:00",
            // "last_date" => "2023-04-13 16:00:00",
            // "created_at" => "2023-04-13 11:00:00",
            // "updated_at" => "2023-04-13 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO ESPECIALIZADO EN SEGURIDAD Y SALUD EN EL TRABAJO",
            // "url_pdf" => "https://drive.google.com/file/d/1S2hYLUKVCf90owJ2PrA-Qu1VY4dvLM84/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-14 15:30:00",
            // "last_date" => "2023-04-19 18:00:00",
            // "created_at" => "2023-04-14 15:30:00",
            // "updated_at" => "2023-04-14 15:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de atriles de melamina para docentes del Centro de Idiomas y Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1gpemmwRkCMKw9bd8yvYN0fwYSxFyxDWI/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-14 17:20:00",
            // "last_date" => "2023-04-18 18:00:00",
            // "created_at" => "2023-04-14 17:20:00",
            // "updated_at" => "2023-04-14 17:20:00"
            // ]
            // ,[
            // "description" => "Adquisición de carpetas unipersonales para alumnos del Centro de Idiomas y Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1lFruX6yWrobPdxMbjpmPbDA7AywsqmJb/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-14 17:20:00",
            // "last_date" => "2023-04-18 18:00:00",
            // "created_at" => "2023-04-14 17:20:00",
            // "updated_at" => "2023-04-14 17:20:00"
            // ]
            // ,[
            // "description" => "Adquisición de Pizarras Acrílicas para el Centro de Idiomas y Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1dqqMDUVlhaMz3mnwnXxXoCTdgy6-QqG0/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-14 17:20:00",
            // "last_date" => "2023-04-18 18:00:00",
            // "created_at" => "2023-04-14 17:20:00",
            // "updated_at" => "2023-04-14 17:20:00"
            // ]
            // ,[
            // "description" => "Adquisición de ventiladores para el Dirección de Servicios Educativos de Extensión: Centro de Idiomas y Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1O1X0uabfD07A6HvV0WjXkKH4LSQ3RiSw/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-14 17:20:00",
            // "last_date" => "2023-04-18 18:00:00",
            // "created_at" => "2023-04-14 17:20:00",
            // "updated_at" => "2023-04-14 17:20:00"
            // ]
            // ,[
            // "description" => "Adquisición de 06 bidón de Agua de Mesa sin gas x 20 L para la Dirección General de Administración de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1QlYag6tCGuQ99jjlxUDiRkp-oXVjmsNE/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-17 10:40:00",
            // "last_date" => "2023-04-20 18:00:00",
            // "created_at" => "2023-04-17 10:40:00",
            // "updated_at" => "2023-04-17 10:40:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Gestión y seguimiento de actividades administrativas de las direcciones de la Vicepresidencia de Investigación.",
            // "url_pdf" => "https://drive.google.com/file/d/12dpVKIL0aS4r5f5eFU5MRXmnONy2HiOJ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-17 11:00:00",
            // "last_date" => "2023-04-18 11:00:00",
            // "created_at" => "2023-04-17 11:00:00",
            // "updated_at" => "2023-04-17 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO PROFESIONAL DE MEDICO CIRUJANO",
            // "url_pdf" => "https://drive.google.com/file/d/1kRmVmtqG_7B6E2a2jfGmTis95khjr-jI/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-17 13:00:00",
            // "last_date" => "2023-04-18 13:00:00",
            // "created_at" => "2023-04-17 13:00:00",
            // "updated_at" => "2023-04-17 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE REFERENCISTA Y ATENCION AL USUARIO BIBLIOTECA",
            // "url_pdf" => "https://drive.google.com/file/d/1ErNqPE7UYrnAsIqs5BZOqi33p4TEPPUH/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-17 17:00:00",
            // "last_date" => "2023-04-18 18:00:00",
            // "created_at" => "2023-04-17 17:00:00",
            // "updated_at" => "2023-04-17 17:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ASISTENCIA TÉCNICA EN LA GESTIÓN DE RECURSOS HUMANOS",
            // "url_pdf" => "https://drive.google.com/file/d/1N86x5d-oJJ71hbJnImjbcUAuBhL1x-Ph/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-17 17:00:00",
            // "last_date" => "2023-04-18 18:00:00",
            // "created_at" => "2023-04-17 17:00:00",
            // "updated_at" => "2023-04-17 17:00:00"
            // ]
            // ,[
            // "description" => "“Contratación de Servicio de Docencia para enseñanza del Idioma Ingles”",
            // "url_pdf" => "https://drive.google.com/file/d/1Rf9V3ooga-XHPBAMOn39uXs22KIfoyM8/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-18 08:00:00",
            // "last_date" => "2023-04-20 08:00:00",
            // "created_at" => "2023-04-18 08:00:00",
            // "updated_at" => "2023-04-18 08:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de impresora multifuncional para el Centro Pre Universitario de la Universidad Nacional de Cañete VS 02",
            // "url_pdf" => "https://drive.google.com/file/d/1JC2aXw4ULTO_JZp7jzwnXQPi7OfrxNDc/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-18 08:00:00",
            // "last_date" => "2023-04-19 15:00:00",
            // "created_at" => "2023-04-18 08:00:00",
            // "updated_at" => "2023-04-18 08:00:00"
            // ]
            // ,[
            // "description" => "ADQUICISIÓN DE SILLAS ERGONÓMICAS PARA LA UNIDAD DE RECURSOS HUMANOS",
            // "url_pdf" => "https://drive.google.com/file/d/1jiMrUMzm9P64ENNzjrWvVD99WtT6hDBT/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-18 08:00:00",
            // "last_date" => "2023-04-24 13:00:00",
            // "created_at" => "2023-04-18 08:00:00",
            // "updated_at" => "2023-04-18 08:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de laboratorio para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/17LNJSfZ2TxuMRdJIng6zdcEcdc1vu6Sj/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-18 13:00:00",
            // "last_date" => "2023-04-20 13:00:00",
            // "created_at" => "2023-04-18 13:00:00",
            // "updated_at" => "2023-04-18 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO PROFESIONAL DE MEDICO CIRUJANO",
            // "url_pdf" => "https://drive.google.com/file/d/1tTMLfYM3F_G_tXy1-9eM64pN8O7sIyrT/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-19 11:00:00",
            // "last_date" => "2023-04-21 12:00:00",
            // "created_at" => "2023-04-19 11:00:00",
            // "updated_at" => "2023-04-19 11:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete – Personal 4",
            // "url_pdf" => "https://drive.google.com/file/d/14aQi2Q5H0krzMd2hA6Xcmr0b6t6DLR37/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-19 11:00:00",
            // "last_date" => "2023-04-19 19:00:00",
            // "created_at" => "2023-04-19 11:00:00",
            // "updated_at" => "2023-04-19 11:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete – Personal 3",
            // "url_pdf" => "https://drive.google.com/file/d/1hlUCqKBN91p_ASMjCwC-I7JNcdJIf6z4/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-19 11:00:00",
            // "last_date" => "2023-04-19 19:00:00",
            // "created_at" => "2023-04-19 11:00:00",
            // "updated_at" => "2023-04-19 11:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de oficina para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete.”",
            // "url_pdf" => "https://drive.google.com/file/d/1-5V1yB5U2vtTrCWldCsFacYoAIEeyJeC/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-19 17:00:00",
            // "last_date" => "2023-04-20 18:00:00",
            // "created_at" => "2023-04-19 17:00:00",
            // "updated_at" => "2023-04-19 17:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de insumos y/o materiales de invernadero para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1BfuqgC-y21iiFi2I8SosyMzyY_KvFveP/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-19 17:00:00",
            // "last_date" => "2023-04-20 18:00:00",
            // "created_at" => "2023-04-19 17:00:00",
            // "updated_at" => "2023-04-19 17:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de energía química para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete.”",
            // "url_pdf" => "https://drive.google.com/file/d/1wlViHVABVTFVWOEgAKdGdtBIsh84PifJ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-19 18:00:00",
            // "last_date" => "2023-04-20 18:00:00",
            // "created_at" => "2023-04-19 18:00:00",
            // "updated_at" => "2023-04-19 18:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE EJECUTOR DE GASTOS PARA ACTIVIDADES AGRICOLAS DEL FUNDO TERCER MUNDO DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1C4GaMmekNDKARP0zR3yG_z6zV0tpkK5E/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-20 10:00:00",
            // "last_date" => "2023-04-20 17:00:00",
            // "created_at" => "2023-04-20 10:00:00",
            // "updated_at" => "2023-04-20 10:00:00"
            // ]
            // ,[
            // "description" => "Servicio de mano de obra no calificada para la parcela 75 del predio San Roque del campo experimental de la Escuela Profesional de Agronomía.",
            // "url_pdf" => "https://drive.google.com/file/d/1jSR3ktSS46ryhMA8OfrIMSqUZUEB08uH/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-20 11:00:00",
            // "last_date" => "2023-04-20 17:00:00",
            // "created_at" => "2023-04-20 11:00:00",
            // "updated_at" => "2023-04-20 11:00:00"
            // ]
            // ,[
            // "description" => "Servicio de mano de obra no calificada para la parcela 83 del predio San Roque del campo experimental de la Escuela Profesional de Agronomía.",
            // "url_pdf" => "https://drive.google.com/file/d/17ufv4JXFMmIGiJcia5LddGt6ONcSxlyo/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-20 11:00:00",
            // "last_date" => "2023-04-20 17:00:00",
            // "created_at" => "2023-04-20 11:00:00",
            // "updated_at" => "2023-04-20 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO PROFESIONAL DE LICENCIADA EN ENFERMERIA",
            // "url_pdf" => "https://drive.google.com/file/d/1q6IkM2Oj1Yb9VOGhwMo02uJkpyeP1bMc/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-20 12:00:00",
            // "last_date" => "2023-04-21 18:00:00",
            // "created_at" => "2023-04-20 12:00:00",
            // "updated_at" => "2023-04-20 12:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de agua de mesa para el proyecto de investigación 001",
            // "url_pdf" => "https://drive.google.com/file/d/1CxF1l2kAnB6vXH8ON7TLydpCBzc28NS3/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-21 10:00:00",
            // "last_date" => "2023-04-21 15:00:00",
            // "created_at" => "2023-04-21 10:00:00",
            // "updated_at" => "2023-04-21 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE AGUA DE MESA PARA EL PROYECTO DE INVESTIGACION 003",
            // "url_pdf" => "https://drive.google.com/file/d/189ZI0KXSh-lVf9Ic6HKITf5lBpWpHUeh/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-21 10:00:00",
            // "last_date" => "2023-04-21 15:00:00",
            // "created_at" => "2023-04-21 10:00:00",
            // "updated_at" => "2023-04-21 10:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de equipos para el proyecto: Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023).”",
            // "url_pdf" => "https://drive.google.com/file/d/1En3YgCLLVjFqn5gci0_B3t01ZBTmwlYa/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-21 10:00:00",
            // "last_date" => "2023-04-25 15:00:00",
            // "created_at" => "2023-04-21 10:00:00",
            // "updated_at" => "2023-04-21 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio especializado en instalaciones eléctricas - Técnico para la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1Dcbs_6qTbqYymcZl3wWhXnYsxb2hQfy6/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-21 11:30:00",
            // "last_date" => "2023-04-24 12:00:00",
            // "created_at" => "2023-04-21 11:30:00",
            // "updated_at" => "2023-04-21 11:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 34 Porta Diplomas para los Convenios de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1rsmae5E4It9VSryMcauWBNC6ZsZpBoLg/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-21 10:00:00",
            // "last_date" => "2023-04-21 16:00:00",
            // "created_at" => "2023-04-21 10:00:00",
            // "updated_at" => "2023-04-21 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de Supervisor de Seguridad para la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1z4MSvOqLIwykeI-hk6KGD-KVjxkTKuzw/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-21 12:00:00",
            // "last_date" => "2023-04-25 18:00:00",
            // "created_at" => "2023-04-21 12:00:00",
            // "updated_at" => "2023-04-21 12:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de reactivos para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1tUpDPZx6cCYhQtmqEUPU3clldEnO-qND/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-21 18:00:00",
            // "last_date" => "2023-04-25 13:00:00",
            // "created_at" => "2023-04-21 18:00:00",
            // "updated_at" => "2023-04-21 18:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de reactivos para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/13thXKi3Gvc2jUjyDDywgmOkp6odF_hBN/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-21 18:00:00",
            // "last_date" => "2023-04-25 13:00:00",
            // "created_at" => "2023-04-21 18:00:00",
            // "updated_at" => "2023-04-21 18:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de mobiliarios para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1MqoYynMBGKAWXxBFy81NThVuzgE5gHLM/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-21 18:00:00",
            // "last_date" => "2023-04-25 18:00:00",
            // "created_at" => "2023-04-21 18:00:00",
            // "updated_at" => "2023-04-21 18:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de limpieza para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete.”",
            // "url_pdf" => "https://drive.google.com/file/d/1NjTijkYQ2X-4d2Ytoiq1HuqlPJMql5FH/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-21 18:00:00",
            // "last_date" => "2023-04-25 18:00:00",
            // "created_at" => "2023-06-21 18:00:00",
            // "updated_at" => "2023-06-21 18:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de limpieza para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete.”",
            // "url_pdf" => "https://drive.google.com/file/d/1NjTijkYQ2X-4d2Ytoiq1HuqlPJMql5FH/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-21 18:00:00",
            // "last_date" => "2023-04-25 18:00:00",
            // "created_at" => "2023-04-21 18:00:00",
            // "updated_at" => "2023-04-21 18:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de reactivos para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1J4W-iebBLSsYaNeApyIvf_ZdmVcx3hOT/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-21 18:00:00",
            // "last_date" => "2023-04-25 18:00:00",
            // "created_at" => "2023-04-21 18:00:00",
            // "updated_at" => "2023-04-21 18:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE 11 DIPLOMAS DE BACHILLER CON CALIGRAFIADO PARA LOS GRADUADOS DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1H6P_oBjj8W0b9roa0CeRqzNf3eLRrBty/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-24 09:00:00",
            // "last_date" => "2023-04-24 16:00:00",
            // "created_at" => "2023-04-24 09:00:00",
            // "updated_at" => "2023-04-24 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE 05 BIDONES DE AGUA DE MESA SIN GAS DE 20 LT - UEI",
            // "url_pdf" => "https://drive.google.com/file/d/1mDd_psVK6rfnQ5oMfabbxiVxC3sZIC2k/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-24 10:00:00",
            // "last_date" => "2023-04-25 10:00:00",
            // "created_at" => "2023-04-24 10:00:00",
            // "updated_at" => "2023-04-24 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de equipos para el proyecto: Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote.",
            // "url_pdf" => "https://drive.google.com/file/d/1tKcFNngol4uZ6_ovWiIphzwcPgBR23KE/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-24 13:00:00",
            // "last_date" => "2023-04-26 13:00:00",
            // "created_at" => "2023-04-24 13:00:00",
            // "updated_at" => "2023-04-24 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ENSEÑANZA DE DANZAS",
            // "url_pdf" => "https://drive.google.com/file/d/1wU2_KhKdnRvfgBbfkA9XwlgYSbP_SANY/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-24 15:30:00",
            // "last_date" => "2023-04-25 10:00:00",
            // "created_at" => "2023-04-24 15:30:00",
            // "updated_at" => "2023-04-24 15:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO ESPECIALIZADO EN SEGURIDAD Y SALUD EN EL TRABAJO",
            // "url_pdf" => "https://drive.google.com/file/d/1Vme0jL1zPyM7gVIwbwqPDx7wGBXAt8Nj/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-24 16:00:00",
            // "last_date" => "2023-04-25 13:00:00",
            // "created_at" => "2023-04-24 16:00:00",
            // "updated_at" => "2023-04-24 16:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de autoclave para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1kBj1rOqGGJt5uNu1oDTIWQVgmHWMUxvA/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-24 17:30:00",
            // "last_date" => "2023-04-26 13:00:00",
            // "created_at" => "2023-04-24 17:30:00",
            // "updated_at" => "2023-04-24 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo, para el proyecto de investigación: “Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023)”.",
            // "url_pdf" => "https://drive.google.com/file/d/1WbDbcZtt9Jb3iHNXsxVBjQddrZf70TxS/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-24 17:30:00",
            // "last_date" => "2023-04-26 13:00:00",
            // "created_at" => "2023-04-24 17:30:00",
            // "updated_at" => "2023-04-24 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de laboratorio, para el proyecto de investigación: “Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023)”.",
            // "url_pdf" => "https://drive.google.com/file/d/141jxy714ZXJj4I2Ra_x-hNWDYOgtSJul/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-24 17:30:00",
            // "last_date" => "2023-04-26 13:00:00",
            // "created_at" => "2023-04-24 17:30:00",
            // "updated_at" => "2023-04-24 17:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de insumos de laboratorio para el proyecto: Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”",
            // "url_pdf" => "https://drive.google.com/file/d/1wI3OjCXbo1Ezhgu3-SSwAeEn3DveWHRI/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-24 17:50:00",
            // "last_date" => "2023-05-05 13:00:00",
            // "created_at" => "2023-04-24 17:50:00",
            // "updated_at" => "2023-04-24 17:50:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de campo para el proyecto: Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”",
            // "url_pdf" => "https://drive.google.com/file/d/1fqCewaIRT8b-f7KeSYJUMioJ7LtJzlTc/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-25 08:00:00",
            // "last_date" => "2023-04-25 16:00:00",
            // "created_at" => "2023-04-25 08:00:00",
            // "updated_at" => "2023-04-25 08:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE 11 DIPLOMAS DE BACHILLER CON CALIGRAFIADO PARA LOS GRADUADOS DE LA UNDC - V2",
            // "url_pdf" => "https://drive.google.com/file/d/1AoFFN0kGK98L72kYqVJ8W45uz043R30B/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-25 10:00:00",
            // "last_date" => "2023-04-26 10:00:00",
            // "created_at" => "2023-04-25 10:00:00",
            // "updated_at" => "2023-04-25 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO PROFESIONAL DE LICENCIADA EN ENFERMERIA - versión 2 ",
            // "url_pdf" => "https://drive.google.com/file/d/1wbTPR7Y6W1kMcBpL1kcCMt1rADj2Kcc1/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-25 10:30:00",
            // "last_date" => "2023-04-26 10:00:00",
            // "created_at" => "2023-04-25 10:30:00",
            // "updated_at" => "2023-04-25 10:30:00"
            // ]
            // ,[
            // "description" => "Servicio de un Técnico de campo de muestreo foliar, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”.",
            // "url_pdf" => "https://drive.google.com/file/d/1o3TE6fREDmcTbvilSo4Xm_rBzaCqLLjM/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-25 11:00:00",
            // "last_date" => "2023-05-17 10:00:00",
            // "created_at" => "2023-04-25 11:00:00",
            // "updated_at" => "2023-04-25 11:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de oficina para el proyecto: Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023).”",
            // "url_pdf" => "https://drive.google.com/file/d/1C24hUC0oUrvc4zwHskWDKtdHqwqghD-m/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-25 17:00:00",
            // "last_date" => "2023-04-26 13:00:00",
            // "created_at" => "2023-04-25 17:00:00",
            // "updated_at" => "2023-04-25 17:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de licencia de de software para la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1Id5F0WdoEyL7ULIUKnxpwjpmhfxOQa5u/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-25 17:00:00",
            // "last_date" => "2023-04-27 13:00:00",
            // "created_at" => "2023-04-25 17:00:00",
            // "updated_at" => "2023-04-25 17:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de mantenimiento de destilador de agua, para el proyecto de investigación: “Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023)”.",
            // "url_pdf" => "https://drive.google.com/file/d/1mcA1enyWqtR2NiU7C7xEa01it1I5f7YO/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-27 08:00:00",
            // "last_date" => "2023-05-02 13:00:00",
            // "created_at" => "2023-04-27 08:00:00",
            // "updated_at" => "2023-04-27 08:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de insumos de campo para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/14OBa4wGAIyBE8H72lPVqTrLgnZ76A6zU/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-27 08:30:00",
            // "last_date" => "2023-05-02 13:00:00",
            // "created_at" => "2023-04-27 08:30:00",
            // "updated_at" => "2023-04-27 08:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de oficina para el proyecto: Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote.”",
            // "url_pdf" => "https://drive.google.com/file/d/1Q1Hi0NdKVQmwfaf0Ax6t1hWaZhAzppb5/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-27 09:30:00",
            // "last_date" => "2023-05-09 12:00:00",
            // "created_at" => "2023-04-27 09:30:00",
            // "updated_at" => "2023-04-27 09:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO GESTION DE BIENES PATRIMONIALES.",
            // "url_pdf" => "https://drive.google.com/file/d/1iYlSOxUWnhaALDJJ6A-aPMgzAzwF4MM1/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-27 10:00:00",
            // "last_date" => "2023-05-03 15:00:00",
            // "created_at" => "2023-04-27 10:00:00",
            // "updated_at" => "2023-04-27 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO ESPECIALIZADO REDACCION DE DOCUMENTOS ADMINISTRATIVOS EN LA GESTION PUBLICA",
            // "url_pdf" => "https://drive.google.com/file/d/1JyzlgScbhtFeyUOlOgRg3ouY2P-NX8su/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-27 10:00:00",
            // "last_date" => "2023-05-03 13:00:00",
            // "created_at" => "2023-04-27 10:00:00",
            // "updated_at" => "2023-04-27 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ACTUALIZACION DE INFORMACION DE BIENES PATRIMONIALES DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1gf030AQArJL6tpB18HR9rBj4W4G5gG6v/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-27 10:30:00",
            // "last_date" => "2023-05-02 10:00:00",
            // "created_at" => "2023-04-27 10:30:00",
            // "updated_at" => "2023-04-27 10:30:00"
            // ]
            // ,[
            // "description" => "Servicio de elaboración de contenido digital para las redes sociales y ejecución de la campaña digital para el Centro de Idiomas de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1itTtSqC2EjUEv-3qPE_qc4-KuF0IlQX0/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-27 10:30:00",
            // "last_date" => "2023-05-09 18:00:00",
            // "created_at" => "2023-04-27 10:30:00",
            // "updated_at" => "2023-04-27 10:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE TINTAS DE IMPRESIÓN PARA LA OFICINA DE GESTIÓN DE LA CALIDAD",
            // "url_pdf" => "https://drive.google.com/file/d/1tpeAHcR-RdS9MtOExuInPnoiOgpNlL7Q/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-27 10:30:00",
            // "last_date" => "2023-05-03 09:00:00",
            // "created_at" => "2023-04-27 10:30:00",
            // "updated_at" => "2023-04-27 10:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE CAJAS ARCHIVADORAS PARA LA OFICINA DE GESTIÓN DE LA CALIDAD",
            // "url_pdf" => "https://drive.google.com/file/d/1A1mdly0x7x7FKgF-tTNlstAsbwYcUbkc/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-27 10:30:00",
            // "last_date" => "2023-05-02 18:00:00",
            // "created_at" => "2023-04-27 10:30:00",
            // "updated_at" => "2023-04-27 10:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de útiles de escritorio para e l á r e a d e Control Patrimonial y Almacén de la UniversidadNacional de Cañete - v03",
            // "url_pdf" => "https://drive.google.com/file/d/1HpHl90cxkNh9bbbv4z2BQeMP3w9M---B/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-27 10:30:00",
            // "last_date" => "2023-05-02 13:00:00",
            // "created_at" => "2023-04-27 10:30:00",
            // "updated_at" => "2023-04-27 10:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de mantenimiento de equipos de laboratorio, para el proyecto de investigación: “Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023)”.",
            // "url_pdf" => "https://drive.google.com/file/d/1fWQyK0cGgBV5QarkcPDpLJuXSfWvhKZl/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-27 10:30:00",
            // "last_date" => "2023-05-02 13:00:00",
            // "created_at" => "2023-04-27 10:30:00",
            // "updated_at" => "2023-04-27 10:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 02 SILLAS GIRATORIAS DE DOS BRAZO, para la Escuela Profesional de Administración de Turismo y Hotelería de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1ijBbTzqXG0ATkpY4SF315OvQavEmcLki/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-27 13:00:00",
            // "last_date" => "2023-05-03 15:00:00",
            // "created_at" => "2023-04-27 13:00:00",
            // "updated_at" => "2023-04-27 13:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de equipos de protección personal y de seguridad para el personal de mantenimiento de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1_VXBNez6nPoWZLit13AYcnKhJkDoaGqN/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-27 13:00:00",
            // "last_date" => "2023-05-05 13:00:00",
            // "created_at" => "2023-04-27 13:00:00",
            // "updated_at" => "2023-04-27 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CONTRATACIONES DEL ESTADO Y CERTIFICACIÓN OSCE 2023.",
            // "url_pdf" => "https://drive.google.com/file/d/1h6jIeiUiIAlD6d9W55yJKxNI10vO5DbN/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-27 17:30:00",
            // "last_date" => "2023-05-03 13:00:00",
            // "created_at" => "2023-04-27 17:30:00",
            // "updated_at" => "2023-04-27 17:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE PROCESAMIENTO, ORDENAMIENTO Y CLASIFICACION DE DOCUMENTOS ADMINISTRATIVOS.",
            // "url_pdf" => "https://drive.google.com/file/d/1fjB6RqFmVudrj5isoDiFmA4PY4HHxFm1/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-04-28 15:00:00",
            // "last_date" => "2023-05-02 13:00:00",
            // "created_at" => "2023-04-28 15:00:00",
            // "updated_at" => "2023-04-28 15:00:00"
            // ]
            // ,[
            // "description" => "“Servicio Especializado en Gestión de Contrataciones Públicas para la Unidad de Abastecimiento de la UNDC”",
            // "url_pdf" => "https://drive.google.com/file/d/1r-I_e7V1nXYK8sCiGxeU9EOnSBQcDU5B/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-02 17:00:00",
            // "last_date" => "2023-05-03 13:00:00",
            // "created_at" => "2023-05-02 17:00:00",
            // "updated_at" => "2023-05-02 17:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ALIMENTACIÓN DE PERSONAS PARA LA CAPACITACIÓN SOBRE SIMULACRO DE EMERGENCIA DE LUCHA CONTRA INCENDIOS POR EL DIA DEL TRABAJADOR UNEDECINO.",
            // "url_pdf" => "https://drive.google.com/file/d/1f_MT5FMWl6d6E5gVUY-e7FgbjcwUWcpU/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-02 17:00:00",
            // "last_date" => "2023-05-04 13:00:00",
            // "created_at" => "2023-05-02 17:00:00",
            // "updated_at" => "2023-05-02 17:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE TRAJES DE CORO PARA EL TALLER DE MUSICA",
            // "url_pdf" => "https://drive.google.com/file/d/1VohyKFdRL26_9nG-aiYBXnb0X5mGYSZ9/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-02 17:30:00",
            // "last_date" => "2023-05-05 18:00:00",
            // "created_at" => "2023-05-02 17:30:00",
            // "updated_at" => "2023-05-02 17:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de suministros para las unidades de transporte de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1fuQyqGmak4YrqV6P_8a0EShAAfLY3Dpc/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-02 17:30:00",
            // "last_date" => "2023-05-03 13:00:00",
            // "created_at" => "2023-05-02 17:30:00",
            // "updated_at" => "2023-05-02 17:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE TRAJES DE TUNO PARA EL TALLER DE MUSICA",
            // "url_pdf" => "https://drive.google.com/file/d/1Y9KYrrefEE5SOppw0ldRg0FbxetWmLh9/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-03 09:00:00",
            // "last_date" => "2023-05-05 13:00:00",
            // "created_at" => "2023-05-03 09:00:00",
            // "updated_at" => "2023-05-03 09:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de insumos de laboratorio para el proyecto: Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023)”",
            // "url_pdf" => "https://drive.google.com/file/d/15iK4hXiSs5yEiB2vH6OdAw62fS-HE6MF/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-03 16:30:00",
            // "last_date" => "2023-05-09 18:00:00",
            // "created_at" => "2023-05-03 16:30:00",
            // "updated_at" => "2023-05-03 16:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de insumos de campo para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1IZgIygQPjH-qvfdcEhqNqlcBvywNTOs4/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-03 17:00:00",
            // "last_date" => "2023-05-05 13:00:00",
            // "created_at" => "2023-05-03 17:00:00",
            // "updated_at" => "2023-05-03 17:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE REFERENCISTA Y ATENCION AL USUARIO BIBLIOTECA",
            // "url_pdf" => "https://drive.google.com/file/d/1UkUlA9Ca5Wls5MjFn1XNA6ZK63MJPTSp/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-03 17:00:00",
            // "last_date" => "2023-05-09 18:00:00",
            // "created_at" => "2023-05-03 17:00:00",
            // "updated_at" => "2023-05-03 17:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE UNIFORME ANTIFLUIDO PARA PERSONAL DE SALUD",
            // "url_pdf" => "https://drive.google.com/file/d/1XUwOPSp2M6Kgg5k6PO217BnZXoVkuf9H/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-03 17:20:00",
            // "last_date" => "2023-06-06 15:00:00",
            // "created_at" => "2023-05-03 17:20:00",
            // "updated_at" => "2023-05-03 17:20:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DIGITALIZACIÓN ESPECIALIZADA EN GRADOS Y TÍTULOS",
            // "url_pdf" => "https://drive.google.com/file/d/1x4vjdUq88zgbBfW5LZvHPnIE2IKSdj9w/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-03 18:00:00",
            // "last_date" => "2023-05-04 13:00:00",
            // "created_at" => "2023-05-03 18:00:00",
            // "updated_at" => "2023-05-03 18:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ENSEÑANZA DE DANZA AFRO PERUANA",
            // "url_pdf" => "https://drive.google.com/file/d/1woefDZ9KLwUXxIOnFQ4PuDTzeBhZqB35/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-04 12:30:00",
            // "last_date" => "2023-05-08 12:00:00",
            // "created_at" => "2023-05-04 12:30:00",
            // "updated_at" => "2023-05-04 12:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 04 bidones de Agua de Mesa sin gas x 20 L para la Escuela Profesional de Administración de Turismo y Hotelería de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1vN6U6fSf-UP1e9qm1DZl_zr6irggBAec/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-04 17:00:00",
            // "last_date" => "2023-05-16 12:00:00",
            // "created_at" => "2023-05-04 17:00:00",
            // "updated_at" => "2023-05-04 17:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguimiento y monitoreo de actividades de gestión y/o administrativas para la Unidad de Servicios Generales de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1NHusCYSV_zjiMhbmofbEVFt_PiSAk8cx/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-04 17:00:00",
            // "last_date" => "2023-05-05 13:00:00",
            // "created_at" => "2023-05-04 17:00:00",
            // "updated_at" => "2023-05-04 17:00:00"
            // ]
            // ,[
            // "description" => "Contratación de un profesional para la formulación de propuestas de remodelación de las oficinas del Local Administrativo Central de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1GQneNBAgtNfj9q6XaYuUc1WoVn1lINlp/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-08 09:00:00",
            // "last_date" => "2023-05-15 18:00:00",
            // "created_at" => "2023-05-08 09:00:00",
            // "updated_at" => "2023-05-08 09:00:00"
            // ]
            // ,[
            // "description" => "Mantenimiento Preventivo a los equipos informáticos de los Laboratorios de Cómputo N° 01, 02, 03, Laboratorio de Redes y servidores de la Escuela Profesional de Ingeniería de Sistemas de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/17r8b5mxp9K4jG7tcTCvdmbhN34ziUYjm/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-08 09:00:00",
            // "last_date" => "2023-05-16 18:00:00",
            // "created_at" => "2023-05-08 09:00:00",
            // "updated_at" => "2023-05-08 09:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE SEGUIMIENTO Y MONITOREO DE LA IMPLEMENTACION DEL SISTEMA DE GESTION DE LA CALIDAD DE LA ESCUELA PROFESIONAL DE ADMINISTRACION DE TURISMO Y HOTELERIA.",
            // "url_pdf" => "https://drive.google.com/file/d/11_vM0DGvOMmsz4O-rBNt2k3CFC3QGkpT/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-08 09:30:00",
            // "last_date" => "2023-05-08 18:00:00",
            // "created_at" => "2023-05-08 09:30:00",
            // "updated_at" => "2023-05-08 09:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Elaboración de Spot publicitario para radio y televisión para el Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1gecfR5rmblNDqQHiWV9ZNf0LenIhpuT_/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-09 15:00:00",
            // "last_date" => "2023-05-10 13:00:00",
            // "created_at" => "2023-05-09 15:00:00",
            // "updated_at" => "2023-05-09 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MEJORAMIENTO DE TABLEROS ELECTRICOS PARA EL CENTRO DE INVESTIGACIÓN PARA LA SUSTENTABILIDAD LUNAHUANÁ DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1dZTC9v-4dkMN5gaYPniKfL-prREoS_RJ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-09 16:00:00",
            // "last_date" => "2023-05-10 18:00:00",
            // "created_at" => "2023-05-09 16:00:00",
            // "updated_at" => "2023-05-09 16:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 02 ESCRITORIO DE MELAMINE 03 CAJONES CON LLAVE, para la Escuela Profesional de Administración de Turismo y Hotelería de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1KY7o9xEZy9EwffxpKwPgUsjNaBKMxS2r/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-09 17:00:00",
            // "last_date" => "2023-05-12 11:40:00",
            // "created_at" => "2023-05-09 17:00:00",
            // "updated_at" => "2023-05-09 17:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de renovación de Seguro Obligatorio de Accidentes de Tránsito – SOAT para las unidades de transporte de placas EGJ - 132, EGO - 737 y EGO - 731 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/drive/folders/1rmgMLy3_DsItf6eehDuhF9j-ZEpDoQDJ?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-09 17:30:00",
            // "last_date" => "2023-05-10 14:30:00",
            // "created_at" => "2023-05-09 17:30:00",
            // "updated_at" => "2023-05-09 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento preventivo de las unidades de transporte de placas EGJ-132 y EGI-244 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1geoZZ9YSpodF-Tb2acJoUYZ75Fxptetx/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-09 17:30:00",
            // "last_date" => "2023-05-18 18:00:00",
            // "created_at" => "2023-05-09 17:30:00",
            // "updated_at" => "2023-05-09 17:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE 04 BIDONES DE AGUA DE MESA SIN GAS DE 20 LT.",
            // "url_pdf" => "https://drive.google.com/file/d/1PYc51AdVgSFqJNndp_y1B3k9CtdHNsQG/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-09 18:00:00",
            // "last_date" => "2023-05-16 12:00:00",
            // "created_at" => "2023-05-09 18:00:00",
            // "updated_at" => "2023-05-09 18:00:00"
            // ]
            // ,[
            // "description" => "CONTRATAR LOS SERVICIOS DE UN PROFESIONAL ESPECIALISTA EN GESTIÓN ADMINISTRATIVA PARA LA PRESIDENCIA DE LA COMISIÓN ORGANIZADORA",
            // "url_pdf" => "https://drive.google.com/file/d/1Lo6SWSdRWsyHrHDz9nVDm6QLkXCvoVh0/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-10 08:30:00",
            // "last_date" => "2023-05-10 18:00:00",
            // "created_at" => "2023-05-10 08:30:00",
            // "updated_at" => "2023-05-10 08:30:00"
            // ]
            // ,[
            // "description" => "“Servicio de recolección, transporte y disposición final de residuos sólidos peligrosos”",
            // "url_pdf" => "https://drive.google.com/file/d/1HIQQeJvIkVFoqtpjn6lQHrBWmXzuu2Jq/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-10 09:00:00",
            // "last_date" => "2023-05-26 12:00:00",
            // "created_at" => "2023-05-10 09:00:00",
            // "updated_at" => "2023-05-10 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de consultoría para la elaboración del estudio de preinversión a nivel de Perfil: “Mejoramiento y Ampliación del servicio de Gestión Institucional en Educación Superior Universitaria de la Biblioteca Central de la Universidad Nacional de Cañete – Distrito de San Luis – Provincia de Cañete – Región de Lima”.",
            // "url_pdf" => "https://drive.google.com/file/d/1EPEPj-x2HQe_x9pNmTTY0Oo84y6zDPUU/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-10 12:30:00",
            // "last_date" => "2023-05-17 18:00:00",
            // "created_at" => "2023-05-10 12:30:00",
            // "updated_at" => "2023-05-10 12:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ALIMENTACIÓN DE PERSONAS PARA LA CAPACITACIÓN “MADRE, UNA MUJER ADMIRADA, VALORADA Y RESPETADA” POR EL DIA DE LA MADRE UNEDECINA",
            // "url_pdf" => "https://drive.google.com/file/d/19Qv27h5cWWo2UM2i5zPSET9wdc4wRony/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-10 13:00:00",
            // "last_date" => "2023-05-11 12:00:00",
            // "created_at" => "2023-05-10 13:00:00",
            // "updated_at" => "2023-05-10 13:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE ALIMENTOS Y BEBIDAS PARA CONSUMO HUMANO",
            // "url_pdf" => "https://drive.google.com/file/d/1PyGcZqaB00QrDlTVXDM1whUBUThVCQKS/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-10 15:00:00",
            // "last_date" => "2023-05-11 12:00:00",
            // "created_at" => "2023-05-10 15:00:00",
            // "updated_at" => "2023-05-10 15:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 48 diplomas con caligrafiado para los graduados de la Universidad Nacional De Cañete dividido en (43 diplomas para Bachiller y 5 diplomas de Título profesional)",
            // "url_pdf" => "https://drive.google.com/file/d/1clsxvvh5SoQEu6QMEOJJkL1vlMKLPJ96/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-10 16:00:00",
            // "last_date" => "2023-05-11 15:00:00",
            // "created_at" => "2023-05-10 16:00:00",
            // "updated_at" => "2023-05-10 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del Servicio de impresión de volantes para el Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1W8at20EYSmVl1XAZ4U61WA-1Fnkz_mIh/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 09:00:00",
            // "last_date" => "2023-05-12 10:00:00",
            // "created_at" => "2023-05-11 09:00:00",
            // "updated_at" => "2023-05-11 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo para evaluación de productividad, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”. ",
            // "url_pdf" => "https://drive.google.com/file/d/1SKWvPF8LEz-gf6dQX3zIDEXffX4bbpCK/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 09:00:00",
            // "last_date" => "2023-05-12 15:00:00",
            // "created_at" => "2023-05-11 09:00:00",
            // "updated_at" => "2023-05-11 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE TÓNER DE IMPRESIÓN PARA EL CENTRO DE IDIOMAS",
            // "url_pdf" => "https://drive.google.com/file/d/140xUU-JwmyJ1PF450prxI_Lb0wIPsX9_/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 09:00:00",
            // "last_date" => "2023-05-12 18:00:00",
            // "created_at" => "2023-05-11 09:00:00",
            // "updated_at" => "2023-05-11 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIAL DIDACTICO, ACCESORIOS Y UTILES DE ENSEÑANZA PARA EL DEPARTAMENTO ACADEMICO DE CONTABILIDAD DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1acLIrRYqJQ3UdETAWeJa5ajPscM56ky5/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 09:00:00",
            // "last_date" => "2023-05-12 12:00:00",
            // "created_at" => "2023-05-11 09:00:00",
            // "updated_at" => "2023-05-11 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo de muestreo foliar – Personal 2, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”. ",
            // "url_pdf" => "https://drive.google.com/file/d/1wXUtdVje-WaaPfRR6ukE5Oi8qT93cJjM/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 09:00:00",
            // "last_date" => "2023-05-17 08:00:00",
            // "created_at" => "2023-05-11 09:00:00",
            // "updated_at" => "2023-05-11 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de útiles de escritorio para el Centro Pre Universitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1-v27fwh00-T3FWRg6Wzv9duZJV455St2/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 09:00:00",
            // "last_date" => "2023-05-12 12:00:00",
            // "created_at" => "2023-05-11 09:00:00",
            // "updated_at" => "2023-05-11 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo, para el proyecto de investigación: “Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023)”. ",
            // "url_pdf" => "https://drive.google.com/file/d/1PA2oM2hqTqz5whZjNVyQrthI4zo_vy9V/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 11:00:00",
            // "last_date" => "2023-05-12 18:00:00",
            // "created_at" => "2023-05-11 11:00:00",
            // "updated_at" => "2023-05-11 11:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Análisis de datos para la elaboración de las normas y el software CND camote, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”. ",
            // "url_pdf" => "https://drive.google.com/file/d/1ecHEkKhYKP8ym0J12UmpPpaXzzIznTO8/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 11:00:00",
            // "last_date" => "2023-05-27 12:00:00",
            // "created_at" => "2023-05-11 11:00:00",
            // "updated_at" => "2023-05-11 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 01 ARMARIO MELAMINE 02 PUERTAS, para la Escuela Profesional de Administración de Turismo y Hotelería de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/17LR24ZnYlFEAchpbzzLe0GQe0LryVhFe/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 12:00:00",
            // "last_date" => "2023-05-12 12:00:00",
            // "created_at" => "2023-05-11 12:00:00",
            // "updated_at" => "2023-05-11 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación radial para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1pPJfHUKoJrXqWnQkbOeavkKIbEpElgxi/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 12:00:00",
            // "last_date" => "2023-05-12 16:00:00",
            // "created_at" => "2023-05-11 12:00:00",
            // "updated_at" => "2023-05-11 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación radial para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1dQ2rssvXHax9bco5l-YyLMWBMY5-sWi6/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 12:00:00",
            // "last_date" => "2023-05-12 16:00:00",
            // "created_at" => "2023-05-11 12:00:00",
            // "updated_at" => "2023-05-11 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación radial para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1BB41qE-18T_D9SLygW6kUfBHDeozmi9D/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 12:00:00",
            // "last_date" => "2023-05-12 16:00:00",
            // "created_at" => "2023-05-11 12:00:00",
            // "updated_at" => "2023-05-11 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación radial para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1jR3mPdiqm9gwzVH4G0_wfQ-cEihj7o5J/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 12:00:00",
            // "last_date" => "2023-05-12 16:00:00",
            // "created_at" => "2023-05-11 12:00:00",
            // "updated_at" => "2023-05-11 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación radial para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1TbcCyQP6Gft2JTLyzjvggBwQ3JhIkAmx/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 12:00:00",
            // "last_date" => "2023-05-12 16:00:00",
            // "created_at" => "2023-05-11 12:00:00",
            // "updated_at" => "2023-05-11 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación televisiva para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1kwkJRocrsRrHpsSPlKCJWieFULSxSBYN/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 12:00:00",
            // "last_date" => "2023-05-12 13:00:00",
            // "created_at" => "2023-05-11 12:00:00",
            // "updated_at" => "2023-05-11 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación televisiva para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1kwkJRocrsRrHpsSPlKCJWieFULSxSBYN/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 12:00:00",
            // "last_date" => "2023-05-12 12:00:00",
            // "created_at" => "2023-05-11 12:00:00",
            // "updated_at" => "2023-05-11 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación televisiva para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1HTzWFLtN_B_cJupY8V2zqlVh3ahIoLFL/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 12:00:00",
            // "last_date" => "2023-05-12 12:00:00",
            // "created_at" => "2023-05-11 12:00:00",
            // "updated_at" => "2023-05-11 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación televisiva para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/16UPsZd1kkn0lZDO4N5EW1xACcU3Rcbnk/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 12:00:00",
            // "last_date" => "2023-05-12 12:00:00",
            // "created_at" => "2023-05-11 12:00:00",
            // "updated_at" => "2023-05-11 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación televisiva para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/11yW9SYsMzahu5iN9_r0tKF9AziY7PCYK/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 12:00:00",
            // "last_date" => "2023-05-12 18:00:00",
            // "created_at" => "2023-05-11 12:00:00",
            // "updated_at" => "2023-05-11 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación televisiva para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1uAfC9T0b7citSFXciKhbQ-EdZ4yuVV5M/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 12:00:00",
            // "last_date" => "2023-05-12 15:00:00",
            // "created_at" => "2023-05-11 12:00:00",
            // "updated_at" => "2023-05-11 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación televisiva para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1Sa92QF52ZDB_RUKy8edpt9evkifgEhqx/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 12:00:00",
            // "last_date" => "2023-05-12 16:00:00",
            // "created_at" => "2023-05-11 12:00:00",
            // "updated_at" => "2023-05-11 12:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIAL DIDACTICO, ACCESORIOS Y UTILES DE ENSEÑANZA PARA EL DEPARTAMENTO ACADEMICO DE ADMINISTRACION LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1A2NeX0OFqOtC_uq-Qf8NQvfU7vj2OD08/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 12:00:00",
            // "last_date" => "2023-05-12 17:00:00",
            // "created_at" => "2023-05-11 12:00:00",
            // "updated_at" => "2023-05-11 12:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de materiales de limpieza para el Centro Pre Universitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1yJaHJgI4Axj3czDNyBFzVyGds1okCEql/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 18:00:00",
            // "last_date" => "2023-05-25 15:00:00",
            // "created_at" => "2023-05-11 18:00:00",
            // "updated_at" => "2023-05-11 18:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 04 MOUSE INALAMBRICOS, para la Escuela Profesional de Administración de Turismo y Hotelería de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1zStSQuc3DqJkT3FL7kVPF4nbeYTR1klu/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-11 18:00:00",
            // "last_date" => "2023-05-15 18:00:00",
            // "created_at" => "2023-05-11 18:00:00",
            // "updated_at" => "2023-05-11 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación del Servicio de soporte informático para el Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1RtfCogyBU1SJEByzf7VcVEhzMvwqBU7f/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-12 16:00:00",
            // "last_date" => "2023-05-15 10:00:00",
            // "created_at" => "2023-05-12 16:00:00",
            // "updated_at" => "2023-05-12 16:00:00"
            // ]
            // ,[
            // "description" => "Servicio de asistencia técnica administrativa para la Dirección de Gestión Académica de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1zoSkKihIQrgz3pE1A7bLKvZUN6lcSVPE/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-12 16:00:00",
            // "last_date" => "2023-05-16 13:00:00",
            // "created_at" => "2023-05-12 16:00:00",
            // "updated_at" => "2023-05-12 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de formulación y gestión de requerimientos de bienes y servicios para ejecución del Plan de Trabajo de Ciclo Ordinario 2023-I del Centro Preuniversitario de la UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1z5kLhCl5wWoMnJ90NtJ8LCIEvFfzFUHu/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-12 16:00:00",
            // "last_date" => "2023-05-15 10:00:00",
            // "created_at" => "2023-05-12 16:00:00",
            // "updated_at" => "2023-05-12 16:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE SEGUIMIENTO Y MONITOREO DE ACTIVIDADES DE GESTION Y/O ADMINISTRATIVAS DE LA ESCUELA PROFESIONAL DE ADMINISTRACION.",
            // "url_pdf" => "https://drive.google.com/file/d/1l_-UQ895-mUuM1KMh0zVWS26gjCY4jGC/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-12 17:00:00",
            // "last_date" => "2023-05-16 15:00:00",
            // "created_at" => "2023-05-12 17:00:00",
            // "updated_at" => "2023-05-12 17:00:00"
            // ]
            // ,[
            // "description" => "Servicio de volanteo para el Centro Preuniversitario de la Universidad Nacional de Cañete - SAN LUIS- CERRO AZUL - NUEVO IMPERIAL",
            // "url_pdf" => "https://drive.google.com/file/d/14IxWAe_gj3H406z3HGF1es5GKjQhLVks/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-12 18:00:00",
            // "last_date" => "2023-05-15 18:00:00",
            // "created_at" => "2023-05-12 18:00:00",
            // "updated_at" => "2023-05-12 18:00:00"
            // ]
            // ,[
            // "description" => "Servicio de volanteo para el Centro Preuniversitario de la Universidad Nacional de Cañete - IMPERIAL - SAN VICENTE",
            // "url_pdf" => "https://drive.google.com/file/d/1CNXfjgW6MZfC8IadwmFjgnImx2ZKwtpX/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-12 18:30:00",
            // "last_date" => "2023-05-16 17:30:00",
            // "created_at" => "2023-05-12 18:30:00",
            // "updated_at" => "2023-05-12 18:30:00"
            // ]
            // ,[
            // "description" => "Contratación del Servicio de impresión, empastado y anillado de compendios de Ciencias y Letras para el Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1aOmIbGxpOhjTVIUDlOZUCtZ1ygi-WqX_/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-12 18:00:00",
            // "last_date" => "2023-05-16 17:00:00",
            // "created_at" => "2023-05-12 18:00:00",
            // "updated_at" => "2023-05-12 18:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de equipos de protección personal y de seguridad para el personal de mantenimiento de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1ve0zjvE_L5Zu3kC9Nf4VZHvPhvyruNGV/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-15 09:00:00",
            // "last_date" => "2023-05-17 10:00:00",
            // "created_at" => "2023-05-15 09:00:00",
            // "updated_at" => "2023-05-15 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio para la Capacitación en metodología y estadística aplicada a la investigación para la comunidad universitaria de la UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1yj6OXYn1bMvVA9gR3JBQBjhGOChMI9oE/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-15 15:00:00",
            // "last_date" => "2023-05-16 18:00:00",
            // "created_at" => "2023-05-15 15:00:00",
            // "updated_at" => "2023-05-15 15:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de gigantografías para el Centro Pre Universitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1ov21wYjirOf5K4JUyJXi_uEiyHzBcO19/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-16 08:30:00",
            // "last_date" => "2023-05-16 18:00:00",
            // "created_at" => "2023-05-16 08:30:00",
            // "updated_at" => "2023-05-16 08:30:00"
            // ]
            // ,[
            // "description" => "Contratación del Servicio de elaboración de contenido digital para las redes sociales y ejecución de la campaña digital para el Centro de Idiomas de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1bZNLR5IBqHU5fc28t11J1xV5mKZS9D2T/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-16 08:30:00",
            // "last_date" => "2023-05-16 15:00:00",
            // "created_at" => "2023-05-16 08:30:00",
            // "updated_at" => "2023-05-16 08:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 01 TECLADO KEYBOARD, 01 TECLADO KEYBOARD CON PUERTO USB, para la Escuela Profesional de Administración de Turismo y Hotelería de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1HFtEvokRf4GTCreBsugGi-yN8eMm0o1I/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-16 09:00:00",
            // "last_date" => "2023-05-22 12:00:00",
            // "created_at" => "2023-05-16 09:00:00",
            // "updated_at" => "2023-05-16 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de bienes para la implementación del Laboratorio de Cultivo in vitro de Tejidos Vegetales del Centro Internacional de Investigación para la Sustentabilidad (CIIS) de la Universidad Nacional de Cañete – Sede Lunahuaná como parte de la investigación formativa.",
            // "url_pdf" => "https://drive.google.com/file/d/1e_aa6JdqPMu_DfO_4JCEHWWnELfPGY_U/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-16 09:00:00",
            // "last_date" => "2023-05-16 18:00:00",
            // "created_at" => "2023-05-16 09:00:00",
            // "updated_at" => "2023-05-16 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de apoyo Informático de las plataformas de investigación en la Vicepresidencia de Investigación.",
            // "url_pdf" => "https://drive.google.com/file/d/1eXy5ykBxx2zotUli30DDzWYLUjzJVsK4/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-16 13:00:00",
            // "last_date" => "2023-05-17 12:00:00",
            // "created_at" => "2023-05-16 13:00:00",
            // "updated_at" => "2023-05-16 13:00:00"
            // ]
            // ,[
            // "description" => "“Contratación de Servicio de Docencia para enseñanza del Idioma Ingles”",
            // "url_pdf" => "https://drive.google.com/file/d/1BtunoUHqf8KMyuVb1Kv4TbF0Gwh3iAFk/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-16 13:00:00",
            // "last_date" => "2023-05-18 13:30:00",
            // "created_at" => "2023-05-16 13:00:00",
            // "updated_at" => "2023-05-16 13:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio para la preparación de 2 hectáreas de terreno para la siembra de cultivo de maíz del campo experimental de la Escuela Profesional de Agronomía de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1bXOKR73B1zZMzhSbkpIXE26ZYi_MXvVg/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-16 16:00:00",
            // "last_date" => "2023-05-17 13:00:00",
            // "created_at" => "2023-05-16 16:00:00",
            // "updated_at" => "2023-05-16 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Especialista para la gestión, coordinación administrativa y financiera de proyectos de investigación para la Vicepresidencia de Investigación.",
            // "url_pdf" => "https://drive.google.com/file/d/1U73XLMq2n-a8tsvuugs6xUiEeFB9QJl0/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-16 16:00:00",
            // "last_date" => "2023-05-17 13:00:00",
            // "created_at" => "2023-05-16 16:00:00",
            // "updated_at" => "2023-05-16 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CONTROL PREVIO Y REVISION DE DOCUMENTOS ADMINISTRATIVOS.",
            // "url_pdf" => "https://drive.google.com/file/d/1NpbUo8RPYV80kzvlEVs9quEBJbL1bCme/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 12:00:00",
            // "last_date" => "2023-05-18 10:00:00",
            // "created_at" => "2023-05-17 12:00:00",
            // "updated_at" => "2023-05-17 12:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y EJECUCION DE CUADRO DE NECESIDADES",
            // "url_pdf" => "https://drive.google.com/file/d/18NI7DVfzVxvg5HOTP0MIewMYDrFqehVQ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 12:00:00",
            // "last_date" => "2023-05-18 10:00:00",
            // "created_at" => "2023-05-17 12:00:00",
            // "updated_at" => "2023-05-17 12:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de apoyo Informático de las plataformas de investigación en la Vicepresidencia de Investigación.",
            // "url_pdf" => "https://drive.google.com/file/d/1RWsaxqOeKXDkFmhSH9u_mlVpR7mfaJHg/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 12:00:00",
            // "last_date" => "2023-05-19 13:00:00",
            // "created_at" => "2023-05-17 12:00:00",
            // "updated_at" => "2023-05-17 12:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO GESTION DE TESORERIA GUBERNAMENTAL",
            // "url_pdf" => "https://drive.google.com/file/d/1yCbUrsnZSpfNwQ6zyFFejXyL61-BKZcl/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 15:00:00",
            // "last_date" => "2023-05-18 10:00:00",
            // "created_at" => "2023-05-17 15:00:00",
            // "updated_at" => "2023-05-17 15:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE 01 EQUIPO MULTIFUNCIONAL COPIADORA IMPRESORA SCANNER, PARA LA ESCUELA PROFESIONAL DE ADMINISTRACIÓN DE TURISMO Y HOTELERÍA DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/10vlvEhe5ssGrvgh1G36Ma_YZvMkTBO4O/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 15:00:00",
            // "last_date" => "2023-05-18 18:00:00",
            // "created_at" => "2023-05-17 15:00:00",
            // "updated_at" => "2023-05-17 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CONTROL PREVIO EN EL SECTOR PÚBLICO",
            // "url_pdf" => "https://drive.google.com/file/d/1OZi-72juyZCwnXRqhFsi7k17A9ADedtS/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 15:30:00",
            // "last_date" => "2023-05-18 10:00:00",
            // "created_at" => "2023-05-17 15:30:00",
            // "updated_at" => "2023-05-17 15:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de una pizarra acrílica para la Escuela Profesional de Agronomía de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1Z9NvXCiSPUr0kuCV6PBeK2JWOxOH0x8x/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 14:00:00",
            // "last_date" => "2023-05-18 18:00:00",
            // "created_at" => "2023-05-17 14:00:00",
            // "updated_at" => "2023-05-17 14:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Docencia para enseñanza del Idioma Ingles",
            // "url_pdf" => "https://drive.google.com/file/d/1jlZImDKLxtB-KDwLMTKNpYemmy2_MCNu/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 16:00:00",
            // "last_date" => "2023-05-18 17:00:00",
            // "created_at" => "2023-05-17 16:00:00",
            // "updated_at" => "2023-05-17 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Impresión de 100 ejemplares del “Manual del programa de emprendimiento Millennial 2.0”.",
            // "url_pdf" => "https://drive.google.com/file/d/1K-coxGmHeJEiA5B8jBoFl8fdVCa9_y21/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 16:00:00",
            // "last_date" => "2023-05-18 16:00:00",
            // "created_at" => "2023-05-17 16:00:00",
            // "updated_at" => "2023-05-17 16:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de lavaderos de acero inoxidable para la implementación del Instituto de Investigación, los Laboratorios del Centro Internacional de Investigación para la Sustentabilidad (CIIS) de la Universidad Nacional de Cañete – Sede Lunahuaná.",
            // "url_pdf" => "https://drive.google.com/file/d/11ON3hSiiGB1I8PsOSlOOxj67vaROCweb/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 18:00:00",
            // "last_date" => "2023-05-18 18:00:00",
            // "created_at" => "2023-05-17 18:00:00",
            // "updated_at" => "2023-05-17 18:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Impresión de 50 ejemplares del “Manual de Planeamiento estratégico flexible para el manejo financiero de las Mypes” en Castellano.",
            // "url_pdf" => "https://drive.google.com/file/d/1G9u5lw0qIUijIWDIwYVqRZjlXwbOYB-m/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 17:00:00",
            // "last_date" => "2023-05-18 15:00:00",
            // "created_at" => "2023-05-17 17:00:00",
            // "updated_at" => "2023-05-17 17:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Impresión del 50 ejemplares del “Manual de Planeamiento estratégico flexible para el manejo financiero de las Mypes” en Quechua.",
            // "url_pdf" => "https://drive.google.com/file/d/1Sp6C_5_ED7hGN6PDiFMzPQzNQceraxqJ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 17:00:00",
            // "last_date" => "2023-05-18 16:00:00",
            // "created_at" => "2023-05-17 17:00:00",
            // "updated_at" => "2023-05-17 17:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento correctivo y preventivo de equipos para el laboratorio de química, sanidad vegetal, suelos y topografía, fitomejoramiento y semillas, de la Escuela Profesional de Agronomía de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1SgPsd0-VLoEwDQYSg_LuDt8lW4GI3Vw5/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 17:00:00",
            // "last_date" => "2023-05-18 16:00:00",
            // "created_at" => "2023-05-17 17:00:00",
            // "updated_at" => "2023-05-17 17:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de atriles de melamina para docentes del Centro de Idiomas y Centro Preuniversitario de la Universidad Nacional de Cañete - VERSION 02",
            // "url_pdf" => "https://drive.google.com/file/d/18h1OmtLmw2ZFlTLAEz5iETpHBL4UrEUX/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 18:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-17 18:00:00",
            // "updated_at" => "2023-05-17 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 5",
            // "url_pdf" => "https://drive.google.com/file/d/1IiL79xESqgDzBNNigczENoJteG3f8rZE/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 18:00:00",
            // "last_date" => "2023-05-18 18:00:00",
            // "created_at" => "2023-05-17 18:00:00",
            // "updated_at" => "2023-05-17 18:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 01 ARMARIO MELAMINE 02 PUERTAS, para la Escuela Profesional de Administración de Turismo y Hotelería de la UNDC. - VERSION 02",
            // "url_pdf" => "https://drive.google.com/file/d/1c2bRyJZ4YZx8ojuGXT4e0pdkv6yp_f5c/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 18:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-17 18:00:00",
            // "updated_at" => "2023-05-17 18:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de Pizarras Acrílicas para el Centro de Idiomas y Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1Xm01YiT5gFNi7i4WgdOjl934zPcWg1-5/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-17 18:00:00",
            // "last_date" => "2023-05-22 10:30:00",
            // "created_at" => "2023-05-17 18:00:00",
            // "updated_at" => "2023-05-17 18:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1xv6a6QzFk_8AKejfUE4oTLtdMqxEd5Wn/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 10:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-18 10:00:00",
            // "updated_at" => "2023-05-18 10:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1YNS6YRH2TIdgcPc7tN_aBvlTJN_z_mLb/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 10:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-18 10:00:00",
            // "updated_at" => "2023-05-18 10:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/190H18z4IxZKJlhpJ9FHnTid-4I7WWqEV/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 10:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-18 10:00:00",
            // "updated_at" => "2023-05-18 10:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1YElktaTmOH0iEjigxAeO6MVuuvzV1rdb/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 10:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-18 10:00:00",
            // "updated_at" => "2023-05-18 10:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1JKx7u2n1OM5Dscgc0Rbugd5OeOWplnlV/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 10:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-18 10:00:00",
            // "updated_at" => "2023-05-18 10:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1oiMRRoP1K7r9JMygfXAk2dk8w9CmATay/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 10:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-18 10:00:00",
            // "updated_at" => "2023-05-18 10:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1nB3hJ7yGH7Y5JVZP6NRegQfMlgYjoFn6/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 10:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-18 10:00:00",
            // "updated_at" => "2023-05-18 10:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1lCpmyPeWFRR-MBJITT3HAY94OWJNZagH/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 10:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-18 10:00:00",
            // "updated_at" => "2023-05-18 10:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1yxXOY8uhbR5cMvpOhGoPK8UEAf7ydI-S/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 10:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-18 10:00:00",
            // "updated_at" => "2023-05-18 10:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1Q-PVoVHmx_IRVGaOwCfPS_VUJ1gHJVZq/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 10:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-18 10:00:00",
            // "updated_at" => "2023-05-18 10:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/18_vuO2biuPzQZeEZMTjxPrfrlWRN2ei-/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 10:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-18 10:00:00",
            // "updated_at" => "2023-05-18 10:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1zUlsvNtmGyrGfUO4azHeUCCzkGDoju5X/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 10:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-18 10:00:00",
            // "updated_at" => "2023-05-18 10:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1FK33jQTQFqxfSEi3M8aHZdurR7dmbiAC/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 10:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-18 10:00:00",
            // "updated_at" => "2023-05-18 10:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1isuysiw1esrb5Ece1vhBFnINLh-Zf7t2/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 10:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-18 10:00:00",
            // "updated_at" => "2023-05-18 10:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1di2qy6Zw2NIQLbStnI_htILBY7YCfm5t/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 10:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-18 10:00:00",
            // "updated_at" => "2023-05-18 10:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACIÓN DEL SERVICIO DE ASISTENCIA TÉCNICA ESPECIALIZADA EN PROCESOS ADMINISTRATIVOS DISCIPLINARIOS – PAD EN LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1htCEHntqcP20CJH23AnSuv03HCySyi5s/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 12:30:00",
            // "last_date" => "2023-05-23 18:00:00",
            // "created_at" => "2023-05-18 12:30:00",
            // "updated_at" => "2023-05-18 12:30:00"
            // ]
            // ,[
            // "description" => "“Servicio de seguimiento y monitoreo de actividades de la Dirección de Responsabilidad Social Universitaria”",
            // "url_pdf" => "https://drive.google.com/file/d/1TW_-Kt7X_U22c0Jd4ZSxYAsIPtdt0vRQ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 13:00:00",
            // "last_date" => "2023-05-19 10:00:00",
            // "created_at" => "2023-05-18 13:00:00",
            // "updated_at" => "2023-05-18 13:00:00"
            // ]
            // ,[
            // "description" => "“Contratación de Servicio de Docencia para enseñanza del Idioma Ingles”",
            // "url_pdf" => "https://drive.google.com/file/d/1RwC_S4RAmli2nXTyj84avHrFjYIg_mtp/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-18 13:00:00",
            // "last_date" => "2023-05-19 10:00:00",
            // "created_at" => "2023-05-18 13:00:00",
            // "updated_at" => "2023-05-18 13:00:00"
            // ]
            // ,[
            // "description" => "“Servicio de Actualización de Plataforma Virtual y Página Web”",
            // "url_pdf" => "https://drive.google.com/file/d/1RB4-CALJnkoMxxRMcWp5HrYR8PewVHY6/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-19 08:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-19 08:00:00",
            // "updated_at" => "2023-05-19 08:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de apoyo Informático de las plataformas de investigación en la Dirección de la Unidad de Investigación de la Facultad de Ciencias Empresariales.",
            // "url_pdf" => "https://drive.google.com/file/d/1stbsWZ4MAhYHdOVgdYtKl4O6Eg5dKS49/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-19 08:30:00",
            // "last_date" => "2023-05-19 16:00:00",
            // "created_at" => "2023-05-19 08:30:00",
            // "updated_at" => "2023-05-19 08:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de apoyo Informático de las plataformas de investigación en la Dirección de la Unidad de Investigación de la Facultad de Agronomía y la Dirección de la Unidad de Investigación de la Facultad de Ingeniería.",
            // "url_pdf" => "https://drive.google.com/file/d/1RLuwql0uNXNKG_IjZL5HdJfu6P4tGh4Z/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-19 08:30:00",
            // "last_date" => "2023-05-19 16:00:00",
            // "created_at" => "2023-05-19 08:30:00",
            // "updated_at" => "2023-05-19 08:30:00"
            // ]
            // ,[
            // "description" => "“Servicio de Desarrollo de Sistemas Web”",
            // "url_pdf" => "https://drive.google.com/file/d/14qLCLqY4q8cQzhhIQ7wYJ3pBMTx-4ZN0/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-19 12:30:00",
            // "last_date" => "2023-05-22 10:30:00",
            // "created_at" => "2023-05-19 12:30:00",
            // "updated_at" => "2023-05-19 12:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 44 Porta Diplomas para los Titulados de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/15Li7npcHB-4xIKlm--GIusErH7slCEUc/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-19 14:00:00",
            // "last_date" => "2023-05-22 12:00:00",
            // "created_at" => "2023-05-19 14:00:00",
            // "updated_at" => "2023-05-19 14:00:00"
            // ]
            // ,[
            // "description" => "Servicio de una capacitación en el “CURSO DE ESPECIALIZACION EN INFORMATICA AMBIENTE WEB” ",
            // "url_pdf" => "https://drive.google.com/file/d/1lv3MV90YzPlouTdIYpVpHL0wr2KNDd5r/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-19 15:00:00",
            // "last_date" => "2023-05-22 14:00:00",
            // "created_at" => "2023-05-19 15:00:00",
            // "updated_at" => "2023-05-19 15:00:00"
            // ]
            // ,[
            // "description" => "Servicio de una capacitación en el “CURSO TECNOLOGÍAS DE REDES LAN Y REDES MAN INALÁMBRICAS”",
            // "url_pdf" => "https://drive.google.com/file/d/1wa8dFtQOq7ulmVxgRaiLsVadgYyUMUDJ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-19 15:00:00",
            // "last_date" => "2023-05-24 08:00:00",
            // "created_at" => "2023-05-19 15:00:00",
            // "updated_at" => "2023-05-19 15:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE TRAJES DE CORO PARA EL TALLER DE MUSICA",
            // "url_pdf" => "https://drive.google.com/file/d/1d_32Mlo90naH39Hv2p2gawiR4SuuQoY_/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-19 18:00:00",
            // "last_date" => "2023-05-30 18:00:00",
            // "created_at" => "2023-05-19 18:00:00",
            // "updated_at" => "2023-05-19 18:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE ALIMENTOS Y BEBIDAS PARA CONSUMO HUMANO",
            // "url_pdf" => "https://drive.google.com/file/d/1UtPwX704jy9FOKaRu4o8ngJfPOxWB0x0/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-19 18:00:00",
            // "last_date" => "2023-05-26 16:30:00",
            // "created_at" => "2023-05-19 18:00:00",
            // "updated_at" => "2023-05-19 18:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ATENCIÓN Y ORIENTACIÓN AL PÚBLICO SOBRE CONSULTAS DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/11s6enF6iWVkIx-MRHgtPTGx3gQ_5qF02/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-19 18:00:00",
            // "last_date" => "2023-05-22 10:00:00",
            // "created_at" => "2023-05-19 18:00:00",
            // "updated_at" => "2023-05-19 18:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE REDISEÑO Y ELABORACIÓN DEL MODELO EDUCATIVO DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/17VO2V5-W5MNg8nU9dHdj1EfGkh6Rn-3P/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-22 08:30:00",
            // "last_date" => "2023-05-24 10:00:00",
            // "created_at" => "2023-05-22 08:30:00",
            // "updated_at" => "2023-05-22 08:30:00"
            // ]
            // ,[
            // "description" => "Servicio de curso en proyectos de Aprendizaje-servicio en la Educación Superior.",
            // "url_pdf" => "https://drive.google.com/file/d/1vGiMDnaygs7WyVcW_o2fjNFFF6zbfQJX/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-22 10:00:00",
            // "last_date" => "2023-05-26 10:00:00",
            // "created_at" => "2023-05-22 10:00:00",
            // "updated_at" => "2023-05-22 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento preventivo y correctivo de la unidad de transporte de placa EGO-731 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1HnIOxjs4XsphWo8rEHlzdbqEGwcw5kYx/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-22 11:00:00",
            // "last_date" => "2023-05-25 18:00:00",
            // "created_at" => "2023-05-22 11:00:00",
            // "updated_at" => "2023-05-22 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE INTERNET DE BANDA ANCHA DEDICADO PARA EL CENTRO DE INVESTIGACIÓN PARA LA SUSTENTABILIDAD LUNAHUANÁ, EL LOCAL ADMINISTRATIVO CENTRAL, EL LOCAL HUALCARÁ Y LOS LOCALES ACADÉMICOS CASA DE LA CULTURA, CNI Y EL LOCAL FUNDO DON LUIS DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1DcTiy27gxFQiYJ9zPx_3wFdfXsxNO-mv/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-22 15:00:00",
            // "last_date" => "2023-05-24 18:00:00",
            // "created_at" => "2023-05-22 15:00:00",
            // "updated_at" => "2023-05-22 15:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de profesional en ingeniería para la ejecución del plan de mantenimiento de la Universidad Nacional de Cañete 2023.",
            // "url_pdf" => "https://drive.google.com/file/d/1yTF4-H8ggZX1OV3Y6UGaGAzJ2ycipL7u/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-22 17:30:00",
            // "last_date" => "2023-05-23 13:00:00",
            // "created_at" => "2023-05-22 17:30:00",
            // "updated_at" => "2023-05-22 17:30:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE SEGUIMIENTO Y MONITOREO DE ACTIVIDADES DE GESTION Y/O ADMINISTRATIVAS DE LA ESCUELA PROFESIONAL DE ADMINISTRACION.",
            // "url_pdf" => "https://drive.google.com/file/d/1WvDHzAPp1HS61pVLNKJij2HW1KpKkBNa/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-22 18:00:00",
            // "last_date" => "2023-05-23 10:00:00",
            // "created_at" => "2023-05-22 18:00:00",
            // "updated_at" => "2023-05-22 18:00:00"
            // ]
            // ,[
            // "description" => "Servicio de una capacitación en el “CURSO DE ESPECIALIZACION EN INFORMATICA AMBIENTE WEB”",
            // "url_pdf" => "https://drive.google.com/file/d/12-TYch-NZJPA5w_3ggl8QWhhX2ju5rp1/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-23 17:00:00",
            // "last_date" => "2023-05-24 12:00:00",
            // "created_at" => "2023-05-23 17:00:00",
            // "updated_at" => "2023-05-23 17:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ANÁLISIS DE VULNERABILIDAD DE LOS SERVICIOS DE TECNOLOGÍAS CRÍTICOS IDENTIFICADOS EN EL MARCO DE LA CONFIANZA Y SEGURIDAD DIGITAL PARA LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1o3c0h8FcgnqF1WS7c1jH8P3QhZLjfpxO/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-24 11:00:00",
            // "last_date" => "2023-05-24 15:00:00",
            // "created_at" => "2023-05-24 11:00:00",
            // "updated_at" => "2023-05-24 11:00:00"
            // ]
            // ,[
            // "description" => "Servicio de asistencia académica y administrativa para la Dirección de Gestión Académica de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1TmUUTCZmypJ0e-skkotPEv-KFeODE3yA/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-24 12:00:00",
            // "last_date" => "2023-05-24 17:00:00",
            // "created_at" => "2023-05-24 12:00:00",
            // "updated_at" => "2023-05-24 12:00:00"
            // ]
            // ,[
            // "description" => "Contratación de un profesional para la formulación de propuestas de remodelación de las oficinas del Local Administrativo Central de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1xJMneVi_HGwoKyi7E5rKFLjuMVe1MKXq/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-24 12:00:00",
            // "last_date" => "2023-05-26 15:00:00",
            // "created_at" => "2023-05-24 12:00:00",
            // "updated_at" => "2023-05-24 12:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO PROFESIONAL DE LICENCIADA EN ENFERMERIA",
            // "url_pdf" => "https://drive.google.com/file/d/1MXeEeFfqqC0Xyswz40bOoO0-Ydy7QzUb/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-24 17:30:00",
            // "last_date" => "2023-05-25 17:00:00",
            // "created_at" => "2023-05-24 17:30:00",
            // "updated_at" => "2023-05-24 17:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y EVALUACIÓN DE LA ASIGNACIÓN Y EJECUCIÓN PRESUPUESTAL DE LA DIRECCIÓN DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1Jl-MiRpoOnC0kLMCXq5TjgLUjHUSnEnc/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-24 18:00:00",
            // "last_date" => "2023-05-25 10:00:00",
            // "created_at" => "2023-05-24 18:00:00",
            // "updated_at" => "2023-05-24 18:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO SOBRE EL CLIMA EMOCIONAL Y RENDIMIENTO LABORAL",
            // "url_pdf" => "https://drive.google.com/file/d/1QfXBp_L_Px_fgGSCHU9bP1zyRjEvN8bV/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-25 08:30:00",
            // "last_date" => "2023-05-25 18:00:00",
            // "created_at" => "2023-05-25 08:30:00",
            // "updated_at" => "2023-05-25 08:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO DIPLOMADO ESPECIALIZADO EN SALUD OCUPACIONAL",
            // "url_pdf" => "https://drive.google.com/file/d/1A2vUpY5OhshIHslD8BrGJMZRVfEIZuHE/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-25 08:30:00",
            // "last_date" => "2023-05-25 18:00:00",
            // "created_at" => "2023-05-25 08:30:00",
            // "updated_at" => "2023-05-25 08:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO DIPLOMADO ESPECIALIZADO DE REDACCIÓN EN DOCUMENTOS OFICIALES EN LA GESTIÓN PÚBLICA.",
            // "url_pdf" => "https://drive.google.com/file/d/1MbkL7naumyqF1bd2wxx6xcv45H1Jc4VF/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-25 08:30:00",
            // "last_date" => "2023-05-25 18:00:00",
            // "created_at" => "2023-05-25 08:30:00",
            // "updated_at" => "2023-05-25 08:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 6",
            // "url_pdf" => "https://drive.google.com/file/d/1y8MW1VTVfEGN2q3HeiEbtEVonKUo1mDJ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-25 08:30:00",
            // "last_date" => "2023-05-25 15:00:00",
            // "created_at" => "2023-05-25 08:30:00",
            // "updated_at" => "2023-05-25 08:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Especialista en vehículos(Residente) para la ejecución del IOARR: “ADQUISICIÓN DE VEHÍCULO; EN EL(LA) UNIDAD DE SERVICIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN VICENTE DE CAÑETE, PROVINCIA CAÑETE, DEPARTAMENTO LIMA”, con Código Único de Inversión 2571526.",
            // "url_pdf" => "https://drive.google.com/file/d/1WQWZPFElKLngZNfuS6vqqFsA3rTmKEIS/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-25 10:00:00",
            // "last_date" => "2023-05-29 12:00:00",
            // "created_at" => "2023-05-25 10:00:00",
            // "updated_at" => "2023-05-25 10:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Supervisión para la ejecución del IOARR : “ADQUISICIÓN DE VEHÍCULO; EN EL(LA) UNIDAD DE SERVICIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN VICENTE DE CAÑETE, PROVINCIA CAÑETE, DEPARTAMENTO LIMA”, con Código Único de Inversión 2571526.",
            // "url_pdf" => "https://drive.google.com/file/d/1UWb5hnempKIyQrAwng4Eb-AedSYCgmBF/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-25 10:00:00",
            // "last_date" => "2023-05-26 18:00:00",
            // "created_at" => "2023-05-25 10:00:00",
            // "updated_at" => "2023-05-25 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de una pizarra acrílica para la Escuela Profesional de Agronomía de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1Z9NvXCiSPUr0kuCV6PBeK2JWOxOH0x8x/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-25 12:00:00",
            // "last_date" => "2023-05-26 09:00:00",
            // "created_at" => "2023-05-25 12:00:00",
            // "updated_at" => "2023-05-25 12:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UN SURTIDOR DE AGUA ELECTRICO - DISPENSADOR ELECTRICO AGUA CALIENTE - HELADA - TEMPERADA PARA LA UNIDAD DE INVESTIGACIÓN DE LA FACULTAD DE CIENCIAS EMPRESARIALES",
            // "url_pdf" => "https://drive.google.com/file/d/1FoqaEys-LMsAHQouFLIcI2N23phbUKyL/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-26 09:00:00",
            // "last_date" => "2023-05-29 10:00:00",
            // "created_at" => "2023-05-26 09:00:00",
            // "updated_at" => "2023-05-26 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento correctivo de la unidad de transporte de placa EGO-950 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1wvuPMD7NvgAaDo9W3HCCp9Nq5eYMHGju/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-26 09:00:00",
            // "last_date" => "2023-05-29 12:00:00",
            // "created_at" => "2023-05-26 09:00:00",
            // "updated_at" => "2023-05-26 09:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACIÓN DEL SERVICIO DE ASISTENCIA TÉCNICA ESPECIALIZADA EN PROCESOS ADMINISTRATIVOS DISCIPLINARIOS – PAD EN LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1iSIDvspwA_Ej5Umgh7Sl4eB6Y43TcnJ7/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-26 09:00:00",
            // "last_date" => "2023-05-26 15:00:00",
            // "created_at" => "2023-05-26 09:00:00",
            // "updated_at" => "2023-05-26 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ENSEÑANZA DE VOLEY",
            // "url_pdf" => "https://drive.google.com/file/d/1seNvKSUkAFsYRoJEaJLItyBZ1-l86Div/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-26 09:00:00",
            // "last_date" => "2023-05-30 10:00:00",
            // "created_at" => "2023-05-26 09:00:00",
            // "updated_at" => "2023-05-26 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA Y MATERIAL DIDACTICO PARA EL DEPARTAMENTO ACADÉMICO DE INGENIERÍA DE SISTEMAS DE LA UNDC. V2",
            // "url_pdf" => "https://drive.google.com/file/d/1pu12hF8jZRQEoO46BVvp2s7uBxvPPEn4/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-26 09:00:00",
            // "last_date" => "2023-05-29 18:00:00",
            // "created_at" => "2023-05-26 09:00:00",
            // "updated_at" => "2023-05-26 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de Útiles de Oficina para la Dirección de Gestión Académica V1",
            // "url_pdf" => "https://drive.google.com/file/d/1iXQMu-rpNdGpRaosMsiqbfzdGUhZ8djc/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-26 09:00:00",
            // "last_date" => "2023-05-29 18:00:00",
            // "created_at" => "2023-05-26 09:00:00",
            // "updated_at" => "2023-05-26 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIAL DIDACTICO, ACCESORIOS Y UTILES DE ENSEÑANZA PARA EL DEPARTAMENTO ACADEMICO DE ADMINISTRACION LA UNDC V1",
            // "url_pdf" => "https://drive.google.com/file/d/182Vz1_qqG5zegOWch4Hw9QWkDqy-hkhZ/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-26 09:00:00",
            // "last_date" => "2023-05-29 18:00:00",
            // "created_at" => "2023-05-26 09:00:00",
            // "updated_at" => "2023-05-26 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de útiles de escritorio para la Unidad de Investigación de Agronomía de la UNDC. V1",
            // "url_pdf" => "https://drive.google.com/file/d/12wY782AxFzUPv4l5074-M6FBvtft0Vc4/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-26 09:00:00",
            // "last_date" => "2023-05-29 18:00:00",
            // "created_at" => "2023-05-26 09:00:00",
            // "updated_at" => "2023-05-26 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de suscripción anual de Identificador de Objetos Digitales (DOI) para la Revista de Investigación Cañetana de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1pAJmupzUZPpulmc9Mm-x_osMk-uvIQmj/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-26 13:00:00",
            // "last_date" => "2023-05-29 18:00:00",
            // "created_at" => "2023-05-26 13:00:00",
            // "updated_at" => "2023-05-26 13:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de materiales de limpieza para el Centro Pre Universitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1yJaHJgI4Axj3czDNyBFzVyGds1okCEql/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-26 17:00:00",
            // "last_date" => "2023-05-29 11:00:00",
            // "created_at" => "2023-05-26 17:00:00",
            // "updated_at" => "2023-05-26 17:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA OFICINA DE COOPERACIÓN Y RELACIONES INTERNACIONALES vs2",
            // "url_pdf" => "https://drive.google.com/file/d/1JruNr3RY7UDKzV23kT0hugBoBGhRDI2s/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-26 17:00:00",
            // "last_date" => "2023-05-29 18:00:00",
            // "created_at" => "2023-05-26 17:00:00",
            // "updated_at" => "2023-05-26 17:00:00"
            // ]
            // ,[
            // "description" => "“Servicio de gestión de actividades del medio ambiente, para la Dirección de Responsabilidad Social Universitaria”",
            // "url_pdf" => "https://drive.google.com/file/d/1JFs2NvuYrO_8ss-LsmiKtMgMWwUpDTIL/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-26 18:30:00",
            // "last_date" => "2023-06-07 18:00:00",
            // "created_at" => "2023-05-26 18:30:00",
            // "updated_at" => "2023-05-26 18:30:00"
            // ]
            // ,[
            // "description" => "“Servicio de soporte informático para actividades de la Dirección de Responsabilidad Social Universitaria”",
            // "url_pdf" => "https://drive.google.com/file/d/18NLsuTMY7T23EIZF9wQznwDKkvEq62JH/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-29 15:30:00",
            // "last_date" => "2023-05-30 10:00:00",
            // "created_at" => "2023-05-29 15:30:00",
            // "updated_at" => "2023-05-29 15:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 04 bidones de Agua de Mesa sin gas x 20 L para la Escuela Profesional de Administración de Turismo y Hotelería de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1vN6U6fSf-UP1e9qm1DZl_zr6irggBAec/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-29 15:30:00",
            // "last_date" => "2023-05-31 18:00:00",
            // "created_at" => "2023-05-29 15:30:00",
            // "updated_at" => "2023-05-29 15:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de alquiler de inmueble para el funcionamiento de oficinas y unidades administrativas de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1jOnysd7RIjx0bKxGGgzrfFfFQQXFZwEt/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-29 16:00:00",
            // "last_date" => "2023-05-30 18:00:00",
            // "created_at" => "2023-05-29 16:00:00",
            // "updated_at" => "2023-05-29 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de alquiler de inmueble para el funcionamiento de oficinas y unidades administrativas de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1jOnysd7RIjx0bKxGGgzrfFfFQQXFZwEt/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-29 16:00:00",
            // "last_date" => "2023-05-30 18:00:00",
            // "created_at" => "2023-05-29 16:00:00",
            // "updated_at" => "2023-05-29 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de alquiler de aulas y una oficina administrativa para el funcionamiento del Centro Preuniversitario y Centro de Idiomas de la Dirección de Servicios Educativos de Extensión de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1OZMXVQpLg2B2C0lQ0lK48gi52ngAMG4T/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-29 16:00:00",
            // "last_date" => "2023-05-30 18:00:00",
            // "created_at" => "2023-05-29 16:00:00",
            // "updated_at" => "2023-05-29 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ENSEÑANZA DE AJEDREZ",
            // "url_pdf" => "https://drive.google.com/file/d/18V257uvdYG9_1hbw3rQSjHZFf4_1swau/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-30 09:30:00",
            // "last_date" => "2023-05-31 13:00:00",
            // "created_at" => "2023-05-30 09:30:00",
            // "updated_at" => "2023-05-30 09:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE REDISEÑO DEL PLAN CURRICULAR DE PROGRAMAS DE ESTUDIOS DE LA ESCUELA PROFESIONAL DE ADMINISTRTACION DE TURISMO Y HOTELERIA -UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1lC1DUqHV_TMn5N5Rl5ZGbsPKdfZhMNo1/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-30 11:30:00",
            // "last_date" => "2023-06-06 18:00:00",
            // "created_at" => "2023-05-30 11:30:00",
            // "updated_at" => "2023-05-30 11:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de apoyo Informático de las plataformas de investigación en la Dirección de la Unidad de Investigación de la Facultad de Ciencias Empresariales.",
            // "url_pdf" => "https://drive.google.com/file/d/1HRhxPgZh9JcnTD9LnaeW3tWDHqlN7x83/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-30 11:30:00",
            // "last_date" => "2023-05-31 12:00:00",
            // "created_at" => "2023-05-30 11:30:00",
            // "updated_at" => "2023-05-30 11:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de cochera para las unidades de transporte (buses) de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1JL2Zs93ebg278ICNaGqXlCGYQXGLifWq/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-30 11:30:00",
            // "last_date" => "2023-05-31 12:00:00",
            // "created_at" => "2023-05-30 11:30:00",
            // "updated_at" => "2023-05-30 11:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de mantel de paño 2.00 m x 4.00 m, para la Unidad de Investigación de la Facultad de Ciencias Empresariales de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1z65taZk2XpZV5o6YjoGp6OyVxfknx_ZG/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-30 11:30:00",
            // "last_date" => "2023-08-23 10:30:00",
            // "created_at" => "2023-05-30 11:30:00",
            // "updated_at" => "2023-05-30 11:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE PLACA PORTA NOMBRE DE ACRILICO PARA LA UNIDAD DE INVESTIGACIÓN DE LA FACULTAD DE CIENCIAS EMPRESARIALES",
            // "url_pdf" => "https://drive.google.com/file/d/1BW40nYdmmCNvyuFzLEWSF4_NVUUi3G-P/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-30 11:30:00",
            // "last_date" => "2023-06-09 09:00:00",
            // "created_at" => "2023-05-30 11:30:00",
            // "updated_at" => "2023-05-30 11:30:00"
            // ]
            // ,[
            // "description" => "“SERVICIO DE UN ESPECIALISTA PARA LA EVALUACIÓN Y DIAGNÓSTICO SITUACIONAL DE LAS CAPACIDADES DE SOPORTE TECNOLÓGICO, QUE OFRECE LA UNIVERSIDAD NACIONAL DE CAÑETE”",
            // "url_pdf" => "https://drive.google.com/file/d/1I5bOyfeVxQv0qRZ7SEfrburIMiz5rZFA/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-30 13:00:00",
            // "last_date" => "2023-06-01 13:00:00",
            // "created_at" => "2023-05-30 13:00:00",
            // "updated_at" => "2023-05-30 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO ESPECIALIZADO REDACCION DE DOCUMENTOS ADMINISTRATIVOS EN LA GESTION PUBLICA",
            // "url_pdf" => "https://drive.google.com/file/d/1nu0ooW70LBsq-MfFwzbUdLPKkJ7DYRHx/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-30 16:00:00",
            // "last_date" => "2023-05-31 18:00:00",
            // "created_at" => "2023-05-30 16:00:00",
            // "updated_at" => "2023-05-30 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y MONITOREO DE ACTIVIDADES DE GESTION Y/O ADMINISTRATIVAS",
            // "url_pdf" => "",
            // "user_id" => 1,
            // "start_date" => "2023-05-30 16:00:00",
            // "last_date" => "2023-06-01 18:00:00",
            // "created_at" => "2023-05-30 16:00:00",
            // "updated_at" => "2023-05-30 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE INSCRIPCION A LA CAPACITACION EN GESTION EMPRESARIAL – CADE UNIVERSITARIO 2023.",
            // "url_pdf" => "https://drive.google.com/file/d/1s5u-G7YFHHRIvmqw9ReUTnxvjq2pssQ_/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-30 17:00:00",
            // "last_date" => "2023-06-02 10:40:00",
            // "created_at" => "2023-05-30 17:00:00",
            // "updated_at" => "2023-05-30 17:00:00"
            // ]
            // ,[
            // "description" => "Servicio de SEMINARIO VIRTUAL RELACIONADO A TEMAS DE TURISMO “CURSO: TALLER LA RESILENCIA EN MEDIO DE LA CRISIS”",
            // "url_pdf" => "https://drive.google.com/file/d/1cu8UZVUyups1iz51av6sMyU61x9s-Jbr/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-31 08:30:00",
            // "last_date" => "2023-06-01 18:00:00",
            // "created_at" => "2023-05-31 08:30:00",
            // "updated_at" => "2023-05-31 08:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 73 diplomas con caligrafiado para los graduados de la Universidad Nacional De Cañete dividido en (70 diplomas para Bachiller y 3 diplomas de Título profesional)",
            // "url_pdf" => "https://drive.google.com/file/d/1wOOjLxGjmeTNyJSk5qtYrc0JOanD5kK0/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-31 16:00:00",
            // "last_date" => "2023-06-02 09:00:00",
            // "created_at" => "2023-05-31 16:00:00",
            // "updated_at" => "2023-05-31 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y EVALUACIÓN DE LA ASIGNACIÓN Y EJECUCIÓN PRESUPUESTAL PARA LA FACULTAD DE CIENCIAS EMPRESARIALES DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1IZDdCyExOtI793quP0veI_Kyp0weD7Y8/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-05-31 16:00:00",
            // "last_date" => "2023-06-01 11:30:00",
            // "created_at" => "2023-05-31 16:00:00",
            // "updated_at" => "2023-05-31 16:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 02 MOUSE INALAMBRICOS, para el Departamento de Contabilidad de la de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1vN6U6fSf-UP1e9qm1DZl_zr6irggBAec/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-01 10:00:00",
            // "last_date" => "2023-06-06 15:00:00",
            // "created_at" => "2023-06-01 10:00:00",
            // "updated_at" => "2023-06-01 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 02 DISCOS DUROS EXTERNOS , para el Departamento de Contabilidad de la de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1AWvaPssg2tLJ1MIEdXqI9zZs65RK4Jr6/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-01 10:00:00",
            // "last_date" => "2023-06-05 10:00:00",
            // "created_at" => "2023-06-01 10:00:00",
            // "updated_at" => "2023-06-01 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 01 caja de mantenimiento de impresora EPSON L6171",
            // "url_pdf" => "https://drive.google.com/file/d/1_kUQa_EblJSkHyiZMOKG_RuzNfLo8iQ5/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-01 10:00:00",
            // "last_date" => "2023-06-05 10:00:00",
            // "created_at" => "2023-06-01 10:00:00",
            // "updated_at" => "2023-06-01 10:00:00"
            // ]
            // ,[
            // "description" => "Servicio de ANÁLISIS, REVISIÓN, SEGUIMIENTO Y ELABORACIÓN DE DOCUMENTOS para la Facultad de Ciencias Agrarias, Departamento Académico y Unidad de Investigación de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1rGnnhExYGgcidHSuYGB0_nMIRshUNkC3/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-01 17:00:00",
            // "last_date" => "2023-06-02 10:00:00",
            // "created_at" => "2023-06-01 17:00:00",
            // "updated_at" => "2023-06-01 17:00:00"
            // ]
            // ,[
            // "description" => "“Servicio Especializado en Gestión de Contrataciones Públicas para la Unidad de Abastecimiento de la UNDC”",
            // "url_pdf" => "https://drive.google.com/file/d/1Msli3jJHrd8FF-vI9PdkxY78tugu5k6B/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-01 17:30:00",
            // "last_date" => "2023-06-02 11:00:00",
            // "created_at" => "2023-06-01 17:30:00",
            // "updated_at" => "2023-06-01 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 8",
            // "url_pdf" => "https://drive.google.com/file/d/16wv9dkVLO93LcP0QsgswgbOArdmmyYSU/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-02 16:30:00",
            // "last_date" => "2023-06-05 18:00:00",
            // "created_at" => "2023-06-02 16:30:00",
            // "updated_at" => "2023-06-02 16:30:00"
            // ]
            // ,[
            // "description" => "Servicio de SEMINARIO VIRTUAL RELACIONADO A TEMAS DE TURISMO “CURSO: TALLER LA RESILENCIA EN MEDIO DE LA CRISIS”",
            // "url_pdf" => "https://drive.google.com/file/d/15y_xQhDfp2jm78bqChtNcS1XRyYGSapY/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-05 10:30:00",
            // "last_date" => "2023-06-07 08:00:00",
            // "created_at" => "2023-06-05 10:30:00",
            // "updated_at" => "2023-06-05 10:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 7",
            // "url_pdf" => "https://drive.google.com/file/d/1vjHoQwlA643-qoGN9M_6jYRaYSCRwNhW/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-05 10:30:00",
            // "last_date" => "2023-06-05 18:00:00",
            // "created_at" => "2023-06-05 10:30:00",
            // "updated_at" => "2023-06-05 10:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANTENIMIENTO DEL SISTEMA ELECTRICO DEL CENTRO INTERNACIONAL DE INVESTIGACIÓN PARA LA SUSTENTABILIDAD – LUNAHUANÁ DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/drive/folders/1KuYahV0G2gV1-4JPaBWQFiPz8OTNvRNK?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-05 13:00:00",
            // "last_date" => "2023-06-07 12:00:00",
            // "created_at" => "2023-06-05 13:00:00",
            // "updated_at" => "2023-06-05 13:00:00"
            // ]
            // ,[
            // "description" => "Servicio de una “CAPACITACIÓN EN TRANSFORMACIÓN DIGITAL” en la modalidad virtual, dirigido a los estudiantes y docentes de la Escuela Profesional de Ingeniería de Sistemas – UNDC, a efectos de ejecutar el POI – CEPLAN 2023 de la escuela programado y aprobado.",
            // "url_pdf" => "https://drive.google.com/file/d/1qCioT8B68e4LNZX7egCqQTTLh9cAYlq6/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-05 15:40:00",
            // "last_date" => "2023-06-06 17:00:00",
            // "created_at" => "2023-06-05 15:40:00",
            // "updated_at" => "2023-06-05 15:40:00"
            // ]
            // ,[
            // "description" => "Adquisición de insumos agrícolas para el desarrollo de prácticas de campo en el Fundo Tercer Mundo, en las diferentes asignaturas del semestre 2023-1, de la Escuela Profesional de Agronomía de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1WWNOW3Mo2XH83AV6pQTK8jl7_e00MxCj/view?usp=share_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-05 14:30:00",
            // "last_date" => "2023-06-06 18:00:00",
            // "created_at" => "2023-06-05 14:30:00",
            // "updated_at" => "2023-06-05 14:30:00"
            // ]
            // ,[
            // "description" => "Contratación de un profesional para la formulación de propuestas de remodelación de las oficinas del Local Administrativo Central de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1tcP87zXH7_8PguVxaJ_gBf5aOv5FkdFj/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-06 11:00:00",
            // "last_date" => "2023-06-13 18:00:00",
            // "created_at" => "2023-06-06 11:00:00",
            // "updated_at" => "2023-06-06 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de (3) armarios de melamina de 2 puertas y (5) escritorios de melamina, para la Unidad de Investigación de la Facultad de Ciencias Empresariales de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1D7Lj7v93ZkquN2u86DsI_7K5SFyPJHHq/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-06 01:00:00",
            // "last_date" => "2023-06-07 18:00:00",
            // "created_at" => "2023-06-06 01:00:00",
            // "updated_at" => "2023-06-06 01:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de equipos de protección personal y de seguridad para el personal de mantenimiento de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1gb_Bs_vVoAltez49s-XPHT6hFIsBWBj1/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-06 13:00:00",
            // "last_date" => "2023-06-08 12:00:00",
            // "created_at" => "2023-06-06 13:00:00",
            // "updated_at" => "2023-06-06 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE REDISEÑO Y ELABORACIÓN DEL MODELO EDUCATIVO DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1a4Yac3jF9Zcyljy_-ms6gmtcIAfuwHsl/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-06 15:30:00",
            // "last_date" => "2023-06-08 08:00:00",
            // "created_at" => "2023-06-06 15:30:00",
            // "updated_at" => "2023-06-06 15:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ROTULOS DE SEÑALIZACIÓN PARA LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1HTWrHao5zEUEAmCVnmL597INPXiIdonJ/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-06 15:30:00",
            // "last_date" => "2023-06-09 10:00:00",
            // "created_at" => "2023-06-06 15:30:00",
            // "updated_at" => "2023-06-06 15:30:00"
            // ]
            // ,[
            // "description" => "MANTENIMIENTO DE LOS TANQUES Y CISTERNAS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1-6R_Z_ZhD4QBs9MQ0mMCKxGn7qleHhdi/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-06 16:00:00",
            // "last_date" => "2023-06-08 12:00:00",
            // "created_at" => "2023-06-06 16:00:00",
            // "updated_at" => "2023-06-06 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE INTERNET DE BANDA ANCHA DEDICADO PARA EL CENTRO DE INVESTIGACIÓN PARA LA SUSTENTABILIDAD LUNAHUANÁ, EL LOCAL ADMINISTRATIVO CENTRAL, EL LOCAL HUALCARÁ Y LOS LOCALES ACADÉMICOS CASA DE LA CULTURA, CNI Y EL LOCAL FUNDO DON LUIS DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1kbiflwbsn6GqsI-iEA9QzPkGt-HOD02N/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-07 08:00:00",
            // "last_date" => "2023-06-07 14:00:00",
            // "created_at" => "2023-06-07 08:00:00",
            // "updated_at" => "2023-06-07 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y MONITOREO DE ACTIVIDADES DE GESTION Y/O ADMINISTRATIVAS",
            // "url_pdf" => "https://drive.google.com/file/d/1xI5KaKvHozwMBYoSLi3yoAaAJBJkyWwp/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-07 09:00:00",
            // "last_date" => "2023-06-07 16:30:00",
            // "created_at" => "2023-06-07 09:00:00",
            // "updated_at" => "2023-06-07 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO CIERRE FINANCIERO Y PRESUPUESTAL DE LOS ESTADOS FINANCIEROS, SEMESTRAL Y ANUAL.",
            // "url_pdf" => "https://drive.google.com/file/d/1Wo-lEXPou5ibeVR4T2Exmxebog82fWMF/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-07 11:00:00",
            // "last_date" => "2023-06-08 16:00:00",
            // "created_at" => "2023-06-07 11:00:00",
            // "updated_at" => "2023-06-07 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE INTERNET DE BANDA ANCHA DEDICADO PARA EL CENTRO DE INVESTIGACIÓN PARA LA SUSTENTABILIDAD LUNAHUANÁ, EL LOCAL ADMINISTRATIVO CENTRAL, EL LOCAL HUALCARÁ Y LOS LOCALES ACADÉMICOS CASA DE LA CULTURA, CNI Y EL LOCAL FUNDO DON LUIS DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1kbiflwbsn6GqsI-iEA9QzPkGt-HOD02N/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-07 08:00:00",
            // "last_date" => "2023-06-07 14:00:00",
            // "created_at" => "2023-06-07 08:00:00",
            // "updated_at" => "2023-06-07 08:00:00"
            // ]
            // ,[
            // "description" => "Servicio Especializado de Revisión de Documentos para la Unidad de Abastecimiento.",
            // "url_pdf" => "https://drive.google.com/file/d/1NBDOO0CwSJKa777OcJ-ONMEgXVx0oWm2/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-07 12:00:00",
            // "last_date" => "2023-06-07 18:00:00",
            // "created_at" => "2023-06-07 12:00:00",
            // "updated_at" => "2023-06-07 12:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DDE ENTREGAS DE DIPLOMAS DE GRADOS DE BACHILLER Y TITULOS ",
            // "url_pdf" => "https://drive.google.com/file/d/12HYTjdmtR_G_e4UboaB8G4T_a4kCVT7D/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-07 17:30:00",
            // "last_date" => "2023-06-08 14:00:00",
            // "created_at" => "2023-06-07 17:30:00",
            // "updated_at" => "2023-06-07 17:30:00"
            // ]
            // ,[
            // "description" => "SUSCRIPCION ANUAL: SISTEMA PERUANO DE INFORMACION JURIDICA 2023 (SPIJ).",
            // "url_pdf" => "https://drive.google.com/file/d/1RKdSTPxCrjjNJPtlLRkV6iQiNCUawHYj/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-08 11:00:00",
            // "last_date" => "2023-06-08 15:30:00",
            // "created_at" => "2023-06-08 11:00:00",
            // "updated_at" => "2023-06-08 11:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE (5) MOUSE INALAMBRICOS Y (2) DISCO DURO PARA LA UNIDAD DE INVESTIGACIÓN DE LA FACULTAD DE CIENCIAS EMPRESARIALES",
            // "url_pdf" => "https://drive.google.com/file/d/1n46XDl7s1FWlckb8ZOuKOXmHe_BZiEcw/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-08 17:00:00",
            // "last_date" => "2023-06-12 18:00:00",
            // "created_at" => "2023-06-08 17:00:00",
            // "updated_at" => "2023-06-08 17:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ASISTENCIA TÉCNICA EN MONITOREO Y SEGUIMIENTO EN GESTIÓN ADMINISTRATIVA DE LA FACULTAD DE INGENIERIA",
            // "url_pdf" => "https://drive.google.com/file/d/1vublJI1uwSHAsx3-iZCnY30bNuXPBJ6o/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-08 18:00:00",
            // "last_date" => "2023-06-09 12:00:00",
            // "created_at" => "2023-06-08 18:00:00",
            // "updated_at" => "2023-06-08 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 7",
            // "url_pdf" => "https://drive.google.com/file/d/1ZrR9HSH-MwpLG-RLNYwMiqGSml1b5QeT/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-09 09:30:00",
            // "last_date" => "2023-06-09 15:00:00",
            // "created_at" => "2023-06-09 09:30:00",
            // "updated_at" => "2023-06-09 09:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ALMOHADILLA (PAD) PARA MOUSE ANATOMICO CON GEL PARA LA UNIDAD DE RECURSOS HUMANOS",
            // "url_pdf" => "https://drive.google.com/file/d/1S4EilYI1wn9XTe9vlLekkWKXDw81lEga/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-09 11:00:00",
            // "last_date" => "2023-06-13 11:00:00",
            // "created_at" => "2023-06-09 11:00:00",
            // "updated_at" => "2023-06-09 11:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 7",
            // "url_pdf" => "https://drive.google.com/file/d/1ZrR9HSH-MwpLG-RLNYwMiqGSml1b5QeT/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-09 09:30:00",
            // "last_date" => "2023-06-09 15:00:00",
            // "created_at" => "2023-06-09 09:30:00",
            // "updated_at" => "2023-06-09 09:30:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE COORDINACION MONITOREO Y ASISTENCIA TÉCNICA ADMINISTRATIVA PARA LA UNIDAD DE INVESTIGACION DE LA FACULTAD DE CIENCIAS EMPRESARIALES",
            // "url_pdf" => "https://drive.google.com/file/d/1SrSA76JLv7UTVC44Oxuvz0EnSlwweS4z/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-12 12:00:00",
            // "last_date" => "2023-06-13 12:00:00",
            // "created_at" => "2023-06-12 12:00:00",
            // "updated_at" => "2023-06-12 12:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 02 camionetas para el IOARR: “ADQUISICIÓN DE VEHÍCULO; EN EL(LA) UNIDAD DE SERVICIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN VICENTE DE CAÑETE, PROVINCIA CAÑETE, DEPARTAMENTO LIMA, con Código Único de Inversión 2571526.",
            // "url_pdf" => "https://drive.google.com/file/d/1m4oOH6uOA9jqJ7q02RO01e3yj9sa4cvf/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-12 15:00:00",
            // "last_date" => "2023-06-14 10:00:00",
            // "created_at" => "2023-06-12 15:00:00",
            // "updated_at" => "2023-06-12 15:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 01 bus para el IOARR: “ADQUISICIÓN DE VEHÍCULO; EN EL(LA) UNIDAD DE SERVICIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN VICENTE DE CAÑETE, PROVINCIA CAÑETE, DEPARTAMENTO LIMA, con Código Único de Inversión 2571526.",
            // "url_pdf" => "https://drive.google.com/file/d/12lsLi4yXt1b5kV36k5xRRksJX-7fY7Wo/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-12 15:00:00",
            // "last_date" => "2023-06-14 10:00:00",
            // "created_at" => "2023-06-12 15:00:00",
            // "updated_at" => "2023-06-12 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN EN DIDACTICA UNIVERSITARIA DIRIDO A LOS DOCENTES DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1kHL-I1SonBfHgJ-9R7OCgAtD7zOdbHPf/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-12 16:00:00",
            // "last_date" => "2023-06-27 18:00:00",
            // "created_at" => "2023-06-12 16:00:00",
            // "updated_at" => "2023-06-12 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Gestión y seguimiento de actividades administrativas de las direcciones de la Vicepresidencia de Investigación.",
            // "url_pdf" => "https://drive.google.com/file/d/1khyOiB5m1jVk_sBu8b4WKL_C2u-4Oypx/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-12 16:00:00",
            // "last_date" => "2023-06-13 18:00:00",
            // "created_at" => "2023-06-12 16:00:00",
            // "updated_at" => "2023-06-12 16:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 01 bus para el IOARR: “ADQUISICIÓN DE VEHÍCULO; EN EL(LA) UNIDAD DE SERVICIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN VICENTE DE CAÑETE, PROVINCIA CAÑETE, DEPARTAMENTO LIMA, con Código Único de Inversión 2571526.",
            // "url_pdf" => "https://drive.google.com/file/d/12lsLi4yXt1b5kV36k5xRRksJX-7fY7Wo/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-12 15:00:00",
            // "last_date" => "2023-06-14 10:00:00",
            // "created_at" => "2023-06-12 15:00:00",
            // "updated_at" => "2023-06-12 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE UN PROFESIONAL ESPECIALIZADO (MEDICO EN SALUD OCUPACIONAL) PARA LA IMPLEMENTACIÓN DE SISTEMAS DE GESTIÓN DE SEGURIDAD Y SALUD OCUPACIONAL EN LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1PCZ_VV84ofgnXKG-AIEclW4dOqMAUX_6/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-13 09:30:00",
            // "last_date" => "2023-06-16 18:00:00",
            // "created_at" => "2023-06-13 09:30:00",
            // "updated_at" => "2023-06-13 09:30:00"
            // ]
            // ,[
            // "description" => "Servicio de gestión de actividades del medio ambiente, para la Dirección de Responsabilidad Social Universitaria",
            // "url_pdf" => "https://drive.google.com/file/d/1uz3MTJ8umDpjxuNlS_3gWzhkeAllPBcO/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-13 15:00:00",
            // "last_date" => "2023-06-14 10:00:00",
            // "created_at" => "2023-06-13 15:00:00",
            // "updated_at" => "2023-06-13 15:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Supervisor para el EQUIPAMIENTO Y MOBILIARIO en la Inversión: MEJORAMIENTO DE LOS SERVICIOS DE FORMACIÓN PROFESIONAL EN ADMINISTRACIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN LUIS- PROVINCIA DE CAÑETE - DEPARTAMENTO DE LIMA , con Código Único de Inversión 2468668.",
            // "url_pdf" => "https://drive.google.com/file/d/12JLr2DUF9tqVMbnlHZn5X4paNReIGQMu/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-13 16:00:00",
            // "last_date" => "2023-06-14 18:00:00",
            // "created_at" => "2023-06-13 16:00:00",
            // "updated_at" => "2023-06-13 16:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Residente para el EQUIPAMIENTO Y MOBILIARIO en la Inversión: MEJORAMIENTO DE LOS SERVICIOS DE FORMACIÓN PROFESIONAL EN ADMINISTRACIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN LUIS- PROVINCIA DE CAÑETE - DEPARTAMENTO DE LIMA , con Código Único de Inversión 2468668.",
            // "url_pdf" => "https://drive.google.com/file/d/19G6fqTemRdmjyznn1uyuwH4OUQuyiO_I/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-13 16:00:00",
            // "last_date" => "2023-06-14 18:00:00",
            // "created_at" => "2023-06-13 16:00:00",
            // "updated_at" => "2023-06-13 16:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE COORDINACION MONITOREO Y ASISTENCIA TÉCNICA ADMINISTRATIVA PARA LA ESCUELA PROFESIONAL DE ADMINISTRACION DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1YPequ4ogXfyyeTOAGH9pHqlRG6fWyQKj/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-13 16:00:00",
            // "last_date" => "2023-06-14 12:00:00",
            // "created_at" => "2023-06-13 16:00:00",
            // "updated_at" => "2023-06-13 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ALIMENTACIÓN DE PERSONAS PARA LA CAPACITACIÓN “POLÍTICAS DE SEGURIDAD Y SALUD EN EL TRABAJO” POR EL DIA DEL PADRE UNEDECINO ",
            // "url_pdf" => "https://drive.google.com/file/d/1R80TZKqstD_dGff5PKN9Pp3xp_1iPMZw/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-13 16:00:00",
            // "last_date" => "2023-06-14 09:00:00",
            // "created_at" => "2023-06-13 16:00:00",
            // "updated_at" => "2023-06-13 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ALIMENTACIÓN DE PERSONAS PARA LA CAPACITACIÓN “POLÍTICAS DE SEGURIDAD Y SALUD EN EL TRABAJO” POR EL DIA DEL PADRE UNEDECINO ",
            // "url_pdf" => "https://drive.google.com/file/d/1R80TZKqstD_dGff5PKN9Pp3xp_1iPMZw/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-13 16:00:00",
            // "last_date" => "2023-06-14 09:00:00",
            // "created_at" => "2023-06-13 16:00:00",
            // "updated_at" => "2023-06-13 16:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de licencia de software TURNITIN para la Dirección de Producción de Bienes y Servicios”.",
            // "url_pdf" => "https://drive.google.com/file/d/1xsRH301Cn14fI5toEe9y8zCyFWKL8J4o/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-14 08:00:00",
            // "last_date" => "2023-06-14 18:00:00",
            // "created_at" => "2023-06-14 08:00:00",
            // "updated_at" => "2023-06-14 08:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE TERMOS PERSONALIZADOS PARA LOS PARTICIPANTES DE LA CAPACITACIÓN “POLÍTICAS DE SEGURIDAD Y SALUD EN EL TRABAJO” POR EL DIA DEL PADRE UNEDECINO.",
            // "url_pdf" => "https://drive.google.com/file/d/1BOsAUG_NcJPIO0DULzrw6M202xGg2GVc/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-14 11:00:00",
            // "last_date" => "2023-06-14 16:00:00",
            // "created_at" => "2023-06-14 11:00:00",
            // "updated_at" => "2023-06-14 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 01 bus para el IOARR: “ADQUISICIÓN DE VEHÍCULO; EN EL(LA) UNIDAD DE SERVICIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN VICENTE DE CAÑETE, PROVINCIA CAÑETE, DEPARTAMENTO LIMA, con Código Único de Inversión 2571526.",
            // "url_pdf" => "https://drive.google.com/file/d/12lsLi4yXt1b5kV36k5xRRksJX-7fY7Wo/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-12 15:00:00",
            // "last_date" => "2023-06-14 10:00:00",
            // "created_at" => "2023-06-12 15:00:00",
            // "updated_at" => "2023-06-12 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO “SEMINARIO CIERRE CONTABLE DEL PRIMER SEMESTRE DEL EJERCICIO FISCAL 2023: LINEAMIENTOS DE LA ADMINISTRACIÓN FINANCIERA Y SU IMPORTANCIA EN LOS ESTADOS FINANCIEROS – TRATAMIENTO CONTABLE Y FINANCIERO DE LA DIRECTIVA Nro. 001-2022-EF/52.06 PARA LA IMPLEMENTACIÓN DEL DECRETO SUPREMO 043-2022-EF, EX RDR AÑO 2023”",
            // "url_pdf" => "https://drive.google.com/file/d/1IDKdIGoYUv44bh_bkoq_t-slU46OoGXc/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-14 12:00:00",
            // "last_date" => "2023-06-15 12:30:00",
            // "created_at" => "2023-06-14 12:00:00",
            // "updated_at" => "2023-06-14 12:00:00"
            // ]
            // ,[
            // "description" => "Contratar un proveedor para que brinde el Servicio en el CURSO TALLER SISTEMAINTEGRADO DE ADMINISTRACION FINANCIERA Y SISTEMA INTEGRADO DEGESTION ADMINISTRATIVA.",
            // "url_pdf" => "https://drive.google.com/file/d/1kUBXQeihJ7cO3ip4UmkrhyzLuPm2h8Qf/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-14 11:30:00",
            // "last_date" => "2023-06-15 18:00:00",
            // "created_at" => "2023-06-14 11:30:00",
            // "updated_at" => "2023-06-14 11:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Seguimiento para la ejecución del EQUIPAMIENTO Y MOBILIARIO en la: MEJORAMIENTO DE LOS SERVICIOS DE FORMACIÓN PROFESIONAL EN ADMINISTRACIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN LUIS- PROVINCIA DE CAÑETE - DEPARTAMENTO DE LIMA , con Código Único de Inversión 2468668.",
            // "url_pdf" => "https://drive.google.com/file/d/1OmQO5Ebdxst3ohTTL_xlX-pxoDxCdQ8S/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-14 12:30:00",
            // "last_date" => "2023-06-15 18:00:00",
            // "created_at" => "2023-06-14 12:30:00",
            // "updated_at" => "2023-06-14 12:30:00"
            // ]
            // ,[
            // "description" => "Contratar un proveedor para que brinde el Servicio en el CURSO TALLER SISTEMAINTEGRADO DE ADMINISTRACION FINANCIERA Y SISTEMA INTEGRADO DEGESTION ADMINISTRATIVA.",
            // "url_pdf" => "https://drive.google.com/file/d/1kUBXQeihJ7cO3ip4UmkrhyzLuPm2h8Qf/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-14 11:30:00",
            // "last_date" => "2023-06-15 18:00:00",
            // "created_at" => "2023-06-14 11:30:00",
            // "updated_at" => "2023-06-14 11:30:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE ASISTENCIA EN PROCESO DE CALIDAD ACADÉMICA Y ACREDITACIÓN DE LA ESCUELA PROFESIONAL DE INGENIERIA DE SISTEMAS DE LA FACULTAD DE INGENIERIA ",
            // "url_pdf" => "https://drive.google.com/file/d/18OEo9AT4W5idxHFNIHLSxPeWehSpZxWc/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-14 11:30:00",
            // "last_date" => "2023-06-15 18:00:00",
            // "created_at" => "2023-06-14 11:30:00",
            // "updated_at" => "2023-06-14 11:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 05 bidones de Agua de Mesa sin gas x 20 L para la Facultad de Ciencias Empresariales de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/17Bo6PLHHXrLsjebWZYKp1bmXeKHijyJw/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-15 10:30:00",
            // "last_date" => "2023-06-20 08:00:00",
            // "created_at" => "2023-06-15 10:30:00",
            // "updated_at" => "2023-06-15 10:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 01 SILLA GIRATORIAS DE METAL CON BRAZOS, para el Departamento de Contabilidad de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/15gIpEAr6iwqS4zpp8FngBZj_DfxzarFx/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-15 12:00:00",
            // "last_date" => "2023-06-19 12:00:00",
            // "created_at" => "2023-06-15 12:00:00",
            // "updated_at" => "2023-06-15 12:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 01 ESCRITORIO DE MELAMINE, para el Departamento de Contabilidad-UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1rnPVcEWN-cZQqhVBmATbPv-RvhJjd6wX/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-15 12:00:00",
            // "last_date" => "2023-06-19 12:00:00",
            // "created_at" => "2023-06-15 12:00:00",
            // "updated_at" => "2023-06-15 12:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE CAJAS ARCHIVADORAS PARA LA UNIDAD DE RECURSOS HUMANOS",
            // "url_pdf" => "https://drive.google.com/file/d/1m8RbiYZH6Qt57bVXNqDDhij_e_ofYQvo/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-15 12:30:00",
            // "last_date" => "2023-06-21 18:00:00",
            // "created_at" => "2023-06-15 12:30:00",
            // "updated_at" => "2023-06-15 12:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Especialista para la gestión, coordinación administrativa y financiera de proyectos de investigación para la Vicepresidencia de Investigación.",
            // "url_pdf" => "https://drive.google.com/file/d/1d6_ImEccAHlfALDpxXphkJEMVTbsz6Pt/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-15 16:00:00",
            // "last_date" => "2023-06-16 16:00:00",
            // "created_at" => "2023-06-15 16:00:00",
            // "updated_at" => "2023-06-15 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Especialista para la gestión, coordinación administrativa y financiera de proyectos de investigación para la Vicepresidencia de Investigación.",
            // "url_pdf" => "https://drive.google.com/file/d/1d6_ImEccAHlfALDpxXphkJEMVTbsz6Pt/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-15 16:00:00",
            // "last_date" => "2023-06-16 16:00:00",
            // "created_at" => "2023-06-15 16:00:00",
            // "updated_at" => "2023-06-15 16:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UNIFORMES INSTITUCIONALES PARA EL PERSONAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1LmE1vqEPNw0E5zrUU20ToEyp1-uAVv5G/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-16 08:00:00",
            // "last_date" => "2023-06-20 18:00:00",
            // "created_at" => "2023-06-16 08:00:00",
            // "updated_at" => "2023-06-16 08:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UN SURTIDOR DE AGUA ELECTRICO - DISPENSADOR ELECTRICO AGUA CALIENTE - HELADA - TEMPERADA PARA LA FACULTAD DE CIENCIAS EMPRESARIALES",
            // "url_pdf" => "https://drive.google.com/file/d/1cyDZZWbOLc5gamP9hhMojg8ycZGkAyWb/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-16 08:00:00",
            // "last_date" => "2023-06-19 12:00:00",
            // "created_at" => "2023-06-16 08:00:00",
            // "updated_at" => "2023-06-16 08:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 01 ARMARIO MELAMINA 02 PUERTAS, 01 ESCRITORIO MELAMINA EN L – 4 CAJONES CON LLAVE para la Facultad de Ciencias Empresariales de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1t_6fwwzPH9qi-6xlA6YWTb9LtEfnDCzg/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-16 08:00:00",
            // "last_date" => "2023-06-19 12:00:00",
            // "created_at" => "2023-06-16 08:00:00",
            // "updated_at" => "2023-06-16 08:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIAL DIDACTICO, ACCESORIOS Y UTILES DE ENSEÑANZA PARA EL DEPARTAMENTO ACADEMICO DE CONTABILIDAD DE LA UNDC. VS 2",
            // "url_pdf" => "https://drive.google.com/file/d/1_HnLkT1Af4udKhXYVHe8MFvMpXZCkKOB/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-16 08:00:00",
            // "last_date" => "2023-06-19 18:00:00",
            // "created_at" => "2023-06-16 08:00:00",
            // "updated_at" => "2023-06-16 08:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA FACULTAD DE CIENCIAS EMPRESARIALES VS 1",
            // "url_pdf" => "https://drive.google.com/file/d/1vccMAx2yJnbsc2opqmcLIfPL6dwkpE9E/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-16 08:00:00",
            // "last_date" => "2023-06-28 12:00:00",
            // "created_at" => "2023-06-16 08:00:00",
            // "updated_at" => "2023-06-16 08:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE ESCRITORIO PARA LA UNIDAD FORMULADORA DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1RMC1BLKXJdEVwKwf0M6dtf-22rJomX4e/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-16 08:00:00",
            // "last_date" => "2023-06-19 18:00:00",
            // "created_at" => "2023-06-16 08:00:00",
            // "updated_at" => "2023-06-16 08:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA UNIDAD DE INVESTIGACIÓN DE LA FACULTAD DE INGENIERÍA.",
            // "url_pdf" => "https://drive.google.com/file/d/16PWkjRCwba-wnx7TqPvWySXmBOyTB3YA/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-16 08:00:00",
            // "last_date" => "2023-06-19 18:00:00",
            // "created_at" => "2023-06-16 08:00:00",
            // "updated_at" => "2023-06-16 08:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA UNIDAD DE INVESTIGACIÓN DE LA FACULTAD DE CIENCIAS EMPRESARIALES",
            // "url_pdf" => "https://drive.google.com/file/d/1GeOBs9GABETWfs_RHm1IZNGXGZFfX9PJ/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-16 08:00:00",
            // "last_date" => "2023-06-28 12:00:00",
            // "created_at" => "2023-06-16 08:00:00",
            // "updated_at" => "2023-06-16 08:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE CONTABILIDAD V2",
            // "url_pdf" => "https://drive.google.com/file/d/1TK2GcMx_QMZn-WwEjBMnDvKc1ezBpToX/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-16 08:00:00",
            // "last_date" => "2023-06-19 18:00:00",
            // "created_at" => "2023-06-16 08:00:00",
            // "updated_at" => "2023-06-16 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE AMBIENTACION, DECORACION E IMPLEMENTACION DE LOCAL",
            // "url_pdf" => "https://drive.google.com/file/d/1GaJoaCWQ4WFoCTAxH5nS1VQtgz3PaY15/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-19 11:30:00",
            // "last_date" => "2023-06-20 13:00:00",
            // "created_at" => "2023-06-19 11:30:00",
            // "updated_at" => "2023-06-19 11:30:00"
            // ]
            // ,[
            // "description" => "CONTRATAR LOS SERVICIOS DE UN PROFESIONAL ESPECIALISTA EN GESTIÓN ADMINISTRATIVA PARA LA PRESIDENCIA DE LA COMISIÓN ORGANIZADORA",
            // "url_pdf" => "https://drive.google.com/file/d/13FZAs7RQ8Hnf2QQWSYde4Kht4tYexg_V/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-19 12:00:00",
            // "last_date" => "2023-06-20 10:00:00",
            // "created_at" => "2023-06-19 12:00:00",
            // "updated_at" => "2023-06-19 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Supervisor para el EQUIPAMIENTO Y MOBILIARIO en la Inversión: MEJORAMIENTO DE LOS SERVICIOS DE FORMACIÓN PROFESIONAL EN ADMINISTRACIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN LUIS- PROVINCIA DE CAÑETE - DEPARTAMENTO DE LIMA , con Código Único de Inversión 2468668. VERSION 2",
            // "url_pdf" => "https://drive.google.com/file/d/1l69Vmtyr05WCFVIspS2nXfB_R7A6d5CF/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-19 12:30:00",
            // "last_date" => "2023-06-20 10:00:00",
            // "created_at" => "2023-06-19 12:30:00",
            // "updated_at" => "2023-06-19 12:30:00"
            // ]
            // ,[
            // "description" => "Contratación de un profesional para la formulación de propuestas de remodelación de las oficinas del Local Administrativo Central de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1nsiB2pXYEikig8ail_Bhq8qVfUO7WDAq/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-19 17:00:00",
            // "last_date" => "2023-06-20 15:30:00",
            // "created_at" => "2023-06-19 17:00:00",
            // "updated_at" => "2023-06-19 17:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACIÓN DE UN PROFESIONAL PARA QUE BRINDE EL SERVICIO DE ASESORÍA A LA VICEPRESIDENCIA ACADÉMICA",
            // "url_pdf" => "https://drive.google.com/file/d/1arxlSWZixvLLTEj7fnKQ7ekziynMnIgU/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-19 17:00:00",
            // "last_date" => "2023-06-23 10:00:00",
            // "created_at" => "2023-06-19 17:00:00",
            // "updated_at" => "2023-06-19 17:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACIÓN DEL SERVICIO DE CONSULTORÍA DE OBRA PARA LA SUPERVISIÓN DE LA OBRA: “MEJORAMIENTO DEL SERVICIO DE EDUCACIÓN SUPERIOR DE LA ESCUELA PROFESIONAL DE CONTABILIDAD EN LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN LUIS, PROVINCIA DE CAÑETE, REGIÓN LIMA”. CÓDIGO DE INVERSIÓN: 2508633.",
            // "url_pdf" => "https://drive.google.com/file/d/17fG2mXgcffNHUo-bTkVcv6BAuKLQRq1b/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-20 09:00:00",
            // "last_date" => "2023-06-23 13:00:00",
            // "created_at" => "2023-06-20 09:00:00",
            // "updated_at" => "2023-06-20 09:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE CAPACITACION DE DESARROLLO DE CAPACIDADES EN INTELIGENCIA ARTIFICIAL PARA LOS DOCENTES DEL DEPARTAMENTO ACADEMICO DE ADMINISTRACIÓN.",
            // "url_pdf" => "https://drive.google.com/file/d/1JudPNVpQrzTMKCn6ZUypuPUx4QSaRr1_/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-20 12:00:00",
            // "last_date" => "2023-06-21 18:00:00",
            // "created_at" => "2023-06-20 12:00:00",
            // "updated_at" => "2023-06-20 12:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de suscripción anual de Identificador de Objetos Digitales (DOI) para la Revista de Investigación Cañetana de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/10cdIYS1kcmYkZmJZmD0fdNiP5o-_7Q5H/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-20 13:00:00",
            // "last_date" => "2023-06-21 18:00:00",
            // "created_at" => "2023-06-20 13:00:00",
            // "updated_at" => "2023-06-20 13:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de suscripción anual de Identificador de Objetos Digitales (DOI) para la Revista de Investigación Cañetana de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/10cdIYS1kcmYkZmJZmD0fdNiP5o-_7Q5H/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-20 13:00:00",
            // "last_date" => "2023-06-21 18:00:00",
            // "created_at" => "2023-06-20 13:00:00",
            // "updated_at" => "2023-06-20 13:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Soporte Técnico de Sistemas Informáticos",
            // "url_pdf" => "https://drive.google.com/file/d/1a7e533eaiu3B3o07IanLuXShCIZvtRqm/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-20 15:00:00",
            // "last_date" => "2023-06-21 18:00:00",
            // "created_at" => "2023-06-20 15:00:00",
            // "updated_at" => "2023-06-20 15:00:00"
            // ]
            // ,[
            // "description" => "“Servicios de Hosting VPS para la Oficina de Tecnología de la Información”",
            // "url_pdf" => "https://drive.google.com/file/d/1QSd4Pm-YkvCoN2F__QX9Lz7TtqavFc2_/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-21 11:00:00",
            // "last_date" => "2023-06-23 18:00:00",
            // "created_at" => "2023-06-21 11:00:00",
            // "updated_at" => "2023-06-21 11:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Soporte Técnico de Sistemas Informáticos",
            // "url_pdf" => "https://drive.google.com/file/d/1a7e533eaiu3B3o07IanLuXShCIZvtRqm/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-20 15:00:00",
            // "last_date" => "2023-06-21 18:00:00",
            // "created_at" => "2023-06-20 15:00:00",
            // "updated_at" => "2023-06-20 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANTENIMIENTO DE LAS INSTALACIONES SANITARIAS DEL BAÑO DE HOMBRES DEL SEGUNDO PISO EN LA SEDE SAN AGUSTÍN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1gQAEbRoHoHJynmfjEcmj6_kL8Cbhxzo-/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-22 08:00:00",
            // "last_date" => "2023-06-27 18:00:00",
            // "created_at" => "2023-06-22 08:00:00",
            // "updated_at" => "2023-06-22 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE UN PROFESIONAL ESPECIALIZADO (MEDICO EN SALUD OCUPACIONAL) PARA LA IMPLEMENTACIÓN DE SISTEMAS DE GESTIÓN DE SEGURIDAD Y SALUD OCUPACIONAL EN LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/13wG17fi-w6oO8nDn_i5tw0-DUdYnMPfs/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-22 10:00:00",
            // "last_date" => "2023-06-26 10:00:00",
            // "created_at" => "2023-06-22 10:00:00",
            // "updated_at" => "2023-06-22 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de alquiler de inmueble para el funcionamiento de oficinas y unidades administrativas de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1axH5Kc14AcR8dl79aEQLOO4goGMWdKIV/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-22 09:00:00",
            // "last_date" => "2023-06-23 12:00:00",
            // "created_at" => "2023-06-22 09:00:00",
            // "updated_at" => "2023-06-22 09:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Seguimiento para la ejecución del EQUIPAMIENTO Y MOBILIARIO en la: MEJORAMIENTO DE LOS SERVICIOS DE FORMACIÓN PROFESIONAL EN ADMINISTRACIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN LUIS- PROVINCIA DE CAÑETE - DEPARTAMENTO DE LIMA , con Código Único de Inversión 2468668.",
            // "url_pdf" => "https://drive.google.com/file/d/1d1VFZ60qpB6Nmvt0r-mSELKHqsr6O8kA/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-22 12:00:00",
            // "last_date" => "2023-06-23 12:00:00",
            // "created_at" => "2023-06-22 12:00:00",
            // "updated_at" => "2023-06-22 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio Especializado en Gestión de Tesorería",
            // "url_pdf" => "https://drive.google.com/file/d/1G9WVUuF7HREAHssIKDIloD1uOBO5xmRF/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-22 15:00:00",
            // "last_date" => "2023-06-23 15:00:00",
            // "created_at" => "2023-06-22 15:00:00",
            // "updated_at" => "2023-06-22 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SUSCRIPCIÓN ANUAL A REVISTAS INTERNACIONALES ESPECIALIZADAS: COMPUTER SOCIETY DE LA IEEE",
            // "url_pdf" => "https://drive.google.com/file/d/1hHOEnn7VUSg8bmKEi9VvgAjGVQdKcVFO/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-22 15:30:00",
            // "last_date" => "2023-06-26 15:00:00",
            // "created_at" => "2023-06-22 15:30:00",
            // "updated_at" => "2023-06-22 15:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de alquiler de aulas y una oficina administrativa para el funcionamiento del Centro Preuniversitario y Centro de Idiomas de la Dirección de Servicios Educativos de Extensión de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1ihMpN9fjxm3CA6BS9Qizb6OXqpe2tX3q/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-22 15:00:00",
            // "last_date" => "2023-06-23 12:00:00",
            // "created_at" => "2023-06-22 15:00:00",
            // "updated_at" => "2023-06-22 15:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de cochera para las unidades de transporte (buses) de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1cM5E-rtD8qHTt5rm5UrMH5KNBiuspBac/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-23 09:00:00",
            // "last_date" => "2023-07-11 15:00:00",
            // "created_at" => "2023-06-23 09:00:00",
            // "updated_at" => "2023-06-23 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE CHALECOS DE IDENTIFICACIÓN PARA LAS BRIGADAS Y EL COMITÉ DE SEGURIDAD Y SALUD EN EL TRABAJO DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1-OYJWO_8UoCpVPVLN9molymY1xnR3zk6/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-23 12:00:00",
            // "last_date" => "2023-06-26 10:00:00",
            // "created_at" => "2023-06-23 12:00:00",
            // "updated_at" => "2023-06-23 12:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE CAJAS ARCHIVADORAS PARA LA UNIDAD DE RECURSOS HUMANOS",
            // "url_pdf" => "https://drive.google.com/file/d/1pxHzQhJ8aWZwgWmhx_StJ6BFa2NyXLV_/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-23 12:00:00",
            // "last_date" => "2023-06-26 10:00:00",
            // "created_at" => "2023-06-23 12:00:00",
            // "updated_at" => "2023-06-23 12:00:00"
            // ]
            // ,[
            // "description" => "“ESPECIALISTA EN GESTION DE CONTRATACIONES PUBLICAS”",
            // "url_pdf" => "https://drive.google.com/file/d/111g4WltKIVCOJ4REJLB2015esVlqiinj/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-23 12:30:00",
            // "last_date" => "2023-06-26 08:00:00",
            // "created_at" => "2023-06-23 12:30:00",
            // "updated_at" => "2023-06-23 12:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 01 ARMARIO MELAMINE 02 PUERTAS, para Departamento Académico de Administración de Turismo y Hotelería de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1jl2bVUiqN-vpoaOzeTTEuwG9bU_TtL9M/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-23 17:00:00",
            // "last_date" => "2023-06-27 10:00:00",
            // "created_at" => "2023-06-23 17:00:00",
            // "updated_at" => "2023-06-23 17:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 01 DISCO DURO, 02 MOUSE INALAMBRICOS para Departamento Académico de Administración de Turismo y Hotelería de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1a3rURnVQqaFc9TnW3dz4cC6PA1QexuII/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-26 09:30:00",
            // "last_date" => "2023-06-27 15:00:00",
            // "created_at" => "2023-06-26 09:30:00",
            // "updated_at" => "2023-06-26 09:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANTENIMIENTO DE LOS TANQUES Y CISTERNAS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/14W6o2j76Mg0tMaDkHRo5dsQIGLxQ55Hi/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-26 10:00:00",
            // "last_date" => "2023-06-28 18:00:00",
            // "created_at" => "2023-06-26 10:00:00",
            // "updated_at" => "2023-06-26 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y MONITOREO DE LA IMPLEMENTACIÓN DEL SISTEMA INTEGRADO DE GESTIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1JI03056CBYKwoYUkW--bSZCTbrMTAPQF/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-26 10:30:00",
            // "last_date" => "2023-06-27 11:00:00",
            // "created_at" => "2023-06-26 10:30:00",
            // "updated_at" => "2023-06-26 10:30:00"
            // ]
            // ,[
            // "description" => "Servicio Especializado en Monitoreo, Coordinación, Administración, y Gestión Documental, referente a requerimientos de bienes y servicios, afectos a la ejecución del IOARR: “ADQUISICIÓN DE VEHÍCULO; EN EL(LA) UNIDAD DE SERVICIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN VICENTE DE CAÑETE, PROVINCIA CAÑETE, DEPARTAMENTO LIMA”, con Código Único de Inversión 2571526.",
            // "url_pdf" => "https://drive.google.com/file/d/1zka4VILfMgUOldxNWKzJlm1AraiR2K8h/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-26 10:45:00",
            // "last_date" => "2023-06-27 10:30:00",
            // "created_at" => "2023-06-26 10:45:00",
            // "updated_at" => "2023-06-26 10:45:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIAL DIDACTICO, ACCESORIOS Y UTILES DE ENSEÑANZA PARA EL DEPARTAMENTO ACADEMICO DE ADMINISTRACION LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1pXKO--ffl8ub2usq6URNSD2f8whpFAt7/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-26 11:30:00",
            // "last_date" => "2023-06-27 10:00:00",
            // "created_at" => "2023-06-26 11:30:00",
            // "updated_at" => "2023-06-26 11:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para el Fundo Tercer Mundo de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1A69iAdhIUDOBA6Eg-Txj4_zKsIbS5LME/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-26 18:00:00",
            // "last_date" => "2023-06-27 12:00:00",
            // "created_at" => "2023-06-26 18:00:00",
            // "updated_at" => "2023-06-26 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para el Fundo Don Luis de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1OuqID34Zy72PIFBUojgvtGQ5MWM-94D2/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-26 18:00:00",
            // "last_date" => "2023-06-27 12:00:00",
            // "created_at" => "2023-06-26 18:00:00",
            // "updated_at" => "2023-06-26 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para el Local Administrativo Central de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1QPO1Bod5WnFXSC7Hyx8LeSFVpVwHM7Jp/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-26 18:00:00",
            // "last_date" => "2023-06-27 12:00:00",
            // "created_at" => "2023-06-26 18:00:00",
            // "updated_at" => "2023-06-26 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para el Local Académico Casa de la Cultura de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1tXXZ-jCkJYO8eDir7UjPY-4nH26Mzav0/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-26 18:00:00",
            // "last_date" => "2023-06-27 12:00:00",
            // "created_at" => "2023-06-26 18:00:00",
            // "updated_at" => "2023-06-26 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete – Personal 1",
            // "url_pdf" => "https://drive.google.com/file/d/1CU-Dr13oilZQAFoECaEaemIbwbt9XJoI/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-26 18:00:00",
            // "last_date" => "2023-06-28 10:00:00",
            // "created_at" => "2023-06-26 18:00:00",
            // "updated_at" => "2023-06-26 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento correctivo de la unidad de transporte de placa EGO-950 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1KjxpHyhT7lnFwlCzHX-7k2ua5cfY8B6t/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-27 09:00:00",
            // "last_date" => "2023-06-28 14:00:00",
            // "created_at" => "2023-06-27 09:00:00",
            // "updated_at" => "2023-06-27 09:00:00"
            // ]
            // ,[
            // "description" => "“ESPECIALISTA EN GESTION DE CONTRATACIONES PUBLICAS”",
            // "url_pdf" => "https://drive.google.com/file/d/111g4WltKIVCOJ4REJLB2015esVlqiinj/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-06-23 12:30:00",
            // "last_date" => "2023-06-26 08:00:00",
            // "created_at" => "2023-06-23 12:30:00",
            // "updated_at" => "2023-06-23 12:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y MONITOREO EN ACTIVIDADES RELACIONADAS AL PROCESO DE LICENCIAMIENTO INSTITUCIONAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1at_a69E6visG41VjWS4FlgBI_S9tTAq7/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-27 16:00:00",
            // "last_date" => "2023-06-28 10:00:00",
            // "created_at" => "2023-06-27 16:00:00",
            // "updated_at" => "2023-06-27 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DE GESTIÓN DE CALIDAD UNIVERSITARIA PARA EVENTO GESTIONA-T UNDC DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1J_YlTJtxXNJH3hTDj-RaFBOWmlhXVekF/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-28 11:00:00",
            // "last_date" => "2023-07-03 08:00:00",
            // "created_at" => "2023-06-28 11:00:00",
            // "updated_at" => "2023-06-28 11:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE UTILES DE OFICINA PARA LA UNIDAD DE TESORERIA ",
            // "url_pdf" => "https://drive.google.com/file/d/11y7EchONB1DV1npYaXBkaVJR40daUtuA/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-28 08:00:00",
            // "last_date" => "2023-07-03 18:00:00",
            // "created_at" => "2023-06-28 08:00:00",
            // "updated_at" => "2023-06-28 08:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES DE ESCRITORIO Y MATERIAL DIDÁCTICO PARA EL DEPARTAMENTO ACADÉMICO DE AGRONOMÍA DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1Taq49ELXcW6wXIWTHx09GYpsO9BDXO_-/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-28 08:00:00",
            // "last_date" => "2023-07-03 18:00:00",
            // "created_at" => "2023-06-28 08:00:00",
            // "updated_at" => "2023-06-28 08:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DE MECANISMOS DE ASEGURAMIENTO DE LA CALIDAD EN LA EDUCACIÓN SUPERIOR PARA EVENTO GESTIONA-T UNDC DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1K2Q4RR4szThLPYCH7IhTCsYDJRcWDAHi/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-28 15:30:00",
            // "last_date" => "2023-07-03 17:00:00",
            // "created_at" => "2023-06-28 15:30:00",
            // "updated_at" => "2023-06-28 15:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de campo para el proyecto: Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”",
            // "url_pdf" => "https://drive.google.com/file/d/1dqXUZAPUuF1LqAIqq6zAP_pdYhiF0Lhm/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-28 16:00:00",
            // "last_date" => "2023-07-04 18:00:00",
            // "created_at" => "2023-06-28 16:00:00",
            // "updated_at" => "2023-06-28 16:00:00"
            // ]
            // ,[
            // "description" => "Servicio Especializado en Sistemas Informáticos",
            // "url_pdf" => "https://drive.google.com/file/d/1msnzH32YCKrpXlb1eDGbPhYBXBE1cwtr/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-28 16:00:00",
            // "last_date" => "2023-07-05 10:00:00",
            // "created_at" => "2023-06-28 16:00:00",
            // "updated_at" => "2023-06-28 16:00:00"
            // ]
            // ,[
            // "description" => "Servicio de acondicionamiento de red fibra óptica del Campus Universitario (Fundo Don Luis) de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1yivZKwq3TbT8Sou6EdM1aeSw-RLw41Wo/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-06-28 18:00:00",
            // "last_date" => "2023-07-03 18:00:00",
            // "created_at" => "2023-06-28 18:00:00",
            // "updated_at" => "2023-06-28 18:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE OFICINA PARA LA UNIDAD DE SERVICIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1fOFAhaaggjKFYFKOXHVlXOjYCFkVI7XR/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-03 09:30:00",
            // "last_date" => "2023-07-07 15:00:00",
            // "created_at" => "2023-07-03 09:30:00",
            // "updated_at" => "2023-07-03 09:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DISEÑO GRAFICO Y DIAGRAMACION DE MATERIALES PROMOCIONALES DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/11-PnJ-EeqTVomMXhunHyuzZ8VRJQKuKk/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-03 15:00:00",
            // "last_date" => "2023-07-05 18:00:00",
            // "created_at" => "2023-07-03 15:00:00",
            // "updated_at" => "2023-07-03 15:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de materiales de limpieza para el personal de mantenimiento de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1_2i94DEUt-C5tB99I3C_2zRFQCYcTWBt/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-03 15:00:00",
            // "last_date" => "2023-07-06 18:00:00",
            // "created_at" => "2023-07-03 15:00:00",
            // "updated_at" => "2023-07-03 15:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE CAPACITACION DE DESARROLLO DE CAPACIDADES EN INTELIGENCIA ARTIFICIAL PARA LOS DOCENTES DEL DEPARTAMENTO ACADEMICO DE ADMINISTRACIÓN.",
            // "url_pdf" => "https://drive.google.com/file/d/1W3pRqsDlIEr3mod4uhmrJuewNJEmvFUx/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-03 18:00:00",
            // "last_date" => "2023-07-04 15:00:00",
            // "created_at" => "2023-07-03 18:00:00",
            // "updated_at" => "2023-07-03 18:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UNIFORMES INSTITUCIONALES PARA EL PERSONAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1_ok25r-rUVtjhDuTPxYgOKK4cY0d35H3/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-04 09:30:00",
            // "last_date" => "2023-07-05 15:00:00",
            // "created_at" => "2023-07-04 09:30:00",
            // "updated_at" => "2023-07-04 09:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento correctivo de la unidad de transporte de placa EGO-950 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1yX2X8XtYRmDouMq013iYjHLZjspnIZwy/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-04 10:00:00",
            // "last_date" => "2023-07-04 18:00:00",
            // "created_at" => "2023-07-04 10:00:00",
            // "updated_at" => "2023-07-04 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE EQUIPOS ELECTRONICOS PARA LA PLANTA DE TRATAMIENTO DE AGUAS RESIDUALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1enROgFjiMHP7DCTJ4KtasKGkohy7EN2t/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-04 10:00:00",
            // "last_date" => "2023-09-19 12:00:00",
            // "created_at" => "2023-07-04 10:00:00",
            // "updated_at" => "2023-07-04 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE REVISIÓN DE TRANSFERENCIA DE DOCUMENTOS AL ARCHIVO, para Archivo Central de la Secretaría General de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1_K8JDoOiM16EaJXVLcK7T7PnSTax2tHY/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-04 11:00:00",
            // "last_date" => "2023-07-05 10:00:00",
            // "created_at" => "2023-07-04 11:00:00",
            // "updated_at" => "2023-07-04 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y MONITOREO EN ACTIVIDADES RELACIONADAS AL PROCESO DE LICENCIAMIENTO INSTITUCIONAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1ORTKlsyoNfjq5_RXmtXhH1gF9h26sKvT/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-04 11:00:00",
            // "last_date" => "2023-07-05 10:00:00",
            // "created_at" => "2023-07-04 11:00:00",
            // "updated_at" => "2023-07-04 11:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ALIMENTOS Y BEBIDAS PARA CONSUMO HUMANO PARA LA UNIDAD DE SERVICIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1BBijTCPImmMBcIHzTsOAcf1sR_CNEsTU/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-04 12:00:00",
            // "last_date" => "2023-07-05 13:00:00",
            // "created_at" => "2023-07-04 12:00:00",
            // "updated_at" => "2023-07-04 12:00:00"
            // ]
            // ,[
            // "description" => "SUSCRIPCIÓN ANUAL A PLATAFORMA WEB DE CREACIÓN DE CONTENIDO DIGITAL INTERACTIVO DE LA ACADEMIA CISCO",
            // "url_pdf" => "https://drive.google.com/file/d/1cv8jo13InBZhAb6MmZJ4UOG0VsN2bX3b/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-04 13:00:00",
            // "last_date" => "2023-07-05 18:00:00",
            // "created_at" => "2023-07-04 13:00:00",
            // "updated_at" => "2023-07-04 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SUSCRIPCIÓN ANUAL A REVISTAS INTERNACIONALES ESPECIALIZADAS: COMPUTER SOCIETY DE LA IEEE",
            // "url_pdf" => "https://drive.google.com/file/d/1ntf_6zuVY6zScJwd1l5X3IdPNgU9HsTR/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-04 15:00:00",
            // "last_date" => "2023-07-05 18:00:00",
            // "created_at" => "2023-07-04 15:00:00",
            // "updated_at" => "2023-07-04 15:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de MOBILIARIO para la Facultad de Ingeniería de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/17tkX6WQstdlHOzzKsiK3c2S1ePY96ydd/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-04 15:00:00",
            // "last_date" => "2023-07-07 11:00:00",
            // "created_at" => "2023-07-04 15:00:00",
            // "updated_at" => "2023-07-04 15:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de (01) campanilla de bronce para la Unidad de Investigación de la Facultad de Ciencias Empresariales de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1ahvMqEAGKKgU93YZ8b91NIl8SLU0ijQ-/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-04 15:30:00",
            // "last_date" => "2023-08-04 13:00:00",
            // "created_at" => "2023-07-04 15:30:00",
            // "updated_at" => "2023-07-04 15:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA UNIDAD DE INVESTIGACIÓN DE LA FACULTAD DE CIENCIAS EMPRESARIALES",
            // "url_pdf" => "https://drive.google.com/file/d/1gV4cnwMNAEOa3gUNd1XXq77OOwur2zD4/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-04 16:00:00",
            // "last_date" => "2023-07-05 18:00:00",
            // "created_at" => "2023-07-04 16:00:00",
            // "updated_at" => "2023-07-04 16:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE BIDONES DE AGUA DE MESA SIN GAS DE 20 LT PARA LA UNIDAD DE RECURSOS HUMANOS",
            // "url_pdf" => "https://drive.google.com/file/d/12XJyoeuH0QkarrY9F8xw91k8foPPfu0x/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-04 16:00:00",
            // "last_date" => "2023-07-05 10:00:00",
            // "created_at" => "2023-07-04 16:00:00",
            // "updated_at" => "2023-07-04 16:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ALIMENTOS Y BEBIDAS PARA LA UNIDAD DE RECURSOS HUMANOS",
            // "url_pdf" => "https://drive.google.com/file/d/1ipIf16B2d_dmzUm4En_COIorMuo-DKbb/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-04 16:00:00",
            // "last_date" => "2023-07-05 10:00:00",
            // "created_at" => "2023-07-04 16:00:00",
            // "updated_at" => "2023-07-04 16:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE MERCHANDISING PARA EL EVENTO DENOMINADO: “GESTIONA-T UNDC”",
            // "url_pdf" => "https://drive.google.com/file/d/1bGmTELAPpQPIvczVZ7KLevEMznMtt9F6/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-05 10:30:00",
            // "last_date" => "2023-07-06 12:00:00",
            // "created_at" => "2023-07-05 10:30:00",
            // "updated_at" => "2023-07-05 10:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de equipos para el proyecto: Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023).”",
            // "url_pdf" => "https://drive.google.com/file/d/1RBTRjK0J59Tl8HOlgL1_jcONhG2fTnYF/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-05 10:30:00",
            // "last_date" => "2023-07-06 18:00:00",
            // "created_at" => "2023-07-05 10:30:00",
            // "updated_at" => "2023-07-05 10:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 02 MOUSE INALAMBRICOS, 02 TECLADO KEYBOARD CON PUERTO USB, para la Facultad de Ciencias Empresariales",
            // "url_pdf" => "https://drive.google.com/file/d/1k0d1nAjnxm3XEBYpYcjr8b_m2lKEApwy/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-07-05 12:00:00",
            // "last_date" => "2023-07-06 15:00:00",
            // "created_at" => "2023-07-05 12:00:00",
            // "updated_at" => "2023-07-05 12:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 1",
            // "url_pdf" => "https://drive.google.com/file/d/1BQ2hIOS15CmpjjAUALwNd7EsTvQErSay/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-05 16:00:00",
            // "last_date" => "2023-07-11 10:30:00",
            // "created_at" => "2023-07-05 16:00:00",
            // "updated_at" => "2023-07-05 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 2",
            // "url_pdf" => "https://drive.google.com/file/d/1uxXNPGSczgpUYPfDs1jDtx13OaMNGPI0/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-05 16:00:00",
            // "last_date" => "2023-07-11 10:30:00",
            // "created_at" => "2023-07-05 16:00:00",
            // "updated_at" => "2023-07-05 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 1",
            // "url_pdf" => "https://drive.google.com/file/d/1a5MSZuFOnZJvD2O8mhqmoTkfN8jIefHE/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-05 16:00:00",
            // "last_date" => "2023-07-10 18:00:00",
            // "created_at" => "2023-07-05 16:00:00",
            // "updated_at" => "2023-07-05 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO DIPLOMADO DE ESPECIALIZACIÓN “GESTIÓN PÚBLICA POR RESULTADOS”",
            // "url_pdf" => "https://drive.google.com/file/d/1ShMhkgpSW5FyQ4hcbkhNaDIZPIsWrUYU/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-06 09:00:00",
            // "last_date" => "2023-07-06 15:00:00",
            // "created_at" => "2023-07-06 09:00:00",
            // "updated_at" => "2023-07-06 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de renovación de Póliza de Seguro Vehicular para las unidades de transporte de placa EGO - 737, EGO - 950 y EGO - 951 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/drive/folders/13brzZVJRNsmRJ9qp8mFO-1o3B34mjhIV?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-06 10:20:00",
            // "last_date" => "2023-07-18 15:00:00",
            // "created_at" => "2023-07-06 10:20:00",
            // "updated_at" => "2023-07-06 10:20:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 2",
            // "url_pdf" => "https://drive.google.com/file/d/1a23fKFOwFLYCPLh1PapTekMTR9SkXNDE/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-06 17:30:00",
            // "last_date" => "2023-07-10 18:00:00",
            // "created_at" => "2023-07-06 17:30:00",
            // "updated_at" => "2023-07-06 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 3",
            // "url_pdf" => "https://drive.google.com/file/d/1J867GTHnxZsHCK7boD9DrgSRiMHYnlHZ/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-06 17:30:00",
            // "last_date" => "2023-07-11 08:00:00",
            // "created_at" => "2023-07-06 17:30:00",
            // "updated_at" => "2023-07-06 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 4",
            // "url_pdf" => "https://drive.google.com/file/d/17t8orbjZtFEuwy08Omw3pOAhwjoCyGDz/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-06 17:30:00",
            // "last_date" => "2023-07-11 11:00:00",
            // "created_at" => "2023-07-06 17:30:00",
            // "updated_at" => "2023-07-06 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 3",
            // "url_pdf" => "https://drive.google.com/file/d/1lsaT-y_B6Bw4lPRRUXJUxIKLsH9EhI_c/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-06 17:30:00",
            // "last_date" => "2023-07-11 17:00:00",
            // "created_at" => "2023-07-06 17:30:00",
            // "updated_at" => "2023-07-06 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio especializado en instalaciones eléctricas - Técnico para la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1H5mXzfycq6WHmGAq0LrZdAO7OB1HrK_s/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-06 17:30:00",
            // "last_date" => "2023-07-10 18:00:00",
            // "created_at" => "2023-07-06 17:30:00",
            // "updated_at" => "2023-07-06 17:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO DIPLOMADO DE ESPECIALIZACIÓN “GESTIÓN PÚBLICA POR RESULTADOS”",
            // "url_pdf" => "https://drive.google.com/file/d/1ShMhkgpSW5FyQ4hcbkhNaDIZPIsWrUYU/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-07 09:00:00",
            // "last_date" => "2023-07-07 15:00:00",
            // "created_at" => "2023-07-07 09:00:00",
            // "updated_at" => "2023-07-07 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ASISTENCIA ADMINISTRATIVA EN PROCESO DE CALIDAD ACADÉMICA Y ACREDITACIÓN DE ESCUELAS PROFESIONALES PARA LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1KY-ST-YUUAFoe4zFJyyXurbR_-0YimZp/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-07 11:30:00",
            // "last_date" => "2023-07-10 10:00:00",
            // "created_at" => "2023-07-07 11:30:00",
            // "updated_at" => "2023-07-07 11:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE UNIFORME ANTIFLUIDO PARA PERSONAL DE SALUD",
            // "url_pdf" => "https://drive.google.com/file/d/1RxYKUckvmG2RrVpcnd2SUK49AzPRCJqr/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-07 12:30:00",
            // "last_date" => "2023-07-11 18:00:00",
            // "created_at" => "2023-07-07 12:30:00",
            // "updated_at" => "2023-07-07 12:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo de suelos, para el proyecto de investigación: “Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023)”.",
            // "url_pdf" => "https://drive.google.com/file/d/1c_dCwuM6FZ93sWvL6sH0FPmuY9xgplgm/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-07 17:30:00",
            // "last_date" => "2023-07-10 18:00:00",
            // "created_at" => "2023-07-07 17:30:00",
            // "updated_at" => "2023-07-07 17:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE BIDONES DE AGUA DE MESA SIN GAS DE 20 LT PARA LA UNIDAD DE RECURSOS HUMANOS",
            // "url_pdf" => "https://drive.google.com/file/d/14YU3LnRrMJMky3bN98z0-8maoGdSPJAT/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-07 18:00:00",
            // "last_date" => "2023-07-10 10:00:00",
            // "created_at" => "2023-07-07 18:00:00",
            // "updated_at" => "2023-07-07 18:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de combustible DIESEL B5 S50 para las unidades de transporte de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1_lPUYI7zXWApbO_aCBVV8m5GW2ZB12By/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-07 18:00:00",
            // "last_date" => "2023-07-10 12:00:00",
            // "created_at" => "2023-07-07 18:00:00",
            // "updated_at" => "2023-07-07 18:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO PARA COORDINAR, EJECUTAR Y SEGUIMIENTO DE ACTIVIDADES PROGRAMADO POR LA UNIDAD DE RECURSOS HUMANOS",
            // "url_pdf" => "https://drive.google.com/file/d/1_D4DcftF86-LjNcspRsvsx6ycc5sfD2T/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-07 18:00:00",
            // "last_date" => "2023-07-10 10:00:00",
            // "created_at" => "2023-07-07 18:00:00",
            // "updated_at" => "2023-07-07 18:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Ceremonia de Entrega de Diplomas de Grados de Bachiller y Títulos – Segunda entrega",
            // "url_pdf" => "https://drive.google.com/file/d/1cxMFSe_P02oRyT-JYH8SHvSW3klZUaLH/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-10 08:30:00",
            // "last_date" => "2023-07-11 12:00:00",
            // "created_at" => "2023-07-10 08:30:00",
            // "updated_at" => "2023-07-10 08:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES PARA LA UNIDAD DE INVESTIGACIÓN DE LA FACULTAD DE CIENCIAS EMPRESARIALES DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1xhxbkeEX9GcbtJ-bb2QKy5VjZ1Ine1bf/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-10 09:00:00",
            // "last_date" => "2023-07-12 10:00:00",
            // "created_at" => "2023-07-10 09:00:00",
            // "updated_at" => "2023-07-10 09:00:00"
            // ]
            // ,[
            // "description" => "Servicio de “SEMINARIO TALLER EN DIDÁCTICA UNIVERSITARIA CON ENFOQUE POR COMPETENCIAS”, dirigido a los docentes del Departamento académico de Administración Turismo y Hotelería – UNDC, a efectos de ejecutar el POI – CEPLAN 2023 de la escuela programado y aprobado.",
            // "url_pdf" => "https://drive.google.com/file/d/1jqKk-s8OICopTz9ddpBLF6ujFxteb6NO/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-11 08:00:00",
            // "last_date" => "2023-07-13 18:00:00",
            // "created_at" => "2023-07-11 08:00:00",
            // "updated_at" => "2023-07-11 08:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 05 bidones de Agua de Mesa sin gas x 20 L y agua mineral sin gas X 600 mL para la Unidad de Investigación de la Facultad de Ciencias Empresariales de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1Xgxh40Jczq5k75yNqdVrQmLHwyUYub1i/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-11 13:00:00",
            // "last_date" => "2023-07-12 10:00:00",
            // "created_at" => "2023-07-11 13:00:00",
            // "updated_at" => "2023-07-11 13:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Soporte técnico e implementación de Sistemas Informáticos para la Dirección de Gestión Académica de la UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1eCuyma89Upg99eADaXmTBQCt9l0kZJdc/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-12 09:00:00",
            // "last_date" => "2023-07-13 10:00:00",
            // "created_at" => "2023-07-12 09:00:00",
            // "updated_at" => "2023-07-12 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de alquiler de un vehículo menor, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”.",
            // "url_pdf" => "https://drive.google.com/file/d/1YAN9GWSwui1hPFJff4MtN4onbbzWq04v/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-12 11:30:00",
            // "last_date" => "2023-07-13 10:00:00",
            // "created_at" => "2023-07-12 11:30:00",
            // "updated_at" => "2023-07-12 11:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE UN PROFESIONAL ESPECIALIZADO (MEDICO EN SALUD OCUPACIONAL) PARA LA IMPLEMENTACIÓN DE SISTEMAS DE GESTIÓN DE SEGURIDAD Y SALUD OCUPACIONAL EN LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/18V5Yw4JoFgR2PDhiIK4qbNsrJnf9SZIx/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-12 11:30:00",
            // "last_date" => "2023-07-18 18:00:00",
            // "created_at" => "2023-07-12 11:30:00",
            // "updated_at" => "2023-07-12 11:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de tintas de impresión para el Centro Pre Universitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1ksO9JhPkkf7n-DPQbMjRTrIaPrc00xPh/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-12 11:30:00",
            // "last_date" => "2023-07-14 15:00:00",
            // "created_at" => "2023-07-12 11:30:00",
            // "updated_at" => "2023-07-12 11:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO DIPLOMA “SIGA MEF DEL MÓDULO LOGÍSTICO Y PATRIMONIO”.",
            // "url_pdf" => "https://drive.google.com/file/d/1HujnEqWgj0ftzuxksu_Qvrkot2PZ2225/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-12 13:00:00",
            // "last_date" => "2023-07-14 18:00:00",
            // "created_at" => "2023-07-12 13:00:00",
            // "updated_at" => "2023-07-12 13:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE BIDONES DE AGUA DE MESA SIN GAS DE 20 LT PARA LA UNIDAD FORMULADORA DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1dMHRRqutbUjwAgUSboCvHgmKESERMj_g/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-12 16:00:00",
            // "last_date" => "2023-07-13 12:00:00",
            // "created_at" => "2023-07-12 16:00:00",
            // "updated_at" => "2023-07-12 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO PARA LA ELABORACIÓN DE MATERIALES DE DISEÑOS GRÁFICOS Y DIAGRAMACIÓN DE MATERIALES PROMOCIONALES PARA LA OFICINA DE COMUNICACIONES E IMAGEN INSTITUCIONAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/12sPizDFmSFBnOjlT6unMDb3vrGFSnQvs/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-12 17:00:00",
            // "last_date" => "2023-07-13 10:00:00",
            // "created_at" => "2023-07-12 17:00:00",
            // "updated_at" => "2023-07-12 17:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO ESPECIALIZADO “RECLUTAMIENTO Y SELECCIÓN”",
            // "url_pdf" => "https://drive.google.com/file/d/1ro4YTmMYWmiJMrljogCGNmVlzIiwUMhB/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-12 17:00:00",
            // "last_date" => "2023-07-13 10:00:00",
            // "created_at" => "2023-07-12 17:00:00",
            // "updated_at" => "2023-07-12 17:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO “NEUROÉTICA EN LA GESTIÓN PÚBLICA”, PARA EL PERSONAL ADMINISTRATIVO DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1h_KJi57upQJRGDns9ZrGIKOu0jAWiS4k/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-12 18:00:00",
            // "last_date" => "2023-07-14 12:00:00",
            // "created_at" => "2023-07-12 18:00:00",
            // "updated_at" => "2023-07-12 18:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ALIMENTACIÓN DE PERSONAS PARA LOS PARTICIPANTES DE LA CAPACITACIÓN “NEUROÉTICA EN LA GESTIÓN PÚBLICA”",
            // "url_pdf" => "https://drive.google.com/file/d/161sNys4lj0gfWK_FjaBszX4A_97D-3Aq/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-13 08:30:00",
            // "last_date" => "2023-07-13 18:00:00",
            // "created_at" => "2023-07-13 08:30:00",
            // "updated_at" => "2023-07-13 08:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANTENIMIENTO DE LAS INSTALACIONES SANITARIAS DEL TALLER DE GASTRONOMIA DE LA SEDE CNI Y MAESTRANZA DE LA SEDE FUNDO DON LUIS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1B9zJMof9IkqM3_0JLL5IccIZuWF247KF/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-13 08:30:00",
            // "last_date" => "2023-07-14 13:00:00",
            // "created_at" => "2023-07-13 08:30:00",
            // "updated_at" => "2023-07-13 08:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de mantenimiento de destilador de agua, para el proyecto de investigación: “Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023)”.",
            // "url_pdf" => "https://drive.google.com/file/d/1zIvMjYw9v1RaxxPL-mF9kZ3SWH7w1MRo/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-13 08:30:00",
            // "last_date" => "2023-09-06 18:00:00",
            // "created_at" => "2023-07-13 08:30:00",
            // "updated_at" => "2023-07-13 08:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ELABORACIÓN DE DOCUMENTOS ADMINISTRATIVOS",
            // "url_pdf" => "https://drive.google.com/file/d/1hjtS0qOfgDmZzdXO76MeJDYZKuXzcA35/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-13 09:00:00",
            // "last_date" => "2023-07-14 09:00:00",
            // "created_at" => "2023-07-13 09:00:00",
            // "updated_at" => "2023-07-13 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO “PLANEAMIENTO DE PROYECTOS CON MS PROJECT”.",
            // "url_pdf" => "https://drive.google.com/file/d/1QAscagPCPTXJoSEaWBaY0M_Pb1Nh9svX/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-13 10:30:00",
            // "last_date" => "2023-07-14 12:00:00",
            // "created_at" => "2023-07-13 10:30:00",
            // "updated_at" => "2023-07-13 10:30:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE ASISTENCIA TÉCNICA EN MONITOREO Y SEGUIMIENTO EN GESTIÓN ADMINISTRATIVA PARA EL DEPARTAMENTO ACADEMICO DE ESTUDIOS GENERALES DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1Wvv6dMgVuGthanlbabSvaS0S8thdoo6O/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-13 10:30:00",
            // "last_date" => "2023-07-14 10:00:00",
            // "created_at" => "2023-07-13 10:30:00",
            // "updated_at" => "2023-07-13 10:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de útiles de escritorio para el Centro Pre Universitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1HEjAvWc5DHa34AutO1VkkaGjM8sG_fVR/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-12 10:30:00",
            // "last_date" => "2023-07-18 12:00:00",
            // "created_at" => "2023-07-12 10:30:00",
            // "updated_at" => "2023-07-12 10:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de materiales de limpieza para el Centro Pre Universitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1p1R5ebbURuLP1cWs1GtifqCpr6hIIzlk/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-13 10:30:00",
            // "last_date" => "2023-07-20 10:00:00",
            // "created_at" => "2023-07-13 10:30:00",
            // "updated_at" => "2023-07-13 10:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de asistencia en seguimiento de actividades administrativas para el proyecto de investigación: “Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete”.",
            // "url_pdf" => "https://drive.google.com/file/d/11NLywMywZe5fsipmx1lRLaDioj4yPG-w/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-13 10:30:00",
            // "last_date" => "2023-07-25 11:00:00",
            // "created_at" => "2023-07-13 10:30:00",
            // "updated_at" => "2023-07-13 10:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Análisis de datos para la elaboración de las normas y el software CND camote, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”.",
            // "url_pdf" => "https://drive.google.com/file/d/1HY7vBOMCQKblhxOlZDgcgnqjF5kTiblx/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-13 11:00:00",
            // "last_date" => "2023-07-17 18:00:00",
            // "created_at" => "2023-07-13 11:00:00",
            // "updated_at" => "2023-07-13 11:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de asistencia en seguimiento de actividades administrativas para el proyecto de investigación: Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023).",
            // "url_pdf" => "https://drive.google.com/file/d/1iO2uSDJGGNQj85HK3gEeWtNuEN0wZg3f/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-07-13 11:00:00",
            // "last_date" => "2023-07-14 18:00:00",
            // "created_at" => "2023-07-13 11:00:00",
            // "updated_at" => "2023-07-13 11:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de balanza electrónica para el proyecto: Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote.”",
            // "url_pdf" => "https://drive.google.com/file/d/1Op5S1jymPDEfBAmIXO0l0lep2fND7ywN/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-13 11:00:00",
            // "last_date" => "2023-07-14 11:00:00",
            // "created_at" => "2023-07-13 11:00:00",
            // "updated_at" => "2023-07-13 11:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE SEÑALETICAS PARA LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1gdj8gX_2NVzMiaDBhNNG4A5vGUcCz1qV/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-13 18:00:00",
            // "last_date" => "2023-08-01 12:00:00",
            // "created_at" => "2023-07-13 18:00:00",
            // "updated_at" => "2023-07-13 18:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de insumos de laboratorio para el proyecto: Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023)”",
            // "url_pdf" => "https://drive.google.com/file/d/17Rsr8bPIlF5GpoEZrpFW-rSmS6qWdfrv/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-14 11:30:00",
            // "last_date" => "2023-07-17 18:00:00",
            // "created_at" => "2023-07-14 11:30:00",
            // "updated_at" => "2023-07-14 11:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de insumos y/o materiales de invernadero para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1L-UrG4eqj7Bq6k6t6EbpOGLDRdBE0PcH/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-14 12:00:00",
            // "last_date" => "2023-08-28 08:00:00",
            // "created_at" => "2023-07-14 12:00:00",
            // "updated_at" => "2023-07-14 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de un Especialista para elaborar Expediente Técnico de “MANTENIMIENTO DE ACCESOS, VEREDAS, ÁREAS VERDES Y PISTAS PARA LLEGAR A LA INFRAESTRUCTURA DE MAESTRANZA Y CONSERVACIÓN DE LOS CERCOS PERIMÉTRICOS UBICADOS EN EL CAMPUS UNIVERSITARIO FUNDO DON LUIS DE LA UNDC”.",
            // "url_pdf" => "https://drive.google.com/file/d/1ErEDSDFbvBSBSgWUqX46ysz5gQcpdm0Y/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-14 12:30:00",
            // "last_date" => "2023-07-24 18:00:00",
            // "created_at" => "2023-07-14 12:30:00",
            // "updated_at" => "2023-07-14 12:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de laboratorio para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1E7PN42EFz_eTQ_1g-mP8KiptN_0SqnbP/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-14 14:30:00",
            // "last_date" => "2023-07-17 18:00:00",
            // "created_at" => "2023-07-14 14:30:00",
            // "updated_at" => "2023-07-14 14:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de energía química para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete.”",
            // "url_pdf" => "https://drive.google.com/file/d/1k2gANM56vVSILF1T4Hm3uQapc88qjTbf/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-14 14:30:00",
            // "last_date" => "2023-08-29 10:00:00",
            // "created_at" => "2023-07-14 14:30:00",
            // "updated_at" => "2023-07-14 14:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE 01 EQUIPO MULTIFUNCIONAL COPIADORA FAX IMPRESORA SCANNER, DE INYECCIÓN A TINTA COLOR, PARA EL DEPARTAMENTO DE CONTABILIDAD DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1Xs0QrhQ-Mrx7T5YmyvrsMiHDxS2dk_CD/view",
            // "user_id" => 1,
            // "start_date" => "2023-07-14 14:30:00",
            // "last_date" => "2023-07-17 12:00:00",
            // "created_at" => "2023-07-14 14:30:00",
            // "updated_at" => "2023-07-14 14:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE 01 EQUIPO MULTIFUNCIONAL COPIADORA IMPRESORA SCANNER, PARA LA ESCUELA PROFESIONAL DE ADMINISTRACIÓN DE TURISMO Y HOTELERÍA DE LA UNDC. VS 02",
            // "url_pdf" => "https://drive.google.com/drive/folders/1pnJixakVKme0snL7VgLsPh1uCU9PNU1T",
            // "user_id" => 1,
            // "start_date" => "2023-07-14 14:30:00",
            // "last_date" => "2023-07-17 12:00:00",
            // "created_at" => "2023-07-14 14:30:00",
            // "updated_at" => "2023-07-14 14:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de equipos para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete.”",
            // "url_pdf" => "https://drive.google.com/file/d/18gZkrefRDT11xg21YFbxIdq-wS3BHq1B/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-14 15:00:00",
            // "last_date" => "2023-07-19 15:00:00",
            // "created_at" => "2023-07-14 15:00:00",
            // "updated_at" => "2023-07-14 15:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento preventivo y correctivo de las unidades de transporte de placas EGJ-132 y EGI-244 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1OTvNhcE37fk271ncEbTUAvhPqfKi24ko/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-17 08:00:00",
            // "last_date" => "2023-07-17 16:00:00",
            // "created_at" => "2023-07-17 08:00:00",
            // "updated_at" => "2023-07-17 08:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de Agua de mesa necesaria para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete.”",
            // "url_pdf" => "https://drive.google.com/file/d/17Q6RrcGkjp0xx07hSzBm5q4E0HtgHXj4/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-17 09:30:00",
            // "last_date" => "2023-07-18 10:00:00",
            // "created_at" => "2023-07-17 09:30:00",
            // "updated_at" => "2023-07-17 09:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 64 diplomas con caligrafiado para los graduados de la Universidad Nacional De Cañete dividido en (63 diplomas para Bachiller y 1 diploma de Título profesional)",
            // "url_pdf" => "https://drive.google.com/file/d/1NV0UARlCKtYei_9Gkuxiy_Zqxoiwonb3/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-17 10:30:00",
            // "last_date" => "2023-07-18 10:00:00",
            // "created_at" => "2023-07-17 10:30:00",
            // "updated_at" => "2023-07-17 10:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE DISEÑO GRAFICO Y DIAGRAMACION DE MATERIALES PROMOCIONALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1Gx9xhZmEEesUbZ3RfIatF3em9vDsit-j/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-17 11:00:00",
            // "last_date" => "2023-07-18 10:00:00",
            // "created_at" => "2023-07-17 11:00:00",
            // "updated_at" => "2023-07-17 11:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE UNIFORME ANTIFLUIDO PARA PERSONAL DE SALUD",
            // "url_pdf" => "https://drive.google.com/file/d/11zdactRbMKBmM_TCk76veC2i8FxjCkiC/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-17 11:00:00",
            // "last_date" => "2023-07-18 18:00:00",
            // "created_at" => "2023-07-17 11:00:00",
            // "updated_at" => "2023-07-17 11:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de reactivos para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1baMQ_r0D0X1c4anP63Fx28knS_yzV7RZ/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-17 16:00:00",
            // "last_date" => "2023-07-19 12:00:00",
            // "created_at" => "2023-07-17 16:00:00",
            // "updated_at" => "2023-07-17 16:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE UNIFORME ANTIFLUIDO PARA PERSONAL DE SALUD",
            // "url_pdf" => "https://drive.google.com/file/d/11zdactRbMKBmM_TCk76veC2i8FxjCkiC/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-17 17:00:00",
            // "last_date" => "2023-08-07 18:00:00",
            // "created_at" => "2023-07-17 17:00:00",
            // "updated_at" => "2023-07-17 17:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO “CURSO TALLER DE NEUROÉTICA EN LA GESTIÓN PÚBLICA”, PARA EL PERSONAL ADMINISTRATIVO DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1k2gyGwxs68i6o0t_qHQ7GU1LhR4LdNEc/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-17 17:00:00",
            // "last_date" => "2023-07-18 12:00:00",
            // "created_at" => "2023-07-17 17:00:00",
            // "updated_at" => "2023-07-17 17:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE CONTABILIDAD vs 02",
            // "url_pdf" => "https://drive.google.com/file/d/12okcOcS9kIjYhj39WWcz7DX6PhJi5TOp/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-18 15:00:00",
            // "last_date" => "2023-07-19 15:00:00",
            // "created_at" => "2023-07-18 15:00:00",
            // "updated_at" => "2023-07-18 15:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE LIBROS PARA LA UNIDAD DE ABASTECIMIENTO DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/10UUUJdpEm4UgpXcuIjaeGHIfVhhwaAmI/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-07-18 15:00:00",
            // "last_date" => "2023-08-14 11:00:00",
            // "created_at" => "2023-07-18 15:00:00",
            // "updated_at" => "2023-07-18 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CONTROL PREVIO Y REVISION DE DOCUMENTOS ADMINISTRATIVOS.",
            // "url_pdf" => "https://drive.google.com/file/d/1g4pEPpou3XSa9SP1YkqSveaZcUPa2Hu4/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-19 09:30:00",
            // "last_date" => "2023-07-19 18:00:00",
            // "created_at" => "2023-07-19 09:30:00",
            // "updated_at" => "2023-07-19 09:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de alquiler de un vehículo menor, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”. ",
            // "url_pdf" => "https://drive.google.com/file/d/1YAN9GWSwui1hPFJff4MtN4onbbzWq04v/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-19 11:30:00",
            // "last_date" => "2023-07-19 17:00:00",
            // "created_at" => "2023-07-19 11:30:00",
            // "updated_at" => "2023-07-19 11:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de apoyo Informático de las plataformas de investigación en la Dirección de la Unidad de Investigación de la Facultad de Ciencias Empresariales.",
            // "url_pdf" => "https://drive.google.com/file/d/1FvPPod02El7PEElf0r68LWoVCT4Uvdcf/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-19 11:30:00",
            // "last_date" => "2023-07-20 08:00:00",
            // "created_at" => "2023-07-19 11:30:00",
            // "updated_at" => "2023-07-19 11:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de apoyo Informático de las plataformas de investigación en la Dirección de la Unidad de Investigación de la Facultad de Agronomía y la Dirección de la Unidad de Investigación de la Facultad de Ingeniería.",
            // "url_pdf" => "https://drive.google.com/file/d/1kH4VQoEXLpr-_FqtA5kVXA-7SHUbzI5Q/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-19 11:30:00",
            // "last_date" => "2023-07-20 08:00:00",
            // "created_at" => "2023-07-19 11:30:00",
            // "updated_at" => "2023-07-19 11:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de apoyo Informático de las plataformas de investigación en la Vicepresidencia de Investigación.",
            // "url_pdf" => "https://drive.google.com/file/d/12d3yLlVcp40MT9dAAyNzmrIDBe3odz5b/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-19 11:30:00",
            // "last_date" => "2023-07-20 08:00:00",
            // "created_at" => "2023-07-19 11:30:00",
            // "updated_at" => "2023-07-19 11:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UN HERVIDOR ELECTRICO DE 3.5L PARA LA FACULTAD DE CIENCIAS EMPRESARIALES",
            // "url_pdf" => "https://drive.google.com/file/d/1wJdQQzODsaBYHycPSNkivwBOVqbcQ9Rb/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-20 16:00:00",
            // "last_date" => "2023-07-25 18:00:00",
            // "created_at" => "2023-07-20 16:00:00",
            // "updated_at" => "2023-07-20 16:00:00"
            // ]
            // ,[
            // "description" => "“SERVICIO DE ASISTENCIA TECNICA PARA LA CONTRATACION DE LOS REQUERIMIENTOS DE BIENES Y SERVICIOS”",
            // "url_pdf" => "https://drive.google.com/file/d/1fwVTpthtULKgAIw7XFhE9YlvWFZSy78i/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-21 18:00:00",
            // "last_date" => "2023-07-24 08:00:00",
            // "created_at" => "2023-07-21 18:00:00",
            // "updated_at" => "2023-07-21 18:00:00"
            // ]
            // ,[
            // "description" => "Servicio Especializado de Revisión de Documentos para la Unidad de Abastecimiento.",
            // "url_pdf" => "https://drive.google.com/file/d/12IDlCYF69cJrZMItCZLxDYPRe-NhaUE5/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-21 18:00:00",
            // "last_date" => "2023-07-24 08:30:00",
            // "created_at" => "2023-07-21 18:00:00",
            // "updated_at" => "2023-07-21 18:00:00"
            // ]
            // ,[
            // "description" => "Suscripción anual de biblioteca virtual ",
            // "url_pdf" => "https://drive.google.com/drive/folders/17-wTxYAJ8lWH4Aw_Hd3T5RZD7iR-4-yB?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-24 08:00:00",
            // "last_date" => "2023-07-26 10:00:00",
            // "created_at" => "2023-07-24 08:00:00",
            // "updated_at" => "2023-07-24 08:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de limpieza para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete.”",
            // "url_pdf" => "https://drive.google.com/file/d/15_U4yNabquk2i3d7P7KVjBvCmPdqdh7G/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-24 09:00:00",
            // "last_date" => "2023-08-28 08:00:00",
            // "created_at" => "2023-07-24 09:00:00",
            // "updated_at" => "2023-07-24 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE IMPLEMENTACIÓN DEL SISTEMA DE CONTROL INTERNO, para la Secretaría General de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1SKikjMwPTUCE2AUPRwU5IwEphZFW7Gqk/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-24 09:30:00",
            // "last_date" => "2023-07-25 18:00:00",
            // "created_at" => "2023-07-24 09:30:00",
            // "updated_at" => "2023-07-24 09:30:00"
            // ]
            // ,[
            // "description" => "CONTRATAR LOS SERVICIOS DE UN PROFESIONAL ESPECIALISTA EN GESTIÓN ADMINISTRATIVA PARA LA PRESIDENCIA DE LA COMISIÓN ORGANIZADORA",
            // "url_pdf" => "https://drive.google.com/file/d/1PUhNDsbuquXrP9YMdiBH51EkK1Pku93i/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-24 10:00:00",
            // "last_date" => "2023-07-24 18:00:00",
            // "created_at" => "2023-07-24 10:00:00",
            // "updated_at" => "2023-07-24 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo de muestreo foliar – Personal 1, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”.",
            // "url_pdf" => "https://drive.google.com/file/d/1657gzlp02Ss3-TP-TeusK44xl2WJYHQU/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-24 09:30:00",
            // "last_date" => "2023-07-24 17:00:00",
            // "created_at" => "2023-07-24 09:30:00",
            // "updated_at" => "2023-07-24 09:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo de muestreo foliar – Personal 2, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”.",
            // "url_pdf" => "https://drive.google.com/file/d/1ZYTBhxiT6_hBF8Eqwgvgk63i-ERZyZ_S/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-24 09:30:00",
            // "last_date" => "2023-07-24 17:00:00",
            // "created_at" => "2023-07-24 09:30:00",
            // "updated_at" => "2023-07-24 09:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA EJECUCION DEL TALLER DE TESIS DE LA FACULTAD DE CIENCIAS EMPRESARIALES",
            // "url_pdf" => "https://drive.google.com/file/d/1PLqJJdFTMdqeIj6CBe5zTLso9hne2M_E/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-24 09:30:00",
            // "last_date" => "2023-07-25 10:00:00",
            // "created_at" => "2023-07-24 09:30:00",
            // "updated_at" => "2023-07-24 09:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo para evaluación de productividad, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”. ",
            // "url_pdf" => "https://drive.google.com/file/d/1a8mpcU5bXEt559Wf-FfKedAvKIEVbFPr/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-24 09:30:00",
            // "last_date" => "2023-07-24 17:00:00",
            // "created_at" => "2023-07-24 09:30:00",
            // "updated_at" => "2023-07-24 09:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de oficina para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete.”",
            // "url_pdf" => "https://drive.google.com/file/d/1qmZP90puuoOST0viavcXirftTEySGdHv/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-24 16:30:00",
            // "last_date" => "2023-08-02 18:00:00",
            // "created_at" => "2023-07-24 16:30:00",
            // "updated_at" => "2023-07-24 16:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de asistencia en seguimiento de actividades administrativas para el proyecto de investigación: “Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete”.",
            // "url_pdf" => "https://drive.google.com/file/d/1BavVQGssC7vi4I1PpvlkHf5wsPPmaYGp/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 09:00:00",
            // "last_date" => "2023-07-25 17:00:00",
            // "created_at" => "2023-07-25 09:00:00",
            // "updated_at" => "2023-07-25 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de bienes para la implementación del Laboratorio de Control Entomológico de Plagas Agrícolas del Centro Internacional de Investigación para la Sustentabilidad (CIIS) de la Universidad Nacional de Cañete – Sede Lunahuaná.",
            // "url_pdf" => "https://drive.google.com/file/d/1mp8FgY5osB3E70Yla-1E9FB86pjl4VTU/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 11:00:00",
            // "last_date" => "2023-08-02 19:30:00",
            // "created_at" => "2023-07-25 11:00:00",
            // "updated_at" => "2023-07-25 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de bienes para la implementación del Laboratorio de Control Entomológico de Plagas Agrícolas del Centro Internacional de Investigación para la Sustentabilidad (CIIS) de la Universidad Nacional de Cañete – Sede Lunahuaná.",
            // "url_pdf" => "https://drive.google.com/file/d/10ygLCjdEFr3c7aj6ShJSfT0YDGNOJKNv/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 11:00:00",
            // "last_date" => "2023-07-27 17:00:00",
            // "created_at" => "2023-07-25 11:00:00",
            // "updated_at" => "2023-07-25 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de bienes para la implementación del Laboratorio de Control Entomológico de Plagas Agrícolas del Centro Internacional de Investigación para la Sustentabilidad (CIIS) de la Universidad Nacional de Cañete – Sede Lunahuaná.",
            // "url_pdf" => "https://drive.google.com/file/d/1LLTddK2gy37WeKba4OOlsEpKN8BMu7b2/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 11:00:00",
            // "last_date" => "2023-07-27 17:00:00",
            // "created_at" => "2023-07-25 11:00:00",
            // "updated_at" => "2023-07-25 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de bienes para la implementación del Laboratorio de Control Entomológico de Plagas Agrícolas del Centro Internacional de Investigación para la Sustentabilidad (CIIS) de la Universidad Nacional de Cañete – Sede Lunahuaná",
            // "url_pdf" => "https://drive.google.com/file/d/1yBgfd0b70GjMxglmVuY4XyZ7fxuEg8a-/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 11:00:00",
            // "last_date" => "2023-07-27 17:00:00",
            // "created_at" => "2023-07-25 11:00:00",
            // "updated_at" => "2023-07-25 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de bienes para la implementación del Laboratorio de Control Entomológico de Plagas Agrícolas del Centro Internacional de Investigación para la Sustentabilidad (CIIS) de la Universidad Nacional de Cañete – Sede Lunahuaná",
            // "url_pdf" => "https://drive.google.com/file/d/1nPOF7OfkhLC4Co_2hRCRknODyp0gmd1m/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 11:00:00",
            // "last_date" => "2023-07-27 11:00:00",
            // "created_at" => "2023-07-25 11:00:00",
            // "updated_at" => "2023-07-25 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de bienes para la implementación del Laboratorio de Control Entomológico de Plagas Agrícolas del Centro Internacional de Investigación para la Sustentabilidad (CIIS) de la Universidad Nacional de Cañete – Sede Lunahuaná.",
            // "url_pdf" => "https://drive.google.com/file/d/1tupbwSFk0pOVD7--EU5E08s_Wy6Ph8qW/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 11:00:00",
            // "last_date" => "2023-07-27 11:00:00",
            // "created_at" => "2023-07-25 11:00:00",
            // "updated_at" => "2023-07-25 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de bienes para la implementación del Laboratorio de Control Entomológico de Plagas Agrícolas del Centro Internacional de Investigación para la Sustentabilidad (CIIS) de la Universidad Nacional de Cañete – Sede Lunahuaná",
            // "url_pdf" => "https://drive.google.com/file/d/1d2hbXGAzQY_n4pa7NYap_xAnyH7aCFHv/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 11:00:00",
            // "last_date" => "2023-07-27 11:00:00",
            // "created_at" => "2023-07-25 11:00:00",
            // "updated_at" => "2023-07-25 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de bienes para la implementación del Laboratorio de Control Entomológico de Plagas Agrícolas del Centro Internacional de Investigación para la Sustentabilidad (CIIS) de la Universidad Nacional de Cañete – Sede Lunahuaná.",
            // "url_pdf" => "https://drive.google.com/file/d/1uyAR_1ckph4Zyp8QYPmMQh1rbtjYVY8Q/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 11:00:00",
            // "last_date" => "2023-07-27 11:00:00",
            // "created_at" => "2023-07-25 11:00:00",
            // "updated_at" => "2023-07-25 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de materiales para el desarrollo de actividades de investigación del Laboratorio de Control Microbiológico de Plagas Agrícolas del Centro Internacional de Investigación para la Sustentabilidad (CIIS) de la Universidad Nacional de Cañete – Sede Lunahuaná como parte del desarrollo de proyectos investigativos transversales.",
            // "url_pdf" => "https://drive.google.com/file/d/18ugU-UL5BR3Z6mc1TtyRhx3HYHiIdqCT/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 11:00:00",
            // "last_date" => "2023-07-27 17:00:00",
            // "created_at" => "2023-07-25 11:00:00",
            // "updated_at" => "2023-07-25 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de materiales para el desarrollo de actividades de investigación del Laboratorio de Control Microbiológico de Plagas Agrícolas del Centro Internacional deInvestigación para la Sustentabilidad (CIIS) de la Universidad Nacional de Cañete – Sede Lunahuaná como parte del desarrollo de proyectosinvestigativos transversales.",
            // "url_pdf" => "https://drive.google.com/file/d/1CijWrXipy00lpRdHAsqVat6hoZdwhzyi/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 11:00:00",
            // "last_date" => "2023-07-27 17:00:00",
            // "created_at" => "2023-07-25 11:00:00",
            // "updated_at" => "2023-07-25 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO ESPECIALIZADO EN GESTIÓN ADMINISTRATIVA PARA LA UNIDAD DE GRADOS Y TITULOS",
            // "url_pdf" => "https://drive.google.com/file/d/1JvJ42FYB8JzHQCTw2lQz2SkMfOzs2oww/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 14:00:00",
            // "last_date" => "2023-07-26 10:00:00",
            // "created_at" => "2023-07-25 14:00:00",
            // "updated_at" => "2023-07-25 14:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de equipos para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete.”",
            // "url_pdf" => "https://drive.google.com/file/d/1WOd43-BfqDItG48HFQg_E78N2ygIiAJD/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 14:00:00",
            // "last_date" => "2023-08-10 18:00:00",
            // "created_at" => "2023-07-25 14:00:00",
            // "updated_at" => "2023-07-25 14:00:00"
            // ]
            // ,[
            // "description" => "Suscripción anual de Sistemas PMB",
            // "url_pdf" => "https://drive.google.com/file/d/1MjdKjlcjFxK_gaH51pd_h_plXY_gDRFt/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 15:00:00",
            // "last_date" => "2023-07-28 18:00:00",
            // "created_at" => "2023-07-25 15:00:00",
            // "updated_at" => "2023-07-25 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO “PLANEAMIENTO DE PROYECTOS CON MS PROJECT”.",
            // "url_pdf" => "https://drive.google.com/file/d/1_NrH76QcTIQMiZg9Lo-6r2ex3zGVoHB-/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 17:00:00",
            // "last_date" => "2023-07-31 17:00:00",
            // "created_at" => "2023-07-25 17:00:00",
            // "updated_at" => "2023-07-25 17:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO DE CAPACITACIÓN EN INTRODUCCIÓN A PYTHON PARA MACHINE LEARNING",
            // "url_pdf" => "https://drive.google.com/file/d/1h7O14UlDXUVPOkxu05-A9LbhBmDmuI72/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 17:00:00",
            // "last_date" => "2023-07-31 18:00:00",
            // "created_at" => "2023-07-25 17:00:00",
            // "updated_at" => "2023-07-25 17:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ELABORACION DE CONTENIDO DIGITAL PARA LAS REDES SOCIALES Y EJECUCION DE LA CAMPAÑA DIGITAL ",
            // "url_pdf" => "https://drive.google.com/file/d/1zhCrdZ1e3Pr45KMwmAomidlxoI-7lkmB/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 17:00:00",
            // "last_date" => "2023-07-26 12:00:00",
            // "created_at" => "2023-07-25 17:00:00",
            // "updated_at" => "2023-07-25 17:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de reactivos para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1xety8cM_OuZNzfyaBqchjSBfCc4w0C95/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-07-25 18:00:00",
            // "last_date" => "2023-07-31 08:00:00",
            // "created_at" => "2023-07-25 18:00:00",
            // "updated_at" => "2023-07-25 18:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de autoclave para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1vCeHS2XRYDQmBmn1Y2iec01m-Eb_W16x/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-26 08:00:00",
            // "last_date" => "2023-07-31 18:00:00",
            // "created_at" => "2023-07-26 08:00:00",
            // "updated_at" => "2023-07-26 08:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de laboratorio para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1BdYrUxPF0KWMXHbMxDN6H3AssNQNndzl/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-07-26 08:30:00",
            // "last_date" => "2023-07-31 18:00:00",
            // "created_at" => "2023-07-26 08:30:00",
            // "updated_at" => "2023-07-26 08:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE HERRAMIENTAS PARA OFICINA",
            // "url_pdf" => "https://drive.google.com/file/d/1_yDFpe586NRgmOlNFhxbSTfIROqf3Y_s/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-26 09:00:00",
            // "last_date" => "2023-08-03 18:00:00",
            // "created_at" => "2023-07-26 09:00:00",
            // "updated_at" => "2023-07-26 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO DE CAPACITACIÓN EN POWER BI BUSINESS INTELLIGENCE SEGUNDO NIVEL",
            // "url_pdf" => "https://drive.google.com/file/d/1V14VE4YK4cZvr9rgsEjSZ4LV4K_sgi8b/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-26 10:00:00",
            // "last_date" => "2023-08-15 18:00:00",
            // "created_at" => "2023-07-26 10:00:00",
            // "updated_at" => "2023-07-26 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO EN GESTIÓN PÚBLICA Y GOBERNANZA.",
            // "url_pdf" => "https://drive.google.com/file/d/1Awef40PczsrOSQyzmV1_Q7-7LM0bX3cy/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-26 10:30:00",
            // "last_date" => "2023-08-04 10:00:00",
            // "created_at" => "2023-07-26 10:30:00",
            // "updated_at" => "2023-07-26 10:30:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE ALIMENTACION DE CONSUMO HUMANO (coffe break y almuerzo) PARA LA FACULTAD DE CIENCIAS EMPRESARIALES",
            // "url_pdf" => "https://drive.google.com/file/d/1e4vP5dZSJ0AnyojFuqUs7cdSbLtxiEOd/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-26 12:00:00",
            // "last_date" => "2023-07-31 13:00:00",
            // "created_at" => "2023-07-26 12:00:00",
            // "updated_at" => "2023-07-26 12:00:00"
            // ]
            // ,[
            // "description" => "Contratación del Servicio de limpieza y mantenimiento de local, Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1HEpPgnzwDL3pAG6b1roAUVXLiAJLZNYp/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-07-31 15:30:00",
            // "last_date" => "2023-08-01 10:00:00",
            // "created_at" => "2023-07-31 15:30:00",
            // "updated_at" => "2023-07-31 15:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES DE ESCRITORIO Y MATERIAL DIDÁCTICO PARA EL DEPARTAMENTO ACADÉMICO DE AGRONOMÍA DE LA UNDC. VS 2",
            // "url_pdf" => "https://drive.google.com/file/d/1zMLjrwZZ18MqS1mNh3GQ4yDa1PlGDptI/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-07-31 15:30:00",
            // "last_date" => "2023-08-01 18:00:00",
            // "created_at" => "2023-07-31 15:30:00",
            // "updated_at" => "2023-07-31 15:30:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE SEGUIMIENTO Y MONITOREO DE ACTIVIDADES DE GESTIÓN Y/O ADMINISTRATIVAS DE LA ESCUELA PROFESIONAL DE CONTABILIDAD",
            // "url_pdf" => "https://drive.google.com/file/d/1jKr4VFc-q0DYHql-xyoqyjfb6UegMqUq/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-01 08:30:00",
            // "last_date" => "2023-08-01 18:00:00",
            // "created_at" => "2023-08-01 08:30:00",
            // "updated_at" => "2023-08-01 08:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de CAPACITACIÓN denominado Propagación in vitro de tejidos vegetales para la Escuela Profesional de Agronomía como parte del Plan de Capacitación 2023 dirigido a estudiantes.",
            // "url_pdf" => "https://drive.google.com/file/d/1yVL6tAHtzMIVWy_iEO6KGzVXa1MioAEC/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-01 09:00:00",
            // "last_date" => "2023-08-02 08:00:00",
            // "created_at" => "2023-08-01 09:00:00",
            // "updated_at" => "2023-08-01 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de CAPACITACIÓN denominado Nutrición Vegetal para la Escuela Profesional de Agronomía como parte del Plan de Capacitación 2023 dirigido a estudiantes.",
            // "url_pdf" => "https://drive.google.com/file/d/1SWMnwsneHCp6EHpkouL-ilFHb7n3uGpy/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-01 09:00:00",
            // "last_date" => "2023-08-02 08:00:00",
            // "created_at" => "2023-08-01 09:00:00",
            // "updated_at" => "2023-08-01 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de CAPACITACIÓN denominado MANEJO POST COSECHA DE PRODUCTOS VEGETALES para la Escuela Profesional de Agronomía como parte del Plan de Capacitación 2023 dirigido a estudiantes.",
            // "url_pdf" => "https://drive.google.com/file/d/1RzXWO4nDUGHFmuqcwy-dxeWADBz3044m/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-01 09:00:00",
            // "last_date" => "2023-08-02 08:00:00",
            // "created_at" => "2023-08-01 09:00:00",
            // "updated_at" => "2023-08-01 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MICRÓFONOS INALÁMBRICOS TIPO SOLAPERO",
            // "url_pdf" => "https://drive.google.com/file/d/17l7WE1OhhC1X1kHwbQVVRl2P19pEoDH2/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-01 09:15:00",
            // "last_date" => "2023-08-02 08:00:00",
            // "created_at" => "2023-08-01 09:15:00",
            // "updated_at" => "2023-08-01 09:15:00"
            // ]
            // ,[
            // "description" => "REQUERIMIENTO CAMISETAS DE IDENTIFICACIÓN",
            // "url_pdf" => "https://drive.google.com/file/d/1wfqOhqk-54Lze9FbDsFeYiSMzlI4l_4l/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-01 10:00:00",
            // "last_date" => "2023-08-17 10:00:00",
            // "created_at" => "2023-08-01 10:00:00",
            // "updated_at" => "2023-08-01 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE CONTABILIDAD 1 - V3",
            // "url_pdf" => "https://drive.google.com/file/d/1LcBDI3jcNOaPtKe51OMk1BUa1jBD4U0T/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-01 10:00:00",
            // "last_date" => "2023-08-02 18:00:00",
            // "created_at" => "2023-08-01 10:00:00",
            // "updated_at" => "2023-08-01 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE TINTA PARA LA ESCUELA PROFESIONAL DE CONTABILIDAD 2 - V3 ",
            // "url_pdf" => "https://drive.google.com/file/d/1XkZq47t7pvB865ykHBOjINO5f_ZfNaOy/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-01 10:00:00",
            // "last_date" => "2023-08-02 18:00:00",
            // "created_at" => "2023-08-01 10:00:00",
            // "updated_at" => "2023-08-01 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 4",
            // "url_pdf" => "https://drive.google.com/file/d/19AJPXCgvPm8Dpd1w3jgrte0ujUhFPjgI/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-01 12:30:00",
            // "last_date" => "2023-08-02 10:00:00",
            // "created_at" => "2023-08-01 12:30:00",
            // "updated_at" => "2023-08-01 12:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y de limpieza para la Unidad de Servicios Generales de la Universidad Nacional de Cañete – Personal 5",
            // "url_pdf" => "https://drive.google.com/file/d/1W2_jlqKlOVMD2UEu4r_-CVRQMu_0uPG3/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-01 12:30:00",
            // "last_date" => "2023-08-02 10:00:00",
            // "created_at" => "2023-08-01 12:30:00",
            // "updated_at" => "2023-08-01 12:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 05 bidones de Agua de Mesa sin gas x 20 L para la Escuela Profesional de Contabilidad de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1va95_Ha0bwjMF0xT67oqm_6QVXhbFaDK/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-01 17:30:00",
            // "last_date" => "2023-08-03 13:00:00",
            // "created_at" => "2023-08-01 17:30:00",
            // "updated_at" => "2023-08-01 17:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SOPORTE INFORMÁTICO EN WEB DE LA DIRECCIÓN DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1nGuEaH_gQYmyT6D6w1hJGmYZy89WTpC7/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-02 10:00:00",
            // "last_date" => "2023-08-03 18:00:00",
            // "created_at" => "2023-08-02 10:00:00",
            // "updated_at" => "2023-08-02 10:00:00"
            // ]
            // ,[
            // "description" => "Servicio de ELABORACIÓN DE DOCUMENTOS ADMINISTRATIVOS para la Unidad de Investigación, Comité de Licenciamiento, Comité de Acreditación, Comité ISO-SIG y la Dirección de Centro de Producción de la Facultad de Ciencias Agrarias de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1hqbHrrQ_qK_VgELGRImdna5iYSqfXQRi/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-02 10:00:00",
            // "last_date" => "2023-08-03 15:00:00",
            // "created_at" => "2023-08-02 10:00:00",
            // "updated_at" => "2023-08-02 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de Cajas Archivadoras para la Dirección de Gestión Académica",
            // "url_pdf" => "https://drive.google.com/file/d/1Z-gunB4u__Ygbb2dnW8zflAGoBhcXIO2/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-02 11:30:00",
            // "last_date" => "2023-08-03 18:00:00",
            // "created_at" => "2023-08-02 11:30:00",
            // "updated_at" => "2023-08-02 11:30:00"
            // ]
            // ,[
            // "description" => "Contratación del Servicio de Consultoría en General para realizar el Expediente de Factibilidad y Pertinencia para la Creación y autorización de funcionamiento del Programa de Estudios de Derecho y Ciencias Políticas en la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1ubvZl2HvR19XU5q9HcgMZtoJRSlvGYQT/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-02 12:00:00",
            // "last_date" => "2023-08-04 12:00:00",
            // "created_at" => "2023-08-02 12:00:00",
            // "updated_at" => "2023-08-02 12:00:00"
            // ]
            // ,[
            // "description" => "REQUERIMIENTO DE GANCHOS, BOLSAS Y PERCHEROS PARA VESTUARIOS",
            // "url_pdf" => "https://drive.google.com/file/d/1UnhnTTI-IQ5ObgilH_EoUUmL223xqXFe/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-02 12:30:00",
            // "last_date" => "2023-08-11 10:00:00",
            // "created_at" => "2023-08-02 12:30:00",
            // "updated_at" => "2023-08-02 12:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE SILLAS PARA EVENTOS PROTOCOLARES Y ACADEMICOS DE LA OFICINA DE COMUNICACIONES",
            // "url_pdf" => "https://drive.google.com/file/d/1wQV_eM-UR8QblDC_MbIDkkHf187gzsRW/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-02 18:00:00",
            // "last_date" => "2023-08-04 18:00:00",
            // "created_at" => "2023-08-02 18:00:00",
            // "updated_at" => "2023-08-02 18:00:00"
            // ]
            // ,[
            // "description" => "REQUERIMIENTO DE UTILES Y DESCARTABLES",
            // "url_pdf" => "https://drive.google.com/file/d/1hW3hS60--_arWr8eQS5CJOvoN6zGLy9p/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-03 09:00:00",
            // "last_date" => "2023-08-17 18:00:00",
            // "created_at" => "2023-08-03 09:00:00",
            // "updated_at" => "2023-08-03 09:00:00"
            // ]
            // ,[
            // "description" => "“ESPECIALISTA EN GESTION DE CONTRATACIONES PUBLICAS”",
            // "url_pdf" => "https://drive.google.com/file/d/1XrWGx-CIbdS148rSr82pZGUrit2qJYz1/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-03 10:30:00",
            // "last_date" => "2023-08-03 18:00:00",
            // "created_at" => "2023-08-03 10:30:00",
            // "updated_at" => "2023-08-03 10:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO DE GESTIÓN DE TALENTO HUMANO",
            // "url_pdf" => "https://drive.google.com/file/d/11EdTLJcKTwpcUFjwZdO7Zhkxsyh8BpcN/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-03 11:00:00",
            // "last_date" => "2023-08-05 12:00:00",
            // "created_at" => "2023-08-03 11:00:00",
            // "updated_at" => "2023-08-03 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ORDENAMIENTO DE DOCUMENTOS Y ATENCIÓN DE CONSULTAS PARA LA DIRECCIÓN DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1CkGIK54OXTV7tHenXOgcY6eS6RL0L0xc/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-03 15:30:00",
            // "last_date" => "2023-08-04 10:00:00",
            // "created_at" => "2023-08-03 15:30:00",
            // "updated_at" => "2023-08-03 15:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de asistencia en seguimiento de actividades administrativas para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”.",
            // "url_pdf" => "https://drive.google.com/file/d/1i1nVAXCJfOIYPCpydgyt5PMu1nkfYmVc/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-03 15:00:00",
            // "last_date" => "2023-08-04 18:00:00",
            // "created_at" => "2023-08-03 15:00:00",
            // "updated_at" => "2023-08-03 15:00:00"
            // ]
            // ,[
            // "description" => "REQUERIMIENTO DE ALIMENTOS Y BEBIDAS PARA CONSUMO HUMANO",
            // "url_pdf" => "https://drive.google.com/file/d/1FBnxVQ-wkXTLzoBnTXdCiz3C-TfRFZBR/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-03 17:00:00",
            // "last_date" => "2023-08-04 18:00:00",
            // "created_at" => "2023-08-03 17:00:00",
            // "updated_at" => "2023-08-03 17:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE BIDONES DE AGUA DE MESA SIN GAS DE 20 LT PARA ARCHIVO CENTRAL",
            // "url_pdf" => "https://drive.google.com/file/d/1rfvyMypz820yjcEU8my32_r_Xb2Wh2-S/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-03 18:00:00",
            // "last_date" => "2023-08-04 18:00:00",
            // "created_at" => "2023-08-03 18:00:00",
            // "updated_at" => "2023-08-03 18:00:00"
            // ]
            // ,[
            // "description" => "“SERVICIO DE MANTENIMIENTO CORRECTIVO DE EQUIPOS INFORMÁTICOS DE LA SEDE HUALCARÁ DE LA UNIVERSIDAD NACIONAL DE CAÑETE”",
            // "url_pdf" => "https://drive.google.com/file/d/1ry9Rihyd48zkI2g2_I7mDCmj9PbyULge/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-03 18:00:00",
            // "last_date" => "2023-08-08 18:00:00",
            // "created_at" => "2023-08-03 18:00:00",
            // "updated_at" => "2023-08-03 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo de suelos, para el proyecto de investigación: “Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023)”.",
            // "url_pdf" => "https://drive.google.com/file/d/1ApStVdz7o4NHTof-s6JaFWmYAzs_akIt/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-04 08:00:00",
            // "last_date" => "2023-08-07 18:00:00",
            // "created_at" => "2023-08-04 08:00:00",
            // "updated_at" => "2023-08-04 08:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de mantenimiento de equipos de laboratorio, para el proyecto de investigación: “Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023)”.",
            // "url_pdf" => "https://drive.google.com/file/d/1AiwMLB1WaafDvlaeBUtfZwI9IZAd3Z5w/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-04 06:00:00",
            // "last_date" => "2023-08-07 18:00:00",
            // "created_at" => "2023-08-04 06:00:00",
            // "updated_at" => "2023-08-04 06:00:00"
            // ]
            // ,[
            // "description" => "Servicio Especializado en Sistemas Informáticos",
            // "url_pdf" => "https://drive.google.com/file/d/1F4qXBt3w_IzSPWT03A0Gq-OMN880VyyE/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-04 17:00:00",
            // "last_date" => "2023-08-07 10:00:00",
            // "created_at" => "2023-08-04 17:00:00",
            // "updated_at" => "2023-08-04 17:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE FOLDER DE CARTON CON LOGOTIPO ",
            // "url_pdf" => "https://drive.google.com/file/d/18bkx2rHlcg_upXbO0paEZE0BU-hVmaJg/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-04 18:00:00",
            // "last_date" => "2023-08-07 18:00:00",
            // "created_at" => "2023-08-04 18:00:00",
            // "updated_at" => "2023-08-04 18:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de balanza electrónica para el proyecto: Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote.”",
            // "url_pdf" => "https://drive.google.com/file/d/1bIHbcDClW2pqUYRGpQvRdiCTqHe-SLfg/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-04 18:00:00",
            // "last_date" => "2023-08-07 16:00:00",
            // "created_at" => "2023-08-04 18:00:00",
            // "updated_at" => "2023-08-04 18:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de reactivos químicos para el laboratorio de fitomejoramiento y semillas y Sanidad Vegetal",
            // "url_pdf" => "https://drive.google.com/file/d/1FzecnCsWoK5N_Iz2TEEWGLPtYFgnbf1n/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-04 18:00:00",
            // "last_date" => "2023-08-07 18:00:00",
            // "created_at" => "2023-08-04 18:00:00",
            // "updated_at" => "2023-08-04 18:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de autoclave para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete” - SEGUNDA CONVOCATORIA",
            // "url_pdf" => "https://drive.google.com/file/d/1DT39UL37CdDoKo-WXwndtQ-YUfv2LDs1/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-07 10:00:00",
            // "last_date" => "2023-08-08 18:00:00",
            // "created_at" => "2023-08-07 10:00:00",
            // "updated_at" => "2023-08-07 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAMPO PARA EL MANEJO DE LABORES CULTURALES AGRÍCOLAS DEL FUNDO TERCER MUNDO DE LA ESCUELA PROFESIONAL DE AGRONOMÍA.",
            // "url_pdf" => "https://drive.google.com/file/d/1kTiBrsosYhXbB2_Vb8BvmB2TRfD8dW_9/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-07 10:00:00",
            // "last_date" => "2023-08-08 08:00:00",
            // "created_at" => "2023-08-07 10:00:00",
            // "updated_at" => "2023-08-07 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAMPO PARA EL MANEJO DE LABORES CULTURALES AGRÍCOLAS DEL FUNDO TERCER MUNDO DE LA ESCUELA PROFESIONAL DE AGRONOMÍA.",
            // "url_pdf" => "https://drive.google.com/file/d/1qZ5r_lGngHDt9ljwmoYDBJzfrDnFfk2H/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-07 10:00:00",
            // "last_date" => "2023-08-08 18:00:00",
            // "created_at" => "2023-08-07 10:00:00",
            // "updated_at" => "2023-08-07 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE UN PROFESIONAL ESPECIALIZADO (MEDICO EN SALUD OCUPACIONAL) PARA LA IMPLEMENTACIÓN DE SISTEMAS DE GESTIÓN DE SEGURIDAD Y SALUD OCUPACIONAL EN LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1fZO7O-XWOVJkJheLb73mqUuw8ci2FHAg/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-07 12:30:00",
            // "last_date" => "2023-08-08 18:00:00",
            // "created_at" => "2023-08-07 12:30:00",
            // "updated_at" => "2023-08-07 12:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Seguimiento y Monitoreo de requerimientos para el EQUIPAMIENTO Y MOBILIARIO en la Inversión: MEJORAMIENTO DE LOS SERVICIOS DE EDUCACIÓN SUPERIOR EN LA SEDE ACADÉMICA CNI, DE LA UNIVERSIDAD NACIONAL DE CAÑETE, FUNDO SAN LUIS DEL DISTRITO DE SAN LUIS - PROVINCIA DE CAÑETE - DEPARTAMENTO DE LIMA”, con Código Único de Inversión 2444577.",
            // "url_pdf" => "https://drive.google.com/file/d/1LOSPvctQpp_VBj7PUxOkl3WYSKDnlu6z/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-07 12:30:00",
            // "last_date" => "2023-08-08 18:00:00",
            // "created_at" => "2023-08-07 12:30:00",
            // "updated_at" => "2023-08-07 12:30:00"
            // ]
            // ,[
            // "description" => "Servicio de ELABORACIÓN DE DOCUMENTOS ADMINISTRATIVOS para la Unidad de Investigación, Comité de Licenciamiento, Comité de Acreditación, Comité ISO-SIG y la Dirección de Centro de Producción de la Facultad de Ciencias Agrarias de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1LkcfBlO4U3MlnTVZYQN1vSC9OujElLtc/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-07 03:30:00",
            // "last_date" => "2023-08-08 10:00:00",
            // "created_at" => "2023-08-07 03:30:00",
            // "updated_at" => "2023-08-07 03:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO PARA COORDINAR, EJECUTAR Y SEGUIMIENTO DE ACTIVIDADES DE RECURSOS HUMANOS",
            // "url_pdf" => "https://drive.google.com/file/d/1maeXWGq2udB-i1WVX_n9a5LoiqWLKgkO/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-07 16:00:00",
            // "last_date" => "2023-08-08 10:00:00",
            // "created_at" => "2023-08-07 16:00:00",
            // "updated_at" => "2023-08-07 16:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de equipos para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1NYiuEq5RNtLd3c1u9FcKQqtZf1q6njaQ/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-07 15:00:00",
            // "last_date" => "2023-08-21 08:00:00",
            // "created_at" => "2023-08-07 15:00:00",
            // "updated_at" => "2023-08-07 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ASISTENCIA TÉCNICA PARA EL MONITOREO DEL PROCESO DE INGRESO Y CONTRATACIÓN DE DOCENTES PARA EL SECTOR EDUCACIÓN",
            // "url_pdf" => "https://drive.google.com/file/d/1ZQjJsKsdeEXoVMw_-Cn6ZlkhWZ5wSFxw/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-07 16:00:00",
            // "last_date" => "2023-08-08 10:00:00",
            // "created_at" => "2023-08-07 16:00:00",
            // "updated_at" => "2023-08-07 16:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de materiales de limpieza para el personal de mantenimiento de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1BVZdkpSiaThgNIgMEDgZaT0xwPRE_KGA/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-07 16:00:00",
            // "last_date" => "2023-08-08 18:00:00",
            // "created_at" => "2023-08-07 16:00:00",
            // "updated_at" => "2023-08-07 16:00:00"
            // ]
            // ,[
            // "description" => "“SERVICIO DE ASISTENCIA ADMINISTRATIVA PARA EL SEGUIMIENTO Y MONITOREO DE ACTIVIDADES DE LA DIRECCIÓN DE RESPONSABILIDAD SOCIAL UNIVERSITARIA”",
            // "url_pdf" => "https://drive.google.com/file/d/16iIOPlajyGHMLrczflj2UFaqOMTDj-rR/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-07 16:30:00",
            // "last_date" => "2023-08-08 10:30:00",
            // "created_at" => "2023-08-07 16:30:00",
            // "updated_at" => "2023-08-07 16:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO DE CAPACITACIÓN EN INTRODUCCIÓN A PYTHON PARA MACHINE LEARNING",
            // "url_pdf" => "https://drive.google.com/file/d/1EIb0kSEba5x9KBDKhrXuWtLyVb39Cu1N/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-07 16:00:00",
            // "last_date" => "2023-08-08 15:00:00",
            // "created_at" => "2023-08-07 16:00:00",
            // "updated_at" => "2023-08-07 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANTENIMIENTO DE LOS PANELES DE ENERGÍA SOLAR DELFUNDO DON LUIS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1HrxGZCSlefEh1D2UFsf0NnHBH2mlj50c/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-07 16:00:00",
            // "last_date" => "2023-08-21 15:00:00",
            // "created_at" => "2023-08-07 16:00:00",
            // "updated_at" => "2023-08-07 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO BIG DATA ARCHITECT ON AZURE",
            // "url_pdf" => "https://drive.google.com/file/d/1h9-eWgMuD3zA97NXwHm61QrVkybFeRez/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-08 12:00:00",
            // "last_date" => "2023-08-09 18:00:00",
            // "created_at" => "2023-08-08 12:00:00",
            // "updated_at" => "2023-08-08 12:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CIENCIA DE DATOS CON SPARK & TENSORFLOW",
            // "url_pdf" => "https://drive.google.com/file/d/1XVK5WatxPCrlvnW3ENMqYDs4KdpOGOSX/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-08 12:00:00",
            // "last_date" => "2023-08-09 18:00:00",
            // "created_at" => "2023-08-08 12:00:00",
            // "updated_at" => "2023-08-08 12:00:00"
            // ]
            // ,[
            // "description" => " ADQUISICION DE VESTUARIO “LUNDÚ” PARA EL TALLER DE DANZA ",
            // "url_pdf" => "https://drive.google.com/file/d/1-aq29pP8Hsd3k4oBiwsFi4qviMusKdhn/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-08 12:00:00",
            // "last_date" => "2023-08-10 12:00:00",
            // "created_at" => "2023-08-08 12:00:00",
            // "updated_at" => "2023-08-08 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Residente (Especialista) para el EQUIPAMIENTO Y MOBILIARIO en la Inversión: MEJORAMIENTO DE LOS SERVICIOS DE EDUCACIÓN SUPERIOR EN LA SEDE ACADÉMICA CNI, DE LA UNIVERSIDAD NACIONAL DE CAÑETE, FUNDO SAN LUIS DEL DISTRITO DE SAN LUIS - PROVINCIA DE CAÑETE - DEPARTAMENTO DE LIMA”, con Código Único de Inversión 2444577.",
            // "url_pdf" => "https://drive.google.com/file/d/13jMm26lGJ3kijQMmN-21a6zYOF8_M3Cz/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-08 16:30:00",
            // "last_date" => "2023-08-09 15:00:00",
            // "created_at" => "2023-08-08 16:30:00",
            // "updated_at" => "2023-08-08 16:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Supervisor para el EQUIPAMIENTO Y MOBILIARIO en la Inversión: MEJORAMIENTO DE LOS SERVICIOS DE EDUCACIÓN SUPERIOR EN LA SEDE ACADÉMICA CNI, DE LA UNIVERSIDAD NACIONAL DE CAÑETE, FUNDO SAN LUIS DEL DISTRITO DE SAN LUIS - PROVINCIA DE CAÑETE - DEPARTAMENTO DE LIMA”, con Código Único de Inversión 2444577.",
            // "url_pdf" => "https://drive.google.com/file/d/1O4GzHwb56BFZtOzScIj9aeu7M6iKdaTx/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-08 16:30:00",
            // "last_date" => "2023-08-09 11:00:00",
            // "created_at" => "2023-08-08 16:30:00",
            // "updated_at" => "2023-08-08 16:30:00"
            // ]
            // ,[
            // "description" => "Contratación de servicio de Análisis foliar, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”.",
            // "url_pdf" => "https://drive.google.com/file/d/1FyuX8Z1C6LZph74E5V8HG2UAy6stW7jw/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-09 09:00:00",
            // "last_date" => "2023-08-17 18:00:00",
            // "created_at" => "2023-08-09 09:00:00",
            // "updated_at" => "2023-08-09 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 35 Porta Diplomas para los Titulados de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1xcIg3i4pabD-7vGZobwgyZFDAPJXtWRL/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-09 09:00:00",
            // "last_date" => "2023-08-09 18:00:00",
            // "created_at" => "2023-08-09 09:00:00",
            // "updated_at" => "2023-08-09 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 90 Medallas con estuche para los graduados de la UNDC dividido en (50 Medallas para Titulados y 40 Medallas para bachilleres) para la entrega del Grado Académico de Bachiller y Titulo Profesional de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1ckYj3K0EImL9W5UElhH2HZsC1xPrTI5j/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-09 09:00:00",
            // "last_date" => "2023-08-10 17:00:00",
            // "created_at" => "2023-08-09 09:00:00",
            // "updated_at" => "2023-08-09 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ORDENAMIENTO DE DOCUMENTOS Y ATENCIÓN DE CONSULTAS PARA LA DIRECCIÓN DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1B2j2CmRIYy6ayfOyspjYcfxtz47tgfxy/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-09 10:00:00",
            // "last_date" => "2023-08-11 18:00:00",
            // "created_at" => "2023-08-09 10:00:00",
            // "updated_at" => "2023-08-09 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de combustible DIESEL B5 S50 para las unidades de transporte de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/126lNXA_gWTpTWQSbHkk3bLA-1huOoYIN/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-09 10:00:00",
            // "last_date" => "2023-08-09 19:00:00",
            // "created_at" => "2023-08-09 10:00:00",
            // "updated_at" => "2023-08-09 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de Agua de mesa sin gas para la facultad de Ciencias Agrarias",
            // "url_pdf" => "https://drive.google.com/file/d/1VaUffzq-ZuRgXoTRHb-eZNtRC0VVvMG8/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-09 11:00:00",
            // "last_date" => "2023-08-10 11:00:00",
            // "created_at" => "2023-08-09 11:00:00",
            // "updated_at" => "2023-08-09 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE APOYO EN ATENCIÓN DE REQUERIMIENTOS DE INGRESO EN LOS ALMACENES DELA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1gXxeTtndUbSGIjZMY7EmO6YLP-DmgSsV/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-09 15:00:00",
            // "last_date" => "2023-08-11 13:00:00",
            // "created_at" => "2023-08-09 15:00:00",
            // "updated_at" => "2023-08-09 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ACTUALIZACION DE INFORMACION DE BIENES PATRIMONIALES DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1cCjvIJD2KSeny0sKPWpyjv28eY4NzDX-/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-09 15:00:00",
            // "last_date" => "2023-08-11 13:00:00",
            // "created_at" => "2023-08-09 15:00:00",
            // "updated_at" => "2023-08-09 15:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Capacitación CURSO DE CIENCIA, TECNOLOGIA EN INNOVACION (MACHINE LEARNING) a efectos de ejecutar el POI – CEPLAN 2023 de la escuela programado y aprobado.",
            // "url_pdf" => "https://drive.google.com/file/d/1n3ENihDe4W4sApRfPBlQWNlYHR0och8j/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-09 18:00:00",
            // "last_date" => "2023-08-11 18:00:00",
            // "created_at" => "2023-08-09 18:00:00",
            // "updated_at" => "2023-08-09 18:00:00"
            // ]
            // ,[
            // "description" => "Servicio de un Especialista para elaborar Expediente Técnico de “MANTENIMIENTO DE ACCESOS, VEREDAS, ÁREAS VERDES Y PISTAS PARA LLEGAR A LA INFRAESTRUCTURA DE MAESTRANZA Y CONSERVACIÓN DE LOS CERCOS PERIMÉTRICOS UBICADOS EN EL CAMPUS UNIVERSITARIO FUNDO DON LUIS DE LA UNDC”. v2",
            // "url_pdf" => "https://drive.google.com/file/d/1KzCCxcAB54PInuSNdz7ADWlJ5EQqCBu_/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-09 18:00:00",
            // "last_date" => "2023-08-11 18:00:00",
            // "created_at" => "2023-08-09 18:00:00",
            // "updated_at" => "2023-08-09 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Docencia para enseñanza del Idioma Ingles. - INGLES -NIVEL INTENSIVO",
            // "url_pdf" => "https://drive.google.com/file/d/1qaua4uGd0ukLLGv_5h24FCtsmwWd6pO1/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-09 18:00:00",
            // "last_date" => "2023-08-10 18:00:00",
            // "created_at" => "2023-08-09 18:00:00",
            // "updated_at" => "2023-08-09 18:00:00"
            // ]
            // ,[
            // "description" => "“Contratación de Servicio de Docencia para enseñanza del Idioma Ingles”- INGLÉS NIVEL BÁSICO- MODALIDAD REGULAR",
            // "url_pdf" => "https://drive.google.com/file/d/1LFLdKslcwDC1cfDsU-e-95TnTdqzrI4S/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-09 18:00:00",
            // "last_date" => "2023-08-10 18:00:00",
            // "created_at" => "2023-08-09 18:00:00",
            // "updated_at" => "2023-08-09 18:00:00"
            // ]
            // ,[
            // "description" => "“Contratación de Servicio de Docencia para enseñanza del Idioma Ingles” - INTERMEDIO -MODALIDAD REGULAR",
            // "url_pdf" => "https://drive.google.com/file/d/1xhQff3VqeqyrtrTCBDobK9WjwUxTEng7/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-09 18:00:00",
            // "last_date" => "2023-08-10 18:00:00",
            // "created_at" => "2023-08-09 18:00:00",
            // "updated_at" => "2023-08-09 18:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DE SISTEMATIZACIÓN DE SILABOS 2023-11, ALINEADOS AL ENFOQUE POR COMPETENCIAS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1YaCZ0Gd4TobSFrMLcPXnVfUTFC_ndnG6/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-11 10:00:00",
            // "last_date" => "2023-08-11 15:00:00",
            // "created_at" => "2023-08-11 10:00:00",
            // "updated_at" => "2023-08-11 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE 01 EQUIPO MULTIFUNCIONAL COPIADORA IMPRESORA SCANNER, PARA LA ESCUELA PROFESIONAL DE ADMINISTRACIÓN DE TURISMO Y HOTELERÍA DE LA UNDC. VS 03",
            // "url_pdf" => "https://drive.google.com/file/d/1-SzxEubvmYkOdtHPfEeA3GC93c2YPz2d/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-14 08:30:00",
            // "last_date" => "2023-08-21 18:00:00",
            // "created_at" => "2023-08-14 08:30:00",
            // "updated_at" => "2023-08-14 08:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de útiles de escritorio y material didáctico para el departamento académico de Agronomía de la UNDC V03.",
            // "url_pdf" => "https://drive.google.com/file/d/1t1XSY1xqZoBEW676Dr6BASSRGZXTM4ct/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-14 08:30:00",
            // "last_date" => "2023-08-15 18:00:00",
            // "created_at" => "2023-08-14 08:30:00",
            // "updated_at" => "2023-08-14 08:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de memoria portátil y toner para el departamento académico de Agronomía de la UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1CHp-vhL_pYhzNVLdlKe2qWGSNf-7feMV/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-14 08:30:00",
            // "last_date" => "2023-08-15 18:00:00",
            // "created_at" => "2023-08-14 08:30:00",
            // "updated_at" => "2023-08-14 08:30:00"
            // ]
            // ,[
            // "description" => "SUSCRIPCIÓN A LA BASE DE DATOS SPIJ - SISTEMA PERUANO DE INFORMACIÓN JURÍDICA 2023",
            // "url_pdf" => "https://drive.google.com/file/d/1MN7va7RWMQLgz1tJch6AGA9El_cul_K9/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-14 11:00:00",
            // "last_date" => "2023-08-14 18:00:00",
            // "created_at" => "2023-08-14 11:00:00",
            // "updated_at" => "2023-08-14 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE INTERNET DE BANDA ANCHA DEDICADO PARA EL CENTRO DE INVESTIGACIÓN PARA LA SUSTENTABILIDAD LUNAHUANÁ, EL LOCAL ADMINISTRATIVO CENTRAL, EL LOCAL HUALCARÁ Y LOS LOCALES ACADÉMICOS CASA DE LA CULTURA, CNI Y EL LOCAL FUNDO DON LUIS DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1r06KckC22_tEwHiv4tNV_Z1ecGAsEm9-/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-14 12:00:00",
            // "last_date" => "2023-08-15 18:00:00",
            // "created_at" => "2023-08-14 12:00:00",
            // "updated_at" => "2023-08-14 12:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 02 DISCOS DUROS, 03 MOUSE INALAMBRICOS para la Faculta de Ingeniería de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/19GYlPvEwesVaq-Rpn7zrbLzv7qltXCME/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-14 12:00:00",
            // "last_date" => "2023-08-15 18:30:00",
            // "created_at" => "2023-08-14 12:00:00",
            // "updated_at" => "2023-08-14 12:00:00"
            // ]
            // ,[
            // "description" => "Contratar a un proveedor para que brinde el Servicio docencia para el Módulo III, del Taller de Tesis, dirigido, dirigido a los bachilleres (egresados) de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1vL4tbpGgQAdZNzow6PzPSiksoDqHpNh8/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-14 13:00:00",
            // "last_date" => "2023-08-18 17:30:00",
            // "created_at" => "2023-08-14 13:00:00",
            // "updated_at" => "2023-08-14 13:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 01 ARMARIO MELAMINA 04 PUERTAS CON LLAVE Y 01 ESCRITORIO MELAMINA EN L – 4 CAJONES CON LLAVE para la Facultad de Ingeniería de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1t8bB5cts52jUIiwXuPZOCn1MM_2mSesc/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-14 13:00:00",
            // "last_date" => "2023-08-15 12:00:00",
            // "created_at" => "2023-08-14 13:00:00",
            // "updated_at" => "2023-08-14 13:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Peritaje de la Obra: “INSTALACIÓN DE INFRAESTRUCTURA Y EQUIPAMIENTO PARA EL PROGRAMA DE ESTUDIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE-DISTRITO DE SAN LUIS-PROVINCIA DE CAÑETE-REGIÓN LIMA”., para la Unidad de Ejecutora de Inversiones de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1dd_0owodqkHZ2_-ev-jO8f_k-QVhYI5J/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-14 14:00:00",
            // "last_date" => "2023-08-21 18:00:00",
            // "created_at" => "2023-08-14 14:00:00",
            // "updated_at" => "2023-08-14 14:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 04 bidones de Agua de Mesa sin gas x 20 L para la Escuela Profesional de Contabilidad de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1ZBy6Icm9pslzwqezRzzXi79YINJcPBHl/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-14 18:00:00",
            // "last_date" => "2023-08-15 18:00:00",
            // "created_at" => "2023-08-14 18:00:00",
            // "updated_at" => "2023-08-14 18:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UN HERVIDOR ELECTRICO DE 3.5 litros, para LA FACULTAD DE INGENIERIA.",
            // "url_pdf" => "https://drive.google.com/file/d/1rk0qBkqGgq5dKNKeraFnnupz8LrIJM77/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-14 18:00:00",
            // "last_date" => "2023-08-15 18:00:00",
            // "created_at" => "2023-08-14 18:00:00",
            // "updated_at" => "2023-08-14 18:00:00"
            // ]
            // ,[
            // "description" => "“ADQUISICIÓN DE HERRAMIENTAS PARA OFICINA” V2",
            // "url_pdf" => "https://drive.google.com/file/d/1d37wwbf88rXhiW0FP1PSDO-s3OM_BxOO/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-15 12:00:00",
            // "last_date" => "2023-08-18 18:00:00",
            // "created_at" => "2023-08-15 12:00:00",
            // "updated_at" => "2023-08-15 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de “CURSO DE CAPACITACION EN GESTION DE ALMACENES”, dirigido a los estudiantes y docentes de la Escuela Profesional de Contabilidad – UNDC, a efectos de ejecutar el POI – CEPLAN 2023 de la escuela programado y aprobado.",
            // "url_pdf" => "https://drive.google.com/file/d/1kx6u5nwheJQTeMunbDA7Y7jaSTfn1exF/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-15 12:00:00",
            // "last_date" => "2023-08-28 08:00:00",
            // "created_at" => "2023-08-15 12:00:00",
            // "updated_at" => "2023-08-15 12:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de ventiladores para la Dirección de Servicios Educativos de Extensión: Centro de Idiomas y Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1Ynr9S0Tr2kuXaJmg77H6Qn-J-PutAStL/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-15 12:30:00",
            // "last_date" => "2023-08-18 18:00:00",
            // "created_at" => "2023-08-15 12:30:00",
            // "updated_at" => "2023-08-15 12:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO DE GESTIÓN DE TALENTO HUMANO",
            // "url_pdf" => "https://drive.google.com/file/d/11EdTLJcKTwpcUFjwZdO7Zhkxsyh8BpcN/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-15 13:00:00",
            // "last_date" => "2023-08-15 17:00:00",
            // "created_at" => "2023-08-15 13:00:00",
            // "updated_at" => "2023-08-15 13:00:00"
            // ]
            // ,[
            // "description" => "Servicio de asistencia técnica administrativa para la Dirección de Gestión Académica de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1MqR9TNQKCDhEKudV14HHjK_WS_BADbiI/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-15 17:00:00",
            // "last_date" => "2023-08-16 13:00:00",
            // "created_at" => "2023-08-15 17:00:00",
            // "updated_at" => "2023-08-15 17:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Asistencia Técnica para Aula Virtual de la Escuela Profesional de Ingeniería de Sistemas",
            // "url_pdf" => "https://drive.google.com/file/d/1r3HQ5S3mW2L7HoQjcpWvCzrGBixt5l6c/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-16 13:00:00",
            // "last_date" => "2023-08-17 18:00:00",
            // "created_at" => "2023-08-16 13:00:00",
            // "updated_at" => "2023-08-16 13:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Soporte Técnico de Sistemas Informáticos de la Escuela Profesional De Contabilidad",
            // "url_pdf" => "https://drive.google.com/file/d/1AcoYPhYFMVHFl0U3xzfc0wdM_H8utxvB/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-16 13:00:00",
            // "last_date" => "2023-08-17 18:00:00",
            // "created_at" => "2023-08-16 13:00:00",
            // "updated_at" => "2023-08-16 13:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Asistencia Técnica para Aula Virtual de la Escuela Profesional de Administración",
            // "url_pdf" => "https://drive.google.com/file/d/1YuTi0m-0ZiiaPQIFeUh9m6tOSNv4JvrG/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-16 13:00:00",
            // "last_date" => "2023-08-17 18:00:00",
            // "created_at" => "2023-08-16 13:00:00",
            // "updated_at" => "2023-08-16 13:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Asistencia Técnica para Aula Virtual de la Escuela Profesional De Agronomía",
            // "url_pdf" => "https://drive.google.com/file/d/1CF0_X1qtZnNThb4we3X3APIigSxAgcFs/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-16 13:00:00",
            // "last_date" => "2023-08-17 18:00:00",
            // "created_at" => "2023-08-16 13:00:00",
            // "updated_at" => "2023-08-16 13:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE TECLADO Y MOUSE INALAMBRICO PARA LA OFICINA DE GESTIÓN DE LA CALIDAD",
            // "url_pdf" => "https://drive.google.com/file/d/1d_eZLZwWQ0Z84rbz_UEbOS2nijMxshCi/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-16 13:00:00",
            // "last_date" => "2023-08-17 18:00:00",
            // "created_at" => "2023-08-16 13:00:00",
            // "updated_at" => "2023-08-16 13:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE ALIMENTOS Y BEBIDAS PARA CONSUMO HUMANO",
            // "url_pdf" => "https://drive.google.com/file/d/1S5AIT8aYj9Wu7vwkcCXCLMnagwfhqpfB/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-16 14:00:00",
            // "last_date" => "2023-08-17 18:00:00",
            // "created_at" => "2023-08-16 14:00:00",
            // "updated_at" => "2023-08-16 14:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ALIMENTACIÓN DE PERSONAS PARA LOS PARTICIPANTES DE LA CAPACITACIÓN “SISTEMATIZACIÓN DE SILABOS 2023-II ANILEADOS AL ENFOQUE POR COMPETENCIAS”",
            // "url_pdf" => "https://drive.google.com/file/d/1GtOxZyd_MAlZ_mTxrlsF_8_Q2-F1VQtf/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-16 14:00:00",
            // "last_date" => "2023-08-16 23:59:00",
            // "created_at" => "2023-08-16 14:00:00",
            // "updated_at" => "2023-08-16 14:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE PROFESIONAL EN NUTRICION Y BROMATOLOGIA",
            // "url_pdf" => "https://drive.google.com/file/d/1eksEsIf702ZvqBl8FMWpcEa_q50UYiCP/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-16 18:00:00",
            // "last_date" => "2023-08-17 18:00:00",
            // "created_at" => "2023-08-16 18:00:00",
            // "updated_at" => "2023-08-16 18:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES DE OFICINA Y PIZARRAS DIAGRAMADORAS-PLANNING PARA LA OFICINA DE GESTIÓN DE LA CALIDAD",
            // "url_pdf" => "https://drive.google.com/file/d/1MkO0j4fB6fZUNYMVdY6B9TWmt6_qGGKe/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-16 18:00:00",
            // "last_date" => "2023-09-12 12:00:00",
            // "created_at" => "2023-08-16 18:00:00",
            // "updated_at" => "2023-08-16 18:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE CAJAS ARCHIVADORAS PARA LA UNIDAD DE CONTABILIDAD",
            // "url_pdf" => "https://drive.google.com/file/d/1BV4jN21F2nJ9k6XYEgVp_g5g6XbSu8Nd/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-16 18:00:00",
            // "last_date" => "2023-08-25 13:00:00",
            // "created_at" => "2023-08-16 18:00:00",
            // "updated_at" => "2023-08-16 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación del Servicio de Consultoría en General para realizar el Expediente de Factibilidad y Pertinencia para la Creación y autorización de funcionamiento del Programa de Estudios de Derecho y Ciencias Políticas en la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1PgD581Ma2nhajlAWIeDlufDedOUTGl08/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-16 18:00:00",
            // "last_date" => "2023-08-21 08:00:00",
            // "created_at" => "2023-08-16 18:00:00",
            // "updated_at" => "2023-08-16 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento preventivo y correctivo de las unidades de transporte de placa EGO – 737, EGO – 951 y EGO – 950 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/10krGy7JBbiiLouvpdcO2nl_6yoyfrcqH/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-16 18:00:00",
            // "last_date" => "2023-08-25 09:30:00",
            // "created_at" => "2023-08-16 18:00:00",
            // "updated_at" => "2023-08-16 18:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA ESCUELA PROFESIONAL DE ADMINISTRACIÓN DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1nRHOBPWryKFLgch4tCzwm-KGaKhZgKgz/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-17 10:30:00",
            // "last_date" => "2023-08-18 18:00:00",
            // "created_at" => "2023-08-17 10:30:00",
            // "updated_at" => "2023-08-17 10:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Supervisor para el EQUIPAMIENTO Y MOBILIARIO en la Inversión: MEJORAMIENTO DE LOS SERVICIOS DE EDUCACIÓN SUPERIOR EN LA SEDE ACADÉMICA CNI, DE LA UNIVERSIDAD NACIONAL DE CAÑETE, FUNDO SAN LUIS DEL DISTRITO DE SAN LUIS - PROVINCIA DE CAÑETE - DEPARTAMENTO DE LIMA”, con Código Único de Inversión 2444577.",
            // "url_pdf" => "https://drive.google.com/file/d/1laljp8UqI2PVN85D5J2i8nEoCnucn2Xp/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-17 11:00:00",
            // "last_date" => "2023-08-18 18:00:00",
            // "created_at" => "2023-08-17 11:00:00",
            // "updated_at" => "2023-08-17 11:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE CAJAS ARCHIVADORAS PARA LA ESCUELA PROFESIONAL DE ADMINISTRACIÓN DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1DY3epAli92S8ayVLBrtD2DRXazwZSEDo/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-17 11:00:00",
            // "last_date" => "2023-08-18 18:00:00",
            // "created_at" => "2023-08-17 11:00:00",
            // "updated_at" => "2023-08-17 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ENSEÑANZA DE DANZA AFRO PERUANA 2023-II",
            // "url_pdf" => "https://drive.google.com/file/d/1MxQ3BKeY03e9r0ZgMsDuqDMGhRp4R4ba/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-17 11:30:00",
            // "last_date" => "2023-08-18 18:00:00",
            // "created_at" => "2023-08-17 11:30:00",
            // "updated_at" => "2023-08-17 11:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ENSEÑANZA DE TEATRO",
            // "url_pdf" => "https://drive.google.com/file/d/1mBdO2VfjXH4FzG9_ITLj9MTd-WX08gLM/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-17 11:30:00",
            // "last_date" => "2023-08-18 18:00:00",
            // "created_at" => "2023-08-17 11:30:00",
            // "updated_at" => "2023-08-17 11:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SUSCRIPCION ANUAL EN LINEA A REVISTAS CONTADORES Y EMPRESAS PARA LA ESCUELA PROFESIONAL DE CONTABILIDAD DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1FK7JQcyutIxWMeK3ocnK0FAgvo6RV7Bz/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-17 11:30:00",
            // "last_date" => "2023-08-23 13:00:00",
            // "created_at" => "2023-08-17 11:30:00",
            // "updated_at" => "2023-08-17 11:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Capacitación CURSO DE CIENCIA, TECNOLOGIA EN INNOVACION (MACHINE LEARNING) a efectos de ejecutar el POI – CEPLAN 2023 de la escuela programado y aprobado.",
            // "url_pdf" => "https://drive.google.com/file/d/1dWvbr0Fz4ZhpuDwAmaEGV7kI1XfK-GI5/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-17 12:30:00",
            // "last_date" => "2023-08-21 14:00:00",
            // "created_at" => "2023-08-17 12:30:00",
            // "updated_at" => "2023-08-17 12:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ALIMENTOS Y BEBIDAS PARA LA DIRECCIÓN DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1vq1TzkX0RD8KvkWF6orLIteLhYi0aES_/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-17 15:00:00",
            // "last_date" => "2023-08-22 13:00:00",
            // "created_at" => "2023-08-17 15:00:00",
            // "updated_at" => "2023-08-17 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAMPO PARA EL MANEJO DE LABORES CULTURALES AGRÍCOLAS DEL FUNDO TERCER MUNDO DE LA ESCUELA PROFESIONAL DE AGRONOMÍA .",
            // "url_pdf" => "SERVICIO DE CAMPO PARA EL MANEJO DE LABORES CULTURALES AGRÍCOLAS DEL FUNDO TERCER MUNDO DE LA ESCUELA PROFESIONAL DE AGRONOMÍA .",
            // "user_id" => 1,
            // "start_date" => "2023-08-17 16:00:00",
            // "last_date" => "2023-08-18 08:00:00",
            // "created_at" => "2023-08-17 16:00:00",
            // "updated_at" => "2023-08-17 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación de servicio de Impresión y empastado de manuales para el proyecto de investigación: “Efecto del programa de emprendimiento Millennial 2,0 sobre el nivel de la capacidad de innovación tecnológica de los alumnos de la Universidad Nacional de Cañete, 2019”.",
            // "url_pdf" => "https://drive.google.com/file/d/17sT7dggtE6u0lOMdmtFnoC9DAFIR_B5e/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-18 08:00:00",
            // "last_date" => "2023-08-21 12:00:00",
            // "created_at" => "2023-08-18 08:00:00",
            // "updated_at" => "2023-08-18 08:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE ASEO PARA LA DIRECCIÓN DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1pIWRd2mocUYK49JnoTL2R4IrxwXOGORq/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-21 09:30:00",
            // "last_date" => "2023-08-22 18:00:00",
            // "created_at" => "2023-08-21 09:30:00",
            // "updated_at" => "2023-08-21 09:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ALIMENTOS Y BEBIDAS PARA LA DIRECCIÓN DE ADMISIÓN 2023 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1VH97iW1M7y_ZScGqmu64fpBifKA53Vo2/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-21 09:30:00",
            // "last_date" => "2023-08-22 14:00:00",
            // "created_at" => "2023-08-21 09:30:00",
            // "updated_at" => "2023-08-21 09:30:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE ASISTENCIA EN LA ELABORACIÓN DE DOCUMENTOS ADMINISTRATIVOS PARA LA ESCUELA PROFESIONAL DE ADMINISTRACION",
            // "url_pdf" => "https://drive.google.com/file/d/1uU2Ae4IHOKznexI0thLjFTLHpV68hVP4/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-21 10:00:00",
            // "last_date" => "2023-08-21 18:00:00",
            // "created_at" => "2023-08-21 10:00:00",
            // "updated_at" => "2023-08-21 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 01 ARMARIO MELAMINE 02 PUERTAS, para la Escuela Profesional de Administración de Turismo y Hotelería de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1FtTNGCv-kfVyuQeyYRgqIYx0EwUQEfUk/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-21 10:00:00",
            // "last_date" => "2023-08-22 10:00:00",
            // "created_at" => "2023-08-21 10:00:00",
            // "updated_at" => "2023-08-21 10:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Residente (Especialista) para el EQUIPAMIENTO Y MOBILIARIO en la Inversión: MEJORAMIENTO DE LOS SERVICIOS DE EDUCACIÓN SUPERIOR EN LA SEDE ACADÉMICA CNI, DE LA UNIVERSIDAD NACIONAL DE CAÑETE, FUNDO SAN LUIS DEL DISTRITO DE SAN LUIS - PROVINCIA DE CAÑETE - DEPARTAMENTO DE LIMA”, con Código Único de Inversión 2444577.",
            // "url_pdf" => "https://drive.google.com/file/d/1xwjjvvGyrBfm-xdZt8ah6JooLJdHrrnA/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-21 10:00:00",
            // "last_date" => "2023-08-22 18:00:00",
            // "created_at" => "2023-08-21 10:00:00",
            // "updated_at" => "2023-08-21 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE PROCESAMIENTO, ORDENAMIENTO Y CLASIFICACION DE DOCUMENTOS ADMINISTRATIVOS DE LA UNIDAD DE TESORERIA.",
            // "url_pdf" => "https://drive.google.com/file/d/1kc2zGAOQ8k9JbeRkU-k4UP1NtjMCT82D/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-21 15:30:00",
            // "last_date" => "2023-08-22 10:00:00",
            // "created_at" => "2023-08-21 15:30:00",
            // "updated_at" => "2023-08-21 15:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA FACULTAD DE INGENIERIA",
            // "url_pdf" => "https://drive.google.com/file/d/1t51AVyztEKJ4KrUVngf9lds4LgM1rV3z/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-22 10:00:00",
            // "last_date" => "2023-08-23 10:00:00",
            // "created_at" => "2023-08-22 10:00:00",
            // "updated_at" => "2023-08-22 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES DE OFICINA PARA LA DIRECCIÓN DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1NqiABKJYYAo-GTH0wgdIRZrkfrXX8uHd/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-22 11:30:00",
            // "last_date" => "2023-08-23 18:00:00",
            // "created_at" => "2023-08-22 11:30:00",
            // "updated_at" => "2023-08-22 11:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE CAJAS ARCHIVADORAS PARA LA ESCUELA PROFESIONAL DE ADMINISTRACIÓN DE TURISMO Y HOTELERIA DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1lmbxeDh02oc_Z1WYB0xLyJks6jZ9XCGV/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-22 12:00:00",
            // "last_date" => "2023-08-23 18:00:00",
            // "created_at" => "2023-08-22 12:00:00",
            // "updated_at" => "2023-08-22 12:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 02 ESCRITORIO DE MELAMINE 01 PUERTA Y 01 CAJON, para la Escuela Profesional de Administración de Turismo y Hotelería de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1wV4rJOVPXcf0Ew4EVKJBKDVjYP1uBIPX/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-22 12:00:00",
            // "last_date" => "2023-08-25 15:00:00",
            // "created_at" => "2023-08-22 12:00:00",
            // "updated_at" => "2023-08-22 12:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA FACULTAD DE INGENIERIA",
            // "url_pdf" => "https://drive.google.com/file/d/1sdlTAcTZSAd5kh4Htx1yGbh7v1SAlW4m/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-22 12:30:00",
            // "last_date" => "2023-08-23 18:00:00",
            // "created_at" => "2023-08-22 12:30:00",
            // "updated_at" => "2023-08-22 12:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de reactivos químicos para el laboratorio de química.",
            // "url_pdf" => "https://drive.google.com/file/d/1elD7ulKseH_wkyY3C_LoeqpT-CCFzKVl/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-22 12:30:00",
            // "last_date" => "2023-08-22 18:00:00",
            // "created_at" => "2023-08-22 12:30:00",
            // "updated_at" => "2023-08-22 12:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA FACULTAD DE INGENIERIA – PARA EL TALLER DE TESIS-UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1F72E9AFLc0oiqJIKYdpW7FtxrA09tIDJ/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-22 14:30:00",
            // "last_date" => "2023-08-23 18:00:00",
            // "created_at" => "2023-08-22 14:30:00",
            // "updated_at" => "2023-08-22 14:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE REDISEÑO DEL PLAN CURRICULAR DE PROGRAMAS DE ESTUDIOS DE LA ESCUELA PROFESIONAL DE ADMINISTRACION-UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1has_ylvECOWCjD3JLzZ_Z5RU7YW4IquK/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-22 14:00:00",
            // "last_date" => "2023-09-05 15:30:00",
            // "created_at" => "2023-08-22 14:00:00",
            // "updated_at" => "2023-08-22 14:00:00"
            // ]
            // ,[
            // "description" => "Contratación del Servicio de Consultoría en General para realizar el Expediente de Factibilidad y Pertinencia para la Creación y autorización de funcionamiento del Programa de Estudios de Enfermería en la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1N35egyUMau9xQ39JnteXGsZnzE3za6Oa/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-23 11:00:00",
            // "last_date" => "2023-08-25 14:00:00",
            // "created_at" => "2023-08-23 11:00:00",
            // "updated_at" => "2023-08-23 11:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de CAPACITACIÓN denominado Propagación in vitro de tejidos vegetales para la Escuela Profesional de Agronomía como parte del Plan de Capacitación 2023 dirigido a estudiantes",
            // "url_pdf" => "https://drive.google.com/file/d/11i2csEhx_JHOxBBS2LqM9OC3mojI_G0l/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-23 11:00:00",
            // "last_date" => "2023-08-23 18:00:00",
            // "created_at" => "2023-08-23 11:00:00",
            // "updated_at" => "2023-08-23 11:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de CAPACITACIÓN denominado Agricultura de Precisión para la Escuela Profesional de Agronomía como parte del Plan de Capacitación 2023 dirigido a estudiantes.",
            // "url_pdf" => "https://drive.google.com/file/d/1ZTDZhq0hGXye9PU9jLoJelhVQ5Q5zqPm/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-23 11:00:00",
            // "last_date" => "2023-08-23 18:00:00",
            // "created_at" => "2023-08-23 11:00:00",
            // "updated_at" => "2023-08-23 11:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para el Fundo Tercer Mundo de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1GtJdG0fdJYLzQ062WTuQI8ksZFsPEvA7/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-23 12:00:00",
            // "last_date" => "2023-08-23 18:00:00",
            // "created_at" => "2023-08-23 12:00:00",
            // "updated_at" => "2023-08-23 12:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Análisis de datos para la elaboración de las normas y el software CND camote, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”. ",
            // "url_pdf" => "https://drive.google.com/file/d/1fNCH8DimkRq-FdgOAdNFeXGWwkSVD_9D/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-24 08:00:00",
            // "last_date" => "2023-08-24 15:00:00",
            // "created_at" => "2023-08-24 08:00:00",
            // "updated_at" => "2023-08-24 08:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 35 diplomas con caligrafiado para los graduados que han obtenido el Grado Académico de Bachiller de la Universidad Nacional De Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/18xCmILjvI1maA9PYNUmZDttva5up0k4V/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-24 08:30:00",
            // "last_date" => "2023-08-25 10:30:00",
            // "created_at" => "2023-08-24 08:30:00",
            // "updated_at" => "2023-08-24 08:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para el Fundo Tercer Mundo de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1GtJdG0fdJYLzQ062WTuQI8ksZFsPEvA7/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-23 12:00:00",
            // "last_date" => "2023-08-23 18:00:00",
            // "created_at" => "2023-08-23 12:00:00",
            // "updated_at" => "2023-08-23 12:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo para evaluación de productividad, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”. ",
            // "url_pdf" => "https://drive.google.com/file/d/1mRaayg1H8o6VjzpQYCR_BRz_zHVHRdSa/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-24 08:30:00",
            // "last_date" => "2023-08-24 15:00:00",
            // "created_at" => "2023-08-24 08:30:00",
            // "updated_at" => "2023-08-24 08:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo de muestreo foliar – Personal 2, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”. ",
            // "url_pdf" => "https://drive.google.com/file/d/1nN3Xl9s0pd2mMvsL8fH96nUw5zYvgZ_1/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-24 08:30:00",
            // "last_date" => "2023-08-24 15:00:00",
            // "created_at" => "2023-08-24 08:30:00",
            // "updated_at" => "2023-08-24 08:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo de muestreo foliar – Personal 1, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”. ",
            // "url_pdf" => "https://drive.google.com/file/d/1rQKjtRAE-NNXMgxRxz93pNGIpwAHdrYh/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-24 08:30:00",
            // "last_date" => "2023-08-24 15:00:00",
            // "created_at" => "2023-08-24 08:30:00",
            // "updated_at" => "2023-08-24 08:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO REPARACIÓN DE COMPUTADORAS Y REDES.",
            // "url_pdf" => "https://drive.google.com/file/d/18OH6eA_zqnYmh2GOatRY4q1nF6LoeTeP/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-24 09:00:00",
            // "last_date" => "2023-09-06 13:00:00",
            // "created_at" => "2023-08-24 09:00:00",
            // "updated_at" => "2023-08-24 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE CHALECOS DE IDENTIFICACIÓN PARA PERSONAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1EXuOgOVRIQPDIiJwGdgmzFL7qLNSymQ2/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-24 09:30:00",
            // "last_date" => "2023-08-25 18:00:00",
            // "created_at" => "2023-08-24 09:30:00",
            // "updated_at" => "2023-08-24 09:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de CAPACITACIÓN denominado Propagación in vitro de tejidos vegetales para la Escuela Profesional de Agronomía como parte del Plan de Capacitación 2023 dirigido a estudiantes.",
            // "url_pdf" => "https://drive.google.com/file/d/11i2csEhx_JHOxBBS2LqM9OC3mojI_G0l/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-24 09:30:00",
            // "last_date" => "2023-08-28 10:00:00",
            // "created_at" => "2023-08-24 09:30:00",
            // "updated_at" => "2023-08-24 09:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de CAPACITACIÓN denominado Agricultura de Precisión para la Escuela Profesional de Agronomía como parte del Plan de Capacitación 2023 dirigido a estudiantes.",
            // "url_pdf" => "https://drive.google.com/file/d/1ZTDZhq0hGXye9PU9jLoJelhVQ5Q5zqPm/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-24 09:30:00",
            // "last_date" => "2023-08-28 10:00:00",
            // "created_at" => "2023-08-24 09:30:00",
            // "updated_at" => "2023-08-24 09:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de 01 ARMARIO MELAMINA 04 PUERTAS CON LLAVE Y 01 ESCRITORIO MELAMINA EN L – 4 CAJONES CON LLAVE para la Facultad de Ingeniería de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1t8bB5cts52jUIiwXuPZOCn1MM_2mSesc/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-24 19:30:00",
            // "last_date" => "2023-08-25 12:30:00",
            // "created_at" => "2023-08-24 19:30:00",
            // "updated_at" => "2023-08-24 19:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de insumos de campo para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1u62xOUNlFPAxs2U13KDez8pTYPBWFSsU/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-25 18:00:00",
            // "last_date" => "2023-08-29 12:00:00",
            // "created_at" => "2023-08-25 18:00:00",
            // "updated_at" => "2023-08-25 18:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE 01 IMPRESORA DE INYECCIÓN A TINTA DE 18 PPM, PARA LA FACULTA DE INGENIERÍA DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1a4ZmlR4i3Hl_aQRFTCHHNPEOsi1rl883/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-28 15:00:00",
            // "last_date" => "2023-09-07 18:00:00",
            // "created_at" => "2023-08-28 15:00:00",
            // "updated_at" => "2023-08-28 15:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE EQUIPOS PERIFÉRICOS DE COMPUTO PARA LA UNIDAD DE ABASTECIMIENTO DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1YjHoAOnQKxxp4PTFvDaLaD8rUVDwFnMR/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-28 15:00:00",
            // "last_date" => "2023-08-28 17:00:00",
            // "created_at" => "2023-08-28 15:00:00",
            // "updated_at" => "2023-08-28 15:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Gestión y seguimiento de actividades administrativas de las direcciones de la Vicepresidencia de Investigación. ",
            // "url_pdf" => "https://drive.google.com/file/d/12gvs6t7BXkagXOgd4eQAXsxAQSdk0jzB/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-28 15:00:00",
            // "last_date" => "2023-08-28 20:00:00",
            // "created_at" => "2023-08-28 15:00:00",
            // "updated_at" => "2023-08-28 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE GESTIÓN Y SEGUIMIENTO DE ACTIVIDADES PROPIAS DE LA OFICINA DE COOPERACIÓN Y RELACIONES INTERNACIONALES.",
            // "url_pdf" => "https://drive.google.com/file/d/1ARMsLAwz8gJFQSznMfmwQ0Wol10oH34W/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-28 17:00:00",
            // "last_date" => "2023-08-29 11:00:00",
            // "created_at" => "2023-08-28 17:00:00",
            // "updated_at" => "2023-08-28 17:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE CAJAS ARCHIVADORAS PARA LA ESCUELA PROFESIONAL DE INGENIERÍA DE SISTEMAS DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1YEE_ug9dPMA_loEjawkcRZ3eQIRXSCco/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 08:30:00",
            // "last_date" => "2023-08-30 18:00:00",
            // "created_at" => "2023-08-29 08:30:00",
            // "updated_at" => "2023-08-29 08:30:00"
            // ]
            // ,[
            // "description" => "Servicio de CURSO TALLER DE VALIDACION METODOLOGICA (SEMINARIO TALLER EN ESTRATEGIAS METODOLOGICAS CONSTITUTIVAS) dirigido a los docentes del Departamento académico de Administración Turismo y Hotelería – UNDC, a efectos de ejecutar el POI – CEPLAN 2023 de la escuela programado y aprobado.",
            // "url_pdf" => "https://drive.google.com/file/d/1CJSriAf345m8XQfDgAAsz1kJ6yV_QF5v/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 09:00:00",
            // "last_date" => "2023-09-04 18:00:00",
            // "created_at" => "2023-08-29 09:00:00",
            // "updated_at" => "2023-08-29 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO ESPECIALIZADO EN PSICOLOGIA",
            // "url_pdf" => "https://drive.google.com/file/d/127XgnXp6cS0YJQ51P8JbaPPUeYCQKg3T/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 09:00:00",
            // "last_date" => "2023-08-30 18:00:00",
            // "created_at" => "2023-08-29 09:00:00",
            // "updated_at" => "2023-08-29 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES DE OFICINA PARA LA UNIDAD DE RECURSOS HUMANOS",
            // "url_pdf" => "https://drive.google.com/file/d/1rmKrmtEtETRaUG1X2P6s3GDqN6_kECky/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 09:00:00",
            // "last_date" => "2023-08-30 18:00:00",
            // "created_at" => "2023-08-29 09:00:00",
            // "updated_at" => "2023-08-29 09:00:00"
            // ]
            // ,[
            // "description" => "Apoyo técnico para el Laboratorio de Cultivo In Vitro de Tejidos Vegetales del Centro Internacional de Investigación de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1dGitEGf-WGl4HQqIKq_mjWf5h3PXyjTd/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 08:30:00",
            // "last_date" => "2023-08-30 18:00:00",
            // "created_at" => "2023-08-29 08:30:00",
            // "updated_at" => "2023-08-29 08:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN ",
            // "url_pdf" => "",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 09:30:00",
            // "last_date" => "2023-09-05 11:00:00",
            // "created_at" => "2023-08-29 09:30:00",
            // "updated_at" => "2023-08-29 09:30:00"
            // ]
            // ,[
            // "description" => "CONTRATAR LOS SERVICIOS DE UN PROFESIONAL ESPECIALISTA EN GESTIÓN ADMINISTRATIVA PARA LA PRESIDENCIA DE LA COMISIÓN ORGANIZADORA",
            // "url_pdf" => "https://drive.google.com/file/d/1ogfqeI9o8JRaOMy4yDtKE0239To6UTQR/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 09:30:00",
            // "last_date" => "2023-08-30 18:00:00",
            // "created_at" => "2023-08-29 09:30:00",
            // "updated_at" => "2023-08-29 09:30:00"
            // ]
            // ,[
            // "description" => "none",
            // "url_pdf" => "",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 10:00:00",
            // "last_date" => "2023-08-30 18:00:00",
            // "created_at" => "2023-08-29 10:00:00",
            // "updated_at" => "2023-08-29 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO DE ESPECIALIZACIÓN EN PLANILLAS Y REMUNERACIONES EN EL SECTOR PÚBLICO 2023",
            // "url_pdf" => "https://drive.google.com/file/d/1O0v5beKUToaKZd61f27QoUQW1WzAf04I/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 10:00:00",
            // "last_date" => "2023-09-06 12:00:00",
            // "created_at" => "2023-08-29 10:00:00",
            // "updated_at" => "2023-08-29 10:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de filtros de carbón activado tipo cartucho para la Dirección de Responsabilidad Social Universitaria.”",
            // "url_pdf" => "https://drive.google.com/file/d/1ZA0758HPWlQvAt5XiSf682OXIwbB2d0v/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 10:00:00",
            // "last_date" => "2023-09-05 18:00:00",
            // "created_at" => "2023-08-29 10:00:00",
            // "updated_at" => "2023-08-29 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANTENIMIENTO Y PINTADO DE LAS UNIDADES DE TRANSPORTE DE LA UNIVERSIDAD DE CAÑETE ",
            // "url_pdf" => "https://drive.google.com/file/d/1jbxTGAoIwYCj1RDd8qOrIDUH9vf0Y9Ls/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 10:00:00",
            // "last_date" => "2023-08-31 18:00:00",
            // "created_at" => "2023-08-29 10:00:00",
            // "updated_at" => "2023-08-29 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANTENIMIENTO DE TABLERO DE CONTROL DEL SISTEMA DE RIEGO DE ÁREAS VERDES DEL FUNDO DON LUIS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1v88u-Upu-dTdJmeUpyQ2BFHcRvrSwQcq/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 10:00:00",
            // "last_date" => "2023-08-31 18:00:00",
            // "created_at" => "2023-08-29 10:00:00",
            // "updated_at" => "2023-08-29 10:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de bienes y herramientas para la Dirección de Responsabilidad Social Universitaria.”",
            // "url_pdf" => "https://drive.google.com/file/d/1grywVXF9klcfYbz-cjrcbS7PBj_ojo73/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 11:30:00",
            // "last_date" => "2023-08-15 17:00:00",
            // "created_at" => "2023-08-29 11:30:00",
            // "updated_at" => "2023-08-29 11:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de limpieza para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1wL3HriwVwTEL_UoraUQg06wf9QmtOA2f/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 10:00:00",
            // "last_date" => "2023-08-31 18:00:00",
            // "created_at" => "2023-08-29 10:00:00",
            // "updated_at" => "2023-08-29 10:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de Agua de mesa necesaria para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1nUU9AY2QF3iR_hXFckxxmHpruC59kD1Q/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 12:00:00",
            // "last_date" => "2023-08-30 18:00:00",
            // "created_at" => "2023-08-29 12:00:00",
            // "updated_at" => "2023-08-29 12:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de mobiliarios para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1g8UhYY2JCF0uEBuxjG4DVYqtOKLZUMsy/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 12:00:00",
            // "last_date" => "2023-08-30 12:00:00",
            // "created_at" => "2023-08-29 12:00:00",
            // "updated_at" => "2023-08-29 12:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de Agua de mesa necesaria para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete.”",
            // "url_pdf" => "https://drive.google.com/file/d/1oTHt0ii31KR-AWWsIy8dseJQpHoyg5dF/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 16:30:00",
            // "last_date" => "2023-08-30 18:00:00",
            // "created_at" => "2023-08-29 16:30:00",
            // "updated_at" => "2023-08-29 16:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de Agua de mesa necesaria para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete.” v2",
            // "url_pdf" => "https://drive.google.com/file/d/1oTHt0ii31KR-AWWsIy8dseJQpHoyg5dF/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-29 16:30:00",
            // "last_date" => "2023-08-30 18:00:00",
            // "created_at" => "2023-08-29 16:30:00",
            // "updated_at" => "2023-08-29 16:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de oficina para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1YyOQmErRn5Mq541x_t9qUkM_UZmGGrXk/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-31 09:00:00",
            // "last_date" => "2023-09-01 12:00:00",
            // "created_at" => "2023-08-31 09:00:00",
            // "updated_at" => "2023-08-31 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE FICHAS ÓPTICAS PARA LA DIRECCIÓN DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1JgJLZlPrKxJjFui6Te4Zrjz3c0iwvOeP/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-08-31 09:00:00",
            // "last_date" => "2023-09-01 18:00:00",
            // "created_at" => "2023-08-31 09:00:00",
            // "updated_at" => "2023-08-31 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CONSULTORÍA: ELABORACIÓN, REVISIÓN Y VALIDACIÓN DEL DISEÑO DOCUMENTARIO DEL SISTEMA INTEGRADO DE GESTIÓN CON LA APLICACIÓN DE “FLOW CHART” PARA EL FORTALECIMIENTO DE LA GESTIÓN POR PROCESOS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/15gArUVHcKPcdrVaIhyq4TkfOfiRqGDs0/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-31 11:00:00",
            // "last_date" => "2023-09-05 12:00:00",
            // "created_at" => "2023-08-31 11:00:00",
            // "updated_at" => "2023-08-31 11:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo de suelos, para el proyecto de investigación: “Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023)”.",
            // "url_pdf" => "https://drive.google.com/file/d/1wXAgzuxkeObnXM4JveunGAokytJ3s2h8/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-31 12:00:00",
            // "last_date" => "2023-09-01 12:00:00",
            // "created_at" => "2023-08-31 12:00:00",
            // "updated_at" => "2023-08-31 12:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de laboratorio en biotecnología molecular. para el proyecto de investigación: “Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”. ",
            // "url_pdf" => "https://drive.google.com/file/d/1mIQZ0BA8BTohf8OzizaZRWFzoCsUKPec/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-31 13:00:00",
            // "last_date" => "2023-09-04 12:00:00",
            // "created_at" => "2023-08-31 13:00:00",
            // "updated_at" => "2023-08-31 13:00:00"
            // ]
            // ,[
            // "description" => "“Servicio de Actualización de Plataforma Virtual y Página Web”",
            // "url_pdf" => "https://drive.google.com/file/d/1dTJIM5bbFa6ntC1D1dsKLuHLil4cosb4/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-31 14:30:00",
            // "last_date" => "2023-09-01 10:00:00",
            // "created_at" => "2023-08-31 14:30:00",
            // "updated_at" => "2023-08-31 14:30:00"
            // ]
            // ,[
            // "description" => "“Servicio de Desarrollo de Sistemas Web”",
            // "url_pdf" => "https://drive.google.com/file/d/19cMUhsjuJU2E1LwYceTRMxRs5FsESOkX/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-08-31 14:30:00",
            // "last_date" => "2023-09-01 10:00:00",
            // "created_at" => "2023-08-31 14:30:00",
            // "updated_at" => "2023-08-31 14:30:00"
            // ]
            // ,[
            // "description" => "“Suscripción para plataforma de colaboración de servicio basado en la nube para la Oficina de Tecnología de la Información”",
            // "url_pdf" => "https://drive.google.com/file/d/1_pQIEHN6Iq0-9FtyBm27YD3HqfC_KGCy/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-01 10:00:00",
            // "last_date" => "2023-09-15 18:00:00",
            // "created_at" => "2023-09-01 10:00:00",
            // "updated_at" => "2023-09-01 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO DE POLÍTICAS PÚBLICAS CON ENFOQUE INTERCULTURAL",
            // "url_pdf" => "https://drive.google.com/file/d/18diTeysaqe3yPnGuHwxHNZUK7XQn3hlu/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-01 14:30:00",
            // "last_date" => "2023-09-06 18:00:00",
            // "created_at" => "2023-09-01 14:30:00",
            // "updated_at" => "2023-09-01 14:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 1",
            // "url_pdf" => "https://drive.google.com/file/d/161dpLuVawhETb_Op1w1Kn4LiC0aeFPft/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-01 17:00:00",
            // "last_date" => "2023-09-04 10:00:00",
            // "created_at" => "2023-09-01 17:00:00",
            // "updated_at" => "2023-09-01 17:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio especializado en instalaciones eléctricas - Técnico para la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1O-5Oc0f6q-jOQxXVo76JjADi1G7p8lAd/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-01 17:00:00",
            // "last_date" => "2023-09-04 10:00:00",
            // "created_at" => "2023-09-01 17:00:00",
            // "updated_at" => "2023-09-01 17:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 1",
            // "url_pdf" => "https://drive.google.com/file/d/1Rm-5-T1DSY6IGHRVLbZHcItp73LgKyc_/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-01 17:00:00",
            // "last_date" => "2023-09-04 10:30:00",
            // "created_at" => "2023-09-01 17:00:00",
            // "updated_at" => "2023-09-01 17:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 2",
            // "url_pdf" => "https://drive.google.com/file/d/12LQ34uwRcS79R82w3b_NDNv4ohACjVCT/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-01 17:00:00",
            // "last_date" => "2023-09-04 10:00:00",
            // "created_at" => "2023-09-01 17:00:00",
            // "updated_at" => "2023-09-01 17:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de Supervisor de Seguridad para la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/19NSI1cvJcWnF3dx6cs5UtsRGigP10pwg/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-01 17:00:00",
            // "last_date" => "2023-09-04 10:00:00",
            // "created_at" => "2023-09-01 17:00:00",
            // "updated_at" => "2023-09-01 17:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguimiento y monitoreo de actividades de gestión y/o administrativas para la Unidad de Servicios Generales de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1IA4w6O4pWQq0FSWMy2dBwlBoAqQH4VFw/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-01 17:30:00",
            // "last_date" => "2023-09-04 10:00:00",
            // "created_at" => "2023-09-01 17:30:00",
            // "updated_at" => "2023-09-01 17:30:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE COFFEE BREAK PARA LA ESCUELA DE CONTABILIDAD",
            // "url_pdf" => "https://drive.google.com/file/d/1bpKkjqMqczOFbBIStZN3klzX5qUba3KU/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-09-04 10:00:00",
            // "last_date" => "2023-09-06 08:00:00",
            // "created_at" => "2023-09-04 10:00:00",
            // "updated_at" => "2023-09-04 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Capacitador para el Taller de Incubadora de Empresas, denominado “Concurso y Feria de Negocios 2023”. ",
            // "url_pdf" => "https://drive.google.com/file/d/12mGpLdlylpv4jnxS2FrjzfeuGqchT6on/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-09-04 10:00:00",
            // "last_date" => "2023-09-05 18:00:00",
            // "created_at" => "2023-09-04 10:00:00",
            // "updated_at" => "2023-09-04 10:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de equipos de protección personal y de seguridad para el personal de mantenimiento de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1EJDnib38RjD2-ZCmsQl7wlM62ocbWZr7/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-04 10:30:00",
            // "last_date" => "2023-09-11 18:00:00",
            // "created_at" => "2023-09-04 10:30:00",
            // "updated_at" => "2023-09-04 10:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento correctivo y preventivo de equipos para el laboratorio de química, sanidad vegetal, suelos y topografía, fitomejoramiento y semillas, de la Escuela Profesional de Agronomía de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1xpHx8RwoMrqAj8QZKDM3aQqvT0HWMRgB/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-04 10:30:00",
            // "last_date" => "2023-09-08 08:00:00",
            // "created_at" => "2023-09-04 10:30:00",
            // "updated_at" => "2023-09-04 10:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete – Personal 1",
            // "url_pdf" => "https://drive.google.com/file/d/13KOUKUSKcA80Tkcc8Gnbg4bCTxM_bVLU/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-04 16:00:00",
            // "last_date" => "2023-09-05 18:00:00",
            // "created_at" => "2023-09-04 16:00:00",
            // "updated_at" => "2023-09-04 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete – Personal 2",
            // "url_pdf" => "https://drive.google.com/file/d/1L5K5j4DqEP2MTU0ccT76xn3drBBmInk9/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-04 16:00:00",
            // "last_date" => "2023-09-05 18:00:00",
            // "created_at" => "2023-09-04 16:00:00",
            // "updated_at" => "2023-09-04 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete – Personal 3",
            // "url_pdf" => "https://drive.google.com/file/d/1jfsxV5-EyjV6HqM3LIWF8j3A6-a1sL2I/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-04 16:00:00",
            // "last_date" => "2023-09-05 18:00:00",
            // "created_at" => "2023-09-04 16:00:00",
            // "updated_at" => "2023-09-04 16:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete – Personal 4",
            // "url_pdf" => "https://drive.google.com/file/d/10WKeGwlpy43D9otQHmkWHLw-VEbU5LnK/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-04 16:00:00",
            // "last_date" => "2023-09-05 18:00:00",
            // "created_at" => "2023-09-04 16:00:00",
            // "updated_at" => "2023-09-04 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MONITOREO OCUPACIONAL DE AGENTES FISICOS Y QUIMICOS EN LA SEDE ADMINISTRATIVA DE HUALCARÁ DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1BPGwjxMyp0acdtfLP02IesVL9WjeIHfw/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-05 09:00:00",
            // "last_date" => "2023-09-08 08:00:00",
            // "created_at" => "2023-09-05 09:00:00",
            // "updated_at" => "2023-09-05 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación de servicio de Análisis foliar, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”.",
            // "url_pdf" => "https://drive.google.com/file/d/12V2JJBhkdLROdHgCrqekTKyNtI9vpK2c/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-05 10:30:00",
            // "last_date" => "2023-09-06 12:00:00",
            // "created_at" => "2023-09-05 10:30:00",
            // "updated_at" => "2023-09-05 10:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de 05 de bidones de Agua de Mesa sin gas x 20 L para la Dirección de Responsabilidad Social Universitaria.”",
            // "url_pdf" => "https://drive.google.com/file/d/1MGLuT7cDi4jLxc-NPHtqtzlBmNbn76hC/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-05 11:00:00",
            // "last_date" => "2023-09-06 18:00:00",
            // "created_at" => "2023-09-05 11:00:00",
            // "updated_at" => "2023-09-05 11:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento preventivo de las unidades de transporte de placa EGO – 737, EGO – 951 y EGO – 950 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1itrgJ2tIln411QR9Ar8NKj18Wa_dHs_w/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-05 12:00:00",
            // "last_date" => "2023-09-11 18:00:00",
            // "created_at" => "2023-09-05 12:00:00",
            // "updated_at" => "2023-09-05 12:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO “PLANEAMIENTO DE PROYECTOS CON MS PROJECT”",
            // "url_pdf" => "https://drive.google.com/file/d/1crsSEDnF3S1KvuecbHd0Wiu31t7sJn67/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-05 12:30:00",
            // "last_date" => "2023-09-08 08:00:00",
            // "created_at" => "2023-09-05 12:30:00",
            // "updated_at" => "2023-09-05 12:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 2",
            // "url_pdf" => "https://drive.google.com/file/d/1kWlBoUtuiMxtQAHZltvkiiHe24ES1zcc/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-05 16:30:00",
            // "last_date" => "2023-09-14 11:00:00",
            // "created_at" => "2023-09-05 16:30:00",
            // "updated_at" => "2023-09-05 16:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de conducción de vehículo para la Unidad de Servicios Generales de la Universidad Nacional de Cañete – Personal 5",
            // "url_pdf" => "https://drive.google.com/file/d/18u9RmjV4EbEIweSPzVQCG-_kwOD8RCHA/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-05 16:30:00",
            // "last_date" => "2023-09-08 12:00:00",
            // "created_at" => "2023-09-05 16:30:00",
            // "updated_at" => "2023-09-05 16:30:00"
            // ]
            // ,[
            // "description" => "Contratación de servicio de un profesional para la publicación de un artículo cientifico titulado: “La capacidad de innovación tecnológica y nivel de emprendimiento en los alumnos de la universidad nacional de cañete, 2021“.",
            // "url_pdf" => "https://drive.google.com/file/d/15tS5Lv36e--M7KNVY9gOkfJt-BVbYBOT/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-05 18:00:00",
            // "last_date" => "2023-09-11 18:00:00",
            // "created_at" => "2023-09-05 18:00:00",
            // "updated_at" => "2023-09-05 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación de servicio de un profesional para la publicación de un artículo cientifico titulado: “La motivación y el emprendimiento en estudiantes de los últimos ciclos de administración de la universidad nacional de cañete, 2021“ de una tesista del proyecto de investigación Millenial.",
            // "url_pdf" => "https://drive.google.com/file/d/1e6QqprV7cvIuj7EG2YwK0vpxKcGKhrC4/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-05 18:00:00",
            // "last_date" => "2023-09-15 18:00:00",
            // "created_at" => "2023-09-05 18:00:00",
            // "updated_at" => "2023-09-05 18:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de materiales para mantenimiento de lavaderos – Instituto de Investigación para la implementación del Instituto de Investigación de los Laboratorios del Centro Internacional de Investigación para la Sustentabilidad (CIIS) de la Universidad Nacional de Cañete – Sede Lunahuaná.",
            // "url_pdf" => "https://drive.google.com/file/d/1IYfDNKJvPIR8wzF2Ohu-mwYjHdAJvJtq/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-05 18:00:00",
            // "last_date" => "2023-09-07 13:00:00",
            // "created_at" => "2023-09-05 18:00:00",
            // "updated_at" => "2023-09-05 18:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE ASISTENCIA TÉCNICA EN MONITOREO Y SEGUIMIENTO EN GESTIÓN ADMINISTRATIVA PARA LA ESCUELA PROFESIONAL DE ADMINISTRACION DE TURISMO Y HOTELERÍA DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1yjRibgCFU0TcFlnJqKtKm4BD4wMCcmOS/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-05 18:00:00",
            // "last_date" => "2023-09-07 13:00:00",
            // "created_at" => "2023-09-05 18:00:00",
            // "updated_at" => "2023-09-05 18:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de accesorios para computadora para ejecución del IOARR: “ADQUISICIÓN DE VEHÍCULO; EN EL(LA) UNIDAD DE SERVICIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN VICENTE DE CAÑETE, PROVINCIA CAÑETE, DEPARTAMENTO LIMA”, con Código Único de Inversión 2571526.",
            // "url_pdf" => "https://drive.google.com/file/d/1dmUBGsLBUu3E_bOX8HC9HT17ESkwtaVC/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-06 17:30:00",
            // "last_date" => "2023-09-07 17:00:00",
            // "created_at" => "2023-09-06 17:30:00",
            // "updated_at" => "2023-09-06 17:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de útiles de oficina para ejecución del IOARR: “ADQUISICIÓN DE VEHÍCULO; EN EL(LA) UNIDAD DE SERVICIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN VICENTE DE CAÑETE, PROVINCIA CAÑETE, DEPARTAMENTO LIMA”, con Código Único de Inversión 2571526.",
            // "url_pdf" => "https://drive.google.com/file/d/1GiN-M4W8WDU3CXeYrdgBk5UcY-l1UdDq/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-06 17:30:00",
            // "last_date" => "2023-09-07 17:00:00",
            // "created_at" => "2023-09-06 17:30:00",
            // "updated_at" => "2023-09-06 17:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE BIDONES DE AGUA DE MESA SIN GAS DE 20 LT PARA ARCHIVO CENTRAL",
            // "url_pdf" => "https://drive.google.com/file/d/1yy9LUpsHnT4KwRAYzpOoBNwVoIy4G0M0/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-07 10:00:00",
            // "last_date" => "2023-09-08 17:00:00",
            // "created_at" => "2023-09-07 10:00:00",
            // "updated_at" => "2023-09-07 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE BIDONES DE AGUA DE MESA SIN GAS DE 20 LT PARA SECRETARÍA GENERAL",
            // "url_pdf" => "https://drive.google.com/file/d/1QGXAO8hhNgVpGKF_J2xMlCvLCvTUp6NN/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-07 10:30:00",
            // "last_date" => "2023-09-08 17:00:00",
            // "created_at" => "2023-09-07 10:30:00",
            // "updated_at" => "2023-09-07 10:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE ASEO PARA LA DIRECCIÓN DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/17XGSlggjDaXjsfPiK-2ykFJZafHyWgsX/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-07 11:30:00",
            // "last_date" => "2023-09-08 17:00:00",
            // "created_at" => "2023-09-07 11:30:00",
            // "updated_at" => "2023-09-07 11:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de oficina para el proyecto: Aplicación de la herramienta biotecnológica CRISPR-Cas9 para la edición génica en variedades de pepino dulce (Solanum muricatum Ait.) en la provincia de Cañete.”",
            // "url_pdf" => "https://drive.google.com/file/d/1TMoUIc9ePHyKTVT6u6D-DxkV0ClbPLVe/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-07 15:00:00",
            // "last_date" => "2023-09-08 17:00:00",
            // "created_at" => "2023-09-07 15:00:00",
            // "updated_at" => "2023-09-07 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE REFERENCISTA Y ATENCION AL USUARIO BIBLIOTECA",
            // "url_pdf" => "https://drive.google.com/file/d/1uK4jGet5MfcybVHsv7WiixoyJgILtG2E/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-08 10:00:00",
            // "last_date" => "2023-09-11 13:00:00",
            // "created_at" => "2023-09-08 10:00:00",
            // "updated_at" => "2023-09-08 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ENESEÑANZA DE DANZAS 2023 II",
            // "url_pdf" => "file:///C:/Users/abastecimiento01/Downloads/3.%20TDR%20DANZA%20FOLCLORICA%20II[R].pdf",
            // "user_id" => 1,
            // "start_date" => "2023-09-08 10:00:00",
            // "last_date" => "2023-09-10 13:00:00",
            // "created_at" => "2023-09-08 10:00:00",
            // "updated_at" => "2023-09-08 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO DE CAPACITACIÓN EN INTRODUCCIÓN A PYTHON PARA MACHINE LEARNING",
            // "url_pdf" => "https://drive.google.com/file/d/1szFxrLvKupWlz2FSyo4zcIf6FYgN5a7e/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-08 10:00:00",
            // "last_date" => "2023-09-11 18:00:00",
            // "created_at" => "2023-09-08 10:00:00",
            // "updated_at" => "2023-09-08 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE REFERENCISTA Y ATENCION AL USUARIO BIBLIOTECA",
            // "url_pdf" => "https://drive.google.com/file/d/1uK4jGet5MfcybVHsv7WiixoyJgILtG2E/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-08 10:00:00",
            // "last_date" => "2023-09-11 13:00:00",
            // "created_at" => "2023-09-08 10:00:00",
            // "updated_at" => "2023-09-08 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para el local académico CNI de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1z18osRoQv7GFDp7MEZ51K2IyhWe0aRfx/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-08 11:00:00",
            // "last_date" => "2023-09-11 13:00:00",
            // "created_at" => "2023-09-08 11:00:00",
            // "updated_at" => "2023-09-08 11:00:00"
            // ]
            // ,[
            // "description" => "Contratación de servicio de un profesional para la publicación de un artículo cientifico titulado: “El Balanced Scorecard y el desarrollo empresarial de las Mipymes en San Vicente de Cañete, 2021”, PIEM Mypes.",
            // "url_pdf" => "https://drive.google.com/file/d/1wcLe-ridgyUB4H2F88xYlFkJSmpDkikg/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-08 11:30:00",
            // "last_date" => "2023-09-15 18:00:00",
            // "created_at" => "2023-09-08 11:30:00",
            // "updated_at" => "2023-09-08 11:30:00"
            // ]
            // ,[
            // "description" => "Contratación de servicio de un profesional para la publicación de un artículo cientifico titulado: “Relación entre el planeamiento estratégico y la cultura organizacional de la Bodega y Viñedos Santa María S.A.C. del distrito de Lunahuaná, provincia de Cañete, 2021”, PIEM Mypes.",
            // "url_pdf" => "https://drive.google.com/file/d/1TpkJV7bQhbtNMWrkW-6jkPR6noi_L-_P/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-08 11:30:00",
            // "last_date" => "2023-09-15 14:30:00",
            // "created_at" => "2023-09-08 11:30:00",
            // "updated_at" => "2023-09-08 11:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ALIMENTACIÓN DE PERSONAS PARA LOS PARTICIPANTES DE LA CAPACITACIÓN “CAMPAÑA SOBRE IGUALDAD SALARIAL Y NO DISCRIMINACIÓN EN EL TRABAJO”",
            // "url_pdf" => "https://drive.google.com/file/d/19XnPRbLwYCW6IU3RAlQ1ZzG5XdQXPdoM/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-08 18:00:00",
            // "last_date" => "2023-09-12 13:30:00",
            // "created_at" => "2023-09-08 18:00:00",
            // "updated_at" => "2023-09-08 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de laboratorio en biotecnología molecular. para el proyecto de investigación: “Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”. ",
            // "url_pdf" => "https://drive.google.com/file/d/1kH7INAdF9RLJJgeWoNEMzM4mM5Ie4Ve_/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-09-08 18:00:00",
            // "last_date" => "2023-09-12 18:00:00",
            // "created_at" => "2023-09-08 18:00:00",
            // "updated_at" => "2023-09-08 18:00:00"
            // ]
            // ,[
            // "description" => "“SERVICIO DE INDAGACIÓN DE MERCADO DE BIENES Y SERVICIOS”",
            // "url_pdf" => "https://drive.google.com/file/d/1QB00wz3Enh69HzshaNseTxxZE3blbH3n/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-11 08:00:00",
            // "last_date" => "2023-09-11 13:00:00",
            // "created_at" => "2023-09-11 08:00:00",
            // "updated_at" => "2023-09-11 08:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de guantes de poliéster para la Dirección de Responsabilidad Social Universitaria.” ",
            // "url_pdf" => "https://drive.google.com/file/d/1kT0mTIxp3OmA1MZ2YHG5E7TkYCS8Dna6/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-11 12:00:00",
            // "last_date" => "2023-09-12 12:00:00",
            // "created_at" => "2023-09-11 12:00:00",
            // "updated_at" => "2023-09-11 12:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE BOTIQUINES DE MADERA PARA LA SEDE ADMINISTRATIVA Y ACADÉMICA DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1o_NmSinaPBkixskpO4OlmpwXjShrDY-c/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-11 12:00:00",
            // "last_date" => "2023-09-12 08:00:00",
            // "created_at" => "2023-09-11 12:00:00",
            // "updated_at" => "2023-09-11 12:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de CAPACITACIÓN del Curso Taller “DISEÑO DE PRESAS HIDRAULICAS” para el Departamento Académico de Agronomía como parte del Plan de Capacitación 2023 dirigido a docentes.",
            // "url_pdf" => "https://drive.google.com/file/d/16lFzril0jIR0w96HhUQBsMwhS8qRJWgy/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-11 13:00:00",
            // "last_date" => "2023-09-12 12:00:00",
            // "created_at" => "2023-09-11 13:00:00",
            // "updated_at" => "2023-09-11 13:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE MERCHANDISING PARA PROMOVER LA SEGURIDAD Y SALUD EN EL TRABAJO A LA COMUNIDAD UNIVERSITARIA DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1fccD2_KaUPcddaw0JAJtP6jiFPUavEti/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-11 15:00:00",
            // "last_date" => "2023-09-18 11:00:00",
            // "created_at" => "2023-09-11 15:00:00",
            // "updated_at" => "2023-09-11 15:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Capacitador para el Taller de Incubadora de Empresas, denominado “Concurso y Feria de Negocios 2023”.",
            // "url_pdf" => "https://drive.google.com/file/d/12mGpLdlylpv4jnxS2FrjzfeuGqchT6on/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-11 15:00:00",
            // "last_date" => "2023-09-12 18:00:00",
            // "created_at" => "2023-09-11 15:00:00",
            // "updated_at" => "2023-09-11 15:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE STANDS PUBLICITARIOS PARA LA DIRECCIÓN DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1MWrbL5iYxsrSkszAdrp1Kl9AWTLcL0Uo/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-11 15:30:00",
            // "last_date" => "2023-09-12 17:00:00",
            // "created_at" => "2023-09-11 15:30:00",
            // "updated_at" => "2023-09-11 15:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de Diplomado en Metodología de la Investigación: Introducción a los procesos cuantitativos, cualitativos y mixtos",
            // "url_pdf" => "https://drive.google.com/file/d/1SB_wxwJt6qjSIt4z_ebmqIP8A1rumaKV/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-11 15:00:00",
            // "last_date" => "2023-09-12 18:00:00",
            // "created_at" => "2023-09-11 15:00:00",
            // "updated_at" => "2023-09-11 15:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 35 diplomas con caligrafiado para los graduados de la Universidad Nacional De Cañete dividido en (34 diplomas para Bachiller y 01 diploma de Título profesional)",
            // "url_pdf" => "https://drive.google.com/file/d/1maVOQ-qdPAqjGsXwJyoOfJW5o4qquf8m/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-12 10:30:00",
            // "last_date" => "2023-09-13 10:00:00",
            // "created_at" => "2023-09-12 10:30:00",
            // "updated_at" => "2023-09-12 10:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ELABORACIÓN DE DOCUMENTOS ADMINISTRATIVOS",
            // "url_pdf" => "https://drive.google.com/file/d/1QoY4WiQdv1f8MeN8ru9lqE0ZeBwilcqa/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-12 12:00:00",
            // "last_date" => "2023-09-13 10:00:00",
            // "created_at" => "2023-09-12 12:00:00",
            // "updated_at" => "2023-09-12 12:00:00"
            // ]
            // ,[
            // "description" => " ADQUISICIÓN DE 01 EQUIPO MULTIFUNCIONAL – IMPRESORA A COLOR, PARA EL DEPARTAMENTO DE CONTABILIDAD DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1tjLhSY3WC1gJ__VksJlu0-W4Pili9P17/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-12 12:00:00",
            // "last_date" => "2023-10-04 18:00:00",
            // "created_at" => "2023-09-12 12:00:00",
            // "updated_at" => "2023-09-12 12:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MOBILIARIO PARA LA DIRECCIÓN DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1Muj4NRezgXeovREz1zKoLxKJc9xyXELS/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-12 17:30:00",
            // "last_date" => "2023-09-25 11:00:00",
            // "created_at" => "2023-09-12 17:30:00",
            // "updated_at" => "2023-09-12 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo para evaluación de productividad, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”. ",
            // "url_pdf" => "https://drive.google.com/file/d/1DyXEBrBV_AmRkk4LOcAnggfQPi2sZV9u/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-09-13 08:00:00",
            // "last_date" => "2023-09-14 18:00:00",
            // "created_at" => "2023-09-13 08:00:00",
            // "updated_at" => "2023-09-13 08:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de medicamentos para los tópicos de los locales académicos: Casa de la cultura y CNI ",
            // "url_pdf" => "https://drive.google.com/file/d/1Ifrg0gzD60cx-bOOffDIuWI_20IYPvkk/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-09-13 09:00:00",
            // "last_date" => "2023-09-14 12:00:00",
            // "created_at" => "2023-09-13 09:00:00",
            // "updated_at" => "2023-09-13 09:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACIÓN DEL SERVICIO DE CONSULTORÍA DE OBRA PARA LA SUPERVISIÓN DE LA OBRA: “MEJORAMIENTO DEL SERVICIO DE EDUCACIÓN SUPERIOR DE LA ESCUELA PROFESIONAL DE ADMINISTRACIÓN DE TURISMO Y HOTELERÍA EN LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN LUIS, PROVINCIA DE CAÑETE, REGIÓN LIMA”.. CÓDIGO DE INVERSIÓN: 2508648.",
            // "url_pdf" => "https://drive.google.com/file/d/1Wi9-aCdqnKU69dgYwhnu18Ww5oXZbmLu/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-13 10:00:00",
            // "last_date" => "2023-09-15 12:00:00",
            // "created_at" => "2023-09-13 10:00:00",
            // "updated_at" => "2023-09-13 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO DE CAPACITACIÓN EN PROYECTOS DE TRANSFORMACION DIGITAL UN ENFOQUE PRÁCTICO",
            // "url_pdf" => "https://drive.google.com/file/d/1nLqW9QJN7vgTuLgWG4GiaeREFBbtqHkq/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-13 10:00:00",
            // "last_date" => "2023-09-14 13:00:00",
            // "created_at" => "2023-09-13 10:00:00",
            // "updated_at" => "2023-09-13 10:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de insumos de campo para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1lS66OgdRnajzd_inQmw2bEyv2KHk3g9L/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-14 14:00:00",
            // "last_date" => "2023-09-15 18:00:00",
            // "created_at" => "2023-09-14 14:00:00",
            // "updated_at" => "2023-09-14 14:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO PROFESIONAL DE MEDICO CIRUJANO",
            // "url_pdf" => "https://drive.google.com/file/d/1CdKpajaPy1lKrrm_UXrlImxinruYY4J2/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-15 10:00:00",
            // "last_date" => "2023-09-18 10:00:00",
            // "created_at" => "2023-09-15 10:00:00",
            // "updated_at" => "2023-09-15 10:00:00"
            // ]
            // ,[
            // "description" => "Servicio de coordinador de obra en la Inversión: “MEJORAMIENTO DEL SERVICIO DE EDUCACIÓN SUPERIOR DE LA ESCUELA PROFESIONAL DE CONTABILIDAD EN LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN LUIS, PROVINCIA DE CAÑETE, REGIÓN LIMA”, con Código Único de Inversión 2508633.",
            // "url_pdf" => "https://drive.google.com/file/d/1RfBnm_1bEky6ParGl4-kWV4BOstbOVqB/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-15 10:00:00",
            // "last_date" => "2023-09-18 10:00:00",
            // "created_at" => "2023-09-15 10:00:00",
            // "updated_at" => "2023-09-15 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE REDISEÑO DEL PLAN CURRICULAR DE PROGRAMAS DE ESTUDIOS DE LA ESCUELA PROFESIONAL DE CONTABILIDAD-UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1Aass2sqq8tFw3_eDhy2BcSKx8wm8o6uC/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-09-15 10:30:00",
            // "last_date" => "2023-09-19 08:00:00",
            // "created_at" => "2023-09-15 10:30:00",
            // "updated_at" => "2023-09-15 10:30:00"
            // ]
            // ,[
            // "description" => "“ADQUISICIÓN DE HERRAMIENTAS PARA OFICINA”",
            // "url_pdf" => "https://drive.google.com/file/d/19aGY1ZAIgVGCs0Sg4yl8Q81hOIm9QmIi/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-15 12:30:00",
            // "last_date" => "2023-09-18 12:30:00",
            // "created_at" => "2023-09-15 12:30:00",
            // "updated_at" => "2023-09-15 12:30:00"
            // ]
            // ,[
            // "description" => "Contratar a un proveedor para que brinde el Servicio de ASISTENCIA EN EL SISTEMA DE SEGUIMIENTO DE EXPEDIENTES DE TITULACIÒN PARA LA UNIDAD DE INVESTIGACIÓN DE INGENIERIA-UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1a3lbxIeBxs1051n_9PQdr2NLLiZFI31f/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-15 16:00:00",
            // "last_date" => "2023-09-18 10:00:00",
            // "created_at" => "2023-09-15 16:00:00",
            // "updated_at" => "2023-09-15 16:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTILES DE OFICINA PARA LA FACULTAD DE INGENIERIA – PARA EL TALLER DE TESIS-UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1k3KXPHPCHjnrSfwALLe7xjZL3xDtE-2P/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-18 08:30:00",
            // "last_date" => "2023-09-19 17:00:00",
            // "created_at" => "2023-09-18 08:30:00",
            // "updated_at" => "2023-09-18 08:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ASISTENCIA TÉCNICA EN MONITOREO Y SEGUIMIENTO EN GESTIÓN ADMINISTRATIVA DEL DEPARTAMENTO ACADEMICO DE INGENIERIA DE SISTEMAS",
            // "url_pdf" => "https://drive.google.com/file/d/10Qp3eS746LyRONsmyN6LsrFIhyRmL2bR/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-18 08:30:00",
            // "last_date" => "2023-09-19 08:00:00",
            // "created_at" => "2023-09-18 08:30:00",
            // "updated_at" => "2023-09-18 08:30:00"
            // ]
            // ,[
            // "description" => "Contratar a un proveedor para que brinde el Servicio de SEGUIMIENTO Y MONITOREO DE ACTIVIDADES DE GESTIÓN Y/O ADMINISTRATIVAS Para La Facultad De Ingeniería de la UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1TB0x92odenJe3F0H5LMDgNJeG4lIPZAf/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-18 11:00:00",
            // "last_date" => "2023-09-19 10:00:00",
            // "created_at" => "2023-09-18 11:00:00",
            // "updated_at" => "2023-09-18 11:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Análisis de datos para la elaboración de las normas y el software CND camote, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”. ",
            // "url_pdf" => "https://drive.google.com/file/d/1rVJTqC30qE_2SPPF15SFCmnNvhCnnVpq/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-18 18:00:00",
            // "last_date" => "2023-09-19 18:00:00",
            // "created_at" => "2023-09-18 18:00:00",
            // "updated_at" => "2023-09-18 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de CAPACITACIÓN denominado Gestión Manejo y Tratamiento de los Residuos Sólidos del Sector Agrario para los Docentes del Departamento Académico de Agronomía como parte del Plan de Capacitación 2023 dirigido a docentes.",
            // "url_pdf" => "https://drive.google.com/file/d/1wh9mG3R-LLIJh2DxotBVG6HfXybY-yB7/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-18 18:00:00",
            // "last_date" => "2023-09-20 08:00:00",
            // "created_at" => "2023-09-18 18:00:00",
            // "updated_at" => "2023-09-18 18:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ACOMPAÑAMIENTO EN LA IMPLEMENTACIÓN DE PLANES DE MEJORA PARA EL LOGRO DE ESTÁNDARES DE ACREDITACIÓN INSTITUCIONAL SEGÚN EL MODELO SINEACE PARA LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1rhwNoAam4pu1keRziGpGaHLs6bsoVGcH/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-19 09:00:00",
            // "last_date" => "2023-09-20 18:00:00",
            // "created_at" => "2023-09-19 09:00:00",
            // "updated_at" => "2023-09-19 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación de servicio de Análisis foliar, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”. ",
            // "url_pdf" => "https://drive.google.com/file/d/12V2JJBhkdLROdHgCrqekTKyNtI9vpK2c/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-09-19 09:00:00",
            // "last_date" => "2023-09-20 17:00:00",
            // "created_at" => "2023-09-19 09:00:00",
            // "updated_at" => "2023-09-19 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de CAPACITACIÓN denominado Nutrición Vegetal para la Escuela Profesional de Agronomía como parte del Plan de Capacitación 2023 dirigido a estudiantes.",
            // "url_pdf" => "https://drive.google.com/file/d/1vuxfD_7Xt5IaoWrgAzVchKVKXnrVAorK/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-19 17:00:00",
            // "last_date" => "2023-09-20 12:00:00",
            // "created_at" => "2023-09-19 17:00:00",
            // "updated_at" => "2023-09-19 17:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de asesoramiento técnico en ejecución de actividades de campo para la preparación de 02 hectáreas de terreno agrícola en la siembra de semillas de hortalizas, cereales y leguminosas en el campo experimental de la Escuela Profesional de Agronomía de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1VUUHzs6EklgiW5TxenJNgQ61f-RMtzKt/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-20 09:00:00",
            // "last_date" => "2023-09-22 12:00:00",
            // "created_at" => "2023-09-20 09:00:00",
            // "updated_at" => "2023-09-20 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANTENIMIENTO CORRECTIVO DE FALSO TECHO DE LA OFICINA DE SECRETARIA GENERAL Y LA UNIDAD DE GRADOS Y TITULOS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1XLZtc6xhNkMz3dfJpaAwx7W5QxAXwhed/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-20 09:00:00",
            // "last_date" => "2023-10-06 08:00:00",
            // "created_at" => "2023-09-20 09:00:00",
            // "updated_at" => "2023-09-20 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación de un Ingeniero Electricista para realizar trabajos de aumento de carga de energía eléctrica en el Centro Internacional de Investigación de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1b4ESk5hUbcKsk30yT4gI0I0DPXQxWAZP/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-20 09:30:00",
            // "last_date" => "2023-09-21 18:00:00",
            // "created_at" => "2023-09-20 09:30:00",
            // "updated_at" => "2023-09-20 09:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de enseñanza de la Dirección de Responsabilidad Social Universitaria.”",
            // "url_pdf" => "https://drive.google.com/file/d/1Ap3MDFV6gmyUuUaMBMofSE9OxSAVLEJ7/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-20 09:30:00",
            // "last_date" => "2023-09-21 10:00:00",
            // "created_at" => "2023-09-20 09:30:00",
            // "updated_at" => "2023-09-20 09:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE UTENSILIOS DE COMEDOR PARA LA DIRECCIÓN DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1fF6vPrVI3DSfdWeSpO_PWoH-pZfv93ym/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-20 10:00:00",
            // "last_date" => "2023-09-21 17:00:00",
            // "created_at" => "2023-09-20 10:00:00",
            // "updated_at" => "2023-09-20 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANTENIMIENTO DE TABLERO DE CONTROL DEL SISTEMA DE RIEGO DE ÁREAS VERDES DEL FUNDO DON LUIS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1AVPZ8vn0p2cCUA8vD2KyUoju4Z_39qot/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-20 10:00:00",
            // "last_date" => "2023-09-21 18:00:00",
            // "created_at" => "2023-09-20 10:00:00",
            // "updated_at" => "2023-09-20 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE UNIFORME ANTIFLUIDO PARA PERSONAL DE SALUD",
            // "url_pdf" => "https://drive.google.com/file/d/1JUstJczqKQbNz5u25Z5U_5RfAYM0eO-F/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-20 12:30:00",
            // "last_date" => "2023-09-21 10:00:00",
            // "created_at" => "2023-09-20 12:30:00",
            // "updated_at" => "2023-09-20 12:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANTENIMIENTO DE ÁREAS VERDES EN EL FUNDO SAN LUIS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/drive/folders/1ho6nB1FzGfHyPQwvqPN0CgM_quM-NLwh?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-20 13:00:00",
            // "last_date" => "2023-09-21 18:00:00",
            // "created_at" => "2023-09-20 13:00:00",
            // "updated_at" => "2023-09-20 13:00:00"
            // ]
            // ,[
            // "description" => "Apoyo técnico para el Laboratorio de Cultivo In Vitro de Tejidos Vegetales del Centro Internacional de Investigación de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1IRmdJ9aZc2_y77nyfuECA8E_5X0L9K9U/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-20 13:00:00",
            // "last_date" => "2023-09-21 12:00:00",
            // "created_at" => "2023-09-20 13:00:00",
            // "updated_at" => "2023-09-20 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANTENIMIENTO DE LOS PANELES DE ENERGÍA SOLAR DELFUNDO DON LUIS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/drive/folders/1wo8Uww_GyFmsJggYqRXb7vRWveDoeEtm?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-20 15:00:00",
            // "last_date" => "2023-09-25 17:00:00",
            // "created_at" => "2023-09-20 15:00:00",
            // "updated_at" => "2023-09-20 15:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de oficina para el proyecto: Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023).”",
            // "url_pdf" => "https://drive.google.com/file/d/1zT74OHAaYB4jqJAxj27KLSmC_InWd5tO/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-20 13:30:00",
            // "last_date" => "2023-09-21 18:00:00",
            // "created_at" => "2023-09-20 13:30:00",
            // "updated_at" => "2023-09-20 13:30:00"
            // ]
            // ,[
            // "description" => "Servicio de “CURSO EN TEMAS DE TRIBUTOS LABORALES”, dirigido a los estudiantes y docentes de la Escuela Profesional de Contabilidad – UNDC, a efectos de ejecutar el POI – CEPLAN 2023 de la escuela programado y aprobado.",
            // "url_pdf" => "https://drive.google.com/file/d/1DHOx-mjMx-BrHMolVjZertV6_YLELgEv/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-20 15:00:00",
            // "last_date" => "2023-09-21 18:00:00",
            // "created_at" => "2023-09-20 15:00:00",
            // "updated_at" => "2023-09-20 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE AUDITORÍA DE MANTENIMIENTO, SEGUIMIENTO Y MEJORA CONTINUA DEL SISTEMA DE GESTIÓN DE CALIDAD ISO 9001:2015 Y 21001:2018, 14001:2015, 45001:2018 EN LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1NQrlU3-Wj3ZM19h33pHwYWYJdx3X0NdF/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-20 16:00:00",
            // "last_date" => "2023-09-25 11:00:00",
            // "created_at" => "2023-09-20 16:00:00",
            // "updated_at" => "2023-09-20 16:00:00"
            // ]
            // ,[
            // "description" => "REQUERIMIENTO DE GANCHOS, BOLSAS Y PERCHEROS PARA VESTUARIOS - V2",
            // "url_pdf" => "https://drive.google.com/file/d/1prS9-iNZlr8mMZM2MbZjYYIVS2n2agIw/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-20 16:00:00",
            // "last_date" => "2023-09-21 17:00:00",
            // "created_at" => "2023-09-20 16:00:00",
            // "updated_at" => "2023-09-20 16:00:00"
            // ]
            // ,[
            // "description" => "REQUERIMIENTO DE UTILES Y DESCARTABLES - VERSION2",
            // "url_pdf" => "https://drive.google.com/file/d/1R_dkJtD1pnJq8yDzsd2utgc_zcKI6uKK/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-20 17:00:00",
            // "last_date" => "2023-09-21 17:00:00",
            // "created_at" => "2023-09-20 17:00:00",
            // "updated_at" => "2023-09-20 17:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO DE CAPACITACIÓN EN PROYECTOS DE TRANSFORMACION DIGITAL UN ENFOQUE PRÁCTICO",
            // "url_pdf" => "https://drive.google.com/file/d/1nLqW9QJN7vgTuLgWG4GiaeREFBbtqHkq/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 08:30:00",
            // "last_date" => "2023-09-22 10:00:00",
            // "created_at" => "2023-09-21 08:30:00",
            // "updated_at" => "2023-09-21 08:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE MERCHANDISING PARA PROMOVER LA SEGURIDAD Y SALUD EN EL TRABAJO A LA COMUNIDAD UNIVERSITARIA DE LA UNDC - VERSION 2",
            // "url_pdf" => "https://drive.google.com/file/d/1IeyCWCuMEl4--vMvokRSVNgW63PLWrgf/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 09:30:00",
            // "last_date" => "2023-09-22 10:00:00",
            // "created_at" => "2023-09-21 09:30:00",
            // "updated_at" => "2023-09-21 09:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de CAPACITACIÓN denominado Gestión Manejo y Tratamiento de los Residuos Sólidos del Sector Agrario para los Docentes del Departamento Académico de Agronomía como parte del Plan de Capacitación 2023 dirigido a docentes.",
            // "url_pdf" => "https://drive.google.com/file/d/1wh9mG3R-LLIJh2DxotBVG6HfXybY-yB7/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 09:30:00",
            // "last_date" => "2023-09-22 12:30:00",
            // "created_at" => "2023-09-21 09:30:00",
            // "updated_at" => "2023-09-21 09:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de Inspección Técnica Vehicular para las unidades de transporte de placa EGO – 737, EGO – 950, EGO-731, EGO – 951, EGJ-132 y EGI-244 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1afhcIkAdeNIhWgyHCRyTjiMPVxYXeaHS/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 10:00:00",
            // "last_date" => "2023-09-22 15:30:00",
            // "created_at" => "2023-09-21 10:00:00",
            // "updated_at" => "2023-09-21 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de renovación de Seguro Obligatorio de Accidentes de Tránsito – SOAT para las unidades de transporte de placas EGO – 950, EGO – 951 y EGI-244 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1dstMQEwoBz6l4xOKNm7Qm-PDLhXjasiN/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 10:10:00",
            // "last_date" => "2023-09-28 12:00:00",
            // "created_at" => "2023-09-21 10:10:00",
            // "updated_at" => "2023-09-21 10:10:00"
            // ]
            // ,[
            // "description" => "REQUERIMIENTO CAMISETAS DE IDENTIFICACIÓN",
            // "url_pdf" => "https://drive.google.com/file/d/1SkFTf72mUN-avtCZVODNpIFAMjC7Brx_/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 10:00:00",
            // "last_date" => "2023-09-22 17:00:00",
            // "created_at" => "2023-09-21 10:00:00",
            // "updated_at" => "2023-09-21 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ALIMENTACIÓN DE PERSONAS PARA LOS PARTICIPANTES DE LA CAPACITACIÓN “CURSO DE CONTRATACIONES DEL ESTADO (CMN, TDR, EETT y SIGA)”",
            // "url_pdf" => "https://drive.google.com/file/d/1AXe0UUNkcfqRjVJZY0hk6k25UT3d7Otk/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 10:00:00",
            // "last_date" => "2023-09-22 11:00:00",
            // "created_at" => "2023-09-21 10:00:00",
            // "updated_at" => "2023-09-21 10:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO “CURSO DE CONTRATACIONES DEL ESTADO (CMN, TDR, EETT Y SIGA)” PARA EL PERSONAL ADMINISTRATIVO DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1SqLFwfvUItquZoqVaXgNcbVVHSL2-In9/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 10:00:00",
            // "last_date" => "2023-09-22 10:00:00",
            // "created_at" => "2023-09-21 10:00:00",
            // "updated_at" => "2023-09-21 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de CAPACITACIÓN denominado Diseño y análisis estadístico de experimentos agrícolas para el Departamento Académico de Agronomía como parte del Plan de Capacitación 2023 dirigido a docentes.",
            // "url_pdf" => "https://drive.google.com/file/d/1UxFcyVUux2q-WluHB9MWIQG2-AWQaq2i/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 10:30:00",
            // "last_date" => "2023-09-23 12:30:00",
            // "created_at" => "2023-09-21 10:30:00",
            // "updated_at" => "2023-09-21 10:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de renovación de Póliza de Seguro Vehicular para las unidades de transporte de placa EGO-731, EGJ-132 y EGI-244 de propiedad de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1p6DsMgi-R7T-_RFOoQwGU1EFvzXSmx0c/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 10:40:00",
            // "last_date" => "2023-09-23 12:00:00",
            // "created_at" => "2023-09-21 10:40:00",
            // "updated_at" => "2023-09-21 10:40:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de CAPACITACIÓN del Curso Taller “DISEÑO DE PRESAS HIDRAULICAS” para el Departamento Académico de Agronomía como parte del Plan de Capacitación 2023 dirigido a docentes",
            // "url_pdf" => "https://drive.google.com/file/d/16lFzril0jIR0w96HhUQBsMwhS8qRJWgy/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 10:55:00",
            // "last_date" => "2023-09-22 18:00:00",
            // "created_at" => "2023-09-21 10:55:00",
            // "updated_at" => "2023-09-21 10:55:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE 03 ESCRITORIOS DE MELAMINA 03 CAJONES CON LLAVE, PARA LA UNIDAD DE ABASTECIMIENTO DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1Te9uTTguDdqtSIlvswcMihSYPvPZa-FZ/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 11:00:00",
            // "last_date" => "2023-09-22 11:00:00",
            // "created_at" => "2023-09-21 11:00:00",
            // "updated_at" => "2023-09-21 11:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de Agua de Mesa sin gas x 20 L para la Dirección de Responsabilidad Social Universitaria.”",
            // "url_pdf" => "https://drive.google.com/file/d/1INTu3zeF90Hm8LY5603E9Ed8z82Khdmv/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 11:00:00",
            // "last_date" => "2023-09-25 11:00:00",
            // "created_at" => "2023-09-21 11:00:00",
            // "updated_at" => "2023-09-21 11:00:00"
            // ]
            // ,[
            // "description" => "Servicio de suscripción anual de Sistemas PMB para la unidad de Biblioteca actualizado.",
            // "url_pdf" => "https://drive.google.com/file/d/1ZN_bHXWCajCayRxgeMaVCwDYsBI4bmCb/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 11:10:00",
            // "last_date" => "2023-09-22 18:30:00",
            // "created_at" => "2023-09-21 11:10:00",
            // "updated_at" => "2023-09-21 11:10:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MEDICAMENTOS PARA LA IMPLEMENTACIÓN DE BOTIQUINES EN LA SEDE ADMINISTRATIVA Y ACADÉMICA DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/drive/folders/1RIZWmvMGTiCvP2CALsWvTPRpPOVPc4RJ?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 11:30:00",
            // "last_date" => "2023-09-25 10:00:00",
            // "created_at" => "2023-09-21 11:30:00",
            // "updated_at" => "2023-09-21 11:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES DE OFICINA PARA LA DIRECCIÓN DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1rCPUCE7tjkzREzl_TosSdE8dICGTc_u5/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-21 12:30:00",
            // "last_date" => "2023-09-22 11:00:00",
            // "created_at" => "2023-09-21 12:30:00",
            // "updated_at" => "2023-09-21 12:30:00"
            // ]
            // ,[
            // "description" => "ESCRITORIO MELAMINA 1 CAJON 1 PUERTA CON LLAVE",
            // "url_pdf" => "https://drive.google.com/file/d/1b9oMniMw26koi8T1Eusb-80OVbgus2pP/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-22 12:30:00",
            // "last_date" => "2023-09-25 08:00:00",
            // "created_at" => "2023-09-22 12:30:00",
            // "updated_at" => "2023-09-22 12:30:00"
            // ]
            // ,[
            // "description" => "Contratación de servicio de Impresión y empastado de manuales para el proyecto de investigación: “Efecto del programa de emprendimiento Millennial 2,0 sobre el nivel de la capacidad de innovación tecnológica de los alumnos de la Universidad Nacional de Cañete, 2019”.",
            // "url_pdf" => "https://drive.google.com/file/d/1Ds4_N2jIz1BpwGLZ-nzsZWgz0-7sB8jW/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-22 12:30:00",
            // "last_date" => "2023-09-25 12:00:00",
            // "created_at" => "2023-09-22 12:30:00",
            // "updated_at" => "2023-09-22 12:30:00"
            // ]
            // ,[
            // "description" => "SUSCRIPCIÓN ANUAL EN LÍNEA DE BIBLIOTECA VIRTUAL PARA LA UNIDAD DE BIBLIOTECA CENTRAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE – LIBROS DIGITALES DE DIFERENTES ÁREAS Y TEMAS",
            // "url_pdf" => "https://drive.google.com/drive/folders/1gdPuLErsLbE94LD3Ly4YQspFwpNkcBNl?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 09:02:00",
            // "last_date" => "2023-09-26 12:30:00",
            // "created_at" => "2023-09-25 09:02:00",
            // "updated_at" => "2023-09-25 09:02:00"
            // ]
            // ,[
            // "description" => "SUSCRIPCIÓN ANUAL EN LÍNEA DE BIBLIOTECA VIRTUAL PARA LA UNIDAD DE BIBLIOTECA CENTRAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE – LIBROS EBOOK, ARTICULOS CIENTIFICOS, REVISTAS, TESIS EN LAS DIFERENTES AREA Y TEMAS",
            // "url_pdf" => "https://drive.google.com/drive/folders/1QEa4qWPy48B1YoUBRVS_SQNMe63AU8o9?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 09:09:00",
            // "last_date" => "2023-09-26 12:30:00",
            // "created_at" => "2023-09-25 09:09:00",
            // "updated_at" => "2023-09-25 09:09:00"
            // ]
            // ,[
            // "description" => "SUSCRIPCIÓN ANUAL EN LÍNEA DE BIBLIOTECA VIRTUAL PARA LA UNIDAD DE BIBLIOTECA CENTRAL DE LA UNIVERSIDAD NACIONAL DE CAÑETE – LIBROS EBOOK, ARTICULOS CIENTIFICOS, JORNALS REVISTAS CIENTIFICAS Y ACADEMICAS, EN LAS DIFERENTES AREA Y TEMAS.",
            // "url_pdf" => "https://drive.google.com/drive/folders/1eewbAbqUaBD_PWhfOeqamlDe2utNqmYz?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 09:12:00",
            // "last_date" => "2023-09-26 13:00:00",
            // "created_at" => "2023-09-25 09:12:00",
            // "updated_at" => "2023-09-25 09:12:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ENSEÑANZA DE AJEDREZ",
            // "url_pdf" => "https://drive.google.com/file/d/1MqtD62jX2vyu76Gy_cxdBjI2HTjPySNI/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 12:30:00",
            // "last_date" => "2023-09-26 10:00:00",
            // "created_at" => "2023-09-25 12:30:00",
            // "updated_at" => "2023-09-25 12:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO PROFESIONAL DE LICENCIADA EN ENFERMERIA",
            // "url_pdf" => "https://drive.google.com/file/d/1u-p2cpexO0AWwv-UslpPVZKv2rW_fkgC/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 14:00:00",
            // "last_date" => "2023-09-26 10:00:00",
            // "created_at" => "2023-09-25 14:00:00",
            // "updated_at" => "2023-09-25 14:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo de muestreo foliar – Personal 2, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”.",
            // "url_pdf" => "https://drive.google.com/file/d/1tN8UM-rOyyAnoV6_Nu23-8-doYWtXAne/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 14:00:00",
            // "last_date" => "2023-09-26 12:00:00",
            // "created_at" => "2023-09-25 14:00:00",
            // "updated_at" => "2023-09-25 14:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ALIMENTACION DE CONSUMO HUMANO PARA EL TALLER DE TESIS DE LA FACULTAD DE INGENIERIA",
            // "url_pdf" => "https://drive.google.com/file/d/1E8yHpm0UOlZHte_2DDSSzssN4GSmII0y/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 14:00:00",
            // "last_date" => "2023-09-27 13:00:00",
            // "created_at" => "2023-09-25 14:00:00",
            // "updated_at" => "2023-09-25 14:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACION PARA EL SERVICIO DE ALIMENTACION DE CONSUMO HUMANO PARA EL TALLER DE TESIS DE LA FACULTAD DE INGENIERIA",
            // "url_pdf" => "https://drive.google.com/file/d/1B5jK9Va1hngvC9VQzRQH_LVtOn6rZsnk/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 14:00:00",
            // "last_date" => "2023-09-26 17:00:00",
            // "created_at" => "2023-09-25 14:00:00",
            // "updated_at" => "2023-09-25 14:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de energía para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1khEak18n9V1FzgjT9ZSuMirAWwIbKqWo/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 15:00:00",
            // "last_date" => "2023-09-26 13:00:00",
            // "created_at" => "2023-09-25 15:00:00",
            // "updated_at" => "2023-09-25 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO “CURSO DE CONTRATACIONES DEL ESTADO (CMN, TDR, EETT Y SIGA)” PARA EL PERSONAL ADMINISTRATIVO DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1gk1VeYV8NBGUodHJqeUaC8s_7TJjGNRG/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 15:00:00",
            // "last_date" => "2023-09-26 08:00:00",
            // "created_at" => "2023-09-25 15:00:00",
            // "updated_at" => "2023-09-25 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE PROCESAMIENTO, ORDENAMIENTO Y CLASIFICACION DE DOCUMENTOS ADMINISTRATIVOS DE LA UNIDAD DE TESORERIA.",
            // "url_pdf" => "https://drive.google.com/file/d/1q9Z7i7EP8n1enPHBax2HkAqRSRVJ7oPe/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 18:00:00",
            // "last_date" => "2023-09-26 13:00:00",
            // "created_at" => "2023-09-25 18:00:00",
            // "updated_at" => "2023-09-25 18:00:00"
            // ]
            // ,[
            // "description" => "Servicio Especializado en Gestión de Tesorería",
            // "url_pdf" => "https://drive.google.com/file/d/1NfZOGyGVmxxzy4CTJHkVUvoSkC3is-Ut/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 18:00:00",
            // "last_date" => "2023-09-26 13:00:00",
            // "created_at" => "2023-09-25 18:00:00",
            // "updated_at" => "2023-09-25 18:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 18 diplomas con caligrafiado para los graduados de la Universidad Nacional De Cañete dividido en (17 diplomas para Bachiller y 01 diploma de Título profesional)",
            // "url_pdf" => "https://drive.google.com/file/d/186QYTG1A2En-rZuSkKRgw8X5nCSvcJHs/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 18:00:00",
            // "last_date" => "2023-09-26 18:00:00",
            // "created_at" => "2023-09-25 18:00:00",
            // "updated_at" => "2023-09-25 18:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 52 Porta Diplomas de Bachiller para los graduados que obtengan el Grado Académico de Bachiller en la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1-kqKt-LXMBp4rmAete5LpCFIlkUnscTO/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 18:00:00",
            // "last_date" => "2023-09-26 18:00:00",
            // "created_at" => "2023-09-25 18:00:00",
            // "updated_at" => "2023-09-25 18:00:00"
            // ]
            // ,[
            // "description" => "“ESPECIALISTA EN SEGUIMIENTO PRESUPUESTAL”",
            // "url_pdf" => "https://drive.google.com/file/d/1I7ln-EPPU4q2aiS-pBxSoLY8LIt8xRJQ/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 18:00:00",
            // "last_date" => "2023-09-27 18:00:00",
            // "created_at" => "2023-09-25 18:00:00",
            // "updated_at" => "2023-09-25 18:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de 61 Medallas con estuche para los Bachilleres de la UNDC, para la entrega del Grado Académico de Bachiller de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1HjLdJX7tKjcYtB0yK4lYW8TcBI2jeK5r/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 18:00:00",
            // "last_date" => "2023-09-26 18:00:00",
            // "created_at" => "2023-09-25 18:00:00",
            // "updated_at" => "2023-09-25 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de apoyo Informático de las plataformas de investigación en la Dirección de la Unidad de Investigación de la Facultad de Agronomía y la Dirección de la Unidad de Investigación de la Facultad de Ingeniería.",
            // "url_pdf" => "https://drive.google.com/file/d/1U1DTzzfVrQf6jYicpLpzclk_p6AOZB1f/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 18:00:00",
            // "last_date" => "2023-09-26 18:00:00",
            // "created_at" => "2023-09-25 18:00:00",
            // "updated_at" => "2023-09-25 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Apoyo Informático de las plataformas de investigación en la Vicepresidencia de Investigación.",
            // "url_pdf" => "https://drive.google.com/file/d/1PmEI6BBH7K2n8T50csuPP1P-6VH7ng3a/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 18:00:00",
            // "last_date" => "2023-09-26 18:00:00",
            // "created_at" => "2023-09-25 18:00:00",
            // "updated_at" => "2023-09-25 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Apoyo Informático de las plataformas de investigación en la Dirección de la Unidad de Investigación de la Facultad de Ciencias Empresariales.",
            // "url_pdf" => "https://drive.google.com/file/d/1iB8piwaT5Hx9C2WJL8PAo1imz8z2kTAY/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 18:00:00",
            // "last_date" => "2023-09-26 18:00:00",
            // "created_at" => "2023-09-25 18:00:00",
            // "updated_at" => "2023-09-25 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de CAPACITACIÓN denominado Manejo de los Bioabonos para el Departamento Académico de Agronomía como parte del Plan de Capacitación 2023 dirigido a docentes.",
            // "url_pdf" => "https://drive.google.com/file/d/1jnF4feHUN5Om8deYTRIZV-kSdA2yW2_D/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-25 18:00:00",
            // "last_date" => "2023-09-26 18:00:00",
            // "created_at" => "2023-09-25 18:00:00",
            // "updated_at" => "2023-09-25 18:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE UTILES DE ESCRITORIO",
            // "url_pdf" => "https://drive.google.com/file/d/1g_94DeDudghKJWAgPLDCnZFhGVhT_Ifj/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-26 12:07:00",
            // "last_date" => "2023-09-27 17:00:00",
            // "created_at" => "2023-09-26 12:07:00",
            // "updated_at" => "2023-09-26 12:07:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE COORDINACION MONITOREO Y ASISTENCIA TÉCNICA ADMINISTRATIVA PARA EL DEPARTAMENTO ACADEMICO DE ESTUDIOS GENERALES",
            // "url_pdf" => "https://drive.google.com/file/d/1-hqxpt_8YhbjAKF7zxvIShoz9JB3FKAV/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-26 12:00:00",
            // "last_date" => "2023-09-26 17:00:00",
            // "created_at" => "2023-09-26 12:00:00",
            // "updated_at" => "2023-09-26 12:00:00"
            // ]
            // ,[
            // "description" => "Adquisición De 03 Bidones de Agua De Mesa Sin Gas X 20 L",
            // "url_pdf" => "https://drive.google.com/file/d/1hppQ3F7Er0lgbmUyF5sz46diwf1oKH8n/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-26 12:22:00",
            // "last_date" => "2023-09-27 17:00:00",
            // "created_at" => "2023-09-26 12:22:00",
            // "updated_at" => "2023-09-26 12:22:00"
            // ]
            // ,[
            // "description" => "SERVICIO EN LINEA DE SOFTWARE O PLATAFORMAS DE TEMAS CONTABLES PARA LA ESCUELA PROFESIONAL DE CONTABILIDAD DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1GCSHidFisXO2L9bXO8CT3XkKPXGhssY_/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-27 09:00:00",
            // "last_date" => "2023-09-28 18:00:00",
            // "created_at" => "2023-09-27 09:00:00",
            // "updated_at" => "2023-09-27 09:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE ASISTENCIA TÉCNICA EN MONITOREO Y SEGUIMIENTO EN GESTIÓN ADMINISTRATIVA PARA LA ESCUELA PROFESIONAL DE ADMINISTRACION DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1MfZOCuiHkqxLFW_b797adgJBqxQrmkAP/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-27 10:30:00",
            // "last_date" => "2023-09-27 18:00:00",
            // "created_at" => "2023-09-27 10:30:00",
            // "updated_at" => "2023-09-27 10:30:00"
            // ]
            // ,[
            // "description" => "Servicio de “CURSO DE CAPACITACION EN ETICA DE LA FUNCION PUBLICA”, dirigido a los docentes del Departamento Académico de Contabilidad – UNDC, a efectos de ejecutar el POI – CEPLAN 2023 de la escuela programado y aprobado.",
            // "url_pdf" => "https://drive.google.com/file/d/1WNLvugSlRuBps8JCRIqdZziLOLLTFOcs/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-27 18:00:00",
            // "last_date" => "2023-09-28 15:00:00",
            // "created_at" => "2023-09-27 18:00:00",
            // "updated_at" => "2023-09-27 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de un profesional para la ejecución del Plan de Mantenimiento de la Universidad Nacional de Cañete 2023.",
            // "url_pdf" => "https://drive.google.com/file/d/15NIhAbV8d7s_p5a9g5Zvh0Nn82_vFQl2/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-09-27 18:00:00",
            // "last_date" => "2023-09-28 13:00:00",
            // "created_at" => "2023-09-27 18:00:00",
            // "updated_at" => "2023-09-27 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de CAPACITACIÓN denominado Nutrición Vegetal para la Escuela Profesional de Agronomía como parte del Plan de Capacitación 2023 dirigido a estudiantes.",
            // "url_pdf" => "https://drive.google.com/file/d/1Tup-UfGiuUrE2TlvVlHruLlefgE0imiC/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-09-27 18:00:00",
            // "last_date" => "2023-09-28 15:00:00",
            // "created_at" => "2023-09-27 18:00:00",
            // "updated_at" => "2023-09-27 18:00:00"
            // ]
            // ,[
            // "description" => "Servicio de Seguimiento, Evaluación y Actualización de Proyectos de TI Del Banco de Inversiones de la Unidad Ejecutora de Inversiones.",
            // "url_pdf" => "https://drive.google.com/file/d/1A6RPkRvl6IU37Op42ykWgLONoNI_Q_VX/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-28 08:30:00",
            // "last_date" => "2023-09-28 14:00:00",
            // "created_at" => "2023-09-28 08:30:00",
            // "updated_at" => "2023-09-28 08:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de MOBILIARIO para el DEPARTAMENTO ACADEMICO DE INGENIERIA DE SISTEMAS de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1cU0dwGyLo6aMWE_wpE_HUvms8UDQS0hV/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-28 10:30:00",
            // "last_date" => "2023-09-29 17:00:00",
            // "created_at" => "2023-09-28 10:30:00",
            // "updated_at" => "2023-09-28 10:30:00"
            // ]
            // ,[
            // "description" => "Adquisición de guantes de poliéster para la Dirección de Responsabilidad Social Universitaria.",
            // "url_pdf" => "https://drive.google.com/file/d/18rdiL_QI8lOyDwKqLVcOfq7OFx08fv5u/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-28 12:00:00",
            // "last_date" => "2023-09-29 18:00:00",
            // "created_at" => "2023-09-28 12:00:00",
            // "updated_at" => "2023-09-28 12:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y COORDINACIÓN DE EXPEDIENTES DE CONTRATACIONES",
            // "url_pdf" => "https://drive.google.com/file/d/1EQhp2At5W3C1W-ZyGMhn3tL57aejP-D7/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-28 12:30:00",
            // "last_date" => "2023-09-29 10:00:00",
            // "created_at" => "2023-09-28 12:30:00",
            // "updated_at" => "2023-09-28 12:30:00"
            // ]
            // ,[
            // "description" => "Servicio de volanteo para el Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1nHsM-64CP8zE0o0NRaKOEMEmVBLIJHC1/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-28 12:30:00",
            // "last_date" => "2023-09-29 17:00:00",
            // "created_at" => "2023-09-28 12:30:00",
            // "updated_at" => "2023-09-28 12:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de asesoramiento técnico en ejecución de actividades de campo para la preparación de 02 hectáreas de terreno agrícola en la siembra de semillas de hortalizas, cereales y leguminosas en el campo experimental de la Escuela Profesional de Agronomía de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1dtjQWx4TJZ2jqhEa3_YUe9Q7XR5SAqhv/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-28 12:30:00",
            // "last_date" => "2023-09-28 18:00:00",
            // "created_at" => "2023-09-28 12:30:00",
            // "updated_at" => "2023-09-28 12:30:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE CAPACITACION EL FUTURO YA ESTÁ AQUÍ (INTELIGENCIA ARTIFICIAL Y SU UTILIDAD EN LA INVESTIGACIÓN CIENTÍFICA) PARA LOS DOCENTES DEL DEPARTAMENTO ACADEMICO DE ADMINISTRACIÓN.",
            // "url_pdf" => "https://drive.google.com/file/d/1CBGFM9pyjXIUw_WMwT0fL5zk320bGVva/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-28 12:30:00",
            // "last_date" => "2023-10-02 18:00:00",
            // "created_at" => "2023-09-28 12:30:00",
            // "updated_at" => "2023-09-28 12:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE CAJAS ARCHIVADORAS PARA LA ESCUELA PROFESIONAL DE CONTABILIDAD DE LA UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1MT07CSfqDYRRP_Nify4m2QIv46oiW2tl/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-28 12:30:00",
            // "last_date" => "2023-10-02 18:00:00",
            // "created_at" => "2023-09-28 12:30:00",
            // "updated_at" => "2023-09-28 12:30:00"
            // ]
            // ,[
            // "description" => "Servicio de volanteo para el Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1Sfj4FemEQiJT_zamBgJpUx4ZD4ifD8F7/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-28 12:30:00",
            // "last_date" => "2023-10-02 18:00:00",
            // "created_at" => "2023-09-28 12:30:00",
            // "updated_at" => "2023-09-28 12:30:00"
            // ]
            // ,[
            // "description" => "Servicio de publicidad en panel para el Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/11OyO8ffS5sSZPAnI8bSIEVNeZHuvI6lS/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-28 12:30:00",
            // "last_date" => "2023-10-02 18:00:00",
            // "created_at" => "2023-09-28 12:30:00",
            // "updated_at" => "2023-09-28 12:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Elaboración de Spot publicitario para radio y televisión para el Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1lRPDmhEQLT3JGcO-EG1Xr_6LOyIP3_nS/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-28 12:30:00",
            // "last_date" => "2023-09-29 13:00:00",
            // "created_at" => "2023-09-28 12:30:00",
            // "updated_at" => "2023-09-28 12:30:00"
            // ]
            // ,[
            // "description" => "“ESPECIALISTA EN SEGUIMIENTO PRESUPUESTAL”",
            // "url_pdf" => " https://drive.google.com/file/d/1Uh_8rMjPyDgVb0efbfYxP4vPhIZRyY2H/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-28 17:30:00",
            // "last_date" => "2023-09-29 12:00:00",
            // "created_at" => "2023-09-28 17:30:00",
            // "updated_at" => "2023-09-28 17:30:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE ASISTENCIA TÉCNICA EN MONITOREO Y SEGUIMIENTO EN GESTIÓN ADMINISTRATIVA PARA LA ESCUELA PROFESIONAL DE ADMINISTRACION DE TURISMO Y HOTELERÍA DE LA UNDC",
            // "url_pdf" => " https://drive.google.com/file/d/1ix9wIE6AzwK0mVBz8pzWQCRFCo7dJ3nf/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-29 12:00:00",
            // "last_date" => "2023-10-02 12:00:00",
            // "created_at" => "2023-09-29 12:00:00",
            // "updated_at" => "2023-09-29 12:00:00"
            // ]
            // ,[
            // "description" => "“ESPECIALISTA EN SEGUIMIENTO PRESUPUESTAL”",
            // "url_pdf" => " https://drive.google.com/file/d/1Uh_8rMjPyDgVb0efbfYxP4vPhIZRyY2H/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-09-28 17:30:00",
            // "last_date" => "2023-09-29 12:00:00",
            // "created_at" => "2023-09-28 17:30:00",
            // "updated_at" => "2023-09-28 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de campo de muestreo foliar – Personal 1, para el proyecto de investigación: “Desarrollo de software para el diagnóstico del estado nutricional del cultivo de camote”.",
            // "url_pdf" => "https://drive.google.com/file/d/1MBRYj6H3b8HWlkBSYwF85FafwQns0Auc/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-09-29 13:00:00",
            // "last_date" => "2023-10-03 13:00:00",
            // "created_at" => "2023-09-29 13:00:00",
            // "updated_at" => "2023-09-29 13:00:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación radial para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1q9jwNBXw3na_-zhkD9OgMlEUtABKGB2P/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-02 17:30:00",
            // "last_date" => "2023-10-03 18:00:00",
            // "created_at" => "2023-10-02 17:30:00",
            // "updated_at" => "2023-10-02 17:30:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación radial para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1q9jwNBXw3na_-zhkD9OgMlEUtABKGB2P/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-02 17:30:00",
            // "last_date" => "2023-10-03 18:00:00",
            // "created_at" => "2023-10-02 17:30:00",
            // "updated_at" => "2023-10-02 17:30:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación radial para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/18F1sC3uWkjAOsvAU2-fv0AvRXNKJFzdc/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-02 17:30:00",
            // "last_date" => "2023-10-03 18:00:00",
            // "created_at" => "2023-10-02 17:30:00",
            // "updated_at" => "2023-10-02 17:30:00"
            // ]
            // ,[
            // "description" => "Servicio de comunicación radial para difusión del Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1InQMBI_RvpRmdQZn20_OQK56whg8qd5j/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-02 17:30:00",
            // "last_date" => "2023-10-03 18:00:00",
            // "created_at" => "2023-10-02 17:30:00",
            // "updated_at" => "2023-10-02 17:30:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de Gestión y seguimiento de actividades administrativas de las direcciones de la Vicepresidencia de Investigación.",
            // "url_pdf" => "https://drive.google.com/file/d/1G0_8fdY6aPkIJEDRzo1aI0rDxIHbcXjR/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-03 09:00:00",
            // "last_date" => "2023-10-03 13:00:00",
            // "created_at" => "2023-10-03 09:00:00",
            // "updated_at" => "2023-10-03 09:00:00"
            // ]
            // ,[
            // "description" => "Apoyo técnico para el Laboratorio de Cultivo In Vitro de Tejidos Vegetales del Centro Internacional de Investigación de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/16ZoD3SeI1LdgpPvUZH5PwW86Ll0gkVEK/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-03 09:00:00",
            // "last_date" => "2023-10-04 12:00:00",
            // "created_at" => "2023-10-03 09:00:00",
            // "updated_at" => "2023-10-03 09:00:00"
            // ]
            // ,[
            // "description" => "Servicio especializado de enseñanza de voley para la formación de la selección de voley femenino y masculino de la Universidad Nacional de Cañete en el Semestre 2023-II.",
            // "url_pdf" => "https://drive.google.com/file/d/1bS3foTdo8cMzaLtvMz7KTh4X4aLu2s7_/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-03 09:00:00",
            // "last_date" => "2023-10-03 18:00:00",
            // "created_at" => "2023-10-03 09:00:00",
            // "updated_at" => "2023-10-03 09:00:00"
            // ]
            // ,[
            // "description" => "“IV CONGRESO INTERNACIONAL: ADMINISTRACIÓN, EMPRENDIMIENTO E INVESTIGACIÓN” DE LA ESCUELA PROFESIONAL DE ADMINISTRACION.",
            // "url_pdf" => "https://drive.google.com/file/d/1cdC6ruHuNy-3yGFTQe-ZiPXUIxfJvWgR/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-03 10:00:00",
            // "last_date" => "2023-10-04 11:00:00",
            // "created_at" => "2023-10-03 10:00:00",
            // "updated_at" => "2023-10-03 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación del Servicio de impresión de volantes para el Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1-sE-_JOLak3XIKmNA5u8IRPZuSBXnCQe/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-03 10:00:00",
            // "last_date" => "2023-10-03 18:00:00",
            // "created_at" => "2023-10-03 10:00:00",
            // "updated_at" => "2023-10-03 10:00:00"
            // ]
            // ,[
            // "description" => "Servicio de publicidad en panel para el Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/13A5iKdFHclvVASiXbBiAyZprfu7iFHHL/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-10-03 10:00:00",
            // "last_date" => "2023-10-03 17:00:00",
            // "created_at" => "2023-10-03 10:00:00",
            // "updated_at" => "2023-10-03 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE BOTIQUINES DE MADERA PARA LA SEDE ADMINISTRATIVA Y ACADÉMICA DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1oRGj96rQri3mqtGZCfchGZ6M3gUQUqPu/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-03 12:00:00",
            // "last_date" => "2023-10-04 12:00:00",
            // "created_at" => "2023-10-03 12:00:00",
            // "updated_at" => "2023-10-03 12:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de letreros informativos para la Dirección de Responsabilidad Social Universitaria.",
            // "url_pdf" => "https://drive.google.com/file/d/1HNeA2veeeuK3wfHWqLuU4doaGk16vzRg/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-03 16:30:00",
            // "last_date" => "2023-10-04 17:00:00",
            // "created_at" => "2023-10-03 16:30:00",
            // "updated_at" => "2023-10-03 16:30:00"
            // ]
            // ,[
            // "description" => "MANTENIMIENTO Y PINTADO DEL FRONTIS DE LOS ACCESOS DEL LOCAL FUNDO DON LUIS DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1o_lciM_uHxoE17nq9eHTerNBfWB0zhDs/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-03 17:00:00",
            // "last_date" => "2023-10-05 15:00:00",
            // "created_at" => "2023-10-03 17:00:00",
            // "updated_at" => "2023-10-03 17:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de materiales para el desarrollo de actividades de investigación del Laboratorio de Control Microbiológico de Plagas Agrícolas del Centro Internacional de Investigación para la Sustentabilidad (CIIS) de la Universidad Nacional de Cañete – Sede Lunahuaná como parte del desarrollo de proyectos investigativos transversales.",
            // "url_pdf" => "https://drive.google.com/file/d/1PwL6Vn5Bapssg7OusMNt2SYfS72nGucD/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-03 17:00:00",
            // "last_date" => "2023-10-05 12:00:00",
            // "created_at" => "2023-10-03 17:00:00",
            // "updated_at" => "2023-10-03 17:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de materiales de limpieza para el personal de mantenimiento de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/19LjEoqUhqdZv2rjVfDV52UsHZr1Qwm0Y/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 09:00:00",
            // "last_date" => "2023-10-05 17:00:00",
            // "created_at" => "2023-10-04 09:00:00",
            // "updated_at" => "2023-10-04 09:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE ALIMENTACION DE CONSUMO HUMANO PARA LA ESCUELA DE CONTABILIDAD",
            // "url_pdf" => "https://drive.google.com/file/d/1pzhChllAtP8SrmA-U_v5PeyPTl9tIje3/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 11:00:00",
            // "last_date" => "2023-10-04 14:00:00",
            // "created_at" => "2023-10-04 11:00:00",
            // "updated_at" => "2023-10-04 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de tóner de impresión para el Centro Pre Universitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/11ouIyW4o9vqh79Eml0UikiQ7J4gkeiih/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 11:00:00",
            // "last_date" => "2023-10-05 17:00:00",
            // "created_at" => "2023-10-04 11:00:00",
            // "updated_at" => "2023-10-04 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de tintas de impresión para el Departamento Académico de Estudios Generales.",
            // "url_pdf" => "https://drive.google.com/file/d/1XrzPUGYwaKq3AcJFFI_GoAK9tWU_EzEV/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 11:00:00",
            // "last_date" => "2023-10-05 17:00:00",
            // "created_at" => "2023-10-04 11:00:00",
            // "updated_at" => "2023-10-04 11:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de Útiles de escritorio para el Departamento Académico de Estudios Generales.",
            // "url_pdf" => "https://drive.google.com/file/d/1yzr-1GoKVP4k38FmCFXCKDJZAG9afIB4/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 11:00:00",
            // "last_date" => "2023-10-05 17:00:00",
            // "created_at" => "2023-10-04 11:00:00",
            // "updated_at" => "2023-10-04 11:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE UTILES DE ESCRITORIO ",
            // "url_pdf" => "https://drive.google.com/file/d/1lfTSb8uSgAETS3GLZ2k6VABa9oZNXvBA/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 11:30:00",
            // "last_date" => "2023-10-05 17:00:00",
            // "created_at" => "2023-10-04 11:30:00",
            // "updated_at" => "2023-10-04 11:30:00"
            // ]
            // ,[
            // "description" => "Servicio de una capacitación en ARQUITECTURA EMPRESARIAL. CASO: EMPRESA COURIER”, en la modalidad presencial, dirigido a los estudiantes y docentes de la Escuela Profesional de Ingeniería de Sistemas – UNDC, a efectos de ejecutar el V CONGRESO INTERNACIONAL DE INGENIERIA DE SISTEMAS E INVESTIGACION CIENTIFICA”",
            // "url_pdf" => "https://drive.google.com/file/d/10egvI4y5DCQJ3L2E275uMty6IFBIm0gy/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 12:00:00",
            // "last_date" => "2023-10-04 17:00:00",
            // "created_at" => "2023-10-04 12:00:00",
            // "updated_at" => "2023-10-04 12:00:00"
            // ]
            // ,[
            // "description" => "Servicio de una capacitación en “INDUSTRIA 4.0 Y LOS RETOS DE LA IoT” en la modalidad presencial, dirigido a los estudiantes y docentes de la Escuela Profesional de Ingeniería de Sistemas – UNDC, a efectos de ejecutar el V CONGRESO INTERNACIONAL DE INGENIERIA DE SISTEMAS E INVESTIGACION CIENTIFICA”",
            // "url_pdf" => "https://drive.google.com/file/d/1tCvMI3MYe5R018-BGCXAZBuaVTJapE3u/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 12:30:00",
            // "last_date" => "2023-10-05 17:00:00",
            // "created_at" => "2023-10-04 12:30:00",
            // "updated_at" => "2023-10-04 12:30:00"
            // ]
            // ,[
            // "description" => "Servicio de una capacitación en “TECNOLOGIAS DISRUPTIVAS Y SU INFLUENCIA EN EL PROCESO DE SELECCIÓN DE PERSONAL” en la modalidad presencial, dirigido a los estudiantes y docentes de la Escuela Profesional de Ingeniería de Sistemas – UNDC, a efectos de ejecutar el V CONGRESO INTERNACIONAL DE INGENIERIA DE SISTEMAS E INVESTIGACION CIENTIFICA”",
            // "url_pdf" => "https://drive.google.com/file/d/1PRN8usTEMj89o7CEDJ5sOcdgRzZzJAHs/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 12:30:00",
            // "last_date" => "2023-10-05 17:00:00",
            // "created_at" => "2023-10-04 12:30:00",
            // "updated_at" => "2023-10-04 12:30:00"
            // ]
            // ,[
            // "description" => "Servicio de una capacitación en “BASES DE DATOS BIBLIOGRAFICOS COMO HERRAMIENTAS DE MEDICIÓN”, en la modalidad presencial, dirigido a los estudiantes y docentes de la Escuela Profesional de Ingeniería de Sistemas – UNDC, a efectos de ejecutar el V CONGRESO INTERNACIONAL DE INGENIERIA DE SISTEMAS E INVESTIGACION CIENTIFICA” el POI – CEPLAN 2023 de la escuela programado y aprobado.",
            // "url_pdf" => "https://drive.google.com/file/d/1txZ4Vymte4CM9-BTdjn6H_3PZMIEvM3P/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 15:00:00",
            // "last_date" => "2023-10-05 15:00:00",
            // "created_at" => "2023-10-04 15:00:00",
            // "updated_at" => "2023-10-04 15:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE COMUNICACIÓN TELEVISIVA PARA DIFUSIÓN DEL CENTRO PREUNIVERSITARIO DE LAUNIVERSIDAD NACIONAL DE CAÑETE 1 ",
            // "url_pdf" => "https://drive.google.com/file/d/1J4zkZspuLFipGXKj8cZsLu3RrznbX1nP/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 16:00:00",
            // "last_date" => "2023-10-05 10:00:00",
            // "created_at" => "2023-10-04 16:00:00",
            // "updated_at" => "2023-10-04 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE COMUNICACIÓN TELEVISIVA PARA DIFUSIÓN DEL CENTRO PREUNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE 2",
            // "url_pdf" => "https://drive.google.com/file/d/1AZ5k620v3OaoekXgGbHhM6FhKqn4Mcx_/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 14:00:00",
            // "last_date" => "2023-10-05 10:00:00",
            // "created_at" => "2023-10-04 14:00:00",
            // "updated_at" => "2023-10-04 14:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE COMUNICACIÓN TELEVISIVA PARA DIFUSIÓN DEL CENTRO PREUNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE 3",
            // "url_pdf" => "https://drive.google.com/file/d/1FLNAvDfPJCVycsSe7JzNF_JDpaJqYB-Y/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 16:00:00",
            // "last_date" => "2023-10-05 10:00:00",
            // "created_at" => "2023-10-04 16:00:00",
            // "updated_at" => "2023-10-04 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE COMUNICACIÓN TELEVISIVA PARA DIFUSIÓN DEL CENTRO PREUNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE 4 ",
            // "url_pdf" => "https://drive.google.com/file/d/16LkFzcDCJ-TNeA0iBSlN_470j3DOUHHA/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 16:00:00",
            // "last_date" => "2023-10-05 10:00:00",
            // "created_at" => "2023-10-04 16:00:00",
            // "updated_at" => "2023-10-04 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE COMUNICACIÓN TELEVISIVA PARA DIFUSIÓN DEL CENTRO PREUNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE 5",
            // "url_pdf" => "https://drive.google.com/file/d/1wSksdkP09QgodkQ4EWmyBjbzoe3e3Qa4/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 16:00:00",
            // "last_date" => "2023-10-05 10:00:00",
            // "created_at" => "2023-10-04 16:00:00",
            // "updated_at" => "2023-10-04 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE COMUNICACIÓN TELEVISIVA PARA DIFUSIÓN DEL CENTRO PREUNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE 6",
            // "url_pdf" => "https://drive.google.com/file/d/1Wt7FEOs-f1zmC906Han1YiqujNeUD5QT/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 16:00:00",
            // "last_date" => "2023-10-05 10:00:00",
            // "created_at" => "2023-10-04 16:00:00",
            // "updated_at" => "2023-10-04 16:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE COMUNICACIÓN TELEVISIVA PARA DIFUSIÓN DEL CENTRO PREUNIVERSITARIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE 7",
            // "url_pdf" => "https://drive.google.com/file/d/1knXWay_Z_QIsLGJdKaUtqn0yBcYasF3S/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 16:00:00",
            // "last_date" => "2023-10-05 10:00:00",
            // "created_at" => "2023-10-04 16:00:00",
            // "updated_at" => "2023-10-04 16:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de Material didáctico para el Departamento Académico de Estudios Generales",
            // "url_pdf" => "https://drive.google.com/file/d/1JcO6dgoTxpekCyUSET1EHsgKWFs6Rowr/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-04 17:00:00",
            // "last_date" => "2023-10-05 17:00:00",
            // "created_at" => "2023-10-04 17:00:00",
            // "updated_at" => "2023-10-04 17:00:00"
            // ]
            // ,[
            // "description" => "servicio de CAPACITACIÓN denominado Manejo y Uso Seguro de Plaguicidas para los Docentes del Departamento Académico de Agronomía como parte del Plan de Capacitación 2023 dirigido a docentes.",
            // "url_pdf" => "https://drive.google.com/file/d/1Ve45t_d85M0HgVWwtJ_A9A5lA3Qgxw2z/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 09:00:00",
            // "last_date" => "2023-10-05 17:00:00",
            // "created_at" => "2023-10-05 09:00:00",
            // "updated_at" => "2023-10-05 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición De 03 Bidones de Agua De Mesa Sin Gas X 20 L",
            // "url_pdf" => "https://drive.google.com/file/d/1C_iDzBiZKMCJruPKXJFrsggaEt0FvHFV/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 09:00:00",
            // "last_date" => "2023-10-05 17:00:00",
            // "created_at" => "2023-10-05 09:00:00",
            // "updated_at" => "2023-10-05 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de útiles de escritorio para la Facultad de Ciencias Agrarias de la UNDC.",
            // "url_pdf" => "https://drive.google.com/file/d/1wHOit5ja5GfPt3ct46jLgMDuqxXC4NYq/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 09:30:00",
            // "last_date" => "2023-10-05 17:00:00",
            // "created_at" => "2023-10-05 09:30:00",
            // "updated_at" => "2023-10-05 09:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE UTILES DE OFICINA PARA TRAMITE DOCUMENTARIO DE LA SECRETARIA GENERAL ",
            // "url_pdf" => "https://drive.google.com/file/d/1pX5Woag0N7j3fp-v6Dbi6FMkMCd2GiSO/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 09:30:00",
            // "last_date" => "2023-10-05 17:00:00",
            // "created_at" => "2023-10-05 09:30:00",
            // "updated_at" => "2023-10-05 09:30:00"
            // ]
            // ,[
            // "description" => "Servicio de una capacitación en “SISTEMA DE AUTOMATIZACIÓN PARA LA SELECCIÓN DE CEREZAS DE CAFÉ”, en la modalidad presencial, dirigido a los estudiantes y docentes de la Escuela Profesional de Ingeniería de Sistemas – UNDC, a efectos de ejecutar el V CONGRESO INTERNACIONAL DE INGENIERIA DE SISTEMAS E INVESTIGACION CIENTIFICA”",
            // "url_pdf" => "https://drive.google.com/file/d/1_UyKXxMgPNZAOQVEGsJJhPmXmtcrZ8pI/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 09:30:00",
            // "last_date" => "2023-10-06 15:00:00",
            // "created_at" => "2023-10-05 09:30:00",
            // "updated_at" => "2023-10-05 09:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO DIPLOMA DE ALTA ESPECIALIZACIÓN EN AUDITORIA Y CONTROL GUBERNAMENTAL",
            // "url_pdf" => "https://drive.google.com/file/d/1pq-k0lx17iCAklqTEUgGKcBq15kHPMEF/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 09:50:00",
            // "last_date" => "2023-10-06 17:00:00",
            // "created_at" => "2023-10-05 09:50:00",
            // "updated_at" => "2023-10-05 09:50:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO DIPLOMA DE ALTA ESPECIALIZACIÓN EN OFIMATICA PROFESIONAL: MS EXCEL, MS WORD Y MS POWER POINT",
            // "url_pdf" => "https://drive.google.com/file/d/1icdRlrnDSTGS79svae7LC_XZEu2X7ARe/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 10:00:00",
            // "last_date" => "2023-10-06 17:00:00",
            // "created_at" => "2023-10-05 10:00:00",
            // "updated_at" => "2023-10-05 10:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE ALIMENTACION DE CONSUMO HUMANO PARA LA ESCUELA PROFESIONAL DE ADMINISTRACION DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/10Ueub-3EWQVsgqbruak5WsZ7TpD50-UD/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 10:00:00",
            // "last_date" => "2023-10-10 17:00:00",
            // "created_at" => "2023-10-05 10:00:00",
            // "updated_at" => "2023-10-05 10:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de limpieza para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/17mImbXnOuTkIrNuKZPP-zhe8dAHANOlH/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 09:00:00",
            // "last_date" => "2023-10-09 08:00:00",
            // "created_at" => "2023-10-05 09:00:00",
            // "updated_at" => "2023-10-05 09:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CONTROL PREVIO Y REVISION DE DOCUMENTOS ADMINISTRATIVOS.",
            // "url_pdf" => "https://drive.google.com/file/d/1O4AgqteIg6v-qDr4ySuNZEVZKcSyGbVo/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 10:00:00",
            // "last_date" => "2023-10-09 08:00:00",
            // "created_at" => "2023-10-05 10:00:00",
            // "updated_at" => "2023-10-05 10:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de materiales de laboratorio para el proyecto: Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023)”",
            // "url_pdf" => "https://drive.google.com/file/d/1cPtc4RLeQB1JgWimA3WTSerbz4wG-t6D/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 10:00:00",
            // "last_date" => "2023-10-09 10:00:00",
            // "created_at" => "2023-10-05 10:00:00",
            // "updated_at" => "2023-10-05 10:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de sillas de escritorio para las oficinas de la Vicepresidencia de Investigación”",
            // "url_pdf" => "https://drive.google.com/file/d/13aFKJOba3vyqmf5slRbfCu25PrQiygi_/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 10:30:00",
            // "last_date" => "2023-10-09 10:00:00",
            // "created_at" => "2023-10-05 10:30:00",
            // "updated_at" => "2023-10-05 10:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ELABORACIÓN DE SPOT PUBLICITARIO AUDIOVISUAL PARA EL EXAMEN DE ADMISIÓN 2024 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/17QD35-Q6c7xi4l90tDbQBUQYa3Uwfojn/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 11:00:00",
            // "last_date" => "2023-10-06 18:00:00",
            // "created_at" => "2023-10-05 11:00:00",
            // "updated_at" => "2023-10-05 11:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de un profesional para la ejecución del Plan de Mantenimiento de la Universidad Nacional de Cañete 2023.",
            // "url_pdf" => "https://drive.google.com/file/d/1KOUHQ6hlnUy_gHYn1AXQtQtsOLo-81rC/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 11:00:00",
            // "last_date" => "2023-10-05 18:00:00",
            // "created_at" => "2023-10-05 11:00:00",
            // "updated_at" => "2023-10-05 11:00:00"
            // ]
            // ,[
            // "description" => "“Servicio de Monitoreo Ambiental para la Dirección de Responsabilidad Social Universitaria”",
            // "url_pdf" => "https://drive.google.com/file/d/1K4UJoewSoibcvCGz5ot4aTy0nET_Yu-e/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 11:30:00",
            // "last_date" => "2023-10-09 18:00:00",
            // "created_at" => "2023-10-05 11:30:00",
            // "updated_at" => "2023-10-05 11:30:00"
            // ]
            // ,[
            // "description" => "“SERVICIO ESPECIALIZADO EN CONTABILIDAD”",
            // "url_pdf" => "https://drive.google.com/file/d/1oeT2Mbk7tqrHAjhksAGJZRN72EvYG8Qh/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 11:30:00",
            // "last_date" => "2023-10-06 08:00:00",
            // "created_at" => "2023-10-05 11:30:00",
            // "updated_at" => "2023-10-05 11:30:00"
            // ]
            // ,[
            // "description" => "Servicio de “CURSO DE CAPACITACION EN MATERIA TRIBUTARIA Y CONTABLE”, dirigido a los docentes del Departamento Académico de Contabilidad – UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1_6bj-Ptb3Qjv5EcG59NWaE0W1PeIa5Kd/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 12:40:00",
            // "last_date" => "2023-10-06 17:00:00",
            // "created_at" => "2023-10-05 12:40:00",
            // "updated_at" => "2023-10-05 12:40:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE ALIMENTACION DE CONSUMO HUMANO PARA LA ESCUELA DE CONTABILIDAD",
            // "url_pdf" => "https://drive.google.com/file/d/1ETrtrgk3adTXfiFFMFmYjSUBRQPNoUPc/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 12:50:00",
            // "last_date" => "2023-10-06 17:00:00",
            // "created_at" => "2023-10-05 12:50:00",
            // "updated_at" => "2023-10-05 12:50:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO BIG DATA ARCHITECT ON GCP",
            // "url_pdf" => "https://drive.google.com/file/d/1LS9ie8tRhLvDct70OiWE7P4GngpLbQp2/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 12:50:00",
            // "last_date" => "2023-10-06 17:00:00",
            // "created_at" => "2023-10-05 12:50:00",
            // "updated_at" => "2023-10-05 12:50:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE DOS (02) ESCRITORIOS DE MELAMINA PARA LA UNIDAD DE RECURSOS HUMANOS",
            // "url_pdf" => "https://drive.google.com/file/d/1LVCinGeFD179bUj6IinhGNqfff5enAKZ/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 16:00:00",
            // "last_date" => "2023-10-09 10:00:00",
            // "created_at" => "2023-10-05 16:00:00",
            // "updated_at" => "2023-10-05 16:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE FOLDER DE CARTON PLASTIFICADO TAMAÑO OFICIO CON LOGOTIPO PARA EL CENTRO DE IDIOMAS",
            // "url_pdf" => "https://drive.google.com/file/d/1-vvm499ouwvZyE4BXV1t77r_ySsQ96dE/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 16:30:00",
            // "last_date" => "2023-10-06 18:00:00",
            // "created_at" => "2023-10-05 16:30:00",
            // "updated_at" => "2023-10-05 16:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE ENSEÑANZA PERSONALIZADOS PARA EL PROCESO DE ADMISIÓN 2024 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/13Lp0zkK2X3lWP5gHYgGIPCRPBJdVlBKN/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 17:00:00",
            // "last_date" => "2023-10-09 18:00:00",
            // "created_at" => "2023-10-05 17:00:00",
            // "updated_at" => "2023-10-05 17:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES PARA LAS FERIAS DE ORIENTACIÓN VOCACIONAL DURANTE EL PROCESO DE ADMISIÓN 2024 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1EQOJSZbW2icdE1QxYeqmoWfTNmueZURj/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 17:00:00",
            // "last_date" => "2023-10-09 18:00:00",
            // "created_at" => "2023-10-05 17:00:00",
            // "updated_at" => "2023-10-05 17:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE SEGUIMIENTO Y EJECUCION DE CUADRO DE NECESIDADES",
            // "url_pdf" => "https://drive.google.com/file/d/1KhLvYZun51YYYWJ-26mcbO0CVTQExkN5/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-05 18:30:00",
            // "last_date" => "2023-10-06 10:00:00",
            // "created_at" => "2023-10-05 18:30:00",
            // "updated_at" => "2023-10-05 18:30:00"
            // ]
            // ,[
            // "description" => "CONTRATACION PARA EL SERVICIO DE ALIMENTACION DE CONSUMO HUMANO PARA EL EVENTO “V CONGRESO INTERNACIONAL DE INGENIERIA DE SISTEMAS E INVESTIGACION CIENTIFICA”",
            // "url_pdf" => "https://drive.google.com/file/d/1yNLTLjBDCHfhnP3YBUGdvt-eeKwYGpCd/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-06 08:30:00",
            // "last_date" => "2023-10-07 17:00:00",
            // "created_at" => "2023-10-06 08:30:00",
            // "updated_at" => "2023-10-06 08:30:00"
            // ]
            // ,[
            // "description" => "Contratación del Servicio de impresión, empastado y anillado de compendios de Ciencias y Letras para el Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1u18iajxvgHEyvK0RYBjZqHbVZJCL7qqh/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-06 08:30:00",
            // "last_date" => "2023-10-06 16:00:00",
            // "created_at" => "2023-10-06 08:30:00",
            // "updated_at" => "2023-10-06 08:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 3",
            // "url_pdf" => "https://drive.google.com/file/d/10BsAm8SJulIae_nMvvYKB9IjySrFsOgh/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-06 12:00:00",
            // "last_date" => "2023-10-09 18:00:00",
            // "created_at" => "2023-10-06 12:00:00",
            // "updated_at" => "2023-10-06 12:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de mantenimiento y limpieza de local para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 4",
            // "url_pdf" => "https://drive.google.com/file/d/1fC7CeupQDkfQaa1pQMCB_hwYhUpyBEtW/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-06 12:00:00",
            // "last_date" => "2023-10-09 18:00:00",
            // "created_at" => "2023-10-06 12:00:00",
            // "updated_at" => "2023-10-06 12:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 3",
            // "url_pdf" => "https://drive.google.com/file/d/1xSP5suXYw4md4Xnu1mI6b9ZYz6Kt6WTI/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-06 12:00:00",
            // "last_date" => "2023-10-09 18:00:00",
            // "created_at" => "2023-10-06 12:00:00",
            // "updated_at" => "2023-10-06 12:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 4",
            // "url_pdf" => "https://drive.google.com/file/d/1_bSg6fduNHkiup9hYJjJU1BYZiM3nCee/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-06 12:00:00",
            // "last_date" => "2023-10-09 18:00:00",
            // "created_at" => "2023-10-06 12:00:00",
            // "updated_at" => "2023-10-06 12:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE MANTENIMIENTO Y PINTADO DEL FRONTIS DE LOS ACCESOS DEL LOCAL FUNDO DON LUIS DE LA UNIVERSIDAD NACIONAL DE CAÑETE - SEGUNDA CONVOCATORIA",
            // "url_pdf" => "https://drive.google.com/file/d/1jzWBUBlXRjCV97KszsH9OrA8HyCQUW99/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-06 13:00:00",
            // "last_date" => "2023-10-11 12:00:00",
            // "created_at" => "2023-10-06 13:00:00",
            // "updated_at" => "2023-10-06 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CONSULTORIA DE ACTUALIZACIÓN DE MAPEO DE PUESTOS Y ANÁLISIS DE DOTACIÓN DE PERSONAL EN LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1V8RX73z4NqzHca8t7w5LNXV1SgKXvZLH/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-06 14:00:00",
            // "last_date" => "2023-10-09 18:00:00",
            // "created_at" => "2023-10-06 14:00:00",
            // "updated_at" => "2023-10-06 14:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de equipos de medición y laboratorio para el proyecto: ESTRATEGIA SUSTENTABLE PARA EL MANEJO ADECUADO DE LOS RESIDUOS ORGÁNICOS EN EL VALLE DE CAÑETE CON EL USO DE LA MOSCA SOLDADO NEGRA (Hermetia illucens L.) ’’.",
            // "url_pdf" => "https://drive.google.com/file/d/1HTGqH-3HJGBdfYlgiIl3bUIEtcnEpZDI/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-06 15:00:00",
            // "last_date" => "2023-10-09 12:00:00",
            // "created_at" => "2023-10-06 15:00:00",
            // "updated_at" => "2023-10-06 15:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de materiales de enseñanza de la Dirección de Responsabilidad Social Universitaria",
            // "url_pdf" => "https://drive.google.com/file/d/1b3IGCYoKlNNZj4Q02NmXNqS93QAvCbMD/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-06 15:30:00",
            // "last_date" => "2023-10-09 17:00:00",
            // "created_at" => "2023-10-06 15:30:00",
            // "updated_at" => "2023-10-06 15:30:00"
            // ]
            // ,[
            // "description" => "Servicio de una capacitación en “INTELIGENCIA ARTIFICIAL”, en la modalidad presencial, dirigido a los estudiantes y docentes de la Escuela Profesional de Ingeniería de Sistemas – UNDC, a efectos de ejecutar el V CONGRESO INTERNACIONAL DE INGENIERIA DE SISTEMAS E INVESTIGACION CIENTIFICA”",
            // "url_pdf" => "https://drive.google.com/file/d/1bG1FIX3ZWuZRXO3otEVnMODP-CQhjC9h/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-06 15:40:00",
            // "last_date" => "2023-10-09 17:00:00",
            // "created_at" => "2023-10-06 15:40:00",
            // "updated_at" => "2023-10-06 15:40:00"
            // ]
            // ,[
            // "description" => "“ADQUISICIÓN DE ÚTILES DE OFICINA PARA EL ARCHIVO CENTRAL DE LA SECRETARÍA GENERAL",
            // "url_pdf" => "https://drive.google.com/file/d/1mMpWfbLANVnslV_YbAcw_Xy7Z3GXQm9d/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-06 17:00:00",
            // "last_date" => "2023-10-10 15:00:00",
            // "created_at" => "2023-10-06 17:00:00",
            // "updated_at" => "2023-10-06 17:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de equipos de laboratorio para el proyecto: ESTRATEGIA SUSTENTABLE PARA EL MANEJO ADECUADO DE LOS RESIDUOS ORGÁNICOS EN EL VALLE DE CAÑETE CON EL USO DE LA MOSCA SOLDADO NEGRA (Hermetia illucens L.) ’’.",
            // "url_pdf" => "https://drive.google.com/file/d/1uw8ysCT-WCwWyGhYhVVG8pjtWo79bTFI/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-06 18:00:00",
            // "last_date" => "2023-10-10 15:00:00",
            // "created_at" => "2023-10-06 18:00:00",
            // "updated_at" => "2023-10-06 18:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE 08 UNIDADES DE TINTA PARA PLOTTER HP DESIGNJET T830",
            // "url_pdf" => "https://drive.google.com/file/d/1ML4eOfF9kFTAfMsdLdYvzBVNAHkmw1EW/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-10 08:00:00",
            // "last_date" => "2023-10-11 13:00:00",
            // "created_at" => "2023-10-10 08:00:00",
            // "updated_at" => "2023-10-10 08:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MATERIALES DE OFICINA PARA LA UNIDAD DE SERVICIOS GENERALES DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1ks3p-FgeoY3ayjrHfN5tZvyFcp8wTpUE/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-10 09:30:00",
            // "last_date" => "2023-10-11 10:30:00",
            // "created_at" => "2023-10-10 09:30:00",
            // "updated_at" => "2023-10-10 09:30:00"
            // ]
            // ,[
            // "description" => "“Adquisición de Agua de mesa necesaria para el proyecto: Desarrollo de un programa de mejoramiento genético de cultivo de ajo (Allium sativum L.), aplicando la biotecnología en ecotipos de amplia diversidad adaptados a las condiciones del Valle de Cañete”",
            // "url_pdf" => "https://drive.google.com/file/d/1uSzFoCz3A6u1jnTASwQ5JffL9W-6Xt4T/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-10 09:00:00",
            // "last_date" => "2023-10-12 00:00:00",
            // "created_at" => "2023-10-10 09:00:00",
            // "updated_at" => "2023-10-10 09:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICION DE MAQUINARIAS DE MANTENIMIENTO PARA LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1WxC2mXdCN2A-7l1qy3MUft1Vn1Xjvm0h/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-10 10:00:00",
            // "last_date" => "2023-10-13 13:00:00",
            // "created_at" => "2023-10-10 10:00:00",
            // "updated_at" => "2023-10-10 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE MOBILIARIOS 02, PARA EL EQUIPAMIENTO DEL PROYECTO, “MEJORAMIENTO DE LOS SERVICIOS DE FORMACIÓN PROFESIONAL EN ADMINISTRACIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN LUIS - PROVINCIA DE CAÑETE - DEPARTAMENTO DE LIMA” CÓDIGO ÚNICO DE INVERSIONES 2468668.",
            // "url_pdf" => "https://drive.google.com/file/d/1oQA2t5wI3Mj6IFhUsupCK_z0TRvxhoCA/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-10-10 17:00:00",
            // "last_date" => "2023-10-16 16:00:00",
            // "created_at" => "2023-10-10 17:00:00",
            // "updated_at" => "2023-10-10 17:00:00"
            // ]
            // ,[
            // "description" => "“Adquisición de calendario de pared para las oficinas de la Vicepresidencia de Investigación”",
            // "url_pdf" => "https://drive.google.com/file/d/1mU_T9lQKZqZLtxnN5wkzUUjm4FLvJOu2/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-10-10 15:00:00",
            // "last_date" => "2023-10-12 15:00:00",
            // "created_at" => "2023-10-10 15:00:00",
            // "updated_at" => "2023-10-10 15:00:00"
            // ]
            // ,[
            // "description" => "CONTRATACION DEL SERVICIO DE ASISTENCIA TÉCNICA EN MONITOREO Y SEGUIMIENTOEN GESTIÓN ADMINISTRATIVA PARA LA ESCUELA PROFESIONAL DE ADMINISTRACION DE TURISMO Y HOTELERÍA DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/18FVlZI1w7RbGOIYSmaU03vVcTJYsRyqG/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-10 18:30:00",
            // "last_date" => "2023-10-11 11:00:00",
            // "created_at" => "2023-10-10 18:30:00",
            // "updated_at" => "2023-10-10 18:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE PRENDAS PUBLICITARIAS PARA EL PROCESO DE ADMISIÓN 2024 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1bhv6TJoJmxqs4KmiSO8bgFkg2tJ-JwC9/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-10 18:00:00",
            // "last_date" => "2023-10-12 18:00:00",
            // "created_at" => "2023-10-10 18:00:00",
            // "updated_at" => "2023-10-10 18:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de instalación de modulo prefabricado para el proyecto de investigación ESTRATEGIA SUSTENTABLE PARA EL MANEJO ADECUADO DE LOS RESIDUOS ORGÁNICOS EN EL VALLE DE CAÑETE CON EL USO DE LA MOSCA SOLDADO NEGRA (Hermetia illucens L.)",
            // "url_pdf" => "https://drive.google.com/file/d/1j5KNM7YXAVIOuV1BKOMrUMKS1R57AbIF/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-10 18:00:00",
            // "last_date" => "2023-10-12 12:00:00",
            // "created_at" => "2023-10-10 18:00:00",
            // "updated_at" => "2023-10-10 18:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE GIGANTOGRAFÍAS PARA EL PROCESO DE ADMISIÓN 2024 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1orCm7F5pMXHrWcXiVyJ13aZLdF5kEOYi/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-10 18:00:00",
            // "last_date" => "2023-10-11 18:00:00",
            // "created_at" => "2023-10-10 18:00:00",
            // "updated_at" => "2023-10-10 18:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete” - BIO - FIS",
            // "url_pdf" => "https://drive.google.com/file/d/1YTHkjsPmuhRQUS297LsTQwoWKDkvxDzK/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete” - BIO",
            // "url_pdf" => "https://drive.google.com/file/d/1M2dlCysMSX7Bz46MSUD-AVSgd6aZ6OWW/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete” - HLM I - HLM II",
            // "url_pdf" => "https://drive.google.com/file/d/1H5vNYe0czpVhbRa5ZOf9J9KMnPZ46CcS/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete” - ALG - TRIG",
            // "url_pdf" => "https://drive.google.com/file/d/1mioFekROJ99E_oHg83FkcTLtivvBa0uq/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete” - HV I - HV II",
            // "url_pdf" => "https://drive.google.com/file/d/1y5fh8oAxoKhG2G0EJ-Vg1nk7N1NyZp40/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete” - HV I - HV II",
            // "url_pdf" => "https://drive.google.com/file/d/1HwaqoVq539h_K9_Tg9dRX6TJmJ7gCDfq/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete” - ARIM - GEOM",
            // "url_pdf" => "https://drive.google.com/file/d/1T2oYTx-R90Ve6ejEFOyutBooOpqPBMu1/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete” - ALG - TRIG",
            // "url_pdf" => "https://drive.google.com/file/d/1hxKL4lSY3bFs8Z4P8ssBygbZOvisQOTo/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete” - QUIM - FISIC",
            // "url_pdf" => "https://drive.google.com/file/d/1OpkbvHO-2NIOZ6MKENcUbyl8NmfOW5Ga/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete” - LEN - LIT",
            // "url_pdf" => "https://drive.google.com/file/d/1wOUevFnPBQDtGnDWnyMvs43Asbl6prPr/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete” - HIS - GEOG",
            // "url_pdf" => "https://drive.google.com/file/d/1rALfOYjMpeE6BD9NNd4E8SyPYt-kqlI4/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete” - HIST - GEOG",
            // "url_pdf" => "https://drive.google.com/file/d/1wJ_amXlsjZoeOXqb8lZ8nDaCtW9RcTtS/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete” - EC - ECON - FIL y PSI",
            // "url_pdf" => "https://drive.google.com/file/d/1N9hA_DTvLAVUzmyciMH_i_LQKhkdG3Ik/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete” - EC - ECON",
            // "url_pdf" => "https://drive.google.com/file/d/1V6eTKxW7zqt-JSBOMFPr8xakd9ApVVak/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-12 18:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de bienes y herramientas para la Dirección de Responsabilidad Social Universitaria",
            // "url_pdf" => "https://drive.google.com/file/d/1ugx31p13kwJEjfupORAXwSuaMXC1xhCM/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "“Contratación del Servicio de Docencia, para la enseñanza en el Centro Pre Universitario de la Universidad Nacional de Cañete” - FIL y PSI",
            // "url_pdf" => "https://drive.google.com/file/d/17g7BesTSVULmdHvJA_y9V_li3z-TQGKV/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 09:00:00",
            // "last_date" => "2023-10-11 18:00:00",
            // "created_at" => "2023-10-11 09:00:00",
            // "updated_at" => "2023-10-11 09:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de un profesional para la ejecución del Plan de Mantenimiento de la Universidad Nacional de Cañete 2023. - SEGUNDA CONVOCATORIA",
            // "url_pdf" => "https://drive.google.com/file/d/17as8yAU3sf84ixae54MvFKleRYxMI7se/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 10:00:00",
            // "last_date" => "2023-10-11 18:00:00",
            // "created_at" => "2023-10-11 10:00:00",
            // "updated_at" => "2023-10-11 10:00:00"
            // ]
            // ,[
            // "description" => "Contratación de Servicio de un Técnico de laboratorio, para el proyecto de investigación: “Teledetección de la desertificación y la degradación del suelo en el valle de Cañete (2000 – 2023)”",
            // "url_pdf" => "https://drive.google.com/file/d/1I8qsVfS1jAJImexECnDMofIU11kwkAe-/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 11:00:00",
            // "last_date" => "2023-10-12 12:00:00",
            // "created_at" => "2023-10-11 11:00:00",
            // "updated_at" => "2023-10-11 11:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE IMPRESIÓN DE VOLANTES Y AFICHES PUBLICITARIOS PARA EL EXAMEN DE ADMISIÓN 2024 DE LA UNIVERSIDAD NACIONAL DE CAÑETE - MODALIDAD QUINTO DE SECUNDARIA",
            // "url_pdf" => "https://drive.google.com/file/d/13B4C1M3O2xArkR5_7Mhqe6VrcunFzR23/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 11:30:00",
            // "last_date" => "2023-10-12 11:00:00",
            // "created_at" => "2023-10-11 11:30:00",
            // "updated_at" => "2023-10-11 11:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE FICHAS ÓPTICAS PARA LA DIRECCIÓN DE ADMISIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/17wqRBk-nzqSH5mIcxMcHhj50HS2EbACP/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 11:30:00",
            // "last_date" => "2023-10-12 18:00:00",
            // "created_at" => "2023-10-11 11:30:00",
            // "updated_at" => "2023-10-11 11:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE EQUIPOS DE RESPUESTA ANTE EMERGENCIAS PARA LA SEDE ADMINISTRATIVA Y ACADÉMICA DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1PFj4OB7RUtJpleJb6aFCKl5IIqrSq7ar/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 12:00:00",
            // "last_date" => "2023-10-12 18:00:00",
            // "created_at" => "2023-10-11 12:00:00",
            // "updated_at" => "2023-10-11 12:00:00"
            // ]
            // ,[
            // "description" => "SERVICIODE CONSULTORÍA EN ACOMPAÑAMIENTODE ASISTENCIA TÉCNICA PARA EL CIERRE DE BRECHAS Y LOGRO DE ESTÁNDARES DE LOS PROGRAMAS DE ESTUDIO DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1kVUkEKkZT6uK2Mw_VXMsksoy6z-Rcwli/view?usp=drive_link",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 12:00:00",
            // "last_date" => "2023-10-13 18:00:00",
            // "created_at" => "2023-10-11 12:00:00",
            // "updated_at" => "2023-10-11 12:00:00"
            // ]
            // ,[
            // "description" => "DENOMINACIÓN DE LA CONTRATACIÓN “SERVICIO DE ASISTENCIA ADMINISTRATIVA PARA EL SEGUIMIENTO Y MONITOREO DE ACTIVIDADES DE LA DIRECCIÓN DE RESPONSABILIDAD SOCIAL UNIVERSITARIA”",
            // "url_pdf" => "https://drive.google.com/file/d/1yImopUGTuM4Mdqeptj_9hUcxFNMN8cbF/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 15:00:00",
            // "last_date" => "2023-10-12 11:00:00",
            // "created_at" => "2023-10-11 15:00:00",
            // "updated_at" => "2023-10-11 15:00:00"
            // ]
            // ,[
            // "description" => "Adquisición de (01) Armario de melamina de 2 puertas y (02) Escritorios de melamina para el Departamento Académico de Estudios Generales de la Universidad Nacional de Cañete.",
            // "url_pdf" => "https://drive.google.com/file/d/1wSLMb-XmF0JefWnHL9M2UE4PtspyP6c-/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 15:30:00",
            // "last_date" => "2023-10-12 18:00:00",
            // "created_at" => "2023-10-11 15:30:00",
            // "updated_at" => "2023-10-11 15:30:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE FOLIACIÓN Y ARCHIVO PARA LA UNIDAD DE RECURSOS HUMANOS DE LA UNDC",
            // "url_pdf" => "https://drive.google.com/file/d/1PhuTY6RWLr8QSpsGZ68H54F2ZLFWW67x/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 15:30:00",
            // "last_date" => "2023-10-12 11:00:00",
            // "created_at" => "2023-10-11 15:30:00",
            // "updated_at" => "2023-10-11 15:30:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE (01) IMPRESORA A INYECCION DE TINTA A COLOR, PARA EL DEPARTAMENTO ACADEMICO DE ESTUDIOS GENERALES.",
            // "url_pdf" => "https://drive.google.com/file/d/1xA-o_oLnAnUnKtDcFqSEoc6jsxVvubQP/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 16:30:00",
            // "last_date" => "2023-10-12 18:00:00",
            // "created_at" => "2023-10-11 16:30:00",
            // "updated_at" => "2023-10-11 16:30:00"
            // ]
            // ,[
            // "description" => "Contratación del Servicio de soporte informático para el Centro Preuniversitario de la Universidad Nacional de Cañete",
            // "url_pdf" => "https://drive.google.com/file/d/1GcY4zZujokuaBSPm4oWXfrVz59svoAlR/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 16:30:00",
            // "last_date" => "2023-10-12 18:00:00",
            // "created_at" => "2023-10-11 16:30:00",
            // "updated_at" => "2023-10-11 16:30:00"
            // ]
            // ,[
            // "description" => "Servicio de Seguimiento para la ejecución del EQUIPAMIENTO Y MOBILIARIO en la: MEJORAMIENTO DE LOS SERVICIOS DE FORMACIÓN PROFESIONAL EN ADMINISTRACIÓN DE LA UNIVERSIDAD NACIONAL DE CAÑETE, DISTRITO DE SAN LUIS- PROVINCIA DE CAÑETE - DEPARTAMENTO DE LIMA , con Código Único de Inversión 2468668.",
            // "url_pdf" => "https://drive.google.com/file/d/1lgF9Al2khFP5rdfS5Dnf33JuJERM3TWk/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 16:30:00",
            // "last_date" => "2023-10-13 18:00:00",
            // "created_at" => "2023-10-11 16:30:00",
            // "updated_at" => "2023-10-11 16:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de Diplomado en Metodología de la Investigación:Introduccióna los procesos cuantitativos, cualitativos ymixtos.",
            // "url_pdf" => "https://drive.google.com/file/d/1ynK4Ycm0ZxLiyMTXv6i-fSH0-sXe-i1D/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-11 18:00:00",
            // "last_date" => "2023-10-12 10:00:00",
            // "created_at" => "2023-10-11 18:00:00",
            // "updated_at" => "2023-10-11 18:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO CURSO BIG DATA ARCHITECT ON GCP",
            // "url_pdf" => "https://drive.google.com/file/d/1aC98yYqZRE4IZQLUuVlC903gwbtH1iTy/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-12 13:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-12 13:00:00",
            // "updated_at" => "2023-10-12 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO “SIGA – APLICACIONES PRACTICAS, MODULO LOGISTICA, CONFIGURACIÓN Y TESORERIA (pedidos de bienes, servicios y viáticos)” PARA EL PERSONAL ADMINISTRATIVO DE LA UNIVERSIDAD NACIONAL DE CAÑETE.",
            // "url_pdf" => "https://drive.google.com/file/d/1BZJUWofrC9N3oEcOKUSSJrbK2masjml8/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-12 13:00:00",
            // "last_date" => "2023-10-12 17:00:00",
            // "created_at" => "2023-10-12 13:00:00",
            // "updated_at" => "2023-10-12 13:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE CAPACITACIÓN DENOMINADO “GESTIÓN ESTRATÉGICA PARA EL RECLUTAMIENTO Y SELECCIÓN DE PERSONAL EN LAS ORGANIZACIONES”",
            // "url_pdf" => "https://drive.google.com/file/d/1b3WzmiLhFAGiGJOUz1yMAAwjsidyN_dC/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-12 14:00:00",
            // "last_date" => "2023-10-13 14:00:00",
            // "created_at" => "2023-10-12 14:00:00",
            // "updated_at" => "2023-10-12 14:00:00"
            // ]
            // ,[
            // "description" => "SERVICIO DE PUBLICIDAD EN REDES SOCIALES PARA EL EXAMEN DE ADMISIÓN 2024 DE LA UNIVERSIDAD NACIONAL DE CAÑETE - MODALIDAD QUINTO DE SECUNDARIA",
            // "url_pdf" => "https://drive.google.com/file/d/11wBnI0C76rN_-NDCwZxfE12zcSDxIfpy/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-13 10:00:00",
            // "last_date" => "2023-10-16 10:00:00",
            // "created_at" => "2023-10-13 10:00:00",
            // "updated_at" => "2023-10-13 10:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE ÚTILES PARA LAS FERIAS DE ORIENTACIÓN VOCACIONAL DURANTE EL PROCESO DE ADMISIÓN 2024 DE LA UNIVERSIDAD NACIONAL DE CAÑETE",
            // "url_pdf" => "https://drive.google.com/file/d/1xpaYOMPKnMNToEaSxHd6PfyTXZmkjcTF/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-13 16:30:00",
            // "last_date" => "2023-10-16 08:00:00",
            // "created_at" => "2023-10-13 16:30:00",
            // "updated_at" => "2023-10-13 16:30:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 5",
            // "url_pdf" => "https://drive.google.com/file/d/1PMW8ci5Kav6SFSadwjnG_PkEq0IRk_Sw/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-13 17:00:00",
            // "last_date" => "2023-10-16 11:00:00",
            // "created_at" => "2023-10-13 17:00:00",
            // "updated_at" => "2023-10-13 17:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 6",
            // "url_pdf" => "https://drive.google.com/file/d/1Zekv7N2RCOZXb8KuI9wGUI6jjhvmbFA4/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-13 17:00:00",
            // "last_date" => "2023-10-16 11:00:00",
            // "created_at" => "2023-10-13 17:00:00",
            // "updated_at" => "2023-10-13 17:00:00"
            // ]
            // ,[
            // "description" => "Contratación del servicio de seguridad y vigilancia para la Unidad de Servicios Generales de la Universidad Nacional de Cañete - Personal 7",
            // "url_pdf" => "https://drive.google.com/file/d/1wx5a6IZFgiPsaXz0s8ExCho8Qc4W11Y7/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-13 17:00:00",
            // "last_date" => "2023-10-16 11:00:00",
            // "created_at" => "2023-10-13 17:00:00",
            // "updated_at" => "2023-10-13 17:00:00"
            // ]
            // ,[
            // "description" => "ADQUISICIÓN DE PARLANTE AMPLIFICADOR PORTATIL PARA LA OFICINA DE COMUNICACIONES",
            // "url_pdf" => "https://drive.google.com/file/d/1LQSCfuP1Iqz6K2Pa9UYi100ArdBpN4hQ/view?usp=sharing",
            // "user_id" => 1,
            // "start_date" => "2023-10-13 17:00:00",
            // "last_date" => "2023-10-16 18:00:00",
            // "created_at" => "2023-10-13 17:00:00",
            // "updated_at" => "2023-10-13 17:00:00"
            // ]
            ];
        foreach($data as $data){
            Post::insert([
                "description" => $data['description'],
                "url_pdf" => $data['url_pdf'],
                "user_id" => $data['user_id'],
                "start_date" => $data['start_date'],
                "last_date" => $data['last_date'],
                "created_at" => $data['created_at'],
                "updated_at" => $data['updated_at'],
                "typePost_id" => $data['typePost_id'],
            ]);
        }
    }
}
