## Simple CRUD To Do List

#### 1. Required
- composer
- php v.8

#### 2. Create database
Create a database and table with the name you want. in it fill with integer data for the primary key and varchar data for the description todolist

#### 3. Connect to local database
Go to `.env` file and change this

    {
        database.default.hostname = localhost
        database.default.database = Your database name
        database.default.username = root
        database.default.password = 
        database.default.DBDriver = MySQLi
    }

#### 4. Connect to table
Go to `todoListModel.php` file in `app/Models.php` folder

    protected $table="your_table_name";
    protected $primaryKey="your_primary_key-name";
    protected $allowedFields=['your_primary_key_name', 'your_varchar_data_name'];
