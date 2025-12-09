<?php
/**
 * MODELO: BookModel.php
 * Gestiona la lógica de negocio y la interacción con la base de datos 
 * para obtener información sobre libros y categorías.
 */
class BookModel {
    /**
     * Obtiene una lista específica de categorías para el widget circular.
     * @return array Array de objetos o nombres de categorías.
     */
    public function get_widget_categories() {
        
        // Define el listado de las 9 categorías que deseas mostrar.
        // NOTA: Estas deben coincidir exactamente con los 'slugs' o nombres 
        // de las categorías creadas en el panel de administración de WordPress.
        $category_names = [
            'literatura', 
            'ciencia', 
            'historia', 
            'arte', 
            'filosofia', 
            'romance', 
            'terror', 
            'ficcion', 
            'ninos'
        ];

        // 1. Parámetros de la consulta
        $args = array(
            'taxonomy'   => 'category', // O 'product_cat' si usas WooCommerce
            'hide_empty' => true,      // Solo muestra categorías que tengan publicaciones
            'slug'       => $category_names, // Filtra por los slugs exactos
            'orderby'    => 'slug',
            'order'      => 'ASC'
        );

        // 2. Ejecutar la consulta a la base de datos
        // El Modelo interactúa con la BD a través de get_terms
        $categories = get_terms($args);

        if (is_wp_error($categories) || empty($categories)) {
            // Devuelve un arreglo vacío o un error si no se encuentran
            return []; 
        }

        return $categories;
    }
}