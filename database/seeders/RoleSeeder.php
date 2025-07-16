<?php
use Spatie\Permission\Models\Role;

Role::create(['name' => 'admin']);
Role::create(['name' => 'seller']);
Role::create(['name' => 'buyer']);
