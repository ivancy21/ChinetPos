<?php
namespace App\Contracts;
interface pharmacyRepository {
    public function getByPharmacyId($pharmacyId);
    public function getById($id);
    public function paginate();
}
