<?php
​
namespace App\Repositories\Eloquent;
use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
​
class MedicineRepository implements EloquentRepositoryInterface
{
    protected $model;
​
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
​
    public function all()
    {
        return $this->model->all();
    }
​
    public function allBy($condition, $attribute)
    {
        return $this->model->where($condition, $attribute)->latest()->get();
    }
​
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }
​
    public function get($id)
    {
        return $this->model->find($id);
    }
​
    public function update($id, array $attributes)
    {
        return $this->model->find($id)->update($attributes);
    }
​
    public function getBY($condition, $attribute)
    {
        return $this->model->where($condition, $attribute)->first();
    }
}