<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recommendation;

class RecommendationSeeder extends Seeder
{
    public function run()
    {
        Recommendation::create([
            'title' => 'Nutrición adecuada para perros',
            'description' => 'Asegúrate de proporcionar una dieta equilibrada y específica para la especie y edad de tu mascota. Consulta a tu veterinario para obtener recomendaciones sobre la mejor alimentación. Evita darle restos de comida humana, ya que pueden ser perjudiciales para su salud. Mantén siempre agua fresca y limpia a su disposición. Una buena nutrición es clave para una vida larga y saludable.',
            'image' => 'image/nutricion.jpg',
        ]);
        Recommendation::create([
            'title' => ' Ejercicio Diario',
            'description' => '  Las mascotas necesitan ejercicio regular para mantenerse saludables y felices. Los perros, por ejemplo, disfrutan de caminatas diarias, mientras que los gatos pueden beneficiarse de juguetes interactivos. El ejercicio ayuda a prevenir problemas de comportamiento y enfermedades relacionadas con el sedentarismo. Asegúrate de adaptar el nivel de actividad a la edad y condición física de tu mascota. El tiempo de juego también fortalece el vínculo entre tú y tu mascota.',
            'image' => 'image/ejercicio.jpg',
        ]);

        Recommendation::create([
            'title' => ' Visitas Regulares al Veterinario',
            'description' => ' Lleva a tu mascota al veterinario al menos una vez al año para chequeos de rutina y vacunas. La detección temprana de problemas de salud puede marcar una gran diferencia en el tratamiento y la recuperación. Además, el veterinario puede darte consejos sobre cuidado preventivo, nutrición y comportamiento. No esperes a que tu mascota muestre síntomas graves para buscar ayuda profesional. Mantén actualizadas sus desparasitaciones y vacunaciones.',
            'image' => 'image/veterinario.jpg',
        ]);

        Recommendation::create([
            'title' => 'Higiene y Cuidado Personal',
            'description' => 'Cepilla a tu mascota regularmente para mantener su pelaje limpio y libre de enredos. El cepillado también es una oportunidad para revisar si tiene parásitos o problemas en la piel. Baña a tu mascota según lo necesite, utilizando productos adecuados para su tipo de piel y pelaje. No olvides cortar sus uñas y limpiar sus oídos y dientes regularmente. La higiene adecuada contribuye a la salud general y al bienestar de tu mascota.',
            'image' => 'image/higiene.jpg',
        ]);
        Recommendation::create([
            'title' => 'Socialización y Entrenamiento',
            'description' => 'Es importante que tu mascota socialice adecuadamente con otros animales y personas. Esto ayuda a reducir el estrés y a prevenir comportamientos agresivos o temerosos. El entrenamiento, como la obediencia básica, no solo mejora la convivencia sino que también estimula mentalmente a tu mascota. Utiliza métodos de refuerzo positivo para fomentar comportamientos deseados. La paciencia y la consistencia son claves para un buen entrenamiento.',
            'image' => 'image/entrenamiento.jpg',
        ]);
    }
}
