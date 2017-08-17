<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Product;

class ProductTableSeeder extends Seeder {

	/**
	 * Run the Products table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'name' 			=> 'Capacillo',
				'slug' 			=> 'Capacillo',
				'description' 	=> '25 capacillos #10 blancos para tus ponquecitos',
				'extract' 		=> '25 capacillos #10 blancos',
				'price' 		=> 3500.00,
				'image' 		=> 'https://http2.mlstatic.com/capacillo-blanco-n-08-millar-1000-unidades-importado-D_NQ_NP_257905-MLV25107854952_102016-F.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Arequipe Beraca',
				'slug' 			=> 'Arequipe Beraca',
				'description' 	=> 'Arequipe beraca envasado en 250gr y en 125gr',
				'extract' 		=> '2 presentaciones',
				'price' 		=> 10000,
				'image' 		=> 'https://scontent-sea1-1.cdninstagram.com/t51.2885-15/s480x480/e35/17334200_1278779012157758_2078715346075779072_n.jpg?ig_cache_key=MTQ3NDg3MzM2ODA0NTg3MjMwOA%3D%3D.2',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Azucar konfit',
				'slug' 			=> 'azucar konfit',
				'description' 	=> 'Azucar refinada en diferentes presentaciones con empaque de plastico y empaque de papel peso=1kg',
				'extract' 		=> 'Azuca refinada de 1kg',
				'price' 		=> 13000,
				'image' 		=> 'https://scontent-cdt1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/15623949_563233980534790_204007948672827392_n.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Leche condensada natulac',
				'slug' 			=> 'leche condensada',
				'description' 	=> 'Leche condensada azucarada natulac contenido neto de 397gr ',
				'extract' 		=> 'Leche condensada natulac de 397gr',
				'price' 		=> 7500,
				'image' 		=> 'http://sitiourbano.com/web/3104-large_default/leche-condensada-natulac-lata-397-gr.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Pirulin',
				'slug' 			=> 'Pirulin',
				'description' 	=> 'Envase enlatado de pirulin contenido neto 300gr',
				'extract' 		=> 'Envase enlatado de pirulin',
				'price' 		=> 28000,
				'image' 		=> 'http://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/14269065_1367529116593774_362992151_n.jpg?ig_cache_key=MTMzNDMwNzg1NTM2NTE1MDk0OQ%3D%3D.2',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Chocolate savoy de taza',
				'slug' 			=> 'Chocolate savoy de taza',
				'description' 	=> 'Chocolate para taza savoy hecho para esas noches frias',
				'extract' 		=> 'Listo para tus tazas de chocolate caliente',
				'price' 		=> 7500,
				'image' 		=> 'https://www.savoy.com.ve/wp-content/uploads/2015/04/CHOCO-TAZAS.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Chocolate savoy postre',
				'slug' 			=> 'Chocolate savoy postre',
				'description' 	=> 'Chocolate savoy para tus postres, de diferentes usos tanto para decorar como para rellenar tus tortas',
				'extract' 		=> 'Chocolate para tus tortas y algo mas ',
				'price' 		=> 7500,
				'image' 		=> 'https://www.savoy.com.ve/wp-content/uploads/2015/04/POSTRES.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Globos Metalizados',
				'slug' 			=> 'Globos Metalizados',
				'description' 	=> 'Globos metalizados en sus presentaciones dorado y plateado con un tamaño de 16 pulgadas',
				'extract' 		=> 'Globos metalizados en 2 versiones',
				'price' 		=> 7000,
				'image' 		=> 'https://http2.mlstatic.com/globos-metalizados-numeros-D_NQ_NP_888511-MLV20592135892_022016-F.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			
		);

		Product::insert($data);

	}

}