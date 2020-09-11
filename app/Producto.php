<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

// Generalmente cada vez que creamos una clase tenemos que indicar el espacio de nombres
// dónde la estamos creando y suele coincidir con el nombre del directorio.
// El nombre del namespace debe comenzar por UNA LETRA MAYÚSCULA.
// Para más información ver contenido clase Model.php (CTRL + P en Sublime) de Eloquent para ver los atributos disponibles.
// Documentación completa de Eloquent ORM en: http://laravel.com/

class Producto extends Model
{

    // Nombre de la tabla en MySQL.
    protected $table='productos';
    
    // Eloquent asume que cada tabla tiene una clave primaria con una columna llamada id.
	// Si éste no fuera el caso entonces hay que indicar cuál es nuestra clave primaria en la tabla:
	protected $primaryKey = 'idProducto';

	// Atributos que se pueden asignar de manera masiva.
/*protected $fillable = array('referencia',
                                'descripcion',
                                'descripcion_orta',                                
                                'stock',
                                'stock_min',
                                'aviso_min',
                                'impuesto',
                                'idUbicacion',
                                'precio_compra',
                                'precio_almacen',
                                'precio_tienda',
                                'precio_pvp',
                                'precio_iva',
                                'codigo_barras',
                                'imagen',
                                'borrado'


        );
        */
	
	// Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
//	protected $hidden = ['created_at','updated_at']; 

	// Definimos a continuación la relación de esta tabla con otras.
	// Ejemplos de relaciones:
	// 1 usuario tiene 1 teléfono   ->hasOne() Relación 1:1
	// 1 teléfono pertenece a 1 usuario   ->belongsTo() Relación 1:1 inversa a hasOne()
	// 1 post tiene muchos comentarios  -> hasMany() Relación 1:N 
	// 1 comentario pertenece a 1 post ->belongsTo() Relación 1:N inversa a hasMany()
	// 1 usuario puede tener muchos roles  ->belongsToMany()
	//  etc..


	// Relación de Producto con categoria:
	/*public function Categoria()
	{
		// 1 Producto tiene muchas Categoria
	
		return $this->hasMany('App\Categoria');
    }*/
    
}
