<?php
​
namespace App\Repositories;
​
use Illuminate\Database\Eloquent\Model;
​
interface EloquentRepositoryInterface
{
   public function all();
   public function allBy($condition, $attribute);
   public function create(array $attributes);
   public function get($id);
   public function update($id, array $attributes);
   public function getBY($condition, $attrbiute);
}
?>