-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2023 a las 02:27:12
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta`
--

CREATE TABLE `carta` (
  `id` int(4) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `titulo_en` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `descripcion_en` varchar(200) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(70) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carta`
--

INSERT INTO `carta` (`id`, `titulo`, `titulo_en`, `descripcion`, `descripcion_en`, `precio`, `imagen`, `tipo`) VALUES
(1, 'Paella Valenciana', 'Valencian Paella', 'Arroz con mariscos y pollo', 'Rice with seafood and chicken', 18, 'paella.jpg', 'principal'),
(2, 'Tortilla Española', 'Spanish Omelette', 'Tortilla de patatas', 'Potato omelette', 18, 'tortilla-española.jpg', 'principal'),
(3, 'Gazpacho Andaluz', 'Andalusian Gazpacho', 'Sopa fría de tomate y verduras', 'Cold tomato and vegetable soup', 7, 'gazpacho.jpg', 'principal'),
(4, 'Fabada Asturiana', 'Asturian Fabada', 'Guiso de alubias blancas y embutidos', 'Stew of white beans and sausages', 12, 'fabada.jpg', 'principal'),
(5, 'Pulpo a la Gallega', 'Galician Octopus', 'Pulpo con patatas y pimentón', 'Octopus with potatoes and paprika', 16, 'pulpo2.jpg', 'principal'),
(26, 'Café con Leche', 'Coffee with Milk', 'Café con leche caliente', 'Coffee with hot milk', 2.5, 'cafe.jpg', 'bebida'),
(27, 'Cerveza Rubia', 'Blonde Beer', 'Cerveza rubia refrescante', 'Refreshing blonde beer', 3.5, 'cerveza.png', 'bebida'),
(28, 'Vino Tinto', 'Red Wine', 'Vino tinto de la casa', 'House red wine', 4, 'vino.jpg', 'bebida'),
(29, 'Sangría', 'Sangria', 'Bebida refrescante de vino y frutas', 'Refreshing drink of wine and fruits', 5, 'sangria.jpg', 'bebida'),
(30, 'Tarta de Queso', 'Cheese Cake', 'Postre de tarta de queso', 'Cheese cake dessert', 5, 'tarta.jpg', 'postre'),
(31, 'Ensalada', 'salad', 'Ensalada con pollo y salsa César', 'Salad with chicken and Caesar dressing', 9, 'cesar.jpeg', 'principal'),
(32, 'Croquetas de Jamón', 'Ham Croquettes', 'Croquetas caseras de jamón', 'Homemade ham croquettes', 7.5, 'croquetas.jpg', 'principal'),
(44, 'Pasta Boloñesa', 'Bolognese Pasta', 'Pasta con salsa boloñesa', 'Pasta with bolognese sauce', 10, 'pasta.jpg', 'principal'),
(49, 'Zumo de Naranja', 'Orange Juice', 'Zumo de naranja natural', 'Natural orange juice', 3, 'zumo.jpg', 'bebida'),
(50, 'Tarta de Manzana', 'Apple Pie', 'Postre de tarta de manzana', 'Apple pie dessert', 5.5, 'tarta_manzana.jpg', 'postre'),
(52, 'Pimientos morrones asados', 'Roasted bell peppers', 'Pimientos rojos asados a la perfección, pelados y marinados con ajo y aceite de oliva virgen extra.', 'Red peppers roasted to perfection, peeled and marinated with garlic and extra virgin olive oil.', 24, 'pimientos.jpg', 'principal'),
(53, 'Pulpo al carbon quebracho argentino', 'Argentine quebracho charcoal octopus', 'Tiernos trozos de pulpo cocinados a la parrilla con carbón de quebracho argentino, que le da un sabor especial', 'Tender pieces of octopus grilled with Argentine quebracho charcoal, which gives it a special flavor', 24, 'pulpo.jpg', 'principal'),
(55, 'Zamburinas a la brasa', 'Grilled scallops', 'Deliciosas zamburinas cocinadas a la brasa, servidas con una salsa de ajo y perejil.', 'Delicious zamburinas cooked on the grill, served with a garlic and parsley sauce.', 55, 'zamburiñas.jpg', 'principal'),
(56, 'Chorizos y morcillas criollos', 'Creole chorizos and blood sausages', 'Auténticos chorizos y morcillas criollos, cocinados a la brasa hasta que estén crujientes por fuera', 'Authentic Creole chorizos and blood sausages, grilled until crispy on the outside', 33, 'chorizo.jpg', 'principal'),
(58, 'Ensalada de quinoa', 'Quinoa salad', 'Ensalada fresca y nutritiva de quinoa con verduras de temporada, aderezada con un aliño ligero.', 'Fresh and nutritious quinoa salad with seasonal vegetables, dressed with a light dressing.', 22, 'ensalada1.jpg', 'principal'),
(59, 'Asado de tira', 'Strip roast', 'Tradicional corte de carne argentina, cocinado lentamente a la parrilla hasta que esté tierno y jugo', 'Traditional Argentine cut of meat, slowly cooked on the grill until tender and juicy', 67, 'asado.jpg', 'principal'),
(60, 'Lomo alto', 'High back', 'Jugoso lomo alto de ternera, cocinado a la perfección a la parrilla.', 'Juicy top beef tenderloin, cooked to perfection on the grill.', 55, 'lomo.jpg', 'principal'),
(61, 'Milanesa a la napolitana', 'Milanese Neapolitan style', 'Clásica milanesa argentina hecha con la mejor carne de Angus, cubierta con salsa de tomate, mozzarella', 'Classic Argentine Milanese made with the best Angus beef, covered with tomato sauce, mozzarella', 43, 'milanesa.jpg', 'principal'),
(62, 'Mollejas de ternera', 'Veal sweetbreads', 'Mollejas de ternera delicadamente cocinadas a la brasa, servidas con una salsa de chimichurri casera', 'Delicately grilled beef sweetbreads, served with a homemade chimichurri sauce', 37, 'mollejas.jpg', 'principal'),
(64, 'Chocolate con Lotus', 'Chocolate with Lotus', 'Bebida caliente sabor chocolate con crema de galleta Lotus Biscoff recubierto de nata montada ', 'Hot chocolate-flavored drink with Lotus Biscoff cookie cream covered in whipped cream', 7, 'lotus.png', 'bebida'),
(65, 'Frappe Tiramisu', 'Tiramisu Frappe', 'Base de leche con sirope de tiramisú y chocolate mezclado con hielo, recubierto de crema de café, caramelo', 'Milk base with tiramisu syrup and chocolate mixed with ice, covered with coffee cream, caramel', 8, 'frape.png', 'bebida'),
(66, 'Tinto de verano', 'Summer red', 'Tinto de verano con base de sorbete de limón, toque de Martini Rojo,  menta fresca y una rodaja de nuestr limon ', 'Summer red with a lemon sorbet base, a touch of Red Martini, fresh mint and a slice of our lemon', 5, 'tinto.png', 'bebida'),
(67, 'Combinados y licores', 'Mixed drinks and liquors', 'Licores, Pacharán Zoco, Brandry Torres 10 y Orujo de hierbas Ruaviaja, Whisky, Ron, Vodka y Gin Toni', 'Liqueurs, Pacharán Zoco, Brandry Torres 10 and Ruaviaja herbal pomace, Whiskey, Rum, Vodka and Gin Toni', 4, 'licores.png', 'bebida'),
(68, 'Cerveza', 'Beer', 'Copa Mahou, Copa Mahou Sin, Jarra Mahou, San Miguel Fresca.', 'Mahou Cup, Mahou Sin Cup, Mahou Jug, San Miguel Fresca.', 4, 'cerveza.jpg', 'bebida'),
(69, 'Cafe', 'Coffee', 'Espresso, Cortado, Con Leche, Bombón, Cappuccino y Suizo', 'Espresso, Sliced, With Milk, Chocolate, Cappuccino and Swiss', 3, 'cafe.jpg', 'bebida'),
(70, 'infusiones y te', 'infusions and tea', 'Té Negro y Té Verde, Rooibos, Té de Menta, Infusión Tila, Poleo, Manzanilla.', 'Black Tea and Green Tea, Rooibos, Mint Tea, Linden Infusion, Pennyroyal, Chamomile.', 4, 'infusion.png', 'bebida'),
(71, 'Refrescos', 'Refreshments', 'Refrescos de todo tipo, cocacola, fanta, nestea', 'Soft drinks of all kinds, Cocacola, Fanta, Nestea', 4, 'refresco.png', 'bebida'),
(72, 'Tortitas con Chips', 'Pancakes with Chips', 'Tortitas recién hechas rellenas de Chips Ahoy, estrellitas de chocolate blanco, pepitas de chocolate', 'Freshly made pancakes filled with Chips Ahoy, white chocolate stars, chocolate chips', 4, 'torititas.jpg', 'postre'),
(73, 'Tortitas Red Velvet', 'Red Velvet Pancakes', 'Tortitas recién hechas con mousse de cheesecake y trocitos de galleta Lotus Biscoff® con fresas y azucar', 'Freshly made pancakes with cheesecake mousse and Lotus Biscoff cookie pieces with strawberries and sugar', 4, 'tortitas2.jpg', 'postre'),
(74, 'Tortitas con Nocilla', 'Pancakes with Walnut', 'Tortitas recién hechas con Nocilla, estrellitas de chocolate blanco, crujientes barquillos, azúcar', 'Freshly made pancakes with Nocilla, white chocolate stars, crunchy wafers, sugar', 4, 'tortitas3.jpg', 'postre'),
(75, 'Tortitas nata montada', 'Whipped cream pancakes', 'Tortitas recién hechas con nata montada VIPS y sirope de chocolate, caramelo o fresa.', 'Freshly made pancakes with VIPS whipped cream and chocolate, caramel or strawberry syrup.', 4, 'tortitas4.jpg', 'postre'),
(76, 'French Toast', 'French Toast', 'Con fresas, arándanos, crema de queso, mermelada de frutos rojos y muesli crujiente', 'With strawberries, blueberries, cream cheese, red fruit jam and crunchy muesli', 3, 'toast.jpg', 'postre'),
(77, 'Tarta Cremosa de Queso', 'Creamy Cheesecake', 'Tarta templada de queso con toques ahumados, textura muy cremosa y base crujiente de galleta.', '\nWarm cheesecake with smoky touches, very creamy texture and crunchy cookie base.', 5, 'tarta-de-queso.jpg', 'postre'),
(78, 'Tortitas dulce de leche', 'Dulce de leche pancakes', 'Tortitas recién hechas con dulce de leche, plátano y nueces acompañadas de nata montada VIPS', 'Freshly made pancakes with dulce de leche, banana and walnuts accompanied whipped cream', 4, 'tortitas5.jpg', 'postre'),
(79, 'Tarta Chocoalte y Caramelo', 'Chocolate and Caramel Cake', 'Esponjoso bizcocho con mousse de caramelo, crema de caramelo salado y recubierto de bombón', 'Fluffy sponge cake with caramel mousse, salted caramel cream and chocolate coating', 5, 'tarta2jpg.jpg', 'postre'),
(80, 'Batidos', 'Smoothies', 'Elige tu sabor preferido.', 'Choose your favorite flavor.', 4, 'batidos.jpg', 'postre'),
(81, 'Brownie', 'Brownies', 'Bizcocho caliente de chocolate, con nueces, cubierto por un helado de vainilla y con salsa de chocolate', 'Hot chocolate cake, with walnuts, covered by vanilla ice cream and chocolate sauce', 4, 'brownie.jpg', 'postre'),
(82, 'Vasito de Yogur y Muesli', 'Yogurt and Muesli Cup', 'Yogur con arándanos, plátano y muesli de avena', 'Yogurt with blueberries, banana and oat muesli', 4, 'muesli.png', 'postre'),
(83, 'Fruta de Temporada', 'Season\'s fruit', 'Selección de frutas de temporada.', 'Selection of seasonal fruits.', 3, 'fruta.jpg', 'postre'),
(84, 'Helados', 'Ice creams', 'Dos bolas de helado a elegir: fresa, vainilla, chocolate blanco, yogur con arándanos o chocolate belga', 'Choose two scoops of ice cream: strawberry, vanilla, white chocolate, blueberry yogurt or Belgian chocolate', 5, 'helados.jpg', 'postre'),
(88, 'Zumo de Piña', 'Pineapple Juice', 'Zumo de piña natural', 'Natural pineapple juice', 3, 'zumo_piña.png', 'bebida'),
(99, 'Ensalada de Pollo', 'Chicken Salad', 'Ensalada fresca con pollo', 'Fresh salad with chicken', 9, 'ensaladapollo.jpg', 'principal'),
(333, 'Helado de Chocolate', 'Chocolate Ice Cream', 'Postre de helado de chocolate', 'Chocolate ice cream dessert', 4.5, 'helado_chocolate.jpg', 'postre'),
(455, 'Sangría de Vino Blanco', 'White Wine Sangria', 'Bebida refrescante de vino blanco y frutas', 'Refreshing drink of white wine and fruits', 5.5, 'sangria.png', 'bebida'),
(737, 'Vino Rosado', 'Rosé Wine', 'Vino rosado de la casa', 'House rosé wine', 4.5, 'vino-rosado.jpg', 'bebida'),
(778, 'Cerveza de Trigo', 'Wheat Beer', 'Cerveza de trigo', 'Wheat beer', 4, 'cerveza_trigo.jpg', 'bebida'),
(799, 'Tarta de Limón', 'Lemon Cake', 'Postre de tarta de limón', 'Lemon cake dessert', 6, 'tarta_limon.jpg', 'postre'),
(888, 'Tarta de Almendras', 'Almond Cake', 'Postre de tarta de almendras', 'Almond cake dessert', 6.5, 'tarta_almendras.jpg', 'postre'),
(996, 'Pollo al Ajillo', 'Garlic Chicken', 'Pollo al ajillo', 'Garlic chicken', 12, 'pollo-ajillo.jpg', 'principal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(4) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `titulo_en` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `descripcion_en` varchar(200) NOT NULL,
  `fotos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `titulo`, `titulo_en`, `descripcion`, `descripcion_en`, `fotos`) VALUES
(1, 'Platos Gourmet', 'Gourmet Dishes', 'La tercera foto destaca algunos de los platos gourmet que se sirven, cada uno presentado como una obra de arte culinaria.', 'The third photo highlights some of the gourmet dishes served, each presented as a work of culinary art.', 'mesa2.avif'),
(2, 'El Chef en Acción', 'The Chef in Action', '“El Chef en Acción”: La última foto presenta al chef preparando meticulosamente cada plato, asegurando que cada bocado sea perfecto.', 'The last photo features the chef meticulously preparing each dish, ensuring that every bite is perfect.', 'mesa3.avif'),
(3, 'La Entrada Majestuosa', 'The Majestic Entrance', 'La primera foto captura la entrada grandiosa del restaurante, prometiendo una experiencia culinaria inolvidable', 'The first photo captures the restaurant\'s grand entrance, promising an unforgettable dining experience.', 'mesa5.jpg'),
(4, 'El Comedor Elegante', 'The Elegant Dining Room', 'The second photo shows the luxurious dining room, with well-placed tables and sophisticated decoration that reflects the quality of the dishes served', 'La segunda foto muestra el comedor lujoso, con mesas bien puestas y una decoración sofisticada que refleja la calidad de los platos que se sirven.', 'troncos.png'),
(5, 'Gastronomía Exquisita', 'Exquisite Gastronomy', 'La tercera foto resalta algunos de nuestros platos estrella, presentados con una estética impecable que deleita tanto a la vista como al paladar.', 'The third photo highlights some of our star dishes, presented with an impeccable aesthetic that delights both the eye and the palate.', 'atico.jpg'),
(6, 'Pasión por la Cocina', 'Passion for Cooking', 'Pasión por la Cocina”: La última foto muestra a nuestro chef, cuya habilidad y dedicación se reflejan en cada plato que sale de nuestra cocina.', 'The last photo shows our chef, whose skill and dedication are reflected in every dish that comes out of our kitchen.', 'mesa.webp');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carta`
--
ALTER TABLE `carta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carta`
--
ALTER TABLE `carta`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=997;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
