<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\ProductFactory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     public function Productos(){
        $productos =  [
            [
                'name' => 'Camiseta de Algodón',
                'price' => 20.99,
                'description' => 'Una camiseta de algodón suave y cómoda. Perfecta para uso diario, esta camiseta te mantendrá fresco y cómodo durante todo el día. Disponible en una variedad de colores y tallas.',
                'image' => 'https://elitevisualmarketing.do/wp-content/uploads/2020/05/5858-001-P.jpg',
            ],
            [
                'name' => 'Pantalón Vaquero Clásico',
                'price' => 39.99,
                'description' => 'Un pantalón vaquero clásico que nunca pasa de moda. Hecho de denim resistente y duradero, este pantalón es perfecto para uso casual o semi-formal. Los bolsillos profundos ofrecen un amplio espacio de almacenamiento.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTC87pUspLH8ypkNWYgR9fl0_2LdbwQHrHjSRKF2GPo4A&s',
            ],
            [
                'name' => 'Zapatos de Cuero Formal',
                'price' => 59.99,
                'description' => 'Un par de zapatos de cuero elegantes y versátiles. Perfectos para ocasiones formales o de negocios, estos zapatos están hechos de cuero genuino de alta calidad. La suela antideslizante proporciona estabilidad y seguridad en cada paso.',
                'image' => 'https://valetzshoes.com/cdn/shop/products/IMG_9388-Edit_1200x1200.jpg?v=1689608810',
            ],
            [
                'name' => 'Sudadera con Capucha',
                'price' => 29.99,
                'description' => 'Una sudadera con capucha cómoda y moderna. Confeccionada con tela suave y elástica, esta sudadera es ideal para mantenerte abrigado en los días fríos. El diseño con capucha y bolsillo tipo canguro agrega un toque de estilo adicional.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTC7U2zncSceI4MK9tlJPpJw_DCsQ081Y4IXbhAe1W1qg&s',
            ],
            [

                'name' => 'Vestido de Noche Elegante',
                'price' => 79.99,
                'description' => 'Un vestido de noche elegante y sofisticado. Confeccionado con tela satinada de alta calidad, este vestido presenta un diseño clásico con detalles de encaje en el escote y la espalda. Perfecto para ocasiones especiales y eventos formales.',
                'image' => 'https://m.media-amazon.com/images/I/71UcZC+W2UL._AC_UF894,1000_QL80_.jpg',
            ],
            [

                'name' => 'Gorra de Béisbol Vintage',
                'price' => 15.99,
                'description' => 'Una gorra de béisbol clásica con un toque vintage. Hecha de algodón resistente, esta gorra es cómoda de llevar y se adapta a la mayoría de las formas de cabeza. El diseño retro agrega un estilo atemporal a tu look casual.',
                'image' => 'https://m.media-amazon.com/images/I/61wvbPiQAxL._AC_UY1000_.jpg',
            ],
            [

                'name' => 'Bolso de Cuero Cruzado',
                'price' => 49.99,
                'description' => 'Un bolso de cuero elegante y funcional. Confeccionado con cuero genuino de alta calidad, este bolso ofrece un amplio espacio de almacenamiento y múltiples bolsillos interiores para mantener tus pertenencias organizadas. Perfecto para uso diario o viajes.',
                'image' => 'https://m.media-amazon.com/images/I/51CYiN0GzNL._AC_UY900_.jpg',
            ],
            [

                'name' => 'Reloj de Pulsera Clásico',
                'price' => 99.99,
                'description' => 'Un reloj de pulsera clásico y atemporal. Con un diseño elegante y minimalista, este reloj es perfecto para cualquier ocasión. La correa de cuero genuino y la carcasa de acero inoxidable aseguran durabilidad y estilo duradero.',
                'image' => 'https://www.ramosjoyeria.es/wp-content/uploads/2022/03/Reloj-Orient-clasico-caballero-de-cuaro-UG1R001W6.jpg',
            ],
            [

                'name' => 'Bufanda de Lana Suave',
                'price' => 19.99,
                'description' => 'Una bufanda de lana suave y acogedora. Hecha de lana de alta calidad, esta bufanda te mantendrá abrigado y cómodo en los días fríos de invierno. El diseño clásico y versátil combina fácilmente con cualquier atuendo.',
                'image' => 'https://bijuymoda.com/12846-large_default/bufandas-de-lana-suave-al-por-mayor.jpg',
            ],
            [
   
                'name' => 'Gafas de Sol Retro',
                'price' => 24.99,
                'description' => 'Un par de gafas de sol retro con estilo. Con montura de acetato y lentes polarizadas, estas gafas no solo lucen geniales, sino que también protegen tus ojos de los rayos UV nocivos. Perfectas para un día en la playa o un paseo por la ciudad.',
                'image' => 'https://st.mngbcn.com/rcs/pics/static/T5/fotos/S20/57040591_32_B.jpg?ts=1682426416137&imwidth=360&imdensity=2',
            ],
        ];
     }
    public function definition(): array
    {
        return [
            'name' => 'Gafas de Sol Retro',
            'price' => 24.99,
            'description' => 'Un par de gafas de sol retro con estilo. Con montura de acetato y lentes polarizadas, estas gafas no solo lucen geniales, sino que también protegen tus ojos de los rayos UV nocivos. Perfectas para un día en la playa o un paseo por la ciudad.',
            'image' => 'https://st.mngbcn.com/rcs/pics/static/T5/fotos/S20/57040591_32_B.jpg?ts=1682426416137&imwidth=360&imdensity=2',
        ];
    }

}
