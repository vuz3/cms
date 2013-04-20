<?php

/**
 * 
 * @author Przemyslaw Kotlowski <john.doe@example.com>
 */
class Model_Pagination extends Model {

    public $table_name = '';

    public function __construct($table_name) {
        $this->table_name = $table_name;

        return $this->table_name;
    }

    /**
     * Count all data from db
     * 
     * @return int
     */
    public function count_data() {
        $query = DB::select()->from($this->table_name)->execute()->count();
        return $query;
    }

    /**
     * Function to load data in limit and offset segregate
     * 
     * @param int $limit
     * @param int $offset
     * @return array
     */
    public function load_segregate_element($limit, $offset) {
        $query = DB::query(1, 'SELECT * 
                               FROM `' . $this->table_name . '` 
                               ORDER BY `id` ASC LIMIT :limit OFFSET :offset')
                ->parameters(array(':limit' => $limit, ':offset' => $offset));
        return $query->execute();
    }

    /**
     * Method to display one single data
     * 
     * @param int $id
     * @return object
     */
    public function show_one_data($id) {
        $query = DB::select('title', 'content', 'date')
                ->from($this->table_name)
                ->where('id', '=', $id)
                ->as_object()
                ->execute();
        return $query;
    }

}
