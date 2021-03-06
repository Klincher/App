<?php

namespace App\Repositories;

use App\Models\Weapon;

class WeaponRepository extends BaseRepository
{
    public $model;

    /**
     * construct
     *
     * @param \App\Models\Weapon $weapon
     */
    public function __construct(Weapon $weapon)
    {
        $this->model = $weapon;
    }

    /**
     * saveWeapon
     *
     * @param array $data
     * @return void
     */
    public function saveWeapon(array $data): void
    {
        $this->model->name = $data['weapon'];
        $this->model->save();
    }
}
