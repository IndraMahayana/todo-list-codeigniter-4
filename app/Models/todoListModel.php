<?php 
namespace App\Models;
use CodeIgniter\Model;

class todoListModel extends Model {
    protected $table="todo_list";
    protected $primaryKey="id";
    protected $allowedFields=['id', 'description'];
}