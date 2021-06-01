<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->categoriasAve();
        $this->categoriasCerdos();
    }

    private function categoriasAve()
    {
        $pollo_de_engorde = Category::create([
            'group_id' => Category::BIRD_ID,
            'name' => 'Pollo de engorde',
            'image' => 'https://ui-avatars.com/api/?name=pollo+de+engorde'
        ]);

        $this->subcategoriasPolloDeEngorde($pollo_de_engorde->id);

        $gallinas_ponedoras = Category::create([
            'group_id' => Category::BIRD_ID,
            'name' => 'Gallinas ponedoras',
            'image' => 'https://ui-avatars.com/api/?name=gallinas+ponedoras'
        ]);

        $this->subcategoriasGallinasPonedoras($gallinas_ponedoras->id);

        $reproductoras = Category::create([
            'group_id' => Category::BIRD_ID,
            'name' => 'Reproductoras',
            'image' => 'https://ui-avatars.com/api/?name=reproductoras'
        ]);

        $this->subcategoriasReproductoras($reproductoras->id);

        $pavos = Category::create([
            'group_id' => Category::BIRD_ID,
            'name' => 'Pavos',
            'image' => 'https://ui-avatars.com/api/?name=pavos'
        ]);

        $this->subcategoriasPavos($pavos->id);
    }

    private function categoriasCerdos()
    {
        $cerdos = Category::create([
            'group_id' => Category::PIG_ID,
            'name' => 'Cerdos',
            'image' => 'https://ui-avatars.com/api/?name=cerdos'
        ]);

        $this->subcategoriasCerdos($cerdos->id);

    }

    private function subcategoriasCerdos($id)
    {
        $bebederos = Subcategory::create([
            'category_id' => $id,
            'name' => 'Bebederos',
            'image' => 'https://ui-avatars.com/api/?name=bebederos'
        ]);

        $comederos = Subcategory::create([
            'category_id' => $id,
            'name' => 'Comederos',
            'image' => 'https://ui-avatars.com/api/?name=comederos'
        ]);

        $inseminacion_artificial = Subcategory::create([
            'category_id' => $id,
            'name' => 'Inseminación Artificial',
            'image' => 'https://ui-avatars.com/api/?name=inseminacion+artificial'
        ]);

        $ambiente_controlado = Subcategory::create([
            'category_id' => $id,
            'name' => 'Ambiente controlado',
            'image' => 'https://ui-avatars.com/api/?name=ambiente+controlado'
        ]);

        $iluminacion_led = Subcategory::create([
            'category_id' => $id,
            'name' => 'Iluminación LED',
            'image' => 'https://ui-avatars.com/api/?name=iluminacion+led'
        ]);

        $sistema_de_suspension = Subcategory::create([
            'category_id' => $id,
            'name' => 'Sistema de suspensión',
            'image' => 'https://ui-avatars.com/api/?name=sistema+de+suspension'
        ]);

        $pesaje = Subcategory::create([
            'category_id' => $id,
            'name' => 'Pesaje',
            'image' => 'https://ui-avatars.com/api/?name=pesaje'
        ]);

    }

    private function subcategoriasPolloDeEngorde($id)
    {
        $ambiente_controlado = Subcategory::create([
            'category_id' => $id,
            'name' => 'Ambiente controlado',
            'image' => 'https://ui-avatars.com/api/?name=ambiente+controlado'
        ]);

        $bebederos = Subcategory::create([
            'category_id' => $id,
            'name' => 'Bebederos',
            'image' => 'https://ui-avatars.com/api/?name=bebederos'
        ]);

        $comederos = Subcategory::create([
            'category_id' => $id,
            'name' => 'Comederos',
            'image' => 'https://ui-avatars.com/api/?name=comederos'
        ]);

        $iluminacion_led = Subcategory::create([
            'category_id' => $id,
            'name' => 'Iluminación LED',
            'image' => 'https://ui-avatars.com/api/?name=iluminacion+led'
        ]);

        $pesaje = Subcategory::create([
            'category_id' => $id,
            'name' => 'Pesaje',
            'image' => 'https://ui-avatars.com/api/?name=pesaje'
        ]);

        $sistema_de_suspension = Subcategory::create([
            'category_id' => $id,
            'name' => 'Sistema de suspensión',
            'image' => 'https://ui-avatars.com/api/?name=sistema+de+suspension'
        ]);

        $transporte = Subcategory::create([
            'category_id' => $id,
            'name' => 'Transporte',
            'image' => 'https://ui-avatars.com/api/?name=transporte'
        ]);
    }

    private function subcategoriasGallinasPonedoras($id)
    {
        $ambiente_controlado = Subcategory::create([
            'category_id' => $id,
            'name' => 'Ambiente controlado',
            'image' => 'https://ui-avatars.com/api/?name=ambiente+controlado'
        ]);

        $bebederos = Subcategory::create([
            'category_id' => $id,
            'name' => 'Bebederos',
            'image' => 'https://ui-avatars.com/api/?name=bebederos'
        ]);

        $comederos = Subcategory::create([
            'category_id' => $id,
            'name' => 'Comederos',
            'image' => 'https://ui-avatars.com/api/?name=comederos'
        ]);

        $despicadoras = Subcategory::create([
            'category_id' => $id,
            'name' => 'Despicadoras',
            'image' => 'https://ui-avatars.com/api/?name=despicadoras'
        ]);

        $iluminacion_led = Subcategory::create([
            'category_id' => $id,
            'name' => 'Iluminación LED',
            'image' => 'https://ui-avatars.com/api/?name=iluminacion+led'
        ]);

        $jaulas_avicolas = Subcategory::create([
            'category_id' => $id,
            'name' => 'Jaulas avícolas',
            'image' => 'https://ui-avatars.com/api/?name=jaulas+avicolas'
        ]);

        $manejo_del_huevo = Subcategory::create([
            'category_id' => $id,
            'name' => 'Manejo del huevo',
            'image' => 'https://ui-avatars.com/api/?name=manejo+del+huevo'
        ]);

        $pesaje = Subcategory::create([
            'category_id' => $id,
            'name' => 'Pesaje',
            'image' => 'https://ui-avatars.com/api/?name=pesaje'
        ]);

        $sistema_de_suspension = Subcategory::create([
            'category_id' => $id,
            'name' => 'Sistema de suspensión',
            'image' => 'https://ui-avatars.com/api/?name=sistema+de+suspension'
        ]);
    }

    private function subcategoriasReproductoras($id)
    {
        $ambiente_controlado = Subcategory::create([
            'category_id' => $id,
            'name' => 'Ambiente controlado',
            'image' => 'https://ui-avatars.com/api/?name=ambiente+controlado'
        ]);

        $bebederos = Subcategory::create([
            'category_id' => $id,
            'name' => 'Bebederos',
            'image' => 'https://ui-avatars.com/api/?name=bebederos'
        ]);

        $comederos = Subcategory::create([
            'category_id' => $id,
            'name' => 'Comederos',
            'image' => 'https://ui-avatars.com/api/?name=comederos'
        ]);

        $iluminacion_led = Subcategory::create([
            'category_id' => $id,
            'name' => 'Iluminación LED',
            'image' => 'https://ui-avatars.com/api/?name=iluminacion+led'
        ]);

        $manejo_del_huevo = Subcategory::create([
            'category_id' => $id,
            'name' => 'Manejo del huevo',
            'image' => 'https://ui-avatars.com/api/?name=manejo+del+huevo'
        ]);

        $nidos_nidales = Subcategory::create([
            'category_id' => $id,
            'name' => 'Nidos-Nidales',
            'image' => 'https://ui-avatars.com/api/?name=nidos+nidales'
        ]);

        $pesaje = Subcategory::create([
            'category_id' => $id,
            'name' => 'Pesaje',
            'image' => 'https://ui-avatars.com/api/?name=pesaje'
        ]);

        $sistema_de_suspension = Subcategory::create([
            'category_id' => $id,
            'name' => 'Sistema de suspensión',
            'image' => 'https://ui-avatars.com/api/?name=sistema+de+suspension'
        ]);
    }

    private function subcategoriasPavos($id)
    {
        $ambiente_controlado = Subcategory::create([
            'category_id' => $id,
            'name' => 'Ambiente controlado',
            'image' => 'https://ui-avatars.com/api/?name=ambiente+controlado'
        ]);

        $bebederos = Subcategory::create([
            'category_id' => $id,
            'name' => 'Bebederos',
            'image' => 'https://ui-avatars.com/api/?name=bebederos'
        ]);

        $comederos = Subcategory::create([
            'category_id' => $id,
            'name' => 'Comederos',
            'image' => 'https://ui-avatars.com/api/?name=comederos'
        ]);

        $iluminacion_led = Subcategory::create([
            'category_id' => $id,
            'name' => 'Iluminación LED',
            'image' => 'https://ui-avatars.com/api/?name=iluminacion+led'
        ]);

        $pesaje = Subcategory::create([
            'category_id' => $id,
            'name' => 'Pesaje',
            'image' => 'https://ui-avatars.com/api/?name=pesaje'
        ]);

        $sistema_de_suspension = Subcategory::create([
            'category_id' => $id,
            'name' => 'Sistema de suspensión',
            'image' => 'https://ui-avatars.com/api/?name=sistema+de+suspension'
        ]);

        $transporte = Subcategory::create([
            'category_id' => $id,
            'name' => 'Transporte',
            'image' => 'https://ui-avatars.com/api/?name=transporte'
        ]);
    }
}
