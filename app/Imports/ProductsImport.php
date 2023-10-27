namespace App\Imports;

use Spatie\SimpleExcel\SimpleExcelImporter;
use App\Models\Product;

class ProductsImport extends SimpleExcelImporter
{
public function model(): Model
{
return Product::class;
}

public function map($row): array
{
return [
'name' => $row['name'],
'description' => $row['description'] ?? null,
'category' => $row['category'],
'image' => $row['image'],
'price' => $row['price'],
];
}
}